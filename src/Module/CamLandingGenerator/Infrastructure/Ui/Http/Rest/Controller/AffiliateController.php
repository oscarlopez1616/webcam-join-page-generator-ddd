<?php

declare(strict_types=1);

namespace AuditorFramework\Module\CamLandingGenerator\Infrastructure\Ui\Http\Rest\Controller;

use Exception;
use JMS\Serializer\Serializer;
use TheCodeFighters\Bundle\AuditorFramework\Common\Types\Application\CommandBus;
use TheCodeFighters\Bundle\AuditorFramework\Common\Types\Application\QueryBus;
use TheCodeFighters\Bundle\AuditorFramework\Common\Types\Infrastructure\Ui\Http\Rest\Resource\CommandRestResource;
use TheCodeFighters\Bundle\AuditorFramework\Common\Utils\Assertion\InfrastructureAssertion;
use AuditorFramework\Module\CamLandingGenerator\Application\Command\CreateAffiliate\CreateAffiliateCommand;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AffiliateController
{

    /**
     * @var CommandBus
     */
    private $commandBus;
    /**
     * @var QueryBus
     */
    private $queryBus;
    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(
        CommandBus $commandBus,
        QueryBus $queryBus,
        Serializer $serializer
    ) {
        $this->commandBus = $commandBus;
        $this->queryBus = $queryBus;
        $this->serializer = $serializer;
    }

    protected function namespaces(): array
    {
        return array('cams_landing_generator', 'cam_unit');
    }


    /**
     * @Route("/", name="post_affiliate", methods={"Post"})
     *
     * @param Request $request
     * @return JsonResponse
     * @throws Exception
     */
    public function postAffiliate(
        Request $request
    ): JsonResponse {

        //$this->denyAccessUnlessGranted(LoanControllerVoter::POST_LOAN);

        $data = json_decode($request->getContent(), true);

        InfrastructureAssertion::keyExists($data, 'id');
        InfrastructureAssertion::keyExists($data, 'affiliate_name');
        InfrastructureAssertion::keyExists($data, 'affiliate_url');
        InfrastructureAssertion::keyExists($data, 'cum_louder_tracking_code');
        InfrastructureAssertion::keyExists($data, 'cum_louder_web_cams_tracking_code');
        InfrastructureAssertion::keyExists($data, 'css_path');
        InfrastructureAssertion::keyExists($data, 'analytics_code');

        InfrastructureAssertion::isString($data['id']);
        InfrastructureAssertion::isString($data['affiliate_name']);
        InfrastructureAssertion::isString($data['affiliate_url']);
        InfrastructureAssertion::isString($data['cum_louder_tracking_code']);
        InfrastructureAssertion::isString($data['cum_louder_web_cams_tracking_code']);
        InfrastructureAssertion::isString($data['css_path']);
        InfrastructureAssertion::isString($data['analytics_code']);

        $command = new CreateAffiliateCommand(
            $data['id'],
            $data['affiliate_name'],
            $data['affiliate_url'],
            $data['cum_louder_tracking_code'],
            $data['cum_louder_web_cams_tracking_code'],
            $data['css_path'],
            $data['analytics_code']
        );

        $this->commandBus->dispatch($command);

        $commandRestResource = new CommandRestResource($this->namespaces(), $data['id']);

        return new JsonResponse($this->serializer->serialize($commandRestResource, 'json'), 201);
    }
}

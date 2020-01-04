<?php

declare(strict_types=1);

namespace WebCamScrapper\Module\CamLandingGenerator\Infrastructure\Ui\Http\Rest\Controller;

use Exception;
use JMS\Serializer\Serializer;
use TheCodeFighters\Bundle\AuditorFramework\Common\Types\Application\CommandBus;
use TheCodeFighters\Bundle\AuditorFramework\Common\Types\Application\QueryBus;
use TheCodeFighters\Bundle\AuditorFramework\Common\Types\Infrastructure\Ui\Http\Rest\Resource\CommandRestResource;
use TheCodeFighters\Bundle\AuditorFramework\Common\Utils\Assertion\InfrastructureAssertion;
use WebCamScrapper\Module\CamLandingGenerator\Application\Command\CreateCamUnit\CreateCamUnitCommand;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CamUnitController
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
     * @Route("/", name="post_cam_unit", methods={"Post"})
     *
     * @param Request $request
     * @return JsonResponse
     * @throws Exception
     */
    public function postCamUnit(
        Request $request
    ): JsonResponse {

        //$this->denyAccessUnlessGranted(LoanControllerVoter::POST_LOAN);

        $data = json_decode($request->getContent(), true);

        InfrastructureAssertion::keyExists($data, 'id');
        InfrastructureAssertion::isUuid($data['id']);

        $command = new CreateCamUnitCommand(
            $data['id']
        );

        $this->commandBus->dispatch($command);

        $commandRestResource = new CommandRestResource($this->namespaces(), $data['id']);

        return new JsonResponse($this->serializer->serialize($commandRestResource, 'json'), 201);
    }
}

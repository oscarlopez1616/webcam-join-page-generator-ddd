<?php

declare(strict_types=1);

namespace AuditorFramework\Module\CamLandingGenerator\Infrastructure\Ui\Http\Rest\Controller;

use Exception;
use JMS\Serializer\Serializer;
use TheCodeFighters\Bundle\AuditorFramework\Common\Types\Application\CommandBus;
use TheCodeFighters\Bundle\AuditorFramework\Common\Types\Application\QueryBus;
use TheCodeFighters\Bundle\AuditorFramework\Common\Utils\Assertion\InfrastructureAssertion;
use AuditorFramework\Module\CamLandingGenerator\Application\Query\FindJoinPageByAffiliateUrl\FindJoinPageByAffiliateUrlQuery;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class JoinPageController
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
        return array('cams_landing_generator', 'join_page');
    }


    /**
     * @Route("/{id}/", name="get_join_page", methods={"Get"})
     *
     * @param string $id
     * @return JsonResponse
     * @throws Exception
     */
    public function getJoinPage(
        string $id
    ): JsonResponse {

        //$this->denyAccessUnlessGranted(LoanControllerVoter::POST_LOAN);

        InfrastructureAssertion::notEmptyString($id);

        $query = new FindJoinPageByAffiliateUrlQuery(
            urldecode($id)
        );


        return new JsonResponse(
            json_decode(
                $this->serializer->serialize(
                    $this->queryBus->dispatch($query),
                    'json'
                ),
                true
            ),
            200
        );
    }
}

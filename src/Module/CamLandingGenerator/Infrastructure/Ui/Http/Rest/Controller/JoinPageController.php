<?php

declare(strict_types=1);

namespace AuditorFramework\Module\CamLandingGenerator\Infrastructure\Ui\Http\Rest\Controller;

use AuditorFramework\Module\CamLandingGenerator\Application\Query\FindJoinPageByAffiliateUrl\FindJoinPageByAffiliateUrlQuery;
use Exception;
use JMS\Serializer\Serializer;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use TheCodeFighters\Bundle\AuditorFramework\Common\Types\Application\CommandBus;
use TheCodeFighters\Bundle\AuditorFramework\Common\Types\Application\QueryBus;
use TheCodeFighters\Bundle\AuditorFramework\Common\Utils\Assertion\InfrastructureAssertion;

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
     * @Route("/{id}/{page}/", name="get_join_page", methods={"Get"})
     *
     * @param string $id
     * @param int $page
     * @return JsonResponse
     * @throws Exception
     */
    public function getJoinPage(
        string $id,
        int $page
    ): JsonResponse {

        InfrastructureAssertion::notEmptyString($id);
        InfrastructureAssertion::isInteger($page);

        $query = new FindJoinPageByAffiliateUrlQuery(
            urldecode($id),
            $page
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

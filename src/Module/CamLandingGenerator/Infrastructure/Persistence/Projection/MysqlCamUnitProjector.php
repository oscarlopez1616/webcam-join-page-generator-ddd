<?php
declare(strict_types=1);

namespace WebCamScrapper\Module\CamLandingGenerator\Infrastructure\Persistence\Projection;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DBALException;
use Exception;
use Prooph\EventStore\Projection\AbstractReadModel;
use Psr\Cache\CacheItemPoolInterface;
use Psr\Cache\InvalidArgumentException;
use TheCodeFighters\Bundle\AuditorFramework\Common\Types\Domain\Uuid;
use WebCamScrapper\Module\CamLandingGenerator\Domain\ReadModel\CamUnitProjector;

class MysqlCamUnitProjector extends AbstractReadModel implements CamUnitProjector
{
    /**
     * @var Connection
     */
    private $connection;
    /**
     * @var CacheItemPoolInterface
     */
    private $cache;

    public function __construct(
        Connection $connection,
        CacheItemPoolInterface $cache
)
    {
        $this->connection = $connection;
        $this->cache = $cache;
    }

    public function init(): void
    {
        /**
         * TODO
         */
    }

    /**
     * @return bool
     *
     * @throws DBALException
     */
    public function isInitialized(): bool
    {
        return $this->isTableInitialized('cam_landing_generator_cam_unit')
            && $this->isTableInitialized('cam_landing_generator_cam_unit_content')
            && $this->isTableInitialized('cam_landing_generator_cam_unit_cam_unit_content');
    }

    /**
     * @param string $table
     * @return bool
     * @throws DBALException
     */
    private function isTableInitialized(string $table): bool
    {
        return (bool) $this
            ->connection
            ->executeQuery("SHOW TABLES like '$table'")
            ->rowCount();
    }

    /**
     * @throws DBALException
     */
    public function reset(): void
    {
        /**
         * TODO
         */
    }

    /**
     * @throws DBALException
     */
    public function delete(): void
    {
        /**
         * TODO
         */
    }

    /**
     * @param array $data
     */
    public function remove(array $data): void
    {
        /**
         * TODO
         */
    }

    /**
     * @param array $data
     * @throws DBALException
     * @throws InvalidArgumentException
     * @throws Exception
     */
    public function insert(array $data)
    {
        $dataCopy = $data;
        unset($dataCopy['0']);

        $this->connection->insert(
            'cam_landing_generator_cam_unit',
            $dataCopy
        );

        foreach ($data['0']['cam_units'] as $camUnitContent){
            $camUnitContent['id'] = Uuid::create()->value();
            $this->connection->insert('cam_landing_generator_cam_unit_content', $camUnitContent);
            $this->connection->insert(
                'cam_landing_generator_cam_unit_cam_unit_content',
                [
                    'cam_unit_id'=>$data['id'],
                    'cam_unit_content_id'=> $camUnitContent['id']
                ]
            );
        }

        $this->cache->invalidateTags([('joinPage'.'-'.$data['id'])]);

    }

    /**
     * @param array $data
     * @param array $id
     * @throws DBALException
     * @throws Exception
     */
    public function update(array $data, array $id)
    {
        $dataCopy = $data;
        unset($dataCopy['0']);

        foreach ($data['0']['cam_units'] as $camUnitContent){
            $camUnitContent['id'] = Uuid::create()->value();
            $this->connection->update('cam_landing_generator_cam_unit_content', $camUnitContent,$id);
        }

        $this->cache->invalidateTags([('joinPage'.'-'.$id['id'])]);
    }

}

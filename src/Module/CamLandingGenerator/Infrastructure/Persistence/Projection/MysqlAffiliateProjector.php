<?php
declare(strict_types=1);

namespace WebCamScrapper\Module\CamLandingGenerator\Infrastructure\Persistence\Projection;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DBALException;
use Prooph\EventStore\Projection\AbstractReadModel;
use Psr\Cache\CacheItemPoolInterface;
use Psr\Cache\InvalidArgumentException;
use WebCamScrapper\Module\CamLandingGenerator\Domain\ReadModel\AffiliateProjector;

class MysqlAffiliateProjector extends AbstractReadModel implements AffiliateProjector
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
        return $this->isTableInitialized('cam_landing_generator_affiliate');
    }

    /**
     * @param string $table
     * @return bool
     * @throws DBALException
     */
    private function isTableInitialized(string $table): bool
    {
        return (bool)$this
            ->connection
            ->executeQuery("SHOW TABLES like '$table'")
            ->rowCount();
    }

    /**
     * @throws DBALException
     */
    public function reset(): void
    {
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
     * @throws DBALException
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
     */
    public function insert(array $data)
    {
        $this->connection->insert(
            'cam_landing_generator_affiliate',
            $data
        );
        $this->cache->deleteItem(urlencode($data['id']));
    }

    /**
     * @param array $data
     * @param array $id
     *\
     * @throws DBALException
     */
    public function update(array $data, array $id)
    {
        /**
         * TODO
         */
    }

    /**
     * @throws DBALException
     */
    private function disableForeignKeys(): void
    {
        $this->connection->executeQuery("SET FOREIGN_KEY_CHECKS=0;");
    }

    /**
     * @throws DBALException
     */
    private function enableForeignKeys(): void
    {
        $this->connection->executeQuery("SET FOREIGN_KEY_CHECKS=1;");
    }
}

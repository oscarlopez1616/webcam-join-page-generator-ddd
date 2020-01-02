<?php
declare(strict_types=1);

namespace AuditorFramework\Module\CamLandingGenerator\Infrastructure\Persistence\Projection;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DBALException;
use Exception;
use AuditorFramework\Module\CamLandingGenerator\Domain\ReadModel\AffiliateProjector;
use Prooph\EventStore\Projection\AbstractReadModel;
use Psr\Cache\CacheItemPoolInterface;
use Psr\Cache\InvalidArgumentException;

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

    /**
     * @throws DBALException
     */
    public function init(): void
    {
        $this->disableForeignKeys();

        /*$this->connection->executeQuery(<<<SQL
            create table auditor_framework.risk_borrower_bank_reader
            (
                id                                 char(36)     not null comment '(DC2Type:guid)'
                    primary key,
                play_head                          int          not null,
                created_at                         datetime     not null comment '(DC2Type:datetime_immutable)',
                updated_at                         datetime     not null,
                credentials_tokens                 json         not null comment '(DC2Type:json)',
                cloud_document_name                varchar(255) null,
                cloud_document_format              varchar(8)   null,
                cloud_document_date                datetime     null,
                cloud_document_is_public           tinyint(1)   null,
                cloud_document_type_value varchar(127) null
            )
                collate = utf8mb4_unicode_ci;
            SQL
        );

        $this->connection->executeQuery(<<<SQL
            create table auditor_framework.risk_bank_reader_bank_account
            (
                bank_reader_id  char(36) not null comment '(DC2Type:guid)',
                bank_account_id char(36) not null comment '(DC2Type:guid)',
                primary key (bank_reader_id, bank_account_id),
                constraint UNIQ_D8F9FB2C12CB990C
                    unique (bank_account_id),
                constraint FK_D8F9FB2C12CB990C
                    foreign key (bank_account_id) references auditor_framework.risk_bank_account (id)
                        on delete cascade,
                constraint FK_D8F9FB2C64FA81AE
                    foreign key (bank_reader_id) references auditor_framework.risk_borrower_bank_reader (id)
                        on delete cascade
            )
                collate = utf8mb4_unicode_ci;

            create index IDX_D8F9FB2C64FA81AE
                on auditor_framework.risk_bank_reader_bank_account (bank_reader_id);
            SQL
        );

        $this->connection->executeQuery(<<<SQL
            create table auditor_framework.risk_bank_reader_bank_account_statement
            (
                bank_account_id char(36) not null comment '(DC2Type:guid)',
                statement_id    int      not null,
                primary key (bank_account_id, statement_id),
                constraint UNIQ_B48D0C31849CB65B
                    unique (statement_id),
                constraint FK_B48D0C3112CB990C
                    foreign key (bank_account_id) references auditor_framework.risk_bank_account (id)
                        on delete cascade,
                constraint FK_B48D0C31849CB65B
                    foreign key (statement_id) references auditor_framework.risk_bank_reader_statement (id)
                        on delete cascade
            )
                collate = utf8mb4_unicode_ci;

            create index IDX_B48D0C3112CB990C
                on auditor_framework.risk_bank_reader_bank_account_statement (bank_account_id);
            SQL
        );

        $this->connection->executeQuery(<<<SQL
            create table auditor_framework.risk_bank_account
            (
                id                      char(36)     not null comment '(DC2Type:guid)'
                    primary key,
                created_at              datetime     not null comment '(DC2Type:datetime_immutable)',
                updated_at              datetime     not null,
                creation_date           datetime     null comment '(DC2Type:datetime_immutable)',
                last_updated            datetime     not null,
                account_holders         json         not null comment '(DC2Type:json)',
                account_number_value    varchar(255) not null,
                account_name_value      varchar(255) not null,
                bank_info_bank_id       int          not null,
                bank_info_bank_group_id int          not null,
                bank_info_bank_name     varchar(255) not null,
                balance_currency_value  varchar(4)   null,
                balance_amount_value    double       null
            )
                collate = utf8mb4_unicode_ci;
            SQL
        );

        $this->connection->executeQuery(<<<SQL
            create table auditor_framework.risk_bank_reader_statement
            (
                id                                     int auto_increment
                    primary key,
                value_date                             datetime     not null comment '(DC2Type:datetime_immutable)',
                deposit_date                           datetime     not null comment '(DC2Type:datetime_immutable)',
                import_date                            datetime     not null comment '(DC2Type:datetime_immutable)',
                beneficiary                            varchar(255) null,
                concepts                               json         not null comment '(DC2Type:json)',
                statement_categories_by_hierarchy_desc json         not null comment '(DC2Type:json)',
                bank_reference_value                   varchar(255) null,
                currency_value                         varchar(4)   null,
                amount_value                           double       null,
                balance_value                          double       null
            )
                collate = utf8mb4_unicode_ci;
            SQL
        );

        $this->enableForeignKeys();
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
        $this->disableForeignKeys();
        $this->connection->executeQuery("TRUNCATE TABLE auditor_framework.risk_borrower_bank_reader;");
        $this->enableForeignKeys();
    }

    /**
     * @throws DBALException
     */
    public function delete(): void
    {
        $this->disableForeignKeys();
        $this->connection->executeQuery("DROP TABLE auditor_framework.risk_borrower_bank_reader;");
        $this->connection->executeQuery("DROP TABLE auditor_framework.risk_bank_reader_bank_account;");
        $this->connection->executeQuery("DROP TABLE auditor_framework.risk_bank_reader_bank_account_statement;");
        $this->connection->executeQuery("DROP TABLE auditor_framework.risk_bank_account;");
        $this->connection->executeQuery("DROP TABLE auditor_framework.risk_bank_reader_statement;");
        $this->enableForeignKeys();
    }

    /**
     * @param array $data
     * @throws DBALException
     */
    public function remove(array $data): void
    {
        $id = $data['id'];
        $this->connection->executeQuery(
            "DELETE
                    FROM auditor_framework.risk_bank_reader_statement
                    WHERE id IN (
                        SELECT statement_id
                        FROM auditor_framework.risk_bank_reader_bank_account_statement
                        WHERE bank_account_id IN (
                            SELECT bank_account_id
                            FROM auditor_framework.risk_bank_reader_bank_account
                            WHERE bank_reader_id = '$id'
                        )
                    );"
        );
        $this->connection->executeQuery(
            "DELETE
                    FROM auditor_framework.risk_bank_account
                    WHERE id IN (
                        SELECT bank_account_id
                        FROM auditor_framework.risk_bank_reader_bank_account
                        WHERE bank_reader_id = '$id'
                    );"
        );
        $this->connection->executeQuery(
            "DELETE
                    FROM auditor_framework.risk_borrower_bank_reader
                    WHERE id = '$id';"
        );
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
        $this->disableForeignKeys();

        if (isset($data['bank_accounts_data'])) {
            $bankAccountsData = $data['bank_accounts_data'];
            unset($data['bank_accounts_data']);

            foreach ($bankAccountsData as $bankAccountData) {
                try {
                    $bankReaderBankAccountData = $bankAccountData['bank_reader_bank_account_data'];
                    unset($bankAccountData['bank_reader_bank_account_data']);

                    $this->connection->insert(
                        'auditor_framework.risk_bank_reader_bank_account',
                        $bankReaderBankAccountData,
                        );

                    $bankReaderStatementsData = $bankAccountData['bank_reader_statements_data'];
                    unset($bankAccountData['bank_reader_statements_data']);

                    foreach ($bankReaderStatementsData as $bankReaderStatementData) {
                        $bankReaderBankAccountStatementData =
                            $bankReaderStatementData['bank_reader_bank_account_statement_data'];
                        unset($bankReaderStatementData['bank_reader_bank_account_statement_data']);

                        $this->connection->insert(
                            'auditor_framework.risk_bank_reader_statement',
                            $bankReaderStatementData
                        );

                        $bankReaderBankAccountStatementData['statement_id'] = $this->connection->lastInsertId();

                        $this->connection->insert(
                            'auditor_framework.risk_bank_reader_bank_account_statement',
                            $bankReaderBankAccountStatementData
                        );
                    }

                    $this->connection->insert('auditor_framework.risk_bank_account', $bankAccountData);
                } catch (Exception $e) {
                }
            }
        }

        $this->connection->update('auditor_framework.risk_borrower_bank_reader', $data, $id);

        $this->enableForeignKeys();
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

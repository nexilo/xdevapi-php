<?php
namespace mysql_xdevapi;

class Session
{
    private function __construct()
    {
    }

    public function executeSql(string $statement): object
    {
    }

    public function sql(string $query)
    {
    }

    public function quoteName(string $name)
    {
    }

    public function getServerVersion(): int
    {
    }

    public function getClientId(): string
    {
    }

    public function generateUUID(): string
    {
    }

    public function createSchema(string $schema_name): Schema
    {
    }

    public function dropSchema(string $schema_name): bool
    {
    }

    public function getSchemas(): array
    {
    }

    public function getSchema(): Schema
    {
    }

    public function startTransaction(): void
    {
    }

    public function commit(): object
    {
    }

    public function rollback(): void
    {
    }

    public function setSavepoint($name = null): string
    {
    }

    public function rollbackTo(string $name = null): void
    {
    }

    public function releaseSavepoint(string $name = null): void
    {
    }

    public function listClients(): array
    {
    }

    public function killClient(int $client_id): object
    {
    }

    public function close(): void
    {
    }
}

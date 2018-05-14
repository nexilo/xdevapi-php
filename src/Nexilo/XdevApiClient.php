<?php
namespace Nexilo;

use mysql_xdevapi\Exception;
use mysql_xdevapi\Session;

class XdevApiClient
{
    /**
     * Scheme DSN string pattern
     */
    private const STRING_DSN = 'mysqlx://%s:%s@%s:%d/%s';

    /**
     * @var string
     */
    private $dsn;

    /**
     * @var Session
     */
    private $session;

    /**
     * Client constructor.
     * @param string $user
     * @param string $password
     * @param string $hostname
     * @param string $schema
     * @param int $port
     */
    public function __construct(string $user = '', string $password = '', string $hostname = '', string $schema = '', int $port = 33060)
    {
        $this->dsn = vsprintf(self::STRING_DSN, [$user, $password, $hostname, $port, $schema]);
    }

    /**
     * Overwrites default dsn
     *
     * @param string $dsn
     */
    public function setDsn(string $dsn): void
    {
        $this->dsn = $dsn;
    }

    /**
     * Method for getting raw session data
     *
     * @return Session
     */
    public function getRawSession(): Session
    {
        return \mysql_xdevapi\getSession($this->dsn);
    }

    /**
     * Method for getting session and error exception if cannot connect to database
     *
     * @return Session
     */
    public function getSession(): Session
    {
        // xdevapi connection workaround
        try {
            $this->session = $this->getRawSession();
        } catch (\Throwable $e) {
            $this->throwException($e->getMessage());
        }

        if ($this->session === null) {
            $this->throwException('Cannot connect to database');
        }

        return $this->session;
    }

    /**
     * @param string $message
     */
    private function throwException(string $message)
    {
        throw new Exception($message);
    }
}

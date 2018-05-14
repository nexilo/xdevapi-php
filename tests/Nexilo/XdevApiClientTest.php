<?php
namespace Nexilo;

use mysql_xdevapi\Session;
use PHPUnit\Framework\TestCase;

class XdevApiClientTest extends TestCase
{
    public function testFromConfig()
    {
        $client = new XdevApiClient(
            $_SERVER['MYSQL_TEST_MYSQL_USER'],
            $_SERVER['MYSQL_TEST_MYSQL_PASSWORD'],
            $_SERVER['MYSQL_TEST_HOST'],
            $_SERVER['MYSQL_TEST_MYSQL_DATABASE']
        );

        $this->assertInstanceOf(Session::class, $client->getSession());
    }

    public function testFromConfigRaw()
    {
        $client = new XdevApiClient(
            $_SERVER['MYSQL_TEST_MYSQL_USER'],
            $_SERVER['MYSQL_TEST_MYSQL_PASSWORD'],
            $_SERVER['MYSQL_TEST_HOST'],
            $_SERVER['MYSQL_TEST_MYSQL_DATABASE']
        );

        $this->assertInstanceOf(Session::class, $client->getRawSession());
    }

    /**
     * @expectedException \mysql_xdevapi\Exception
     */
    public function testConnectionException()
    {
        $client = new XdevApiClient(
            $_SERVER['MYSQL_TEST_MYSQL_USER'],
            'random_pass_'.time(),
            $_SERVER['MYSQL_TEST_HOST'],
            $_SERVER['MYSQL_TEST_MYSQL_DATABASE']
        );

        $client->getSession();
    }
}

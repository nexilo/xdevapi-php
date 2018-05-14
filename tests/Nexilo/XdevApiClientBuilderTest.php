<?php
/**
 * Created by PhpStorm.
 * User: kamil
 * Date: 14.05.2018
 * Time: 19:31
 */

namespace Nexilo;


use mysql_xdevapi\Session;
use PHPUnit\Framework\TestCase;

class XdevApiClientBuilderTest extends TestCase
{
    private $dsn;
    private $dsnInvalid;

    public function setUp()
    {
        $this->dsn = "mysqlx://{$_SERVER['MYSQL_TEST_MYSQL_USER']}:{$_SERVER['MYSQL_TEST_MYSQL_PASSWORD']}@{$_SERVER['MYSQL_TEST_HOST']}:33060/{$_SERVER['MYSQL_TEST_MYSQL_DATABASE']}";
        $password = mt_rand() . time() . 'random';
        $this->dsnInvalid = "mysqlx://{$_SERVER['MYSQL_TEST_MYSQL_USER']}:{$password}@{$_SERVER['MYSQL_TEST_HOST']}:33060/{$_SERVER['MYSQL_TEST_MYSQL_DATABASE']}";
    }

    public function testFromConfig()
    {
        $this->assertInstanceOf(Session::class, XdevApiClientBuilder::getInstance($this->dsn)->getSession());
    }

    public function testFromConfigRaw()
    {
        $this->assertInstanceOf(Session::class, XdevApiClientBuilder::getInstance($this->dsn)->getRawSession());
    }

    /**
     * @expectedException \mysql_xdevapi\Exception
     */
    public function testConnectionException()
    {
        XdevApiClientBuilder::getInstance($this->dsnInvalid)->getSession();
    }
}

<?php
namespace mysql_xdevapi;

abstract class DatabaseObject
{
    public function getSession();
    public function getName();
    public function existsInDatabase();
}

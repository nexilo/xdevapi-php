<?php
namespace mysql_xdevapi;

abstract class SchemaObject implements DatabaseObject
{
    public function getSchema();
}

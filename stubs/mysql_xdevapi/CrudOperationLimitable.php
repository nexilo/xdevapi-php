<?php
namespace mysql_xdevapi;

abstract class CrudOperationLimitable
{
    public function limit(int $rows);
}

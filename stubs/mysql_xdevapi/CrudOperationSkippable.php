<?php
namespace mysql_xdevapi;

abstract class CrudOperationSkippable
{
    public function skip(int $skip);
}

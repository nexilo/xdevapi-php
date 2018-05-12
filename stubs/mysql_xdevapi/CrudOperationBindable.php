<?php
namespace mysql_xdevapi;

abstract class CrudOperationBindable
{
    public function bind(array $placeholder_values);
}

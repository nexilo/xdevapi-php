<?php
namespace mysql_xdevapi;

abstract class BaseResult
{
    public function getWarningCount();
    public function getWarnings();
}

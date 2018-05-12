<?php
namespace mysql_xdevapi;

class ExecutionStatus
{
    public $affectedItems = null;

    public $matchedItems = null;

    public $foundItems = null;

    public $lastInsertId = null;

    public $lastDocumentId = null;

    private function __construct()
    {
    }
}

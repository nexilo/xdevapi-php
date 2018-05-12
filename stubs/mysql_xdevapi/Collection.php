<?php
namespace mysql_xdevapi;

class Collection implements SchemaObject, DatabaseObject
{
    public $name = null;

    private function __construct()
    {
    }

    public function getSession()
    {
    }

    public function getName()
    {
    }

    public function existsInDatabase()
    {
    }

    public function count()
    {
    }

    public function getSchema()
    {
    }

    public function add($json)
    {
    }

    public function find(string $search_condition = null)
    {
    }

    public function modify(string $search_condition = null)
    {
    }

    public function remove(string $search_condition = null)
    {
    }

    public function getOne(string $id)
    {
    }

    public function replaceOne(string $id, $doc)
    {
    }

    public function addOrReplaceOne(string $id, $doc)
    {
    }

    public function removeOne(string $id)
    {
    }

    public function createIndex(string $index_name, string $index_desc_json)
    {
    }

    public function dropIndex(string $index_name)
    {
    }
}

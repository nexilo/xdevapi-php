<?php
namespace mysql_xdevapi;

class CollectionModify implements Executable, CrudOperationBindable, CrudOperationLimitable, CrudOperationSkippable, CrudOperationSortable
{
    private function __construct()
    {
    }

    public function bind(array $placeholder_values)
    {
    }

    public function sort($sort_expr)
    {
    }

    public function limit(int $rows)
    {
    }

    public function skip(int $position)
    {
    }

    public function set(string $collection_field, $expression_or_literal)
    {
    }

    public function unset($variables)
    {
    }

    public function replace(string $collection_field, $expression_or_literal = null)
    {
    }

    public function merge(string $document)
    {
    }

    public function patch(string $document)
    {
    }

    public function arrayInsert(string $collection_field, $expression_or_literal)
    {
    }

    public function arrayAppend(string $collection_field, $expression_or_literal)
    {
    }

    public function arrayDelete(string $collection_field)
    {
    }

    public function execute()
    {
    }
}

<?php
namespace mysql_xdevapi;

class CollectionFind implements Executable, CrudOperationBindable, CrudOperationLimitable, CrudOperationSortable
{
    private function __construct()
    {
    }

    public function fields($projection)
    {
    }

    public function groupBy($sort_expr)
    {
    }

    public function having($sort_expr)
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

    public function lockShared(int $lock_waiting_option = null)
    {
    }

    public function lockExclusive(int $lock_waiting_option = null)
    {
    }

    public function execute()
    {
    }
}

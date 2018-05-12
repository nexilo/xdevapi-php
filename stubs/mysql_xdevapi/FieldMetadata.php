<?php
namespace mysql_xdevapi;

class FieldMetadata
{
    public $type = null;

    public $type_name = null;

    public $name = null;

    public $original_name = null;

    public $table = null;

    public $original_table = null;

    public $schema = null;

    public $catalog = null;

    public $collation = null;

    public $fractional_digits = null;

    public $length = null;

    public $flags = null;

    public $content_type = null;

    private function __construct()
    {
    }
}

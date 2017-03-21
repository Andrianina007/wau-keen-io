<?php
namespace WauKeenIo\Helpers\Interpreter;

use WauKeenIo\Models\KeenIoItem;

interface InterfaceKeenIoItemParser {
    public static function parse(KeenIoItem $item);
}


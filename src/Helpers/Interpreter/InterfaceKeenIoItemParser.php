<?php
namespace WauKeenIo\Helpers\Interpreter;

use WauKeenIo\Models\KeenIoItem;

interface InterfaceKeenIoItemParser {
    public function parse(KeenIoItem $item);
}


<?php
namespace WauKeenIo\Helpers;

use WauKeenIo\Models\KeenIoItem;

interface InterfaceKeenIoItemParser {
    public static function parse(KeenIoItem $item);
}


<?php

namespace WauKeenIo\Helpers\Interpreter;

use WauKeenIo\Helpers\Interpreter\InterfaceKeenIoItemParser;

/**
 * Description of AbstractItemPerser
 *
 * @author Andrianina OELIMAHEFASON
 */
abstract class AbstractItemParser implements InterfaceKeenIoItemParser{
    use \WauKeenIo\Helpers\ClassTrait;
    
    protected $item;
}

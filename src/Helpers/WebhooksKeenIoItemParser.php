<?php

namespace WauKeenIo\Helpers;

use WauKeenIo\Helpers\InterfaceKeenIoItemParser;
use WauKeenIo\Models\KeenIoItem;
use WauKeenIo\Exceptions\KeenIoItemException;

/**
 * Description of KeenIoItemParser
 *
 * @author Andrianina OELIMAHEFASON
 */
class WebhooksKeenIoItemParser implements InterfaceKeenIoItemParser{
    
    private $item;
    public static function parse(KeenIoItem $item) {
        $this->item = $item;
        $this->checkAttribute($this->item->eventDate, $this->item);
        
        return $this->apply();
    }
    
    private function checkAttribute($attributeName, $item) {
        if (!isset($item->{$attributeName})) {
            throw new KeenIoItemException("Attribute ". $attributeName." must be set.");
        } else {
            return true;
        }
    }
    
    private function apply() {
        $datas = array();
        foreach($this->item as $key => $property) {
            array_push($datas, array( $key => (array) $this->item->{$property}));
        }
        return $datas;
    }
}

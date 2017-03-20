<?php
namespace WauKeenIo\Creationals;

use WauKeenIo\Interfaces\InterfaceWAUKeenIOFactoryMethod;
use WauKeenIo\Models\WebhookKeenIoItem;
use WauKeenIo\Models\ApiKeenIoItem;

class WAUKeenIoFactory implements InterfaceWAUKeenIOFactoryMethod {
    
    public static function make($datas) {
        
        switch ($datas['type']) {
            case 'webhook':
                return new WebhookKeenIoItem();
            case 'api':
                return new ApiKeenIoItem();
        }
    }

}

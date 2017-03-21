<?php
namespace WauKeenIo\Creationals;

use WauKeenIo\Creationals\InterfaceWAUKeenIOFactoryMethod;
use WauKeenIo\Models\WebhookKeenIoItem;
use WauKeenIo\Models\PodioApiKeenIoItem;

class WAUKeenIoFactory implements InterfaceWAUKeenIOFactoryMethod {
    
    /**
     * Make an KeenIoItem
     * @param string $type Type of the trigger, ex : webhook, podio_api
     * @param array $datas Data to send to Keen.Io
     * @return PodioApiKeenIoItem|WebhookKeenIoItem
     */
    public static function make($type, $datas) {
        switch ($type) {
            case 'webhook':
                return new WebhookKeenIoItem($datas);
            case 'podio_api':
                return new PodioApiKeenIoItem($datas);
        }
    }

}

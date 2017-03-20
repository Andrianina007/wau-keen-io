<?php

namespace WauKeenIo\Models;

use WauKeenIo\Models\KeenIoItem;
use WauKeenIo\Helpers\WebhooksKeenIoItemParser;
/**
 * Description of WebhookKeenIoItem
 *
 * @author Andrianina OELIMAHEFASON
 */
class WebhookKeenIoItem extends KeenIoItem{
    public $hookType;
    
    public $firingEvent;
    
    public $link;
    
    public $id;
    
    public static $eventsType = 'webhooks';
    
    
    public function addEvent() {
        $datas = WebhooksKeenIoItemParser::parse($this);
        
        $this->keenIoClient->addEvent(self::$eventsType, array('webhook' => $datas));
    }

}

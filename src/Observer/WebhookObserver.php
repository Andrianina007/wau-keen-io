<?php
/**
 * User: bundinho
 * Date: 3/21/17
 * Time: 2:43 PM
 */

namespace WauKeenIo\Observer;


use WauKeenIo\Creationals\WAUKeenIoFactory;

class WebhookObserver extends AbstractObserver
{
    public  function fireEvent()
    {
        $factory = WAUKeenIoFactory::make('webhook', $this->data);
        $factory->addEvent();
    }
}
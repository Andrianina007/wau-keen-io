<?php
/**
 * User: bundinho
 * Date: 3/21/17
 * Time: 2:45 PM
 */

namespace WauKeenIo\Observer;


use WauKeenIo\Creationals\WAUKeenIoFactory;

class PodioApiObserver extends AbstractObserver
{
    public function fireEvent()
    {
        $factory = WAUKeenIoFactory::make('podio_api', $this->data);
        $factory->addEvent();
    }
}
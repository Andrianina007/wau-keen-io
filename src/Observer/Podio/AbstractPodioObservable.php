<?php
/**
 * User: bundinho
 * Date: 3/23/17
 * Time: 2:38 PM
 */

namespace WauKeenIo\Observer\Podio;


abstract class AbstractPodioObservable implements PodioObservableInterface
{
    abstract function notify();
}
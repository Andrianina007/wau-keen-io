<?php
/**
 * User: bundinho
 * Date: 3/22/17
 * Time: 9:05 AM
 */

namespace WauKeenIo\Observer;


abstract class AbstractSubject implements ObservableInterface
{
    abstract function attach(ObserverInterface $observer_in);
    abstract function detach(ObserverInterface $observer_in);
    abstract function notify();
    abstract function getRawData();
}
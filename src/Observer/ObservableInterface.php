<?php
/**
 * User: bundinho
 * Date: 3/22/17
 * Time: 9:41 AM
 */

namespace WauKeenIo\Observer;


interface ObservableInterface
{
    public function attach(ObserverInterface $observer_in);
    public function detach(ObserverInterface $observer_in);
    public function notify();
}
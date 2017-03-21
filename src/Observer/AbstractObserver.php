<?php
/**
 * User: bundinho
 * Date: 3/21/17
 * Time: 2:30 PM
 */

namespace WauKeenIo\Observer;


abstract class AbstractObserver implements ObservableInterface
{
    protected $data;

    function __construct($data)
    {
        $this->data = $data;
    }

    public abstract function fireEvent();
}
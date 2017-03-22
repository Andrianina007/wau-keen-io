<?php
/**
 * User: bundinho
 * Date: 3/22/17
 * Time: 9:53 AM
 */

namespace WauKeenIo\Observer;


class LaravelWebhookObserver extends AbstractObserver
{
    /**
     * Here, $subject_in should be a Laravel|Symfony Request instance
     * @param ObservableInterface $subject_in
     */
    public  function update(ObservableInterface $subject_in)
    {
//        $data = $subject_in->request->all();
//        print_r($data);
//        $url = $subject_in->fullUrl();
//        print_r($url);
    }
}
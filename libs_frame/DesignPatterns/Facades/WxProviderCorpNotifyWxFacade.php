<?php
/**
 * Created by PhpStorm.
 * User: 姜伟
 * Date: 2018/9/5 0005
 * Time: 8:30
 */
namespace DesignPatterns\Facades;

use Traits\SimpleFacadeTrait;

abstract class WxProviderCorpNotifyWxFacade {
    use SimpleFacadeTrait;

    public static function acceptNotify(array $data){
        static::handleNotify($data);
    }

    abstract protected static function handleNotify(array $data);
}
<?php


namespace Pengb\FlashSale\Validators\FlashSale;

use Prettus\Validator\LaravelValidator;

/**
 * 限时抢购验证器
 * Class FlashSaleValidator
 * @package Pengb\FlashSale\Validators\FlashSale
 */
class FlashSaleValidator extends LaravelValidator
{
    const RULE_CREATE = 'create';
    const RULE_UPDATE = 'update';

    protected $rules = [
        self::RULE_CREATE => [
            'name' => 'required',
            'begin_time'  => 'required',
            'ends_time'  => 'required',
            'tag'  => 'required',
            'tag'  => 'required',
        ],
        self::RULE_UPDATE => [
            'username' => 'required'
        ],
    ];

    protected $messages = [
        self::RULE_CREATE => [
            'name.required' => '活动名称不能为空',
        ],
    ];
}
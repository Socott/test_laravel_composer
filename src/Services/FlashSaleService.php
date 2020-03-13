<?php

namespace  Pengb\FlashSale\Services;

use Illuminate\Validation\ValidationException;
use Pengb\FlashSale\Validators\FlashSale\FlashSaleValidator;


class FlashSaleService
{

    private $flashSaleValidator;

    public function __construct(FlashSaleValidator $flashSaleValidator)
    {
        $this->flashSaleValidator = $flashSaleValidator;
    }

    /**
     * 添加限时抢购任务
     * @param $param
     */
    public function add($param){
        try{
            $this->flashSaleValidator->with($param)->passesOrFail(FlashSaleValidator::RULE_CREATE);
        }catch (ValidationException $e){
            throw new \Exception(10003,$e->errors());
        }
    }
}
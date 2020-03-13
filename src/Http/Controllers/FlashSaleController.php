<?php

namespace Scott\Flashsale\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Pengb\FlashSale\Services\FlashSaleService;

/**
 * Class FlashSale 限时抢购
 * @package Pengb\FlashSale\Http\Controllers
 */
class FlashSaleController extends Controller
{
    /**
     * 添加限时抢购
     * @param Request $request
     * @param FlashSaleService $flashSaleService
     */
    public function Add(Request $request,FlashSaleService $flashSaleService){
        $param = $request->all();
        $flashSaleService->add($param);
    }
}
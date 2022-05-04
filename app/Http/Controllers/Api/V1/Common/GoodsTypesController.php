<?php

namespace App\Http\Controllers\Api\V1\Common;

use App\Models\Master\GoodsType;
use App\Http\Controllers\Api\V1\BaseController;

/**
 * @group Goods Types List
 *
 * APIs for vehilce management apis. i.e types,car makes,models apis
 */
class GoodsTypesController extends BaseController
{
    protected $goods_type;

    public function __construct(GoodsType $goods_type)
    {
        $this->goods_type = $goods_type;
    }

    /**
    * Get All Goods Types
    *
    */
    public function index()
    {
        return $this->respondSuccess($this->goods_type->get(), 'goods_types_listed');
    }
}

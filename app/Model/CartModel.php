<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\GoodsModel;

class CartModel extends Model
{
    //
    public function goodsInfo($goods_id)
    {
        return GoodsModel::where(['goods_id'=>$goods_id])->get();
    }
}

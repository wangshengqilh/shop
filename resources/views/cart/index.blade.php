{{-- 购物车 --}}
@extends('layouts.bst')
@section('content')
    <div class="container">
        <ul>
            @foreach($list as $k=>$v)
                <li>商品id:{{$v['goods_id']}}    --  商品名称:{{$v['goods_name']}}  -  商品价格:¥ {{$v['price'] / 100}}   --  加入时间:{{date('Y-m-d H:i:s',$v['add_time'])}}
                    <a href="/cart/del2/{{$v['goods_id']}}" class="del_goods">删除</a></li>
                    <a href="/pay/alipay/test" id="submit_order" class="btn btn-info "> 提交订单 </a>
            @endforeach
        </ul>
        <br>

    </div>
@endsection
@section('footer')
    @parent
@endsection
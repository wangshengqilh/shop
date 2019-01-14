@extends('layouts.bst')
@section('content')
    <div class="container">
        <table>
            <tr>
                <td>商品名称:  </td>
                <td><h1>{{$goods->goods_name}}</h1></td>
            </tr>
            <tr>
                <td>商品价格:  </td>
                <td><span>{{$goods->price / 100}}</span></td>
            </tr>
        </table>
        <form class="form-inline">
            <div class="form-group">
                <label class="sr-only" for="goods_num">Amount (in dollars)</label>
                购买数量:   <div class="input-group">
                    <input type="text" id="goods_num" value="1" style="width: 50px;" class="form-control">
                </div>
            </div>
            <input type="hidden" id="goods_id" value="{{$goods->goods_id}}"><br>
            <button type="submit" id="add_cart_btn" class="btn btn-primary">加入购物车</button>
        </form>
    </div>
@endsection
@section('footer')
    @parent
    <script src="{{URL::asset('/js/goods/goods.js')}}"></script>
@endsection
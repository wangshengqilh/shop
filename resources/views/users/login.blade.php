{{-- 用户登录--}}

@extends('layouts.bst')

@section('content')
    <form class="form-signin" action="/user/login" method="post">
        {{csrf_field()}}
        <h3 class="form-signin-heading">请登录</h3>
        <table>
            <tr>
                <td><label for="inputEmail">电子邮件：</label></td>
                <td><input type="email" name="u_email" id="inputEmail" class="form-control" placeholder="@" required autofocus style="width: 100px;"></td>
            </tr>
            <tr>
                <td><label for="inputPassword" >密码：</label></td>
                <td><input type="password" name="u_pass" id="inputPassword" class="form-control" placeholder="***" required style="width: 100px;"></td>
            </tr>
        </table>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me">记住密码
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" style="width: 100px;">登录</button>
    </form>
@endsection





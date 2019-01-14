{{-- 用户注册--}}
@extends('layouts.bst')
@section('content')
    <form class="form-signin" action="/user/reg" method="post">
        {{csrf_field()}}
        <h3 class="form-signin-heading">用户注册</h3>
        <table>
            <tr>
                <td><label for="inputNickName">用户名：</label></td>
                <td><input type="text" name="nick_name" id="inputNickName" class="form-control" placeholder="用户名" required autofocus style="width: 200px;"></td>
            </tr>
            <tr>
                <td><label for="inputAge">年龄：</label></td>
                <td><input type="text" name="age" id="inputAge" class="form-control" placeholder="年龄" required autofocus style="width: 200px;"></td>
            </tr>
            <tr>
                <td><label for="inputEmail">电子邮件：</label></td>
                <td><input type="email" name="u_email" id="inputEmail" class="form-control" placeholder="@" required autofocus style="width: 200px;"></td>
            </tr>
            <tr>
                <td><label for="inputPassword" >密码：</label></td>
                <td><input type="password" name="u_pass" id="inputPassword" class="form-control" placeholder="***" required style="width: 200px;"></td>
            </tr>
            <tr>
                <td><label for="inputPassword2" >确认密码：</label></td>
                <td><input type="password" name="u_pass2" id="inputPassword2" class="form-control" placeholder="***" required style="width: 200px;"></td>
            </tr>
        </table>
        <button class="btn btn-lg btn-primary btn-block" type="submit" style="width: 100px;">注册</button>
    </form>
@endsection
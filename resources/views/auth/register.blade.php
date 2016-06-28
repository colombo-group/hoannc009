@extends('frontend.layout')
@section('body')
    <div class="login">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">Đăng ký tài khoản </div>
                    <div class="panel-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul style="list-style: none">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form role="form" action="/auth/register" method="post">
                            <fieldset>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Họ và tên" name="name" type="text" autofocus="">

                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Mật khẩu" name="password" type="password" value="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Nhập lại mật khẩu" name="password_confirmation" type="password" value="">
                                </div>
                                <button class="btn" type="submit">Đăng ký</button>
                                Bạn đã có tài khoản ! <a href="/auth/login">Đăng nhập</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- /.row -->
    </div>

@endsection
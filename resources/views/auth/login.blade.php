@extends('frontend.layout')
@section('body')

    <div class="login">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">Đăng nhập</div>
                    <div class="panel-body">
                        @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                Đăng nhập không thành công
                            </div>
                        @endif
                        <form role="form" action="/auth/login" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Mật khẩu" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <button type="submit" class="btn">Đăng nhập</button>
                                Bạn chưa có tài khoản ! <a href="/auth/register">Đăng ký</a>
                                <p><a href="/auth/redirect/facebook">Đăng nhập với Facebook</a></p>
                                <p><a href="/auth/redirect/google">Đăng nhập với Google+</a></p>

                            </fieldset>
                        </form>
                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- /.row -->
    </div>

@endsection
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ trans('admin.forgot_password') }}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="{{ url('/') }}/design/adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet"
        href="{{ url('/') }}/design/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet"
        href="{{ url('/') }}/design/adminlte/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a
                href="{{ url('/') }}/design/adminlte/index.html"><b>Admin</b>LTE</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">
                    {{ trans('admin.forgot_password') }}</p>
                @if (session()->has('success'))
                <div class="alert alert-success">
                    <h1>{{session('success')}}</h1>
                </div>
                @endif
                <form method="post">
                    {{ csrf_field() }}
                    <div class="input-group mb-3">
                        <input type="email" name="email"
                            class="form-control" placeholder="Email"
                            value="admin@admin.com">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit"
                                class="btn btn-primary btn-block">Reset</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <p class="mb-1">
                    <a href="{{aurl('login')}}">Sgn in</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script
        src="{{ url('/') }}/design/adminlte/plugins/jquery/jquery.min.js">
    </script>
    <!-- Bootstrap 4 -->
    <script
        src="{{ url('/') }}/design/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js">
    </script>
    <!-- AdminLTE App -->
    <script src="{{ url('/') }}/design/adminlte/dist/js/adminlte.min.js">
    </script>

</body>

</html>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="/download.png" type="image/x-icon"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/login.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<form action="" method="POST">
    <section class="login-block">
        <div class="container">
            <div class="row" style="margin: 0 auto;">
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                <div class="offset-md-4 col-md-4 login-sec">
                    <h2 class="text-center">Acesso ao Sistema</h2>
                    <form class="login-form">
                        @if(!empty($containsError))
                            <div class="alert alert-danger text-center" role="alert">
                                {{ $containsError }}
                            </div>
                        @endif
                        @if(!empty($containsMsg))
                            <div class="alert alert-info text-center" role="alert">
                                {{ $containsMsg }}
                            </div>
                        @endif
                        <div class="form-group">
                            <label for="exampleInputEmail1">Usuário: </label>
                            <input type="text" class="form-control" id="username" name="username" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Senha: </label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="form-check">
                            <button type="submit" class="btn btn-success float-right col-md-6">Acessar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</form>
</body>
</html>

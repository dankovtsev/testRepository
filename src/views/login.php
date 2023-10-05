<!DOCTYPE html>
<html>
<head>
    <title>Форма авторизации</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
<link href="/web/form.css" rel="stylesheet" type="text/css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--<script src="https://smartcaptcha.yandexcloud.net/captcha.js" defer></script>-->
<div class="container">
    <div class="row">
        <div class="col-md-offset-3 col-md-6">

            <div class="tab" role="tabpanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab">Авторизация</a></li>
                    <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab">Регистрация</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content tabs">
                    <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                        <form class="form-horizontal" action="../../src/Controllers/LoginController.php" method="POST">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Логин</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="login">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Пароль</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                            </div>
                           <!-- <div
                                    id="captcha-container"
                                    class="smart-captcha"
                                    data-sitekey="<ключ_клиента>"
                            ></div>-->
                            <div class="form-group">
                                <div class="main-checkbox">
                                    <input value="None" id="checkbox1" name="remember" type="checkbox">
                                    <label for="checkbox1"></label>
                                </div>
                                <span class="text">Запомнить</span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-default">Войти</button>
                            </div>
                            <div class="form-group forgot-pass">
                                <button type="submit" class="btn btn-default">Восстановить пароль</button>
                            </div>
                        </form>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Section2">
                        <form class="form-horizontal" action="/src/Controllers/Register.php" method="post">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Логин</label>
                                <input type="text" name="name" class="form-control" id="exampleInputName">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Телефон</label>
                                <input type="text" name="phone" class="form-control" id="exampleInputPhone">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Пароль</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Введите пароль повторно</label>
                                <input type="password" name="password-2" class="form-control" id="exampleInputPassword2">
                            </div>
                            <!--<div
                                    id="captcha-container"
                                    class="smart-captcha"
                                    data-sitekey="<ключ_клиента>"
                            ></div>-->
                            <div class="form-group">
                                <button type="submit" class="btn btn-default">Регистрация</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div><!-- /.col-md-offset-3 col-md-6 -->
    </div><!-- /.row -->
</div><!-- /.container -->
</html>

<?php require_once __DIR__ . "/layouts/header.php"; ?>

    <div class="container">

        <div class="form-container">
            <form class="form-horizontal" action="#" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Логин</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="login" id="inputEmail3" placeholder="Логин">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Пароль</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Пароль">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">

                        <button type="submit" class="btn btn-default" name="submit">Войти</button>
                        <br><br>
                        Нет аккаунта? <a href="/user/registration">Зарегистрируйтесь</a>
                    </div>
                </div>
            </form>
        </div>

    </div><!-- /.container -->

<?php require_once __DIR__ . '/layouts/footer.php'; ?>
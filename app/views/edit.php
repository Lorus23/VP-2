<?php require_once __DIR__ . "/layouts/header.php"; ?>
<?php if (isset($errors) && is_array($errors)): ?>
    <ul>
        <?php foreach ($errors as $error): ?>
            <li> - <?php echo $error; ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
    <div class="container">
        <div class="form-container">
            <form action="#" method="post" enctype="multipart/form-data">
                <h2>Редактирование пользователя</h2>

                <div class="form-group form-group-left-align">
                    <div class="form-subgroup2-left">
                        <label for="inputName">Имя</label>
                        <input type="text" class="form-control" id="inputName" value="<?php echo $data['name']?>"
                               name="name">
                    </div>
                    <div
                    <label for="inputAge">Возраст</label>
                    <input type="text" class="form-control" id="inputAge" value="<?php echo $data['age']?>" name="age">
                </div>
        </div>


        <div class="form-group">
            <label for="inputDescription">Описание</label>
            <textarea class="form-control" id="inputDescription" rows="2" placeholder="<?php echo $data['description']?>"
                      name="description"></textarea>
        </div>

        <div class="form-group">
            <!-- <input type="hidden" name="MAX_FILE_SIZE" value="1048576" /> -->
            <label for="inputPhoto" class="col-sm-2 control-label">Фото</label>
            <input type="file" class="form-control" id="inputPhoto" name="photo" accept="image/*">
        </div>

        <div class="form-group form-group-left-align">
            <div class="form-subgroup3-left">
                <label for="inputLogin">Логин</label>
                <input type="text" class="form-control" id="inputLogin" value="<?php echo $data['login']?>" name="login"
                       required>
            </div>
            <div class="form-subgroup3-left">
                <label for="inputPassword1">Пароль</label>
                <input type="password" class="form-control" id="inputPassword1" placeholder="Придумайте пароль"
                       name="password">
            </div>
            <div class="form-subgroup3-right">
                <label for="inputPassword2">Повтор пароля</label>
                <input type="password" class="form-control" id="inputPassword2" placeholder="Ещё раз пароль"
                       name="password-again">
            </div>
        </div>

        <div class="form-group">
            <div class="g-recaptcha" style="display: inline-block;" data-sitekey="{{ captchaSiteKey }}"></div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-submit" name="submit">Редактировать</button>

        </div>


        </form>
    </div>

    </div><!-- /.container -->

<?php require_once __DIR__ . '/layouts/footer.php'; ?>
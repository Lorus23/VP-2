<?php require_once __DIR__ . "/layouts/header.php"; ?>

    <div class="container">
        <h1>Запретная зона, доступ только авторизированному пользователю</h1>
        <h2>Информация выводится из базы данных</h2>

        <table class="table table-bordered">
            <tr>
                <th>Пользователь(логин)</th>
                <th>Имя</th>
                <th>возраст</th>
                <th>описание</th>
                <th>Фотография</th>
                <th>Действия</th>
            </tr>
            <?php foreach ($userList as $item): ?>

                <tr>
                    <td><?php echo $item['login']; ?></td>
                    <td><?php echo $item['name']; ?></td>
                    <td><?php echo $item['age']; ?></td>
                    <td><?php echo $item['description']; ?></td>

                    <!-- Нужно доделать вывод картинки -->

                    <td><img src="<?php echo $_SERVER['DOCUMENT_ROOT'].'/images/avatar'.$item['id']; ?> . '" alt=""></td>
                    <td><a href="/user/delete/<?php $userList['id']; ?>">Удалить пользователя</a></td>
                </tr>
            <?php endforeach; ?>
        </table>

    </div><!-- /.container -->

<?php require_once __DIR__ . '/layouts/footer.php'; ?>
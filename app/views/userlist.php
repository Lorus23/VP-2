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
            <?php foreach ($usersList as $item): ?>
                <tr>
                    <td><?php echo $item['login']; ?></td>
                    <td><?php echo $item['name']; ?></td>
                    <td><?php if ($item['age']>=18){echo 'Совершеннолетний';}else {echo 'Несовершеннолетний';}; ?></td>
                    <td><?php echo $item['description']; ?></td>
                    <!-- Нужно доделать вывод картинки -->
                    <td><img src="/images/avatar<?php echo $item['id']; ?>.jpg" alt=""></td>
                    <td><a href="/user/deleteUser/<?php echo $item['id']; ?>">Удалить пользователя</a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <!-- /.container -->

<?php require_once __DIR__ . '/layouts/footer.php'; ?>
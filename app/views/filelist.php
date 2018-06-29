<?php require_once __DIR__ . "/layouts/header.php"; ?>

    <div class="container">
        <h1>Запретная зона, доступ только авторизированному пользователю</h1>
        <h2>Информация выводится из списка файлов</h2>
        <table class="table table-bordered">
            <tr>
                <th>Название файла</th>
                <th>Фотография</th>
                <th>Действия</th>
            </tr>
            <tr>

                <?php foreach ($filesList as $item): ?>
                <td>avatar<?php echo $item['id']; ?>.jpg</td>
                <td><img src="/images/avatar<?php echo $item['id']; ?>.jpg" alt=""></td>
                <td>
                    <a href="/file/deleteFile/<?php echo $item['id']; ?>">Удалить аватарку пользователя</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>

    </div><!-- /.container -->

<?php require_once __DIR__ . '/layouts/footer.php'; ?>
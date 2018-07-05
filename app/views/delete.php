<?php require_once __DIR__ . "/layouts/header.php"; ?>

    <section>
        <div class="container">
            <div class="row">
                <h4>Удаление данных #<?php echo $id; ?></h4>
                <p>Вы действительно хотите удалить?</p>
                <form method="post">
                    <input type="submit" name="submit" value="Удалить"/>
                </form>

            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/layouts/footer.php'; ?>
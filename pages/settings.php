<?php
// session_start();
require_once __DIR__ . '/../src/helpers.php';
require_once __DIR__ . '/../src/actions/header.php';
require_once __DIR__ . '/../src/actions/footer.php';
// require_once __DIR__ . '/../src/actions/login.php';

$user = currentUser();

?>
<!doctype html>
<html lang="uk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Благодійний Фонд "Мрії Здійснюються"</title>
    <link href="../styles/style.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="../images/Screenshot_20240617_112949.png">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/9e3bcbb946.js" crossorigin="anonymous"></script>
    <script src="../script/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7NElGXx3" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+SK:wght@100..400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<?php renderHeader($user); ?>

<div class="account-wrapper container">
    <div class="page-header">
        <h1>Налаштування аккаунту</h1>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <div class="nav flex-column nav-pills"  aria-orientation="vertical">
                <a href="../pages/user.php" class="nav-link">Особистий кабінет</a>
                <span class="nav-link active">Налаштування аккаунту</span>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="form-wrapper">
                <form id="SettingsForm" action="../src/actions/settings.php" method="post">
                    <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
                    <div class="form-group field-settingsform-fullname required">
                        <label for="settingsform-fullname">Ваше ім’я</label>
                        <input type="text" id="settingsform-fullname" class="form-control" name="SettingsForm[fullname]" value="" aria-required="true">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group field-settingsform-email required">
                        <label for="settingsform-email">Email</label>
                        <input type="text" id="settingsform-email" class="form-control" name="SettingsForm[email]" value="" aria-required="true">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group field-settingsform-new_password">
                        <label for="settingsform-new_password">Новий пароль</label>
                        <input type="password" id="settingsform-new_password" class="form-control" name="SettingsForm[new_password]">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group field-settingsform-current_password required">
                        <label for="settingsform-current_password">Існуючий пароль</label>
                        <input type="password" id="settingsform-current_password" class="form-control is-valid" name="SettingsForm[current_password]" aria-required="true" aria-invalid="false">
                        <div class="invalid-feedback"></div>
                    </div>
                    <button type="submit" class="btn btn-primary">Зберегти</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php renderFooter(); ?>

</body>
</html>
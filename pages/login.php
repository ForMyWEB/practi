<?php
// session_start();
require_once __DIR__ . '/../src/helpers.php';
require_once __DIR__ . '/../src/actions/header.php';
require_once __DIR__ . '/../src/actions/footer.php';
$user = currentUser();
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

<?php
renderHeader($user);
?>

<div class="regis">
    <div class="container">
        <h1>Вхід до особистого кабінету</h1>
    </div>
</div>

<div class="login">
    <div class="container">
        <div class="form-2">
            <form id="registerForm" action="../src/actions/login.php" method="post" onsubmit="validateForm(event)">
                <?php if (hasMessage('error')): ?>
                    <div class="notice" style="color: #d9534f; background-color: #f2dede; border-color: #ebccd1; padding: 15px; margin-bottom: 20px; border: 1px solid transparent; text-align: center; border-radius: 4px;">
                        <?php echo getMessage('error'); ?>
                    </div>
                <?php endif; ?>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Пошта</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" required>
                    <div id="emailHelp" class="form-text">Ми не поділимось вашою скринькою з іншими.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Пароль</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Запам'ятати мене</label>
                </div>
                <button type="submit" class="btn btn-primary">Увійти</button>
            </form>
            <div class="mt-3">
                <span>Немає аккаунту? </span><a href="../pages/register.php">Створіть!</a>
            </div>
        </div>
    </div>
</div>

<?php renderFooter(); ?>

</body>
</html>

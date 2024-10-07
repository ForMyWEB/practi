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
    <title>Реєстрація</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="icon" type="image/png" href="../images/Screenshot_20240617_112949.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+SK:wght@100..400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9e3bcbb946.js" crossorigin="anonymous"></script>
    <script src="../script/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7NElGXx3"
    crossorigin="anonymous"></script>
</head>

<body>

    <?php renderHeader($user); ?>

    <div class="regis">
        <div class="container">
            <h1>Реєстрація</h1>
        </div>
    </div>

    <div class="terms">
        <div class="container">
            <div class="menu-h2">
                <h2>Переваги реєстрації</h2>
            </div>
            <div class="menu">
                <div class="menu-item">
                    <hr>
                    <p>Слідкуйте за вашими внесками та проектами, які ви підтримали</p>
                </div>
                <div class="menu-item">
                    <hr>
                    <p>Створюйте власні кампанії для підтримки існуючих проектів</p>
                </div>
                <div class="menu-item">
                    <hr>
                    <p>Підписуйтеся на регулярну допомогу</p>
                </div>
                <div class="menu-item">
                    <hr>
                    <p>Публікуйте новини та залишайте коментарі</p>
                </div>
            </div>
        </div>
    </div>

    <div class="register">
        <div class="container">
            <div class="form">
                <form class="row g-3 needs-validation" action="../src/actions/register.php" method="post">
                    <div class="col-md-4">
                        <label for="validationServer01" class="form-label">Ім'я</label>
                        <input type="text" class="form-control" name="name" id="validationServer01" required>
                        <div class="valid-feedback">
                            Добре!
                        </div>
                        <div class="invalid-feedback">
                            Введіть ім'я.
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationServer02" class="form-label">Прізвище</label>
                        <input type="text" class="form-control" name="surname" id="validationServer02" required>
                        <div class="valid-feedback">
                            Добре!
                        </div>
                        <div class="invalid-feedback">
                            Введіть прізвище.
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationServerUsername" class="form-label">Логін</label>
                        <div class="input-group has-validation">
                            <input type="text" class="form-control" name="login" id="validationServerUsername"
                                aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                Будь ласка, оберіть логін.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationServerEmail" class="form-label">Почта</label>
                        <div class="input-group has-validation">
                            <input type="text" class="form-control" name="email" id="validationServerEmail"
                                aria-describedby="inputGroupPrepend3 validationServerEmailFeedback" required>
                            <div id="validationServerEmailFeedback" class="invalid-feedback">
                                Будь ласка, введіть почту.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationServerPassword" class="form-label">Пароль</label>
                        <input type="password" class="form-control" name="password" id="validationServerPassword"
                            required>
                        <div class="valid-feedback">
                            Добре!
                        </div>
                        <div class="invalid-feedback">
                            Введіть пароль.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationServer04" class="form-label">Стать</label>
                        <select class="form-select" id="validationServer04"
                            aria-describedby="validationServer04Feedback" required>
                            <option selected disabled value="">Виберіть...</option>
                            <option>Чоловіча</option>
                            <option>Жіноча</option>
                        </select>
                        <div id="validationServer04Feedback" class="invalid-feedback">
                            Будь ласка, виберіть дійсну стать.
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck3"
                                aria-describedby="invalidCheck3Feedback" required>
                            <label class="form-check-label" for="invalidCheck3">
                                Погодьтеся з правилами та <a href="#">умовами</a>.
                            </label>
                            <div id="invalidCheck3Feedback" class="invalid-feedback">
                                Ви повинні погодитися перед відправкою.
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Реєстрація</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php renderFooter(); ?>

</body>

</html>

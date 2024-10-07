<?php
// session_start();
require_once __DIR__ . '/../src/helpers.php';
require_once __DIR__ . '/../src/actions/header.php';
require_once __DIR__ . '/../src/actions/footer.php';
require_once __DIR__ . '/../src/actions/active_donors.php';
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

<div class="block">
    <div class="container">
        <div id="wrapper" class="row">
            <div class="col-7">
                <nav>
                    <h2>Благодійний фонд "<span class="color">Мрії Здійснюються</span>"</h2>
                    <p>Наша головна місія полягає у тому, щоб розвивалась благодійність та волонтерство, становлення відповідального і толерантного суспільства в Україні, допомога тим, хто цього потребує</p>
                    <a href="#">Деталі<i class="fa-solid fa-arrow-right"></i></a>
                </nav>
            </div>
            <div class="col-5">
                <img class="banner" src="../images/banner.png" height="450px" width="450px" alt="">
            </div>
        </div>
    </div>
</div>

<div class="actions">
    <div class="container">
        <div class="h1-header">
            <h1>Актуальні сфери діяльності фонду</h1>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-6">
                <div class="card" id="card-children">
                    <h3>Допомога дітям</h3>
                    <div class="item" style="display: none;">
                        <p>Фонд допомагає дітям з інвалідністю отримати необхідну медичну допомогу, а разом з цим розвиває системні проекти допомоги дітям та проводить різноманітні заходи для підопічних родин.</p>
                        <a href="#">Детальніше<i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    <div class="img-item-one" style="display: none;">
                        <img src="../images/children.jpg" alt="" width="300px">
                    </div>
                </div>
                <div class="card" id="card-elderly">
                    <h3>Допомога стареньким</h3>
                    <div class="item" style="display: none;">
                        <p>Під постійною опікою нашого фонду знаходяться старенькі з інвалідністю, які постраждали від війни в Україні та потребують підтримки. Ми надаємо адресну та соціально-психологічну допомогу цим літнім людям.</p>
                        <a href="#">Детальніше<i class="fa-solid fa-arrow-right"></i></a>               
                    </div>
                    <div class="img-item-two" style="display: none;">
                        <img src="../images/elderly.jpg" alt="" width="300px">
                    </div>
                </div>
                <div class="card" id="card-hospitals">
                    <h3>Допомога лікарням</h3>
                    <div class="item" style="display: none;">
                        <p>Ми підтримуємо лікарні в Україні: закуповуємо медичне обладнання для діагностики та операцій, витратні матеріали, матеріали для лабораторних досліджень, медичні товари та засоби індивідуального захисту для медиків, сплачуємо ремонт медичного обладнання.</p>
                        <a href="#">Детальніше<i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    <div class="img-item-three" style="display: none;">
                        <img src="../images/hospitals.jpg" alt="" width="300px">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="widget">
    <div class="container">
        <div class="widget-header">
            <h2>Ми віримо у важливість внеску <span class="highlight">кожного</span>. Долучайтесь!</h2>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <h4>Регулярна допомога</h4>
                <p>Це стабільна підтримка дітей, стареньких та лікарень і можливість вирішувати їхні термінові проблеми</p>
            </div>
            <div class="col-lg-3">
                <h4>Волонтерство</h4>
                <p>Волонтери допомагають фонду своїми професійними навичками PRO BONO</p>
            </div>
            <div class="col-lg-3">
                <h4>Благодійна кампанія</h4>
                <p>Зробіть свій проект по збору коштів для підопічних фонду та надихніть інших допомагати</p>
            </div>
            <div class="col-lg-3">
                <h4>Добре партнерство</h4>
                <p>Станьте компанією-партнером та допомагайте дітям, стареньким та лікарням разом з нами</p>
            </div>
        </div>
    </div>
</div>

<div class="main-actions"><a name="main-actions"></a>
    <div class="container-fluid">
        <div class="container">
            <div class="heading">
                <h2>Підтримайте благодійні кампанії</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 info-col">
                    <div class="text-inner">
                        <div class="container">
                            <h2>Збери кошти на власну кампанію або підтримай одну з тих, що вже є!</h2>
                            <p>Створи або підтримай благодійні кампанії та збирай кошти для підопічних фонду «Мрії Здійснюються»</p>
                            <hr>
                            <ol>
                                <li>
                                    <span class="number">1</span>
                                    <span>Створи власну благодійну кампанію та збери кошти для підопічних фонду «Мрії Здійснюються».</span>
                                </li>
                                <li>
                                    <span class="number">2</span>
                                    <span>Розкажи про свою ініціативу друзям та підписникам у соцмережах та надихай їх допомагати.</span>
                                </li>
                                <li>
                                    <span class="number">3</span>
                                    <span>Зібрані кошти допомагають дітям, стареньким, лікарням та проектам розвитку волонтерства і благодійності.</span>
                                </li>
                            </ol>
                            <div class="button-campain">
                                <a href="#" class="btn-donate">Створити власну кампанію</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 items-col">
                    <div class="campains">
                        <div class="row">
                            <div class="col-12-campain-item">
                                <div class="campain-item">
                                    <div class="cm-image">
                                        <img src="../images/photo2024-04-15-173910.jpeg" width="190px" height="222px" alt="">
                                    </div>
                                    <div class="cm-details">
                                        <p>Великдень для БА та ДІ</p>
                                        <div class="values">
                                            <div class="row">
                                                <div class="col-6">
                                                    <p>
                                                    <span>Зібрано</span>
                                                        <br>
                                                        " 21520 грн "
                                                    </p>
                                                </div>
                                                <div class="col-6">
                                                    <p>
                                                    <span>Мета</span>
                                                        <br>
                                                        " 25000 грн "
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="button">
                                            <a href="#">Підтримати<i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12-campain-item">
                                <div class="campain-item">
                                    <div class="cm-image">
                                        <img src="../images/photo2023-10-04-162206.jpeg" width="190px" height="222px" alt="">
                                    </div>
                                    <div class="cm-details">
                                        <p>«Superhero box» для маленьких супер-героїв Центру дитячої кардіології та кардіохірургії</p>
                                        <div class="values">
                                            <div class="row">
                                                <div class="col-6">
                                                    <p>
                                                    <span>Зібрано</span>
                                                        <br>
                                                        " 26100 грн "
                                                    </p>
                                                </div>
                                                <div class="col-6">
                                                    <p>
                                                    <span>Мета</span>
                                                        <br>
                                                        " ∞ "
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="button">
                                            <a href="../pages/campain.php">Підтримати<i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12-campain-item">
                                <div class="campain-item">
                                    <div class="cm-image">
                                        <img src="../images/BsADI0.jpeg" width="190px" height="222px" alt="">
                                    </div>
                                    <div class="cm-details">
                                        <p>Стань чарівником для дітей з інвалідністю</p>
                                        <div class="values">
                                            <div class="row">
                                                <div class="col-6">
                                                    <p>
                                                    <span>Зібрано</span>
                                                        <br>
                                                        " 5350 грн "
                                                    </p>
                                                </div>
                                                <div class="col-6">
                                                    <p>
                                                    <span>Мета</span>
                                                        <br>
                                                        " ∞ "
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="button">
                                            <a href="#">Підтримати<i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="campaign-donors">
    <div class="container">
        <h3>Активні донори</h3>
        <div class="row donors-grid">
            <?php foreach ($donors as $donor): ?>
                <div class="col-lg-4 donor-item">
                    <div class="card">
                        <div class="donor-item--inner">
                            <div class="donor-item--name">
                                <p><?php echo htmlspecialchars($donor['name']); ?></p>
                                <p class="donation-date text-muted"><?php echo htmlspecialchars($donor['date']); ?></p>
                            </div>
                            <div class="donor-item--amount">
                                <p><?php echo htmlspecialchars($donor['amount']) . ' грн'; ?></p>
                            </div>
                            <div class="donor-item--campaign">
                                <p><?php echo htmlspecialchars($donor['campaign_name']); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="pagination-wrapper">
            <nav id="pagination">
                <ul class="pagination">
                    <?php echo createPaginationLinks($totalPages, $page); ?>
                </ul>
            </nav>
        </div>
    </div>
</div>


<?php renderFooter(); ?>

</body>
</html>

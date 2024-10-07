<?php
// session_start();
require_once __DIR__ . '/../src/helpers.php';
require_once __DIR__ . '/../src/actions/header.php';
require_once __DIR__ . '/../src/actions/footer.php';
require_once __DIR__ . '/../src/actions/donatesphero_donors.php';
$user = currentUser();

$info = [];

try {
    $db = getPDO();
    $query = $db->query("SELECT * FROM campain");
    $info = $query->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}

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

<div class="page-content">
    <div class="campaign-item">
        <div class="container">
     <?php foreach ($info as $data): ?>
        <div class="row no-gutters">
            <div class="col-lg-6-img">
                <div class="item-image">
                    <img src="<?php echo $data['icon']; ?>" width="500px" height="573px" alt="">
                </div>
            </div>
            <div class="col-lg-6-content">
                <div class="campain-details">
                    <h1>
                       <?php echo $data['title']; ?>
                    </h1>
                    <div class="campain-date row">
                        <div class="col-lg-6">
                            <p>
                                Розпочато: 
                                <span><?php echo $data['date']; ?></span>
                            </p>
                        </div>
                    </div>
                    <div class="campain-values">
                        <div class="row">
                            <div class="col-lg-5">
                                <p>
                                    <span>Зібрано</span>
                                    <br>
                                    <?php echo $data['price']; ?>
                                </p>
                            </div>
                            <div class="col-lg-5">
                                <p>
                                    <span>Мета</span>
                                    <br>
                                    <?php echo $data['goal']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="campain-supportes">
                        <div class="row">
                            <div class="col-lg-5">
                                <p>
                                    <span>Підтримало людей</span>
                                </p>
                            </div>
                            <div class="col-lg-5">
                                <p>
                                    <?php echo $data['people_count']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <button class="btn-btn-prim"><a href="">Підтримати</a></button>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    </div>
    <div class="campain-content">
        <div class="container">
            <div class="campain-title-header">
            <h2 class="campain-title">
                <?php echo $data['title']; ?>
            </h2>
            </div>
            <div class="campain-about-info">
            <p class="campain-about">
                <?php echo $data['info']; ?>
            </p>
            </div>
        </div>
    </div>
</div>

<div class="campaign-donors">
  <div class="container">
    <h3>Вже підтримали благодійну кампанію</h3>
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

<div class="contribution">
    <div class="container">
        <div class="widget-header">
            <h2>Підтримати кампанію "<?php echo $data['title'];?>"</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="donation-tabs">
                    <div class="donation-form-wrapper">
                        <form id="donation-form" action="../src/actions/donate.php" method="post">
                            <input type="hidden" name="campaign_name" value="<?php echo $data['title']; ?>">
                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="form-group">
                                        <div id="donationform" role="radiogroup">
                                            <div class="dn-radio-item">
                                                <input type="radio" class="dn-radio" name="sum" value="100" id="amount-100">
                                                <label for="amount-100">100</label>
                                            </div>
                                            <div class="dn-radio-item">
                                                <input type="radio" class="dn-radio" name="sum" value="300" id="amount-300">
                                                <label for="amount-300">300</label>
                                            </div>
                                            <div class="dn-radio-item">
                                                <input type="radio" class="dn-radio" name="sum" value="500" id="amount-500">
                                                <label for="amount-500">500</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="custom-amount">
                                        <input type="text" class="form-control" name="altsum" placeholder="Ваша сума" id="custom-amount">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="donators-name">
                                        <input type="text" class="form-control" name="name" placeholder="Ваше ім’я" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="donators-email">
                                        <input type="email" class="form-control" name="email" placeholder="E-mail" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="privacy">
                                        <div class="custom-check-box">
                                            <input type="hidden" name="DonationForm[privacy]" value="0">
                                            <input type="checkbox" id="donationform-privacy" class="custom-control-input" name="DonationForm[privacy]" value="1" aria-required="true" required>
                                            <label class="custom-label" for="donationform-privacy">
                                                Я ознайомлений (-на) з
                                                <a href="#">політикою конфіденційності</a>
                                                та погоджуюсь, що введена мною особиста інформація буде використана згідно з 
                                                Політикою конфіденційності Фонду
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 submit-col">
                                    <button type="submit" class="btn-sub">Зробити благодійний внесок</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php renderFooter(); ?>

</body>
</html>

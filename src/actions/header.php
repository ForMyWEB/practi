<?php
function renderHeader($user) {
    ?>
    <header class="container-fluid">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <nav>
                        <ul class="d-flex justify-content-between align-items-center">
                            <li class="dropdown">
                                <a href="#">
                                    Меню
                                    <i class="fa-solid fa-caret-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item">
                                        <a href="#">Про нас</a>
                                        <ul class="submenu">
                                            <li><a href="#">Команда фонду</a></li>
                                            <li><a href="#">Звіти та документи</a></li>
                                            <li><a href="#">Реквізити</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="#">Сфери діяльності</a>
                                        <ul class="submenu">
                                            <li><a href="#">Допомога дітям</a></li>
                                            <li><a href="#">Допомога стареньким</a></li>
                                            <li><a href="#">Допомога лікарням</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="#">Благодійність</a>
                                        <ul class="submenu">
                                            <li><a href="#">Допомогти зараз</a></li>
                                            <li><a href="#">Волонтерство</a></li>
                                            <li><a href="#">Для бізнесу</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Отримати допомогу</a></li>
                            <li><a href="../pages/index.php" class="logo">Мрії <span class="color-one">Здійснюються</span></a></li>
                            <?php if ($user) : ?>
                            <li class="dropdown">
                              <a href="#">
                                <?php echo $user['login']; ?>
                                <i class="fa-solid fa-caret-down"></i>
                              </a>
                              <ul class="dropdown-menu">
                                <li class="dropdown-item">
                                  <a href="../actions/logout.php">Вихід</a>
                                </li>
                              </ul>
                            </li>
                          <?php else : ?>
                            <li><a href="../pages/login.php">Вхід</a></li>
                          <?php endif; ?>
                            <li>
                            <button class="btn-donate">
                                <a href="#main-actions" style="color: #fff; text-decoration: none;">Надати допомогу</a>
                            </button>
                        </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <hr>
    </header>
    <?php
}
?>

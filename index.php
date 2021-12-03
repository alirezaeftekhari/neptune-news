<?php
require __DIR__."/Classes/FarsNews.php";
require __DIR__."/Classes/YjcNews.php";
require __DIR__."/Classes/Tasnim.php";
$YjcPolitic = YjcNews::politicsParse();
$YjcSocial = YjcNews::socialParse();
$YjcEconomic = YjcNews::economyParse();

$FarsPolitic = FarsNews::politicsParse();
$FarsSocial = FarsNews::socialParse();
$FarsEconomic = FarsNews::economyParse();

$TasnimPolitic = Tasnim::politicsParse();
$TasnimSocial = Tasnim::socialParse();
$TasnimEconomic = Tasnim::economyParse();
?>
<!DOCTYPE html>
<html lang="fa">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>سامانه جست و جو گر خبر نپتون</title>
    <!-- plugin css for this page -->
    <link
      rel="stylesheet"
      href="./assets/vendors/mdi/css/materialdesignicons.min.css" />


    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- endinject -->
  </head>

  <body>
    <div class="container-scroller">
      <div class="main-panel">

        <header id="header">
          <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
              <div class="navbar-top"></div>
              <div class="navbar-bottom">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <button
                      class="navbar-toggler"
                      type="button"
                      data-target="#navbarSupportedContent"
                      aria-controls="navbarSupportedContent"
                      aria-expanded="false"
                      aria-label="Toggle navigation"
                    >
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div
                      class="navbar-collapse justify-content-center collapse"
                      id="navbarSupportedContent"
                    >
                      <ul
                        class="
                          navbar-nav
                          d-lg-flex
                          justify-content-between
                          align-items-center
                        "
                      >
                        <li>
                          <button class="navbar-close">
                            <i class="mdi mdi-close"></i>
                          </button>
                        </li>
                        <li class="nav-item active">
                          <a class="nav-link active" href="index.php">خانه</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="politics.php"
                            >سیاسی</a
                          >
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="social.php">اجتماعی</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="economic.php">اقتصادی</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div>
                    <a class="navbar-brand">
                      سامانه جست و جو گر خبر نپتون
                    </a>
                  </div>
                </div>
              </div>
            </nav>
          </div>
        </header>

        <!-- partial -->
        <div class="flash-news-banner">
          <div class="container">
            <div class="d-lg-flex align-items-center justify-content-between">
              <div class="d-flex">
                <span class="mr-3 text-danger" id="today"></span>
              </div>
                <?php
                $importantNews = $YjcPolitic[0];
                $importantLink = $importantNews['link'];
                $importantTitle = $importantNews['title'];
                ?>
              <div class="d-flex align-items-center">
                <p class="mb-0"><a target="_blank" href="<?= $importantLink ?>"><?= $importantTitle ?></a></p>
                <span class="badge badge-dark mr-3 ml-3">خبر فوری</span>
              </div>
            </div>
          </div>
        </div>
        <div class="content-wrapper">
          <div class="container">
            <div class="row" data-aos="fade-up">
              <div class="col-xl-8 stretch-card grid-margin">
                  <?php
                  $economyTop = $TasnimEconomic[0];
                  $economyTopTitle = $economyTop['title'];
                  $economyTopSrc = $economyTop['src'];
                  $economyTopLink = $economyTop['link'];
                  $economyTopDescription = $economyTop['description'];
                  ?>
                <div class="position-relative w-100">
                  <img
                    src="<?= $economyTopSrc ?>"
                    alt="banner"
                    class="w-100"
                  />
                  <div class="banner-content">
                    <h3 class="mb-0 bg-light"><a target="_blank" href="<?= $economyTopLink ?>"><?= $economyTopTitle ?></a></h3>
                    <div class="fs-12 bg-dark mt-3"><?= $economyTopDescription ?></div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 stretch-card grid-margin">
                <div class="card bg-dark text-white">
                  <div class="card-body rtl">
                    <h2>آخرین اخبار</h2>

                    <div class="d-flex border-bottom-blue pt-3 pb-4 align-items-center justify-content-between" >
                        <?php
                        $last = $YjcEconomic[0];
                        $lastTitle = $last['title'];
                        $lastLink = $last['link'];
                        $lastDescription= $last['description'];
                        ?>
                      <div class="pl-3">
                        <h5 class="text-info"><a href="<?= $lastLink ?>" target="_blank" class="anchorLink"><?= $lastTitle ?></a></h5>
                        <p class="fs-12"><?= $lastDescription ?></p>
                      </div>
                    </div>

                    <div class="d-flex border-bottom-blue pt-3 pb-4 align-items-center justify-content-between" >
                          <?php
                          $last = $TasnimPolitic[0];
                          $lastTitle = $last['title'];
                          $lastLink = $last['link'];
                          $lastDescription= $last['description'];
                          ?>
                          <div class="pl-3">
                              <h5 class="text-info"><a href="<?= $lastLink ?>" target="_blank" class="anchorLink"><?= $lastTitle ?></a></h5>
                              <p class="fs-12"><?= $lastDescription ?></p>
                          </div>
                      </div>

                    <div class="d-flex border-bottom-blue pt-3 pb-4 align-items-center justify-content-between" >
                          <?php
                          $last = $FarsPolitic[0];
                          $lastTitle = $last['title'];
                          $lastLink = $last['link'];
                          $lastDescription= $last['description'];
                          ?>
                          <div class="pl-3">
                              <h5 class="text-info"><a href="<?= $lastLink ?>" target="_blank" class="anchorLink"><?= $lastTitle ?></a></h5>
                              <p class="fs-12"><?= $lastDescription ?></p>
                          </div>
                      </div>

                  </div>
                </div>
              </div>
            </div>

            <div class="row" data-aos="fade-up">
              <div class="col-lg-12 stretch-card grid-margin">
                <div class="card">
                <h1 class="news-source text-center mt-3">باشگاه خبرنگاران جوان</h1>
                  <div class="card-body">
                    <div class="row">
                        <?php
                        $item = $YjcPolitic[1];
                        $itemTitle = $item['title'];
                        $itemLink = $item['link'];
                        $itemSrc = $item['src'];
                        $itemDescription = $item['description'];
                        ?>
                      <div class="col-sm-4 grid-margin">
                        <div class="position-relative">
                          <div class="rotate-img">
                            <img src="<?=$itemSrc ?>" alt="thumb" class="w-100" />
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-8 grid-margin text-right">
                        <h2 class="mb-2 font-weight-600 rtl">
                            <a class="anchorLink" target="_blank" href="<?= $itemLink ?>">
                            <?=$itemTitle ?>
                            </a>
                        </h2>
                        <p class="mb-0 rtl">
                            <?= $itemDescription ?>
                        </p>
                      </div>
                    </div>
                    <div class="row">
                          <?php
                          $item = $YjcEconomic[1];
                          $itemTitle = $item['title'];
                          $itemLink = $item['link'];
                          $itemSrc = $item['src'];
                          $itemDescription = $item['description'];
                          ?>
                          <div class="col-sm-4 grid-margin">
                              <div class="position-relative">
                                  <div class="rotate-img">
                                      <img src="<?=$itemSrc ?>" alt="thumb" class="w-100" />
                                  </div>
                              </div>
                          </div>
                          <div class="col-sm-8 grid-margin text-right">
                              <h2 class="mb-2 font-weight-600 rtl">
                                  <a class="anchorLink" target="_blank" href="<?= $itemLink ?>">
                                      <?=$itemTitle ?>
                                  </a>
                              </h2>
                              <p class="mb-0 rtl">
                                  <?= $itemDescription ?>
                              </p>
                          </div>
                      </div>
                    <div class="row">
                          <?php
                          $item = $YjcSocial[0];
                          $itemTitle = $item['title'];
                          $itemLink = $item['link'];
                          $itemSrc = $item['src'];
                          $itemDescription = $item['description'];
                          ?>
                          <div class="col-sm-4 grid-margin">
                              <div class="position-relative">
                                  <div class="rotate-img">
                                      <img src="<?=$itemSrc ?>" alt="thumb" class="w-100" />
                                  </div>
                              </div>
                          </div>
                          <div class="col-sm-8 grid-margin text-right">
                              <h2 class="mb-2 font-weight-600 rtl">
                                  <a class="anchorLink" target="_blank" href="<?= $itemLink ?>">
                                      <?=$itemTitle ?>
                                  </a>
                              </h2>
                              <p class="mb-0 rtl">
                                  <?= $itemDescription ?>
                              </p>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row" data-aos="fade-up">
              <div class="col-lg-12 stretch-card grid-margin">
                <div class="card">
                <h1 class="news-source text-center mt-3">خبرگزاری فارس</h1>
                    <div class="card-body">
                        <div class="row">
                            <?php
                            $item = $FarsPolitic[1];
                            $itemTitle = $item['title'];
                            $itemLink = $item['link'];
                            $itemSrc = $item['src'];
                            ?>
                            <div class="col-sm-4 grid-margin">
                                <div class="position-relative">
                                    <div class="rotate-img">
                                        <img src="<?=$itemSrc ?>" alt="thumb" class="w-100" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8 grid-margin text-right">
                                <h2 class="mb-2 font-weight-600 rtl">
                                    <a class="anchorLink" target="_blank" href="<?= $itemLink ?>">
                                        <?=$itemTitle ?>
                                    </a>
                                </h2>
                            </div>
                        </div>
                        <div class="row">
                            <?php
                            $item = $FarsEconomic[0];
                            $itemTitle = $item['title'];
                            $itemLink = $item['link'];
                            $itemSrc = $item['src'];
                            ?>
                            <div class="col-sm-4 grid-margin">
                                <div class="position-relative">
                                    <div class="rotate-img">
                                        <img src="<?=$itemSrc ?>" alt="thumb" class="w-100" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8 grid-margin text-right">
                                <h2 class="mb-2 font-weight-600 rtl">
                                    <a class="anchorLink" target="_blank" href="<?= $itemLink ?>">
                                        <?=$itemTitle ?>
                                    </a>
                                </h2>
                            </div>
                        </div>
                        <div class="row">
                            <?php
                            $item = $FarsSocial[0];
                            $itemTitle = $item['title'];
                            $itemLink = $item['link'];
                            $itemSrc = $item['src'];
                            ?>
                            <div class="col-sm-4 grid-margin">
                                <div class="position-relative">
                                    <div class="rotate-img">
                                        <img src="<?=$itemSrc ?>" alt="thumb" class="w-100" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8 grid-margin text-right">
                                <h2 class="mb-2 font-weight-600 rtl">
                                    <a class="anchorLink" target="_blank" href="<?= $itemLink ?>">
                                        <?=$itemTitle ?>
                                    </a>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>

            <div class="row" data-aos="fade-up">
              <div class="col-lg-12 stretch-card grid-margin">
                <div class="card">
                <h1 class="news-source text-center mt-3">خبرگزاری تسنیم</h1>
                    <div class="card-body">
                        <div class="row">
                            <?php
                            $item = $TasnimPolitic[1];
                            $itemTitle = $item['title'];
                            $itemLink = $item['link'];
                            $itemSrc = $item['src'];
                            $itemDescription = $item['description'];
                            ?>
                            <div class="col-sm-4 grid-margin">
                                <div class="position-relative">
                                    <div class="rotate-img">
                                        <img src="<?=$itemSrc ?>" alt="thumb" class="w-100" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8 grid-margin text-right">
                                <h2 class="mb-2 font-weight-600 rtl">
                                    <a class="anchorLink" target="_blank" href="<?= $itemLink ?>">
                                        <?=$itemTitle ?>
                                    </a>
                                </h2>
                                <p class="mb-0 rtl">
                                    <?= $itemDescription ?>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <?php
                            $item = $TasnimEconomic[1];
                            $itemTitle = $item['title'];
                            $itemLink = $item['link'];
                            $itemSrc = $item['src'];
                            $itemDescription = $item['description'];
                            ?>
                            <div class="col-sm-4 grid-margin">
                                <div class="position-relative">
                                    <div class="rotate-img">
                                        <img src="<?=$itemSrc ?>" alt="thumb" class="w-100" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8 grid-margin text-right">
                                <h2 class="mb-2 font-weight-600 rtl">
                                    <a class="anchorLink" target="_blank" href="<?= $itemLink ?>">
                                        <?=$itemTitle ?>
                                    </a>
                                </h2>
                                <p class="mb-0 rtl">
                                    <?= $itemDescription ?>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <?php
                            $item = $TasnimSocial[0];
                            $itemTitle = $item['title'];
                            $itemLink = $item['link'];
                            $itemSrc = $item['src'];
                            $itemDescription = $item['description'];
                            ?>
                            <div class="col-sm-4 grid-margin">
                                <div class="position-relative">
                                    <div class="rotate-img">
                                        <img src="<?=$itemSrc ?>" alt="thumb" class="w-100" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8 grid-margin text-right">
                                <h2 class="mb-2 font-weight-600 rtl">
                                    <a class="anchorLink" target="_blank" href="<?= $itemLink ?>">
                                        <?=$itemTitle ?>
                                    </a>
                                </h2>
                                <p class="mb-0 rtl">
                                    <?= $itemDescription ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- main-panel ends -->
        <!-- container-scroller ends -->

        <!-- partial:partials/_footer.html -->
        <footer>
          <div class="footer-bottom">
            <div class="container">
              <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="fs-14 font-weight-600 rtl">
                      این سامانه با ذکر منبع به اشتراک اخبار خبرگزاری ها میپردازد.
                    </div>
                </div>
              </div>
            </div>
          </div>
        </footer>

        <!-- partial -->
      </div>
    </div>
    <!-- inject:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="assets/vendors/aos/dist/aos.js/aos.js"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="./assets/js/demo.js"></script>
    <script src="./assets/js/jquery.easeScroll.js"></script>
    <!-- End custom js for this page-->
  </body>
</html>

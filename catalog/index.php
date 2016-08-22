<!DOCTYPE html>
<html lang="en">

<head>
    <title>Seltex - CAT, Cummins, Detroit Diesel - Запчасти американских грузовиков - Грузовые запчасти из США - Запчасти Freightliner, Peterbilt, Kenworth, Volvo, CAT, Cummins. Запчасти Кат. Катерпиллер. </title>
    <meta name="description" content="Запчасти Caterpillar, Cummins, Detroit Diesel - Американские грузовые запчасти - Запчасти американских грузовиков - Грузовые запчасти из США - Запчасти Freightliner, Peterbilt, Kenworth, Volvo - Запчасти грузовиков США - Запчасти американских двигателей - Запчасти из Америки для грузовиков и грузовых двигателей - Запчасти Кат - Запчасти Катерпиллер">
    <meta name="keywords" content="Запчасти Caterpillar, запчасти Cat, запчасти грузовиков сша, запчасти американских грузовиков, запчасти Cummins,  запчасти DD, запчасти Detroit Diesel, Volvo, cat, caterpillar, Freightliner, Volvo, Peterbilt, Kenworth, Mack, International, Sterling, турбины, двигатели, запчасти двигателей, cелтекс, сэлтекс, селтикс, сэлтэкс, сэлтикс, seltex, Seltex, SELTEX, Кат, Катерпиллер, Катерпиллар, Катерпилар, Катерпилер">
    <meta name="author" content="Seltex, Inc">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/stylish-portfolio.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="img/seltexlogo.png" rel="icon" type="image/ico">
</head>

<body>

    <nav class="navbar-inverse my-navbar navbar-fixed-top">
        <div class="container-fluid">
            <div class="col-sm-3 navbar-header">
                <a class="navbar-brand my-bavbar-brand" style="" href="#top">Seltex</a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--                <div class="my-logo" href="#top"><img src="img/seltexLogoTranspYellow.png" height="40" width="170"></div>-->
            </div>

            <!-- /.navbar-collapse -->
            <form class="col-sm-3 navbar-form navbar-right" role="search" style="height:"  action="/catalog/index.php" method="get">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Поиск в каталоге" name="part" value = "<?=$_GET["part"];?>">
                    <span class="input-group-btn">
                        <button class="btn btn-warning my-search-button" type="submit">Поиск</button>
                    </span>
                </div>
            </form>
            <div class="collapse navbar-collapse col-sm-6 navbar-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="/">На главную</a></li>
                    <li><a href="#groups">Группы</a></li>
                    <li><a href="#contact">Контакты</a></li>
                </ul>
            </div>
        </div>
        <!-- /.container-fluid -->
    </nav>

    <div id="top" class="navbar-space"></div>
    <div class="navbar-space"></div>
    <div class="navbar-space"></div>
    <div class="col-xs-12">
<?php
    require ('getData.php');
?>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <p class="text-muted">Найдено результатов: <?=sizeof($parts);?></p>
                <hr class="small">
            </div>
        </div>
    </div>

<?php
    foreach($parts as $value) {
        echo '<div class="row my-panel">
            <div class="col-sm-12">
                <span class="col-sm-12">
                '.$value["description"].'
                </span>
            </div>
            <div class="col-sm-6">
                <span class="col-sm-12" style="font-size:18px;"><span class="" style="font-weight:bold; color: firebrick">
                '.$value["price"].'
                </span><i class="fa fa-rub fa-fw"></i></span>

            </div>
            <div class="col-sm-6">
                <span class="col-xs-6" style="">На складе:
                '.$value["qty"].'
                </span>
                <span class="col-xs-6" style="">В пути:
                '.$value["qtyOrdered"].'
                </span>
            </div>
        </div>
        <hr>';
    }
?>
    </div>
    <div class="navbar-space"></div>
    <div class="navbar-space"></div>
    <div class="navbar-space"></div>
    <div class="navbar-space"></div>
    <div class="navbar-space"></div>


    <!-- Callout -->
    <aside id="groups" class="callout">
        <div class="text-vertical-center">
            <h1 class="goods-groups">Группы товаров</h1>
        </div>
    </aside>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <a href="/catalog/index.php?part=%D0%B2%D0%BA%D0%BB%D0%B0%D0%B4%D1%8B%D1%88+CAT" class="portfolio-link helper" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <span>Вкладыши</span>
                            </div>
                        </div>
                        <img src="img/bearings.jpg" class="img-responsive portfolio-img" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="/catalog/index.php?part=%D0%BF%D1%80%D0%BE%D0%BA%D0%BB%D0%B0%D0%B4%D0%BA%D0%B8+CAT" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <span>Наборы прокладок</span>
                            </div>
                        </div>
                        <img src="img/3406set.jpeg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="/catalog/index.php?part=%D0%BA%D0%BE%D0%BB%D1%8C%D1%86+%D0%BF%D0%BE%D1%80%D1%88%D0%BD%D1%8F+CAT" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <span>Кольца поршня</span>
                            </div>
                        </div>
                        <img src="img/rings.jpeg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="/catalog/index.php?part=%D0%B4%D0%B0%D1%82%D1%87%D0%B8%D0%BA+CAT" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <span>Датчики</span>
                            </div>
                        </div>
                        <img src="img/sensor.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="/catalog/index.php?part=%D0%9E%D1%85%D0%BB%D0%B0%D0%B4%D0%B8%D1%82%D0%B5%D0%BB%D1%8C+CAT" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <span>Охладители</span>
                            </div>
                        </div>
                        <img src="img/cooler.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="/catalog/index.php?part=%D0%BF%D0%BE%D0%BC%D0%BF%D0%B0+CAT" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <span>Помпы</span>
                            </div>
                        </div>
                        <img src="img/pump.png" class="img-responsive" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Map -->
    <section id="contact" class="map">
        <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed/v1/place?q=59.761528,30.474268
        &center=59.761528,30.474268
        &zoom=11
        &key=AIzaSyDUC12nb9QjtvAGwwraeuBrBLDD9gmDwoU"></iframe>
        <br/>
        <small>
            <a href="https://www.google.com/maps/embed/v1/place?q=59.761528,30.474268&center=59.761528,30.474268&key=AIzaSyDUC12nb9QjtvAGwwraeuBrBLDD9gmDwoU"></a>
        </small>
        </iframe>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Seltex</strong>
                    </h4>
                    <p>Московское шоссе, 231 к. 5
                        <br>Санкт-Петербург, 196627</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i>+7 812 959-13-57</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:name@example.com">sales@seltex.ru</a>
                        </li>
                        <li><i class="fa fa-skype fa-fw"></i>pro-diesel</li>
                        <img src="https://wwp.icq.com/scripts/online.dll?icq=456201946&amp;img=5" alt="ICQ" width="18" height="18">
                        <span> 456201946</span>
                    </ul>
                    <br>

                    <!--
                    <ul class="list-inline">
                        <li>
                            <a href="#"><i class="fa fa-vk fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
-->

                    <hr class="small">
                    <p class="text-muted">Copyright &copy; www.seltex.ru 2016</p>
                </div>
            </div>
        </div>
        <a id="to-top" href="#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
        // Scrolls to the selected menu item on the page
        $(function () {
            $('a[href*=#]:not([href=#],[data-toggle],[data-target],[data-slide])').click(function () {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });
        });
        //#to-top button appears after scrolling
        var fixed = false;
        $(document).scroll(function () {
            if ($(this).scrollTop() > 250) {
                if (!fixed) {
                    fixed = true;
                    // $('#to-top').css({position:'fixed', display:'block'});
                    $('#to-top').show("slow", function () {
                        $('#to-top').css({
                            position: 'fixed',
                            display: 'block'
                        });
                    });
                }
            } else {
                if (fixed) {
                    fixed = false;
                    $('#to-top').hide("slow", function () {
                        $('#to-top').css({
                            display: 'none'
                        });
                    });
                }
            }
        });
        // Disable Google Maps scrolling
        // See http://stackoverflow.com/a/25904582/1607849
        // Disable scroll zooming and bind back the click event
        var onMapMouseleaveHandler = function (event) {
            var that = $(this);
            that.on('click', onMapClickHandler);
            that.off('mouseleave', onMapMouseleaveHandler);
            that.find('iframe').css("pointer-events", "none");
        }
        var onMapClickHandler = function (event) {
                var that = $(this);
                // Disable the click handler until the user leaves the map area
                that.off('click', onMapClickHandler);
                // Enable scrolling zoom
                that.find('iframe').css("pointer-events", "auto");
                // Handle the mouse leave event
                that.on('mouseleave', onMapMouseleaveHandler);
            }
            // Enable map zooming with mouse scroll when the user clicks the map
        $('.map').on('click', onMapClickHandler);
    </script>

</body>

</html>

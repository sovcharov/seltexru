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
    <div class="top-bar">
        <div class="col-xs-5" style="">
            <img src="img/seltexLogoTranspYellow.png" width="220" height="48" class="" alt="Seltex">
        </div>
        <div class="col-xs-3 hidden-xs" style=" line-height:50px; text-align:right; font-size:18px;">
            <i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:sales@seltex.ru">sales@seltex.ru</a>
        </div>
        <div class="col-xs-3 visible-xs" style=" line-height:50px; text-align:right; font-size:18px;">

        </div>
        <div class="col-xs-4" style="line-height:50px; text-align:right; font-size:18px;"  onclick="callMe()">
            <a href="#" ><img src="img/phonecall.png" width="" height="" class="" alt="Seltex"></a>
        </div>
        <div class = "phoneEnter">
            <div id="phoneInput">
                <div class="input-group">
                    <input type="text" id="phone" class="form-control input-lg" placeholder="Введите номер телефона" name="phone" oninput ="checkPhone()">
                    <span class="input-group-btn">
                        <button id = "button" class="btn btn-danger btn-lg" type="submit" onclick = "sendPhone()">Заказать</button>
                    </span>
                </div>

            </div>
            <a href="#" onclick="hide();"><span class="glyphicon glyphicon-remove" aria-hidden="true" style = "color:gray; font-size:20px"></span></a>
        </div>
    </div>
    <nav class="navbar-inverse my-navbar navbar-fixed-top">
        <div class="container-fluid">
            <div class="col-sm-3 navbar-header">
                <span class="navbar-brand" style="width:240px; font-size:20px; font-family: Arial black; padding:5px; text-align:center;">(812) 320-52-10<br> <span style="font-size:14px; font-family: arial;">8-800-550-52-10 <span style="font-size:12px; color: #18BC9C; font-family: arial;">бесплатный</span></span></span>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--                <div class="my-logo" href="#top"><img src="img/seltexLogoTranspYellow.png" height="40" width="170"></div>-->
            </div>

            <!-- /.navbar-collapse -->
            <form class="col-sm-3 navbar-form navbar-right" role="search" style="height:" action="/catalog/index.php" method="get">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Поиск в каталоге" name="part" value="<?=$_GET["part"];?>">
                    <span class="input-group-btn">
                        <button class="btn btn-warning my-search-button" type="submit">Поиск</button>
                    </span>
                </div>
            </form>
            <div class="collapse navbar-collapse col-sm-6 navbar-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="/">На главную</a></li>
                    <li><a href="#groups">Группы</a></li>
                    <li style=""><a href="#contact" class="contact-button" style="color: #18BC9C;">Контакты</a></li>
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
        <div class="container" style="margin-top:30px;">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <p class="text-muted">По фразе <span style="color:red"><?=$_GET["part"];?></span> найдено результатов: <span style="color:red"><?=sizeof($parts);?></span>
                    </p>
                </div>
            </div>
        </div>
        <section  class="">
            <table class = "table table-condensed">
                <tr><th class="">#</th><th>Наименование детали</th><th class="col-xs-1">Цена, <i class="fa fa-rub fa-fw" style="font-size:12px;"></i></th><th class="col-xs-1">На складе</th><th class="col-xs-1">В пути</th></tr>
                <?php
                $line = 0;
                foreach($parts as $value) {
                    $line += 1;
                    echo '<tr>';
                    echo '<td>'.$line.'</td>';
                    if($value['link']) {
                        $value['description'] = $value['description'] .' <a href="'.$value['link'].'" class="glyphicon glyphicon-search" aria-hidden="true" style="color:red; padding-left:10px;" title="Показать содержание"></a>';
                    }
                    echo '<td>'.$value["description"].' <a href="http://seltex.ru:5555/catalog/'.$value['ProductID'].'" class="glyphicon glyphicon-info-sign" aria-hidden="true" style="color:#18BC9C; padding-left:10px;" title="Показать содержание" target="_blank"></a></td>';
                    if($value["price"]) {
                        echo '<td>'.number_format($value["price"],2,',',' ').'</td>';
                    } else {
                        echo '<td>-</td>';
                    }
                    if($value["qty"]=="0") {
                        echo '<td>'.$value["qty"].'</td>';

                    } else if ($value["qty"]>"2") {
                        echo '<td style="background-color:#B8FFDB">'.$value["qty"].'</td>';
                    } else {
                        echo '<td style="background-color:#ffc2b3">'.$value["qty"].'</td>';
                    }
                    if($value["qtyOrdered"]=="0") {
                        echo '<td>'.$value["qtyOrdered"].'</td>';

                    } else if ($value["qtyOrdered"]>"2") {
                        echo '<td style="background-color:#B8FFDB">'.$value["qtyOrdered"].'</td>';
                    } else {
                        echo '<td style="background-color:#ffc2b3">'.$value["qtyOrdered"].'</td>';
                    }
                    echo '</tr>';
                }
                ?>
            </table>
        </section>
    </div>
    <div class="tooltip">Hover over me
      <span class="tooltiptext">Tooltip text</span>
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
    <section class="map">
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
<footer id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <h4><strong>Seltex</strong>
                </h4>
                <p>Московское шоссе, 231 к. 5
                    <br>Санкт-Петербург, 196627</p>
                    <ul class="list-unstyled">
                        <li class="contacts-list" style="font-weight:bold; color:darkred;"><i class="fa fa-phone fa-fw"></i>+7 812 320-52-10</li>
<li class="contacts-list" style="font-weight:bold; color:darkred;">8-800-550-52-10</li>
<li class="contacts-list" style="font-weight:bold; color:darkred;"><i class="fa fa-mobile fa-fw"></i>+7 921 959-13-57</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:sales@seltex.ru">sales@seltex.ru</a>
                        </li>
                        <li><i class="fa fa-skype fa-fw"></i>pro-diesel</li>
                        <li>
                            <img src="https://wwp.icq.com/scripts/online.dll?icq=616856441&amp;img=5" alt="ICQ" width="24" height="24">
                            <span> 616856441</span>
                        </li>
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

<!-- Additional Functions JavaScript -->
<script src="js/main.js"></script>

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
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/57d69c113bec6867d943a729/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter39588180 = new Ya.Metrika({
                id:39588180,
                clickmap:true,
                trackLinks:true,
                accurateTrackBounce:true
            });
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
    s = d.createElement("script"),
    f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = "https://mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/39588180" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</body>

</html>

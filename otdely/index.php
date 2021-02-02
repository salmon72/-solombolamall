<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Отделы");
?>
    <section class="otdely_category desktop">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="otdely_category-name active">Все</div>
                    <div class="otdely_category-name">Одежда</div>
                    <div class="otdely_category-name">Обувь</div>
                    <div class="otdely_category-name">Товары для детей</div>
                    <div class="otdely_category-name">Нижнее белье</div>
                    <div class="otdely_category-name">Сумки, аксессуары</div>
                    <div class="otdely_category-name">Косметика, парфюмерия</div>
                    <div class="otdely_category-name">Аптеки, Оптики</div>
                    <div class="otdely_category-name">Товары для дома</div>
                    <div class="otdely_category-name">Ювелирные украшения</div>
                    <div class="otdely_category-name">Зоотовары</div>
                    <div class="otdely_category-name">Автотовары</div>
                    <div class="otdely_category-name">Техника и электроника</div>
                    <div class="otdely_category-name">Продукты питания</div>
                    <div class="otdely_category-name">Цветы и подарки</div>
                    <div class="otdely_category-name">Сотовая связь</div>
                </div>
            </div>
        </div>
    </section>
    <section class="otdely_category mobile">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="slider slider_menu">
                        <div class="otdely_category-name active">Все</div>
                        <div class="otdely_category-name">Одежда</div>
                        <div class="otdely_category-name">Обувь</div>
                        <div class="otdely_category-name">Товары для детей</div>
                        <div class="otdely_category-name">Нижнее белье</div>
                        <div class="otdely_category-name">Сумки, аксессуары</div>
                        <div class="otdely_category-name">Косметика, парфюмерия</div>
                        <div class="otdely_category-name">Аптеки, Оптики</div>
                        <div class="otdely_category-name">Товары для дома</div>
                        <div class="otdely_category-name">Ювелирные украшения</div>
                        <div class="otdely_category-name">Зоотовары</div>
                        <div class="otdely_category-name">Автотовары</div>
                        <div class="otdely_category-name">Техника и электроника</div>
                        <div class="otdely_category-name">Продукты питания</div>
                        <div class="otdely_category-name">Цветы и подарки</div>
                        <div class="otdely_category-name">Сотовая связь</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="otdely">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <a href="#">
                        <div class="otdel_item">
                            <div class="otdel_item-left">
                                <img src="/local/templates/solombalamall/img/mag1.jpg" alt="">
                            </div>
                            <div class="otdel_item-right">
                                <div class="otdel_item-title">Kari</div>
                                <div class="otdel_item-cat">Магазин обуви</div>
                                <div class="otdel_item-time">
                                    <span>1 этаж, павильон 25</span>
                                    <span>10:00 - 21:00</span>
                                </div>
                                <div class="otdel_item-link">Подробнее</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-10 col-md-offset-1">
                    <a href="#">
                        <div class="otdel_item">
                            <div class="otdel_item-left">
                                <img src="/local/templates/solombalamall/img/mag2.jpg" alt="">
                            </div>
                            <div class="otdel_item-right">
                                <div class="otdel_item-title">Счастливый взгляд</div>
                                <div class="otdel_item-cat">Салон оптики</div>
                                <div class="otdel_item-time">
                                    <span>1 этаж, павильон 25</span>
                                    <span>10:00 - 21:00</span>
                                </div>
                                <div class="otdel_item-link">Подробнее</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <script>
        $('.slider_menu').slick({
            dots: false,
            arrows: false,
            autoplay: false,
            autoplaySpeed: 5000,
            slidesToScroll: 2,
            LazyLoad: 'progressive',
            speed: 500,
            pauseOnFocus: false,
            touchMove: true,
            variableWidth: true
        });
    </script>
<? require($_SERVER["DOCUMENT_ROOT"] . "/include/footer_tpl.php"); ?>
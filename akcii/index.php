<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Акции и события");
?>


    <section class="otdely_category desktop">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="otdely_category-name active">Все</div>
                    <div class="otdely_category-name">Акции и события</div>
                    <div class="otdely_category-name">Новости</div>

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
                        <div class="otdely_category-name">Акции и события</div>
                        <div class="otdely_category-name">Новости</div>
                    </div>

                </div>
            </div>
        </div>
    </section>
<section class="sale">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="#">
                    <div class="news_item">
                        <div class="news_item_top">
                            <img src="/local/templates/solombalamall/img/news1.jpg" alt="">
                        </div>
                        <div class="news_bottom">
                            <div class="news_bott-title">"Соломбала молл" зажёг свои огни и провел праздничную программу по открытию ёлки!</div>
                            <div class="news_bott-date">17.10.2012 - 17.12.2020</div>
                            <div class="news_bott-descr">Друзья! Это свершилось! 17 ноября для юных зрителей проведены театрализованное представление, игрову...</div>
                            <div class="news_bott-button">Читать полностью</div>
                        </div>
                    </div>
                </a>

            </div>
            <div class="col-md-4">
                <a href="#">
                    <div class="news_item">
                        <div class="news_item_top">
                            <img src="/local/templates/solombalamall/img/news2.jpg" alt="">
                        </div>
                        <div class="news_bottom">
                            <div class="news_bott-title">Анонс мероприятий 14 и 15 февраля</div>
                            <div class="news_bott-date">17.10.2012 - 17.12.2020</div>
                            <div class="news_bott-descr">Отличный повод отметить торжество любви и романтики в ТРЦ «Соломбала Молл» в День всех в...</div>
                            <div class="news_bott-button">Читать полностью</div>
                        </div>
                    </div>
                </a>

            </div>
            <div class="col-md-4">
                <a href="#">
                    <div class="news_item">
                        <div class="news_item_top">
                            <img src="/local/templates/solombalamall/img/news3.jpg" alt="">
                        </div>
                        <div class="news_bottom">
                            <div class="news_bott-title">Финал конкурса “Я-супер мама”</div>
                            <div class="news_bott-date">17.10.2012 - 17.12.2020</div>
                            <div class="news_bott-descr">Друзья, 23 ноября в 15:00 мы узнаем имя победительницы и обладательницы титула «Супер мама»! Не сомн...</div>
                            <div class="news_bott-button">Читать полностью</div>
                        </div>
                    </div>
                </a>

            </div>
            <div class="col-md-4">
                <a href="#">
                    <div class="news_item">
                        <div class="news_item_top">
                            <img src="/local/templates/solombalamall/img/news1.jpg" alt="">
                        </div>
                        <div class="news_bottom">
                            <div class="news_bott-title">"Соломбала молл" зажёг свои огни и провел праздничную программу по открытию ёлки!</div>
                            <div class="news_bott-date">17.10.2012 - 17.12.2020</div>
                            <div class="news_bott-descr">Друзья! Это свершилось! 17 ноября для юных зрителей проведены театрализованное представление, игрову...</div>
                            <div class="news_bott-button">Читать полностью</div>
                        </div>
                    </div>
                </a>

            </div>
            <div class="col-md-4">
                <a href="#">
                    <div class="news_item">
                        <div class="news_item_top">
                            <img src="/local/templates/solombalamall/img/news2.jpg" alt="">
                        </div>
                        <div class="news_bottom">
                            <div class="news_bott-title">Анонс мероприятий 14 и 15 февраля</div>
                            <div class="news_bott-date">17.10.2012 - 17.12.2020</div>
                            <div class="news_bott-descr">Отличный повод отметить торжество любви и романтики в ТРЦ «Соломбала Молл» в День всех в...</div>
                            <div class="news_bott-button">Читать полностью</div>
                        </div>
                    </div>
                </a>

            </div>
            <div class="col-md-4">
                <a href="#">
                    <div class="news_item">
                        <div class="news_item_top">
                            <img src="/local/templates/solombalamall/img/news3.jpg" alt="">
                        </div>
                        <div class="news_bottom">
                            <div class="news_bott-title">Финал конкурса “Я-супер мама”</div>
                            <div class="news_bott-date">17.10.2012 - 17.12.2020</div>
                            <div class="news_bott-descr">Друзья, 23 ноября в 15:00 мы узнаем имя победительницы и обладательницы титула «Супер мама»! Не сомн...</div>
                            <div class="news_bott-button">Читать полностью</div>
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
            loop: true,
            autoplaySpeed: 5000,
            slidesToScroll: 2,
            LazyLoad: 'progressive',
            speed: 500,
            pauseOnFocus: false,
            touchMove: true,
            variableWidth: true
        });
    </script>
<?require($_SERVER["DOCUMENT_ROOT"]."/include/footer_tpl.php");?>
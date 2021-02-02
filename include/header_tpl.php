<?
$urldecodestringMain = substr($_SERVER["REQUEST_URI"],20);
$urldecodestringMain = urldecode($urldecodestringMain);

$urldecodestringFilter = substr($_SERVER["REQUEST_URI"],18);
$urldecodestringFilter = urldecode($urldecodestringFilter);

$urldecodestringLocation = substr($_SERVER["REQUEST_URI"],25);
$urldecodestringLocation = urldecode($urldecodestringLocation);


if(stripos($_SERVER["REQUEST_URI"], "category") !== false){?>
  <script>
  $(document).ready(function(){
    $("a[data-category='<?=$urldecodestringMain;?>']").click();
  });
  </script>
<?}
if(stripos($_SERVER["REQUEST_URI"], "filter") !== false){?>
  <script>
  $(document).ready(function(){
    $("span[data-category='<?=$urldecodestringFilter;?>']").click();
  });
  </script>
<?}?>
<?if(stripos($_SERVER["REQUEST_URI"], "openmap") !== false){?>
  <script>
  $(document).ready(function(){

    $(".row.desktop.filters").css("display","none");
    $(".workArea").css("display","none");
    $(".row.map").addClass("show");
    $(".filtren.maps").css("display","block");
    $(".first_floor_select.select_flor_click.t_a_divisions").click();
  });
  </script>
<?}?>
<style>ul.main_menu{display: block;}</style>
<div class="upHead" style="display: none">
  <div class="container">
    <div class="row upperhead">
      <div class="col-md-6">
<span>как добраться</span> <a class="openLocationModalClick" style="color:white;cursor:pointer;" data-toggle="modal" data-target="#locationModalOpen">архангельск, ул. Советская, 25</a>
      </div>
      <div class="col-md-4" style="padding: 0 !important;">
        <div class="social-div" style="padding: 5px 0 0 0!important; height: 48px; justify-content: flex-end;">
          <a href="https://vk.com/solombala_mall" target="_blank">
            <svg
               xmlns="http://www.w3.org/2000/svg"
               xmlns:xlink="http://www.w3.org/1999/xlink"
               width="34px" height="20px">
              <image  x="0px" y="0px" width="34px" height="20px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACIAAAAUCAQAAABCbSf5AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfiDBMMFwb1/t2eAAACeUlEQVQ4y4XUXYiVVRTG8WfOfDijklo6KU0xUdmBKboo8KNUOH0IkUGQSGRQQleRQl1UJHXRjVGE4EeBRHRR0ReFF2WEEQ1hIRSOZOrkRFrT6NSFMmUdm/Pr4rynGc9M+Lw3+1lr7T/7XYu9WyRrsyJtqWskr+aXJEkly9Kd9pzLqezPp1FU9OSBdKclpZRSyh/Znf6oOF/fu0iXd5uir2kVMcvBpsxZ5bbMSiLvZzRJS9alnEp+yL1Jkr0ZTCmX5448mBfzXZJKrsuZvJfx1FLLzKxPZy6NmY7iSRGxE7u1ed5veFxEqxNYJeJNvF3Uxmo1v1sQ8Rh+dYmIW/C3a8VmfCRitp+xQvQ4jTUFotVX2CURcw3jqSKxD6+LDegXMccIloiXcEhHAdmIP5XrkHgaIxaIuAs1N7sbX4uYZxRXu0kV6wvEjcbwnDQgFxvGliL9Do7Ygc+Lk4yq2eAI9iiJ6HYU/WZMQOJRjFksYqGhYnzbi18cQA0/uUJEu48x7Mr67gak0wA+LFyf/aoG9RX+IefwjesL/wT+cmtjSg1IrAb3Fa5D2RwT2Rus1FWs2w1i80Q2kwp34ZReucDX6kvstWg6yDyD+ELnBTErjeGga6ZCYrmzeEvblG1rPWPZJF9xEkP1LjUX3w8+MP+86CZQs7U+0qJLx3Dc4qmQeNg/OOye4t5GDOAw+GSiExY5gH26WhrPxCStyc70JPk2e3IopzMjL2d+lqQvr6QjQ9mWY5GkmqV5NqUsnb5xl9nmTNO7URa3+VGzxvROd5K6enNnVuWqzE5SzRt5IbUkC/NIbs/c/6qOZ0s++39IQx1JxjM+JVZXNUn+BahY6ihitvhYAAAAAElFTkSuQmCC" />
            </svg>
          </a>
          <a href="https://www.instagram.com/solombala_mall/" target="_blank">
            <svg
               xmlns="http://www.w3.org/2000/svg"
               xmlns:xlink="http://www.w3.org/1999/xlink"
               width="30px" height="30px">
              <image  x="0px" y="0px" width="30px" height="30px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAQAAACROWYpAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfiDBMMFy+3TEXyAAAB3ElEQVQ4y6WVsUtbURTGf3kvBZss7WjBxTEurmmgcyq0/4Hg1Emo/imFQjvppkOdOghSFwWpgoNQOoigQwKOzRITaV5+HXLz8l5TrOGdM91zzve+c+9957slCRazwgpLLPCcOcpElEJGhgzo84sWP9lnnyTNiNj0ysfalc0RqiTAOh+IAOjRokOf3wwZN1Ui4glzPGOBpwAMec/HEXPTRNU9G0bygEc23FM1sSkYh4Y3H4RlfTM0H+PbwPp/UM2v7vpCAvsb/Kxq45/lZcuZ1Zmqu2JD1U8RNaDHd/L2km3a3HNPm23qAFQAqAKn9IAlvFEvc3xVd6auZ8eqr/zhqTURL9Ub7KhnOeh5AHQ98cRuWJ1b/WsLHeyrR5nwiLXjmrGIsWt2Avuk6kjt40A9TIP1AF3MbWQxwOtp5FAdRETAMD2odwBscJ07vms2MlkCIkLVg/SLbbUbGs56bFdtp+sD1SjHUGYeuEinZmIJF8A85WwwooDlwQNugWXiqbqYZeCWQR4spGMP34AKq1PgVSohOx5TsNBVFfxJCv2ejx+MbE0YjGP1bkp+6m7ZNjGx5VZmr2M5ulOPZxGDiQcxmEWGJp7KULmIAE6k98us0ltY9As+N6NxfD3rQ/cHP7SMz/T6jfAAAAAASUVORK5CYII=" />
            </svg>
          </a>
        </div>
      </div>
      <div class="col-md-2">
       <a href="/magaziny/?show=map">карта центра</a>
      </div>
    </div>
  </div>
</div>


<div class="yellow_block"></div>
<div class="header_search">

    <div class="container">
        <div class="row">

            <div class="col-md-10 col-md-offset-1">
                <div class="close_search">
                    <img src="/local/templates/solombalamall/img/close_button.svg" alt="">
                </div>
                <form action="" class="search-head">
                    <div style="background: url(/local/templates/solombalamall/img/search_head.svg) center center / cover no-repeat;width: 15px;height:15px;position: absolute;top:6px;left: 17px;"></div>
                    <input type="search" class="search_input" placeholder="Что ищем?">
                    <button type="submit">Найти</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="upHead">
    <div class="container">
        <div class="row upperhead">
            <div class="col-md-8">
                <a class="openLocationModalClick" style="cursor:pointer;margin-right:52px" data-toggle="modal" data-target="#locationModalOpen">архангельск, ул. Советская, 25</a>
                <div class="head_address">ТРЦ 10:00 - 21:00</div>
                <div class="head_address">ЛЕНТА 09:00 - 23:00</div>
            </div>
            <div class="col-md-2" style="padding: 0 !important;">
                <div class="social-div" style="padding: 5px 0 0 0!important; height: 48px; justify-content: start;">
                    <a href="https://vk.com/solombala_mall" target="_blank">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="34px" height="20px">
                            <image  x="0px" y="0px" width="34px" height="20px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACIAAAAUCAQAAABCbSf5AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfiDBMMFwb1/t2eAAACeUlEQVQ4y4XUXYiVVRTG8WfOfDijklo6KU0xUdmBKboo8KNUOH0IkUGQSGRQQleRQl1UJHXRjVGE4EeBRHRR0ReFF2WEEQ1hIRSOZOrkRFrT6NSFMmUdm/Pr4rynGc9M+Lw3+1lr7T/7XYu9WyRrsyJtqWskr+aXJEkly9Kd9pzLqezPp1FU9OSBdKclpZRSyh/Znf6oOF/fu0iXd5uir2kVMcvBpsxZ5bbMSiLvZzRJS9alnEp+yL1Jkr0ZTCmX5448mBfzXZJKrsuZvJfx1FLLzKxPZy6NmY7iSRGxE7u1ed5veFxEqxNYJeJNvF3Uxmo1v1sQ8Rh+dYmIW/C3a8VmfCRitp+xQvQ4jTUFotVX2CURcw3jqSKxD6+LDegXMccIloiXcEhHAdmIP5XrkHgaIxaIuAs1N7sbX4uYZxRXu0kV6wvEjcbwnDQgFxvGliL9Do7Ygc+Lk4yq2eAI9iiJ6HYU/WZMQOJRjFksYqGhYnzbi18cQA0/uUJEu48x7Mr67gak0wA+LFyf/aoG9RX+IefwjesL/wT+cmtjSg1IrAb3Fa5D2RwT2Rus1FWs2w1i80Q2kwp34ZReucDX6kvstWg6yDyD+ELnBTErjeGga6ZCYrmzeEvblG1rPWPZJF9xEkP1LjUX3w8+MP+86CZQs7U+0qJLx3Dc4qmQeNg/OOye4t5GDOAw+GSiExY5gH26WhrPxCStyc70JPk2e3IopzMjL2d+lqQvr6QjQ9mWY5GkmqV5NqUsnb5xl9nmTNO7URa3+VGzxvROd5K6enNnVuWqzE5SzRt5IbUkC/NIbs/c/6qOZ0s++39IQx1JxjM+JVZXNUn+BahY6ihitvhYAAAAAElFTkSuQmCC" />
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/solombala_mall/" target="_blank">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="30px" height="30px">
                            <image  x="0px" y="0px" width="30px" height="30px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAQAAACROWYpAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfiDBMMFy+3TEXyAAAB3ElEQVQ4y6WVsUtbURTGf3kvBZss7WjBxTEurmmgcyq0/4Hg1Emo/imFQjvppkOdOghSFwWpgoNQOoigQwKOzRITaV5+HXLz8l5TrOGdM91zzve+c+9957slCRazwgpLLPCcOcpElEJGhgzo84sWP9lnnyTNiNj0ysfalc0RqiTAOh+IAOjRokOf3wwZN1Ui4glzPGOBpwAMec/HEXPTRNU9G0bygEc23FM1sSkYh4Y3H4RlfTM0H+PbwPp/UM2v7vpCAvsb/Kxq45/lZcuZ1Zmqu2JD1U8RNaDHd/L2km3a3HNPm23qAFQAqAKn9IAlvFEvc3xVd6auZ8eqr/zhqTURL9Ub7KhnOeh5AHQ98cRuWJ1b/WsLHeyrR5nwiLXjmrGIsWt2Avuk6kjt40A9TIP1AF3MbWQxwOtp5FAdRETAMD2odwBscJ07vms2MlkCIkLVg/SLbbUbGs56bFdtp+sD1SjHUGYeuEinZmIJF8A85WwwooDlwQNugWXiqbqYZeCWQR4spGMP34AKq1PgVSohOx5TsNBVFfxJCv2ejx+MbE0YjGP1bkp+6m7ZNjGx5VZmr2M5ulOPZxGDiQcxmEWGJp7KULmIAE6k98us0ltY9As+N6NxfD3rQ/cHP7SMz/T6jfAAAAAASUVORK5CYII=" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-md-2">
                <a href="/magaziny/?show=map"><span>карта центра</span></a>
            </div>
        </div>
    </div>
</div>


<div class="mobile-menu">
    <div class="close_menu-button icon_button">
        <img src="/local/templates/solombalamall/img/close_button.png" alt="">
    </div>
    <ul class="info">
        <li><span>Архангельск, ул. Советская, 25</span></li>
        <li><span>ТРЦ 10:00 - 21:00</span></li>
        <li><span>ЛЕНТА 09:00 - 23:00</span></li>
    </ul>

    <!-- START CATEGORY -->
    <ul class="main_menu_mobile">
    <li><a href="/otdely/">Магазины</a></li>
    <li><a href="/magaziny/?outlet_category=food_oc">Еда</a></li>
    <li><a href="/magaziny/?outlet_category=service_oc">Сервисы</a></li>
    <li><a href="/akcii/">Акции и события</a></li>
    <li><a href="/magaziny/?outlet_category=corn_oc">Развлечение и обучение</a></li>
    <li><a href="#">Бизнес клубы</a></li>
    <li><a href="/partneram/">Партнерам</a></li>
    </ul>
    <!-- END CATEGORY -->
    <ul class="info">
        <li><a href="/magaziny/?action=openmap" style="cursor:pointer;text-decoration: none;margin-top: 40px;font-size: 16px;text-transform: uppercase;display: block;text-align: center;margin-left: -15px">Карта центра</a></li>
    </ul>
    
    <div class="social_icon_menu">
        <div class="social_icon_menu-item">
            <a href="https://www.instagram.com/solombala_mall/" target="_blank">
                <svg
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="30px" height="30px">
                    <image  x="0px" y="0px" width="30px" height="30px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAQAAACROWYpAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfiDBMMFy+3TEXyAAAB3ElEQVQ4y6WVsUtbURTGf3kvBZss7WjBxTEurmmgcyq0/4Hg1Emo/imFQjvppkOdOghSFwWpgoNQOoigQwKOzRITaV5+HXLz8l5TrOGdM91zzve+c+9957slCRazwgpLLPCcOcpElEJGhgzo84sWP9lnnyTNiNj0ysfalc0RqiTAOh+IAOjRokOf3wwZN1Ui4glzPGOBpwAMec/HEXPTRNU9G0bygEc23FM1sSkYh4Y3H4RlfTM0H+PbwPp/UM2v7vpCAvsb/Kxq45/lZcuZ1Zmqu2JD1U8RNaDHd/L2km3a3HNPm23qAFQAqAKn9IAlvFEvc3xVd6auZ8eqr/zhqTURL9Ub7KhnOeh5AHQ98cRuWJ1b/WsLHeyrR5nwiLXjmrGIsWt2Avuk6kjt40A9TIP1AF3MbWQxwOtp5FAdRETAMD2odwBscJ07vms2MlkCIkLVg/SLbbUbGs56bFdtp+sD1SjHUGYeuEinZmIJF8A85WwwooDlwQNugWXiqbqYZeCWQR4spGMP34AKq1PgVSohOx5TsNBVFfxJCv2ejx+MbE0YjGP1bkp+6m7ZNjGx5VZmr2M5ulOPZxGDiQcxmEWGJp7KULmIAE6k98us0ltY9As+N6NxfD3rQ/cHP7SMz/T6jfAAAAAASUVORK5CYII=" />
                </svg>
            </a>
        </div>
        <div class="social_icon_menu-item">
            <a href="https://vk.com/solombala_mall" target="_blank">
                <svg
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="34px" height="20px">
                    <image  x="0px" y="0px" width="34px" height="20px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACIAAAAUCAQAAABCbSf5AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfiDBMMFwb1/t2eAAACeUlEQVQ4y4XUXYiVVRTG8WfOfDijklo6KU0xUdmBKboo8KNUOH0IkUGQSGRQQleRQl1UJHXRjVGE4EeBRHRR0ReFF2WEEQ1hIRSOZOrkRFrT6NSFMmUdm/Pr4rynGc9M+Lw3+1lr7T/7XYu9WyRrsyJtqWskr+aXJEkly9Kd9pzLqezPp1FU9OSBdKclpZRSyh/Znf6oOF/fu0iXd5uir2kVMcvBpsxZ5bbMSiLvZzRJS9alnEp+yL1Jkr0ZTCmX5448mBfzXZJKrsuZvJfx1FLLzKxPZy6NmY7iSRGxE7u1ed5veFxEqxNYJeJNvF3Uxmo1v1sQ8Rh+dYmIW/C3a8VmfCRitp+xQvQ4jTUFotVX2CURcw3jqSKxD6+LDegXMccIloiXcEhHAdmIP5XrkHgaIxaIuAs1N7sbX4uYZxRXu0kV6wvEjcbwnDQgFxvGliL9Do7Ygc+Lk4yq2eAI9iiJ6HYU/WZMQOJRjFksYqGhYnzbi18cQA0/uUJEu48x7Mr67gak0wA+LFyf/aoG9RX+IefwjesL/wT+cmtjSg1IrAb3Fa5D2RwT2Rus1FWs2w1i80Q2kwp34ZReucDX6kvstWg6yDyD+ELnBTErjeGga6ZCYrmzeEvblG1rPWPZJF9xEkP1LjUX3w8+MP+86CZQs7U+0qJLx3Dc4qmQeNg/OOye4t5GDOAw+GSiExY5gH26WhrPxCStyc70JPk2e3IopzMjL2d+lqQvr6QjQ9mWY5GkmqV5NqUsnb5xl9nmTNO7URa3+VGzxvROd5K6enNnVuWqzE5SzRt5IbUkC/NIbs/c/6qOZ0s++39IQx1JxjM+JVZXNUn+BahY6ihitvhYAAAAAElFTkSuQmCC" />
                </svg>
            </a>
        </div>
    </div>



</div>
<div class="mainHead">
    <div class="container">
        <div class="row mobile">
            <div class="col-sm-2 col-xs-2">

            </div>
            <div class="col-sm-6 col-xs-6 logo-wrapper">
                <a href="/"><img alt="logo" class="main-logo mobile" width="174px" src="/local/templates/solombalamall/img/logo/logo.svg" /></a>
            </div>
            <div class="col-sm-2 col-xs-2">
                <div class="head_search-mobile"></div>
            </div>
            <div class="col-sm-2 col-xs-2">
                <div class="icon-menu icon_button">
                    <svg style="width:32px;"version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 32 31" style="enable-background:new 0 0 32 31;" xml:space="preserve">
          <style type="text/css">
              .st0{display:none;}
              .st1{display:inline;}
          </style>
                        <title>Group</title>
                        <g class="st0">
                            <path class="st1" d="M0,0h32v3H0V0z M0,14h32v3H0V14z M0,28h32v3H0V28z"/>
                        </g>
                        <rect y="14" width="32" height="3"/>
                        <rect y="22.75" width="32" height="3"/>
                        <rect y="4.75" width="32" height="3"/>
          </svg>
                </div>
            </div>

        </div>
        <div class="row desktop">
            <div class="col-sm-2 logo-wrap">
                <a href="/"><img alt="logo" class="main-logo" width="174px" src="/local/templates/solombalamall/img/logo/logo.svg" /></a>
            </div>
            <div class="col-sm-9">
                <!-- START CATEGORY -->
               <ul class='main_menu'>
                <li><a href="/otdely/">Магазины</a></li>
                <li><a href="/magaziny/?outlet_category=food_oc">Еда</a></li>
                <li><a href="/magaziny/?outlet_category=service_oc">Сервисы</a></li>
                <li><a href="/akcii/">Акции и события</a></li>
                <li><a href="/magaziny/?outlet_category=corn_oc">Развлечение и обучение</a></li>
                <li><a href="#">Бизнес клубы</a></li>
                <li><a href="/partneram/">Партнерам</a></li>
                </ul>
                <!-- END CATEGORY -->

            </div>
            <div class="col-sm-1">
                <div class="head_search"><img src="/local/templates/solombalamall/img/search.svg" alt=""></div>
            </div>
        </div>
    </div>
    <div class="search_mobile">
        <form action="">
            <input type="search" placeholder="Что ищем?">
            <button type="submit"><img src="/local/templates/solombalamall/img/search_head.svg" alt=""></button>
        </form>
    </div>
</div>
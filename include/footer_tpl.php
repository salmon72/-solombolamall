<?
/*
$APPLICATION->IncludeComponent(
	"custom:whilecarousel",
	".default",
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"IBLOCK_TYPE" => "slider",
		"IBLOCK_ID" => "17",
		"IBLOCK_SECTION_ID" => "",
		"COUNT" => "19",
		"MOUSEWHEEL" => "allDirections",
		"LOOP" => "N",
		"TOUCH" => "Y",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"TOKEN" => "8480018026.37c776d.2a98cf5a7222440a9066645de3441764",
		"USER_ID" => "8480018026"
	),
	false
);
*/
?>

<? if ($APPLICATION->GetCurPage(false) === '/'): ?>
	<div class="subscribe home" style="display: none">
<?elseif ($APPLICATION->GetCurPage(false) === '/magaziny/'):?>
	<div class="subscribe magaziny" style="display: none">
<?elseif ($APPLICATION->GetCurPage(false) === '/novosti/'):?>
	<div class="subscribe novosti" style="display: none">
<?else:?>
	<div class="subscribe" style="display: none">
<? endif; ?>

	<div class="container">
		<div class="row" style="margin-top:72px;">
			<div class="col-md-7 col-sm-12 cols">
				<script type="text/javascript" src="https://vk.com/js/api/openapi.js?160"></script>
				<!-- VK Widget -->
				<script type="text/javascript">
				VK.Widgets.AllowMessagesFromCommunity("vk_allow_messages_from_community", {height: 30}, 169764757);
				</script>

				<div class="hand-img" onclick="location.href='/novosti/';">
					<div class="subscribe-slick">
						<?
						$itemIdArray = Array();
						$arSelect = Array("ID", "NAME", "DATE_ACTIVE_FROM","PREVIEW_PICTURE", "DETAIL_PAGE_URL","PREVIEW_TEXT","DATE_CREATE");
						$arFilter = Array("IBLOCK_ID"=>3, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
						$res = CIBlockElement::GetList(Array("date_active_from"=>"desc"), $arFilter, false, Array("nPageSize"=>10), $arSelect);
						while($ob = $res->GetNextElement())
						{$arFields = $ob->GetFields();?>
						<div class="sub-item" onclick="location.href='<?=$arFields["DETAIL_PAGE_URL"];?>';">
							<div class="image">
								<?
								$file = CFile::ResizeImageGet(
									$arFields["PREVIEW_PICTURE"],
									array('width'=>200, 'height'=>120),
									BX_RESIZE_IMAGE_PROPORTIONAL,
									true,
									70
								);
								?>
								<center><img src="<?=$file['src'];?>" /></center>
							</div>
							<div class="name"><?=$arFields["NAME"];?></div>
							<?/*
							<div class="desc"><?=TruncateText($arFields["PREVIEW_TEXT"],100);?></div>
							<div class="detail"><a href="<?=$arFields["DETAIL_PAGE_URL"];?>">Подробно</a></div>
							<div class="date"><?=substr($arFields["DATE_CREATE"],0,10);?></div>
							*/?>
						</div>
						<?$itemIdArray[] = $arFields["ID"];}?>
					</div>
				</div>

			</div>
			<div class="col-md-5 col-sm-12 cols">
				<div class="compliteSubscribe"></div>
				<form id="subscribeform" action="javascript:void(0);">
					<span class="title">Подпишитесь<br> на наши новости<br>ВКонтакте</span>
					<div id="vk_allow_messages_from_community"></div>
					<?/*
					<input type="text" name="mail" id="subscribeemail" placeholder="Ваш e-mail"/>
					<input type="submit" class="sendsubscribe" value="Подписаться" />
					<label>

						<div class="checkbox-wrap">
							<div class="checkbox">
								<input class="checkboxed" checked="checked" type="checkbox" id="subscribecheckbox" name="checkboxsubscribe">
								<span class="checkboxed-custom"></span>
							</div>
							<div class="privacy-subscribe">
									Я ознакомлен с <a class="subs_link" href="/privacy/" target="_blank">политикой конфиденциальности</a>
									и соглашением об обработке персональных данных.
							</div>
						</div>
					</label>
					*/?>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="footer" style="display: none">
	<div class="container">
		<div class="row flex-footer">
			<div class="footer-cols">
				<span>
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					".default",
					array(
						"COMPONENT_TEMPLATE" => ".default",
						"AREA_FILE_SHOW" => "file",
						"PATH" => "/index_inc.php",
						"EDIT_TEMPLATE" => ""
					),
					false
				);?>
				</span>
			</div>
			<div class="footer-cols social-div">
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
			<div class="footer-cols who-made">
				<span>
					<a href="https://j-soft.online" target="_blank">by J-SOFT</a>
				</span>
			</div>
		</div>
	</div>
</div>


        <section class="subscribe_block">
            <div class="container">
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                        <div class="subscribe_block-cont">
                            <div class="subscribe_block-text">
                                <div class="subscribe_block-title">Узнавайте о новостях<br>
                                и <span>акциях</span> первыми</div>
                                <div class="subscribe_block-descr">
                                    Уведомления о самых выгодных предложениях на почту или в VK. Раз в месяц, не больше.
                                </div>
                                <a href="https://vk.com/solombala_mall" target="_blank">
                                    <div class="subscribe_block-button">Подписаться на новости</div>
                                </a>

                            </div>
                            <div class="subscribe_block-hand">
                                <img src="/local/templates/solombalamall/img/hand.png" alt="">
                            </div>
                            <div class="subscribe_block-close">
                                <img src="/local/templates/solombalamall/img/close_button.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
            </div>
        </section>

        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-xs-12">
                        <div class="footer_logo"> <a href="/"><img alt="logo" src="/local/templates/solombalamall/img/logo/logo_white.svg" /></a></div>
                        <div class="footer_contact">
                            <span class="hover_link" style="cursor:pointer;" data-toggle="modal" data-target="#locationModalOpen">Архангельск, Советская, 25</span>
                            <span>ТРЦ 10:00 - 21:00</span>
                            <span>Лента 09:00 - 23:00</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <ul class="footer_menu">
                            <li><a href="#">О центре</a></li>
                            <li><a href="/magaziny/?show=map">Карта центра</a></li>
                            <li><a href="#">Контакты</a></li>
                            <li>
                                <a href="https://www.instagram.com/solombala_mall/" target="_blank">
                                    <div class="social_icon-inst"></div>
                                </a>
                                <a href="https://vk.com/solombala_mall" target="_blank">
                                    <div class="social_icon-vk"></div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <form action="" class="footer_form">
                            <div class="footer_form-title">Обратная связь</div>
                            <input type="text" name="" placeholder="Введите ваше имя" required>
                            <input type="text" name="" placeholder="Введите ваш email" required>
                            <textarea name="" id="" placeholder="Введите ваше обращение" required></textarea>
                            <button type="submit">Отправить</button>
                        </form>
                    </div>
                    <div class="col-md-12">
                        <div class="footer_copyright">АО "СОЛОМБАЛА МОЛЛ" / 2020</div>
                    </div>
                </div>
            </div>
        </div>



<script src="<?= SITE_TEMPLATE_PATH ?>/js/jquery.viewportchecker.min.js"></script>

<script>

$(document).ready(function(){
	jQuery('.footbg').viewportChecker({
		repeat: true,
		classToAdd: 'action',
		offset: 200
	});
	jQuery('.subscribe').viewportChecker({
		repeat: true,
		classToAdd: 'action',
		offset: 200,
		callbackFunction: slickAddVPC(),
	});
	function slickAddVPC(){
		setTimeout(function(){
			$('.subscribe-slick').not('.slick-initialized').slick({
				vertical: true,
				centerMode: true,
				slidesToShow: 2,
				slidesToScroll: 2,
				dots:false,
				arrows:false,
				autoplay:true,
				autoplaySpeed: 1000,
				LazyLoad: 'progressive',
				speed: 1000
			});
		},500);
	}
});





// $(document).ready(function(){
// 	jQuery('.footbg').viewportChecker({
// 		repeat: true,
// 		classToAdd: 'action',
// 		offset: 200
// 	});
// 	jQuery('.subscribe').viewportChecker({
// 		repeat: true,
// 		classToAdd: 'action',
// 		offset: 200,
// 		callbackFunction: slickAdd(){

// 		},
// 	});
// 	$('.subscribe-slick').slick({
// 		vertical: true,
// 		centerMode: true,
// 		slidesToShow: 2,
// 		slidesToScroll: 2,
// 		dots:false,
// 		arrows:false,
// 		autoplay:true,
// 		autoplaySpeed: 1000,
// 		LazyLoad: 'progressive',
// 		speed: 1000
// 	});
// });

</script>

       
<script src="/prototip/js/bootstrap.min.js"></script>
<?require($_SERVER["DOCUMENT_ROOT"]."/include/modal_popoup.php");?>

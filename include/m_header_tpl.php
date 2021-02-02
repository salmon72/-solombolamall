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
<div class="upHead">
  <div class="container">
    <div class="row upperhead">
      <div class="col-md-4">
<span>как добраться</span> <a class="openLocationModalClick" style="color:white;cursor:pointer;" data-toggle="modal" data-target="#locationModalOpen">архангельск, соломбала</a>
      </div>
      <div class="col-md-5">

      </div>
      <div class="col-md-3">
       <a href="/magaziny/?action=openmap">карта центра</a>
      </div>
    </div>
  </div>
</div>
<div class="mobile-menu">
  <ul class="info">
    <li><span>КАК ДОБРАТЬСЯ:</span> <a style="color:black;cursor:pointer;"data-toggle="modal" data-target="#locationModalOpen">архангельск, соломбала</a></li>
  </ul>
  <!-- START CATEGORY -->
  <?




  $mainCategory = Array();
  $mainCatRes = CIBlockElement::GetList( Array(), Array("IBLOCK_ID"=>2,"ACTIVE"=>"Y", "=PROPERTY_ITSACTIVE_VALUE"=>"Да"), false, Array(), Array("ID", "IBLOCK_ID"));
  while($objectMainCat = $mainCatRes->GetNextElement()){
    $arFields["PROPERTIES"] = $objectMainCat->GetProperties();
    foreach($arFields["PROPERTIES"]["OUTLET_CATEGORY"]["VALUE"] as $categoriess):
      $mainCategory[] = $categoriess;
    endforeach;
  }
  $mainCategory = array_unique($mainCategory);
  $catMainIndex = 0;
  echo "<ul class='main_menu_mobile'>";
  ?><li><a class="active" href="/magaziny/">Магазины</a></li>
  <li><a href="/novosti/">Новости</a></li>
  <?

  ?><li><a href="/partneram/">Партнерам</a></li><?
  echo "</ul>";
  ?>
  <!-- END CATEGORY -->
  <ul class="info">
    <li><a href="/magaziny/?action=openmap">Карта центра</a></li>
  </ul>

</div>
<div class="mainHead">
  <div class="container">
    <div class="row mobile">
      <div class="col-sm-2 col-xs-2">

      </div>
      <div class="col-sm-8 col-xs-8 logo-wrapper">
        <a href="/"><img alt="logo" class="main-logo mobile" width="174px" src="/local/templates/solombalamall/img/logo/logo_b2c.svg" /></a>
      </div>
      <div class="col-sm-2 col-xs-2">
        <div class="icon-menu">
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
      <div class="col-sm-2">
        <a href="/"><img alt="logo" class="main-logo" width="174px" src="/local/templates/solombalamall/img/logo/logo_b2c.svg" /></a>
      </div>
      <div class="col-sm-10">
        <!-- START CATEGORY -->
        <?
        $mainCategory = Array();
        $mainCatRes = CIBlockElement::GetList( Array(), Array("IBLOCK_ID"=>2,"ACTIVE"=>"Y", "=PROPERTY_ITSACTIVE_VALUE"=>"Да"), false, Array(), Array("ID", "IBLOCK_ID"));
        while($objectMainCat = $mainCatRes->GetNextElement()){
        	$arFields["PROPERTIES"] = $objectMainCat->GetProperties();
        	foreach($arFields["PROPERTIES"]["OUTLET_CATEGORY"]["VALUE"] as $categoriess):
        		$mainCategory[] = $categoriess;
        	endforeach;
        }
        $mainCategory = array_unique($mainCategory);
        $catMainIndex = 0;
        echo "<ul class='main_menu'>";
        ?><li><a class="active" href="/magaziny/">Магазины</a></li>
        <li><a href="/novosti/">Новости</a></li>
        <li><a href="/partneram/">Партнерам</a></li><?
        echo "</ul>";
        ?>
        <!-- END CATEGORY -->

      </div>
    </div>
  </div>
</div>

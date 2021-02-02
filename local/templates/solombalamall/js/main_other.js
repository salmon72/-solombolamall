

function categoryLoad(elem,chaingeMainCategory){
	selectOutletHeading('','',chaingeMainCategory);
	var categoryValue = chaingeMainCategory;
	var thisElem = $(elem);
	switch (categoryValue) {
		case "":
			$(".banner_area").html("<img src='/magaziny/bunner/magaziny.jpg' style='width:100%'/>");
			break;
		case "Развлечения":
			$(".banner_area").html("<img src='/magaziny/bunner/razvlecheniya.jpg' style='width:100%'/>");
			break;
		case "Детям":
			$(".banner_area").html("<img src='/magaziny/bunner/detyam.jpg' style='width:100%'/>");
			break;
		case "Где поесть":
			$(".banner_area").html("<img src='/magaziny/bunner/gde_poest.jpg' style='width:100%'/>");
			break;
		default:
			$(".banner_area").html("<img src='/magaziny/bunner/magaziny.jpg' style='width:100%'/>");
	};
	$(".main_menu li a").removeClass("active");
	$(".main_menu_mobile li a").removeClass("active");
	if(thisElem.hasClass('active')){}else{thisElem.addClass("active");}
	$.ajax({
		type: 'POST',
		url: 'backend.php',
		data: {categoryValue:categoryValue},
		beforeSend: function( data){
			$(".sending_overlay").css("display","block");
    },
		success: function (data) {
			$(".sending_overlay").css("display","none");
			$(".itemList").html(data);
		},
		error: function (xhr, str) {
				alert("Произошла непредвиденная ошибка, попробуйте позже.");
			}
	});

	$(".banner_area").css("display","block");
}
function selectOutletHeading(elem,chaingeOutletCategory,chaingeMainCategory){
  var outletCategory = chaingeOutletCategory;
  var categoryValue = chaingeMainCategory;
  var thisOutletElem = $(elem);
  $.ajax({
    type: 'POST',
    url: 'rubriki.php',
    data: {outletCategory:outletCategory, categoryValue:categoryValue},

    success: function (data) {
			$(".rubriki").html(data);
    },
    error: function (xhr, str) {
        alert("Произошла непредвиденная ошибка, попробуйте позже.");
      }
  });

	$.ajax({
    type: 'POST',
    url: 'backend_map.php',
    data: {outletCategory:outletCategory, categoryValue:categoryValue},

    success: function (data) {
			$(".selectOutletHeadingList.selectFilterList").html(data);
    },
    error: function (xhr, str) {
        alert("Произошла непредвиденная ошибка, попробуйте позже.");
      }
  });
}
function changeOutlet(elem,chaingeOutletCategory,chaingeMainCategory){
  var outletCategory = chaingeOutletCategory;
  var categoryValue = chaingeMainCategory;
  var thisOutletElem = $(elem);
  $(".selectOutletHeadingList li span").removeClass("activeCat");
  if(thisOutletElem.hasClass('activeCat')){}else{thisOutletElem.addClass("activeCat");}
  $.ajax({
    type: 'POST',
    url: 'backend.php',
    data: {outletCategory:outletCategory, categoryValue:categoryValue},
		beforeSend: function( data){
			$(".sending_overlay").css("display","block");
		},
    success: function (data) {
			$(".sending_overlay").css("display","none");
      $(".itemList").html(data);
    },
    error: function (xhr, str) {
        alert("Произошла непредвиденная ошибка, попробуйте позже.");
      }
  });
}

function modalOpen(elem,idelem){
	var thisElem = $(elem);
	var idElem = idelem;
	$.ajax({
    type: 'POST',
    url: 'idelem.php',
		dataType: 'json',
    data: {idElem:idElem},
    success: function (data) {
			$("h3.itemName").html(data.name);
			$("p.itemFloor").html(data.floor);
			$("p.itemTimeTitle").html("Время работы:");
			if(data.longworktime.indexOf('Да') + 1) {
				$("p.itemTime").html("Круглосуточно");
			}else{
				$("p.itemTime").html(data.starttime + " - " + data.endtime);
			}
			$("p.itemSite").html("<a href='" + data.site + "' target='_blank'>" + data.site + "</a>");
			$("p.itemPhone").html(data.phone);
			$(".card-item-logo").css("background","url(" + data.img + ")center center no-repeat");
			$(".card-item-logo").css("background-size","contain");
			$("p.itemText").html(data.text);
			$("a.openMapItem").attr("href","/magaziny/?location="+data.locationlink);
    },
    error: function (xhr, str) {
        alert("Произошла непредвиденная ошибка, попробуйте позже.");
      }
  });
}


$(".selectOutletHeadingItem").on("click", function(){
	if(!$(this).hasClass('allOutlet')){
		$(".banner_area").css("display","none");
	}else{
		$(".banner_area").css("display","block");
	}
});


// $(document).ready(function(){

  /*$('.icon-menu').on('click', function() {
    if (!$(this).hasClass('clicked')) {
      $(this).addClass('clicked');
  		$('.mobile-menu').animate({
  				left: '0px'
  		}, 200);
  		$('body').animate({
  				left: '225px'
  		}, 200);
    } else {
      $(this).removeClass('clicked');
  		$('body').animate({
  			left: '0px'
  		}, 200);
  		$('.mobile-menu').animate({
  				left: '-225px'
  		}, 200);
    }
  });*/

	// $('.icon-menu').on('click', function() {
 //    if (!$(this).hasClass('clicked')) {
 //      $(this).addClass('clicked');
 //  		$('.mobile-menu').animate({
 //  				right: '0px'
 //  		}, 200);
 //  		$('body').animate({
 //  				right: '225px'
 //  		}, 200);
 //    } else {
 //      $(this).removeClass('clicked');
 //  		$('body').animate({
 //  			right: '0px'
 //  		}, 200);
 //  		$('.mobile-menu').animate({
 //  				right: '-225px'
 //  		}, 200);
 //    }
 //  });



// });

$(document).ready(function(){

	$(".checkboxed-custom").click(function(){
		$('.sendsubscribe').prop('disabled', function( i, currentValue ) {
        return !currentValue;
    });
		$('.sendsubscribe').toggleClass("deactivate");
	});

	//var sliderId = 7;
  var sliderId = $(".newsSliderItemCount").attr("data-count");
  $(".getarray").click(function(){
    $.ajax({
      type: 'POST',
      url: '/newsLoad.php',
      data: {sliderId:sliderId},
      success: function (data) {
          if(data.indexOf("false")+1){

          }else{
            $('.newsSliderItem').slick('slickAdd', data);
          }
      },
      error: function (xhr, str) {
          alert("Произошла непредвиденная ошибка, попробуйте позже.");
        }
    });
    sliderId++;
  });

  $(".sendsubscribe").click(function(){
    var emailSubscribe = $("#subscribeemail").val();
    if ($('#subscribecheckbox').is(':checked')){
      $.ajax({
        type: 'POST',
        url: '/include/subscribe.php',
        data: {emailSubscribe:emailSubscribe},
        success: function (data) {
          //alert(data);
					$(".compliteSubscribe").html(data);
					$("#subscribeform").hide();
        },
        error: function (xhr, str) {
            alert("Произошла непредвиденная ошибка, попробуйте позже.");
          }
      });
    } else {
      alert('Ознакомтесь с политикой конфедециальности');
    }
  });

});
  function addSlide(){
    $(".getarray").click();
  };
	

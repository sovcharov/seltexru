///////////////////////////////////
// return phone call start
/////////////////////////////////
// var callMe = function () {
//   "use strict";
//   var i = 0,
//   cssWidth = -380,
//   show = function () {
//     i += 38;
//     var cssCurrent = cssWidth + i;
//     $('.phoneEnter').css("right", cssCurrent + "px");
//     if (i < -cssWidth) {
//       setTimeout(show, 15);
//     } else {
//       $('.phoneEnter').css("right", "2px");
//       i = 0;
//     }
//   };
//   show();
//   // $('.phoneEnter').css("visibility", "visible");
// };
//
// var hide = function () {
//   "use strict";
//   var i = 380,
//   cssWidth = -380,
//   cssCurrent = cssWidth + i,
//   slide = function () {
//     i -= 38;
//     $('.phoneEnter').css("right", cssCurrent + "px");
//     if (i > 0) {
//       setTimeout(slide, 15);
//     } else {
//       $('.phoneEnter').css("right", "-380px");
//       $('#button').html('Заказать');
//       $('#button').removeClass('btn-success');
//       $('#button').addClass('btn-danger');
//       i = 0;
//     }
//   };
//   slide();
// };
//
// var sendPhone = function () {
//   "use strict";
//   var regex = /^\+{0,1}[0-9\-]{7,11}$/,
//   myTimer,
//   dotTimer = function () {
//     if($('#button').html() !== "Заказан" || $('#button').html() !== "Заказать") {
//       if($('#button').html().length > 3) {
//         $('#button').html('.');
//       } else {
//         $('#button').html($('#button').html()+'.');
//       }
//     }
//   },
//   submitPhone = function () {
//     $.post("/api/sendmail/" + $('#phone').val(),
//     {},
//     function (data, status) {
//       if (data) {
//         setTimeout(hide, 2000);
//         clearInterval(myTimer);
//         $('#button').removeClass('btn-danger');
//         $('#button').addClass('btn-success');
//         $('#button').html('Заказан');
//       } else {
//         clearInterval(myTimer);
//         alert('Неверно указан номер');
//         $('#button').html('Заказать');
//         $('#button').removeClass('btn-success');
//         $('#button').addClass('btn-danger');
//       }
//     });
//   };
//
//   if (regex.test($('#phone').val())) {
//     if ($('#button').html() === 'Заказать'){
//       $('#button').html('.');
//       myTimer = setInterval(dotTimer,500);
//       submitPhone();
//     }
//   } else {
//     alert('Неверно указан номер');
//     $('#button').html('Заказать');
//     $('#button').removeClass('btn-success');
//     $('#button').addClass('btn-danger');
//   }
// };
//
// var checkPhone = function () {
//   "use strict";
//   var regex = /^\+{0,1}[0-9\-]{0,11}$/,
//   tempValue;
//   if (!regex.test($('#phone').val())) {
//     tempValue = $('#phone').val();
//     tempValue = tempValue.slice(0, tempValue.length - 1);
//     $('#phone').val(tempValue);
//   }
// };
///////////////////////////////////
//return phone call end
////////////////////////////////////////

//////////////////////////
// blink in search field
var blinker = function () {
  'use strict';
  if ($('#theInput').attr('placeholder')) {
    // get the placeholder text
    $('#theInput').attr('placeholder', '');
  } else {
    $('#theInput').attr('placeholder', 'Введите номер детали');
  }
  setTimeout(blinker, 500);
};
blinker();
// blink in search END
//////////////////////////

//////////////////////////
// CTP QUOTE START
///////////////////////
$("#quoteCTPInfo").hide();
$("#quoteCTPSpin").hide();
var quoteCTP = function (partNumber) {
  $("#quoteCTPButton").hide();
  $("#quoteCTPSpin").show();
  var url = "/api/quotectp/" + partNumber;
  console.log(url);
  $.get(url, function(data, status){
    quoteCTPInfoPrice
    $("#quoteCTPInfoPrice").text(data.price);
    $("#quoteCTPInfoQTY").text(data.qty);
    $("#quoteCTPInfoTime").text(data.leadTime);
    $("#quoteCTPSpin").hide();
    $("#quoteCTPInfo").show();
  });
};
//////////////////////////
// CTP QUOTE START END
//////////////////////////

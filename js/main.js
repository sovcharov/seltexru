var callMe = function () {
    "use strict";
    var i = 0,
        cssWidth = -360,
        show = function () {
            i += 36;
            var cssCurrent = cssWidth + i;
            $('.phoneEnter').css("right", cssCurrent + "px");
            if (i < -cssWidth) {
                setTimeout(show, 15);
            } else {
                $('.phoneEnter').css("right", "2px");
                i = 0;
            }
        };
    show();
    // $('.phoneEnter').css("visibility", "visible");
};

var sendPhone = function () {
    "use strict";
    if ($('#button').html() !== "Заказан" || $('#button').html() !== "...") {
        var regex = /^\+{0,1}[0-9\-]{0,11}$/,
            i = 360,
            cssWidth = -360,
            hide = function () {
                i -= 36;
                var cssCurrent = cssWidth + i;
                $('.phoneEnter').css("right", cssCurrent + "px");
                if (i > 0) {
                    setTimeout(hide, 15);
                } else {
                    $('.phoneEnter').css("right", "-360px");
                    $('#button').html('Заказать');
                    $('#button').removeClass('btn-success');
                    $('#button').addClass('btn-danger');
                    i = 0;
                }
            },
            submitPhone = function () {
                $.post("services/sendphone.php",
                    {
                        phone: $('#phone').val()
                    },
                    function (data, status) {
                        if (data) {
                            setTimeout(hide, 2000);
                            $('#button').removeClass('btn-danger');
                            $('#button').addClass('btn-success');
                            $('#button').html('Заказан');
                        } else {
                            alert('Неверно указан номер');
                            $('#button').html('Заказать');
                            $('#button').removeClass('btn-success');
                            $('#button').addClass('btn-danger');
                        }
                    });
            };
        submitPhone();

    }
    var dotTimer = function () {
        $('#button').html($('#button').html()+'.');
        if($('#button').html() === '....') {
            $('#button').html('.');
            setTimeout(dotTimer,500);
        } else if ( $('#button').html().length < 4) {
               setTimeout(dotTimer,500);
        }
    };
    $('#button').html('.');
    dotTimer();

    // $('.phoneEnter').css("right", "-360px");

    // console.log($('#phone').val());
    // $('#button').html('Отправлен');
    // console.log($('#button').html());
};

var checkPhone = function () {
    "use strict";
    var regex = /^\+{0,1}[0-9\-]{0,11}$/,
        tempValue;
    if (!regex.test($('#phone').val())) {
        tempValue = $('#phone').val();
        tempValue = tempValue.slice(0, tempValue.length - 1);
        $('#phone').val(tempValue);
    }
};

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

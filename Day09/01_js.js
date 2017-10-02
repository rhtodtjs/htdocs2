/**
 * Created by alfo06-18 on 2017-09-25.
 */

$(document).ready(function () {



    //마우스 이벤트 처리리

    $('div.m').mouseover(function () {
        $('div.m p:first').text("마우스가 올라왔네");
    });

    var cnt = 0;

    $('.m').on('mouseleave',function () {

        cnt++;
        $('div.m p:last').text(cnt);
    });







    //멀티  마우스 이벤트 처리
    // mousedown ,mouseup , mousemove
    //멀티 이벤트 콜백 함수들을 멤버로 보유한 객체..
    //event.buttons : 0:no , 1:left , 2:right; , 4:wheel
    var callbacks = {

        mousedown:function () {

            $(this).html('down : '+event.buttons+"<br/>");
            $(this).append('clientx : '+event.clientX+"<br/>");
            $(this).append('clienty : '+event.clientY+"<br/>");
            $(this).append('offesetX : '+event.offsetX+"<br/>");
            $(this).append('offesetY : '+event.offsetY+"<br/>");

        },

        mouseup:function () {

            $(this).html('UP : '+event.buttons+"<br/>");
            $(this).append('clientx : '+event.clientX+"<br/>");
            $(this).append('clienty : '+event.clientY+"<br/>");
            $(this).append('offesetX : '+event.offsetX+"<br/>");
            $(this).append('offesetY : '+event.offsetY+"<br/>");

        },

        mousemove:function () {

            $(this).html('Move : '+event.buttons+"<br/>");
            $(this).append('clientx : '+event.clientX+"<br/>");
            $(this).append('clienty : '+event.clientY+"<br/>");
            $(this).append('offesetX : '+event.offsetX+"<br/>");
            $(this).append('offesetY : '+event.offsetY+"<br/>");

        },

        mousewheel:function () {

            $(this).html('Wheel : '+"<br/>");
            $(this).append(event.wheelDelta);

        }

        //마우스 휠의ㅏ 경우 fireforx라느 브라우저에서 mousewheel 못알아들음


    };

    // $('div.m2').on(callbacks); 이방식불편해..

    $('div.m2').on('mousemove mouseup mousemove' ,function () {
        $(this).html(event.type);
    })
});



var data; //사용자로부터받은 값.. 저장변수

//워커 사용자로부터 post된 메세지 받기.

onmessage = function (event) {
    this.data = "받은 메세지 : " + event.data;

    postMessage(data);

    setTimeout(kkk, 3000);
}

function kkk() {
    postMessage(data + "축하한데요");
}




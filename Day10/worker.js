/**
 * Created by alfo06-18 on 2017-10-02.
 */
var n=0;

// while (true){
//     n++;
//
//     sleep(500);
// }

//반복작업은.. 작업을 위해 while문 사용은 그닥 좋지 않으니 지양하라..(하지말라고)

function fff() {
    n++;
    //별도의 쓰레드는 UI 작업을 수행할수없는건 마찬가지다..
    //원하는 UI작업은 메인쓰레드에게 요청해야해

    postMessage(n);
    setTimeout(fff,500);
}


fff(); //함수호출
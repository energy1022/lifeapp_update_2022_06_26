(function(){
    'use strict';
    var timer = document.getElementById('timer');  //id:timerを取得
    var start = document.getElementById('start');  //id:startを取得
    var stop = document.getElementById('stop');  //id:stopを取得
    var reset = document.getElementById('reset');  //id:resetを取得
    var startTime;  
    var elapsedTime = 0;
    var timerId;
    var timeToadd = 0;

    function updateTimetText(){
        var m = Math.floor(elapsedTime / 60000);  
        var s = Math.floor(elapsedTime % 60000 / 1000);
        var ms = elapsedTime % 1000;
        m = ('0' + m).slice(-2); 
        s = ('0' + s).slice(-2);
        ms = ('00' + ms).slice(-3);
        timer.textContent = m + ':' + s + ':' + ms;
    }

    function countUp(){
        timerId = setTimeout(function(){
            elapsedTime = Date.now() - startTime + timeToadd;
            updateTimetText();
            countUp();
        },10);
    }

    start.addEventListener('click',function(){
        startTime = Date.now();
        countUp();
    });

    stop.addEventListener('click',function(){
        clearTimeout(timerId);
        timeToadd += Date.now() - startTime;
    });

    reset.addEventListener('click',function(){
        elapsedTime = 0;
        timeToadd = 0;
        updateTimetText();
    });
})();
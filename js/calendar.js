const week = ["日", "月", "火", "水", "木", "金", "土"];
const today = new Date();
var showDate = new Date(today.getFullYear(), today.getMonth(), 1);

//カレンダー作成
function createCalendar(year, month){
    //曜日
    var calendar = "<table><tr class='dayOfWeek'>";
    for (var i = 0; i < week.length; i++){
        calendar += "<th>" + week[i] + "</th>";
    }
    calendar += "</tr>";

    var count = 0;
    var startDayOfWeek = new Date(year, month, 1).getDay();
    var endDate = new Date(year, month + 1, 0).getDate();
    var lastMonthEndDate = new Date(year, month, 0).getDate();
    var row = Math.ceil((startDayOfWeek + endDate) / week.length);

    //1行ずつ設定
    for (var i = 0; i < row; i++){
        calendar += "<tr>";
        //1行単位で設定
        for(var j = 0; i < week.length; j++){
            if(i == 0 && j < startDayOfWeek){
                //1行目で１日までの先月の日付を設定
                calendar += "<td class='disabled'>" + (lastMonthEndDate - startDayOfWeek + j + 1) + "</td>";
            }else if(count >= endDate){
                //最終行で最終日以降、翌日の日付を設定
                count++;
                calendar += "<td class='disabled'>" + (count - endDate) + "</td>";
            }else{
                //当月の日付を曜日に照らし合わせて設定
                count++;
                if(year == today.getFullYear() && month == (today.getMonth()) && count == today.getDate()){
                    calendar += "<td class='today'>" + count + "</td>";
                }else{
                    calendar += "<td>" + count + "</td>";
                }
            }
        }
        calendar += "</tr>";
    }
    return calendar;
}

//カレンダー表示
function showCalendar(date){
    var year = date.getFullYear();
    var month = date.getMonth();
    document.querySelector("#calendar_header").innerHTML = year + "年 " + (month + 1) + "月";

    var calendar = createCalendar(year, month);
    document.querySelector("#calendar").innerHTML = calendar;
}

// 初期表示設定
window.onload = function(){
    showCalendar(today, calendar);
};

//前の月表示
function prev(){
    showDate.setMonth(showDate.getMonth()- 1);
    showCalendar(showDate);
}

//次の月表示
function next(){
    showDate.setMonth(showDate.getMonth() + 1);
    showCalendar(showDate);
    
}

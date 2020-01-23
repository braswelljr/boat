setInterval(function(){
    var date = new Date();
    updateTime(date);
}, 1000);

function updateTime(date) {
    var timeDiv = document.getElementById("time");
    var hours = date.getHours() ;
    var minutes = date.getMinutes();
    var seconds = date.getSeconds();
    minutes = checkTime(minutes);
    seconds = checkTime(seconds);

    var time = hours + ":" + minutes + ":" + seconds ;
    timeDiv.innerHTML = time ;
}
function checkTime(i) {
    if(i < 10){
        i = "0" + i;
    }
    return i ;
}
// alert("Hello, World!");


var nowTime = new Date();
var dd = nowTime.getDate();
var mm = nowTime.getMonth()+1;
var yyyy = nowTime.getFullYear();
var hh = nowTime.getHours();
var mmm = nowTime.getMinutes();
var ss = nowTime.getSeconds();
var Time = 'Šiuo metu Lietuvoje: ' + ' <br> ' + yyyy + '-' + mm + '-' + dd + ' <br> ' + hh + 'h ' + mmm + 'min ' + ss + 'sec ' + ' <br> <br>';

var nowTime = document.querySelector(".now-time");
nowTime.innerHTML =  Time ;



var nowTime  = new Date().getTime();
var xmasTime = new Date('2018-12-25').getTime();
var leftMiliseconds = xmasTime - nowTime;
var dayMiliseconds = (1000 * 60 * 60 * 24);
var leftDays = Math.round(leftMiliseconds / dayMiliseconds);

var leftDaysx = document.querySelector(".left-time");
leftDaysx.innerHTML = 'Iki Kalėdų liko ' + leftDays + ' dienų/-os';


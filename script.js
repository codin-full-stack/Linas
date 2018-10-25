// alert("Hello, World!");

// DABARTIES LAIKAS

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


// IKI KALĖDŲ LIKO:

var nowTime  = new Date().getTime();
var xmasTime = new Date('2018-12-25').getTime();
var leftMiliseconds = xmasTime - nowTime;
var dayMiliseconds = (1000 * 60 * 60 * 24);
var leftDays = Math.round(leftMiliseconds / dayMiliseconds);

var leftDaysx = document.querySelector(".left-time");
leftDaysx.innerHTML = 'Iki Kalėdų liko ' + leftDays + ' dienų/-os';
leftDaysx.style.color = "green";




var newsTitle = document.querySelector(".new-title");
if(newsTitle) {
   newsTitle.addEventListener("click", function () {
       newsTitle.innerHTML = "Naujienų sąrašas";
       newsTitle.style.cursor = 'pointer';
   });
}


var forgotPass = document.querySelector(".forgot-password");
if(forgotPass) {
	forgotPass.addEventListener("click", function () {
   	forgotPass.innerHTML = "Kita karta nepamirsk";
   });
}





























































// var post2 = document.querySelector('.post:nth-child(2) .post-description');
// if(post2) {
//    post2.innerHTML = leftDays + ' days left until Christmas!' +'<br><br>' + 'Kalėdinės Prekės internetu | pigu.lt‎';
// }// var post2img = document.querySelector('.post:nth-child(2) .img');

// // if(post2img) {

// // post2img.innerHTML =

// // }var post4 = document.querySelectorAll('.post:nth-child(4) .post-description');

// if(post4.length) {

//    for (i = 0; i < post4.length; ++i) {

//        post4[i].style.border ="1px solid blue";

//        post4[i].style.backgroundColor ="yellow";

//    }

// }

// var post6 = document.querySelectorAll('.post:nth-child(6) .post-description');
// var len = post6.length;
// if(len) {
//    for (var i = 0; i < len; i++ ) {
//        post6[i].style.backgroundColor = "blue";
//        post6[i].style.color = "green";
//    }
// }
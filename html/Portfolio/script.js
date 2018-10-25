// menu responsive
var bar = document.querySelector(".nav-header-button");
console.log(bar)
var barList = document.querySelector("nav");
console.log(barList)

if(bar) {
   bar.addEventListener("click", function () {
       if (barList.classList.contains("show")) {
           barList.classList.remove("show")
       } else {
           barList.classList.add("show")
       }
   });
}
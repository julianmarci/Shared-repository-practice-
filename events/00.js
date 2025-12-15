//*whenever the user uses the button in Javascript, the divs change to green
var Button = document.getElementById("Button_green");
Button.addEventListener ('click', function() {
var div = document.getElementsByTagName("div");
for (i = 0; i < div.length;i++){
    div[i].style.backgroundColor = "green";
}});
//*whenever the user uses the button in Javascript, the divs change to orange
var Button = document.getElementById("Button_orange");
Button.addEventListener ('click', function() {
var div = document.getElementsByTagName("div");
for (i = 0; i < div.length;i++){
    div[i].style.backgroundColor = "orange";
}});
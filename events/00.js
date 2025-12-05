//*whenever the user uses the button in Javascript, the divs change to red
var Button_red = document.getElementById("Button_red");
Button.addEventListener ('click', function() {
var div = document.getElementsByTagName("div");
for (i = 0; i < div.length;i++){
    div[i].style.backgroundColor = "red";
}});
//*whenever the user uses the button in Javascript, the divs change to blue
var Button_blue = document.getElementById("Button_blue");
Button.addEventListener ('click', function() {
var div = document.getElementsByTagName("div");
for (i = 0; i < div.length;i++){
    div[i].style.backgroundColor = "blue";
}});
//*whenever the user uses the button in Javascript, the divs change to yellow
var Button_yellow = document.getElementById("Button_yellow");
Button.addEventListener ('click', function() {
var div = document.getElementsByTagName("div");
for (i = 0; i < div.length;i++){
    div[i].style.backgroundColor = "yellow";
}});
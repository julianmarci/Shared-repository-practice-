//*whenever the user uses the button in Javascript, the divs change to red
var Button = document.getElementById("Button");
Button.addEventListener ('click', function() {
var div = document.getElementsByTagName("div");
for (i = 0; i < div.length;i++){
    div[i].style.backgroundColor = "red",
    div[i+1].style.backgroundColor = "yellow";
}});
//*whenever the user uses the button in Javascript, the divs change to blue
/*var Button = document.getElementById("Button_blue");
Button.addEventListener ('click', function() {
var div = document.getElementsByTagName("div");
for (i = 0; i < div.length;i++){
    div[i].style.backgroundColor = "blue";
}});
//*whenever the user uses the button in Javascript, the divs change to yellow
var Button = document.getElementById("Button_yellow");
Button.addEventListener ('click', function() {
var div = document.getElementsByTagName("div");
for (i = 0; i < div.length;i++){
    div[i].style.backgroundColor = "yellow";
}});*/
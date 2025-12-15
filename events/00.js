//*whenever the user uses the button in Javascript, the divs changes progressively to red, yeloow, then blue.
var Button = document.getElementById("alterna");
Button.addEventListener('click', function() {
var div = document.getElementsByTagName("div");
for (i = 0; i < div.length;i+=3){
    div[i].style.backgroundColor = "red"
}
for (i = 1; i < div.length;i+=3){
    div[i].style.backgroundColor = "yellow"
} 
for (i = 2; i < div.length;i+=3){
    div[i].style.backgroundColor = "blue";
}});
//*whenever the user uses the button in Javascript, the divs change to red
var Button = document.getElementById("Button_red");
Button.addEventListener('click', function() {
var div = document.getElementsByTagName("div");
for (i = 0; i < div.length;i++){
    div[i].style.backgroundColor = "red";
}});
//*whenever the user uses the button in Javascript, the divs change to yellow
var Button = document.getElementById("Button_yellow");
Button.addEventListener('click', function() {
var div = document.getElementsByTagName("div");
for (i = 0; i < div.length;i++){
    div[i].style.backgroundColor = "yellow";
}});
//*whenever the user uses the button in Javascript, the divs change to blue
var Button = document.getElementById("Button_blue");
Button.addEventListener('click', function() {
var div = document.getElementsByTagName("div");
for (i = 0; i < div.length;i++){
    div[i].style.backgroundColor = "blue";
}});
//*whenever the user uses the button in Javascript, the divs change to orange
var Button = document.getElementById("Button_orange");
Button.addEventListener('click', function() {
var div = document.getElementsByTagName("div");
for (i = 0; i < div.length;i++){
    div[i].style.backgroundColor = "orange";
}});
//*whenever the user uses the button in Javascript, the divs change to green
var Button = document.getElementById("Button_green");
Button.addEventListener('click', function() {
var div = document.getElementsByTagName("div");
for (i = 0; i < div.length;i++){
    div[i].style.backgroundColor = "green";
}});
//*whenever the user uses the button in Javascript, the first group changes to red
var Button = document.getElementById("primo_rosso");
Button.addEventListener ('click', function() {
var div = document.getElementsByTagName("div");
for (i = 0; i < div.length;i++){
    div[i].style.backgroundColor = "red";
}});
//*whenever the user uses the button in Javascript, the second group changes to red
var Button = document.getElementById("secondo_rosso");
Button.addEventListener ('click', function() {
var div = document.getElementsByTagName("div");
for (i = 0; i < div.length;i++){
    div[i].style.backgroundColor = "red";
}});
//*whenever the user uses the button in Javascript, all divs change to red
var Button = document.getElementById("tutti_rosso");
Button.addEventListener ('click', function() {
var div = document.getElementsByTagName("div");
for (i = 0; i < div.length;i++){
    div[i].style.backgroundColor = "red";
}});
//*whenever the user uses the button in Javascript, the first group changes to blue
var Button = document.getElementById("primo_blu");
Button.addEventListener ('click', function() {
var div = document.getElementsByTagName("div");
for (i = 0; i < div.length;i++){
    div[i].style.backgroundColor = "blue";
}});
//*whenever the user uses the button in Javascript, the second group changes to blue
var Button = document.getElementById("secondo_blu");
Button.addEventListener ('click', function() {
var div = document.getElementsByTagName("div");
for (i = 0; i < div.length;i++){
    div[i].style.backgroundColor = "blue";
}});
//*whenever the user uses the button in Javascript, all divs change to blue
var Button = document.getElementById("tutti_blu");
Button.addEventListener ('click', function() {
var div = document.getElementsByTagName("div");
for (i = 0; i < div.length;i++){
    div[i].style.backgroundColor = "blue";
    }});
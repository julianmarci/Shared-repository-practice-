//*whenever the user uses the button in Javascript, the yellow divs change to red
var Button = document.getElementById("button");
Button.addEventListener ('click', function() {
var div = document.getElementsByTagName("div");
for (i = 0; i < div.length;i++){
    div[i].style.backgroundColor = "red";
}});
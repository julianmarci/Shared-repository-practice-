

//*whenever the user uses the button in Javascript, the divs changes progressively to red, yeloow, then blue.
var Button = document.getElementById("Button");
Button.addEventListener ('click', function() {
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
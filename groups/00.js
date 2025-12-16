let myButton = document.getElementById("btn_red_1");
myButton.addEventListener("click", function() {
    change_divs_color("group_1", "red");
});

myButton = document.getElementById("btn_red_2");
myButton.addEventListener("click", function() {
    change_divs_color("group_2", "red");
});

myButton = document.getElementById("btn_blue_1");
myButton.addEventListener("click", function() {
    change_divs_color("group_1", "blue");
});

myButton = document.getElementById("btn_blue_2");
myButton.addEventListener("click", function() {
    change_divs_color("group_2", "blue");
});

myButton = document.getElementById("btn_blue_all");
myButton.addEventListener("click", function() {
    change_divs_color("group_1", "blue");
    change_divs_color("group_2", "blue");
});

myButton = document.getElementById("btn_red_all");
myButton.addEventListener("click", function() {
    change_divs_color("group_1", "red");
    change_divs_color("group_2", "red");
});

function change_divs_color(div_class, bg_color) {
    let myDivs = document.getElementsByClassName(div_class);
    change_divs_style(myDivs, bg_color);
}

function change_divs_style(divs, backgroundColor) {
    for (let i = 0; i < divs.length; i++) {
        divs[i].style.backgroundColor = backgroundColor;
    }
}

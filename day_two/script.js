// EXAMPLE 1
var link = document.createElement("a");
link.innerHTML = "Click Me";
link.href = "/dir/signup.html";
document.getElementById("example-div").appendChild(link);

// EXAMPLE 2
var box = document.createElement("div");
box.innerHTML = "Blinking Div";
document.getElementById("example-div2").appendChild(box);

var colored = false;
setInterval(function (argument) {
  if (colored) {
    box.style.background = "none";
  } else {
    box.style.background = "red";
  }
  colored = !colored;
}, 500);
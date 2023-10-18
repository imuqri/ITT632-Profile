//nav bar resposive js
var MenuItems = document.getElementById("menuitems");

MenuItems.style.maxHeight = "0px";
MenuItems.style.marginBottom = "30px";

function menutoggle() {
  if (MenuItems.style.maxHeight == "0px") {
    MenuItems.style.maxHeight = "200px";
  } else {
    MenuItems.style.maxHeight = "0px";
  }
}

//popup open and close js
document.getElementById("submit").addEventListener("click", function () {
  document.querySelector(".popup").style.visibility = "visible";
});

document.getElementById("close").addEventListener("click", function () {
  document.querySelector(".popup").style.visibility = "hidden";
});

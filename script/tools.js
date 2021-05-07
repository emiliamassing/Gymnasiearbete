var menu = document.getElementById("menu");
var showMenuIcon = document.getElementById("showMenuIcon");
var hideMenuIcon = document.getElementById("hideMenuIcon");
var mobileClass = "mobile";

console.log(menu, showMenuIcon, hideMenuIcon);

showMenuIcon.addEventListener("click", handleIconClick);
hideMenuIcon.addEventListener("click", handleIconClick);

function handleIconClick(e){
    if(e.target === showMenuIcon){
        menu.classList.add(mobileClass);
        showMenuIcon.style.visibility = "hidden";
    }
    if(e.target === hideMenuIcon){
        menu.classList.remove(mobileClass);
        showMenuIcon.style.visibility = "visible";
    }
}
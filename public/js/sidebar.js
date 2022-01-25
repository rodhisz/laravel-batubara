/*===== LINK ACTIVE  =====*/ 
const linkColor = document.querySelectorAll('.nav__link')

function colorLink(){
    if(linkColor){
        linkColor.forEach(l=> l.classList.remove('active'))
        this.classList.add('active')
    }
}
linkColor.forEach(l=> l.addEventListener('click', colorLink))

/*===== EXPANDER MENU  =====*/ 
// const showMenu = (toggleId, navbarId, bodyId)=>{
// const toggle = document.getElementById(toggleId),
// navbar = document.getElementById(navbarId),
// bodypadding = document.getElementById(bodyId)

//     if(toggle && navbar){
//     toggle.addEventListener('click', ()=>{
//         navbar.classList.toggle('expander')

//         bodypadding.classList.toggle('body-pd')
//     })
//     }
// }
// showMenu('nav-toggle','navbar','body-pd')
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
    dropdownContent.style.display = "none";
    } else {
    dropdownContent.style.display = "block";
    }
    });
}
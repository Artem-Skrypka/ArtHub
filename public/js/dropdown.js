let isMobile = {
	Android: function() {return navigator.userAgent.match(/Android/i);},
	BlackBerry: function() {return navigator.userAgent.match(/BlackBerry/i);},
	iOS: function() {return navigator.userAgent.match(/iPhone|iPad|iPod/i);},
	Opera: function() {return navigator.userAgent.match(/Opera Mini/i);},
	Windows: function() {return navigator.userAgent.match(/IEMobile/i);},
	any: function() {return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());}
};

const user_dropdown = document.getElementsByClassName("user-dropdown")[0];
const user_arrow = document.getElementsByClassName("user-arrow")[0];
const user_dropdown_menu = document.getElementsByClassName("user-dropdown-menu")[0];


let body=document.querySelector('body');
if (isMobile.any()) {
    user_dropdown.addEventListener("click", (e) => {
        user_arrow.classList.toggle("fa-rotate-180");
        user_dropdown_menu.classList.toggle("hidden");
    })

    
} else {
	user_dropdown.addEventListener("mouseenter", (e) => {
        user_arrow.classList.add("fa-rotate-180");
        user_dropdown_menu.classList.remove("hidden");
        user_dropdown_menu.classList.add("flex");
    })
      
    user_dropdown.addEventListener("mouseleave", function() {
        user_arrow.classList.remove("fa-rotate-180");
        user_dropdown_menu.classList.remove("flex");
        user_dropdown_menu.classList.add("hidden");
    });
}
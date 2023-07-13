const user_dropdown = document.getElementsByClassName("user-dropdown")[0];
const user_arrow = document.getElementsByClassName("user-arrow")[0];
const user_dropdown_menu = document.getElementsByClassName("user-dropdown-menu")[0];

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
const scrollBtn = document.getElementById("scrollTopBtn");

if (scrollBtn) {
    scrollBtn.addEventListener("click", function () {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });
}

const scrollContainer = document.querySelector(".scroll-to-top");

if (scrollContainer) {
    scrollContainer.style.display = "none";
}

document.getElementById("year").textContent = new Date().getFullYear();


// Optional: Show/hide button based on scroll position
window.addEventListener('scroll', function() {
    const scrollTopBtn = document.getElementById('scrollTopBtn');
    if (window.pageYOffset > 300) {
        scrollTopBtn.parentElement.style.display = 'block';
    } else {
        scrollTopBtn.parentElement.style.display = 'none';
    }
});

// Initially hide the button
// document.querySelector('.scroll-to-top').style.display = 'none';

// document.getElementById("year").textContent = new Date().getFullYear();

// //  header
// document.addEventListener("DOMContentLoaded", function () {

// function toggleMobileQuickLinks() {
//     const expandArea = document.getElementById("mobileExpandArea");
//     const icon = document.getElementById("mobileChevron");
//     const mainNav = document.getElementById("mobileMainNav");
//     const burger = document.getElementById("mobileToggle");

//     if (expandArea) {
//         if (mainNav && mainNav.classList.contains("active")) {
//             mainNav.classList.remove("active");
//             if (burger) burger.classList.remove("open");
//         }

//         expandArea.classList.toggle("active");

//         if (icon) {
//             icon.style.transform =
//                 expandArea.classList.contains("active")
//                     ? "rotate(180deg)"
//                     : "rotate(0deg)";
//         }
//     }
// }

function toggleMobileMenu() {
    const menu = document.getElementById("mobileMainNav");
    const button = document.getElementById("mobileToggle");

    if (menu) {
        menu.classList.toggle("active");
        button.classList.toggle("open");
    }
}

window.toggleMobileMenu = toggleMobileMenu;
window.toggleMobileQuickLinks = toggleMobileQuickLinks;



function toggleMobileQuickLinks() {
    const expandArea = document.getElementById("mobileExpandArea");
    const icon = document.getElementById("mobileChevron");
    const mainNav = document.getElementById("mobileMainNav");
    const burger = document.getElementById("mobileToggle");

    if (expandArea) {

        if (mainNav && mainNav.classList.contains("active")) {
            mainNav.classList.remove("active");
            if (burger) burger.classList.remove("open");
        }

        expandArea.classList.toggle("active");

        if (icon) {
            icon.style.transform =
                expandArea.classList.contains("active")
                    ? "rotate(180deg)"
                    : "rotate(0deg)";
        }
    }
}

document.addEventListener("click", function(e){

    const trigger = e.target.closest(".sports-trigger");

    if(trigger){

        e.preventDefault();

        const parent = trigger.parentElement;
        const isOpen = parent.classList.contains("active-mobile");

        document.querySelectorAll(".sports-submenu").forEach(menu=>{
            menu.classList.remove("active-mobile");
        });

        if(!isOpen){
            parent.classList.add("active-mobile");
        }

    } else {

        document.querySelectorAll(".sports-submenu").forEach(menu=>{
            menu.classList.remove("active-mobile");
        });

    }

});
setTimeout(function () {
    document.getElementById("popbox").classList.remove("hide");
    document.body.className += " flowbox";
}, 5000);

function removeClassonBody() {
    var element = document.body;
    element.className = element.className.replace(/\bflowbox\b/g, "");
}

var swiper = new Swiper(".mySwiper", {
    autoplay: true,
    autoplaySpeed: 2500,
    slidesPerView: 1,
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

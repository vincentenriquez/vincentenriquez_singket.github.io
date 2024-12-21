$(document).ready(function(){
    $(window).scroll(function(){
        // sticky navbar on scroll script
        if(this.scrollY > 20){
            $('.navigation-bar').addClass("sticky");
        }else{
            $('.navigation-bar').removeClass("sticky");
        }

        if(this.scrollY > 500) {
            $('#scrollUpBtn').css('display', 'block'); 
        } else{
            $('#scrollUpBtn').css('display', 'none'); 
        }
    });

    $('#scrollUpBtn').click(function (){
        $('html').animate({scrollTop: 0});
        $('html').css("scrollBehavior", "auto");
    });

    
    $('.navbar .logo .navigation-menu-content .navigation-list li a').click(function(){
        // applying again smooth scroll on menu items click
        $('html').css("scrollBehavior", "smooth");
    });

    $('.home-btn').click(function(){
        // applying again smooth scroll on menu items click
        $('html').css("scrollBehavior", "smooth");
    });

    $('.navigation-header').click(function(){
        // applying again smooth scroll on menu items click
        $('html').css("scrollBehavior", "smooth");
    });

    $('.offcanvas-body .nav-link').click(function () {
        // Use Bootstrap's Offcanvas instance to close
        var offcanvasElement = document.getElementById('offcanvasNavbar');
        var offcanvasInstance = bootstrap.Offcanvas.getInstance(offcanvasElement);
        offcanvasInstance.hide();
    });

});

const noRightClickImages = document.querySelectorAll('.no-right-click');
noRightClickImages.forEach(img => {
    img.addEventListener('contextmenu', e => {
        e.preventDefault();
    });
});

// Debounce function to limit the rate of execution
const debounce = (func, delay) => {
    let timer;
    return function (...args) {
        clearTimeout(timer);
        timer = setTimeout(() => func.apply(this, args), delay);
    };
};

document.addEventListener("DOMContentLoaded", () => {
    const timelineItems = document.querySelectorAll(".timeline-item");

    const isInViewport = (el) => {
        const rect = el.getBoundingClientRect();
        return (
            rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.bottom >= 0
        );
    };

    const handleScroll = () => {
        timelineItems.forEach((item) => {
            if (isInViewport(item)) {
                item.classList.add("visible");
            } else {
                item.classList.remove("visible");
            }
        });
    };

    // Attach scroll event listener with debounce
    window.addEventListener("scroll", debounce(handleScroll, 100));

    // Initial check
    handleScroll();
});

AOS.init({
    duration: 1200,
})


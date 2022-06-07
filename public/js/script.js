function startTestimonials(){
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        items:1
    })
}

document.addEventListener("DOMContentLoaded", function(){
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
          document.getElementById('main-header').classList.add('fixed');
          
          navbar_height = document.querySelector('.navbar').offsetHeight;
          document.body.style.paddingTop = navbar_height + 'px';
        } else {
          document.getElementById('main-header').classList.remove('fixed');
           
          document.body.style.paddingTop = '0';
        } 
    });
}); 
startTestimonials();
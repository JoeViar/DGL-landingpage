

(function () {
    const items = document.querySelectorAll(".timeline-section li");
    function isElementInViewport(el) {
      let rect = el.getBoundingClientRect();
      return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <=
          (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
      );
    }
  
    function slideIn() {
      for (let i = 0; i < items.length; i++) {
        if (isElementInViewport(items[i])) {
          items[i].classList.add("slide-in");
        } else {
          items[i].classList.remove("slide-in");
        }
      }
    }
  
    window.addEventListener("load", slideIn);
    window.addEventListener("scroll", slideIn);
    window.addEventListener("resize", slideIn);
  })();
$(document).ready(function() {
 
    $(".owl-carousel").owlCarousel({
   
        autoPlay: 1000,
        items : 5,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3],
        center: true,
        nav:true,
        loop:true,
        responsive: {
          600: {
            items: 1,
            loop:true
          }
        }
       
       
        
        
        
   
    });
    $(".owl-carousel-header").owlCarousel({
   
      autoPlay: 5300,
      items : 1,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3],
      center: true,
      nav:true,
      loop:true,
      responsive: {
        600: {
          items: 1,
          loop:true
        }
      }
     
     
      
      
      
 
  });
  
    
   
  });
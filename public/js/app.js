$(document).ready(function() {
    // Get all dropdowns on the page that aren't hoverable.

    bulmaCarousel.attach('#slider', {
      slidesToScroll: 1,
      slidesToShow: 1,
      infinite: true,
      autoplay: true,
    });
    
    var accordions = bulmaAccordion.attach();
    var dropdowns = document.querySelectorAll('.dropdown:not(.is-hoverable)');
  
    if (dropdowns.length > 0) {
      // For each dropdown, add event handler to open on click.
      dropdowns.forEach(function(el) {
        el.addEventListener('click', function(e) {
        $(".dropdown-menu").toggle();
          if (!el.classList.contains("is-active")) {
            el.classList.toggle('is-active');
            
            e.stopPropagation();
            e.preventDefault();
          }
        });
      });
  
      // If user clicks outside dropdown, close it.
      document.addEventListener('click', function(e) {
        closeDropdowns();
      });
    }
  
    /*
     * Close dropdowns by removing `is-active` class.
     */
    function closeDropdowns() {
      dropdowns.forEach(function(el) {
        el.classList.remove('is-active');
      });
    }
  
    // Close dropdowns if ESC pressed
    document.addEventListener('keydown', function(event) {
      let e = event || window.event;
      if (e.key === 'Esc' || e.key === 'Escape') {
        closeDropdowns();
      }
    });

  
  




    
  });

  jQuery(document).ready(function () {
    // run the accordion
    var allPanels = jQuery(".accord-content").hide();
    var heads = jQuery(".accordion header");
    jQuery(heads).on("click", function () {
      $this = jQuery(this);
      $target = $this.parent().find("div.accord-content");
      if (!$target.hasClass("active")) {
        heads.removeClass("selected");
        $this.addClass("selected");
        allPanels.removeClass("active").slideUp();
        $target.addClass("active").slideDown();
      }
    });
  });

  
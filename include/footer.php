</main>
<script src="js/script.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/parallax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js"></script>


<script>
      $(document).ready(function() {
        $('.project-container').magnificPopup({type:'image',gallery:{
        enabled:true
      },image: {
        titleSrc: 'title'
      }});
    });

    $('.parallax-window').parallax({ imageSrc: 'images/scroll-bg.webp' });
    $('.about_img').parallax({ imageSrc: 'about_img.png'});

    document.addEventListener("DOMContentLoaded", function () {
        gsap.to('.main_nav', {
            scrollTrigger: {
                trigger: '.main_container',
                start: 'top top',
                end: 'bottom top',
                pin: '.sticky-nav',
                zIndex: 99,
                pinSpacing: false,
                onToggle: function (self) {
            if (self.isActive) {
                gsap.set('.sticky-nav', { zIndex: 99 });
            } else {
                gsap.set('.sticky-nav', { zIndex: 1 });
            }
        }
            }
        });
    });



    document.addEventListener("DOMContentLoaded", function () {
        gsap.utils.toArray('.main_sections').forEach(function (section, index) {
            gsap.to(section, {
                scrollTrigger: {
                    trigger: section,
                    start: 'top center',
                    end: 'bottom center',
                    onToggle: function (self) {
                        // console.log(self);
                        if (self.isActive) {
                            var headingElement = document.querySelector('.containers_heading h2');
                            $(headingElement).html(self.vars.trigger.dataset.side_heading);
                            $('.mainNav_btn').removeClass('active');
                            $('.' + self.vars.trigger.dataset.nav_active).addClass('active');

                        }
                    }
                }
            });
        });
    });

    document.querySelectorAll('.main_nav li').forEach(function (li) {
        li.addEventListener('click', function () {
            var sectionId = this.getAttribute('data-section');
            var destination = document.getElementById(sectionId).offsetTop + window.innerHeight - (window.innerHeight*10/100); // 10vh
            gsap.to(window, { scrollTo: { y: destination, autoKill: false }, duration: 0.8 });
        });
    });

    $('.our_services').slick({
  dots: false,
  infinite: true,
  arrows:false,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});


    $('.our_done_projects').slick({
  dots: false,
  infinite: true,
  arrows:false,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});

</script>
</body>

</html>
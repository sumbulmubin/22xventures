
<footer id="footer" class="footer py-3">


  <div class="container copyright text-center">

    Copyright ©2024. All Rights Reserved | <a class="fw-semi-bold text-white" href="#">Designed

      by

      JanBask Digital Design </a>

  </div>

</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


<!-- Vendor JS Files -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

<!-- Main JS File -->
<script src="assets/js/main.js"></script>

<!-- GLightbox JS -->

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const carouselElement = document.getElementById('carouselExampleControls');
        const carouselToggleBtn = document.getElementById('carouselToggle');
        const carouselToggleIcon = document.getElementById('carouselToggleIcon');
        let isPlaying = true;

        carouselToggleBtn.addEventListener('click', function() {
            if (isPlaying) {
                $('#carouselExampleControls').carousel('pause');
                carouselToggleIcon.src = 'assets/img/playIcon.png';
                carouselToggleIcon.alt = 'Play';
            } else {
                $('#carouselExampleControls').carousel('cycle');
                carouselToggleIcon.src = 'assets/img/pauseIcon.png';
                carouselToggleIcon.alt = 'Pause';
            }
            isPlaying = !isPlaying;
        });
    });
</script>

  <script>
  $(".slick-slider").slick({
    slidesToShow: 1,
    infinite:true,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000
      // dots: false, Boolean
     // arrows: false, Booleans
   });
   </script>

<script>
  $('.slider-for2').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: true,
    adaptiveHeight: true
      // dots: false, Boolean
     // arrows: false, Boolean
   });
   </script>


<script>
  	//banner slider
	$(".bannerSlider").slick({
      dots: true, 
      autoplay: true, 
      infinite: true, 
      slidesToShow: 1 , 
      slideswToScroll: 1, 
      arrows: true, 
	});
</script>

<script>
  $(".innerSlider44").slick({
					dots: false,
					fade: true,
					pauseOnHover: false,
					arrows: true,
					infinite: true,
					autoplay: false,
					autoplaySpeed: 2000,
					speed: 300,
					slidesToShow: 1,
					adaptiveHeight: false
});

$('#toggle').click( function() {
  if ($(this).html() == '<img class="img-fluid" src="assets/img/pauseIcon.png" alt="">'){
     $('.slider-for').slick('slickPause')
     $(this).html('<img class="img-fluid" src="assets/img/playIcon.png" alt="">') 
  } else {
    $('.slider-for').slick('slickPlay')  
    $(this).html('<img class="img-fluid" src="assets/img/pauseIcon.png" alt="">') 
  }  
});
$('#toggle1').click( function() {
  if ($(this).html() == '<img class="img-fluid" src="assets/img/pauseIcon.png" alt="">'){
     $('.slick-slider').slick('slickPause')
     $(this).html('<img class="img-fluid" src="assets/img/playIcon.png" alt="">') 
  } else {
    $('.slick-slider').slick('slickPlay')  
    $(this).html('<img class="img-fluid" src="assets/img/pauseIcon.png" alt="">') 
  }  
});
$('#toggle2').click( function() {
  if ($(this).html() == '<img class="img-fluid" src="assets/img/pauseIcon.png" alt="">'){
     $('.slider-for2').slick('slickPause')
     $(this).html('<img class="img-fluid" src="assets/img/playIcon.png" alt="">') 
  } else {
    $('.slider-for2').slick('slickPlay')  
    $(this).html('<img class="img-fluid" src="assets/img/pauseIcon.png" alt="">') 
  }  
});
</script>


<script>
        document.addEventListener('DOMContentLoaded', function() {
            const lightbox = GLightbox({
                selector: '.glightbox'
            });
        });

        $(function() {
            // Initialize the main slider
            var $carousel = $('.slider-for');
            $carousel.slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                fade: true,
                adaptiveHeight: true
            });

            // Function to open image gallery popup
            function openImagePopup() {
                $carousel.magnificPopup({
                    delegate: 'a[href$=".jpg"], a[href$=".jpeg"], a[href$=".png"], a[href$=".gif"]', // Select only image links
                    type: 'image',
                    gallery: {
                        enabled: true,
                        navigateByImgClick: true,
                        tCounter: '<span class="mfp-counter">%curr% из %total%</span>',
                        preload: [0, 1]
                    },
                    image: {
                        verticalFit: true,
                        tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
                    },
                    zoom: {
                        enabled: true,
                        duration: 300
                    },
                    removalDelay: 300,
                    callbacks: {
                        open: function() {
                            var current = $carousel.slick('slickCurrentSlide');
                            $carousel.magnificPopup('goTo', current);
                        },
                        beforeClose: function() {
                            $carousel.slick('slickGoTo', parseInt(this.index));
                        }
                    }
                }).magnificPopup('open');
            }

            // Function to open video popup
            function openVideoPopup() {
                $carousel.magnificPopup({
                    delegate: 'a[href$=".mp4"], a[href$=".webm"], a[href$=".ogg"]', // Select only video links
                    type: 'iframe',
                    gallery: {
                        enabled: true,
                        navigateByImgClick: true,
                        tCounter: '<span class="mfp-counter">%curr% из %total%</span>',
                        preload: [0, 1]
                    },
                    iframe: {
                        patterns: {
                            mp4: {
                                index: '', // No special pattern
                                src: '%id%' // Simply return the href value
                            }
                        }
                    },
                    zoom: {
                        enabled: true,
                        duration: 300
                    },
                    removalDelay: 300,
                    callbacks: {
                        open: function() {
                            var current = $carousel.slick('slickCurrentSlide');
                            $carousel.magnificPopup('goTo', current);
                        },
                        beforeClose: function() {
                            $carousel.slick('slickGoTo', parseInt(this.index));
                        }
                    }
                }).magnificPopup('open');
            }

            // Attach events to the icons
            $('#camera-icon').on('click', function() {
                openImagePopup();
            });

            $('#video-icon').on('click', function() {
                openVideoPopup();
            });
        });

        // Function to open and close audio popup
        function openPopup() {
            document.getElementById("audioPopup").style.display = "block";
        }

        function closePopup() {
            document.getElementById("audioPopup").style.display = "none";
        }

        // Function to open and close video modal
        function openModal() {
            document.getElementById("videoModal").style.display = "block";
        }

        function closeModal() {
            document.getElementById("videoModal").style.display = "none";
        }
    </script>







<script>


  document.addEventListener('DOMContentLoaded', function() {
      const lightbox = GLightbox({
          selector: '.glightbox'
      });
  });
  
  
  $(function() {
    // Initialize the main slider
    var $carousel = $('.slider-for1');
    $carousel.slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      fade: true,
      adaptiveHeight: true
    });
  
    // Function to open image gallery popup
    function openImagePopup() {
      $carousel.magnificPopup({
        delegate: 'a[href$=".jpg"], a[href$=".jpeg"], a[href$=".png"], a[href$=".gif"]', // Select only image links
        type: 'image',
        gallery: {
          enabled: true,
          navigateByImgClick: true,
          tCounter: '<span class="mfp-counter">%curr% из %total%</span>',
          preload: [0, 1]
        },
        image: {
          verticalFit: true,
          tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
        },
        zoom: {
          enabled: true,
          duration: 300
        },
        removalDelay: 300,
        callbacks: {
          open: function() {
            var current = $carousel.slick('slickCurrentSlide');
            $carousel.magnificPopup('goTo', current);
          },
          beforeClose: function() {
            $carousel.slick('slickGoTo', parseInt(this.index));
          }
        }
      }).magnificPopup('open');
    }
  
    // Function to open video popup
    function openVideoPopup() {
      $carousel.magnificPopup({
        delegate: 'a[href$=".mp4"], a[href$=".webm"], a[href$=".ogg"]', // Select only video links
        type: 'iframe',
        gallery: {
          enabled: true,
          navigateByImgClick: true,
          tCounter: '<span class="mfp-counter">%curr% из %total%</span>',
          preload: [0, 1]
        },
        iframe: {
          patterns: {
            mp4: {
              index: '', // No special pattern
              src: '%id%' // Simply return the href value
            }
          }
        },
        zoom: {
          enabled: true,
          duration: 300
        },
        removalDelay: 300,
        callbacks: {
          open: function() {
            var current = $carousel.slick('slickCurrentSlide');
            $carousel.magnificPopup('goTo', current);
          },
          beforeClose: function() {
            $carousel.slick('slickGoTo', parseInt(this.index));
          }
        }
      }).magnificPopup('open');
    }
  
    // Attach events to the icons
    $('#camera-icon1').on('click', function() {
      openImagePopup();
    });
  
    $('#video-icon1').on('click', function() {
      openVideoPopup();
    });
  });
  
  </script>


<script>
document.getElementById('playButton').addEventListener('click', function() {
    document.getElementById('audioPopup').style.display = 'block';
});

document.querySelector('.close').addEventListener('click', function() {
    var audio = document.querySelector('#audioPopup audio');
    audio.pause(); // Pause the audio
    audio.currentTime = 0; // Reset audio to the beginning
    document.getElementById('audioPopup').style.display = 'none';
});
</script>


<script>
  function openPopup() {
    document.getElementById('videoPopup').style.display = 'flex';
  }

  function closePopup() {
    var video = document.getElementById('popupVideo');
    video.pause();
    video.currentTime = 0;
    document.getElementById('videoPopup').style.display = 'none';
  }
</script>
<script>
// Get the modal
var modal = document.getElementById("videoModal");

// Get the video
var video = document.getElementById("popupVideo1");

// Open the modal
function openModal() {
    modal.style.display = "block";
}

// Close the modal
function closeModal() {
    modal.style.display = "none";
    video.pause(); // Pause the video when closing
    video.currentTime = 0; // Reset the video to the start
}

// Close the modal when clicking outside of the modal content
window.onclick = function(event) {
    if (event.target === modal) {
        closeModal();
    }
}


</script>



</body>

</html>
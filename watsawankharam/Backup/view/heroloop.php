<?php
$slideImages = ['slide-1.jpg', 'slide-2.jpg', 'slide-3.jpg', 'slide-4.jpg', 'slide-5.jpg']; // Array of slide image names

$totalSlides = count($slideImages); // Get the total number of slides
$slidesToShow = min($totalSlides, 4); // Limit to a maximum of 4 slides

$counter = 1; // Counter for slide number

while ($counter <= $slidesToShow) {
    $activeClass = ($counter === 1) ? 'active' : ''; // Add 'active' class to the first slide

    // Output HTML for each slide
    echo '<!-- Slide ' . $counter . ' -->
        <div class="carousel-item ' . $activeClass . '" style="background-image: url(assets/img/slide/' . $slideImages[$counter - 1] . ')">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">
                Welcome to 
                 <span>Multi</span>
              </h2>

              <p class="animate__animated animate__fadeInUp">
              Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat 
              sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. 
              Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.
              </p>

              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>';

    $counter++; // Increment counter for the next slide
}
?>

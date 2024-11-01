<section id="testimonials" class="testimonials section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>กิจกรรม</h2>
            <p>ข่าวสารประชาสัมพันธ์</p>
        </div>
        
        <?php
        // Enable error reporting
        ini_set('display_errors', 1);
        error_reporting(E_ALL);

        // Try including the file with error handling
        $included = include './view/news.php';
        
        if (!$included) {
            echo "Failed to include 'news.php'. Check file path or content.";
        }
        ?>
        
    </div>
</section>

<?php include("./model/DB.php"); ?>

<section id="testimonials" class="testimonials section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>กิจกรรม</h2>
            <p>ข่าวสารประชาสัมพันธ์</p>
        </div>


<?php
 try {
    $obj = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password); // Used $dbname variable
    // Set the PDO error mode to exception
    $obj->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // SQL query to fetch data from tbl_events
    $sql = "SELECT * FROM tbl_events";
    $result = $obj->query($sql);

    if ($result) {
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
  
        echo '<div class="swiper-slide">';
        echo '    <div class="testimonial-wrap">';
        echo '        <div class="testimonial-item">';
        echo '            <img src="' . $row['eventspicH'] . '.jpg" class="testimonial-img" alt="" width="300px">';
        echo '            <h3>' . $row['eventsHead'] . '</h3>';
        echo '            <h4>' . $row['eventsname'] . '</h4>';
        echo '            <p>';
        echo '                <i class="bx bxs-quote-alt-left quote-icon-left"></i>' . $row['eventsmsg'];
        echo '                <i class="bx bxs-quote-alt-right quote-icon-right"></i>';
        echo '            </p>';
        echo '        </div>';
        echo '    </div>';
        echo '</div><!-- End testimonial item -->';
    }
} else {
    echo "No results found";
}
} catch(PDOException $e) {
echo "Connection failed: " . $e->getMessage();
}
?>
    </div>
</section>


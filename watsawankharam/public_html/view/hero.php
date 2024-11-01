<?php include("./model/DB.php"); ?>

<section id="hero">

    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
      <div class="carousel-inner" role="listbox">

        <?php
        try {
            $obj = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $obj->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "SELECT * FROM tbl_events";
            $result = $obj->query($sql);

            if ($result) {
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    echo '<div class="carousel-item active" style="background-image: url(\'' . $row['eventspicH'] .$row['type=2'] . '.jpg\')">';
                    echo '    <div class="carousel-container">';
                    echo '        <div class="container">';
                    echo '            <h2 class="animate__animated animate__fadeInDown">ยินดีต้อนรับ <span>วัดสวรรคาราม</span></h2>';
                    echo '            <p class="animate__animated animate__fadeInUp">แหล่งรวมจิตรใจ ในศรัทธา</p>';
                    echo '             <a href="./newtab.php?eventsid=' . $row['eventsid'] . '&eventspicH=' . $row['eventspicH'] . '" target="_blank" class="btn-get-started animate__animated animate__fadeInUp scrollto">อ่านต่อ...</a>';
                    echo '        </div>';
                    echo '    </div>';
                    echo '</div><!-- End testimonial item -->';
                }
                
            } else {
                echo "No results found";
            }
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        ?>
    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
<span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
</a>
<a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
<span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
</a>

</div>
</section>
<?php include("includes/init.php");
$nav_index_class = "current_page";
$nav_title = "Ithaca Apple Harvest Festival";
$nav_footer = "Homepage";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Apple Fest</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="styles/site.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <?php include("includes/header.php"); ?>
        <main>
            <div class = "index_middle">

                <div class = "index_date_time">
                    <div class = "index_date">
                        <h3>Date</h3>
                        <p>Friday, Sept. 27 - Sunday Sept. 29</p>
                    </div>
                    <div class = "index_times">
                        <h3>Time</h3>
                        <p><span class="em">Friday:</span> 12:00pm - 6:00pm</p>
                        <p><span class="em">Saturday:</span> 10:00am - 6:00pm</p>
                        <p><span class="em">Sunday:</span> 10:00am - 6:00pm</p>
                    </div>
                    <div class = "index_location">
                        <h3>Location</h3>
                        <p>Ithaca Commons</p>
                    </div>
                </div>

                <div class = "index_info">
                    <!-- Source: (original work) Dayoon Kim -->
                    <img src = "images/index_first.png" alt = "Apple Fest 1" title = "Apple Fest 1"/>

                    <!-- Source: (original work) Dayoon Kim -->
                    <img src = "images/index_second.png" alt = "Apple Fest 2" title = "Apple Fest 2"/>
                </div>

            </div>

            <div class = "index_bottom">
                <h2>Apple Harvest Farmers Market</h2>
                <p>Downtown Ithaca Apple Harvest Festival is held by Tompkins Trust Company. 2019 was the <span class="em">37th</span> Annual Apple Harvest Festival! Plenty of <span class="em">delicious foods</span> are present in Apple Fest! </p>
                <p>You can find <span class="em">apple</span> farmers, <span class="em">local produced</span> goods, <span class="em">fresh baked</span> goods, and even <span class="em">entertainment</span> full of games and prizes! There are also <span class="em">live perforances</span> to watch while enjoying the food. </p>

                <div class = "index_bottom_info">
                    <div class = "index_bottom_img">
                        <!-- Source: https://www.downtownithaca.com/apple-harvest-festival/-->
                        <img src = "images/index_doughnuts.jpg" alt = "Apple Fest Doughnuts" title = "Apple Fest Doughnuts">
                        <a class = "source" href = "https://www.downtownithaca.com/apple-harvest-festival/">Source: Downtown Ithaca</a>
                    </div>
                    <div class = "index_bottom_img">
                        <!-- Source: https://www.downtownithaca.com/apple-harvest-festival/-->
                        <img src = "images/index_drink.jpg" alt = "Apple Fest Drinks" title = "Apple Fest Drinks">
                        <a class = "source" href = "https://www.downtownithaca.com/apple-harvest-festival/">Source: Downtown Ithaca</a>
                    </div>
                    <div class = "index_bottom_img">
                        <!-- Source: https://www.downtownithaca.com/apple-harvest-festival/-->
                        <img src = "images/index_cidery.jpg" alt = "Apple Fest Cidery" title = "Apple Fest Cidery">
                        <a class = "source" href = "https://www.downtownithaca.com/apple-harvest-festival/">Source: Downtown Ithaca</a>
                    </div>
                </div>
                <p>Enjoy the famous Apple Doughnuts that are only available in Ithaca! They are made with locally grown, fresh apples. Apple Fest also has numerous sweet drinks full of different apple tastes. The cideries are also sold throughout the festival! Try different food and make great memories with your loved ones. </p>
            </div>
        </main>

        <?php include("includes/footer.php"); ?>




    </body>
</html>

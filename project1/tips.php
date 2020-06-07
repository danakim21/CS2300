<?php include("includes/init.php");
$nav_tips_class = "current_page";
$nav_title = "Apple Festival Tips";
$nav_footer = "Tip Page";

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
            <h1 class = "TipTitle">Tips</h1>
            <div class = "two_col">

                <h3>Here are some tips for those of you who are going to attend Ithaca Apple Harvest Festival! These are very <span class="em">useful tips</span>, <span class="em">cautions</span>, and <span class="em">notes</span> that are compiled from comments of past visitors.</h3>

                <div class = "row">
                    <h2>1. Long Lines</h2>
                    <p>The lines are very long for any of the foods or activities. Be prepared for waiting in line by going with your friends and families and talking with them! </p>
                </div>

                <div class = "row">
                    <h2>2. Hot Weather</h2>
                    <p>September in Ithaca is surprisingly very hot! The weather is very nice, but waiting in line might make you exhausted due to the hot weather. Make sure to wear your clothes keeping this in mind. Consider taking water with you because you're might get thursty! </p>
                </div>

                <div class = "row">
                    <h2>3. <span class = "caution">CAUTION:</span> Bees</h2>
                    <p>Because of the sweetness of apples, there are very many bees all around the festival. Be alerted of the bees: they might come to you if you have sweet foods in your hands. Try avoiding yellow colored clothes! </p>
                </div>

                <div class = "row">
                    <h2>4. Restrooms</h2>
                    <p>There are not much tissues or places to wash your hands. If your hands get dirty or sticky from foods, look at the map below to find the location of the restrooms! They are drawn with an R sign in the map. </p>
                </div>

                <div class = "row">
                    <h2>5. Lost and Found</h2>
                    <p>You might lose your important belongings while enjoying the festival. Do not panic, and visit the Lost and Found booth. The location of the booth is shown in the map below! It is drawn with an I sign in the map.</p>
                </div>
            </div>

            <h1 class = "TipTitle">Things You Must Do</h1>
            <div class = "two_col">

                <h3>Here are some things that you <span class="em">must do</span> when you attend Ithaca Apple Harvest Festival! </h3>

                <div class = "row">
                    <h2>Eat! </h2>
                    <p>Ithaca Apple Harvest Festival is full of delicious foods. Try all of them because they are all fresh from Ithaca! Visit the <a href="food.php">food</a> page to find out more about what kinds of foods are offered. The most famous ones are Cider Donuts and Orchard Cider. </p>
                </div>

                <div class = "row">
                    <h2>Craft Show</h2>
                    <p>Numerous artists, bakers, and crafters come to the festival to express their work. Make sure to check out their unique works including clothings, paintings, and more! </p>
                </div>

                <div class = "row">
                    <h2>Live Music & Performances</h2>
                    <p>Both on Saturday and Sunday, there are live performances going on at the Bernie Milton Pavilion and West State Street. A variety of artists and singers come to perform, so make youself some time to check out their performances. </p>
                </div>
                </div>


            <!-- Source: https://www.downtownithaca.com/wp-content/uploads/AppleHarvestFestival_EventMap_2019_webready.pdf-->
            <img class = "map tipsmap" src = "images/visit_map.png" alt = "Apple Fest Map" title = "Apple Fest Map">
            <a class = "source mapSource" href = "https://www.downtownithaca.com/wp-content/uploads/AppleHarvestFestival_EventMap_2019_webready.pdf">Source: Downtown Ithaca</a>
        </main>

        <?php include("includes/footer.php"); ?>


    </body>
</html>

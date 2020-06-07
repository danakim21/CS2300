<?php include("includes/init.php");
$nav_food_class = "current_page";
$nav_title = "Apple Festival Food";
$nav_footer = "Food Page";

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
            <div class = "food_p">
                <p>Lots of delicious foods are provided in the Apple Festival! See the types of foods as well as the descriptions of them below. <span class = "caution">The locations to find them are also shown in the map below.</span></p>
            </div>


            <div class = "foods">
                <div class = "eat">
                    <!-- Source: (original work) Dayoon Kim -->
                    <img src = "images/food_doughnuts.png" alt = "Apple Fest Doughnuts" title = "Apple Fest Doughnuts"/>
                    <div class = "eat_info">
                        <h2>Mini Cider Donuts</h2>
                        <p>Mini Cider Donuts are small apple cider donuts made of local produced apples, and they are very sweet. Donuts are the most famous food in Apple Festival. </p>
                        <div class = "food_info">
                            <p>1/2 Doz: $4, Doz: $6</p>
                            <p>Rating: 5/5</p>
                            <p>Location: #1 (Map Below)</p>
                        </div>
                    </div>
                </div>
                <div class = "eat">
                    <!-- Source: (original work) Dayoon Kim -->
                    <img src = "images/food_cider.png" alt = "Apple Fest Cider" title = "Apple Fest Cider"/>
                    <div class = "eat_info">
                        <h2>Orchard Cider</h2>
                        <p>Orchard Cider is similar to Apple Juice, yet it is sweeter and more delicious! People usually buy Apple Cider to drink with the Cider Donuts.</p>
                        <div class = "food_info">
                            <p>Ice Cold: $3, Slush: $3</p>
                            <p>Rating: 4/5</p>
                            <p>Location: #9 (Map Below)</p>
                        </div>
                    </div>
                </div>
                <div class = "eat">
                    <!-- Source: https://www.yelp.com/biz_photos/ithaca-apple-harvest-festival-ithaca?select=Zg261wpD6M-SC4oilkmTXQ-->
                    <img src = "images/food_sundae.jpg" alt = "Apple Sundae" title = "Apple Sundae">
                    <div class = "eat_info">
                        <h2>Apple Sundae</h2>
                        <p>Apple Sundae is apple with ice-cream and additional ingredients such as chocolate, nuts, or syrups. The ice-cream will help you from the heat.</p>
                        <div class = "food_info">
                            <p>One Cup: $3</p>
                            <p>Rating: 5/5</p>
                            <p>Location: #2 (Map Below)</p>
                            <a  class = "source food_image_source" href = "https://www.yelp.com/biz_photos/ithaca-apple-harvest-festival-ithaca?select=Zg261wpD6M-SC4oilkmTXQ">Source: Yelp</a>
                        </div>
                    </div>
                </div>
                <div class = "eat">
                    <!-- Source: https://theithacan.org/media/apples-to-apples-annual-apple-harvest-festival-brings-thousands-to-the-commons-2/-->
                    <img src = "images/food_crisp.jpg" alt = "Apple Crisp" title = "Apple Crisp">
                    <div class = "eat_info">
                        <h2>Fresh Apple Crisp</h2>
                        <p>Fresh Apple Crisp is served with whipped cream, vanilla ice cream, and freshly baked apple crisps. It is the one of the best desserts served in the festival. </p>
                        <div class = "food_info">
                            <p>One Bowl: $4</p>
                            <p>Rating: 3/5</p>
                            <p>Location: #8 (Map Below)</p>
                            <a  class = "source food_image_source" href = "https://theithacan.org/media/apples-to-apples-annual-apple-harvest-festival-brings-thousands-to-the-commons-2/">Source: The Ithacan</a>
                        </div>
                    </div>
                </div>

                <div class = "eat">
                    <!-- Source: https://www.yelp.com/biz_photos/ithaca-apple-harvest-festival-ithaca?select=BWoJTM1YJiaKp6Ssoj5XFg-->
                    <img src = "images/food_sandwich.jpg" alt = "Apple Sandwich" title = "Apple Sandwich">
                    <div class = "eat_info">
                        <h2>Pulled Pork Sandwich</h2>
                        <p>Pulled Pork Sandwich is served with apple cabbage slaw. Apple cabage adds sweetness to the sandwich, giving a sandwich new taste.</p>
                        <div class = "food_info">
                            <p>One Sandwich: $5</p>
                            <p>Rating: 4/5</p>
                            <p>Location: #3 (Map Below)</p>
                            <a  class = "source food_image_source" href = "https://www.yelp.com/biz_photos/ithaca-apple-harvest-festival-ithaca?select=BWoJTM1YJiaKp6Ssoj5XFg">Source: Yelp</a>
                        </div>
                    </div>
                </div>
                <div class = "eat">
                    <!-- Source: https://www.yelp.com/biz_photos/ithaca-apple-harvest-festival-ithaca?select=656IIFm-iTf0FQ8qFi45zw-->
                    <img src = "images/food_mac.jpg" alt = "Apple Mac" title = "Apple Mac">
                    <div class = "eat_info">
                        <h2>Lobster Mac & Cheese</h2>
                        <p>Lobster Mac & Cheese is macaroni and cheese served with lobster. Besides lobster, Mac & Cheese is also served with buffalo chicken and other tastes!</p>
                        <div class = "food_info">
                            <p>One Cup: $7</p>
                            <p>Rating: 3/5</p>
                            <p>Location: #7 (Map Below)</p>
                            <a  class = "source food_image_source" href = "https://www.yelp.com/biz_photos/ithaca-apple-harvest-festival-ithaca?select=656IIFm-iTf0FQ8qFi45zw">Source: Yelp</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class = "review">
                <h2>Reviews</h2>
                <blockquote>
                    <p><strong>Dana Kim</strong></p>
                    <p>"I really loved the Apple Sundae! It was sweet and full of things that I love."</p>
                    <p><strong>Daniel Lee</strong></p>
                    <p>"I recommend people to buy the apple donuts and cider together. The combination is great"</p>
                </blockquote>
            </div>

            <div class = "food_map">
                <h2>Map</h2>
                <!-- Source: https://www.downtownithaca.com/wp-content/uploads/AppleHarvestFestival_CiderTrailMap_2019_Optimized.pdf-->
                <img src = "images/food_map.png" alt = "Apple Fest Map" title = "Apple Fest Map">
                <a  class = "source" href = "https://www.downtownithaca.com/wp-content/uploads/AppleHarvestFestival_CiderTrailMap_2019_Optimized.pdf">Source: Downtown Ithaca</a>
            </div>

            <div class = "food_p">
                <h2>Vendors: </h2>
                <p>Numerous <span class="em">food</span> and <span class="em">beverage vendors</span> are present including the following: </p>
                <div class = "food_list">
                    <div class = "food_list_1">
                        <div class = "food_list_2">
                            <p>Coltivare</p>
                            <p>Ithaca Coffee</p>
                            <p>Luna Street Food</p>
                            <p>Rashida Sawyer Bakery</p>
                            <p>New Delhi Diamonds</p>
                        </div>
                        <div class = "food_list_2">
                            <p>Bickering Twins</p>
                            <p>Covert Country Kitchen</p>
                            <p>Adam Grill</p>
                            <p>Commons Kitchen</p>
                        </div>
                    </div>
                    <div class = "food_list_1">
                        <div class = "food_list_2">
                            <p>Tibentian Momo</p>
                            <p>On The Street</p>
                            <p>Trini style</p>
                            <p>B&B Kettle Korn</p>
                            <p>Lao Village</p>
                        </div>
                        <div class = "food_list_2">
                            <p>Kettle Corn Shoppe</p>
                            <p>Hot Spot Grills</p>
                            <p>Shuck Yeah!</p>
                            <p>Sirilux Pensiri USA</p>
                        </div>
                    </div>
                    <div class = "food_list_1">
                        <div class = "food_list_2">
                            <p>LLc</p>
                            <p>Silo Food Truck</p>
                            <p>Eat The Foood</p>
                            <p>The Good Truck</p>
                            <p>Dee Dee’s ice cream</p>
                        </div>
                        <div class = "food_list_2">
                            <p>Sugarlips</p>
                            <p>Kim’s Cheesecake</p>
                            <p>Pretzels</p>
                            <p>Hollow Creek LLC</p>
                        </div>
                    </div>
                </div>
                <!-- Source: https://www.downtownithaca.com/apple-harvest-festival/ -->
                <a class = "source food_list_source" href = "https://www.downtownithaca.com/apple-harvest-festival/">Source: Downtown Ithaca</a>
            </div>
        </main>

        <?php include("includes/footer.php"); ?>


    </body>
</html>

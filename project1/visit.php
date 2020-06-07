<?php include("includes/init.php");
$nav_visit_class = "current_page";
$nav_title = "How to Visit";
$nav_footer = "Visit Page";

$show_form = TRUE;

$show_name_feedback = FALSE;
$show_number_feedback = FALSE;
$show_email_feedback = FALSE;
$show_people_feedback = FALSE;


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $is_order_valid = TRUE;

    // Order Name Sanitize
    $order_name = filter_input(INPUT_POST, "order_name", FILTER_SANITIZE_STRING);

    if (empty($order_name)) {
        $show_form = FALSE;
        $show_name_feedback = TRUE;
    }

    // Order Phone Number Validate
    if (filter_input(INPUT_POST, "order_number", FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/")))) {
        $order_number = $_POST['order_number'];
    }

    if (empty($order_number)) {
        $show_form = FALSE;
        $show_number_feedback = TRUE;
    }

    // Order Email Validate
    $order_email = filter_input(INPUT_POST, "order_email", FILTER_VALIDATE_EMAIL);
    if (empty($order_email)) {
        $show_form = FALSE;
        $show_email_feedback = TRUE;
    }

    // Order Number of People Validate
    $order_people = filter_input(INPUT_POST, "order_people", FILTER_VALIDATE_INT);
    if (empty($order_people) || $order_people < 1 || $order_people > 4) {
        $order_people = NULL;
        $show_form = FALSE;
        $show_people_feedback = TRUE;    }

    // Order Pickup Location Check
    $order_location = filter_input(INPUT_POST, "order_location", FILTER_SANITIZE_STRING);
    if (!in_array(strtolower($order_location), array("north campus", "collegetown starbucks", "west campus", "statler hall"))) {
        $order_location = NULL;
    }

    // Order Pickup Date Check
    $order_date = filter_input(INPUT_POST, "order_date", FILTER_SANITIZE_STRING);
    if (!in_array($order_date, array("09/27", "09/28", "09/29"))) {
        $order_date = NULL;
    }

    // Order Pickup Time Check
    $order_time = filter_input(INPUT_POST, "order_time", FILTER_SANITIZE_STRING);
    if (!in_array($order_time, array("12:00", "13:00", "14:00", "15:00", "16:00", "17:00"))) {
        $order_time = NULL;
    }


    $show_form = !$show_form;


}

if (isset($_POST['order_location'])) {
        $locationVar = $_POST['order_location'];
    }

if (isset($_POST['order_date'])) {
    $dateVar = $_POST['order_date'];
}

if (isset($_POST['order_time'])) {
    $timeVar = $_POST['order_time'];
}

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
            <div class = "two_col">
                <div class = "row">
                    <h2>Directions</h2>
                    <p>The festival takes place on <span class="em">Ithaca Commons</span>, from Cayuga street to Green street. If you are planning to drive to Ithaca Commons, look below for additional parking information. Other ways to arrive to Ithaca Commons is through <span class="em">TCAT</span> rides. If you are coming from <span class="em">North Campus</span>, you can take the buses 10, 30, or 51 to Apple fest. </p>
                </div>
                <div class = "row">
                    <h2>Parking</h2>
                    <p>Parking is allowed in the garages of <span class="em">Green Street, Seneca Street, and Cayuga Street</span>. Flat fee will be applied, which is <span class="em">$5.00</span> for all day. You may not re-enter the garage. Not only this, but you may also park on the streets, which are free on Saturday and Sunday</p>
                </div>
                <div class = "row">
                    <h2>Map</h2>
                    <!-- Source: https://www.downtownithaca.com/wp-content/uploads/AppleHarvestFestival_EventMap_2019_webready.pdf-->
                    <img class = "map" src = "images/visit_map.png" alt = "Apple Fest Map" title = "Apple Fest Map">
                </div>

                <div class = "visit_map_info">
                    <p>* The restrooms are marked with an R sign, and the visitor information or the lost and found is marked with an I sign on the map.</p>
                    <a class = "source mapSource" href = "https://www.downtownithaca.com/wp-content/uploads/AppleHarvestFestival_EventMap_2019_webready.pdf">Source: Downtown Ithaca</a>
                </div>

                <div class = "form">
                    <h2 class = "visitFormTitle">Request Drop-Off</h2>
                    <section class = "visitFormSection">
                    <?php
                        if ($show_form) { ?>
                             <form id="visitForm" method="post" action="visit.php" novalidate>

                                <div class = "form-label">
                                    <label for="request-name">Name:</label>
                                    <input id="request-name" type="text" name="order_name" placeholder = 'John Doe' value="<?php echo htmlspecialchars($order_name); ?>"/>
                                    <span class="<?php echo ($show_name_feedback==True) ? 'errorContainer' : 'hidden'; ?>">
                                        Please provide a valid name.
                                    </span>
                                </div>

                                <div class = "form-label">
                                    <label for="request-number">Phone Number:</label>
                                    <input id="request-number" name="order_number" placeholder = '000-0000-0000' value="<?php echo htmlspecialchars($order_number); ?>"/>
                                    <span class="<?php echo ($show_number_feedback==True) ? 'errorContainer' : 'hidden'; ?>">
                                        Please provide a number with valid form.
                                    </span>
                                </div>

                                <div class = "form-label">
                                    <label for="request-email">Email:</label>
                                    <input id="request-email" name="order_email" placeholder = 'johndoe@gmail.com' value="<?php echo htmlspecialchars($order_email); ?>"/>
                                    <span class="<?php echo ($show_email_feedback==True) ? 'errorContainer' : 'hidden'; ?>">
                                    Please provide a valid email.
                                    </span>
                                </div>

                                <div class="form-label">
                                    <label for="request-people">Total Number of People:</label>
                                    <input type="number" id="request-people" name="order_people" placeholder = '1 to 4 people' value="<?php echo htmlspecialchars($order_people); ?>"/>
                                    <span class="<?php echo ($show_people_feedback==True) ? 'errorContainer' : 'hidden'; ?>">
                                        Minimum 1, Maximum 4.
                                    </span>
                                </div>

                                <div class="form-label">
                                    <label for="request-location">Pickup Location:</label>
                                    <select id = "request-location" name = "order_location">
                                        <option <?php if ($locationVar=="North Campus") echo 'selected="selected"'; ?> value = "North Campus">North Campus</option>
                                        <option <?php if ($locationVar=="Collegetown Starbucks") echo 'selected="selected"'; ?> value = "Collegetown Starbucks">Collegetown Starbucks</option>
                                        <option <?php if ($locationVar=="West Campus") echo 'selected="selected"'; ?> value = "West Campus">West Campus</option>
                                        <option <?php if ($locationVar=="Statler Hall") echo 'selected="selected"'; ?> value = "Statler Hall">Statler Hall</option>
                                    </select>
                                </div>

                                <div class="form-label">
                                    <label>Pickup Date:</label>
                                    <select id="request-date" name="order_date">
                                        <option <?php if ($dateVar=="09/27") echo 'selected="selected"'; ?> value="09/27">09/27</option>
                                        <option <?php if ($dateVar=="09/28") echo 'selected="selected"'; ?> value="09/28">09/28</option>
                                        <option <?php if ($dateVar=="09/29") echo 'selected="selected"'; ?> value="09/29">09/29</option>
                                    </select>
                                </div>

                                <div class="form-label">
                                    <label for="request-time">Pickup Time:</label>
                                    <select id="request-time" name="order_time">
                                        <option <?php if ($timeVar=="12:00") echo 'selected="selected"'; ?> value="12:00">12:00</option>
                                        <option <?php if ($timeVar=="13:00") echo 'selected="selected"'; ?> value="13:00">13:00</option>
                                        <option <?php if ($timeVar=="14:00") echo 'selected="selected"'; ?> value="14:00">14:00</option>
                                        <option <?php if ($timeVar=="15:00") echo 'selected="selected"'; ?> value="15:00">15:00</option>
                                        <option <?php if ($timeVar=="16:00") echo 'selected="selected"'; ?> value="16:00">16:00</option>
                                        <option <?php if ($timeVar=="17:00") echo 'selected="selected"'; ?> value="17:00">17:00</option>
                                    </select>
                                </div>

                                <button type="submit" class="submit">Submit</button>
                            </form>
                        <?php } else { ?>


                            <!-- Confirmation -->
                            <h3>Order for <?php echo (htmlspecialchars($order_name));?></h3>
                            <ul>
                                <?php
                                echo("<li>Name: " . htmlspecialchars($order_name) . "</li>");
                                echo("<li>Number: " . htmlspecialchars($order_number) . "</li>");
                                echo("<li>Email: " . htmlspecialchars($order_email) . "</li>");
                                echo("<li>Total Number of People: " . htmlspecialchars($order_people) . "</li>");
                                echo("<li>Pickup Location: " . htmlspecialchars($order_location) . "</li>");
                                echo("<li>Pickup Date: " . htmlspecialchars($order_date) . "</li>");
                                echo("<li>Pickup Time: " . htmlspecialchars($order_time) . "</li>");
                                ?>
                            </ul>

                            <p><a href = "visit.php">New Order</p>



                        <?php } ?>

                    </section>

                </div>
            </div>
        </main>



        <?php include("includes/footer.php"); ?>


    </body>
</html>

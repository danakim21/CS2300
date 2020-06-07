<?php
include("includes/init.php");

$db = open_sqlite_db("secure/catalog.sqlite");

$result_messages = array();

function print_record($record)
{
?>
  <tr>
    <td><?php echo htmlspecialchars($record["courseid"]); ?></td>
    <td><?php echo htmlspecialchars($record["name"]); ?></td>
    <td><?php echo htmlspecialchars($record["professor"]); ?></td>
    <td><?php echo htmlspecialchars($record["prerequisite"]); ?></td>
    <td><?php echo htmlspecialchars($record["credits"]); ?></td>
  </tr>
<?php
}

function query_record($search_field, $search) {
  if ($search_field == "all") {
    $cond_exprs = array();
    foreach (SEARCH_FIELDS as $field => $label) {
      if ($field != 'all') {
        array_push($cond_exprs, "(" . $field . " LIKE '%' || :search || '%')");
      }
    }
    $sql = "SELECT * FROM courses WHERE " . implode(" OR ", $cond_exprs);
  } else {
    $sql = "SELECT * FROM courses WHERE (" . $search_field . " LIKE '%' || :search || '%')";
  }
  return $sql;
}


// Search Form
const SEARCH_FIELDS = [
  "all" => "All",
  "courseid" => "Course ID",
  "name" => "Course Name",
  "professor" => "Professor(s)",
  "prerequisite" => "Prerequisite(s)",
  "credits" => "Credits",
];

if (isset($_GET['search'])) {
  $do_search = TRUE;
  $category = filter_input(INPUT_GET, 'category', FILTER_SANITIZE_STRING);
  if (in_array($category, array_keys(SEARCH_FIELDS))) {
    $search_field = $category;
  } else {
    array_push($result_messages, "Invalid category for search.");
    $do_search = FALSE;
  }

  $search = filter_input(INPUT_GET, 'search', FILTER_SANITIZE_STRING);
  $search = trim($search);
} else {
  $do_search = FALSE;
  $category = NULL;
  $search = NULL;
}


// Insert Form
$distinct_id = exec_sql_query($db, "SELECT DISTINCT courseid FROM courses", NULL)->fetchAll(PDO::FETCH_COLUMN);
$distinct_name = exec_sql_query($db, "SELECT DISTINCT name FROM courses", NULL)->fetchAll(PDO::FETCH_COLUMN);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $valid_review = TRUE;
  $show_courseid_feedback = FALSE;
  $show_name_feedback = FALSE;
  $show_professor_feedback = FALSE;
  $show_credits_feedback = FALSE;

  $courseid = filter_input(INPUT_POST, 'courseid', FILTER_VALIDATE_INT);
  $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
  $professor = filter_input(INPUT_POST, 'professor', FILTER_SANITIZE_STRING);
  $prerequisite = filter_input(INPUT_POST, 'prerequisite', FILTER_VALIDATE_INT);
  $credits = filter_input(INPUT_POST, 'credits', FILTER_VALIDATE_INT);

  // courseid (not null, unique)
  if ((strlen($courseid) != 4) || in_array($courseid, $distinct_id) || empty($courseid)) {
    $valid_review = FALSE;
    $show_courseid_feedback = TRUE;
  }

  // name (not null, unique)
  if (in_array($name, $distinct_name) || empty($name)) {
    $valid_review = FALSE;
    $show_name_feedback = TRUE;
  }

  // professor (not null)
  if (empty($professor)) {
    $valid_review = FALSE;
    $show_professor_feedback = TRUE;
  }

  // prerequisite (optional)

  // credits (not null)
  if (empty($credits) || $credits > 10) {
    $valid_review = FALSE;
    $show_credits_feedback = TRUE;
  }

  if ($valid_review) {
    $sql = "INSERT INTO courses (courseid, name, professor, prerequisite, credits) VALUES (:courseid, :name, :professor, :prerequisite, :credits)";
    $params = array(
      ':courseid' => $courseid,
      ':name' => $name,
      ':professor' => $professor,
      ':prerequisite' => $prerequisite,
      ':credits' => $credits
    );

    $result = exec_sql_query($db, $sql, $params);
    if ($result) {
      array_push($result_messages, "A new course has been added. Thank you!");
      $courseid = null;
      $name = null;
      $professor = null;
      $prerequisite = null;
      $credits = null;
    } else {
      array_push($result_messages, "Failed to add course.");
    }
  } else {
    array_push($result_messages, "Failed to add course. Invalid input.");
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>INFO Database</title>
  <link rel="stylesheet" type="text/css" href="styles/site.css" media="all" />
</head>

<body>

  <main>
    <a href = "index.php"><h2>Information Science Classes Database</h2></a>

    <?php
    foreach ($result_messages as $message) {
      echo "<p class='message'><strong>" . htmlspecialchars($message) . "</strong></p>\n";
    }
    ?>

    <form id="search_form" method="get" action="index.php" novalidate>
      <select name="category">
        <?php foreach (SEARCH_FIELDS as $field_name => $label) { ?>
            <option value="<?php echo $field_name; ?>" <?php if ($category==$field_name) echo 'selected="selected"'; ?>><?php echo $label; ?></option>
        <?php } ?>
      </select>
      <input type="text" name="search" size = "100" placeholder="Search... INFO 1300" value="<?php echo($search)?>"/>
      <button type="submit">Search</button>
    </form>

    <?php
    if ($do_search) { ?>
      <h2>Search Results</h2>
      <?php
        $sql = query_record($search_field, $search);
        $params = array(
          ':search' => $search
        );
    } else {
      ?>
      <h2>All Reviews</h2>
      <?php
        $sql = "SELECT * FROM courses";
        $params = array();
    }

    $result = exec_sql_query($db, $sql, $params);
    if ($result) {
      $records = $result->fetchAll();
      if (count($records) > 0) {
      ?>
        <table>
          <tr>
            <th>Course ID</th>
            <th>Name</th>
            <th>Professor</th>
            <th>Prerequisite(s)</th>
            <th>Credits</th>
          </tr>
          <tr>
            <?php
              foreach($records as $record) {
                print_record($record);
              }
            ?>
          </tr>
        </table>
      <?php
      } else {
        echo "<p class='no_match'>No matching reviews found.</p>";
      }
    }
    ?>

    <h2>Add a New Course</h2>

    <form id="add_form" method="post" action="index.php" novalidate>
      <div class="form-label">
        <label for="request-courseid">Course ID: </label>
        <input id="request-courseid" name="courseid" type="number" placeholder="2300" value="<?php echo htmlspecialchars($courseid); ?>"/>
      </div>
      <span class="errorContainer <?php echo ($show_courseid_feedback) ? '' : 'hidden'; ?>">
            Please enter a valid Course ID.
      </span>

      <div class="form-label">
        <label for="request-name">Course Name: </label>
        <input id="request-name" name="name" type="text" size="50" placeholder="Intermediate Design and Programming for the Web" value="<?php echo htmlspecialchars($name); ?>"/>
      </div>
      <span class="errorContainer <?php echo ($show_name_feedback) ? '' : 'hidden'; ?>">
            Please enter a valid Course Name.
      </span>

      <div class="form-label">
        <label for="request-professor">Professor: </label>
        <input id="request-professor" name="professor" type="text" size="30" placeholder="Harms, K." value="<?php echo htmlspecialchars($professor); ?>"/>
      </div>
      <span class="errorContainer <?php echo ($show_professor_feedback) ? '' : 'hidden'; ?>">
            Please enter a valid professor name.
        </span>

      <div class="form-label">
        <label for="request-prerequisite">Prerequisite: </label>
        <input id="request-prerequisite" name="prerequisite" type="text" placeholder="1300" value="<?php echo htmlspecialchars($prerequisite); ?>"/>
      </div>

      <div class="form-label">
        <label for="request-credits">Credits: </label>
        <input id="request-credits" name="credits" type="number" placeholder="3" value="<?php echo htmlspecialchars($credits); ?>"/>
      </div>
      <span class="errorContainer <?php echo ($show_credits_feedback) ? '' : 'hidden'; ?>">
            Please enter a valid credit number.
        </span>

      <button type="submit">Submit</button>

    </form>



  </main>

</body>

</html>

<?php
session_start();
error_reporting(1);
include('connection.php');
if ($_SESSION['account_logged_in'] == "") {
    header("location: index.php");
}
$flightID = $_SESSION['flightIDBook'];
extract($_REQUEST);

if (isset($submit)) {
    if ($book == 'yes') {
        header('location: confirmationEmail.php');
    } else {
        header('location: flights.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include('head.php'); ?>

<body>
    <?php include('navbar.php'); ?>

    <div class="sure">
        <h2>Are you sure you want to book flight <?= $flightID ?></h2>
        <form method="POST">
            <label for="book">Yes</label>
            <input type="radio" value="yes" name="book">
            <label for="book">No</label>
            <input type="radio" value="no" name="book">
            <input class="card-button" type="submit" value="Submit" name="submit">
        </form>
    </div>

    <?php include('footer.php'); ?>
    <script>
        document.getElementById("navBar").classList.add("white");
    </script>

</body>

</html>
<?php
    require("common-project.php");
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $item_id = $_GET["id"];
        $user_id = $_SESSION['id'];
        $query = "DELETE FROM users_items_project WHERE item_id='$item_id' AND user_id='$user_id' ";
        $result = mysqli_query($con , $query) or die(mysqli_error($con));
        header("location:cart-project.php");
    }
?>


<?php
    require("common-project.php");
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $item_id = $_GET['id'];
        $user_id = $_SESSION['id'];
        $query = "INSERT INTO users_items_project (user_id,item_id,status) VALUES ('$user_id','$item_id','Added to cart')";

        $result = mysqli_query($con,$query) or die(mysqli_error($con));

        header("location:products-project.php");

    }
?>

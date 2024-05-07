<?php
require("../includes/config.php");

// Check if order ID is provided
if(isset($_POST['order_id'])) {
    $order_id = $_POST['order_id'];

    // Delete the order from the database
    $query_deleteOrder = "DELETE FROM orders WHERE order_id='$order_id'";
    $result_deleteOrder = mysqli_query($con, $query_deleteOrder);

    if($result_deleteOrder) {
        // Order deleted successfully
        header("Location: view_orders.php");
        exit();
    } else {
        // Error occurred while deleting the order
        echo "Error: " . mysqli_error($con);
    }
} else {
    // Redirect back if order ID is not provided
    header("Location: view_orders.php");
    exit();
}
?>
<!-- Inside the <table> tag of your order list page -->
<td> 
    <!-- Delete button form -->
    <form action="delete_order.php" method="POST" onsubmit="return confirm('Are you sure you want to delete this order?');">
        <input type="hidden" name="order_id" value="<?php echo $row_selectOrder['order_id']; ?>">
        <button type="submit">Delete</button>
    </form>
</td>
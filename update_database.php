<?php
include "connect.php";

if (isset($_POST['value']) && isset($_POST['recipe_id'])) {
  $value = $_POST['value'];
  $recipe_id = $_POST['recipe_id'];

  $stmt = mysqli_prepare($connection, "UPDATE recipe_detail SET save = ? WHERE recipe_id = ?");

  if (!$stmt) {
    echo "Error preparing statement: " . mysqli_error($connection);
    exit();
  }

  mysqli_stmt_bind_param($stmt, "is", $value, $recipe_id);

  if (!mysqli_stmt_execute($stmt)) {
    echo "Error executing statement: " . mysqli_stmt_error($stmt);
    exit();
  }

  $affectedRows = mysqli_stmt_affected_rows($stmt);
  if ($affectedRows > 0) {
    echo "Database value updated successfully.";
  } else {
    echo "No rows affected."; // Update might not have been successful
  }

  mysqli_stmt_close($stmt);
  //mysqli_close($connection); // Close connection if needed elsewhere
}
?>

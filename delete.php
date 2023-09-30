<?php
include "db_conn.php";


if (isset($_POST["delete"])) {
  $id = $_POST["id"];
$sql = "DELETE FROM books WHERE id_book = $id";
$result = mysqli_query($conn, $sql);


if ($result) {
  header("Location: index.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}

}


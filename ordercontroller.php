<?php include("ordermodel.php"); ?>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Validate inputs
  $errors = [];

  $name = $_POST["name"] ?? "";
  if (empty($name)) {
    $errors[] = "請輸入訂購者姓名";
  }

  $quantity = $_POST["quantity"] ?? "";
  if (empty($quantity)) {
    $errors[] = "請輸入數量";
  } elseif (!is_numeric($quantity) || $quantity < 1 || $quantity > 20) {
    $errors[] = "數量範圍應為1到20之間";
  }

  $drink = $_POST["drink"] ?? "";
  if ($drink === "soy-milk" && isset($_POST["pearl"])) {
    $errors[] = "歐趴無法加蜂蜜";
  }

  // If there are errors, redirect back to the form with error messages
  if (!empty($errors)) {
    $errorString = implode("<br>", $errors);
    header("Location: orderview.php?error=" . urlencode($errorString));
    exit;
  }

  // Calculate total cost
  $total = 0;
  if ($drink === "soy-milk") {
    $total += 70  * $quantity;
  } elseif ($drink === "milk-tea") {
    $total += 100 * $quantity;
    if (isset($_POST["pearl"])) {
      $total += 5 * $quantity;
    }
  }
  $pearl = $_POST["pearl"];
  // Redirect to the form with total amount and nam
  $encodedName = urlencode($name);
  $meals = "INSERT INTO chen8671(`name`,`drink`,`pearl`,`number`)VALUES('".$name."','".$drink."','".$pearl."','".$quantity."')";
  $result = mysqli_query($link,$meals);
  header("Location: orderview.php?total=" . $total . "&name=" . $encodedName);
  exit;
}

?>


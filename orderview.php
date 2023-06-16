<!DOCTYPE html>
<html>
<head>
  <title>HeartPanda訂餐試算</title>
  <style>
    .error-message {
      color: red;
    }
  </style>
</head>
<body>
  <h2>HeartPanda訂餐試算</h2>
  <form action="ordercontroller.php" method="POST">
    <div>
      <label for="name">訂購者：</label>
      <input type="text" id="name" name="name" required>
    </div>
    <div>
      <label>訂餐試算：</label>
      <div>
        <input type="radio" id="soy-milk" name="drink" value="soy-milk" required>
        <label for="soy-milk">今天笑了梅（$70）</label>
      </div>
      <div>
        <input type="radio" id="milk-tea" name="drink" value="milk-tea" required>
        <label for="milk-tea">期末要歐趴（$100）</label>
        <input type="checkbox" id="pearl" name="pearl" value="pearl">
        <label for="pearl">加蜂蜜（$5）</label>
      </div>
    </div>
    <div>
      <label for="quantity">數量：</label>
      <input type="number" id="quantity" name="quantity" min="1" required>
    </div>
    <div>
      <button type="submit" name="calculate">費用計算</button>
    </div>
  </form>
  <?php
    if (isset($_GET['error'])) {
      $error = $_GET['error'];
      echo '<p class="error-message">錯誤！' . $error . '</p>';
    }
    if (isset($_GET['total'])) {
      $total = $_GET['total'];
      $name = $_GET['name'];
      echo '<p>訂購者姓名：' . $name . '</p>';
      echo '<p>總計：$' . $total . '</p>';
    }
  ?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Purchase Success</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f7f7f7;
      text-align: center;
      padding: 50px;
    }
    .container {
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      padding: 40px;
      width: 400px;
      margin: auto;
    }
    .success-icon {
      font-size: 50px;
      color: green;
    }
    h1 {
      color: #333;
      font-size: 28px;
    }
    p {
      font-size: 16px;
      color: #666;
    }
    .order-summary {
      text-align: left;
      margin-top: 20px;
    }
    .order-summary ul {
      list-style-type: none;
      padding: 0;
    }
    .order-summary li {
      display: flex;
      justify-content: space-between;
      padding: 5px 0;
    }
    .btn {
      background-color: #28a745;
      color: white;
      border: none;
      padding: 12px 20px;
      font-size: 16px;
      border-radius: 4px;
      cursor: pointer;
      text-decoration: none;
      margin-top: 20px;
    }
    .btn:hover {
      background-color: #218838;
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="success-icon">✔</div>
    <h1>Your Purchase Was Successful!</h1>
    <p>Your order has been confirmed and is being processed.</p>
    

    <?php
      session_start();
      // $totalAmount = isset($_SESSION['all_total']) ? number_format($_SESSION['all_total'], 2) : '0.00';
      $subtotal = isset($_SESSION['all_total']) ? $_SESSION['all_total'] : 0;
      $shippingCost = 100;
      $totalAmount = $subtotal + $shippingCost;


$formattedTotalAmount = number_format($totalAmount, 2);

$items = isset($_SESSION['cart_items']) ? $_SESSION['cart_items'] : [];
    
    ?>
    <div class="order-summary">
      <h3>Order Summary:</h3>
      <ul>
        <?php
        foreach ($items as $item) {
          echo '<li><strong>Item Name</strong><span>' . htmlspecialchars($item['name']) . '</span></li>';
        }
        ?>
        <li><strong>Shipping</strong><span><?php  echo $shippingCost?></span></li>
        <li><strong>Total</strong><span><?php  echo $formattedTotalAmount ?></span></li>
      </ul>
    </div>

    <p>You will receive an email confirmation shortly.</p>
    
    <a href="#" class="btn">Go to Dashboard</a>
    <a href="../index.php" class="btn" style="background-color: #a0522d;">Continue Shopping</a>
  </div>

</body>
</html>

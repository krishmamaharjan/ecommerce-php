<?php
session_start();
// session_destroy();

if (!isset($_SESSION['cart'])) {
  $_SESSION['cart'] = [];
}

if(isset($_SESSION['username']))
{

    if(isset($_POST['addCart']))
    {


      $product_name = $_POST['Pname'];
      $product_price = $_POST['Pprice'];
      $product_quantity = $_POST['Pquantity'];


      $check_product = array_column($_SESSION['cart'],'productName');
      if(in_array($product_name,$check_product))
      {
        echo "
        <script>
          alert('product already added');
          window.location.href = 'index.php';
        </script>
        ";
      }
      else
      {
        $_SESSION['cart'][] = array('productName' => $product_name, 
                                'productPrice'=> $product_price, 
                                'productQuantity'=>$product_quantity  );
                                header("location:viewCart.php");
                                exit();
      // print_r($_SESSION['cart']);
      }

      
      
    }



    // remove product

    if(isset($_POST['remove']))
    {
      foreach($_SESSION['cart'] as $key => $value)
      {
        if($value['productName'] === $_POST['item'])
        {
          unset($_SESSION['cart'][$key]);
          $_SESSION['cart'] = array_values($_SESSION['cart']);
          header("location:viewCart.php");
          exit();
        }
      }
    }




    // Update product

    if(isset($_POST['update']))
    {

      $product_name = $_POST['Pname'];
      $product_price = $_POST['Pprice'];
      $product_quantity = $_POST['Pquantity'];

      foreach($_SESSION['cart'] as $key => $value)
      {
        if($value['productName'] === $_POST['item'])
        {
          $_SESSION['cart'][$key] = array('productName' => $product_name, 
                                        'productPrice'=> $product_price, 
                                        'productQuantity'=>$product_quantity  
                                      ); 
                                        header("location:viewCart.php");
                                        exit();
        }
      }
    }
}
else
{
  header("location:login.php");
}
?>
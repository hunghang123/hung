<?php
if (!isset($_SESSION)) 
    session_start();
    include("pdo.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="./style/css.css" type="text/css" media="screen" />
    <script src="style/scrip.js"></script>
    <title>Bán sách</title>

    <style>
        img{width:150px};
    </style>
</head>

<body>
<!-- Navbar -->


<!-- Header -->


<!--Container-->
<div class="w3-content_dssp">
<?php
    
    if (!isset($_SESSION['cart'])) 
        $_SESSION['cart']=[];

        $cart = $_SESSION['cart'];
        //$cart = [];

        $action = isset($_POST['DH51800859_action']);
    if($action=='add')
    {
        $id = $_POST['DH51800859_id'];
        if(!isset($cart[$id]))
            $cart[$id] = ['name'=>$_POST['DH51800859_name'], 'img'=>$_POST['DH51800859_img'], 'price'=>$_POST['DH51800859_price'], 'qty'=>1];
        else
            $cart[$id]['qty'] += 1;
    }  
    if($action == 'delete')
    {

    } 
    $_SESSION['cart'] = $cart;

  
?>
<h2><a href="sanpham.php">Cart</a></h2>
<table class="table table-bordered">
    <thead class="table-dark">
        <tr>
            <td>Name</td>
            <td>Image</td>
            <td>Quatity</td>
            <td>Total</td>
        </tr>
    </thead>
    <?php
    $sum = 0;
    foreach($cart as $r)
    {
        ?>
        <tr>
            <td><?php echo $r['name'] ?></td>
            <td><img style="width:50px" src="./img/product/<?php echo $r['img']?>"> </td>
            <td><?php echo $r['qty'] ?></td>
            <td><?php echo $r['price']* $r['qty']; $sum+=$r['price']* $r['qty']; ?> VNĐ</td>
        </tr>
        <?php
    }
?>
    <tr>
        <td colspan="3">Toltal: </td>
        <td><?php echo "$sum"?> VNĐ</td>
    </tr>
</table>

<button class="btn btn-success">Thanh toán</button>
</div>

<!-- Footer -->

</body>
</html>
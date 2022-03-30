<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .continer{
        display:flex;
        justify-content:space-around;
    }
    .item{
        background-color:green;
        height:300px;
        width:300px;

    }
    </style>

</head>
<body>
    <div class="continer">
        <div class="item" id="item1">
            <div>
            <img src="ocean-3605547__340.webp"width="200px" height="200px" alt="">
        </div>
        <div>
             <form action="" method="POST">
            <!-- <label for="name" name="noodles">Noodles</label>
            <label for="price" name="price" value="50" >50</label> -->
            <input type="text" id="noodles"value="noodles" name="noodles" readonly>
            <input type="number" id="price" value = "50" name="price" readonly> 
            <button type="submit">Buy</button>
            </form>
        </div>

        </div>
        <div class="item" id="item2">

        </div>
        <div class="item" id="item3">

        </div>
        <div class="item" id="item4">

        </div>
       

    </div>
</body>
</html>
<?php
include 'dbconfig.php';
if($_POST){
    $productName =$_POST['noodles'];
    $price =$_POST['price'];
    //echo$productName;
    //echo$price;
    $sql = "INSERT INTO product (product,price)VALUES('$productName',$price)";
        if(mysqli_query($conn,$sql)){
            echo "inserted sucessfully";
        }
}
?>

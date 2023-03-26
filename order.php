<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Summary</title>
    <link rel="stylesheet" href="order.css">
</head>
<body>
    <?php 
        // getting data from index.php
        $coffee = $_POST['coffee'];
        $size = $_POST['size'];
        $creams = $_POST['creams'];
        $sugars = $_POST['sugars'];
if( $size == "-1"){
            echo " <p> You need to select the size of coffee </p>";
        echo '<form action = "index.php" >
        <input class = "btn" type = "submit" value= "Back to order" >
        </form>' ;
    }
        else{        
    //   calculating the price
        $price = 0;
        switch ($size) {
            case "small":
                $price = 2.79;
                break;
            case "medium":
                $price = 3.20;
                break;
            case "large":
                $price = 3.70;
                break;
            case "extra large":
                $price = 4.10;
                break;
            default:
                $price = 0;
                break;
        }
        $total = $price * $coffee;
        $tax = round($total * 0.13, 2);
        $grandTotal = $total + $tax;
    //    order details
        echo "<h1>Order Details</h1>";
        // cup size and image display accordingly
        echo "<p>You ordered $coffee cup(s) of $size size coffee ";
        if($size == "small"){
            for ($i=0; $i<$coffee; $i++) {
                echo "<img src='cup.png' width='50px'>";
            }
        }
        elseif($size == "medium"){
            for($i=0; $i<$coffee; $i++) {
                echo "<img src='cup.png' width='60px'>";
            }
        }
        elseif($size == "large"){
            for ($i=0; $i<$coffee; $i++) {
                echo "<img src='cup.png' width='70px'>";
            }
        }
            else{
                for ($i=0; $i<$coffee; $i++) {
                    echo "<img src='cup.png' width='90px'>";
                }
            }
            echo "</p>";
           
        echo "<p>Creams: ";
        for ($i=0; $i<$creams; $i++) {
            echo "<img src='https://libertyfoods.ca/50215-home_default/dairyland-coffee-cream-18-473-millilitre.jpg' width='60px'>";
        }
        echo "</p>";

        echo "<p>Sugars: ";
        for ($i=0; $i<$sugars; $i++) {
            echo "<img src='https://cdn.custom-cursor.com/packs/5010/cute-sugar-white-and-brown-cursor-pack.png' width='60px'>";
        }
        echo "</p>";
        
        echo "<p> <b>Total price: $</b>".number_format($total, 2)."</p>";
        echo "<p> <b>Tax: $</b>".number_format($tax, 2)."</p>";
        echo "<p> <b>Grand total: $</b>" .number_format($grandTotal, 2)  ."</p>";
    }
    ?>
<b></b>
</body>
</html>

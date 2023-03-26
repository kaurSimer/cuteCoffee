<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <!-- heading -->
    <h1 >Lets have a delicious drink</h1>
    <!-- form -->
    <div class="container">
    <div class="image">
<img src="coffee.png" alt="coffee image">
        
    </div>
    <div class="form">
       
    <form action="order.php" method= "post">
     <label for="cofee"> No. of coffees:</label>
     <br>   
       
<input type="number" name="coffee" required min = "1" max= "20" id="coffee"> 
<br>

<label  for="size">Size:</label>
<br>
<select name="size" id="size" >
    <option value="-1">Select Size of the coffee</option>
    <option value="small">Small</option>
    <option value="medium">Medium</option>
    <option value="large">Large</option>
  <option value="extra large">Extra large</option>
</select>

<br>
<label for="coffee">Creams:</label>
<br>
<input type="number" name="creams" min="1" max = "10" id="coffee" >

<br>
<label for="sugars">Sugar:</label>
<br>
<input type="number" name="sugars" min= "1" max = "10" id="sugars">
<br>
<br>
<input  class = "btn" type="submit" value="PLACE ORDER" name="submitBtn">


    </form>
    </div>
    <div class="image">
<img src="coffee.png" alt="coffee image">
        
    </div>



    </div>
</body>
</html>



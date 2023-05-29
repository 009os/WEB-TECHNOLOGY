<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="billing.css">
    <title>Document</title>
    <script src="billing.js" type="text/javascript"></script>
</head>
<body>
    
    <div class="container">
        <div class="card">
            
            <form action="#">
               
                <label for="name"><b><i>NAME</i></b></label>
                <label for="number"><b><i>NUMBER</i></b></label>
                <label for="list"><b><i>UNIT CONSUMED THIS MONTH</i></b></label>
                <input type="text" id="amt">
                <input type="button" class="submit" value="submit" onclick="getResult()">

                <?php
                function getResult() {

                    $units = parseInt(document.getElementById("amt").value);
                
                    if($units <= 50) 
                        $price = $units * 3.50;
                    else if($units <= 150) 
                        $price = 50 * 3.50 + ($units-50) * 4.00;
                    else if($units <= 250)
                        $price = 50 * 3.50 + 100 * 4.00 + ($units-150) * 5.20;
                    else 
                        $price = 50 * 3.50 + 100 * 4.00 + 100 * 5.20 + ($units - 250) * 6.50;

                    echo " "Your amount for " + $units + " units is " + $price";
                
                }
                ?>

            </form>
        </div>
    </div>


</body>
</html>
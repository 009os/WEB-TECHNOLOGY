<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAYMENT</title>
    <link rel="stylesheet" href="main.css" type="text/css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <style>
        table{
        border-collapse:collapse;  
        }
        table td, th{
        border:1px solid #ccc;
       
        }
        table tr:hover{  
        background: #f1f1f1;
        }
        
        </style>
</head>

<body style="background-image: url('INR1.jpg');
    width:100%;
 background-position: center;
 background-size: cover;
background-repeat: no-repeat">
    <center>

        <table border="8" class="cal1">
            <center>
                <header>
                    <h1 class="o1"><B><i>PAYMENT DETAILS</i></B></h1>
                </header>
                <hr>
                <center>
                    <tr>
                        <td><b>NAME</b> </td>
                        <td> <label>
                                <br />
                                <select name=>
                                    <option>--None--</option>
                                    <option>Mr.</option>
                                    <option>Ms.</option>
                                    <option>Mrs.</option>
                                </select>
                            </label></td>
                        <td>

                            <p>
                                <label><b><i>First name:</i></b><input name="firstName" /></label>
                            </p>
                        </td>
                        <td>
                            <p>
                                <label><b><i>Last name:</i></b><input name="lastName" /></label>
                            </p>
                        </td>
                    <tr>
                        <td><b>YOUR ADDRESS </b></td>
                        <td colspan="3"><label>
                                <b><i>Address :</i></b>
                                <br />
                                <center><textarea name="address" cols="30" rows="3"></textarea></center>
                            </label></td>
                    </tr>

                    </tr>
                    <tr>
                        <td>
                            <p>
                                <B>MODE OF PAYMENT :</B>
                            </p>
                        </td>
                        <td colspan="3"><label><input type="radio" name="payment" value="COD" /><b><i>
                                        COD</i></b></label>
                            <label><input type="radio" name="payment" value="UPI" /><b><i>UPI</i></b></label>
                            <label><input type="radio" name="payment"
                                    value="NET- BANKING" /><B><I>NET-BANKING</I></B></label>
                            <label><input type="radio" name="payment" value="CREDIT/DEBIT CARD" />
                                <B><I>CREDIT/DEBIT-CARD</I></B></label>
                        </td>

                    </tr>
                    <tr><td><B>APPLY ANY TWO COUPENS</B></td>
                    <td colspan="3">
                        <input type="checkbox" name="1" value="10%"><b><i>BUY TWO & GET LUCKY COUPEN</i></b>
                        <input type="checkbox" name="2" value="20%"><b><i>BUY 3 & GET GRAND COUPEN</i></b>
                        <input type="checkbox" name="3" value="10%"><b><i>BUY 3 & GET GRAND COUPEN</i></b>
                        </td></tr>
                    <tr>
                        <td><b>CLICK SUBMIT TO PAY</b></td>
                        <td colspan="3">
                            <center>
                                <p>
                                    <button type="submit">Submit</button>
                                </p>
                        </td>
                </center>

        </table>
    </center>





</body>
<footer>
    <br><br><br><br><br>
    <h6>@OMJISHUKLA</h6>
</footer>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css" type="text/css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Document</title>
</head>

<body style="background-image: url('homepage2.jpg');
width:100%;
background-position: center;
background-size: cover;
background-attachment: fixed;
background-repeat: no-repeat">



    <center>
        <form class="cal" method="post" action = "datainput.php">
            <fieldset>
                <legend>
                    <center>
                        <h1><b><i>PERSONAL DETAILS</i></b></h1>
                    </center>
                </legend>
                
                <br>
                <p>
                    <center><label>
                            <h2><b><i>First name : </i></b></h2><input name="firstName" />
                        </label></center>

                    <center><label>
                            <h2><b>Last name : <i></i></b></h2><input name="lastName" />
                        </label></center>
                </p>
    
                <p>
                    <center><label>
                            <h2><b><i>EMAIL : </i></b></h2><input type="email" name="email" />
                        </label></center>
                </p>
                <center>

                    <p>
                        <label>
                            <h2><b><i>Date of Birth : </i></b></h2><input type="date" name="birthDate">
                        </label>
                    </p>

                </center>
                <center>

                    <p>
                        <label>
                            <h2><b><i> Address :</i></b></h2>
                            <br />
                            <textarea name="address" cols="30" rows="3"></textarea>
                        </label>

                        <center><label for="phone">
                                <h2><b><i>Enter your phone number : </i></b></h2>
                            </label></center>
                        <center><input type="tel" id="phone" name="phone"></center>
                    </p>
                </center>

                
                <center><label>
                            <h2><b>PASSWORD : <i></i></b></h2><input name="password" />
                        </label></center>
                <center>

                    <p>
                        <button name="submit" type="submit">Submit</button>
                    </p>
                </center>

            </fieldset>
        </form>
        </fieldset>
        </form>
    </center>
</body>

</html>
<footer>@omjishukla</footer>
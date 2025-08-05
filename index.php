<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <link rel="stylesheet" href="style.css">


</head>

<body>
    <div id="box">
        <div id="section_1">
            <img src="img/img.png" alt="" srcset="" id="img">

        </div>
        <div id="section_2">
            <div id="login_body">
                <form action="login_verification/login.php" method="POST">

                    <p id="text">Enter Passkey to Open Diary</p><br>

                    <input type="number" name="pass" id="pass" required>
                    <br>
                    <br>

                    <input type="submit" value="Open Diary" id="login">


                </form>

            </div>


        </div>


    </div>



</body>

</html>
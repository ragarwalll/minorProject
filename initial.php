<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="./img/favicon.ico" />
    <link rel="stylesheet" href="./css/login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Digital Literacy Programme</title>
</head>

<body>

<?php
if(isset($_POST['submit_form'])){
    echo "Hi";
    $name=$_POST['name'];
    $age=$_POST['age'];
    $occ=$_POST['occupation'];
    setcookie("NAME", $name, time() + 60 * 60 * 24 * 7,'/', NULL, NULL, TRUE);
    setcookie("OCC", $occ, time() + 60 * 60 * 24 * 7,'/', NULL, NULL, TRUE);
}
?>
    <div class="center">
        <div class="container">
            <p>Hi</p>
        </div>
    </div>
    <div class="space" style="display:block;"></div>
    <div class="main-form">
        <h3 id="main">Welcome</h3>
        <h2 id="log">Fill the details<br></h2>
        <h2 id="new-details">to get started</h2>
        <form action="" method="POST" id="main_form__">
            <div class="space" style="padding-top:0px;">
                <input type="text" name="name" placeholder="Enter your name" class="details name" autocomplete="off">
                <div class="line lineName"></div>
            </div>
            <div class="space">
                <input type="text" name="age" placeholder="Enter your age" class="details age" autocomplete="off">
                <div class="line lineAge"></div>
            </div>    
            <div style="padding-bottom:30px;"></div>
            <div class="space">
                <select name="occupation" class="details occupation">
                    <option value="business">Business</option>
                    <option value="others">Others</option>
                </select>
            </div>
            <input type="submit" name="submit_form" class="submit-form">
        </form>
    </div>
    <script src='js/pretexts.js'></script>
    <script src='js/form.js'></script>
</body>
</html>
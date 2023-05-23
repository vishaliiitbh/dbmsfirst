<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment form</title>
    <link rel="stylesheet"  href="form2.css">
</head>
<body>
    <div class="main">
    <div class="container">
        <form action="" method="get"><!--in action we give location of server-->
            <h1 class="heading">PAYMENT FORM</h1>
            <h2>Contact information</h2>
            <p>Name:<input type="text"  name="name"></p>
            <p>
            <fieldset>
                <legend> GENDER</legend>
                Male <input type="radio" name="gender" id="M" value="M">
                Female <input type="radio" name="gender" id="F"  value="F">
            </p>
        </fieldset>
        <p>
            pan number: <input type="text" name="pan" id="pan">
        </p>
        <p>address: <textarea name="address" id="address" cols="100" rows="7"></textarea></p>
        <p>Email: <input type="email" name="email" id="email"></p>
        <p>Pincode: <input type="number" name="pincode" id="pincode"></p>
    
        <h2>Payment Information</h2>
        <p>card type:
            <select name="card_type" id="card_type">
                <option value="">--select a card type--</option>
                <option value="VISA">visa</option>
                <option value="rupay">rupay</option>
                <option value="paytem">paytem</option>
            </select>
        </p>
        <p>
            card number: <input type="number" name="card_name" id="card_name">
        </p>
        <p>
            expiration date: <input type="date" name="exp_date" id="exp_date">
        </p>
        <p>
            CVV: <input type="number" name="cvv" id="cvv">
        </p>
        <input type="submit" value="submit" name="submit">
        </form>
        </div>
    </div>
</body>
</html>
<?php include("connect.php");?>
<?php
if($_GET['submit']){
    $name = $_GET['name'];
    $gender = $_GET['gender'];
    $pan_num = $_GET['pan'];
    $address = $_GET['address'];
    $email = $_GET['email'];
    $pincode = $_GET['pincode'];
    $card = $_GET['card_type'];
    $cardnum = $_GET['card_name'];
    $exdate = $_GET['exp_date'];
    $cvv = $_GET['cvv'];

    $query = "INSERT INTO pay_details VALUES('$name','$gender','$pan_num','$address','$email','$pincode','$card','$cardnum','$exdate','$cvv')";

    $data = mysqli_query($conn,$query);
}
?>

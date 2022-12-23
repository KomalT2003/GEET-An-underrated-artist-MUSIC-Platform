<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="creatorplan.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <title>Choose Your Plan</title>
</head>

<body>
    <div id="entirepage">
        <div>
            <img src="geetlogo.png" alt="GEET logo" width="100px" height="100px">
        </div>
        <div id="welcomenote" class="poppins">
            <h1>Welcome,</h1>
            <h1>Creator_Name !</h1>
        </div>
        <div id="intro" class="poppins">
            <p>Fill these details and start CREATING !</p>
            <br>
        </div>
        <div id="acctype" class="poppins">
            <p>Select your Account type:</p>
            <form action="">
                <select name="plandropdown" id="plandd">
                    <option value="no-plan">Select your account type</option>
                    <option value="general">General</option>
                    <option value="premium">Premium</option>
                </select>
            </form>
            <br>
        </div>
        <div id="plantype" class="poppins">
            <p>If Premium, which plan would you want?</p>
            <form action="">
                <select name="premiumdropdown" id="premiumdd">
                    <option value="no-plan">Select your plan</option>
                    <option value="platinum">Platinum</option>
                    <option value="gold">Gold</option>
                    <option value="silver">Silver</option>
                </select>
            </form>
        </div>
        <button type="button" id="paybutton" class="poppins">
            <div>
                <a href="payment.html" target="_self"><b>Proceed to Pay</b></a>
            </div>
        </button>
    </div>
</body>

</html>
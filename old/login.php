<?php
session_start();
// To see if the user is already logged in
if(isset($_SESSION['rollno']))
{
    header("Location: index.php");
}
// For authenticating
if(isset($_POST['rollno']))
{
    // auth();
    $_SESSION['rollno'] = $_POST['rollno'];
    header("Location: index.php");
}

?>
<html>

<head>
    <title>Login - Hostel Allocation</title>
</head>

<body>
<?php require('header.php'); ?>
    <!--<div class="container">-->
    <div class="col-sm-4"></div>
    <form method="POST" action="" onsubmit="return validate_roll() && validate_pass()" class="form-horizontal col-sm-4">
        <div class="form-group">
            <label for="rollno" class="control-label col-sm-4">Roll Number: </label>
            <div class="col-sm-1"></div>
            <div class="col-sm-7 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" name="rollno" id="rollno" class="form-control" placeholder="eg: AE15B015"/>
            </div>
        </div>
        <div class="form-group">
            <label for="pass" class="control-label col-sm-4 text-center">Password: </label>
            <div class="col-sm-1"></div>
            <div class="col-sm-7 input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="text" name="pass" id="pass" class="form-control" placeholder="Password"/>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <button type="submit" class="btn btn-primary center-block btn-block btn-lg">Log In</button>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </form>
    <div class="col-sm-4"></div>
    </div>
</body>
<script>
    function validate_roll() {
    //     //Checks RegExp against a pattern like /w{2}d{2}w{1}d{3}/ig
        var rno_format = new RegExp(/(^([A-Z]{2})([0-9]{2})([A-Z]{1})([0-9]{3})$)/i);
        // return rno_format.test(document.getElementById("rollno").value);
        return rno_format.test($("#rollno").val());
    }

    function validate_pass() {
        //Checks for a nonempty password
        return $("#pass").val().length;
    }
</script>

</html>
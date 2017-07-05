<html>

<head>
    <title>Hostel Allocation</title>
    <style>
        .theadings {
            border-radius: 5px 5px 0 0;
        }
        
        .theadings div {
            padding: 10px;
            text-align: center;
        }
        
        .tbody {
            border-radius: 0 0 5px 5px;
            transition: 0.8s all linear;
            transition-delay: 1.3s;
        }
        
        .tbody div {
            padding: 20px;
            text-align: center;
        }
        
        .tbody:hover {
            transition: 0.3s all linear;
            background-color: #f5f5f5;
        }
    </style>
</head>

<body>
    <?php
session_start();
require('header.php');
if(!isset($_SESSION['rollno']))
{
    echo("Is not set");
    header("Location: login.php");
}
?>
        <!--<div class="row">-->
        <div class="col-xs-1 col-sm-2 col-md-3"></div>
        <div class="col-xs-10 col-sm-8 col-md-6">
            <div class="row bg-primary theadings col-sm-12 col-xs-6">
                <div class="col-sm-3">Roll No.</div>
                <div class="col-sm-4">Name</div>
                <div class="col-sm-3">Hostel</div>
                <div class="col-sm-2">Room</div>
            </div>
            <div class="row col-sm-12 tbody col-xs-6">
                <div class="col-sm-3 center-block text-center text-muted">AE15B001</div>
                <div class="col-sm-4 center-block text-center text-muted">Aakarsh Chopra</div>
                <div class="col-sm-3 center-block text-center">Godavari</div>
                <div class="col-sm-2 center-block text-success text-center">4015</div>
            </div>
        </div>
        <div class="col-xs-1 col-sm-2 col-md-3"></div>
        <!--</div>-->
</body>

</html>
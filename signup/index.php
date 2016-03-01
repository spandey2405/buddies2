<?php

$basedir = '../';

?>

<html>
<head>
    <link rel="stylesheet" href="<?php echo $basedir; ?>src/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $basedir; ?>src/lib/bootstrap/bootstrap-theme.min.css">
    <script src="<?php echo $basedir; ?>src/lib/bootstrap/bootstrap.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo $basedir; ?>src/lib/main/main.css">
    <style>
        .col-md-3 {
            margin: 0 auto;
        }
        .container form a {
            margin-right:20px;
            float:left;
        }
        .btn-info {
            float:right;
        }
    </style>
</head>
<body>
<?php include $basedir.'src/lib/content/landing-header.php'; ?>
<br><br>
<div class="container">
<div class="col-md-4"></div>
<div class="col-md-4">
<form role="form">
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name">
    </div>
    <div class="form-group">
        <label for="name">Email:</label>
        <input type="email" class="form-control" id="email">
    </div>
    <div class="form-group">
        <label for="name">Password:</label>
        <input type="password" class="form-control" id="pwd">
    </div>
    <div class="form-group">

        <label for="name">Date Of Birth:</label>
        <br>

        <div class="form-inline">
            <select class="form-control">
                <option value="DD">DD</option>
            </select>
            <select class="form-control">
                <option value="MM">MM</option>
            </select>
            <select class="form-control">
                <option value="YY">YY</option>
            </select>
            <select class="form-control">
                <option value="YY">Gender</option>
            </select>

        </div>
    </div>

    <a href="">Already have an account ? Login</a>
    <button type="submit" class="btn btn-info">Submit</button>

</form>
</div>
</div>
<div class="footer">
    Copyright @ buddies2.com | Contact Us | About Us
</div>
</body>
</html>
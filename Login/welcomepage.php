<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="welcomepage.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1> <b><?php echo $_SESSION['username']; ?></b> Welcome</h1>
    </div>
    <p><a href="login.php" class="btn btn-danger">Sign Out</a></p>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <style type="text/css">
      
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Login</h2>
		
        <p>.</p>
        <form action="welcomepage.php" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>
		
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username:<sup>*</sup></label>
                <input type="text" name="username"class="form-control" value="" required="required"; ?>
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password:<sup>*</sup></label>
                <input type="password" name="password" class="form-control" required="required">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
				            </div>
							
            
        </form>
    </div>    
</body>
</html>
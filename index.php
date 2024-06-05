<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Photo Registration System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="check-in.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    
</head>
<body>
    <div class="login-form">
        <form action="login.php" method="post">
        <?php if(isset($_GET['error'])) { ?>
          <p class="error"> <?php echo $_GET['error']; ?> </p>
        <?php } ?>
            <div class="text-center mb-5">
                <img src="img/logo/logo.jpg" style="width: 185px;" alt="logo">
            </div>
            <div class="form-group">
                <input type="text" name="uname" class="form-control" placeholder="Phone Number" required="required">
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Check in</button>
            </div>
            
           
                <h6>Powered By</h6><img width="70px" src="img/logo/logo.jpg" alt="logo">
            
            
        </form>
    </div>
</body>
</html>
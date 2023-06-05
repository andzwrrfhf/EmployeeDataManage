<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="login.css">
</head>

<body>
  <form class="login" method="post" action="index.php">
    <div class="illustration">
      <i class="icon ion-ios-locked-outline"></i>
    </div>
    <div class="form-group">
      <input class="form-control" type="text" name="id" autocomplete="off" autofocus required>
      <label class="id-label">ID</label>
    </div>
    <div class="form-group">
      <input class="form-control" type="password" name="password" autocomplete="off" autofocus required>
      <label class="id-label">Password</label>
    </div>
    <div class="form-btn">
      <input type="submit" class="btn btn-primary btn-block btn-margin" name="login" value="Log In">
    </div>
  </form>
</body>

</html>
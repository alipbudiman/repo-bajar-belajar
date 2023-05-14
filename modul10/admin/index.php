<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/index.css">
    <title>Document</title>
</head>

<body>
  <form action="login.php" method="POST" class="form login">
    <div class="login">
      <h1>Login</h1>
        <form method="post">
          <input type="text" name="username" placeholder="Username" required="required" />
            <input type="password" name="password" placeholder="Password" required="required" />
            <input type="submit" value="Let me in." class="btn btn-primary btn-block btn-large">
        </form>
    </div>
  </form>
</body>
</html>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="<?php print base_url('assets/themes/form_login/css/style.css'); ?>">

  
</head>

<body>
  <div class="login">
  	<center><h2>Halaman Login</h2></center>
  <form method="POST" action="<?php echo(site_url('account/ceklogin')); ?>">
  <fieldset>
    <input type="text" name="username" />
  	<input type="password" name="password" />
  </fieldset>
  	<input type="submit" value="Masuk" />
  </form>
  </div>
    
</body>
</html>


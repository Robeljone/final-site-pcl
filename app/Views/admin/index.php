<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
   <!----<title>Login Form Design | CodeLab</title>---->
    <link rel="stylesheet" href="<?=base_url('/css/styles.css')?>">
  </head>
  <body>
    <div class="wrapper">
      <div class="title">Login Form</div>
      <form action="/admin/auth" method="post">
        <div class="field">
          <input type="text" required name="uname">
          <label>User Name</label>
        </div>
        <div class="field">
          <input type="password" required name="password">
          <label>Password</label>
        </div>
        <div class="field">
          <input type="submit" value="Login">
        </div>
      </form>
    </div>
  </body>
</html>

<!DOCTYPE html>
<html>

  <head>

    <meta charset="utf-8">
    <meta name="description" content="This is Hilljacks BBQ Shack, Home of the hot and juicy butts.">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="/css/master.css">

  </head>
  <body>

    <header>
      <nav>
        <a href="#">
          <img src="img/logos/ext-logo.png" alt="Hilljacks BBQ Shack">
        </a>
        <ul>
          <li><A href="#">Home</a></li>
          <li><A href="#">About</a></li>
          <li><A href="#">Portfolio</a></li>
          <li><A href="#">Contact</a></li>
        </ul>
        <div>
          <form action="includes/login.includes.php" method="post">
            <input type="text" name="mailuid" placeholder="Username or Email">
            <input type="password" name="pdw" placeholder="Password">
            <button type="submit" name="login-submit">Login</button>
          </form>
          <a href="singup.php">Signup</a>
          <form action="includes/logout.includes.php" method="post">
            <button type="submit" name="logout-submit">Logout</button>
          </form>
        </div>
      </nav>
    </header>

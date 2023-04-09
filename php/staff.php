<html>
    <head>
        <title>Login Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="../index.css"/>
  </head>
    <body>
        <div class="login-card">
            <h2>Staff Login</h2>
            <h3>Enter your credentials</h3>
            <form class="login-form" action="2nd-staff.php" method="post">
                <input type="text" name="name" maxlength="20" placeholder="User Name" required>
                <input type="password" name="password" placeholder="Password" required>
                <input style="background-color: blue; color:white" type="submit" name="submit" value="LOGIN">
                <a href="../index.html">Student login?</a>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>


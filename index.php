
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrieren</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>


    <!-- Registrieren  -->
    
    <form action="register.php" method="POST">
        <h1>Account Erstellen</h1>
        <div class="inputs_container">
            <input type="text" placeholder="Benutzername" name="username" autocomplete="off">
            <input type="text" placeholder="Email" name="email" autocomplete="off">
            <input type="password" placeholder="Passwort" name="password" autocomplete="off">
        </div>
        <button name="submit" type="submit" >Erstellen</button>
    </form>




    <!-- LOGIN  -->
    
      <!-- <form action="login.php" method="POST">
        <h1>Login</h1>
        <div class="inputs_container">
            <input type="text" placeholder="Benutzername" name="username" autocomplete="off">
            <input type="password" placeholder="Passwort" name="password" autocomplete="off">
        </div>
        <button name="submit">Login</button>
    </form> -->

    
</body>
</html>
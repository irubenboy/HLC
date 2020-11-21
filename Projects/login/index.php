<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>

<div class = "main">
    <h1>Home</h1>

    <div class="container-form">
        <form action="php/process.php" method="post">
            <div class="input-container">
                <input type="text" class = "input" name = "username" placeholder = "Nombre de usuario" required>
                <label for="username">Nombre de usuario</label>
            </div>

            <div class="input-container">
                <input type="password" class = "input" name = "psswd" placeholder = "Contraseña" required>
                <label for="username">Contraseña</label>
            </div>

            <div class="submit">
                <input type="submit" value="Enviar">
            </div>
        </form>
    </div>
</div>
    
</body>
</html>
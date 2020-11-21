<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Error</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        .main{
            top:15%;
            left: 25%;
        }
    </style>
</head>
<body>
    <div class="main">
        <h1>Mensaje de Error</h1>

    <div class="container-form">
        <h1 class = "error">¡ERROR!</h1>
            <p>Error fallo en el nombre del usuario o del password.</p>
            <p>Por favor, vuelva a intentarlo.</p>
            <img src="https://i.pinimg.com/originals/e5/6d/96/e56d96c238d0baaa95eeebcd92ebabfb.png" alt="">
        <form action="process.php" method="post">
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
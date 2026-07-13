<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión | TecNM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", sans-serif;
        }

        body {
            height: 100vh;
            background: linear-gradient(
                rgba(0, 58, 143, 0.75),
                rgba(0, 0, 0, 0.75)
            ),
            url("assets/img/fondo.jpg") no-repeat center center / cover;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            width: 100%;
            max-width: 420px;
            text-align: center;
        }

        .login-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
        }

        .logo {
            width: 85px;
        }

        .login-card {
            background: #ffffff;
            padding: 32px;
            border-radius: 14px;
            box-shadow: 0 12px 35px rgba(0,0,0,.35);
        }

        .login-card h2 {
            color: #003A8F;
            margin-bottom: 5px;
            font-weight: 600;
        }

        .login-card p {
            color: #555;
            margin-bottom: 22px;
        }

        .input-group {
            text-align: left;
            margin-bottom: 15px;
        }

        .input-group label {
            font-size: 14px;
            color: #333;
        }

        .input-group input {
            width: 100%;
            padding: 11px;
            border-radius: 6px;
            border: 1px solid #ccc;
            margin-top: 5px;
        }

        .input-group input:focus {
            outline: none;
            border-color: #003A8F;
            box-shadow: 0 0 6px rgba(0,58,143,.35);
        }

        .options {
            text-align: left;
            font-size: 13px;
            margin-bottom: 18px;
        }

        .options input {
            margin-right: 5px;
        }

        button {
            width: 100%;
            background: #003A8F;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: .3s;
        }

        button:hover {
            background: #002B6F;
        }

        .back-link {
            display: block;
            margin-top: 15px;
            font-size: 14px;
            color: #003A8F;
            text-decoration: none;
        }

        .back-link:hover {
            text-decoration: underline;
        }

        footer {
            margin-top: 15px;
            color: #fff;
            font-size: 12px;
        }
    </style>
</head>

<body>

<div class="login-container">

    <!-- LOGOS -->
    <div class="login-header">
        <img src="assets/img/Logo.png" alt="TecNM" class="logo">
        <img src="assets/img/Tecserdan.png" alt="Instituto Tecnológico" class="logo">
    </div>

    <!-- LOGIN -->
    <div class="login-card">
        <h2>Iniciar Sesión</h2>
        <p>Sistema Académico</p>

        <form action="ValidacionSA.php" method="POST" autocomplete="off">
            <div class="input-group">
                <label for="usuario">Usuario</label>
                <input type="text" id="usuario" name="usuario" placeholder="Correo institucional" required>
            </div>

            <div class="input-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="options">
                <input type="checkbox" id="showPass">
                <label for="showPass">Mostrar contraseña</label>
            </div>

            <button type="submit">Ingresar</button>
        </form>

        <a href="index.html" class="back-link">← Volver al inicio</a>
    </div>

    <footer>
        © Tecnológico Nacional de México
    </footer>

</div>

<script>
    document.getElementById("showPass").addEventListener("change", function () {
        document.getElementById("password").type =
            this.checked ? "text" : "password";
    });
</script>

</body>
</html>

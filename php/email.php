<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar Correo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .form-container {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            background: white;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
        .message {
            margin-top: 20px;
            color: green;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Contacto</h2>
    <form action="" method="POST">
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Correo Electrónico</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="message">Mensaje</label>
            <textarea id="message" name="message" rows="4" required></textarea>
        </div>
        <button type="submit">Enviar</button>
    </form>
    

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars(trim($_POST['name']));
        $email = htmlspecialchars(trim($_POST['email']));
        $message = htmlspecialchars(trim($_POST['message']));

        // Validar campos
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<div class='error'>Correo electrónico no válido.</div>";
        } else {
            // Configurar encabezados del correo
            $to = "ronaldmelenz@gmail.com"; // Cambia esto por tu correo
            $subject = "Nuevo mensaje de contacto";
            $body = "Nombre: $name\nCorreo: $email\nMensaje:\n$message";
            $headers = "From: $email";

            // Enviar correo
            if (mail($to, $subject, $body, $headers)) {
                echo "<div class='message'>Correo enviado correctamente.</div>";
            } else {
                echo "<div class='error'>Error al enviar el correo.</div>";
            }
        }
    }
    ?>
</div>

</body>
</html>
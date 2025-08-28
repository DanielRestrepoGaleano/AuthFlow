<?php

// ¡RUTAS CORREGIDAS! Ahora se accede directamente a la carpeta 'core'
require_once 'core/validation_logic.php';
require_once 'core/user_logic.php';
require_once 'core/auth_logic.php';

// Inicializar un array para almacenar los errores
$errors = [];

// Verificar si el formulario ha sido enviado usando el método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 1. Recoger los datos del formulario
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // 2. Validaciones
    // HU-07: Validar que los campos no estén vacíos
    if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        $errors[] = "Todos los campos son obligatorios.";
    }

    // Validar que las contraseñas coincidan
    if ($password !== $confirm_password) {
        $errors[] = "Las contraseñas no coinciden.";
    }
    
    // HU-01: ¡LÍNEA ACTIVADA! Validar la política de seguridad de la contraseña
    // Ahora llamamos a la función que creamos en validation_logic.php
    if (!validarPoliticaContraseña($password)) {
        $errors[] = "La contraseña debe tener al menos 8 caracteres, una mayúscula, una minúscula, un número y un carácter especial.";
    }

    // (Las siguientes validaciones siguen pendientes)
    // HU-04: Verificar si el correo electrónico ya existe
    // if (emailExiste($email)) { ... }
    
    // 3. Si no hay errores, proceder con el registro
    if (empty($errors)) {
        // Lógica de registro (pendiente)
    }
}

// </php

/**
 * Página de registro de usuarios.
 * 
 * Muestra un formulario con los campos básicos:
 * - Nombre de usuario
 * - Correo electrónico
 * - Contraseña y confirmación
 * 
 * 'action="register.php"': Especifica que los datos del formulario 
 *   serán enviados al archivo 'register.php' (a sí mismo) para ser procesados.
 * 
 * 'method="POST"': Indica que los datos se enviarán de forma oculta
 *   en el cuerpo de la solicitud HTTP.
 * 
 * Estructura visual:
 * - Contenedor centrado con Bootstrap
 * - Card con header, body y footer
 */




// Incluir el encabezado de la página
require_once 'includes/header.php';
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" >
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Crear una Cuenta</h3>
                </div>
                <div class="card-body">
                    <form action="register.php" method="POST">

                        <!-- Campo Nombre de Usuario -->
                        <div class="mb-3">
                            <label for="username" class="form-label">Nombre de Usuario</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        
                        <!-- Campo Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <!-- Campo Contraseña -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>

                        <!-- Campo Confirmar Contraseña -->
                        <div class="mb-3">
                            <label for="confirm_password" class="form-label">Confirmar Contraseña</label>
                            <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                        </div>

                        <!-- Botón de Envío -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Registrarse</button>
                        </div>
                    </form>
                </div>
                 <div class="card-footer text-center">
                    <a href="#">¿Ya tienes una cuenta? Inicia sesión</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

// Incluir el pie de página
require_once 'includes/footer.php'
?>
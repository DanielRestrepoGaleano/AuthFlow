<?php

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
require_once 'src/includes/header.php';
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
require_once 'src/includes/footer.php'
?>
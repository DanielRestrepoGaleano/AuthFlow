/* Archivo: validation_logic.php */
<?php

/**
 * Valida que una contraseña cumpla con las políticas de seguridad definidas.
 *
 * Esta función verifica los siguientes criterios (basado en HU-01):
 * 1. Longitud mínima de 8 caracteres.
 * 2. Al menos una letra mayúscula.
 * 3. Al menos una letra minúscula.
 * 4. Al menos un número.
 * 5. Al menos un carácter especial.
 *
 * @param string $password La contraseña a validar.
 * @return bool Devuelve true si la contraseña es válida, false en caso contrario.
 */

function validarPoliticaContraseña($password) {
    // Criterio 1: Mínimo 8 caracteres de longitud
    if (strlen($password) < 8) {
        return false;
    }

    // Criterio 2: Al menos una letra mayúscula (A-Z)
    if (!preg_match('/[A-Z]/', $password)) {
        return false;
    }

    // Criterio 3: Al menos una letra minúscula (a-z)
    if (!preg_match('/[a-z]/', $password)) {
        return false;
    }

    // Criterio 4: Al menos un número (0-9)
    if (!preg_match('/[0-9]/', $password)) {
        return false;
    }

    // Criterio 5: Al menos un carácter especial (cualquier cosa que no sea letra o número)
    if (!preg_match('/[\W_]/', $password)) {
        // \W es cualquier carácter que no sea una palabra. Se añade _ por si acaso.
        return false;
    }

    // Si pasó todas las validaciones, la contraseña es segura
    return true;
}

?>
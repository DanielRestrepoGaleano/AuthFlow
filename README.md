# Proyecto de Administración de Usuarios - Ingeniería de Software 2

Este proyecto implementa un panel de administración de usuarios seguro, siguiendo un conjunto de historias de usuario enfocadas en seguridad, validación de datos y auditoría.

## 1. Arquitectura y Stack Tecnológico

### Arquitectura
Se ha elegido una arquitectura de **Monolito Organizado**. Esta decisión se basa en los siguientes criterios:
-   **Velocidad de Desarrollo:** Permite un desarrollo inicial rápido y un despliegue simplificado, ideal para cumplir con los plazos del proyecto.
-   **Cohesión:** Al ser una aplicación centrada en la gestión de un único dominio (usuarios y seguridad), un monolito mantiene la lógica relacionada junta y fácil de razonar.
-   **Organización:** A diferencia de un monolito caótico, la estructura de carpetas separa claramente las responsabilidades (lógica de negocio, acceso a datos, vistas, recursos públicos), evitando el desorden y facilitando el mantenimiento.

### Stack Tecnológico
-   **Backend:** **PHP** (nativo, sin frameworks) para la lógica del servidor.
-   **Frontend:** **HTML5**, **JavaScript** (nativo) y **Bootstrap 5** para la interfaz de usuario.
-   **Base de Datos:** **MySQL / MariaDB**.

## 2. Estructura del Proyecto

```
/
├── config/               # Archivos de configuración (BD, APIs).
│   └── config.example.php
├── public/               # Archivos accesibles directamente desde el navegador.
│   ├── css/              # Hojas de estilo.
│   ├── js/               # Scripts de JavaScript.
│   └── img/              # Imágenes.
├── src/                  
│   ├── core/             # Lógica de negocio principal .
│   ├── includes/         # Fragmentos de código reutilizables (conexión BD, header, footer).
│   └── services/         # Clases o funciones para interactuar con APIs externas (Brevo).
├── admin_dashboard.php   # Archivos PHP principales que actúan como "controladores".
├── admin_logs.php
├── admin_users.php
├── index.php
├── login.php
├── logout.php
├── register.php
└── README.md
```
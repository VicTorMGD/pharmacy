# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

Pharmacy Management System v1.0 - A PHP/MySQL web application for pharmacy operations with role-based access (admin and technician dashboards).

## Development Environment

- **Server:** XAMPP (Apache + MySQL + PHP)
- **Database:** MySQL via PDO (`pharmacy` database)
- **URL:** http://localhost/pharmacy/vista/login.php

To run locally:
1. Start XAMPP (Apache and MySQL)
2. Import database schema into MySQL (database name: `pharmacy`)
3. Access via browser at localhost

## Architecture

Traditional MVC structure (vanilla PHP, no framework):

```
controlador/    # Controllers - handle requests and business logic
modelo/         # Models - database access via PDO
vista/          # Views - PHP templates with HTML
  layouts/      # Reusable layout components (header, nav, footer)
```

### Key Files

- `modelo/Conexion.php` - Database connection singleton (PDO)
- `modelo/Usuario.php` - User model with authentication
- `controlador/LoginController.php` - Handles login, sets sessions, routes by user type
- `vista/login.php` - Entry point for unauthenticated users

### User Types (us_tipo)

- Type 1: Admin → routes to `adm_catalogo.php`
- Type 2: Technician → routes to `tec_catalogo.php`

### Session Variables

- `usuario` - User ID
- `us_tipo` - User type (1=admin, 2=technician)
- `nombre_us` - Display name

## Frontend Stack

- AdminLTE for dashboard UI
- Bootstrap 4
- jQuery
- Font Awesome icons
- Custom CSS in `css/style.css` for login page

## Database Tables

Referenced tables:
- `usuario` - User accounts (id_usuario, dni_us, contrasena_us, nombre_us, us_tipo)
- `tipo_us` - User type definitions (id_tipo_us)

## Code Conventions

- Spanish naming for variables and methods (e.g., `Loguearse`, `nombre_us`, `contrasena_us`)
- PDO with prepared statements for database queries
- Session-based authentication with role checking at page top
- Views include layout components: `layouts/header.php`, `layouts/nav.php`, `layouts/footer.php`

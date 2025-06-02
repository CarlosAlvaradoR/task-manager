# 🚀 **Gestor de tareas**  

🔹 *Un sistema de gestión de tareas desarrollado con Laravel, Bootstrap y MySQL.*  

![Captura de pantalla de la app](public/task.avif) *(opcional: añade una imagen del proyecto)*  

## 🌟 **Características principales**  
✔️ Crear, editar y eliminar tareas  
✔️ Autenticación de usuarios (opcional)  
✔️ Diseño responsive con Bootstrap  
✔️ Validación de formularios  
✔️ Base de datos MySQL  

## 🛠️ **Tecnologías utilizadas**  
- **Backend**: Laravel 12  
- **Frontend**: Bootstrap 5, Blade  
- **Base de datos**: MySQL  
- **Despliegue**: Heroku / Vercel / Shared Hosting *(opcional)*  

## ⚡ **Requisitos del sistema**  
- PHP 8.1+  
- Composer  
- MySQL 5.7+  

## 📦 **Instalación**  
1. Clona el repositorio:  

   git clone https://github.com/CarlosAlvaradoR/task-manager.git

2. Instala dependencias:

    composer install

3. Configura el archivo .env:

    cp .env.example .env
    php artisan key:generate

4. Ejecuta migraciones:

    php artisan migrate --seed

5. ¡Listo! Inicia el servidor:

    php artisan serve
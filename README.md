<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

---

# 🍽️ Restoran - Aplicación Web para Restaurante

![Laravel](https://img.shields.io/badge/Laravel-12-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.2-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-8.0-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)
![Chart.js](https://img.shields.io/badge/Chart.js-4.4-FF6384?style=for-the-badge&logo=chart.js&logoColor=white)

## 📋 Descripción

**Restoran** es una aplicación web completa para la gestión de restaurantes, desarrollada con Laravel 12. Permite a los usuarios explorar el menú, realizar reservas, gestionar pedidos y a los administradores controlar todas las operaciones del restaurante a través de un panel administrativo con estadísticas visuales.

---

## ✨ Características Principales

### 👤 Para Usuarios:
- **Autenticación** - Registro e inicio de sesión
- **Menú interactivo** - Visualización de platos por categorías (Desayuno, Almuerzo, Cena)
- **Carrito de compras** - Agregar y eliminar platos
- **Checkout** - Proceso de pago con Paypal
- **Reservas** - Reserva de mesas en línea
- **Reseñas** - Opiniones de clientes
- **Historial** - Ver reservas y pedidos realizados

### 👑 Para Administradores:
- **Panel de control** - Dashboard con estadísticas y gráficos
- **Gestión de platos** - CRUD completo de alimentos
- **Gestión de pedidos** - Visualización de órdenes
- **Gestión de reservas** - Administración de reservas
- **Gestión de administradores** - Control de usuarios admin

---

## 🖥️ Capturas de Pantalla

| Página Principal | Panel Admin |
|------------------|-------------|
| <img src="https://github.com/user-attachments/assets/e0c42fb1-d8a0-4f33-9d30-463484af0f54" width="400" alt="Home Page"> | <img src="https://github.com/user-attachments/assets/19e6e085-3507-4cad-8568-ca9d4be28663" width="400" alt="Admin Dashboard"> |

---

## 🛠️ Tecnologías Utilizadas

| Tecnología | Versión | Uso |
|------------|---------|-----|
| **Laravel** | 12 | Framework PHP principal |
| **PHP** | 8.2 | Lenguaje de programación |
| **MySQL** | 8.0 | Base de datos |
| **Bootstrap** | 5 | Framework CSS |
| **Chart.js** | 4.4 | Gráficos interactivos |
| **Font Awesome** | 6 | Iconos |
| **jQuery** | 3.6 | JavaScript |
| **Vite** | - | Build tool para assets |

---

## 📁 Estructura del Proyecto

```
restoran/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Admins/        # Controladores de admin
│   │   │   ├── Auth/           # Controladores de autenticación
│   │   │   ├── Foods/          # Controladores de alimentos
│   │   │   ├── HomeController.php
│   │   │   └── Users/          # Controladores de usuarios
│   │   └── Middleware/         # Middlewares personalizados
│   └── Models/                  # Modelos Eloquent
├── bootstrap/
│   └── app.php                  # Configuración de middleware (Laravel 12)
├── config/                       # Archivos de configuración
├── database/
│   ├── migrations/               # Migraciones
│   └── seeders/                  # Seeders
├── public/
│   └── assets/                   # CSS, JS, imágenes
├── resources/
│   └── views/                     # Vistas Blade
│       ├── admins/                # Vistas de admin
│       ├── auth/                   # Vistas de autenticación
│       ├── foods/                  # Vistas de alimentos
│       ├── layouts/                # Layouts principales
│       └── users/                  # Vistas de usuarios
├── routes/
│   └── web.php                     # Rutas principales
├── .env                             # Configuración de entorno
└── .gitignore                       # Archivos ignorados por Git
```

---

## 🚀 Instalación

Sigue estos pasos para ejecutar el proyecto en tu máquina local:

### Requisitos Previos
- PHP 8.2 o superior
- Composer
- MySQL
- Node.js y NPM

### Paso a Paso

1. **Clonar el repositorio**
   ```bash
   git clone https://github.com/TU-USUARIO/restoran.git
   cd restoran
   ```

2. **Instalar dependencias de PHP**
   ```bash
   composer install
   ```

3. **Instalar dependencias de Node.js**
   ```bash
   npm install
   ```

4. **Configurar el archivo de entorno**
   ```bash
   cp .env.example .env
   ```

5. **Configurar la base de datos en `.env`**
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=restoran
   DB_USERNAME=root
   DB_PASSWORD=
   
   SESSION_DRIVER=file  # o 'database' si prefieres
   ```

6. **Generar clave de aplicación**
   ```bash
   php artisan key:generate
   ```

7. **Ejecutar migraciones**
   ```bash
   php artisan migrate
   ```

8. **Iniciar el servidor de desarrollo**
   ```bash
   php artisan serve
   ```

9. **En otra terminal, compilar assets con Vite**
   ```bash
   npm run dev
   ```

10. **Abrir el navegador**
    ```
    http://127.0.0.1:8000
    ```

---

## 🔐 Credenciales de Prueba

### Usuario Regular
- **Email**: `user@example.com`
- **Contraseña**: `password`

### Administrador
- **Email**: `admin@restoran.com`
- **Contraseña**: `admin123`

---

## 🗺️ Rutas Principales

| Ruta | Método | Nombre | Descripción |
|------|--------|--------|-------------|
| `/` | GET | `home` | Página principal |
| `/about` | GET | `about` | Acerca de |
| `/services` | GET | `services` | Servicios |
| `/contact` | GET | `contact` | Contacto |
| **Alimentos** |
| `/foods/menu` | GET | `foods.menu` | Menú completo |
| `/foods/food-details/{id}` | GET | `food.details` | Detalle de plato |
| `/foods/food-details/{id}` | POST | `food.cart` | Agregar al carrito |
| `/foods/cart` | GET | `food.display.cart` | Ver carrito |
| `/foods/delete-cart/{id}` | GET | `food.delete.cart` | Eliminar del carrito |
| `/foods/checkout` | GET | `foods.checkout` | Página de checkout |
| `/foods/prepare-checkout` | POST | `prepare.checkout` | Preparar checkout |
| **Reservas** |
| `/foods/booking` | POST | `foods.booking.table` | Reservar mesa |
| **Administración** |
| `/admin/login` | GET | `view.login` | Login admin |
| `/admin/login` | POST | `check.login` | Procesar login admin |
| `/admin/logout` | POST | `admin.logout` | Logout admin |
| `/admin/index` | GET | `admins.dashboard` | Dashboard admin |
| **Usuarios** |
| `/users/all-bookings` | GET | `users.bookings` | Ver reservas |
| `/users/orders` | GET | `users.orders` | Ver pedidos |
| `/users/write-review` | GET | `users.review.create` | Escribir reseña |
| `/users/write-review` | POST | `users.review.store` | Guardar reseña |

---

## 🎨 Características de Diseño

### Frontend
- **Diseño responsive** - Adaptado a móviles, tablets y desktop
- **Animaciones** - Efectos de aparición con WOW.js
- **Galería de imágenes** - Fotos de alta calidad de Unsplash
- **Formularios interactivos** - Validación en tiempo real
- **Modales** - Para videos y confirmaciones

### Dashboard Admin
- **Gráficos interactivos** con Chart.js
- **Tarjetas de estadísticas** con animaciones
- **Tablas de datos** con diseño limpio
- **Navbar fijo** con menú desplegable

---

## 📦 Modelos de Datos

### Food
- `id` - Identificador único
- `name` - Nombre del plato
- `description` - Descripción
- `price` - Precio
- `image` - Nombre de la imagen
- `category` - Categoría (breakfast/lunch/dinner)

### Cart
- `id` - Identificador único
- `user_id` - ID del usuario
- `food_id` - ID del plato
- `name` - Nombre del plato
- `image` - Imagen del plato
- `price` - Precio

### Booking
- `id` - Identificador único
- `name` - Nombre del cliente
- `email` - Email
- `date` - Fecha de reserva
- `num_people` - Número de personas
- `spe_request` - Peticiones especiales

### Review
- `id` - Identificador único
- `name` - Nombre del cliente
- `review` - Texto de la reseña

### Admin
- `id` - Identificador único
- `name` - Nombre del administrador
- `email` - Email
- `password` - Contraseña encriptada

---

## 🤝 Contribución

Si deseas contribuir al proyecto:

1. Haz un fork del repositorio
2. Crea una rama para tu feature (`git checkout -b feature/AmazingFeature`)
3. Haz commit de tus cambios (`git commit -m 'Add some AmazingFeature'`)
4. Haz push a la rama (`git push origin feature/AmazingFeature`)
5. Abre un Pull Request

---

## 📝 Licencia

Este proyecto está bajo la licencia MIT. Ver el archivo `LICENSE` para más detalles.

---

## 👨‍💻 Autor

**Navarro**
- GitHub: [JDNG111](https://github.com/JDNG11)
- Email: NAVARROESTUDIANTE1010@gmail.com.com

---

## 🙏 Agradecimientos

- [Laravel](https://laravel.com) - Framework PHP
- [Bootstrap](https://getbootstrap.com) - Framework CSS
- [Unsplash](https://unsplash.com) - Imágenes gratuitas
- [Chart.js](https://www.chartjs.org) - Biblioteca de gráficos
- [Font Awesome](https://fontawesome.com) - Iconos

---

## ⭐ ¡Gracias por visitar el proyecto!

Si te gusta, no olvides darle una estrella en GitHub ⭐

---

**Hecho con ❤️ y Laravel 12**

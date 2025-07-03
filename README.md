# Sistema de Gestión Documental

Un sistema de gestión documental desarrollado con Laravel y Livewire que permite organizar, buscar y gestionar documentos de manera eficiente.

## 🚀 Características

- **Dashboard principal** - Panel de control para vista general del sistema
- **Búsqueda avanzada** - Herramientas de búsqueda para encontrar documentos específicos
- **Gestión de permisos** - Control de acceso y permisos de usuario
- **Historial de versiones** - Seguimiento de cambios en documentos
- **Panel de navegación** - Interfaz intuitiva para navegar por el sistema

## 📋 Requisitos del Sistema

- **PHP**: ^8.4
- **Composer**: ^2.0
- **Node.js**: ^18.0
- **NPM**: ^8.0

## 🛠️ Instalación

### 1. Clonar el repositorio

```bash
git clone <url-del-repositorio>
cd gestion_documental
```

### 2. Instalar dependencias de PHP

```bash
composer install
```

### 3. Instalar dependencias de Node.js

```bash
npm install
```

### 4. Configurar el archivo de entorno

```bash
cp .env.example .env
```

### 5. Generar la clave de aplicación

```bash
php artisan key:generate
```

### 6. Configurar la base de datos

El proyecto está configurado para usar SQLite por defecto. La base de datos ya existe en `database/database.sqlite`.

Si prefieres usar MySQL o PostgreSQL, edita el archivo `.env`:

```env
# Para MySQL
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=gestion_documental
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña

# Para PostgreSQL
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=gestion_documental
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña
```

### 7. Ejecutar las migraciones

```bash
php artisan migrate
```

### 8. Ejecutar los seeders (opcional)

```bash
php artisan db:seed
```

### 9. Compilar los assets

```bash
npm run build
```

## 🚀 Ejecutar el proyecto

### Desarrollo

Para ejecutar el proyecto en modo desarrollo:

```bash
# Terminal 1 - Servidor Laravel
php artisan serve

# Terminal 2 - Compilación de assets en tiempo real
npm run dev
```

El servidor estará disponible en: `http://localhost:8000`

### Producción

Para ejecutar en producción:

```bash
# Compilar assets para producción
npm run build

# Ejecutar el servidor
php artisan serve --host=0.0.0.0 --port=8000
```

## 🗃️ Base de Datos

### SQLite (Por defecto)

El proyecto usa SQLite por defecto. La base de datos se encuentra en `database/database.sqlite`.

### Migraciones disponibles

- `create_users_table` - Tabla de usuarios
- `create_cache_table` - Tabla de caché
- `create_jobs_table` - Tabla de trabajos en cola

### Ejecutar migraciones

```bash
# Ejecutar todas las migraciones
php artisan migrate

# Rollback de la última migración
php artisan migrate:rollback

# Refrescar todas las migraciones
php artisan migrate:refresh

# Refrescar y ejecutar seeders
php artisan migrate:refresh --seed
```

## 🧪 Testing

El proyecto usa Pest PHP para las pruebas:

```bash
# Ejecutar todas las pruebas
php artisan test

# Ejecutar pruebas específicas
php artisan test --filter=DashboardTest

# Ejecutar pruebas con cobertura
php artisan test --coverage
```

## 📁 Estructura del Proyecto

```
app/
├── Http/Controllers/     # Controladores
├── Livewire/            # Componentes Livewire
│   └── Actions/         # Acciones de Livewire
└── Models/              # Modelos Eloquent

resources/
├── css/                 # Estilos CSS
├── js/                  # JavaScript
└── views/               # Vistas Blade
    ├── components/      # Componentes Blade
    ├── flux/           # Componentes Flux
    └── livewire/       # Vistas de Livewire

database/
├── migrations/         # Migraciones de base de datos
├── seeders/           # Seeders
└── factories/         # Factories para testing

tests/
├── Feature/           # Pruebas de funcionalidad
└── Unit/             # Pruebas unitarias
```

## 🔧 Comandos Útiles

### Artisan Commands

```bash
# Limpiar caché
php artisan cache:clear
php artisan config:clear
php artisan view:clear

# Generar componentes Livewire
php artisan make:livewire NombreComponente

# Crear modelos
php artisan make:model NombreModelo -m

# Crear controladores
php artisan make:controller NombreController

# Ver rutas
php artisan route:list

# Ejecutar trabajos en cola
php artisan queue:work
```

### NPM Scripts

```bash
# Desarrollo
npm run dev

# Producción
npm run build
```

## 🛡️ Seguridad

- El proyecto utiliza las funciones de seguridad integradas de Laravel
- Configuración CSRF habilitada
- Validación de entrada de datos
- Autenticación y autorización implementadas

## 📝 Configuración Adicional

### Variables de Entorno Importantes

```env
APP_NAME="Sistema de Gestión Documental"
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost:8000

# Base de datos
DB_CONNECTION=sqlite

# Configuración de sesiones
SESSION_DRIVER=database

# Configuración de logs
LOG_CHANNEL=stack
LOG_LEVEL=debug
```

## 🤝 Contribuir

1. Fork el proyecto
2. Crea una rama para tu feature (`git checkout -b feature/nueva-funcionalidad`)
3. Commit tus cambios (`git commit -am 'Agregar nueva funcionalidad'`)
4. Push a la rama (`git push origin feature/nueva-funcionalidad`)
5. Abre un Pull Request

## 📄 Licencia

Este proyecto está bajo la licencia MIT. Ver el archivo `LICENSE` para más detalles.

## 🆘 Soporte

Si encuentras algún problema o tienes preguntas:

1. Revisa las [issues existentes](../../issues)
2. Crea una nueva issue con detalles del problema
3. Incluye información del entorno (PHP, Laravel, navegador, etc.)

## 📚 Recursos Adicionales

- [Documentación de Laravel](https://laravel.com/docs)
- [Documentación de Livewire](https://livewire.laravel.com/docs)
- [Documentación de Flux](https://fluxui.dev/docs)
- [Documentación de Tailwind CSS](https://tailwindcss.com/docs)

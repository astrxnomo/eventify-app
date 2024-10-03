# Eventify | App para Gestión de Eventos

Eventify es una aplicación web que permite a los usuarios crear y promocionar eventos de forma sencilla, desde pequeñas reuniones en casa hasta grandes conciertos y convenciones.

## Documentación

- [Presentación general de la aplicación](https://docs.google.com/document/d/16DYdFm3wAC0813IsD3SZrFxFU53xAbaBKwPDLM85pvM/edit?usp=sharing)
- [Microservicio con React](https://github.com/astrxnomo/microservice-eventify-app.git)

## Tecnologías Utilizadas

- **Backend:** Laravel
- **Frontend:** Blade, JavaScript, Bootstrap 5
- [**Microservicio:**](https://github.com/astrxnomo/microservice-eventify-app.git) React

## Desarrollado por:

- Luis Felipe Giraldo Ortega
- Alejandro Bermudez Murcia
- Sergio Alejandro Gaitan Quintero

## Comandos requeridos para iniciar:

```bash
# Actualizar dependencias de Composer
composer update

# Generar la clave de la aplicación
php artisan key:generate

# Realizar migraciones y seeders de la base de datos
php artisan migrate:fresh --seed

# Crear enlace simbólico de almacenamiento
php artisan storage:link

# Dependencias adicionales
composer require guzzlehttp/guzzle
composer require barryvdh/laravel-dompdf

# Iniciar el servidor
php artisan serve
```

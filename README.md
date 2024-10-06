# Eventify | App para Gestión de Eventos

Eventify es una aplicación web que permite a los usuarios crear y promocionar eventos de forma sencilla, desde pequeñas reuniones en casa hasta grandes conciertos y convenciones.

## Documentación

- [Presentación general de la aplicación](https://docs.google.com/document/d/16DYdFm3wAC0813IsD3SZrFxFU53xAbaBKwPDLM85pvM/edit?usp=sharing)
- [Microservicio con React](https://github.com/astrxnomo/microservice-eventify-app.git)

## Tecnologías Utilizadas

- **Backend:** Laravel y MySQL
- **Frontend:** Blade, JavaScript y Bootstrap 5
- [**Microservicio:**](https://github.com/astrxnomo/microservice-eventify-app.git) React

## Desarrollado por:

- Luis Felipe Giraldo Ortega
- Alejandro Bermudez Murcia
- Sergio Alejandro Gaitan Quintero

## Comandos requeridos para iniciar:

```bash
# Descargar dependencias de Composer
composer update

# Generar la clave de la aplicación
php artisan key:generate

# Crear enlace simbólico de almacenamiento
php artisan storage:link

# Realizar migraciones y seeders de la base de datos
php artisan migrate:fresh --seed

# Iniciar el servidor
php artisan serve
```

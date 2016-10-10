# Curso de Laravel 5.2 (Framework Php) - Educomser SRL

> Curso de Laravel 5.2 para Educomser SRL.

## Documentación Oficial

Recuerda revisar la documentación para reforzar los conocimientos impartidos [Laravel website](https://laravel.com/docs/5.2).

## Trabajos de Investigación

Todos los trabajos deben ser enviados por correo electrónico en formato texto.

1. Definir los campos escenciales de las tablas para el proyecto blog.
2. Describir los tipos de encriptación que tiene Laravel.
3. Implementar la mejora de validación en el formulario de creación de un Post.
4. Implementar CRUD en la entidad CATEGORIA (basado en CRUD de POST).
5. Implementar la ordenación a través de los campos Código, Título y Categoría.

## Notas Parciales

Código de Alumno | Asistencia (25) | TI-01 (XX.X) | TI-02 (XX.X) | TI-03 (XX.X) | TI-04 (XX.X) | Examen Final (40) | Nota Final 
---------------- | :-------------: | :----------: | :----------: | :----------: | :----------: | :---------------: | :--------: 
VCL131279 | | | | | | |
JCR260991 | | | | | | |

## Comandos Artisan

Crear un proyecto Laravel 5.2
```javascript
composer create-project --prefer-dist laravel/laravel nombreCarpetaDestino "5.2.*"
```
Ejecutar el Servidor Artisan:
```javascript
php artisan serve
```
Crear un Controlador
```javascript
php artisan make:controller NombreSingularController
```
Ejecutar las migraciones
```javascript
php artisan migrate
php artisan migrate --seed
php artisan migrate:refresh --seed
```
Crear una migración
```javascript
php artisan make:migration crate_entidadPlural_table --create=entidadPlural
```
Crear un Modelo
```javascript
php artisan make:model EntidadSingular
```
Crear un Seeder
```javascript
php artisan make:seeder EntidadPluralTableSeeder
```
Crear un Request
```javascript
php artisan make:request EntidadSingularRequest
```

## Facilitador

J. Marcelo Arze - Desarrollador de Sistemas
- [marze@educomser.com](marze@educomser.com)
- [arze.jesus@gmail.com](arze.jesus@gmail.com)
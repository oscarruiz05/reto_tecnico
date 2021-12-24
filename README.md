<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>
<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Configuracion prueba tecnica

### Requisitos
1. Tener Instalado Xampp <p>
2. Tener Instalado Composer <p>

### Instalación

1. git clone https://github.com/oscarruiz05/reto_tecnico.git
2. cd reto_tecnico
3. cp .env.example .env
4. composer install
5. php artisan key:generate

### Crear base de datos
1. crear base de datos reto_tecnico

### correr comados finales
1. php artisan migrate --seed
2. php artisan serve

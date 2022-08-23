# XHASH - PRUEBA TECNICA

Desarrollo de la prueba técnica para la empresa XHASH utilizando Laravel Lumen version 8 y trabajando bajo la metodología TDD.

## Instalación

1. Clone el proyecto.

```bash
git clone https://github.com/edtlsoft/xhash.git
```

2. Ingrese al directorio que se le acabo de crear

```bash
cd xhash
```

3. Instale las dependencias de php con composer

```bash
composer install
```

6. Copie el archivo .env.example a .env y remplace los valores con los de su configuracion

```bash
cp .env.example .env
```

8. La base de datos es sqlite y se encuentra en la ruta
```bash
/database/database.sqlite
```

9. Ejecute los tests

```bash
vendor/bin/phpunit
```

10. Levante un servidor local con el siguiente comando 

```bash
php -S localhost:8000 -t public/
```

11. Visite la ruta 

```bash
http://localhost:8000/api/zip-codes/01210
```

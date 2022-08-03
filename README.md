<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://media-exp2.licdn.com/dms/image/C4E03AQFQj49ek7fJhA/profile-displayphoto-shrink_400_400/0/1517447714403?e=1663200000&v=beta&t=XawfvveLsdN70UjsKPwmp6b2xOJuSlnFa-oca_tjyI4" width="400"></a></p>


## Test Nexura

### Prerrequisitos

- Instalar PHP y MYSQL, para facilitar el proceso podemos instalar [XAMPP](https://www.apachefriends.org/es/index.html)
- Instalar [Composer](https://getcomposer.org/download/)
- Instalar Laravel ```composer global require laravel/installer```
- Instalar [Node](https://nodejs.org/es/)

### Proceso de instalación y configuración

#### 1 - Dependencias de Composer

```composer install```

#### 2 - Crear archivo .env

Este archivo contiene todas las variables de entorno del sistema y debe estar creado en la raíz del proyecto basado en el archivo de ejemplo **.env.example**

#### 3 - Dependencias de npm

```npm install```

#### 4 - Crear base de datos

En Phpmyadmin creamos una base de datos llamada nexura

#### 5 - Ejecutar migraciones

Las migraciones son básicamente la estructura de la base de datos que ya esta construida en el código para pasarla a MYSQL, esto lo podemos hacer con el siguiente comando.

Como las tablas tienen relaciones debemos ejecutar las migraciones individualmente en el siguiente orden 

```
php artisan migrate --path=/database/migrations/2022_08_02_164703_create_areas_table.php  
php artisan migrate --path=/database/migrations/2022_08_02_172243_create_rols_table.php
php artisan migrate --path=/database/migrations/2022_08_02_155219_create_employees_table.php
php artisan migrate --path=/database/migrations/2022_08_02_171439_create_employee_rols_table.php
```

#### 6 - Subir datos de prueba 

Para subir los datos suministrados por nexura debemos ejecutar los seeder en el siguiente orden 

```
php artisan db:seed --class=AreasSeeder
php artisan db:seed --class=RolSeeder
php artisan db:seed --class=EmployeeSeeder
php artisan db:seed --class=EmployeeRolSeeder
```

#### 7 - Ejecutar proyecto

```
php artisan serve

npm run dev
```



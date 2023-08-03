Para Iniciar el Proyecto:

1. Clonar el repositorio
2. Instalar las dependencias con el comando `composer install`
3. Copiar el file `.env.example` con el comando `cp .env.example .env`
4. Eliminar todas estas lineas en el .env que son para la coneccion en la base de datos, ya que nos vamos a conectar localmente con sqlite:
    -DB_CONNECTION=mysql
    -DB_HOST=127.0.0.1
    -DB_PORT=3306
    -DB_DATABASE=laravel
    -DB_USERNAME=root
    -DB_PASSWORD=
5. Agregar esta linea en el .env para la coneccion en la base de datos:
    -DB_CONNECTION=sqlite
6. Crear el archivo de base de datos con el comando `touch database/database.sqlite`
7. Generar la key con el comando `php artisan key:generate`
8. Cambiar la variable "QUEUE_CONNECTION=sync" en el .env a "QUEUE_CONNECTION=database" para setear como defecto todos los jobs que tengamos cuando hagan el dispacth van a pasar por esa coneccion
9. Correr las migraciones con el comando `php artisan migrate`, va a crear el file "database\database.sqlite" que no se va a subir al repositorio porque esta en el .gitignore
10. Correr el seeder DatabaseSeeder con el comando `php artisan db:seed --class=DatabaseSeeder` este va a correr los seeders de Orders, OrderLines y Products que tiene cada uno su respectivos factories para insertar datos de prueba en la base de datos
11. Correr el comando `php artisan serve` para levantar el servidor y poder ver el proyecto en el navegador con el link "localhost:8000"


Para testear el Job de coste total de ordenes:

1. Correr el comando `php artisan tinker` y en esa consola correr el comando `App\Jobs\OrdersTotalCost::dispatch();` que va a guardar en la tabla 'jobs' el job que se va a ejecutar (Podemos chequear que se guardo en la base de datos con el comando `DB::table('jobs')->get();`)
2. El job ahora se encuentra en la cola, para ejecutarlo manualmente podemos correr en una nueva consola el comando `php artisan queue:work` y va a ejecutar el job que se encuentra en la cola. Este es un ejemplo de lo que va a aparecer en la consola:
PS C:\Users\Jonas\Desktop\Beeping> php artisan queue:work  
  2023-08-03 15:47:03 App\Jobs\OrdersTotalCost ....................................................................................................................................................... RUNNING
Total cost of all orders: 5610.19
  2023-08-03 15:47:03 App\Jobs\OrdersTotalCost .................................................................................................................................................. 65.78ms DONE
3. Podemos chequear que se ejecuto el job en la base de datos en la consola de 'php artisan tinker' con el comando `DB::table('jobs')->get();` y ver que ya no existe ese job en la tabla 'jobs' porque ya se ejecuto

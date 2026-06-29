@SirajHasand
# All commond of laravel :
- php artisan
# Create Contorller :
  - php artisan make:controller controllerName
  
# migration in laravel:
  - php artisan make:migration create_note_table
  -  php artisan migrate 
  

 # Create Model:
  - php artisan make:model ModelName
# Create model and migrations both:

  - php artisan make:model About -m

 # Routes using Resource :
  
  - php artisan make:controller AboutController -r
  -  -r will create all the actions for the route like : show, update, delete , .....
  
  # Migrations:
  - create migrations: php artisan make:migration crate_table_name
  - update to database: php artisan migrate
  - remove the last table from db: 
  - php artisan migarte:rollback
  - 
### Database setup for our project
----------------------------------
1. How can we set and connect database for laravel?<br/>
Answer: For setting up database I will use 'XAMPP' for accessing and creating database. First of all i will start my 'XAMPP' server and will create a database for our project. After completing and making database i will connect it from our database by using '.env' file from our directory and will replace the setup with proper credentilas as -
```.env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=blog
DB_USERNAME=root
DB_PASSWORD=
```

After successfully creating database I need to migrate the database by 
```sh
php artisan migrate
```
Thiswill migrate our database and create necessarytables for us.

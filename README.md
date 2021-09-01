# laravel-task
 ## Table of Contents  
- [Supported versions](#supported-versions)  
- [How to use](#how-to-use)

## Supported versions

Supported Version for Shopperzarena is given below-
    
- PHP Version: 7.4.16 or higher. 

- Laravel Version : 8.57.0

## How to use

- Clone the repository or  __Download the zip file from clone option https://github.com/sunjid/Shopperzarena-an-ecommerce-website.git__
- Extract the files into __htdocs__ folder
- Rename __.env.example__ and make it as __.env__
- Check __.env__ files and  mysql database credentials.
- Then go to __phpmyadmin__ and create a database name same as metioned in __.env__ files.
- After creating database project folder.
- Open the terminal from project folder. 
- Then run command __php artisan:migrate__ 
- After running this command you will see that all the tables are migrated successfully.
- Check the database from localhost/phpmyadmin
- After that run command __php artisan serve__ from terminal 
- This command will start a development server at __http://localhost:8000__ .   
- After that go the browser paste this url __http://localhost:8000/blog__  and click enter.

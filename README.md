# API-Rest-with-API-plateforme-and-Symfony-5-and-JWT

Start project in 3 steps:
1: clone the project with git clone **https://github.com/MedBenYsf/API-Rest-with-API-plateforme-and-Symfony-5-and-JWT.git**
2: run the command **composer install**
3: create data base and run all migrations **symfony console doctrine:database:create** and **symfony console doctrine:migrations:migrate**
4: load fixtures **symfony console doctrine:fixtures:load --purge-with-truncate**
Now get the token user with this call in postman **http://localhost:8000/api/login_check** with an username and password ==admin
then you can call all api urls with get, post, put and delete methods:
**http://localhost:8000/api/articles**
**http://localhost:8000/api/autheurs**
**http://localhost:8000/api/categories**

URL to PDF Symfony 3.1 example
==================

Instalation
-------------

- clone this repository 
- run `composer install` in the project folder


Test
----
Option 1 

in your terminal go to your project `web/` folder
in terminal run command `php -S localhost:8000` 

in your browser go to address

`http://localhost:8000/api/urltopdf?url=http://www.google.com`

or in terminal

`curl -o your_target_file.pdf http://localhost:8000/urltopdf?url=http://www.google.com`

Option 2

in your terminal go to your project folder
spin up vagrant vm by using the command `vagrant up` 

`http://localhost:8080/api/urltopdf?url=http://www.google.com`

or in terminal

`curl -o your_target_file.pdf http://localhost:8080/urltopdf?url=http://www.google.com`

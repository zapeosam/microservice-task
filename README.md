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
`Vagrantfile missing in repo 
having trouble with the combination of
- PUPHPET 
- vagrant 1.8.6 
- virtualbox 5.0.24_Ubuntu r108355`

in your terminal go to your project folder
spin up vagrant vm by using the command `vagrant up` 

`http://localhost:8080/api/urltopdf?url=http://www.google.com`

or in terminal

`curl -o your_target_file.pdf http://localhost:8080/urltopdf?url=http://www.google.com`

Notes
=========

Error handling 
-------------

In this state if anything goes wrong it throws an exception
see https://github.com/zapeosam/urltopdf-microservice/blob/master/PROGRESS.md for more 

Resolution 800x600 in headless mode
-------------

If you want to change the resolution from 800x600 in headless mode
"xvfb" has to be installed on the server

Also in "app/config/config.yml" the config

<pre>
knp_snappy:  
    pdf:
        # ..
        binary:     %kernel.root_dir%/../vendor/h4cc/wkhtmltopdf-amd64/bin/wkhtmltopdf-amd64
        # ..
</pre>

should be changed to 

<pre>
knp_snappy:  
    pdf:
        # ..
        binary:     xvfb-run %kernel.root_dir%/../vendor/h4cc/wkhtmltopdf-amd64/bin/wkhtmltopdf-amd64
        # ..
</pre>
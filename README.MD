# A simple test of [CodeIgniter](https://codeigniter.com/) PHP framework

## This project uses XAMPP to run locally

- After setting up [XAMPP](https://www.apachefriends.org/pt_br/index.html) on your environment, you'll need to create a folder inside htdocs and copy this repo inside of it. On Ubuntu(19.04) htdocs may be found at /opt/lampp/htdocs. 
- You'll need to change permissions or ownership of htdocs directory. To change the permissions use the chmod command, for example: `sudo chmod -R 755 /opt/lampp/htdocs`
- This project will be available at: `localhost:<the port defined on Apache>/<name of the folder you place this project>`

## MySQL setup

- Open phpMyAdmin `http://localhost:<the port defined on Apache>/phpmyadmin`
- Create the dataset `store`
- The default user could be change on [database.php](https://github.com/ymaniz09/codeigniter-alura/blob/master/application/config/database.php)
- Run [dabase.v1.sql](https://github.com/ymaniz09/codeigniter-alura/blob/master/application/temp/dabase.v1.sql) to create the tables
- Run [populatingDatabase.sql](https://github.com/ymaniz09/codeigniter-alura/blob/master/application/temp/populatingDatabase.sql) to populate its tables


### What is CodeIgniter


CodeIgniter is an Application Development Framework - a toolkit - for people
who build web sites using PHP. Its goal is to enable you to develop projects
much faster than you could if you were writing code from scratch, by providing
a rich set of libraries for commonly needed tasks, as well as a simple
interface and logical structure to access these libraries. CodeIgniter lets
you creatively focus on your project by minimizing the amount of code needed
for a given task.


### Release Information


This repo contains in-development code for future releases. To download the
latest stable release please visit the `CodeIgniter Downloads
<https://codeigniter.com/download>`_ page.


### Changelog and New Features


You can find a list of all changes for each release in the `user
guide change log <https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/changelog.rst>`_.


### Server Requirements


PHP version 5.6 or newer is recommended.

It should work on 5.3.7 as well, but we strongly advise you NOT to run
such old versions of PHP, because of potential security and performance
issues, as well as missing features.


### Installation


Please see the `installation section <https://codeigniter.com/user_guide/installation/index.html>`_
of the CodeIgniter User Guide.


### License


Please see the `license
agreement <https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/license.rst>`_.


### Resources


-  `User Guide <https://codeigniter.com/docs>`_
-  `Language File Translations <https://github.com/bcit-ci/codeigniter3-translations>`_
-  `Community Forums <http://forum.codeigniter.com/>`_
-  `Community Wiki <https://github.com/bcit-ci/CodeIgniter/wiki>`_
-  `Community Slack Channel <https://codeigniterchat.slack.com>`_

Report security issues to our `Security Panel <mailto:security@codeigniter.com>`_
or via our `page on HackerOne <https://hackerone.com/codeigniter>`_, thank you.


### Acknowledgement


The CodeIgniter team would like to thank EllisLab, all the
contributors to the CodeIgniter project and you, the CodeIgniter user.


### Project based on: 
- `Curso de CodeIgniter I: Programando elegantemente para a web` available @ [Alura](https://cursos.alura.com.br/course/codeigniter)

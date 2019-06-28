# A simple test of [CodeIgniter](https://codeigniter.com/) PHP framework

## This project uses XAMPP to run locally


- After setting up [XAMPP](https://www.apachefriends.org/pt_br/index.html) on your environment, you may clone this repo inside the htdocs folder. On Ubuntu(19.04) htdocs may be found at /opt/lampp/htdocs. 
- This project will be available at: `localhost:<the port defined on Apache>/codeigniter-alura

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

### Project based on: 


- `Curso de CodeIgniter I: Programando elegantemente para a web` available @ [Alura](https://cursos.alura.com.br/course/codeigniter)

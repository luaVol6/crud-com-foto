create database php_com_mysql;

use php_com_mysql;

 create table usuarios(
        id int not null auto_increment primary key,
        nome varchar(100) not null,
        email varchar(100) not null,
        senha int not null,
         foto varchar (20)
 );
create database dynamic_project;

use dynamic_project;

create table books(book_id int primary key AUTO_INCREMENT,title varchar(50) not null,author varchar(50) not null,publisher varchar(50),year_published year,isbn varchar(20) not null);


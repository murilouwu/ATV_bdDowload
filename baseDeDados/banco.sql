CREATE DATABASE db_file;
USE db_file;

CREATE TABLE tb_user(
    cd INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nm_user VARCHAR(110),
    mail_user VARCHAR(140),
    pass_user VARCHAR(60)
);

CREATE TABLE tb_file(
    cd INT PRIMARY KEY AUTO_INCREMENT,
    nm_file VARCHAR(100)
);
--Creation de la base de donnée
create database repertoire;
use repertoire;

--Creation de la table
 create table annuaire(
     id_annuaire int(3) Primary key auto_increment,
     nom varchar(30),
     prenom varchar(30),
     telephone int(10),
     proffession varchar(30),
     ville varchar(30),
     codepostal int(5),
     adresse varchar(30),
     date_de_naissance date,
     sexe enum('M','F'),
     description text
 );
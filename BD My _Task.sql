﻿
-- Database: my_task --

-- DROP DATABASE my_task;

CREATE DATABASE my_task;

CREATE TABLE users
(
  id serial NOT NULL,
  email character varying(100) NOT NULL,
  password character varying(100) NOT NULL,
  remember_token character varying(100),
  CONSTRAINT pk_users PRIMARY KEY (id)
);

CREATE TABLE dashboard
(
 id serial NOT NULL,
 titulo character varying(50) NOT NULL,
 prioridad character varying(20) NOT NULL,
 descripcion character varying(250) NOT NULL,
 estado character varying(20) NOT NULL,
 users_id integer,
 CONSTRAINT pk_dashboard PRIMARY KEY (id),
 constraint fk_users foreign key (users_id) references users (id)
);

 alter table users
 add constraint UQ_users_email
 unique (email); 

 
-- Drop Tables --

-- DROP TABLE users;

-- DROP TABLE dashboard;


 
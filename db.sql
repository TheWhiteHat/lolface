USE the_best_database;

SET FOREIGN_KEY_CHECKS=0;

DROP TABLE IF EXISTS users;

CREATE TABLE users (
   id int(8) NOT NULL AUTO_INCREMENT,
   username nvarchar(126) NOT NULL UNIQUE,
   password nvarchar(100) NOT NULL,
   PRIMARY KEY (id)
);

DROP TABLE IF EXISTS post;

CREATE TABLE post (
   username nvarchar(126) NOT NULL,
   message text,
   is_private BIT
);

SET FOREIGN_KEY_CHECKS=1;

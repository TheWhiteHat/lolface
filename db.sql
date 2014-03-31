USE the_best_database;

DROP TABLE IF EXISTS users;

CREATE TABLE users (
   id int(8) NOT NULL AUTO_INCREMENT,
   username nvarchar(126) NOT NULL,
   password nvarchar(100) NOT NULL,
   PRIMARY KEY (id)
);

DROP TABLE IF EXISTS post;

CREATE TABLE post (
   user_id int(8) NOT NULL,
   message text,
   is_private BIT,
   FOREIGN KEY (user_id)
    REFERENCES users(id)
    ON DELETE CASCADE
    ON UPDATE CASCADE
);

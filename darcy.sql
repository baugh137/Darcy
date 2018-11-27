use heroku_7cdbe1bf81924d3;

DROP TABLE IF EXISTS user;

CREATE TABLE user(
	userID	INT auto_increment PRIMARY KEY,
	username VARCHAR(128) NOT NULL,
	userpassword VARCHAR(128) NOT NULL
);

INSERT INTO user(username, userpassword)
VALUES('Dee', '123D');

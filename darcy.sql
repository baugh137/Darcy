use heroku_7cdbe1bf81924d3;

DROP TABLE IF EXISTS user;

CREATE TABLE user(
	userID	INT auto_increment PRIMARY KEY,
	username VARCHAR(128) NOT NULL,
	userpassword VARCHAR(128) NOT NULL
);

INSERT INTO user(username, userpassword)
VALUES('Dee', '123D');

DROP TABLE IF EXISTS UserPurchase;

CREATE TABLE UserPurchase(
	username VARCHAR(128) NOT NULL,
	dog VARCHAR(128) NOT NULL,
	cost VARCHAR(128) NOT NULL
);

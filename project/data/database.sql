.headers ON
.mode columns

DROP TABLE IF EXISTS User;
CREATE TABLE User (
	idUser INTEGER PRIMARY KEY AUTOINCREMENT,
	username VARCHAR2(100),
	password VARCHAR2(255),
	lastLoginDate DATE,
	registerDate DATE,
	gender VARCHAR2(15),
	image VARCHAR2(255)
);

DROP TABLE IF EXISTS Poll;
CREATE TABLE Poll (
	idPoll INTEGER PRIMARY KEY AUTOINCREMENT,
	idUser INTEGER NOT NULL,
	isPublic INTEGER,
	anyoneCanAddOptions INTEGER,
	image VARCHAR2(255),
	idCategory INTEGER NOT NULL
);

DROP TABLE IF EXISTS Question;
CREATE TABLE Question (
	idQuestion INTEGER PRIMARY KEY AUTOINCREMENT,
	idPoll INTEGER NOT NULL,
	question VARCHAR2(255) NOT NULL,
	image VARCHAR2(255)
);


DROP TABLE IF EXISTS Option;
CREATE TABLE Option (
	idOption INTEGER PRIMARY KEY AUTOINCREMENT,
	idQuestion INTEGER NOT NULL,
	counter INTEGER,
	option VARCHAR2(255)
);

DROP TABLE IF EXISTS UserOption;
CREATE TABLE UserOption (
	idUserOption INTEGER PRIMARY KEY AUTOINCREMENT,
	idUser INTEGER NOT NULL,
	idOption INTEGER NOT NULL
);

DROP TABLE IF EXISTS Category;
CREATE TABLE Category (
	idCategory INTEGER PRIMARY KEY AUTOINCREMENT,
	category VARCHAR2(100)
);

INSERT INTO Category (category) VALUES ("Culture");
INSERT INTO Category (category) VALUES ("Sports");
INSERT INTO Category (category) VALUES ("Technology");
INSERT INTO Category (category) VALUES ("Media");
INSERT INTO Category (category) VALUES ("Other");
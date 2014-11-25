/** database.sql
*	Autores:
*	Andre Pires - ei12058
*   Henrique Ferrolho - ei12079
*	Joao Pereira - ei12023
*/

.headers ON
.mode columns

DROP TABLE IF EXISTS User;

CREATE TABLE User (
	idUser INTEGER PRIMARY KEY AUTOINCREMENT,
	username VARCHAR2(100) CHECK (username != NULL AND username != ""),
	registerDate DATE CHECK (registerDate <= date('now')),
	lastLoginDate DATE CHECK (lastLoginDate <= date('now')),
	password VARCHAR2(32)
);

DROP TABLE IF EXISTS Poll;

CREATE TABLE Poll (
	idPoll INTEGER PRIMARY KEY AUTOINCREMENT,
	isActive INTEGER CHECK (isActive == 0 OR isActive == 1),
	image VARCHAR2(255),
	isPublic INTEGER CHECK (isPublic == 0 OR isPublic == 1),
	idUser INTEGER NOT NULL,
	question VARCHAR2(255)
);

DROP TABLE IF EXISTS Answer;

CREATE TABLE Answer (
	idAnswer INTEGER PRIMARY KEY AUTOINCREMENT,
	idPoll INTEGER NOT NULL,
	idUser INTEGER NOT NULL,
	answer VARCHAR2(255)
);
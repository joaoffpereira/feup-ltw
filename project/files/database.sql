** usersData.sql
*	Autores:
*   Henrique Ferrolho - ei12079
*	Joao Pereira - ei12023
*/

.headers ON
.mode columns

DROP TABLE IF EXISTS User;

CREATE TABLE User (
	idUser INTEGER PRIMARY KEY AUTOINCREMENT,
	name VARCHAR2(100) CHECK (name != NULL AND name != ""),
	registerDate INTEGER CHECK (registerDate <= date('now')),
	lastLoginDate INTEGER CHECK (lastLoginDate <= date('now')),
	password VARCHAR2(32)
);

DROP TABLE IF EXISTS Polls;

CREATE TABLE Polls (
	idPoll INTEGER PRIMARY KEY AUTOINCREMENT,
	isActive INTEGER CHECK (isActive == 0 OR isActive == 1),
	// TODO finish database
);
drop table if exists users;
CREATE TABLE users (
	id_user	INTEGER NOT NULL,
	username varchar(50),
	email varchar(256),
	password varchar(256),
	PRIMARY KEY(id_user)
);

drop table if exists Beacon;
CREATE TABLE Beacon (
	id_beacon INTEGER NOT NULL,
	salle varchar(50),
	adresseMac varchar(250) NOT NULL,
	PRIMARY KEY(id_beacon)
);

drop table if exists Contenu;
CREATE TABLE Contenu (
	id_contenu	INTEGER NOT NULL,
	titre varchar(50),
	description varchar(256),
	langue varchar(50),
	PRIMARY KEY(id_contenu)
);

drop table if exists Connexion;
CREATE TABLE Connexion (
	id_contenu	INTEGER,
	id_beacon	INTEGER,
	PRIMARY KEY(id_contenu, id_beacon),
	FOREIGN KEY(id_beacon) REFERENCES Beacon(id_beacon),
	FOREIGN KEY(id_contenu) REFERENCES Contenu(id_contenu)
)





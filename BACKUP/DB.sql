CREATE DATABASE EventAdvisor;

CREATE TABLE Registration(
	id INTEGER AUTO_INCREMENT,
	UFname CHAR(55) NOT NULL,
	ULname CHAR(55) NOT NULL,
	UPswd CHAR(255) NOT NULL,
	Uemail CHAR(15) NOT NULL,
	Uphone CHAR(10) DEFAULT 'N/A',
	Uadmin CHAR(55) DEFAULT 0,
	UuserName CHAR(55) NOT NULL,
	PRIMARY KEY(id, Uemail)
);

CREATE TABLE Events(
	Eid	INT	AUTO_INCREMENT,
	Efname VARCHAR(26) NOT NULL,
	Elname VARCHAR(26) NOT NULL, 
	Evename VARCHAR(26) NOT NULL, 
	Eaddress VARCHAR(255) NOT NULL,
	Ecity VARCHAR(50) NOT NULL,
	Estate CHAR(10) NOT NULL,
	Ezip INT(5) NOT NULL,
	EphoneNumber INT(10),
	Etype VARCHAR(26) NOT NULL,
	Edescription VARCHAR(26) NOT NULL,
	Epic BLOB,
	EstartDate VARCHAR(20) NOT NULL,
	EendDate VARCHAR(20) NOT NULL,
	Eother CHAR(255),
	PRIMARY KEY(Eid)
);

USERNAME:JetDevSQL
PASSWORD:DevTeamSQL!!12
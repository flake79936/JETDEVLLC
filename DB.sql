CREATE DATABASE EventAdvisor;

CREATE TABLE Registration(
	id INTEGER AUTO_INCREMENT,
	UFname CHAR(255) NOT NULL,
	ULname CHAR(255) NOT NULL,
	UPswd CHAR(255) NOT NULL,
	Uemail CHAR(255) NOT NULL,
	Uphone CHAR(15) DEFAULT 'N/A',
	Uadmin CHAR(1) DEFAULT 0,
	UuserName CHAR(255) NOT NULL,
	PRIMARY KEY(id, UuserName)
);

CREATE TABLE Events(
	Eid	INT	AUTO_INCREMENT,
	UuserName CHAR(255) NOT NULL,
	Evename VARCHAR(26) NOT NULL,
	EstartDate VARCHAR(20) NOT NULL,
	EendDate VARCHAR(20) NOT NULL,
	Eaddress VARCHAR(255) NOT NULL,
	Ecity VARCHAR(50) NOT NULL,
	Estate CHAR(10) NOT NULL,
	Ezip INT(5) NOT NULL,
	EphoneNumber INT(10),
	Edescription VARCHAR(26) NOT NULL,
	Etype VARCHAR(26) NOT NULL,
	Ewebsite VARCHAR(26) NOT NULL,
	Ehashtag CHAR(255),
	Efacebook CHAR(255),
	Etwitter CHAR(255),
	Egoogle CHAR(255),
	Eflyer BLOB,
	Eother CHAR(255),
	PRIMARY KEY(Eid, UuserName)
);

USERNAME:JetDevSQL
PASSWORD:DevTeamSQL!!12
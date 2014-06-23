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
	Ehashtage CHAR(255),
	Efacebook CHAR(255),
	Etwitter CHAR(255),
	Egoogle CHAR(255),
	Eflyer BLOB,
	Eother CHAR(255),
	PRIMARY KEY(Eid, UuserName)
);

USERNAME:JetDevSQL
PASSWORD:DevTeamSQL!!12

INSERT INTO 'Events'('UuserName','Evename','EstartDate','EendDate','Eaddress','Ecity','Estate','Ezip','Edescription','Etype','Ewebsite') VALUES ("ecorral2","a","12/15/4651","02/21/1234","11432 Backus","EL Paso","Texas",79925,"this is a test from a - n","fair","none");

INSERT INTO 'Events'('UuserName','Evename','EstartDate','EendDate','Eaddress','Ecity','Estate','Ezip','Edescription','Etype','Ewebsite') VALUES ("ecorral2","b","12/15/4651","02/21/1234","11432 Backus","EL Paso","Texas",79925,"this is a test from a - n","fair","none")

INSERT INTO 'Events'('UuserName','Evename','EstartDate','EendDate','Eaddress','Ecity','Estate','Ezip','Edescription','Etype','Ewebsite') VALUES ("ecorral2","c","12/15/4651","02/21/1234","11432 Backus","EL Paso","Texas",79925,"this is a test from a - n","fair","none")

INSERT INTO 'Events'('UuserName','Evename','EstartDate','EendDate','Eaddress','Ecity','Estate','Ezip','Edescription','Etype','Ewebsite') VALUES ("ecorral2","d","12/15/4651","02/21/1234","11432 Backus","EL Paso","Texas",79925,"this is a test from a - n","fair","none")

INSERT INTO 'Events'('UuserName','Evename','EstartDate','EendDate','Eaddress','Ecity','Estate','Ezip','Edescription','Etype','Ewebsite') VALUES ("ecorral2","e","12/15/4651","02/21/1234","11432 Backus","EL Paso","Texas",79925,"this is a test from a - n","fair","none")

INSERT INTO 'Events'('UuserName','Evename','EstartDate','EendDate','Eaddress','Ecity','Estate','Ezip','Edescription','Etype','Ewebsite') VALUES ("ecorral2","f","12/15/4651","02/21/1234","11432 Backus","EL Paso","Texas",79925,"this is a test from a - n","fair","none")

INSERT INTO 'Events'('UuserName','Evename','EstartDate','EendDate','Eaddress','Ecity','Estate','Ezip','Edescription','Etype','Ewebsite') VALUES ("ecorral2","g","12/15/4651","02/21/1234","11432 Backus","EL Paso","Texas",79925,"this is a test from a - n","fair","none")

INSERT INTO 'Events'('UuserName','Evename','EstartDate','EendDate','Eaddress','Ecity','Estate','Ezip','Edescription','Etype','Ewebsite') VALUES ("ecorral2","h","12/15/4651","02/21/1234","11432 Backus","EL Paso","Texas",79925,"this is a test from a - n","fair","none")

INSERT INTO 'Events'('UuserName','Evename','EstartDate','EendDate','Eaddress','Ecity','Estate','Ezip','Edescription','Etype','Ewebsite') VALUES ("ecorral2","j","12/15/4651","02/21/1234","11432 Backus","EL Paso","Texas",79925,"this is a test from a - n","fair","none")

INSERT INTO 'Events'('UuserName','Evename','EstartDate','EendDate','Eaddress','Ecity','Estate','Ezip','Edescription','Etype','Ewebsite') VALUES ("ecorral2","k","12/15/4651","02/21/1234","11432 Backus","EL Paso","Texas",79925,"this is a test from a - n","fair","none")

INSERT INTO 'Events'('UuserName','Evename','EstartDate','EendDate','Eaddress','Ecity','Estate','Ezip','Edescription','Etype','Ewebsite') VALUES ("ecorral2","l","12/15/4651","02/21/1234","11432 Backus","EL Paso","Texas",79925,"this is a test from a - n","fair","none")

INSERT INTO 'Events'('UuserName','Evename','EstartDate','EendDate','Eaddress','Ecity','Estate','Ezip','Edescription','Etype','Ewebsite') VALUES ("ecorral2","m","12/15/4651","02/21/1234","11432 Backus","EL Paso","Texas",79925,"this is a test from a - n","fair","none")

INSERT INTO 'Events'('UuserName','Evename','EstartDate','EendDate','Eaddress','Ecity','Estate','Ezip','Edescription','Etype','Ewebsite') VALUES ("ecorral2","n","12/15/4651","02/21/1234","11432 Backus","EL Paso","Texas",79925,"this is a test from a - n","fair","none")

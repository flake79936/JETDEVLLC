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


CREATE TRIGGER lcase_EAddress BEFORE INSERT ON Events FOR EACH ROW SET NEW.EAddress = LOWER(NEW.Eaddress);
CREATE TRIGGER lcase_Ecity BEFORE INSERT ON Events FOR EACH ROW SET new.Ecity = LOWER(NEW.Ecity);
CREATE TRIGGER lcase_Edescription BEFORE INSERT ON Events FOR EACH ROW SET new.Edescription = LOWER(NEW.Edescription); 
CREATE TRIGGER lcase_Efacebook BEFORE INSERT ON Events FOR EACH ROW SET new.Efacebook = LOWER(NEW.Efacebook);
CREATE TRIGGER lcase_Egoogle BEFORE INSERT ON Events FOR EACH ROW SET new.Egoogle = LOWER(NEW.Egoogle);
CREATE TRIGGER lcase_Ehashtag BEFORE INSERT ON Events FOR EACH ROW SET new.Ehashtag = LOWER(NEW.Ehashtag);
CREATE TRIGGER lcase_Eother BEFORE INSERT ON Events FOR EACH ROW SET new.Eother = LOWER(NEW.Eother)
CREATE TRIGGER lcase_EState BEFORE INSERT ON Events FOR EACH ROW SET new.EState = LOWER(NEW.Estate);
CREATE TRIGGER lcase_Etwitter BEFORE INSERT ON Events FOR EACH ROW SET new.Etwitter = LOWER(NEW.Etwitter);
CREATE TRIGGER lcase_Evename BEFORE INSERT ON Events FOR EACH ROW SET new.Evename = LOWER(NEW.Evename);
CREATE TRIGGER lcase_Ewebsite BEFORE INSERT ON Events FOR EACH ROW SET new.Ewebsite = LOWER(NEW.Ewebsite);




USERNAME:JetDevSQL
PASSWORD:DevTeamSQL!!12
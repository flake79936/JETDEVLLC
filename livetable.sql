/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.6.12-log : Database - livetable
*********************************************************************
*/


/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `users` */

DROP TABLE IF EXISTS `Events`;


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
	Eflyer CHAR(255),
	Eother CHAR(255),
	PRIMARY KEY(Eid, UuserName)
);


/*Data for the table `users` */

-- insert  into `Events`(`id`,`name`,`email`,`country`,`mobile`) values (1,'Arun Yadav','arunyadav12@yahoo.com','India','9878451256'),(2,'Rakesh Sharma','rakeshsharma@gmail.com','India','9887451258'),(3,'Kartavya Soni','kartavyasoni21@hotmail.com','Australia','9929784582'),(4,'Robin Saxena','robins@reddif.com','US','9460589625'),(5,'Gaurav Tejala','gauravtej@gmail.com','India','969487452'),(6,'Vikash Jangir','vickyjan@gmail.com','India','9874589631'),(7,'Rahul Sharma','rahulsharma@rediff.com','India','9887452541'),(8,'Aditya Vijayvargiya','adityavijay@gmail.com','India','3652485275'),(9,'Ritika Shrivastav','riitkashrivastav@yahoo.com','India','9887452148'),(10,'Amit Sharma','amitsharma@gmail.com','UAE','988732145'),(11,'Anjil Panchal','anjilpanchal@gmail.com','India','9929365478'),(12,'Arvind Jangir   ','arvindjangir@gmail.com','US','8745126320'),(13,'Jitu Thakur','jituthakur@yahoo.co.in','India','9829653254'),(14,'Vimal Parihar     ','vimalpar23@yahoo.com','India','98872011456'),(15,'Manish Jangir ','mjangir70@gmail.com','India','9602956896');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

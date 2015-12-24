
CREATE TABLE `app_system` (
  `id` INTEGER PRIMARY KEY ASC,
  `app_id` INTEGER unsigned NOT NULL,
  `os_id` INTEGER unsigned NOT NULL
);
INSERT INTO "app_system" VALUES(3,3,4);
INSERT INTO "app_system" VALUES(4,3,1);
INSERT INTO "app_system" VALUES(5,3,3);
INSERT INTO "app_system" VALUES(7,1,2);
INSERT INTO "app_system" VALUES(8,4,2);
INSERT INTO "app_system" VALUES(9,5,1);
INSERT INTO "app_system" VALUES(10,5,2);
INSERT INTO "app_system" VALUES(11,5,7);
INSERT INTO "app_system" VALUES(12,6,6);
INSERT INTO "app_system" VALUES(14,7,8);
INSERT INTO "app_system" VALUES(17,10,2);
INSERT INTO "app_system" VALUES(18,10,3);
INSERT INTO "app_system" VALUES(19,1,1);
INSERT INTO "app_system" VALUES(20,1,8);
INSERT INTO "app_system" VALUES(21,7,1);
INSERT INTO "app_system" VALUES(22,7,2);
INSERT INTO "app_system" VALUES(23,7,3);
INSERT INTO "app_system" VALUES(24,7,4);
INSERT INTO "app_system" VALUES(26,7,7);

CREATE TABLE `applications` (
  `id` INTEGER PRIMARY KEY ASC,
  `app_name` TEXT NOT NULL,
  `date_submitted` TEXT NOT NULL,
  `app_description` TEXT NOT NULL,
  `users_id` INTEGER unsigned NOT NULL,
  `category_id` INTEGER unsigned NOT NULL,
  `subcategory_id` INTEGER NOT NULL
);
INSERT INTO "applications" VALUES(1,'Evernota','2015-03-04','Prends pleins de notes',1,5,3);
INSERT INTO "applications" VALUES(3,'asddddddddddd','2015-10-08','L''alphabet pour frustré',1,4,1);
INSERT INTO "applications" VALUES(4,'Robot Cats Attack','2011-01-03','Les chats de se monde résisteront-ils à cette attaque sanglante ?',1,4,2);
INSERT INTO "applications" VALUES(5,'123 News','2035-01-01','123 News Flash 123',1,5,4);
INSERT INTO "applications" VALUES(6,'Rare Vlad','2035-01-01','Rare Vlad can only be seen once every 1 million app',4,7,11);
INSERT INTO "applications" VALUES(7,'User App','2035-01-01','User application',9,7,10);
INSERT INTO "applications" VALUES(10,'Transit','2015-11-12','abc',4,7,6);

CREATE TABLE `categories` (
  `id` INTEGER PRIMARY KEY ASC,
  `name` TEXT NOT NULL
);
INSERT INTO "categories" VALUES(4,'Games');
INSERT INTO "categories" VALUES(5,'News');
INSERT INTO "categories" VALUES(6,'Music');
INSERT INTO "categories" VALUES(7,'Utilities');
INSERT INTO "categories" VALUES(8,'Productivity');

CREATE TABLE `fournisseurs` (
  `id` INTEGER PRIMARY KEY ASC,
  `name` TEXT NOT NULL,
  `filename` TEXT NULL
);
INSERT INTO "fournisseurs" VALUES(1,'Google','uploads/fourn_bg_01.png');
INSERT INTO "fournisseurs" VALUES(2,'Microsoft','uploads/fourn_bg_02.png');
INSERT INTO "fournisseurs" VALUES(3,'MSI','uploads/fourn_bg_03.png');
INSERT INTO "fournisseurs" VALUES(4,'EA','uploads/fourn_bg_04.png');

CREATE TABLE `o_system` (
  `id` INTEGER PRIMARY KEY ASC,
  `name` TEXT NOT NULL,
  `fournisseur_id` INTEGER unsigned NOT NULL
);
INSERT INTO "o_system" VALUES(1,'Jelly Bean',1);
INSERT INTO "o_system" VALUES(2,'KitKat',1);
INSERT INTO "o_system" VALUES(3,'Windows 10',2);
INSERT INTO "o_system" VALUES(4,'Windows RT',2);
INSERT INTO "o_system" VALUES(5,'Anti Ubi',4);
INSERT INTO "o_system" VALUES(6,'Windows XP',2);
INSERT INTO "o_system" VALUES(7,'Marshmallow',1);
INSERT INTO "o_system" VALUES(8,'Lollipop',1);

CREATE TABLE `subcategories` (
  `id` INTEGER PRIMARY KEY ASC,
  `name` TEXT NOT NULL,
  `category_id` INTEGER NOT NULL
);
INSERT INTO "subcategories" VALUES(1,'Action',4);
INSERT INTO "subcategories" VALUES(2,'Aventure',4);
INSERT INTO "subcategories" VALUES(3,'RSS Reader',5);
INSERT INTO "subcategories" VALUES(4,'Magazines',5);
INSERT INTO "subcategories" VALUES(5,'Music Player',6);
INSERT INTO "subcategories" VALUES(6,'Math',7);
INSERT INTO "subcategories" VALUES(7,'Cloud',8);
INSERT INTO "subcategories" VALUES(8,'Developer',7);
INSERT INTO "subcategories" VALUES(9,'Widgets',7);
INSERT INTO "subcategories" VALUES(10,'Transport',7);
INSERT INTO "subcategories" VALUES(11,'Weather',7);
INSERT INTO "subcategories" VALUES(12,'RPG',4);
INSERT INTO "subcategories" VALUES(13,'Sports',4);
INSERT INTO "subcategories" VALUES(14,'Racing',4);
INSERT INTO "subcategories" VALUES(15,'Comics',5);
INSERT INTO "subcategories" VALUES(16,'TV',5);
INSERT INTO "subcategories" VALUES(17,'Notes',8);

CREATE TABLE "users" ("id" INTEGER PRIMARY KEY ,"username" TEXT NOT NULL ,"password" TEXT NOT NULL ,"role" TEXT NOT NULL ,"email" TEXT NOT NULL ,"created" TEXT NOT NULL ,"modified" TEXT NOT NULL ,"active" INTEGER NOT NULL  DEFAULT ('0') );
INSERT INTO "users" VALUES(1,'admin','$2a$10$2vcw.ee1dZD4Pbr9tyo5tO9VoCVOYfnHmijp.RF5Y7q9cIn4BQc/i','admin','vladasd@hotmail.com','2015-10-07','2015-10-08',1);
INSERT INTO "users" VALUES(4,'Vlad','$2a$10$vvc5/zpGiyzPxFFfmg3vMOeyeWoaCl8cbJgLgz9Gi5rL0eUD6STZO','admin','','2015-10-07','2015-10-07',1);
INSERT INTO "users" VALUES(5,'fran','$2a$10$MtnmVxaiJEkOOxY4gxpKXuvF0cZ0/0QI6aVTZbDDb2BNJbf7oqsmC','admin','fran@fr.fr','2015-10-07','2015-10-08',1);
INSERT INTO "users" VALUES(6,'eng','$2a$10$dqHC25gEKfqaVCqWdgTXr.ovv95ksoePcWab2rvBQ/eDEIcHkyWuK','user','eng@eng.com','2015-10-07','2015-10-09',1);
INSERT INTO "users" VALUES(8,'Vian','$2a$10$PL3IZEP9polnTVyQlcAzheEbd6VH4MNEYrVpxnRtsXyQkp97isfmy','user','vian@vian.com','2015-10-08','2015-10-09',0);
INSERT INTO "users" VALUES(9,'user','$2a$10$sH3k1LtcImsWzly2efih..9kHW5crcvDwp5YZ8pyY8rEx78Ow7kzW','user','user@localhost.com','2015-10-09','2015-10-09',0);
INSERT INTO "users" VALUES(11,'new','$2a$10$YTBIgCmvV/iGvTY6Jv9EUeMLX4a6ZxrysDhQGpzlrzPOmbP4V61HC','admin','vladkimkim@hotmail.com','2015-11-12','2015-11-12',0);

<?php
$host = 'localhost';
$con = mysql_connect($host);
mysql_select_db("game",$con);
/*mysql_query("drop database gamedb", $con);
mysql_query("create database gamedb", $con);
mysql_query("drop table video_game", $con); 
mysql_query("drop table platform", $con); mysql_query("
drop table platform_type", $con); mysql_query("
drop table requirements", $con); mysql_query("
drop table developer", $con); mysql_query("
drop table publisher", $con); mysql_query("		 
drop table content_rating", $con); mysql_query("
drop table users", $con); mysql_query("
drop table gamer_type", $con); mysql_query("
drop table plays", $con); */
mysql_query("
create table video_game
(
id int not null,
name varchar(50) not null,
genre varchar(100) not null,
release_date varchar(10),  
primary key(id)
)", $con); 
mysql_query("
create table developer
(
id int not null,
g_id int not null,
name varchar(50),
headquarters varchar(30), 
country varchar(30),
estd int check(estd > 1000 and estd < 2017),
primary key(id),
foreign key (g_id) references video_game(id)
	on delete cascade
)", $con); 
mysql_query("	
create table publisher
(
id int not null,
g_id int not null,
name varchar(50),
country varchar(30),
headquarters varchar(30), 
estd int check(estd > 1000 and estd < 2017),
primary key(id),
foreign key (g_id) references video_game(id)
	on delete cascade
)", $con); 
mysql_query("
create table platform_type 
(
id int not null,
type_info varchar(30) not null,
primary key(id)
)", $con); 
mysql_query("

create table requirements
(
id int not null,
processor varchar(100) not null,
ram int not null,
os varchar(100) not null,
gpu varchar(100) not null, 
disk_space int not null,
primary key(id)
)", $con); 
mysql_query("
create table content_rating	
(
category varchar(4) not null,
descriptor varchar(20) not null,
info varchar(100) not null,
primary key(category)
)", $con); 
mysql_query("
create table platform
(
g_id int not null,
type_id int not null,
brand varchar(20),	
name varchar(50),	
req_id int,	
foreign key(req_id) references requirements(id),
foreign key (g_id) references video_game(id)
	on delete cascade
)", $con); 
mysql_query("
create table gamer_type 
(
id int not null,
type varchar(10) not null,
primary key(id)
)", $con); 
mysql_query("
create table users
(
id int not null,
alias varchar(30) not null, 
g_type_id int not null,
foreign key (g_type_id) references gamer_type(id),
primary key(id)
)", $con); 
mysql_query("
create table plays
(
u_id int not null,
g_id int not null,
type_id int not null,
foreign key(type_id) references platform_type(id)
)", $con); 
mysql_query("alter table video_game add category varchar(4)", $con); 
mysql_query("  alter table video_game add foreign key(category) references content_rating(category)", $con); 
mysql_query("insert into platform_type values(1,'Console')", $con); 
mysql_query("insert into platform_type values(2,'PC')", $con); 
mysql_query("insert into platform_type values(3,'Handheld')", $con); 
mysql_query("insert into platform_type values(4,'Smartphone')", $con); 
mysql_query("insert into content_rating values('C','Early Childhood','Content is intended for young children.')", $con); 
mysql_query("insert into content_rating values('E','Everyone','Content is generally suitable for all ages. ')", $con); 
mysql_query("insert into content_rating values('E10+','Everyone 10+','Content is generally suitable for ages 10 and up.')", $con); 
mysql_query("insert into content_rating values('T','Teen','Content is generally suitable for ages 13 and up.')", $con);
 mysql_query("insert into content_rating values('M','Mature','Content is generally suitable for ages 17 and up. ')", $con); 
mysql_query("insert into content_rating values('A','Adults Only','Content is intended for young children.')", $con); 
mysql_query("insert into content_rating values('RP','Rating Pending','Not yet assigned a final ESRB rating.')", $con); 
mysql_query("insert into gamer_type values(1,'Newbie')", $con); 
mysql_query("insert into gamer_type values(2,'Casual')", $con); 
mysql_query("insert into gamer_type values(3,'Core')", $con); 
mysql_query("insert into gamer_type values(4,'Hardcore')", $con); 
mysql_query("insert into gamer_type values(5,'Professional')", $con); 
mysql_query("insert into gamer_type values(6,'Retro')", $con); 
/*mysql_query("

/*create assertion PC_req check (not exists(select req_id from platform where type_id in (select id from type where type_info <> 'PC')) and exists(select req_id from platform where type_id in (select id from type where type_info = 'PC')))", $con); 
*/

/*The Lego Movie Videogame*/
mysql_query("insert into video_game values (1,'The Lego Movie Videogame','Action, Adventure','02-07-2014','E10+')", $con); mysql_query("
insert into developer values (1,1,'TT Games','Maidenhead','United Kingdom',2005)", $con); mysql_query("
insert into publisher values (1,1,'Warner Bros. Interactive Entertainment','Burbank','United States',2004)", $con); mysql_query("
insert into requirements values(1,'Intel Pentium Dual Core E2180 (2*2000 MHz) or better',2,'Windows XP/Vista/7/8','NVIDIA GeForce 7600 GS or better',10)", $con); mysql_query("
insert into platform(g_id,type_id,brand,name) values(1,1,'Sony','Playstation 3')", $con); mysql_query("
insert into platform(g_id,type_id,brand,name) values(1,1,'Microsoft','Xbox One')", $con); mysql_query("
insert into platform(g_id,type_id,brand,name) values(1,1,'Nintendo','Wii U')", $con); mysql_query("
insert into platform(g_id,type_id,brand,name) values(1,3,'Sony','Playstation Vita')", $con); mysql_query("
insert into platform(g_id,type_id,brand,name) values(1,3,'Nintendo','3DS')", $con); mysql_query("
insert into platform(g_id,type_id,req_id) values(1,2,1)", $con);
?>

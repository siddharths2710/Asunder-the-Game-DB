create table video_game
(
id int not null,
name varchar(50) not null,
genre varchar(100) not null,
release_date varchar(10),  
primary key(id)
);

create table developer
(
id int not null,
g_id int not null,
name varchar(50),
headquarters varchar(30), /*city name*/
country varchar(30),
estd int check(estd > 1000 and estd < 2017),
primary key(id),
foreign key (g_id) references video_game(id)
	on delete cascade
);	
create table publisher
(
id int not null,
g_id int not null,
name varchar(50),
country varchar(30),
headquarters varchar(30), /*city name*/
estd int check(estd > 1000 and estd < 2017),
primary key(id),
foreign key (g_id) references video_game(id)
	on delete cascade
);

/* Normalizing Platform and Plays*/
create table platform_type /*Platform Types*/
(
id int not null,
type_info varchar(30) not null,
primary key(id)
);

create table requirements		/*Only for PC*/
(
id int not null,
processor varchar(100) not null,
ram int not null,	/*in gb <Handle in select statements>*/
os varchar(100) not null,
gpu varchar(100) not null, 
disk_space int not null, /*in gb <Handle in select statements>*/
primary key(id)
);

create table content_rating	/*Normalized table for video_game */
(
category varchar(4) not null,
descriptor varchar(20) not null,
info varchar(100) not null,
primary key(category)
);

create table platform
(
g_id int not null,
type_id int not null,
brand varchar(20),	
name varchar(50),	
req_id int,	/*Normalizing*/
foreign key(req_id) references requirements(id),
foreign key (g_id) references video_game(id)
	on delete cascade
);

create table gamer_type /*Normalized table for users*/
(
id int not null,
type varchar(10) not null,
primary key(id)
);

create table users
(
id int not null,
alias varchar(30) not null, 
g_type_id int not null,	/*Normalizing*/
foreign key (g_type_id) references gamer_type(id),
primary key(id)
);

create table plays
(
u_id int not null,
g_id int not null,
type_id int not null,
foreign key(type_id) references platform_type(id)
);

alter table video_game add category varchar(4);  
alter table video_game add foreign key(category) references content_rating(category);


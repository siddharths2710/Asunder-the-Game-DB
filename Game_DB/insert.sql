/*All possible platform_types*/
insert into platform_type values(1,'PC');
insert into platform_type values(2,'Console');
insert into platform_type values(3,'Handheld');
insert into platform_type values(4,'Smartphone');


/*All possible content ratings*/
insert into content_rating values('C','Early Childhood','Content is intended for young children.');
insert into content_rating values('E','Everyone','Content is generally suitable for all ages. ');
insert into content_rating values('E10+','Everyone 10+','Content is generally suitable for ages 10 and up.');
insert into content_rating values('T','Teen','Content is generally suitable for ages 13 and up.');
insert into content_rating values('M','Mature','Content is generally suitable for ages 17 and up. ');
insert into content_rating values('A','Adults Only','Content is intended for young children.');
insert into content_rating values('RP','Rating Pending','Not yet assigned a final ESRB rating.');


/*All possible Gamer Types*/
insert into gamer_type values(1,'Newbie');
insert into gamer_type values(2,'Casual');
insert into gamer_type values(3,'Core');
insert into gamer_type values(4,'Hardcore');
insert into gamer_type values(5,'Professional');
insert into gamer_type values(6,'Retro');


/*Video Game,platform & requirements*/
insert into video_game values (1,'The Witcher 3','Role playing , Adventure','19-05-2015','M');
insert into requirements values(1,'Intel CPU i5-2500K 3.3Ghz) or better',6,'Windows 7/8 64bit','NVIDIA GeForce GTX 660 or better',40);
insert into platform(g_id,type_id,brand,name) values(1,2,'Sony','Playstation 4');
insert into platform(g_id,type_id,brand,name) values(1,3,'Microsoft','Xbox One');
insert into platform(g_id,type_id,req_id) values(1,5,1);		/*Only for PC*/

insert into video_game values (2,'Deus Ex','Shooter,Role playing','26/06/2000','M');
insert into requirements values(2,'2 GHz dual core or more',2,'Windows XP or better',' NVIDIA GeForce 8000 series or better',8.5);
insert into platform(g_id,type_id,brand,name) values(2,6,'Sony','Playstation 2');
insert into platform(g_id,type_id,req_id) values(2,5,2);		/*Only for PC*/

insert into video_game values (3,'Borderlands 2','Shooter, Role playing','18-09-2012','M');
insert into requirements values(3,'2.4 GHz Dual Core Processor',2,'Windows XP SP3.','NVIDIA GeForce 8500',13);
insert into platform (g_id,type_id,brand,name) values(3,1,'Sony','Playstation 3');
insert into platform (g_id,type_id,brand,name) values(3,4,'Microsoft','Xbox 360');
insert into platform(g_id,type_id,req_id) values(3,5,3);

insert into video_game values (4,'The Simpsons Game ','Platform','30-10-2007','T');
insert into platform (g_id,type_id,brand,name) values(4,1,'Sony','Playstation 3');
insert into platform (g_id,type_id,brand,name) values(4,4,'Microsoft','Xbox 360');
insert into platform (g_id,type_id,brand,name) values(4,6,'Sony','Playstation 2');


insert into video_game values (5,'Madagascar: Operation Penguin','Adventure','21-08-2010','E');
insert into platform (g_id,type_id,brand,name) values(5,7,'GameBoy','GameBoy Advance');


insert into video_game values (6,'Spider Man 2','Adventure','28-06-2004','T');
insert into requirements values(4,'Intel Core 2 Duo 2.6 GHz',3,'Windows XP SP3 or better','NVIDIA GeForce 285 GTX',9);
insert into platform (g_id,type_id,brand,name) values(6,7,'GameBoy','GameBoy Advance');
insert into platform (g_id,type_id,brand,name) values(6,4,'Microsoft','Xbox 360');
insert into platform (g_id,type_id,brand,name) values(6,6,'Sony','Playstation 2');
insert into platform(g_id,type_id,req_id) values(6,5,4);

insert into video_game values (7,'Assassin\'s Creed II','Adventure','17-11-2009','M');
insert into requirements values(5,'Intel Core 2 Duo E6700 2.6 GHz',2,'Windows XP or better','NVIDIA GeForce 8800 GT',15);
insert into platform (g_id,type_id,brand,name) values(7,1,'Sony','PlayStation 3');
insert into platform (g_id,type_id,brand,name) values(7,4,'Microsoft','Xbox 360');
insert into platform (g_id,type_id,req_id) values(7,5,5);

insert into video_game values (8,'Counter-Strike: Global Offensive','Shooter,Tactical','21-08-2012','M');
insert into requirements values(6,'Intel Core 2 Duo E6600 or better',2,'Windows XP or better','DirectX 9.0 Compatible',8);
insert into platform(g_id,type_id,req_id) values(8,5,6); 

insert into video_game values (9,'Counter-Strike: Source','Shooter,Tactical','23-06-2010','M');
insert into platform(g_id,type_id,req_id) values(9,5,6); 

insert into video_game values (10,'Counter-Strike: Condition Zero','Shooter,Tactical','23-03-2004','M');
insert into platform(g_id,type_id,req_id) values(10,5,6);

insert into video_game values (11,'Left 4 Dead','First person','18-11-2008','M');
insert into requirements values (7,'3.0 GHz P4 or higher',2,'Windows XP or better','DirectX 9.0 Compatible',7.5);
insert into platform(g_id,type_id,brand,name) values(11,4,'Microsoft','Xbox 360');
		

insert into video_game values (12,'Evolve','Shooter','09-02-2015','RP');
	
insert into requirements values (8,'Core 2 Duo E6600 2.4GHz',4,'Windows 7 64-bit or better','DirectX 11.0 or better',50);
insert into platform(g_id,type_id,brand,name) values (12,2,'Sony','Playstation 4');
insert into platform(g_id,type_id,brand,name) values (12,3,'Microsoft','Xbox One');
insert into platform(g_id,type_id,req_id) values (12,5,8);
		
insert into video_game values (13,'Borderlands','Shooter, Role playing','20-10-2009','M');
insert into requirements values (9,'2.4 GHz Dual Core Processor.',2,'Windows XP or better','NVIDIA GeForce 8500. ',13);
insert into platform(g_id,type_id,brand,name) values (13,1,'Sony','Playstation 3');
insert into platform(g_id,type_id,brand,name) values (13,4,'Microsoft','Xbox 360');
insert into platform(g_id,type_id,req_id) values (13,5,9);

insert into video_game values (14,'Bioshock','Shooter, Role playing,Adventure','21-08-2007','M');
insert into requirements values (10,'Intel Core 2 DUO 2.4 GHz',2,'Windows Vista SP3 or better','Intel HD 3000 Integrated Graphics',20);
insert into platform(g_id,type_id,brand,name) values (14,1,'Sony','Playstation 3');
insert into platform(g_id,type_id,brand,name) values (14,4,'Microsoft','Xbox 360');
insert into platform(g_id,type_id,req_id) values (14,5,10);

insert into video_game values (15,'Star Trek','Shooter, Adventure','23-04-2013','T');

insert into requirements values (11,'Core 2 Quad Q6600 2.4GHz',4,'Windows Vista SP3 or better','DirectX 9.0 or better',8);
insert into platform(g_id,type_id,brand,name) values (15,1,'Sony','Playstation 3');
insert into platform(g_id,type_id,brand,name) values (15,4,'Microsoft','Xbox 360');
insert into platform(g_id,type_id,req_id) values (15,5,11);

insert into video_game values (16,'Tekken 6: Bloodline Rebellion','Fighting','27-10-2009','T');

insert into platform(g_id,type_id,brand,name) values (16,1,'Sony','Playstation 3');
insert into platform(g_id,type_id,brand,name) values (16,4,'Microsoft','Xbox 360');

insert into video_game values (17,'Fifa 16','Sports','22-09-2015','T');

insert into requirements values (12,'Intel Core i3-2100 @ 3.1GHz.',4,'Windows 7/8/8.1 64-bit','NVIDIA GTX 650.',15);
insert into platform(g_id,type_id,brand,name) values (17,1,'Sony','Playstation 3');
insert into platform(g_id,type_id,brand,name) values (17,4,'Microsoft','Xbox 360');
insert into platform(g_id,type_id,brand,name) values (17,2,'Sony','Playstation 4');
insert into platform(g_id,type_id,brand,name) values (17,3,'Microsoft','Xbox One');
insert into platform(g_id,type_id,req_id) values (17,5,12);

insert into video_game values (18,'GTA V','Shooter,Racing,Adventure,Simulator','17-09-2013','M');

	insert into requirements values (13,'Intel Core i5 3470 @ 3.2GHZ',8,'Windows 7/8/8.1 64-bit',' NVIDIA GTX 660 2GB / AMD HD7870 2GB',65);
insert into platform(g_id,type_id,brand,name) values (18,1,'Sony','Playstation 3');
insert into platform(g_id,type_id,brand,name) values (18,4,'Microsoft','Xbox 360');
insert into platform(g_id,type_id,brand,name) values (18,2,'Sony','Playstation 4');
insert into platform(g_id,type_id,brand,name) values (18,3,'Microsoft','Xbox One');
insert into platform(g_id,type_id,req_id) values (18,5,13);


insert into video_game values (19,'Max Payne 3','Shooter','15-05-2012','M');

insert into requirements values (14,' Intel Dual Core 2.4GHZ-i7 3930K x6',2,'Windows XP SP3 or better','NVIDIA® GeForce® GTX 680',35);
insert into platform(g_id,type_id,brand,name) values (19,1,'Sony','Playstation 3');
insert into platform(g_id,type_id,brand,name) values (19,4,'Microsoft','Xbox 360');
insert into platform(g_id,type_id,req_id) values (19,5,14);

insert into video_game values (20,'Pokémon Y','Role-playing,Turn-based strategy,Adventure','12-10-2013','E');

insert into platform(g_id,type_id,brand,name) values (20,8,'Nintendo','3DS');

/*Game Developers (Involved in creating the game)*/
insert into developer values (1,1,'CD Projekt RED','Warszawa','Poland',2002);

insert into developer values (2,2,'Ion Storm','Arizona','United States',1996);

insert into developer values (3,3,'Gearbox Software','Texas','United States',1999);

insert into developer values (4,4,'EA Redwood Shores','Redwood city','United States',1998);

insert into developer values (5,5,'Activision','California','United States',1979);

insert into developer values (6,5,'Activision','California','United States',1979);

insert into developer values (7,6,'Ubisoft Montreal','Rennes','France',1986);

insert into developer values (8,7,'Valve','Washington','United States',1996);

insert into developer values (9,7,'Valve','Washington','United States',1996);

insert into developer values (10,7,'Valve','Washington','United States',1996);

insert into developer values (11,8,'Turtle Rock Studios','California','United States',2002);

insert into developer values (12,8,'Turtle Rock Studios','California','United States',2002);

insert into developer values (13,3,'Gearbox Software','Texas','United States',1999);

insert into developer values (14,9,'Digital Extremes','London','Canada',1993);

insert into developer values (15,9,'Digital Extremes','London','Canada',1993);

insert into developer values (16,10,'Bandai Namco Entertainment','Tokyo','Japan',1955);

insert into developer values (17,11,'EA Canada','Burnaby','Canada',1983);

insert into developer values (18,12,'Rockstar North','Edinburgh', 'United Kingdom',2002);

insert into developer values (19,13,'Rockstar New England','Massachusetts', 'United States',2008);

insert into developer values (20,14,'Game Freak','Kitaxawa','Japan',1989);

/*Game Publishers*/
insert into publisher values (1,1,'Warner Bros. Interactive Entertainment','Burbank','United States',2004);

insert into publisher values(2,2,'Eidos Interactive','texas','United States',1990);

insert into publisher values(3,3,'Aspyr media','New Mexico','united States',1996);

insert into publisher values(4,4,'Electronic Arts','Redwood City','United States',1982);

insert into publisher values(5,5,'Vicarious Visions','Phoenix','United States',1990);

insert into publisher values (6,6,'Activision','California','United States',1979);

insert into publisher values (7,7,'Ubisoft Entertainment','Rennes','France',1986);

insert into publisher values (8,8,'Valve','Washington','United States',1996);

insert into publisher values (9,8,'Valve','Washington','United States',1996);

insert into publisher values (10,9,'Sierra Entertainment','California','United States',1979);

insert into publisher values (11,8,'Valve','Washington','United States',1996);

insert into publisher values (12,10,'2K games','California','United States',2005);

insert into publisher values (13,10,'2K games','California','United States',2005);

insert into publisher values (14,10,'2K games','California','United States',2005);

insert into publisher values (15,11,'Bandai Namco Entertainment','Tokyo','Japan',1955);

insert into publisher values (16,11,'Bandai Namco Entertainment','Tokyo','Japan',1955);

insert into publisher values (17,12,'EA Sports','Redwood City','United States',1982);

insert into publisher values (18,13,'Rockstar Games','New York', 'United States',1998);



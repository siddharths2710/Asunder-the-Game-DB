/*ALL POSSIBLE SELECTION QUERIES*/

/*GAME TAB*/
/*checkboxes under GAME TAB*/

/*Only for Video Game*/
select * from video_game;

/*Game Name & Developer*/
select g.name,g.genre,d.name from video_game g,developer d where d.g_id = g.id group by g.id,d.id;

/*Game Name & Publisher*/
select g.name,p.name from video_game g,publisher p where p.g_id = g.id group by g.id,p.id;



/*Game Name & platform_type*/
select g.name,p.brand,p.name,t.type_info from video_game g,platform p,platform_type t where g.id=p.g_id and t.id = p.type_id group by g.id,p.g_id,p.brand,p.name,t.id;

/*Game name & requirements*/
select g.name,t.type_info,r.processor,r.ram,r.os,r.gpu from video_game g,platform p,requirements r,platform_type t where p.type_id = t.id and p.g_id = g.id and type_info = 'PC' group by g.id,t.id,r.id;

/*Game Name , platform_type & requirements*/
select g.name,p.brand,p.name,t.type_info,r.processor,r.ram,r.os,r.gpu from video_game g,platform p,platform_type t,requirements r where g.id=p.g_id and t.type_info = 'PC' and t.id = p.type_id group by g.id,p.g_id,p.brand,p.name,t.id,r.id;

/*Game Name,developer,requirements*/
select g.name,d.name,t.type_info,r.processor,r.ram,r.os,r.gpu from video_game g,developer d,platform p,requirements r,platform_type t where p.type_id = t.id and p.g_id = g.id and type_info = 'PC' and d.g_id = g.id group by g.id,t.id,r.id,d.id;


/*Game Name,publisher,requirements*/
select g.name,d.name,t.type_info,r.processor,r.ram,r.os,r.gpu from video_game g,publisher d,platform p,requirements r,platform_type t where p.type_id = t.id and p.g_id = g.id and type_info = 'PC' and d.g_id = g.id group by g.id,t.id,r.id,d.id;


/*Game Name,developer,platform_type*/
select g.name,d.name,p.brand,p.name,t.type_info from video_game g,platform p,developer d,platform_type t where g.id=p.g_id and t.id = p.type_id group by g.id,p.g_id,p.brand,p.name,t.id,d.id;

/*Game Name,publisher,platform_type*/
select g.name,d.name,p.brand,p.name,t.type_info from video_game g,platform p,publisher d,platform_type t where g.id=p.g_id and t.id = p.type_id group by g.id,p.g_id,p.brand,p.name,t.id,d.id;

/*Game Name,developer,platform_type & requirements*/
select g.name,d.name,p.brand,p.name,t.type_info,r.processor,r.ram,r.os,r.gpu from video_game g,platform p,developer d,platform_type t,requirements r where g.id=p.g_id and t.id = p.type_id and r.id = p.req_id and type_info='PC' group by g.id,p.g_id,p.brand,p.name,t.id,d.id,r.id;

/*Game Name,publisher,platform_type & requirements*/
select g.name,d.name,p.brand,p.name,t.type_info,r.processor,r.ram,r.os,r.gpu from video_game g,platform p,publisher d,platform_type t,requirements r where g.id=p.g_id and t.id = p.type_id and r.id = p.req_id and type_info='PC' group by g.id,p.g_id,p.brand,p.name,t.id,d.id,r.id;

/*Game Name , Developer & Publisher*/
select g.id,g.name,p.name,d.name from video_game g,publisher p,developer d where d.g_id = g.id and p.g_id = g.id group by g.id,p.id,d.id;

/*Game Name , Developer , Publisher  & requirements*/
select distinct g.name,p.name,d.name,t.type_info,r.processor,r.ram,r.os,r.gpu from video_game g,publisher p,developer d,platform pl,platform_type t,requirements r where d.g_id = g.id and p.g_id = g.id and pl.type_id = t.id and pl.g_id = g.id and pl.req_id = r.id group by g.id,p.id,d.id,pl.brand,pl.name,pl.type_id,t.id,r.id;

/*Game Name , Developer , Publisher , platform type*/
select distinct g.name,p.name,d.name,pl.brand,pl.name,t.type_info from video_game g,publisher p,developer d,platform pl,platform_type t where d.g_id = g.id and pl.type_id = t.id and p.g_id = g.id and pl.g_id = g.id group by g.id,p.id,d.id,pl.brand,pl.name,pl.type_id,t.id;

/*Game Name , Developer , Publisher , platform type & requirements*/
select distinct g.name,p.name,d.name,pl.brand,pl.name,t.type_info,r.processor,r.ram,r.os,r.gpu from video_game g,publisher p,developer d,platform pl,platform_type t,requirements r where d.g_id = g.id and p.g_id = g.id and pl.type_id = t.id and pl.g_id = g.id and pl.req_id = r.id group by g.id,p.id,d.id,pl.brand,pl.name,pl.type_id,t.id,r.id;



/*DEVELOPER TAB*/
/*checkboxes under DEVELOPER TAB*/

/*Only  Developer*/
select * from developer;

/*Developer and games*/
select d.name,g.name from developer d,video_game g where d.g_id = g.id group by g.id,d.id;

/*Developer and Publisher*/
select d.name,p.name from developer d,publisher p,video_game g where g.id = p.g_id and g.id = d.g_id group by d.id,p.id;

/*Developer ,game & Publisher*/
select d.name,g.name,g.genre,p.name from developer d,publisher p,video_game g where g.id = p.g_id and g.id = d.g_id group by g.id,d.id,p.id;

/*Developer & platform*/
select distinct d.name,p.brand,p.name,t.type_info from developer d,platform p,platform_type t,video_game g where g.id=d.g_id and g.id=p.g_id and p.type_id = t.id group by d.id,p.brand,p.name,t.id; 

/*Developer ,video game & platform*/
select distinct d.name,g.name,p.brand,p.name,t.type_info from developer d,platform p,platform_type t,video_game g where g.id=d.g_id and g.id=p.g_id and p.type_id = t.id group by d.id,p.brand,p.name,t.id,g.id; 

/*Developer ,publisher & platform*/
select distinct d.name,pl.name,p.brand,p.name,t.type_info from developer d,platform p,publisher pl,platform_type t,video_game g where g.id=d.g_id and pl.g_id = g.id and g.id=p.g_id and p.type_id = t.id group by d.id,p.brand,p.name,t.id,pl.id; 

/*Developer,publisher,game & platform*/
select distinct d.name,pl.name,g.name,p.brand,p.name,t.type_info from developer d,platform p,publisher pl,platform_type t,video_game g where g.id=d.g_id and pl.g_id = g.id and g.id=p.g_id and p.type_id = t.id group by d.id,p.brand,p.name,t.id,pl.id,g.id;


/*PUBLISHER TAB*/
/*checkboxes under PUBLISHER TAB*/

/*Only  Publisher*/
select * from publisher;

/*Publisher and games*/
select d.name,g.name from publisher d,video_game g where d.g_id = g.id group by g.id,d.id;

/*Developer and Publisher*/
select p.name,d.name from developer d,publisher p,video_game g where g.id = p.g_id and g.id = d.g_id group by d.id,p.id;

/*Publisher ,game & Developer*/
select p.name,g.name,g.genre,d.name from developer d,publisher p,video_game g where g.id = p.g_id and g.id = d.g_id group by g.id,d.id,p.id;

/*Publisher & platform*/
select distinct d.name,p.brand,p.name,t.type_info from publisher d,platform p,platform_type t,video_game g where g.id=d.g_id and g.id=p.g_id and p.type_id = t.id group by d.id,p.brand,p.name,t.id; 

/*Publisher ,video game & platform*/
select distinct d.name,g.name,p.brand,p.name,t.type_info from publisher d,platform p,platform_type t,video_game g where g.id=d.g_id and g.id=p.g_id and p.type_id = t.id group by d.id,p.brand,p.name,t.id,g.id; 

/*Developer ,publisher & platform*/
select distinct pl.name,d.name,p.brand,p.name,t.type_info from developer d,platform p,publisher pl,platform_type t,video_game g where g.id=d.g_id and pl.g_id = g.id and g.id=p.g_id and p.type_id = t.id group by d.id,p.brand,p.name,t.id,pl.id; 

/*Developer,publisher,game & platform*/
select distinct pl.name,d.name,g.name,p.brand,p.name,t.type_info from developer d,platform p,publisher pl,platform_type t,video_game g where g.id=d.g_id and pl.g_id = g.id and g.id=p.g_id and p.type_id = t.id group by d.id,p.brand,p.name,t.id,pl.id,g.id;


/*Users & associated games*/
select distinct u.alias,v.name from users u,video_game v,plays p where p.u_id = u.id and p.g_id = v.id;


/*ALL POSSIBLE INSERTION, DELETION AND UPDATE QUERIES*/

/*Note :- The below queries were executed with php to account for outside variables*/

/*To add a user*/
/*
$temp = mysql_fetch_row(mysql_query("select count(*) from users;"))[0];
$z = $temp + 1;
//insert $u user here
mysql_query("insert into users values ($z,'$u',1);") or die("Error $z '$u'");
$temp1 = mysql_query("select id,name from video_game;");
//insert $a game for user $u
while($y = mysql_fetch_row($temp1))
			{
				if($y[1] == $a)
				{
					mysql_query("insert into plays values($z,".$y[0].",5)",$con);
				}
			}
*/

/*Delete given user $r*/

/*
//First delete from plays and then delete given user

$del = mysql_query("select id from users where alias = '$r';");
$del =mysql_fetch_row($del);
$tt= $del[0];
mysql_query("delete from plays where u_id = $tt;") or die(mysql_error());
mysql_query("delete from users where id = $tt");
*/

/*Update user*/

/*
//$new -> new name for user $old
mysql_query("update users set alias = $new where alias = $old;");		
*/





<?php

/*Only for Video Game*/
$a = mysql_query("select * from video_game", $con);

/*Game Name & Developer*/
$a = mysql_query("select g.name,g.genre,d.name from video_game g,developer d where d.g_id = g.id group by g.id,d.id", $con);

/*Game Name & Publisher*/
$a = mysql_query("select g.name,p.name from video_game g,publisher p where p.g_id = g.id group by g.id,p.id", $con);



/*Game Name & platform_type*/
$a = mysql_query("select g.name,p.brand,p.name,t.type_info from video_game g,platform p,platform_type t where g.id=p.g_id and t.id = p.type_id group by g.id,p.g_id,p.brand,p.name,t.id", $con);

/*Game name & requirements*/
$a = mysql_query("select g.name,t.type_info,r.processor,r.ram,r.os,r.gpu from video_game g,platform p,requirements r,platform_type t where p.type_id = t.id and p.g_id = g.id and type_info = 'PC' group by g.id,t.id,r.id", $con);

/*Game Name , platform_type & requirements*/
$a = mysql_query("select g.name,p.brand,p.name,t.type_info,r.processor,r.ram,r.os,r.gpu from video_game g,platform p,platform_type t,requirements r where g.id=p.g_id and t.type_info = 'PC' and t.id = p.type_id group by g.id,p.g_id,p.brand,p.name,t.id,r.id", $con);

/*Game Name,developer,requirements*/
$a = mysql_query("select g.name,d.name,t.type_info,r.processor,r.ram,r.os,r.gpu from video_game g,developer d,platform p,requirements r,platform_type t where p.type_id = t.id and p.g_id = g.id and type_info = 'PC' and d.g_id = g.id group by g.id,t.id,r.id,d.id", $con);


/*Game Name,publisher,requirements*/
$a = mysql_query("select g.name,d.name,t.type_info,r.processor,r.ram,r.os,r.gpu from video_game g,publisher d,platform p,requirements r,platform_type t where p.type_id = t.id and p.g_id = g.id and type_info = 'PC' and d.g_id = g.id group by g.id,t.id,r.id,d.id", $con);


/*Game Name,developer,platform_type*/
$a = mysql_query("select g.name,d.name,p.brand,p.name,t.type_info from video_game g,platform p,developer d,platform_type t where g.id=p.g_id and t.id = p.type_id group by g.id,p.g_id,p.brand,p.name,t.id,d.id", $con);

/*Game Name,publisher,platform_type*/
$a = mysql_query("select g.name,d.name,p.brand,p.name,t.type_info from video_game g,platform p,publisher d,platform_type t where g.id=p.g_id and t.id = p.type_id group by g.id,p.g_id,p.brand,p.name,t.id,d.id", $con);

/*Game Name,developer,platform_type & requirements*/
$a = mysql_query("select g.name,d.name,p.brand,p.name,t.type_info,r.processor,r.ram,r.os,r.gpu from video_game g,platform p,developer d,platform_type t,requirements r where g.id=p.g_id and t.id = p.type_id and r.id = p.req_id and type_info='PC' group by g.id,p.g_id,p.brand,p.name,t.id,d.id,r.id", $con);

/*Game Name,publisher,platform_type & requirements*/
$a = mysql_query("select g.name,d.name,p.brand,p.name,t.type_info,r.processor,r.ram,r.os,r.gpu from video_game g,platform p,publisher d,platform_type t,requirements r where g.id=p.g_id and t.id = p.type_id and r.id = p.req_id and type_info='PC' group by g.id,p.g_id,p.brand,p.name,t.id,d.id,r.id", $con);

/*Game Name , Developer & Publisher*/
$a = mysql_query("select g.id,g.name,p.name,d.name from video_game g,publisher p,developer d where d.g_id = g.id and p.g_id = g.id group by g.id,p.id,d.id", $con);

/*Game Name , Developer , Publisher  & requirements*/
$a = mysql_query("select distinct g.name,p.name,d.name,t.type_info,r.processor,r.ram,r.os,r.gpu from video_game g,publisher p,developer d,platform pl,platform_type t,requirements r where d.g_id = g.id and p.g_id = g.id and pl.type_id = t.id and pl.g_id = g.id and pl.req_id = r.id group by g.id,p.id,d.id,pl.brand,pl.name,pl.type_id,t.id,r.id", $con);

/*Game Name , Developer , Publisher , platform type*/
$a = mysql_query("select distinct g.name,p.name,d.name,pl.brand,pl.name,t.type_info from video_game g,publisher p,developer d,platform pl,platform_type t where d.g_id = g.id and pl.type_id = t.id and p.g_id = g.id and pl.g_id = g.id group by g.id,p.id,d.id,pl.brand,pl.name,pl.type_id,t.id", $con);

/*Game Name , Developer , Publisher , platform type & requirements*/
$a = mysql_query("select distinct g.name,p.name,d.name,pl.brand,pl.name,t.type_info,r.processor,r.ram,r.os,r.gpu from video_game g,publisher p,developer d,platform pl,platform_type t,requirements r where d.g_id = g.id and p.g_id = g.id and pl.type_id = t.id and pl.g_id = g.id and pl.req_id = r.id group by g.id,p.id,d.id,pl.brand,pl.name,pl.type_id,t.id,r.id", $con);



/*DEVELOPER TAB*/
/*checkboxes under DEVELOPER TAB*/

/*Only  Developer*/
$a = mysql_query("select * from developer", $con);

/*Developer and games*/
$a = mysql_query("select d.name,g.name from developer d,video_game g where d.g_id = g.id group by g.id,d.id", $con);

/*Developer and Publisher*/
$a = mysql_query("select d.name,p.name from developer d,publisher p,video_game g where g.id = p.g_id and g.id = d.g_id group by d.id,p.id", $con);

/*Developer ,game & Publisher*/
$a = mysql_query("select d.name,g.name,g.genre,p.name from developer d,publisher p,video_game g where g.id = p.g_id and g.id = d.g_id group by g.id,d.id,p.id", $con);

/*Developer & platform*/
$a = mysql_query("select distinct d.name,p.brand,p.name,t.type_info from developer d,platform p,platform_type t,video_game g where g.id=d.g_id and g.id=p.g_id and p.type_id = t.id group by d.id,p.brand,p.name,t.id", $con); 

/*Developer ,video game & platform*/
$a = mysql_query("select distinct d.name,g.name,p.brand,p.name,t.type_info from developer d,platform p,platform_type t,video_game g where g.id=d.g_id and g.id=p.g_id and p.type_id = t.id group by d.id,p.brand,p.name,t.id,g.id", $con); 

/*Developer ,publisher & platform*/
$a = mysql_query("select distinct d.name,pl.name,p.brand,p.name,t.type_info from developer d,platform p,publisher pl,platform_type t,video_game g where g.id=d.g_id and pl.g_id = g.id and g.id=p.g_id and p.type_id = t.id group by d.id,p.brand,p.name,t.id,pl.id", $con); 

/*Developer,publisher,game & platform*/
$a = mysql_query("select distinct d.name,pl.name,g.name,p.brand,p.name,t.type_info from developer d,platform p,publisher pl,platform_type t,video_game g where g.id=d.g_id and pl.g_id = g.id and g.id=p.g_id and p.type_id = t.id group by d.id,p.brand,p.name,t.id,pl.id,g.id", $con);


/*PUBLISHER TAB*/
/*checkboxes under PUBLISHER TAB*/

/*Only  Publisher*/
$a = mysql_query("select * from publisher", $con);

/*Publisher and games*/
$a = mysql_query("select d.name,g.name from publisher d,video_game g where d.g_id = g.id group by g.id,d.id", $con);

/*Developer and Publisher*/
$a = mysql_query("select p.name,d.name from developer d,publisher p,video_game g where g.id = p.g_id and g.id = d.g_id group by d.id,p.id", $con);

/*Publisher ,game & Developer*/
$a = mysql_query("select p.name,g.name,g.genre,d.name from developer d,publisher p,video_game g where g.id = p.g_id and g.id = d.g_id group by g.id,d.id,p.id", $con);

/*Publisher & platform*/
$a = mysql_query("select distinct d.name,p.brand,p.name,t.type_info from publisher d,platform p,platform_type t,video_game g where g.id=d.g_id and g.id=p.g_id and p.type_id = t.id group by d.id,p.brand,p.name,t.id", $con); 

/*Publisher ,video game & platform*/
$a = mysql_query("select distinct d.name,g.name,p.brand,p.name,t.type_info from publisher d,platform p,platform_type t,video_game g where g.id=d.g_id and g.id=p.g_id and p.type_id = t.id group by d.id,p.brand,p.name,t.id,g.id", $con); 

/*Developer ,publisher & platform*/
$a = mysql_query("select distinct pl.name,d.name,p.brand,p.name,t.type_info from developer d,platform p,publisher pl,platform_type t,video_game g where g.id=d.g_id and pl.g_id = g.id and g.id=p.g_id and p.type_id = t.id group by d.id,p.brand,p.name,t.id,pl.id", $con); 

/*Developer,publisher,game & platform*/
$a = mysql_query("select distinct pl.name,d.name,g.name,p.brand,p.name,t.type_info from developer d,platform p,publisher pl,platform_type t,video_game g where g.id=d.g_id and pl.g_id = g.id and g.id=p.g_id and p.type_id = t.id group by d.id,p.brand,p.name,t.id,pl.id,g.id", $con);
?>




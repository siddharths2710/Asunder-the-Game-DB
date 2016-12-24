<html>
<head>
<title> Asunder|Search Page</title>

<link rel="stylesheet" type="text/css" href="css/styles.css" />
<style>
body
{
background: rgba(183,222,237,1);
background: -moz-linear-gradient(left, rgba(183,222,237,1) 0%, rgba(113,206,239,1) 16%, rgba(17,188,240,1) 98%, rgba(183,222,237,1) 100%);
background: -webkit-gradient(left top, right top, color-stop(0%, rgba(183,222,237,1)), color-stop(16%, rgba(113,206,239,1)), color-stop(98%, rgba(17,188,240,1)), color-stop(100%, rgba(183,222,237,1)));
background: -webkit-linear-gradient(left, rgba(183,222,237,1) 0%, rgba(113,206,239,1) 16%, rgba(17,188,240,1) 98%, rgba(183,222,237,1) 100%);
background: -o-linear-gradient(left, rgba(183,222,237,1) 0%, rgba(113,206,239,1) 16%, rgba(17,188,240,1) 98%, rgba(183,222,237,1) 100%);
background: -ms-linear-gradient(left, rgba(183,222,237,1) 0%, rgba(113,206,239,1) 16%, rgba(17,188,240,1) 98%, rgba(183,222,237,1) 100%);
background: linear-gradient(to right, rgba(183,222,237,1) 0%, rgba(113,206,239,1) 16%, rgba(17,188,240,1) 98%, rgba(183,222,237,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b7deed', endColorstr='#b7deed', GradientType=1 );
}
</style>

<link rel="stylesheet" href="w3css/w3.css">
<script type="text/javascript" src="jquery/jquery.min.js"></script>
<script type="text/javascript" src="jquery/jquery-ui.js"></script>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="angular/angular.min.js"></script>
<script type="text/javascript" src="main.js"></script>

</head>
<body>
<form method="link" action="search.html">
<?php
$host = 'localhost';
$usr='root';
$pswd='';
$con = mysql_connect($host,$usr,$pswd);
if(!$con)
{
	echo 'Error';
	exit();
}
mysql_select_db("game",$con);
/*GAME TAB*/
/*checkboxes under GAME TAB*/
//get search term
/*if(isset($_POST['g'])){
    $searchTerm = $_POST['g'];
    //get matched data from skills table
    $query =  mysql_fetch_row(mysql_query("select video_game.name FROM video_game WHERE name LIKE '%".$searchTerm."%' ORDER BY name ASC;");
    
    //return json data
    echo json_encode($query);
}
*/
if(isset($_POST['g'])){
	$inp = $_POST['g'];
	//retrieve checkbox values first
	$cb = $_POST['cb'];
	if(empty($cb)){
	}
	else 
	{
		echo '<div class="container"><table class="table table-bordered table-hover">';
		
		if(IsChecked($cb, 'G') && IsChecked($cb, 'D') && IsChecked($cb, 'P') && IsChecked($cb, 'PT')){
			$a = mysql_query("select distinct g.name,g.genre,g.release_date,p.name,d.name,pl.brand,pl.name,t.type_info from video_game g,publisher p,developer d,platform pl,platform_type t where d.g_id = g.id and pl.type_id = t.id and p.g_id = g.id and pl.g_id = g.id and g.name LIKE '%".$inp."%' group by g.id,p.id,d.id,pl.brand,pl.name,pl.type_id,t.id;");
			echo "<thead><tr><th>Game Name</th><th>Genre</th><th>Release Date</th><th>Publisher</th><th>Developer</th><th>Platform 						Brand</th>Platform Name<th>Type of Platform</th></tr></thead>";
			$z=8;
		}
		else if(IsChecked($cb, 'G') && IsChecked($cb, 'D') && IsChecked($cb, 'P')){
			$a = mysql_query("select g.name,g.genre,g.release_date,p.name,d.name from video_game g,publisher p,developer d where d.g_id = g.id and p.g_id = g.id and g.name LIKE '%".$inp."%' group by g.id,p.id,d.id;");
			
			echo "<thead><tr><th>Game Name</th><th>Genre</th><th>Release Date</th><th>Publisher</th><th>Developer</th></thead>";
			
			$z=5;
		}
		else if(IsChecked($cb, 'G') && IsChecked($cb, 'D') && IsChecked($cb, 'PT')){
			$a = mysql_query("select g.name,g.genre,g.release_date,d.name,p.brand,p.name,t.type_info from video_game g,platform p,developer d,platform_type t where g.id=p.g_id and t.id = p.type_id and g.name LIKE '%".$inp."%' group by g.id,p.g_id,p.brand,p.name,t.id,d.id;");
		
			echo "<thead><tr><th>Game Name</th><th>Genre</th><th>Release Date</th><th>Developer</th><th>PlatformBrand</th><th>Name</th><th>Type of Platform</th></tr></thead>";
			
			$z=7;
		}
		else if(IsChecked($cb, 'G') && IsChecked($cb, 'P') && IsChecked($cb, 'PT')){
			$a = mysql_query("select g.name,g.genre,g.release_date,d.name,p.brand,p.name,t.type_info from video_game g,platform p,publisher d,platform_type t where g.id=p.g_id and t.id = p.type_id and g.name LIKE '%".$inp."%' group by g.id,p.g_id,p.brand,p.name,t.id,d.id;");
		
			echo "<thead><tr><th>Game Name</th><th>Genre</th><th>Release Date</th><th>Developer</th><th>Platform Brand</th><th>Platform Name</th><th>Type of Platform</th></tr></thead>";
		
			$z=7;
		}
		else if(IsChecked($cb, 'D') && IsChecked($cb, 'P') && IsChecked($cb, 'PT')){
			$a = mysql_query("select distinct pl.name,d.name,p.brand,p.name,t.type_info from developer d,platform p,publisher pl,platform_type t,video_game g where g.id=d.g_id and pl.g_id = g.id and g.id=p.g_id and p.type_id = t.id and g.name LIKE '%".$inp."%' group by d.id,p.brand,p.name,t.id,pl.id;");
			
			echo "<thead><tr><th>Publisher</th><th>Developer</th><th>Platform Brand</th><th>Platform Name</th><th>Type of Platform</th></tr></thead>";
			
			$z=5;
		}
		else if(IsChecked($cb, 'D') && IsChecked($cb, 'P')){
			$a = mysql_query("select d.name,p.name from developer d,publisher p,video_game g where g.id = p.g_id and g.id = d.g_id and g.name = '".$inp."' group by d.id,p.id;");
		
			echo "<thead><tr><th>Developer</th><th>Publisher</th></thead>";
		
		
			
			$z=2;
		}
		else if(IsChecked($cb, 'G') && IsChecked($cb, 'P')){
			$a = mysql_query("select g.name,g.genre,p.name from video_game g,publisher p where p.g_id = g.id and g.name LIKE '%".$inp."%' group by g.id;");
		
			echo "<thead><tr><th>Game Name</th><th>Genre</th><th>Publisher</tr></thead>";
			$z=3;
		}
		else if(IsChecked($cb, 'PT') && IsChecked($cb, 'P')){
			$a = mysql_query("select distinct d.name,p.brand,p.name,t.type_info from publisher d,platform p,platform_type t,video_game g where g.id=d.g_id and g.id=p.g_id and p.type_id = t.id and g.name LIKE '%".$inp."%' group by d.id,p.brand,p.name,t.id;");
		
			echo "<thead><tr><th>Publisher</th><th>Brand(s)</th><th>Platform Name</th><th>Type</th></tr></thead>";
			$z=4;
		}
		else if(IsChecked($cb, 'G') && IsChecked($cb, 'D')){
			$a = mysql_query("select g.name,g.genre,g.release_date,d.name from video_game g,developer d where d.g_id = g.id and g.name = '".$inp."' group by 	g.id,d.id;");
		
		
			echo "<thead><tr><th>Game Name</th><th>Genre</th><th>Release Date</th><th>Developer</th></tr></thead>";
		
			$z=4;
		}
		else if(IsChecked($cb, 'G') && IsChecked($cb, 'PT')){
			$a = mysql_query("select g.name,g.genre,g.release_date,p.brand,p.name,t.type_info from video_game g,platform p,platform_type t where g.id=p.g_id and t.id = p.type_id and g.name LIKE '%".$inp."%' group by g.id,p.g_id,p.brand,p.name,t.id;");
		
			echo "<thead><tr><th>Game Name</th><th>Genre</th><th>Release Date</th><th>Platform Brand</th><th>Platform Name</th><th>Type of Platform</th></tr></thead>";
				$z=6;
		}
		else if(IsChecked($cb, 'D') && IsChecked($cb, 'PT')){
			$a = mysql_query("select distinct d.name,p.brand,p.name,t.type_info from developer d,platform p,platform_type t,video_game g where g.id=d.g_id and g.id=p.g_id and p.type_id = t.id and g.name LIKE '%".$inp."%' group by d.id,p.brand,p.name,t.id;"); 
		
		
		echo "<thead><tr><th>Developer</th><th>Platform Brand</th><th>Platform Name</th><th>Type of Platform</th></tr></thead>";
				$z=4;
		}
		else if(IsChecked($cb, 'G')){
			$a = mysql_query("select g.name,g.genre,g.release_date from video_game g where g.name LIKE '%".$inp."%';");
			echo "<thead><tr><th>Game Name</th><th>Genre</th><th>Release Date</th></tr></thead>";
			$z=3;
		}
		else if(IsChecked($cb, 'D')){
			$a = mysql_query("select d.name,g.name,g.genre from developer d,video_game g where d.g_id = g.id and g.name LIKE '%".$inp."%' group by d.id,g.id;");
			
			echo "<thead><tr><th>Developer</th><th>Game Name</th><th>Genre</th></tr></thead>";
			$z=3;
		
		}
		else if(IsChecked($cb, 'P')){
		
			$a = mysql_query("select p.name,g.name,g.genre from publisher p,video_game g where p.g_id = g.id and g.name LIKE '%".$inp."%' group by p.id,g.id;");
			

			echo "<thead><tr><th>Publisher</th><th>Game Name</th><th>Genre</th></tr></thead>";
		
			$z=3;
		}
		else if(IsChecked($cb, 'PT')){
			$a = mysql_query("select p.brand,p.name,g.name,t.type_info from platform p,video_game g,platform_type t where p.g_id = g.id and p.type_id = t.id and g.name LIKE '%".$inp."%' group by g.id,p.brand,p.name,t.id; ");
			
			
			echo "<thead><tr><th>Brand</th><th>Platform Name</th><th>Game Name</th><th>Game Type</th></tr></thead>";
			
			
			$z=4;
		}
	}
		
}
else if(isset($_POST['d'])){
	$inp = $_POST['d'];
	echo '<div class="container"><table class="table table-bordered table-hover">';
	echo "<thead><tr><th>Id</th><th>Developer</th><th>Headquarters</th><th>Country</th><th>Established</th></tr></thead>";
$a = mysql_query("select distinct id,name,headquarters,country,estd from developer where name LIKE '%".$inp."%';");
$z=5;
}
else if(isset($_POST['p'])){
	$inp = $_POST['p'];
	echo '<div class="container"><table class="table table-bordered table-hover">';
	echo "<thead><tr><th>Publisher</th><th>Game</th></tr></thead>";
	$a = mysql_query("select d.name,g.name from publisher d,video_game g where d.g_id = g.id and d.name LIKE '%".$inp."%' group by g.id,d.id;");
$z=2;	
}
else if(isset($_POST['u'])){
	$inp = $_POST['u'];
	echo '<div class="container"><table class="table table-bordered table-hover">';
	echo "<thead><tr><th>NickName</th><th>Gamer Type</th><th>Game Name</th></tr></thead>";
	$a = mysql_query("select u.alias,g.type,v.name from users u,gamer_type g,video_game v,plays p where g.id = u.g_type_id and p.u_id = u.id and p.g_id = v.id and u.alias LIKE '%".$inp."%';");


$z=3;
}
else {
	
}
if($a)
{
	
	while($b = mysql_fetch_row($a))
	{
	
		echo "<tr>";
		for($i=0;$i<$z;$i++)
		echo "<td>".$b[$i]."</td>";
		echo "</tr>";
	}

	echo "</table></div>";
}
echo '<div class = "container"><input type="submit" class = "btn btn-primary btn-block"value="Go Back" /><br></div>';

/*if($a)
{
foreach($a as $b)
        {echo $b,"<br>";
		//echo "\r\n";
		}
}*/
function IsChecked($chkname,$value)
{
    if(!empty($chkname))
    {
        foreach($chkname as $chkval)
        {
            if($chkval == $value)
            {
                return true;
            }
        }
    }
    return false;
}



?>

</form>
</body>
</html>

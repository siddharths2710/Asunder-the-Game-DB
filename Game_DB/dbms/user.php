<html>
<head>
<title> Asunder|User Page</title>

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
	mysql_select_db("game",$con);
	$temp = mysql_fetch_row(mysql_query("select count(*) from users;"))[0];
	$temp1 = mysql_query("select id,name from video_game;");
	$z = $temp + 1;
	if(isset($_POST['c'])){
		$u =$_POST['c']; 
		//insert $u user here
		mysql_query("insert into users values ($z,'$u',1);") or die("Error $z '$u'");
		//all insert statements for the user $u
		//if the game doesnot exist in the game table ... it should not insert that game here
		//the game is not inserted .. only check if that game already exists in the table
		if(isset($_POST['a'])){
			$a =$_POST['a'];
			//insert $a here
			while($y = mysql_fetch_row($temp1))
			{
				if($y[1] == $a)
				{
					if($y[0] != 4 || $y[0] != 5 || $y[0] != 11|| $y[0] != 16 || $y[0] != 20)
						mysql_query("insert into plays values($z,".$y[0].",5)",$con);
					else if($y[0] == 4 || $y[0] == 11 || $y[0] == 16)
						mysql_query("insert into plays values($z,".$y[0].",4)");
					else if($y[0] == 20)
						mysql_query("insert into plays values($z,20,8)",$con);
					else
						mysql_query("insert into plays values($z,5,7)",$con);
				}
				
				
			}

			$v = mysql_query("select distinct u.alias,v.name from users u,video_game v,plays p where p.u_id = u.id and p.g_id = v.id;");
			echo '<div class="container"><table class="table table-bordered table-hover">';
			echo "<thead><tr><th>NickName</th><th>Game Name</th></tr></thead>";
			while($u = mysql_fetch_row($v))
			{
	
				echo "<tr>";
				for($i=0;$i<2;$i++)
				echo "<td>".$u[$i]."</td>";
				echo "</tr>";
			}
			
			echo "</table></div>";
			
			if(isset($_POST['b'])){
				$b=$_POST['b'];
				//insert $b  here
				while($y = mysql_fetch_row($temp1))
			{
				if($y[1] == $b)
				{
					if($y[0] != 4 || $y[0] != 5 || $y[0] != 11|| $y[0] != 16 || $y[0] != 20)
						mysql_query("insert into plays values($z,".$y[0].",5)");
					else if($y[0] == 4 || $y[0] == 11 || $y[0] == 16)
						mysql_query("insert into plays values($z,".$y[0].",4)",$con);
					else if($y[0] == 20)
						mysql_query("insert into plays values($z,20,8)");
					else
						mysql_query("insert into plays values($z,5,7)");
				}
			}
				
				if(isset($_POST['c'])){
					$c =$_POST['c'];
					//insert $c here
					while($y = mysql_fetch_row($temp1))
			{
				if($y[1] == $c)
				{
					if($y[0] != 4 || $y[0] != 5 || $y[0] != 11|| $y[0] != 16 || $y[0] != 20)
						mysql_query("insert into plays values($z,".$y[0].",5)");
					else if($y[0] == 4 || $y[0] == 11 || $y[0] == 16)
						mysql_query("insert into plays values($z,".$y[0].",4)");
					else if($y[0] == 20)
						mysql_query("insert into plays values($z,20,8)");
					else
						mysql_query("insert into plays values($z,5,7)");
				}
			}
					
					if(isset($_POST['d'])){
						$d = $_POST['d'];
						//insert $d here
						while($y = mysql_fetch_row($temp1))
			{
				if($y[1] == $d)
				{
					if($y[0] != 4 || $y[0] != 5 || $y[0] != 11|| $y[0] != 16 || $y[0] != 20)
						mysql_query("insert into plays values($z,".$y[0].",5)");
					else if($y[0] == 4 || $y[0] == 11 || $y[0] == 16)
						mysql_query("insert into plays values($z,".$y[0].",4)");
					else if($y[0] == 20)
						mysql_query("insert into plays values($z,20,8)");
					else
						mysql_query("insert into plays values($z,5,7)");
				}
			}
						
					}
				}
			}
		$z = $z + 1;
		}
		else{
			echo "add atleast one game";
		}
	}
	else if(isset($_POST['u'])){
		if(!isset($_POST['u2'])){
			echo "New name not inserted.";
		}
		else{
			echo "Updated";
			$old = $_POST['u'];
			$new = $_POST['u2'];
			//update query here
			mysql_query("update users set alias = u2 where alias = u;");
		}
	}
	else if(isset($_POST['r'])){
		echo "Removed.";
		$r = $_POST['r'];
		//delete query here
		//while removing the user make sure you remove all the connections like where you are storing of what it plays and all
		$del = mysql_query("select id from users where alias = '$r';");
		$del =mysql_fetch_row($del);
		$tt= $del[0];
		mysql_query("delete from plays where u_id = $tt;") or die(mysql_error());
		mysql_query("delete from users where id = $tt");
	
		$v = mysql_query("select distinct u.alias,v.name from users u,video_game v,plays p where p.u_id = u.id and p.g_id = v.id;");
			echo '<div class="container"><table class="table table-bordered table-hover">';
			/*while($u = mysql_fetch_row($v))
			{
	
				echo "<tr>";
				for($i=0;$i<2;$i++)
				echo "<td>".$u[$i]."</td>";
				echo "</tr>";
			}*/
			
			echo "</table></div>";
	}
	
	echo '<div class = "container"><input type="submit" class = "btn btn-primary btn-block"value="Go Back" /><br></div>';
?>
</form>
</body>
</html>

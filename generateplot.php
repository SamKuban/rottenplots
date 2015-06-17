<!DOCTYPE html>
<html>
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="chrome=1,IE=edge" />
	<title>Generate Rotten Plot</title>
	<style>
		body {
			background-color: #FFFFFF;
			margin: 0px;
		}





#plot {position:absolute; margin-top:130px; padding-left:40px; width: 500px; margin-left:25%;color:white;font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;font-size:13px;z-index:3;}

@media only screen and (max-device-width: 480px) {


#generateplot_hype_container {margin-left: -150px;}


#plot {margin-left: -2px;}


	}


	</style>


	<meta name="viewport" content="user-scalable=yes, width=600" />



  </head>
  <body>


<div id="plot">
<?php
$servername = "localhost";
$username = "rotten_sam";
$password = "foxtrot";
$dbname = "rotten_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "CALL GetPlot";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        // echo "ID: " . $row["ID"].  "	Name: " . $row["Name"]. "	Gender: " . $row["Gender"]. "<br>";
        echo "" . $row["thePlot"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>


</div>


	<div style ="position:absolute; margin-top:0px; margin-left:25%;margin-right:25%;width:600px;">


	
	<!-- copy these lines to your document: -->

	<div id="generateplot_hype_container" style="position:absolute;overflow:hidden;width:600px;height:800px;z-index:-1;">
		<script type="text/javascript" charset="utf-8" src="generateplot.hyperesources/generateplot_hype_generated_script.js?26042"></script>
	</div>

	<!-- end copy -->


	</div>


	<!-- text content for search engines: -->

	<div style="display:none">

		<div>How it Works:</div>
		<div>Generate New Plot</div>
		<div>Each plot is randomly generated from a database consisting of filthy protagonists, disturbing traits, atrocious antagonists, and detestable actions. </div>
		<div></div>
		<div>We have no knowledge of what plot will be generated. Each protagonist has the possiblity to end up with any of the various traits, antagonists, and actions. The only thing we know is that you probably shouldn't show these to your kids. Or do. We don't fucking care.</div>
		<div>Rotten Plots</div>
		<div>Disclaimer:</div>
		<div>Future Development:</div>
		<div>Plots That Make You Puke</div>
		<div>A highly interactive version of Rotten Plots is currently in development </div>

	</div>

	<!-- end text content: -->

  </body>
</html>

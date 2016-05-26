<html>
	<head>
		<title>PHP test page</title>
		
		<style>
		
			body {
				margin: 0;
			}
			#head {
				background-color: #262626;
				width: 100%;
				height: 120px;
				position: relative;
			}
			#headcontent {
				height: 80px;
				margin-top: 20px;
				margin-left: 20px;
				position: absolute;
				line-height: 80px;
				font-size: 70px;
				font-family: "HelveticaNeue-Light", sans-serif;
				color: white;
			}
			#headcontent2 {
				height: 40px;
				top: 70px;
				right: 50px;
				position: absolute;
				line-height: 40px;
				font-size: 20px;
				font-family: "HelveticaNeue-Light", sans-serif;
				color: white;
			}
			a:link {
				color: white;
				text-decoration: none;
			}
			a:visited {
				color: white;
				text-decoration: none;
			}
			a:hover {
				color: lightgrey;
			}
			#body {
				width: 100%;
			}
			#code {
				width: 80%;
				height: 80%;
				margin-top: 70px;
				margin-left: 10%;
				border-style: dashed;
			}
			#code2 {
				width: 80%;
				height: 80%;
				margin-top: 70px;
				margin-left: 10%;
				border-style: dashed;
			}
			#codeframe {
				width: 100%;
				height: 100%;
				border: none;
			}
			#codearea {
				width: 100%;
				height: 100%;
				border: none;
				font-size: 20px;
				font-family: Consolas, Menlo, Monaco, Lucida Console, Liberation Mono, DejaVu Sans Mono, Bitstream Vera Sans Mono, Courier New, monospace, serif;
			}
			
			<?php
				
				 function Read() {
                   $file = "testfile.php";
                   echo file_get_contents( $file);
               }

               function Write() {
                   $file = "testfile.php";
                   $fp = fopen($file, "w");
                   $data = $_POST["tekst"];
                   fwrite($fp, $data);
                   fclose($fp);
               }
			   
			   if ($_POST["submit_check"]){
					Write();
				};
				
			?>
			
		</style>
	</head>
	
	<body>
		<div id="head">
			<div id="headcontent">
				<b>PHP test site</b>
			</div>
			<div id="headcontent2">
				<i><a href="testfile.php">view raw file</a></i>
			</div>
		</div>
		
		<div id="body">
			<div id="code">
				<iframe id="codeframe" src="testfile.php">
				</iframe>
			</div>
			<div id="code2">
				<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
					<textarea id="codearea" name="tekst">
						<?php Read(); ?>
					</textarea>
					<br><br>
					<input type="submit" name="submit" value="Update text">
					<input type="hidden" name="submit_check" value="1">
			</div>
		</div>
	</body>
</html>
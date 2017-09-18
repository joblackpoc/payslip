<?php
//mimi I love you
//143**

// ******************************************************************************************************
// ******************************************************************************************************
// >> PHP Script  "Unzip all"
// ******************************************************************************************************
// ***** UNZIP the content of the folder "C:/JHCIS_export/' 
// ***** INPUT:     the folder name
// ***** OUTPUT: Creates the outputfile "log_unzip.html"
// ******************************************************************************************************
// ******************************************************************************************************

$dir = "C:/JHCIS_export/";
$outputfilename = $dir."log_unzip.html";
$outputfile = fopen($outputfilename, 'w');
fwrite($outputfile, "<html>");
fwrite($outputfile, "<body>");

if (is_dir($dir)) {
    if ($dh = opendir($dir)) {												// Open a FOLDER
        while (($dirname = readdir($dh)) !== false) {		// Reads every files in the folder
				$filetype =  filetype($dir . $dirname);	
				if ( $filetype== "file"  ) {

						$filename = $dir . $dirname;
						$extension = substr($filename, strrpos($filename, '.')+1);

						if ($extension == "zip") {
							echo "<br><hr>ZIP FILE FOUND = ".$filename."<br><hr>";
							fwrite($outputfile, "<br><hr>ZIP FILE FOUND  = ".$filename."<br><hr>");

							$zip = new ZipArchive;
							if ($zip->open($filename) === TRUE) {

								echo "<br><hr>Extract to = ".$dir."<br><hr>";
								$zip->extractTo($dir);
								$zip->close();
								echo 'ok';
							} else {
								echo 'failed';
							}
					}
				}
			 }
		}
    }

fwrite($outputfile, "</body>");
fwrite($outputfile, "</html>");
fclose($outputfile);




// ******************************************************************************************************
// ******************************************************************************************************
// >> End PHP Script  "Unzip all"
// ******************************************************************************************************
// ******************************************************************************************************







// ******************************************************************************************************
// ******************************************************************************************************
// >> PHP Script  "Read and Import"
// ******************************************************************************************************
// ***** READS the content of the folder "C:/JHCIS_export/' and IMPORTS to the database
// ***** INPUT:     The database name + the folder name
// ***** OUTPUT: Creates the outputfile "log_import.html"
// ******************************************************************************************************
// ******************************************************************************************************

// INPUT 
$database_name = "21file";
$dir = "C:/JHCIS_export/";

$connec = mysql_connect("localhost",  "root", "123456");
mysql_select_db($database_name, $connec);

$outputfilename = $dir."log_import.html";
$outputfile = fopen($outputfilename, 'w');
fwrite($outputfile, "<html>");
fwrite($outputfile, "<body>");


if (is_dir($dir)) {
    if ($dh = opendir($dir)) {												// Open a FOLDER
        while (($dirname = readdir($dh)) !== false) {		// Reads every files in the folder
				$filetype =  filetype($dir . $dirname);				
				if ( is_dir($dir . $dirname)  &&  $dirname !=  "."  &&  $dirname != ".."  ) {
					 if ($dh2 = opendir($dir . $dirname)) {
						echo "<br><hr>FOLDER = ".$dir . $dirname."<br><hr>";
						fwrite($outputfile, "<br><hr>FOLDER = ".$dir . $dirname."<br><hr>");
						
						while (($filename = readdir($dh2)) !== false) {
							$tablename = str_replace(".txt", "", $filename, $count);

							if ($filename !=  "."  &&  $filename != ".." ) {
								$filepath = $dir.$dirname."/".$filename;

								// ******************
								// *** IMPORT ***
								// ******************
								$sql = "LOAD DATA LOCAL INFILE '$filepath'
													INTO TABLE $tablename
													FIELDS TERMINATED BY '|' 
													LINES TERMINATED BY '\r\n'
													IGNORE 1 LINES
													";
								mysql_query($sql);
								if(mysql_error()) {
									echo "!!!!! ERROR MYSQL: ";
									fwrite($outputfile, "!!!!! ERROR MYSQL: ");
									echo(mysql_error());
									fwrite($outputfile, mysql_error());
									echo "<br>";
								} else {
									echo "-----Import of  ".$filepath." to table ".$tablename." successfull.<br>";
									fwrite($outputfile, "-----Import of  ".$filepath." to table ".$tablename." successfull.<br>");
								}
								// *** END IMPORT ***
							}
						}
				 }
			 }
        }
        closedir($dh);
    }
}
fwrite($outputfile, "</body>");
fwrite($outputfile, "</html>");
fclose($outputfile);

// ******************************************************************************************************
// ******************************************************************************************************
// >> End PHP Script  "Read and Import"
// ******************************************************************************************************
// ******************************************************************************************************



?>
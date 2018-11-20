<html>
<body>
<h1>natas12</h1>
<div id="content">
<? 
/*this is printed when the filleName does not exists */
function genRandomString() {
    $length = 10;
	//36 length
    $characters = "0123456789abcdefghijklmnopqrstuvwxyz";
    $string = "";    

    for ($p = 0; $p < $length; $p++) {
		//string gets 1 character from the characters table 
		//the character is been selected from the random function 0-35
        $string .= $characters[mt_rand(0, strlen($characters)-1)];//between 0-35
    }
	//length 10
    return $string;
}
						//upload
function makeRandomPath($dir, $ext) {
	//WHILE LOOP
    do {
		//puts in the variable $path the directory + a random  string +  ext(contains the path info) 
    $path = $dir."/".genRandomString().".".$ext; //path info the extension e.x. png,jpg,php.
	//path = upload/kfhfi0649hd.jpeg
	//getRandomString() has length=10
	//stops when the path already exists 
    } while(file_exists($path));
    return $path;
}
//									upload
function makeRandomPathFromFilename($dir, $fn) {
	// puts to ext the info to the path of the $fn variable (post "filename")
    $ext = pathinfo($fn, PATHINFO_EXTENSION);
	//returns the directory and the path info
	//calls makeRandomPath
	//					upload
    return makeRandomPath($dir, $ext);
}
//IF the key/name filename exist in $_Pos
if(array_key_exists("filename", $_POST)) {
    $target_path = makeRandomPathFromFilename("upload", $_POST["filename"]);


        if(filesize($_FILES['uploadedfile']['tmp_name']) > 1000) {
        echo "File is too big";
    } else {
        if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
            echo "The file <a href=\"$target_path\">$target_path</a> has been uploaded";
        } else{
            echo "There was an error uploading the file, please try again!";
        }
    }
} else {
?>

<form enctype="multipart/form-data" action="index.php" method="POST">
<input type="hidden" name="MAX_FILE_SIZE" value="1000" />
<input type="hidden" name="filename" value="<? print genRandomString(); ?>.jpg" />
Choose a JPEG to upload (max 1KB):<br/>
<input name="uploadedfile" type="file" /><br />
<input type="submit" value="Upload File" />
</form>
<? } ?>
<div id="viewsource"><a href="index-source.html">View sourcecode</a></div>
</div>
</body>
</html> 
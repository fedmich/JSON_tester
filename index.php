<?php
/*
 * JSON Tester v0.1
 */
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$json = $_POST['code'];
		$fol = dirname(__FILE__)."/saved";
		foreach(range(1,5000) as $i){
			$bs = "$i.json";
			$file = "$fol/$bs";
			if(! file_exists($file)){
				$red = "./saved/$bs";
				break;
			}
		}
		if(! empty($red)){
			file_put_contents( $file, $json);
			header("Location: $red"); exit();
		}
		
	}
?>
<title>JSON Tester</title>
<h1>JSON Tester</h1>
<hr />
<p>
	Paste the JSON code below and click Submit to save this code into a *.json file.
</p>

<br />

<form method="POST" action="">
	JSON Code
	<br />
	<textarea rows="6" cols="50" name="code" id="code"></textarea>
	<br />
	<input type="submit" value="Submit" />
</form>
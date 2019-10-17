<?php 
		// echo file_get_contents("http://bnb2.smartsoft-bd.com");
 function getData($url)
 { 	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch, CURLOPT_HEADER,0);
	curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1.7) Gecko/20091221 Firefox/3.5.7 GTB6 (.NET CLR 3.0.4506.2152)");
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
	curl_setopt($ch, CURLOPT_URL, $url);	
	$content = curl_exec($ch);
	curl_close($ch);
 
 	return $content;
 }

 $contents = getData("http://bnb2.smartsoft-bd.com/food-item/dark-chocolate-biscuit-200gm");
 	$get_content = explode('<title>',$contents);
 	$get_title = explode('</title>',$get_content[1]);
 	print_r($get_title[0]);
?>
<?php
	include('simple_html_dom.php');
	$html = file_get_html('https://truyenyy.com/truyen'.$_SERVER['REQUEST_URI'].'.html');

	// find all link
	foreach($html->find('a') as $e) 
	    echo $e->href . '<br>';
	
	foreach($html->find('h1') as $e)
		echo $e->innertext . '<br>';
	// foreach($html->find('div') as $e)
	// {
	// 	echo $e->id . '<br>';
	// 	foreach($html->find('div#'.$e->id) as $e)
 //    	echo $e->innertext . '<br>';
	// }
	foreach($html->find('div#inner_chap_content_1') as $e)
		echo $e->innertext . '<br>';
	foreach($html->find('div#inner_chap_content_2') as $e)
		echo $e->innertext . '<br>';
	// echo $html->find('text');

	// echo $html->plaintext;
?>

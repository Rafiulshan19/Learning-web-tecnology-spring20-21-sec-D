<?php

	//print_r($_FILES);
	$file_info = $_FILES['myfile'];
	//
	//print_r($_FILES['myfile']['name']);
	//echo $file_info['tmp_name'];
	// //$path ='upload/'.$file_info['name'];
	$ext= explode('.', $file_info['name']);
	$path ='../assets/'.time().".".$ext[1];

	if(move_uploaded_file($file_info['tmp_name'], $path)){
		 echo "success";
	}else{

		 echo "error";
	 }
?>
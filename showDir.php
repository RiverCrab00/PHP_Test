<?php
function showdir($path,$offest=0){
	if(is_dir($path)){
		$res=opendir($path);
		while (false!==($file=readdir($res))) {
			if($file=='.'||$file=='..'){
				continue;
			}
			$blank=str_repeat('&emsp;',$offest);
			$file=iconv('gbk','utf-8',$file);
			echo $blank.$file."<br>";
			$file=iconv('utf-8','gbk',$file);
			$full_path=$path.'/'.$file;
			if(is_dir($full_path)){
				showdir($full_path,$offest+1);
			}
		}
	}
}
showdir('../');

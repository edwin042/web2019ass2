<?php 
	//load template 
	function template($fileName, $temporaryVariable){
		extract($temporaryVariable);
		ob_start();
		//requiring the file name
		require $fileName;
		$content = ob_get_clean();
		return $content;
	}
?>
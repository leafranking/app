<?php
	require "Styles/lessc.inc.php";

	$inputFile = "Styles/style.less";
	$outputFile = "Styles/style.css";
	$isCompileLess = true;

	if($isCompileLess){
		$less = new lessc;
		$cache = $less->cachedCompile($inputFile);
		file_put_contents($outputFile, $cache["compiled"]);
		$last_updated = $cache["updated"];
		$cache = $less->cachedCompile($cache);
		file_put_contents($outputFile, $cache["compiled"]);
	}

?>

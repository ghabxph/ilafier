<?php

namespace Ilafier\SystemHelp;

use Ilafier\BasepathOperations\BasepathLocator;

class SystemHelp{

	function showHelp(){
		$initialHelpPath = (new BasepathLocator())->fromBasepathTo('SystemHelp/InitialHelp.txt');
		$initialHelpText = file_get_contents($initialHelpPath);
		return $initialHelpText;
	}
}
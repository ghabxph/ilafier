<?php

namespace Ilafier;

use Ilafier\SrcDestRetriever\Source;
use Ilafier\SrcDestRetriever\Destination;

class Ilafier{

	/**
	 * Copies or overwrites all the files from the source
	 * folder to the destination folder. File will be copied
	 * if it does not exist on the destination folder. File
	 * will be overwritten if the file exists in the destination
	 * folder, but the two files are different.
	 * @param  Source      $src  The source file
	 * @param  Destination $dest The destination file
	 */
	function ilafy(Source $src, Destination $dest){
		echo 'Processing src: ' . $src->getPath() . ' and dest: ' . $dest->getPath();
		$srcFiles = new Files($src);
		$destFiles = new Files($dest);
		$srcFiles->init();
		$destFiles->init();
	}
}
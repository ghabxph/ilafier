<?php

namespace Ilafier\Validator;

use Ilafier\SrcDestRetriever\Path;

class PathValidator{

	private $path;
	private $isInvalid;

	function validate(Path $path){
		// We put $path object in our field
		$this->path = $path;

		// We assume that everything is good
		$this->isInvalid = FALSE;

		// We convert the string into an absolute path
		$path = realpath($path->getPath());

		// We determine if realpath has error
		if($path === FALSE){

			// Path is therefore invalid
			$this->isInvalid = TRUE;
			return $this; // We return $this no matter what.
		}

		// We determine if our $path exist
		if(file_exists($path) == FALSE){

			// Path is therefore invalid
			$this->isInvalid = TRUE;
			return $this; // We return $this no matter what.
		}

		// At this point, our beloved path is existing and therefore, valid
		return $this; // We return $this no matter what.
	}

	function displayErrorAndDieIfInvalid(){
		// We check whether path validation fails.
		if($this->isInvalid){
			// We make sure whether path is a destination or source or simply a path.
			if($this->path->isDestination()){
				// Error message stating that destination path is invalid.
				die('The destination path is invalid.');
			}elseif($this->path->isSource()){
				// Error message stating that source path is invalid.
				die('The source path is invalid.');
			}else{
				// Error message stating that path is invalid.
				die('The path is invalid.');
			}
		}
	}
}
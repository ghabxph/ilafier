<?php

namespace Ilafier\Validator;

use Ilafier\SystemHelp\SystemHelp;

class ArgvValidator{
	private $arg_v;
	private $isInvalid;

	/**
	 * Instantiates ArgvValidator
	 * @param array the $argv variable
	 */
	function __construct(array $arg_v){
		$this->arg_v = $arg_v;
	}

	/**
	 * Validates argv.
	 * @return ArgvValidator This object.
	 */
	function validate(){
		// We assume that everything is not valid.
		$this->isInvalid = TRUE;

		// $argv should have exactly 3 entries (equivalent to 2 parameters).
		if(count($this->arg_v) == 3){
			$this->isInvalid = FALSE;
		}
		
		return $this;
	}

	/**
	 * Displays help and die if invalid
	 * Returns nothing.
	 */
	function displayHelpAndDieIfInvalid(){
		if($this->isInvalid){
			die((new SystemHelp())->showHelp());
		}
	}

	/**
	 * Determines whether the argv is good or not.
	 * @return boolean TRUE if good. FALSE if not good.
	 */
	function isOk(){
		// Returns the negated result of isInvalid variable.
		return !$this->isInvalid;
	}
}
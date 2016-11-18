<?php

namespace Ilafier\BasepathOperations;

class BasepathLocator{

	private $basePath;

	/**
	 * Instantiates Basepath locator.
	 */
	function __construct(){

		$this->basePath = realpath(__DIR__ . '/../../');
	}

	/**
	 * Returns the absolute path of a certain path from basepath.
	 * @return string The absolute path of a certain path from basepath.
	 *                    Will return FALSE when there's an error.
	 */
	function fromBasepathTo(string $path){
		// The absolute path string
		return realpath($this->basePath . '/' . $path);
	}

	/**
	 * Returns the absolute path of our basepath.
	 * @return string The absolute path of our basepath
	 *                    Will return FALSE when there's
	 *                    an error.
	 */
	function getBasepath(){
		// The absolute path of basePath
		return realpath($this->basePath);
	}
}
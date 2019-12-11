<?php
namespace Leaf\Veins\Template;

/**
 * Exception thrown when template file does not exists.
 */
class NotFoundException extends \Leaf\Core\Http\Response {
	public function __construct() {
		echo 'Template file not found, make sure you correctly configured Vein....and named your files with the ".vein" extension';
	}
}


// -- end

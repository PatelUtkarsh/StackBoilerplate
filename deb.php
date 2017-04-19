<?php

namespace EE\Stack;

class Deb implements Stack {

	/**
	 * Deb constructor.
	 */
	function __construct() {
		echo 'You\'re using ' . self::class . PHP_EOL;
	}

	/**
	 * Install new package
	 *
	 * @param string $package package name.
	 *
	 * @return mixed
	 */
	public function install( $package ) {
		echo "Installing $package" . PHP_EOL;
	}

	/**
	 * Update package
	 *
	 * @param string $package
	 *
	 * @return mixed
	 */
	public function update( $package = '' ) {
		echo "Updating $package" . PHP_EOL;
	}

	/**
	 * Determines if current os for stack manager is debian.
	 *
	 * @return bool
	 */
	public static function is_current_os() {
		// Todo Check if is current os is debian.
		return true;
	}
}

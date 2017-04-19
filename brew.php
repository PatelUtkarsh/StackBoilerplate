<?php

namespace EE\Stack;

class Brew implements Stack {

	/**
	 * Brew constructor.
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
	 * Determines if current os for stack manager is mac/brew.
	 *
	 * @return bool
	 */
	public static function is_current_os() {
		//todo Check is mac with brew support.
		return true;
	}
}

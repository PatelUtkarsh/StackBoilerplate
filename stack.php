<?php
namespace EE\Stack;

interface Stack {

	/**
	 * Install new package
	 *
	 * @param string $package package name.
	 *
	 * @return mixed
	 */
	public function install( $package );

	/**
	 * Update package
	 *
	 * @param string $package
	 *
	 * @return mixed
	 */
	public function update( $package = '' );

	/**
	 * Determines current os is from implemented class.
	 *
	 * @return bool
	 */
	public static function is_current_os();
}

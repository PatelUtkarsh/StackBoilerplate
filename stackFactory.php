<?php

namespace EE\Stack;

class StackFactory {
	/**
	 * Generate Stack OS.
	 *
	 * @param $os
	 *
	 * @return Stack|false
	 */
	public static function create( $os = '' ) {
		foreach ( get_declared_classes() as $class_name ) {
			if ( in_array( __NAMESPACE__ . '\\Stack', class_implements( $class_name ), true ) ) {
				if ( ! empty( $os ) ) {
					$short_class_name = ( new \ReflectionClass( $class_name ) )->getShortName();
					if ( strtolower( $short_class_name ) === strtolower( $os ) ) {
						return new $class_name();
					}
				} elseif ( $class_name::is_current_os() ) {
					return new $class_name;
				}
			}
		}

		if ( ! empty( $os ) ) {
			echo $os . ' is not yet supported' . PHP_EOL;
		} else {
			echo 'Something went wrong please contact easyengine support {link}' . PHP_EOL;
		}
		return false;
	}
}

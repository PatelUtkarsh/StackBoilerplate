<?php

/**
 * Example usage of stack.
 */
use EE\Stack\StackFactory;

require_once 'stack.php';
require_once 'brew.php';
require_once 'deb.php';
require_once 'stackFactory.php';

$deb = StackFactory::create( 'deb' );
$deb->install( 'nginx' );

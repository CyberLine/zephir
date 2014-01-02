<?php

/*
 +--------------------------------------------------------------------------+
 | Zephir Language                                                          |
 +--------------------------------------------------------------------------+
 | Copyright (c) 2013-2014 Zephir Team and contributors                     |
 +--------------------------------------------------------------------------+
 | This source file is subject the MIT license, that is bundled with        |
 | this package in the file LICENSE, and is available through the           |
 | world-wide-web at the following url:                                     |
 | http://zephir-lang.com/license.html                                      |
 |                                                                          |
 | If you did not receive a copy of the MIT license and are unable          |
 | to obtain it through the world-wide-web, please send a note to           |
 | license@zephir-lang.com so we can mail you a copy immediately.           |
 +--------------------------------------------------------------------------+
*/

/**
 * CompilerException
 *
 * Exceptions generated by the compiler
 */
class CompilerException extends Exception
{
	protected $_extra;

	/**
	 *
	 * @param string $message
	 * @param array $extra
	 */
	public function __construct($message, $extra=null)
	{
		if (is_array($extra)) {
			if (isset($extra['file'])) {
				$message .= " in " . $extra['file'] . " on line " . $extra['line'];
			}
		}
		$this->_extra = $extra;
		parent::__construct($message);
	}

	public function getExtra()
	{
		return $this->_extra;
	}
}
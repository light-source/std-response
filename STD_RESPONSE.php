<?php

namespace StdResponse;

/**
 * Class STD_RESPONSE
 * @package StdResponse
 */
abstract class STD_RESPONSE {


	//////// constants


	const KEY_IS_SUCCESS = 'isSuccess';
	const KEY_ARGS = 'args';
	const KEY_E_MSGS = 'errorMsgs';


	//////// static methods


	/**
	 * @param array $args
	 * @param bool $isSuccess
	 * @param array $errorMsgs
	 *
	 * @return array
	 */
	final public static function StdResponse( $args = [], $isSuccess = false, $errorMsgs = [] ) {

		// remove args for not success response

		if ( ! $isSuccess ) {
			$args = [];
		}

		return [
			self::KEY_IS_SUCCESS => $isSuccess,
			self::KEY_ARGS       => $args,
			self::KEY_E_MSGS     => $errorMsgs,
		];
	}

}
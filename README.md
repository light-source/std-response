# std-response

## What is it
Standardization for a function / method response with multiple arguments

## Create response from function / method

```
use LightSource\StdResponse\STD_RESPONSE;

require_once __DIR__ . '/vendor/autoload.php';

function calc( $a, $b ) {

	$value     = $a + $b;
	$isSuccess = $value > $a;

	return STD_RESPONSE::StdResponse( [ 'value' => 10, ], $isSuccess );
}

$result = calc( 10, 20 );

if ( $result[ STD_RESPONSE::KEY_IS_SUCCESS ] ) {
	$value = $result[ STD_RESPONSE::KEY_ARGS ]['value'];
	// TODO
} else {
	$errorMessages = $result[ STD_RESPONSE::KEY_E_MSGS ];
	// TODO
}
```

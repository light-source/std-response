# Std Response
[![Latest Stable Version](https://poser.pugx.org/lightsource/std-response/v)](//packagist.org/packages/lightsource/std-response)
[![Total Downloads](https://poser.pugx.org/lightsource/std-response/downloads)](//packagist.org/packages/lightsource/std-response)
[![Monthly Downloads](https://poser.pugx.org/lightsource/std-response/d/monthly)](//packagist.org/packages/lightsource/std-response)
[![Daily Downloads](https://poser.pugx.org/lightsource/std-response/d/daily)](//packagist.org/packages/lightsource/std-response)
[![License](https://poser.pugx.org/lightsource/std-response/license)](//packagist.org/packages/lightsource/std-response)

## What is it
Standardization for a function / method response with multiple arguments

## Installation
```
composer require lightsource/std-response
```

## Example of usage

```
use LightSource\StdResponse\STD_RESPONSE;

require_once __DIR__ . '/vendor/autoload.php';

function calc( $a, $b ) {

	$value     = $a + $b;
	$isSuccess = $value > $a;

	return STD_RESPONSE::Create( [ 'value' => 10, ], $isSuccess );
}

$result = calc( 10, 20 );

if ( $result[ STD_RESPONSE::IS_SUCCESS ] ) {
	$value = $result[ STD_RESPONSE::ARGS ]['value'];
	// TODO
} else {
	$errorMessages = $result[ STD_RESPONSE::E_MSGS ];
	// TODO
}
```

<?php declare(strict_types = 1);

// osfsl-E:/mywork/laragon/www/MohammedSA/naqliyahtak/vendor/composer/../laravel/framework/src/Illuminate/Http/Client/Response.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Http\Client\Response
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-ce8a633efb92c3e4671bb37c66e27f1084f5703021b7ea8c4bd6ede33e143737-8.2.29-6.70.0.0',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Http\\Client\\Response',
        'filename' => 'E:/mywork/laragon/www/MohammedSA/naqliyahtak/vendor/composer/../laravel/framework/src/Illuminate/Http/Client/Response.php',
      ),
    ),
    'namespace' => 'Illuminate\\Http\\Client',
    'name' => 'Illuminate\\Http\\Client\\Response',
    'shortName' => 'Response',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * @mixin \\Psr\\Http\\Message\\ResponseInterface
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 16,
    'endLine' => 576,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'ArrayAccess',
      1 => 'Stringable',
    ),
    'traitClassNames' => 
    array (
      0 => 'Illuminate\\Http\\Client\\Concerns\\DeterminesStatusCode',
      1 => 'Illuminate\\Support\\Traits\\Macroable',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'response' => 
      array (
        'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
        'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
        'name' => 'response',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The underlying PSR response.
 *
 * @var \\Psr\\Http\\Message\\ResponseInterface
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 27,
        'endLine' => 27,
        'startColumn' => 5,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'decoded' => 
      array (
        'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
        'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
        'name' => 'decoded',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The decoded JSON response.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 34,
        'endLine' => 34,
        'startColumn' => 5,
        'endColumn' => 23,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'cookies' => 
      array (
        'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
        'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
        'name' => 'cookies',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The request cookies.
 *
 * @var \\GuzzleHttp\\Cookie\\CookieJar
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 41,
        'endLine' => 41,
        'startColumn' => 5,
        'endColumn' => 20,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'transferStats' => 
      array (
        'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
        'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
        'name' => 'transferStats',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The transfer stats for the request.
 *
 * @var \\GuzzleHttp\\TransferStats|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 48,
        'endLine' => 48,
        'startColumn' => 5,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'truncateExceptionsAt' => 
      array (
        'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
        'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
        'name' => 'truncateExceptionsAt',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'null',
          'attributes' => 
          array (
            'startLine' => 55,
            'endLine' => 55,
            'startTokenPos' => 111,
            'startFilePos' => 1076,
            'endTokenPos' => 111,
            'endFilePos' => 1079,
          ),
        ),
        'docComment' => '/**
 * The length at which request exceptions will be truncated.
 *
 * @var int<1, max>|false|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 55,
        'endLine' => 55,
        'startColumn' => 5,
        'endColumn' => 43,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
    ),
    'immediateMethods' => 
    array (
      '__construct' => 
      array (
        'name' => '__construct',
        'parameters' => 
        array (
          'response' => 
          array (
            'name' => 'response',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62,
            'endLine' => 62,
            'startColumn' => 33,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a new response instance.
 *
 * @param  \\Psr\\Http\\Message\\MessageInterface  $response
 */',
        'startLine' => 62,
        'endLine' => 65,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http\\Client',
        'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
        'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
        'currentClassName' => 'Illuminate\\Http\\Client\\Response',
        'aliasName' => NULL,
      ),
      'body' => 
      array (
        'name' => 'body',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the body of the response.
 *
 * @return string
 */',
        'startLine' => 72,
        'endLine' => 75,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http\\Client',
        'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
        'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
        'currentClassName' => 'Illuminate\\Http\\Client\\Response',
        'aliasName' => NULL,
      ),
      'json' => 
      array (
        'name' => 'json',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 84,
                'endLine' => 84,
                'startTokenPos' => 177,
                'startFilePos' => 1691,
                'endTokenPos' => 177,
                'endFilePos' => 1694,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 84,
            'endLine' => 84,
            'startColumn' => 26,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'default' => 
          array (
            'name' => 'default',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 84,
                'endLine' => 84,
                'startTokenPos' => 184,
                'startFilePos' => 1708,
                'endTokenPos' => 184,
                'endFilePos' => 1711,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 84,
            'endLine' => 84,
            'startColumn' => 39,
            'endColumn' => 53,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the JSON decoded body of the response as an array or scalar value.
 *
 * @param  string|null  $key
 * @param  mixed  $default
 * @return mixed
 */',
        'startLine' => 84,
        'endLine' => 95,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http\\Client',
        'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
        'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
        'currentClassName' => 'Illuminate\\Http\\Client\\Response',
        'aliasName' => NULL,
      ),
      'object' => 
      array (
        'name' => 'object',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the JSON decoded body of the response as an object.
 *
 * @return object|null
 */',
        'startLine' => 102,
        'endLine' => 105,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http\\Client',
        'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
        'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
        'currentClassName' => 'Illuminate\\Http\\Client\\Response',
        'aliasName' => NULL,
      ),
      'collect' => 
      array (
        'name' => 'collect',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 113,
                'endLine' => 113,
                'startTokenPos' => 301,
                'startFilePos' => 2373,
                'endTokenPos' => 301,
                'endFilePos' => 2376,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 113,
            'endLine' => 113,
            'startColumn' => 29,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the JSON decoded body of the response as a collection.
 *
 * @param  string|null  $key
 * @return \\Illuminate\\Support\\Collection
 */',
        'startLine' => 113,
        'endLine' => 116,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http\\Client',
        'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
        'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
        'currentClassName' => 'Illuminate\\Http\\Client\\Response',
        'aliasName' => NULL,
      ),
      'fluent' => 
      array (
        'name' => 'fluent',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 124,
                'endLine' => 124,
                'startTokenPos' => 335,
                'startFilePos' => 2643,
                'endTokenPos' => 335,
                'endFilePos' => 2646,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 124,
            'endLine' => 124,
            'startColumn' => 28,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the JSON decoded body of the response as a fluent object.
 *
 * @param  string|null  $key
 * @return \\Illuminate\\Support\\Fluent
 */',
        'startLine' => 124,
        'endLine' => 127,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http\\Client',
        'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
        'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
        'currentClassName' => 'Illuminate\\Http\\Client\\Response',
        'aliasName' => NULL,
      ),
      'resource' => 
      array (
        'name' => 'resource',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the body of the response as a PHP resource.
 *
 * @return resource
 *
 * @throws \\InvalidArgumentException
 */',
        'startLine' => 136,
        'endLine' => 139,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http\\Client',
        'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
        'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
        'currentClassName' => 'Illuminate\\Http\\Client\\Response',
        'aliasName' => NULL,
      ),
      'header' => 
      array (
        'name' => 'header',
        'parameters' => 
        array (
          'header' => 
          array (
            'name' => 'header',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 147,
            'endLine' => 147,
            'startColumn' => 28,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get a header from the response.
 *
 * @param  string  $header
 * @return string
 */',
        'startLine' => 147,
        'endLine' => 150,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http\\Client',
        'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
        'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
        'currentClassName' => 'Illuminate\\Http\\Client\\Response',
        'aliasName' => NULL,
      ),
      'headers' => 
      array (
        'name' => 'headers',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the headers from the response.
 *
 * @return array
 */',
        'startLine' => 157,
        'endLine' => 160,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http\\Client',
        'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
        'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
        'currentClassName' => 'Illuminate\\Http\\Client\\Response',
        'aliasName' => NULL,
      ),
      'status' => 
      array (
        'name' => 'status',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the status code of the response.
 *
 * @return int
 */',
        'startLine' => 167,
        'endLine' => 170,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http\\Client',
        'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
        'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
        'currentClassName' => 'Illuminate\\Http\\Client\\Response',
        'aliasName' => NULL,
      ),
      'reason' => 
      array (
        'name' => 'reason',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the reason phrase of the response.
 *
 * @return string
 */',
        'startLine' => 177,
        'endLine' => 180,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http\\Client',
        'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
        'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
        'currentClassName' => 'Illuminate\\Http\\Client\\Response',
        'aliasName' => NULL,
      ),
      'effectiveUri' => 
      array (
        'name' => 'effectiveUri',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the effective URI of the response.
 *
 * @return \\Psr\\Http\\Message\\UriInterface|null
 */',
        'startLine' => 187,
        'endLine' => 190,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http\\Client',
        'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
        'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
        'currentClassName' => 'Illuminate\\Http\\Client\\Response',
        'aliasName' => NULL,
      ),
      'successful' => 
      array (
        'name' => 'successful',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the request was successful.
 *
 * @return bool
 */',
        'startLine' => 197,
        'endLine' => 200,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http\\Client',
        'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
        'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
        'currentClassName' => 'Illuminate\\Http\\Client\\Response',
        'aliasName' => NULL,
      ),
      'redirect' => 
      array (
        'name' => 'redirect',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the response was a redirect.
 *
 * @return bool
 */',
        'startLine' => 207,
        'endLine' => 210,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http\\Client',
        'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
        'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
        'currentClassName' => 'Illuminate\\Http\\Client\\Response',
        'aliasName' => NULL,
      ),
      'failed' => 
      array (
        'name' => 'failed',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the response indicates a client or server error occurred.
 *
 * @return bool
 */',
        'startLine' => 217,
        'endLine' => 220,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http\\Client',
        'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
        'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
        'currentClassName' => 'Illuminate\\Http\\Client\\Response',
        'aliasName' => NULL,
      ),
      'clientError' => 
      array (
        'name' => 'clientError',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the response indicates a client error occurred.
 *
 * @return bool
 */',
        'startLine' => 227,
        'endLine' => 230,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http\\Client',
        'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
        'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
        'currentClassName' => 'Illuminate\\Http\\Client\\Response',
        'aliasName' => NULL,
      ),
      'serverError' => 
      array (
        'name' => 'serverError',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the response indicates a server error occurred.
 *
 * @return bool
 */',
        'startLine' => 237,
        'endLine' => 240,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http\\Client',
        'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
        'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
        'currentClassName' => 'Illuminate\\Http\\Client\\Response',
        'aliasName' => NULL,
      ),
      'onError' => 
      array (
        'name' => 'onError',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'callable',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 248,
            'endLine' => 248,
            'startColumn' => 29,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Execute the given callback if there was a server or client error.
 *
 * @param  callable|(\\Closure(\\Illuminate\\Http\\Client\\Response): mixed)  $callback
 * @return $this
 */',
        'startLine' => 248,
        'endLine' => 255,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http\\Client',
        'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
        'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
        'currentClassName' => 'Illuminate\\Http\\Client\\Response',
        'aliasName' => NULL,
      ),
      'cookies' => 
      array (
        'name' => 'cookies',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the response cookies.
 *
 * @return \\GuzzleHttp\\Cookie\\CookieJar
 */',
        'startLine' => 262,
        'endLine' => 265,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http\\Client',
        'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
        'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
        'currentClassName' => 'Illuminate\\Http\\Client\\Response',
        'aliasName' => NULL,
      ),
      'handlerStats' => 
      array (
        'name' => 'handlerStats',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the handler stats of the response.
 *
 * @return array
 */',
        'startLine' => 272,
        'endLine' => 275,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http\\Client',
        'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
        'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
        'currentClassName' => 'Illuminate\\Http\\Client\\Response',
        'aliasName' => NULL,
      ),
      'close' => 
      array (
        'name' => 'close',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Close the stream and any underlying resources.
 *
 * @return $this
 */',
        'startLine' => 282,
        'endLine' => 287,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http\\Client',
        'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
        'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
        'currentClassName' => 'Illuminate\\Http\\Client\\Response',
        'aliasName' => NULL,
      ),
      'toPsrResponse' => 
      array (
        'name' => 'toPsrResponse',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the underlying PSR response for the response.
 *
 * @return \\Psr\\Http\\Message\\ResponseInterface
 */',
        'startLine' => 294,
        'endLine' => 297,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http\\Client',
        'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
        'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
        'currentClassName' => 'Illuminate\\Http\\Client\\Response',
        'aliasName' => NULL,
      ),
      'toException' => 
      array (
        'name' => 'toException',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create an exception if a server or client error occurred.
 *
 * @return \\Illuminate\\Http\\Client\\RequestException|null
 */',
        'startLine' => 304,
        'endLine' => 321,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http\\Client',
        'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
        'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
        'currentClassName' => 'Illuminate\\Http\\Client\\Response',
        'aliasName' => NULL,
      ),
      'throw' => 
      array (
        'name' => 'throw',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Throw an exception if a server or client error occurred.
 *
 * @return $this
 *
 * @throws \\Illuminate\\Http\\Client\\RequestException
 */',
        'startLine' => 330,
        'endLine' => 343,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http\\Client',
        'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
        'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
        'currentClassName' => 'Illuminate\\Http\\Client\\Response',
        'aliasName' => NULL,
      ),
      'throwIf' => 
      array (
        'name' => 'throwIf',
        'parameters' => 
        array (
          'condition' => 
          array (
            'name' => 'condition',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 353,
            'endLine' => 353,
            'startColumn' => 29,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Throw an exception if a server or client error occurred and the given condition evaluates to true.
 *
 * @param  \\Closure|bool  $condition
 * @return $this
 *
 * @throws \\Illuminate\\Http\\Client\\RequestException
 */',
        'startLine' => 353,
        'endLine' => 356,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http\\Client',
        'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
        'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
        'currentClassName' => 'Illuminate\\Http\\Client\\Response',
        'aliasName' => NULL,
      ),
      'throwIfStatus' => 
      array (
        'name' => 'throwIfStatus',
        'parameters' => 
        array (
          'statusCode' => 
          array (
            'name' => 'statusCode',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 366,
            'endLine' => 366,
            'startColumn' => 35,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Throw an exception if the response status code matches the given code.
 *
 * @param  int|(\\Closure(int, \\Illuminate\\Http\\Client\\Response): bool)|callable  $statusCode
 * @return $this
 *
 * @throws \\Illuminate\\Http\\Client\\RequestException
 */',
        'startLine' => 366,
        'endLine' => 374,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http\\Client',
        'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
        'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
        'currentClassName' => 'Illuminate\\Http\\Client\\Response',
        'aliasName' => NULL,
      ),
      'throwUnlessStatus' => 
      array (
        'name' => 'throwUnlessStatus',
        'parameters' => 
        array (
          'statusCode' => 
          array (
            'name' => 'statusCode',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 384,
            'endLine' => 384,
            'startColumn' => 39,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Throw an exception unless the response status code matches the given code.
 *
 * @param  int|(\\Closure(int, \\Illuminate\\Http\\Client\\Response): bool)|callable  $statusCode
 * @return $this
 *
 * @throws \\Illuminate\\Http\\Client\\RequestException
 */',
        'startLine' => 384,
        'endLine' => 391,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http\\Client',
        'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
        'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
        'currentClassName' => 'Illuminate\\Http\\Client\\Response',
        'aliasName' => NULL,
      ),
      'throwIfClientError' => 
      array (
        'name' => 'throwIfClientError',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Throw an exception if the response status code is a 4xx level code.
 *
 * @return $this
 *
 * @throws \\Illuminate\\Http\\Client\\RequestException
 */',
        'startLine' => 400,
        'endLine' => 403,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http\\Client',
        'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
        'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
        'currentClassName' => 'Illuminate\\Http\\Client\\Response',
        'aliasName' => NULL,
      ),
      'throwIfServerError' => 
      array (
        'name' => 'throwIfServerError',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Throw an exception if the response status code is a 5xx level code.
 *
 * @return $this
 *
 * @throws \\Illuminate\\Http\\Client\\RequestException
 */',
        'startLine' => 412,
        'endLine' => 415,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http\\Client',
        'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
        'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
        'currentClassName' => 'Illuminate\\Http\\Client\\Response',
        'aliasName' => NULL,
      ),
      'truncateExceptionsAt' => 
      array (
        'name' => 'truncateExceptionsAt',
        'parameters' => 
        array (
          'length' => 
          array (
            'name' => 'length',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 423,
            'endLine' => 423,
            'startColumn' => 42,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Indicate that request exceptions should be truncated to the given length.
 *
 * @param  int<1, max>  $length
 * @return $this
 */',
        'startLine' => 423,
        'endLine' => 428,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http\\Client',
        'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
        'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
        'currentClassName' => 'Illuminate\\Http\\Client\\Response',
        'aliasName' => NULL,
      ),
      'dontTruncateExceptions' => 
      array (
        'name' => 'dontTruncateExceptions',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Indicate that request exceptions should not be truncated.
 *
 * @return $this
 */',
        'startLine' => 435,
        'endLine' => 440,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http\\Client',
        'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
        'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
        'currentClassName' => 'Illuminate\\Http\\Client\\Response',
        'aliasName' => NULL,
      ),
      'dump' => 
      array (
        'name' => 'dump',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 448,
                'endLine' => 448,
                'startTokenPos' => 1402,
                'startFilePos' => 10272,
                'endTokenPos' => 1402,
                'endFilePos' => 10275,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 448,
            'endLine' => 448,
            'startColumn' => 26,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Dump the content from the response.
 *
 * @param  string|null  $key
 * @return $this
 */',
        'startLine' => 448,
        'endLine' => 465,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http\\Client',
        'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
        'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
        'currentClassName' => 'Illuminate\\Http\\Client\\Response',
        'aliasName' => NULL,
      ),
      'dd' => 
      array (
        'name' => 'dd',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 473,
                'endLine' => 473,
                'startTokenPos' => 1509,
                'startFilePos' => 10782,
                'endTokenPos' => 1509,
                'endFilePos' => 10785,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 473,
            'endLine' => 473,
            'startColumn' => 24,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Dump the content from the response and end the script.
 *
 * @param  string|null  $key
 * @return never
 */',
        'startLine' => 473,
        'endLine' => 478,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http\\Client',
        'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
        'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
        'currentClassName' => 'Illuminate\\Http\\Client\\Response',
        'aliasName' => NULL,
      ),
      'dumpHeaders' => 
      array (
        'name' => 'dumpHeaders',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Dump the headers from the response.
 *
 * @return $this
 */',
        'startLine' => 485,
        'endLine' => 490,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http\\Client',
        'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
        'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
        'currentClassName' => 'Illuminate\\Http\\Client\\Response',
        'aliasName' => NULL,
      ),
      'ddHeaders' => 
      array (
        'name' => 'ddHeaders',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Dump the headers from the response and end the script.
 *
 * @return never
 */',
        'startLine' => 497,
        'endLine' => 502,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http\\Client',
        'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
        'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
        'currentClassName' => 'Illuminate\\Http\\Client\\Response',
        'aliasName' => NULL,
      ),
      'offsetExists' => 
      array (
        'name' => 'offsetExists',
        'parameters' => 
        array (
          'offset' => 
          array (
            'name' => 'offset',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 510,
            'endLine' => 510,
            'startColumn' => 34,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the given offset exists.
 *
 * @param  string  $offset
 * @return bool
 */',
        'startLine' => 510,
        'endLine' => 513,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http\\Client',
        'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
        'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
        'currentClassName' => 'Illuminate\\Http\\Client\\Response',
        'aliasName' => NULL,
      ),
      'offsetGet' => 
      array (
        'name' => 'offsetGet',
        'parameters' => 
        array (
          'offset' => 
          array (
            'name' => 'offset',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 521,
            'endLine' => 521,
            'startColumn' => 31,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'mixed',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the value for a given offset.
 *
 * @param  string  $offset
 * @return mixed
 */',
        'startLine' => 521,
        'endLine' => 524,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http\\Client',
        'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
        'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
        'currentClassName' => 'Illuminate\\Http\\Client\\Response',
        'aliasName' => NULL,
      ),
      'offsetSet' => 
      array (
        'name' => 'offsetSet',
        'parameters' => 
        array (
          'offset' => 
          array (
            'name' => 'offset',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 535,
            'endLine' => 535,
            'startColumn' => 31,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 535,
            'endLine' => 535,
            'startColumn' => 40,
            'endColumn' => 45,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set the value at the given offset.
 *
 * @param  string  $offset
 * @param  mixed  $value
 * @return void
 *
 * @throws \\LogicException
 */',
        'startLine' => 535,
        'endLine' => 538,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http\\Client',
        'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
        'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
        'currentClassName' => 'Illuminate\\Http\\Client\\Response',
        'aliasName' => NULL,
      ),
      'offsetUnset' => 
      array (
        'name' => 'offsetUnset',
        'parameters' => 
        array (
          'offset' => 
          array (
            'name' => 'offset',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 548,
            'endLine' => 548,
            'startColumn' => 33,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Unset the value at the given offset.
 *
 * @param  string  $offset
 * @return void
 *
 * @throws \\LogicException
 */',
        'startLine' => 548,
        'endLine' => 551,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http\\Client',
        'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
        'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
        'currentClassName' => 'Illuminate\\Http\\Client\\Response',
        'aliasName' => NULL,
      ),
      '__toString' => 
      array (
        'name' => '__toString',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the body of the response.
 *
 * @return string
 */',
        'startLine' => 558,
        'endLine' => 561,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http\\Client',
        'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
        'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
        'currentClassName' => 'Illuminate\\Http\\Client\\Response',
        'aliasName' => NULL,
      ),
      '__call' => 
      array (
        'name' => '__call',
        'parameters' => 
        array (
          'method' => 
          array (
            'name' => 'method',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 570,
            'endLine' => 570,
            'startColumn' => 28,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'parameters' => 
          array (
            'name' => 'parameters',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 570,
            'endLine' => 570,
            'startColumn' => 37,
            'endColumn' => 47,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Dynamically proxy other methods to the underlying response.
 *
 * @param  string  $method
 * @param  array  $parameters
 * @return mixed
 */',
        'startLine' => 570,
        'endLine' => 575,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Http\\Client',
        'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
        'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
        'currentClassName' => 'Illuminate\\Http\\Client\\Response',
        'aliasName' => NULL,
      ),
    ),
    'traitsData' => 
    array (
      'aliases' => 
      array (
        'Illuminate\\Http\\Client\\Concerns\\DeterminesStatusCode' => 
        array (
          0 => 
          array (
            'alias' => 'macroCall',
            'method' => '__call',
            'hash' => 'illuminate\\http\\client\\concerns\\determinesstatuscode::__call',
          ),
        ),
        'Illuminate\\Support\\Traits\\Macroable' => 
        array (
          0 => 
          array (
            'alias' => 'macroCall',
            'method' => '__call',
            'hash' => 'illuminate\\support\\traits\\macroable::__call',
          ),
        ),
      ),
      'modifiers' => 
      array (
      ),
      'precedences' => 
      array (
      ),
      'hashes' => 
      array (
        'illuminate\\http\\client\\concerns\\determinesstatuscode::__call' => 'Illuminate\\Http\\Client\\Concerns\\DeterminesStatusCode::__call',
        'illuminate\\support\\traits\\macroable::__call' => 'Illuminate\\Support\\Traits\\Macroable::__call',
      ),
    ),
  ),
));
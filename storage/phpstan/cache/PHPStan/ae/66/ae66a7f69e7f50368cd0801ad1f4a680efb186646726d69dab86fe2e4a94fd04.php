<?php declare(strict_types = 1);

// odsl-E:/mywork/laragon/www/MohammedSA/naqliyahtak/vendor/composer/../laravel/framework/src/Illuminate/Foundation/helpers.php-PHPStan\BetterReflection\Reflection\ReflectionFunction-logs
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.0-8.2.29-06521891e479e2b8cdd98f093067aea8d71366c24cdc03347705364aba095b0f',
   'data' => 
  array (
    'name' => 'logs',
    'parameters' => 
    array (
      'driver' => 
      array (
        'name' => 'driver',
        'default' => 
        array (
          'code' => '\\null',
          'attributes' => 
          array (
            'startLine' => 582,
            'endLine' => 582,
            'startTokenPos' => 2639,
            'startFilePos' => 16253,
            'endTokenPos' => 2639,
            'endFilePos' => 16256,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 582,
        'endLine' => 582,
        'startColumn' => 19,
        'endColumn' => 32,
        'parameterIndex' => 0,
        'isOptional' => true,
      ),
    ),
    'returnsReference' => false,
    'returnType' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
      'data' => 
      array (
        'types' => 
        array (
          0 => 
          array (
            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
            'data' => 
            array (
              'name' => 'Psr\\Log\\LoggerInterface',
              'isIdentifier' => false,
            ),
          ),
          1 => 
          array (
            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
            'data' => 
            array (
              'name' => 'Illuminate\\Log\\LogManager',
              'isIdentifier' => false,
            ),
          ),
        ),
      ),
    ),
    'attributes' => 
    array (
    ),
    'docComment' => '/**
 * Get a log driver instance.
 *
 * @param  string|null  $driver
 * @return ($driver is null ? \\Illuminate\\Log\\LogManager : \\Psr\\Log\\LoggerInterface)
 */',
    'startLine' => 582,
    'endLine' => 585,
    'startColumn' => 5,
    'endColumn' => 5,
    'couldThrow' => false,
    'isClosure' => false,
    'isGenerator' => false,
    'isVariadic' => false,
    'isStatic' => false,
    'namespace' => NULL,
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'logs',
        'filename' => 'E:/mywork/laragon/www/MohammedSA/naqliyahtak/vendor/composer/../laravel/framework/src/Illuminate/Foundation/helpers.php',
      ),
    ),
  ),
));
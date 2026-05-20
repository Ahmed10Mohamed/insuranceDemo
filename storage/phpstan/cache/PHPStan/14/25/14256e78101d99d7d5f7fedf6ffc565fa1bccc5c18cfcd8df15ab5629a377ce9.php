<?php declare(strict_types = 1);

// odsl-E:/mywork/laragon/www/MohammedSA/naqliyahtak/vendor/composer/../laravel/framework/src/Illuminate/Foundation/helpers.php-PHPStan\BetterReflection\Reflection\ReflectionFunction-dispatch
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.0-8.2.29-06521891e479e2b8cdd98f093067aea8d71366c24cdc03347705364aba095b0f',
   'data' => 
  array (
    'name' => 'dispatch',
    'parameters' => 
    array (
      'job' => 
      array (
        'name' => 'job',
        'default' => NULL,
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 457,
        'endLine' => 457,
        'startColumn' => 23,
        'endColumn' => 26,
        'parameterIndex' => 0,
        'isOptional' => false,
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
              'name' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
              'isIdentifier' => false,
            ),
          ),
          1 => 
          array (
            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
            'data' => 
            array (
              'name' => 'Illuminate\\Foundation\\Bus\\PendingClosureDispatch',
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
 * Dispatch a job to its appropriate handler.
 *
 * @param  mixed  $job
 * @return ($job is \\Closure ? \\Illuminate\\Foundation\\Bus\\PendingClosureDispatch : \\Illuminate\\Foundation\\Bus\\PendingDispatch)
 */',
    'startLine' => 457,
    'endLine' => 462,
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
        'name' => 'dispatch',
        'filename' => 'E:/mywork/laragon/www/MohammedSA/naqliyahtak/vendor/composer/../laravel/framework/src/Illuminate/Foundation/helpers.php',
      ),
    ),
  ),
));
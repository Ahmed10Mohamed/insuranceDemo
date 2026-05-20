<?php declare(strict_types = 1);

// odsl-E:/mywork/laragon/www/MohammedSA/naqliyahtak/vendor/composer/../laravel/framework/src/Illuminate/Foundation/helpers.php-PHPStan\BetterReflection\Reflection\ReflectionFunction-response
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.0-8.2.29-06521891e479e2b8cdd98f093067aea8d71366c24cdc03347705364aba095b0f',
   'data' => 
  array (
    'name' => 'response',
    'parameters' => 
    array (
      'content' => 
      array (
        'name' => 'content',
        'default' => 
        array (
          'code' => '\\null',
          'attributes' => 
          array (
            'startLine' => 849,
            'endLine' => 849,
            'startTokenPos' => 3743,
            'startFilePos' => 22859,
            'endTokenPos' => 3743,
            'endFilePos' => 22862,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 849,
        'endLine' => 849,
        'startColumn' => 23,
        'endColumn' => 37,
        'parameterIndex' => 0,
        'isOptional' => true,
      ),
      'status' => 
      array (
        'name' => 'status',
        'default' => 
        array (
          'code' => '200',
          'attributes' => 
          array (
            'startLine' => 849,
            'endLine' => 849,
            'startTokenPos' => 3750,
            'startFilePos' => 22875,
            'endTokenPos' => 3750,
            'endFilePos' => 22877,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 849,
        'endLine' => 849,
        'startColumn' => 40,
        'endColumn' => 52,
        'parameterIndex' => 1,
        'isOptional' => true,
      ),
      'headers' => 
      array (
        'name' => 'headers',
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 849,
            'endLine' => 849,
            'startTokenPos' => 3759,
            'startFilePos' => 22897,
            'endTokenPos' => 3760,
            'endFilePos' => 22898,
          ),
        ),
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 849,
        'endLine' => 849,
        'startColumn' => 55,
        'endColumn' => 73,
        'parameterIndex' => 2,
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
              'name' => 'Illuminate\\Contracts\\Routing\\ResponseFactory',
              'isIdentifier' => false,
            ),
          ),
          1 => 
          array (
            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
            'data' => 
            array (
              'name' => 'Illuminate\\Http\\Response',
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
 * Return a new response from the application.
 *
 * @param  \\Illuminate\\Contracts\\View\\View|string|array|null  $content
 * @param  int  $status
 * @return ($content is null ? \\Illuminate\\Contracts\\Routing\\ResponseFactory : \\Illuminate\\Http\\Response)
 */',
    'startLine' => 849,
    'endLine' => 858,
    'startColumn' => 5,
    'endColumn' => 5,
    'couldThrow' => false,
    'isClosure' => false,
    'isGenerator' => false,
    'isVariadic' => true,
    'isStatic' => false,
    'namespace' => NULL,
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'response',
        'filename' => 'E:/mywork/laragon/www/MohammedSA/naqliyahtak/vendor/composer/../laravel/framework/src/Illuminate/Foundation/helpers.php',
      ),
    ),
  ),
));
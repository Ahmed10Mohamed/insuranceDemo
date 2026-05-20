<?php declare(strict_types = 1);

// odsl-E:/mywork/laragon/www/MohammedSA/naqliyahtak/vendor/composer/../laravel/framework/src/Illuminate/Support/helpers.php-PHPStan\BetterReflection\Reflection\ReflectionFunction-optional
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.0-8.2.29-3ab5e091af53cbc47b3fa7bba1695ea66ebc87526d15e04140e60c6e940bfee3',
   'data' => 
  array (
    'name' => 'optional',
    'parameters' => 
    array (
      'value' => 
      array (
        'name' => 'value',
        'default' => 
        array (
          'code' => '\\null',
          'attributes' => 
          array (
            'startLine' => 270,
            'endLine' => 270,
            'startTokenPos' => 1181,
            'startFilePos' => 6665,
            'endTokenPos' => 1181,
            'endFilePos' => 6668,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 270,
        'endLine' => 270,
        'startColumn' => 23,
        'endColumn' => 35,
        'parameterIndex' => 0,
        'isOptional' => true,
      ),
      'callback' => 
      array (
        'name' => 'callback',
        'default' => 
        array (
          'code' => '\\null',
          'attributes' => 
          array (
            'startLine' => 270,
            'endLine' => 270,
            'startTokenPos' => 1191,
            'startFilePos' => 6693,
            'endTokenPos' => 1191,
            'endFilePos' => 6696,
          ),
        ),
        'type' => 
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
                  'name' => 'callable',
                  'isIdentifier' => true,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'null',
                  'isIdentifier' => true,
                ),
              ),
            ),
          ),
        ),
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 270,
        'endLine' => 270,
        'startColumn' => 38,
        'endColumn' => 63,
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
 * Provide access to optional objects.
 *
 * @template TValue
 * @template TReturn
 *
 * @param  TValue  $value
 * @param  (callable(TValue): TReturn)|null  $callback
 * @return ($callback is null ? \\Illuminate\\Support\\Optional : ($value is null ? null : TReturn))
 */',
    'startLine' => 270,
    'endLine' => 277,
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
        'name' => 'optional',
        'filename' => 'E:/mywork/laragon/www/MohammedSA/naqliyahtak/vendor/composer/../laravel/framework/src/Illuminate/Support/helpers.php',
      ),
    ),
  ),
));
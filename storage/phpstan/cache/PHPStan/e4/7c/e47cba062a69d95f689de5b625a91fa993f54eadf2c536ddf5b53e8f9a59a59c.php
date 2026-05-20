<?php declare(strict_types = 1);

// osfsl-E:/mywork/laragon/www/MohammedSA/naqliyahtak/vendor/composer/../hesto/multi-auth/src/Traits/LogsoutGuard.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Hesto\MultiAuth\Traits\LogsoutGuard
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-b0a0dce0f99d70a1e9af7597f254a27985b5d5282ece46b541bcb13279bcce93-8.2.29-6.70.0.0',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Hesto\\MultiAuth\\Traits\\LogsoutGuard',
        'filename' => 'E:/mywork/laragon/www/MohammedSA/naqliyahtak/vendor/composer/../hesto/multi-auth/src/Traits/LogsoutGuard.php',
      ),
    ),
    'namespace' => 'Hesto\\MultiAuth\\Traits',
    'name' => 'Hesto\\MultiAuth\\Traits\\LogsoutGuard',
    'shortName' => 'LogsoutGuard',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 8,
    'endLine' => 94,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
    ),
    'immediateMethods' => 
    array (
      'logout' => 
      array (
        'name' => 'logout',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Http\\Request',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 16,
            'endLine' => 16,
            'startColumn' => 28,
            'endColumn' => 43,
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
 * Log the user out of the application.
 *
 * @param  Request  $request
 * @return \\Illuminate\\Http\\Response
 */',
        'startLine' => 16,
        'endLine' => 35,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Hesto\\MultiAuth\\Traits',
        'declaringClassName' => 'Hesto\\MultiAuth\\Traits\\LogsoutGuard',
        'implementingClassName' => 'Hesto\\MultiAuth\\Traits\\LogsoutGuard',
        'currentClassName' => 'Hesto\\MultiAuth\\Traits\\LogsoutGuard',
        'aliasName' => NULL,
      ),
      'logoutToPath' => 
      array (
        'name' => 'logoutToPath',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the path that we should redirect once logged out.
 * Adaptable to user needs.
 *
 * @return string
 */',
        'startLine' => 43,
        'endLine' => 45,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Hesto\\MultiAuth\\Traits',
        'declaringClassName' => 'Hesto\\MultiAuth\\Traits\\LogsoutGuard',
        'implementingClassName' => 'Hesto\\MultiAuth\\Traits\\LogsoutGuard',
        'currentClassName' => 'Hesto\\MultiAuth\\Traits\\LogsoutGuard',
        'aliasName' => NULL,
      ),
      'isActiveGuard' => 
      array (
        'name' => 'isActiveGuard',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 54,
            'endLine' => 54,
            'startColumn' => 35,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'guard' => 
          array (
            'name' => 'guard',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 54,
            'endLine' => 54,
            'startColumn' => 45,
            'endColumn' => 50,
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
 * Check if a particular guard is active.
 *
 * @param $request
 * @param $guard
 * @return bool
 */',
        'startLine' => 54,
        'endLine' => 58,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Hesto\\MultiAuth\\Traits',
        'declaringClassName' => 'Hesto\\MultiAuth\\Traits\\LogsoutGuard',
        'implementingClassName' => 'Hesto\\MultiAuth\\Traits\\LogsoutGuard',
        'currentClassName' => 'Hesto\\MultiAuth\\Traits\\LogsoutGuard',
        'aliasName' => NULL,
      ),
      'getAuthIdentifier' => 
      array (
        'name' => 'getAuthIdentifier',
        'parameters' => 
        array (
          'guard' => 
          array (
            'name' => 'guard',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 66,
            'endLine' => 66,
            'startColumn' => 39,
            'endColumn' => 44,
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
 * Get the Auth identifier for the specified guard.
 *
 * @param $guard
 * @return mixed
 */',
        'startLine' => 66,
        'endLine' => 69,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Hesto\\MultiAuth\\Traits',
        'declaringClassName' => 'Hesto\\MultiAuth\\Traits\\LogsoutGuard',
        'implementingClassName' => 'Hesto\\MultiAuth\\Traits\\LogsoutGuard',
        'currentClassName' => 'Hesto\\MultiAuth\\Traits\\LogsoutGuard',
        'aliasName' => NULL,
      ),
      'sessionGet' => 
      array (
        'name' => 'sessionGet',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 78,
            'endLine' => 78,
            'startColumn' => 32,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 78,
            'endLine' => 78,
            'startColumn' => 42,
            'endColumn' => 46,
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
 * Get the specified key from the session.
 *
 * @param $request
 * @param $name
 * @return mixed
 */',
        'startLine' => 78,
        'endLine' => 81,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Hesto\\MultiAuth\\Traits',
        'declaringClassName' => 'Hesto\\MultiAuth\\Traits\\LogsoutGuard',
        'implementingClassName' => 'Hesto\\MultiAuth\\Traits\\LogsoutGuard',
        'currentClassName' => 'Hesto\\MultiAuth\\Traits\\LogsoutGuard',
        'aliasName' => NULL,
      ),
      'sessionHas' => 
      array (
        'name' => 'sessionHas',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 90,
            'endLine' => 90,
            'startColumn' => 32,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 90,
            'endLine' => 90,
            'startColumn' => 42,
            'endColumn' => 46,
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
 * Check if the session has a particular key.
 *
 * @param $request
 * @param $name
 * @return mixed
 */',
        'startLine' => 90,
        'endLine' => 93,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Hesto\\MultiAuth\\Traits',
        'declaringClassName' => 'Hesto\\MultiAuth\\Traits\\LogsoutGuard',
        'implementingClassName' => 'Hesto\\MultiAuth\\Traits\\LogsoutGuard',
        'currentClassName' => 'Hesto\\MultiAuth\\Traits\\LogsoutGuard',
        'aliasName' => NULL,
      ),
    ),
    'traitsData' => 
    array (
      'aliases' => 
      array (
      ),
      'modifiers' => 
      array (
      ),
      'precedences' => 
      array (
      ),
      'hashes' => 
      array (
      ),
    ),
  ),
));
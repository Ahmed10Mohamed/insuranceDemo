<?php declare(strict_types = 1);

// osfsl-E:/mywork/laragon/www/MohammedSA/naqliyahtak/vendor/composer/../laravel/framework/src/Illuminate/Auth/SessionGuard.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Auth\SessionGuard
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-a1dd43d2d094084161bfc2e657f3e33d7847060b1508be951bfcc3f3430f1657-8.2.29-6.70.0.0',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Auth\\SessionGuard',
        'filename' => 'E:/mywork/laragon/www/MohammedSA/naqliyahtak/vendor/composer/../laravel/framework/src/Illuminate/Auth/SessionGuard.php',
      ),
    ),
    'namespace' => 'Illuminate\\Auth',
    'name' => 'Illuminate\\Auth\\SessionGuard',
    'shortName' => 'SessionGuard',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 30,
    'endLine' => 1012,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Illuminate\\Contracts\\Auth\\StatefulGuard',
      1 => 'Illuminate\\Contracts\\Auth\\SupportsBasicAuth',
    ),
    'traitClassNames' => 
    array (
      0 => 'Illuminate\\Auth\\GuardHelpers',
      1 => 'Illuminate\\Support\\Traits\\Macroable',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'name' => 
      array (
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'name' => 'name',
        'modifiers' => 2177,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'default' => NULL,
        'docComment' => '/**
 * The name of the guard. Typically "web".
 *
 * Corresponds to guard name in authentication configuration.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 41,
        'endLine' => 41,
        'startColumn' => 5,
        'endColumn' => 33,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'lastAttempted' => 
      array (
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'name' => 'lastAttempted',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The user we last attempted to retrieve.
 *
 * @var \\Illuminate\\Contracts\\Auth\\Authenticatable
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 48,
        'endLine' => 48,
        'startColumn' => 5,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'viaRemember' => 
      array (
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'name' => 'viaRemember',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 55,
            'endLine' => 55,
            'startTokenPos' => 182,
            'startFilePos' => 1638,
            'endTokenPos' => 182,
            'endFilePos' => 1642,
          ),
        ),
        'docComment' => '/**
 * Indicates if the user was authenticated via a recaller cookie.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 55,
        'endLine' => 55,
        'startColumn' => 5,
        'endColumn' => 35,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'rememberDuration' => 
      array (
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'name' => 'rememberDuration',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '576000',
          'attributes' => 
          array (
            'startLine' => 62,
            'endLine' => 62,
            'startTokenPos' => 193,
            'startFilePos' => 1799,
            'endTokenPos' => 193,
            'endFilePos' => 1804,
          ),
        ),
        'docComment' => '/**
 * The number of minutes that the "remember me" cookie should be valid for.
 *
 * @var int
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 62,
        'endLine' => 62,
        'startColumn' => 5,
        'endColumn' => 41,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'session' => 
      array (
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'name' => 'session',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The session used by the guard.
 *
 * @var \\Illuminate\\Contracts\\Session\\Session
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 69,
        'endLine' => 69,
        'startColumn' => 5,
        'endColumn' => 23,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'cookie' => 
      array (
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'name' => 'cookie',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The Illuminate cookie creator service.
 *
 * @var \\Illuminate\\Contracts\\Cookie\\QueueingFactory
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 76,
        'endLine' => 76,
        'startColumn' => 5,
        'endColumn' => 22,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'request' => 
      array (
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'name' => 'request',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The request instance.
 *
 * @var \\Symfony\\Component\\HttpFoundation\\Request
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 83,
        'endLine' => 83,
        'startColumn' => 5,
        'endColumn' => 23,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'events' => 
      array (
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'name' => 'events',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The event dispatcher instance.
 *
 * @var \\Illuminate\\Contracts\\Events\\Dispatcher
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 90,
        'endLine' => 90,
        'startColumn' => 5,
        'endColumn' => 22,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'timebox' => 
      array (
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'name' => 'timebox',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The timebox instance.
 *
 * @var \\Illuminate\\Support\\Timebox
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 97,
        'endLine' => 97,
        'startColumn' => 5,
        'endColumn' => 23,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'timeboxDuration' => 
      array (
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'name' => 'timeboxDuration',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The number of microseconds that the timebox should wait for.
 *
 * @var int
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 104,
        'endLine' => 104,
        'startColumn' => 5,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'rehashOnLogin' => 
      array (
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'name' => 'rehashOnLogin',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Indicates if passwords should be rehashed on login if needed.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 111,
        'endLine' => 111,
        'startColumn' => 5,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'loggedOut' => 
      array (
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'name' => 'loggedOut',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 118,
            'endLine' => 118,
            'startTokenPos' => 253,
            'startFilePos' => 2881,
            'endTokenPos' => 253,
            'endFilePos' => 2885,
          ),
        ),
        'docComment' => '/**
 * Indicates if the logout method has been called.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 118,
        'endLine' => 118,
        'startColumn' => 5,
        'endColumn' => 33,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'recallAttempted' => 
      array (
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'name' => 'recallAttempted',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 125,
            'endLine' => 125,
            'startTokenPos' => 264,
            'startFilePos' => 3025,
            'endTokenPos' => 264,
            'endFilePos' => 3029,
          ),
        ),
        'docComment' => '/**
 * Indicates if a token user retrieval has been attempted.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 125,
        'endLine' => 125,
        'startColumn' => 5,
        'endColumn' => 39,
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
            'startLine' => 139,
            'endLine' => 139,
            'startColumn' => 9,
            'endColumn' => 13,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'provider' => 
          array (
            'name' => 'provider',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Contracts\\Auth\\UserProvider',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 140,
            'endLine' => 140,
            'startColumn' => 9,
            'endColumn' => 30,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'session' => 
          array (
            'name' => 'session',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Contracts\\Session\\Session',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 141,
            'endLine' => 141,
            'startColumn' => 9,
            'endColumn' => 24,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'request' => 
          array (
            'name' => 'request',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 142,
                'endLine' => 142,
                'startTokenPos' => 296,
                'startFilePos' => 3593,
                'endTokenPos' => 296,
                'endFilePos' => 3596,
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
                      'name' => 'Symfony\\Component\\HttpFoundation\\Request',
                      'isIdentifier' => false,
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
            'startLine' => 142,
            'endLine' => 142,
            'startColumn' => 9,
            'endColumn' => 32,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
          'timebox' => 
          array (
            'name' => 'timebox',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 143,
                'endLine' => 143,
                'startTokenPos' => 306,
                'startFilePos' => 3627,
                'endTokenPos' => 306,
                'endFilePos' => 3630,
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
                      'name' => 'Illuminate\\Support\\Timebox',
                      'isIdentifier' => false,
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
            'startLine' => 143,
            'endLine' => 143,
            'startColumn' => 9,
            'endColumn' => 32,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
          'rehashOnLogin' => 
          array (
            'name' => 'rehashOnLogin',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 144,
                'endLine' => 144,
                'startTokenPos' => 315,
                'startFilePos' => 3663,
                'endTokenPos' => 315,
                'endFilePos' => 3666,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'bool',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 144,
            'endLine' => 144,
            'startColumn' => 9,
            'endColumn' => 34,
            'parameterIndex' => 5,
            'isOptional' => true,
          ),
          'timeboxDuration' => 
          array (
            'name' => 'timeboxDuration',
            'default' => 
            array (
              'code' => '200000',
              'attributes' => 
              array (
                'startLine' => 145,
                'endLine' => 145,
                'startTokenPos' => 324,
                'startFilePos' => 3700,
                'endTokenPos' => 324,
                'endFilePos' => 3705,
              ),
            ),
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
            'startLine' => 145,
            'endLine' => 145,
            'startColumn' => 9,
            'endColumn' => 37,
            'parameterIndex' => 6,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a new authentication guard.
 *
 * @param  string  $name
 * @param  \\Illuminate\\Contracts\\Auth\\UserProvider  $provider
 * @param  \\Illuminate\\Contracts\\Session\\Session  $session
 * @param  \\Symfony\\Component\\HttpFoundation\\Request|null  $request
 * @param  \\Illuminate\\Support\\Timebox|null  $timebox
 * @param  bool  $rehashOnLogin
 * @param  int  $timeboxDuration
 */',
        'startLine' => 138,
        'endLine' => 154,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
        'aliasName' => NULL,
      ),
      'user' => 
      array (
        'name' => 'user',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the currently authenticated user.
 *
 * @return \\Illuminate\\Contracts\\Auth\\Authenticatable|null
 */',
        'startLine' => 161,
        'endLine' => 197,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
        'aliasName' => NULL,
      ),
      'userFromRecaller' => 
      array (
        'name' => 'userFromRecaller',
        'parameters' => 
        array (
          'recaller' => 
          array (
            'name' => 'recaller',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 205,
            'endLine' => 205,
            'startColumn' => 41,
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
 * Pull a user from the repository by its "remember me" cookie token.
 *
 * @param  \\Illuminate\\Auth\\Recaller  $recaller
 * @return mixed
 */',
        'startLine' => 205,
        'endLine' => 221,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
        'aliasName' => NULL,
      ),
      'recaller' => 
      array (
        'name' => 'recaller',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the decrypted recaller cookie for the request.
 *
 * @return \\Illuminate\\Auth\\Recaller|null
 */',
        'startLine' => 228,
        'endLine' => 237,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
        'aliasName' => NULL,
      ),
      'id' => 
      array (
        'name' => 'id',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the ID for the currently authenticated user.
 *
 * @return int|string|null
 */',
        'startLine' => 244,
        'endLine' => 253,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
        'aliasName' => NULL,
      ),
      'once' => 
      array (
        'name' => 'once',
        'parameters' => 
        array (
          'credentials' => 
          array (
            'name' => 'credentials',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 261,
                'endLine' => 261,
                'startTokenPos' => 872,
                'startFilePos' => 7310,
                'endTokenPos' => 873,
                'endFilePos' => 7311,
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
            'startLine' => 261,
            'endLine' => 261,
            'startColumn' => 26,
            'endColumn' => 48,
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
 * Log a user into the application without sessions or cookies.
 *
 * @param  array  $credentials
 * @return bool
 */',
        'startLine' => 261,
        'endLine' => 276,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
        'aliasName' => NULL,
      ),
      'onceUsingId' => 
      array (
        'name' => 'onceUsingId',
        'parameters' => 
        array (
          'id' => 
          array (
            'name' => 'id',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 284,
            'endLine' => 284,
            'startColumn' => 33,
            'endColumn' => 35,
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
 * Log the given user ID into the application without sessions or cookies.
 *
 * @param  mixed  $id
 * @return \\Illuminate\\Contracts\\Auth\\Authenticatable|false
 */',
        'startLine' => 284,
        'endLine' => 293,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
        'aliasName' => NULL,
      ),
      'validate' => 
      array (
        'name' => 'validate',
        'parameters' => 
        array (
          'credentials' => 
          array (
            'name' => 'credentials',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 301,
                'endLine' => 301,
                'startTokenPos' => 1022,
                'startFilePos' => 8252,
                'endTokenPos' => 1023,
                'endFilePos' => 8253,
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
            'startLine' => 301,
            'endLine' => 301,
            'startColumn' => 30,
            'endColumn' => 52,
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
 * Validate a user\'s credentials.
 *
 * @param  array  $credentials
 * @return bool
 */',
        'startLine' => 301,
        'endLine' => 314,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
        'aliasName' => NULL,
      ),
      'basic' => 
      array (
        'name' => 'basic',
        'parameters' => 
        array (
          'field' => 
          array (
            'name' => 'field',
            'default' => 
            array (
              'code' => '\'email\'',
              'attributes' => 
              array (
                'startLine' => 325,
                'endLine' => 325,
                'startTokenPos' => 1130,
                'startFilePos' => 9004,
                'endTokenPos' => 1130,
                'endFilePos' => 9010,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 325,
            'endLine' => 325,
            'startColumn' => 27,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'extraConditions' => 
          array (
            'name' => 'extraConditions',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 325,
                'endLine' => 325,
                'startTokenPos' => 1137,
                'startFilePos' => 9032,
                'endTokenPos' => 1138,
                'endFilePos' => 9033,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 325,
            'endLine' => 325,
            'startColumn' => 45,
            'endColumn' => 65,
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
 * Attempt to authenticate using HTTP Basic Auth.
 *
 * @param  string  $field
 * @param  array  $extraConditions
 * @return \\Symfony\\Component\\HttpFoundation\\Response|null
 *
 * @throws \\Symfony\\Component\\HttpKernel\\Exception\\UnauthorizedHttpException
 */',
        'startLine' => 325,
        'endLine' => 339,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
        'aliasName' => NULL,
      ),
      'onceBasic' => 
      array (
        'name' => 'onceBasic',
        'parameters' => 
        array (
          'field' => 
          array (
            'name' => 'field',
            'default' => 
            array (
              'code' => '\'email\'',
              'attributes' => 
              array (
                'startLine' => 350,
                'endLine' => 350,
                'startTokenPos' => 1217,
                'startFilePos' => 9853,
                'endTokenPos' => 1217,
                'endFilePos' => 9859,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 350,
            'endLine' => 350,
            'startColumn' => 31,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'extraConditions' => 
          array (
            'name' => 'extraConditions',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 350,
                'endLine' => 350,
                'startTokenPos' => 1224,
                'startFilePos' => 9881,
                'endTokenPos' => 1225,
                'endFilePos' => 9882,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 350,
            'endLine' => 350,
            'startColumn' => 49,
            'endColumn' => 69,
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
 * Perform a stateless HTTP Basic login attempt.
 *
 * @param  string  $field
 * @param  array  $extraConditions
 * @return \\Symfony\\Component\\HttpFoundation\\Response|null
 *
 * @throws \\Symfony\\Component\\HttpKernel\\Exception\\UnauthorizedHttpException
 */',
        'startLine' => 350,
        'endLine' => 357,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
        'aliasName' => NULL,
      ),
      'attemptBasic' => 
      array (
        'name' => 'attemptBasic',
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
                'name' => 'Symfony\\Component\\HttpFoundation\\Request',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 367,
            'endLine' => 367,
            'startColumn' => 37,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'field' => 
          array (
            'name' => 'field',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 367,
            'endLine' => 367,
            'startColumn' => 55,
            'endColumn' => 60,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'extraConditions' => 
          array (
            'name' => 'extraConditions',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 367,
                'endLine' => 367,
                'startTokenPos' => 1303,
                'startFilePos' => 10428,
                'endTokenPos' => 1304,
                'endFilePos' => 10429,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 367,
            'endLine' => 367,
            'startColumn' => 63,
            'endColumn' => 83,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Attempt to authenticate using basic authentication.
 *
 * @param  \\Symfony\\Component\\HttpFoundation\\Request  $request
 * @param  string  $field
 * @param  array  $extraConditions
 * @return bool
 */',
        'startLine' => 367,
        'endLine' => 376,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
        'aliasName' => NULL,
      ),
      'basicCredentials' => 
      array (
        'name' => 'basicCredentials',
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
                'name' => 'Symfony\\Component\\HttpFoundation\\Request',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 385,
            'endLine' => 385,
            'startColumn' => 41,
            'endColumn' => 56,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'field' => 
          array (
            'name' => 'field',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 385,
            'endLine' => 385,
            'startColumn' => 59,
            'endColumn' => 64,
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
 * Get the credential array for an HTTP Basic request.
 *
 * @param  \\Symfony\\Component\\HttpFoundation\\Request  $request
 * @param  string  $field
 * @return array
 */',
        'startLine' => 385,
        'endLine' => 388,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
        'aliasName' => NULL,
      ),
      'failedBasicResponse' => 
      array (
        'name' => 'failedBasicResponse',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the response for basic authentication.
 *
 * @return void
 *
 * @throws \\Symfony\\Component\\HttpKernel\\Exception\\UnauthorizedHttpException
 */',
        'startLine' => 397,
        'endLine' => 400,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
        'aliasName' => NULL,
      ),
      'attempt' => 
      array (
        'name' => 'attempt',
        'parameters' => 
        array (
          'credentials' => 
          array (
            'name' => 'credentials',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 409,
                'endLine' => 409,
                'startTokenPos' => 1445,
                'startFilePos' => 11554,
                'endTokenPos' => 1446,
                'endFilePos' => 11555,
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
            'startLine' => 409,
            'endLine' => 409,
            'startColumn' => 29,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'remember' => 
          array (
            'name' => 'remember',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 409,
                'endLine' => 409,
                'startTokenPos' => 1453,
                'startFilePos' => 11570,
                'endTokenPos' => 1453,
                'endFilePos' => 11574,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 409,
            'endLine' => 409,
            'startColumn' => 54,
            'endColumn' => 70,
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
 * Attempt to authenticate a user using the given credentials.
 *
 * @param  array  $credentials
 * @param  bool  $remember
 * @return bool
 */',
        'startLine' => 409,
        'endLine' => 436,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
        'aliasName' => NULL,
      ),
      'attemptWhen' => 
      array (
        'name' => 'attemptWhen',
        'parameters' => 
        array (
          'credentials' => 
          array (
            'name' => 'credentials',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 446,
                'endLine' => 446,
                'startTokenPos' => 1619,
                'startFilePos' => 13044,
                'endTokenPos' => 1620,
                'endFilePos' => 13045,
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
            'startLine' => 446,
            'endLine' => 446,
            'startColumn' => 33,
            'endColumn' => 55,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'callbacks' => 
          array (
            'name' => 'callbacks',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 446,
                'endLine' => 446,
                'startTokenPos' => 1627,
                'startFilePos' => 13061,
                'endTokenPos' => 1627,
                'endFilePos' => 13064,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 446,
            'endLine' => 446,
            'startColumn' => 58,
            'endColumn' => 74,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'remember' => 
          array (
            'name' => 'remember',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 446,
                'endLine' => 446,
                'startTokenPos' => 1634,
                'startFilePos' => 13079,
                'endTokenPos' => 1634,
                'endFilePos' => 13083,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 446,
            'endLine' => 446,
            'startColumn' => 77,
            'endColumn' => 93,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Attempt to authenticate a user with credentials and additional callbacks.
 *
 * @param  array  $credentials
 * @param  array|callable|null  $callbacks
 * @param  bool  $remember
 * @return bool
 */',
        'startLine' => 446,
        'endLine' => 470,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
        'aliasName' => NULL,
      ),
      'hasValidCredentials' => 
      array (
        'name' => 'hasValidCredentials',
        'parameters' => 
        array (
          'user' => 
          array (
            'name' => 'user',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 479,
            'endLine' => 479,
            'startColumn' => 44,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'credentials' => 
          array (
            'name' => 'credentials',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 479,
            'endLine' => 479,
            'startColumn' => 51,
            'endColumn' => 62,
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
 * Determine if the user matches the credentials.
 *
 * @param  mixed  $user
 * @param  array  $credentials
 * @return bool
 */',
        'startLine' => 479,
        'endLine' => 488,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
        'aliasName' => NULL,
      ),
      'shouldLogin' => 
      array (
        'name' => 'shouldLogin',
        'parameters' => 
        array (
          'callbacks' => 
          array (
            'name' => 'callbacks',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 497,
            'endLine' => 497,
            'startColumn' => 36,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'user' => 
          array (
            'name' => 'user',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Contracts\\Auth\\Authenticatable',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 497,
            'endLine' => 497,
            'startColumn' => 48,
            'endColumn' => 76,
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
 * Determine if the user should login by executing the given callbacks.
 *
 * @param  array|callable|null  $callbacks
 * @param  \\Illuminate\\Contracts\\Auth\\Authenticatable  $user
 * @return bool
 */',
        'startLine' => 497,
        'endLine' => 506,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
        'aliasName' => NULL,
      ),
      'rehashPasswordIfRequired' => 
      array (
        'name' => 'rehashPasswordIfRequired',
        'parameters' => 
        array (
          'user' => 
          array (
            'name' => 'user',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Contracts\\Auth\\Authenticatable',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 515,
            'endLine' => 515,
            'startColumn' => 49,
            'endColumn' => 77,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'credentials' => 
          array (
            'name' => 'credentials',
            'default' => NULL,
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
              0 => 
              array (
                'name' => 'SensitiveParameter',
                'isRepeated' => false,
                'arguments' => 
                array (
                ),
              ),
            ),
            'startLine' => 515,
            'endLine' => 515,
            'startColumn' => 80,
            'endColumn' => 120,
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
 * Rehash the user\'s password if enabled and required.
 *
 * @param  \\Illuminate\\Contracts\\Auth\\Authenticatable  $user
 * @param  array  $credentials
 * @return void
 */',
        'startLine' => 515,
        'endLine' => 520,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
        'aliasName' => NULL,
      ),
      'loginUsingId' => 
      array (
        'name' => 'loginUsingId',
        'parameters' => 
        array (
          'id' => 
          array (
            'name' => 'id',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 529,
            'endLine' => 529,
            'startColumn' => 34,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'remember' => 
          array (
            'name' => 'remember',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 529,
                'endLine' => 529,
                'startTokenPos' => 1995,
                'startFilePos' => 15733,
                'endTokenPos' => 1995,
                'endFilePos' => 15737,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 529,
            'endLine' => 529,
            'startColumn' => 39,
            'endColumn' => 55,
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
 * Log the given user ID into the application.
 *
 * @param  mixed  $id
 * @param  bool  $remember
 * @return \\Illuminate\\Contracts\\Auth\\Authenticatable|false
 */',
        'startLine' => 529,
        'endLine' => 538,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
        'aliasName' => NULL,
      ),
      'login' => 
      array (
        'name' => 'login',
        'parameters' => 
        array (
          'user' => 
          array (
            'name' => 'user',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Contracts\\Auth\\Authenticatable',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 547,
            'endLine' => 547,
            'startColumn' => 27,
            'endColumn' => 55,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'remember' => 
          array (
            'name' => 'remember',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 547,
                'endLine' => 547,
                'startTokenPos' => 2066,
                'startFilePos' => 16174,
                'endTokenPos' => 2066,
                'endFilePos' => 16178,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 547,
            'endLine' => 547,
            'startColumn' => 58,
            'endColumn' => 74,
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
 * Log a user into the application.
 *
 * @param  \\Illuminate\\Contracts\\Auth\\Authenticatable  $user
 * @param  bool  $remember
 * @return void
 */',
        'startLine' => 547,
        'endLine' => 566,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
        'aliasName' => NULL,
      ),
      'updateSession' => 
      array (
        'name' => 'updateSession',
        'parameters' => 
        array (
          'id' => 
          array (
            'name' => 'id',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 574,
            'endLine' => 574,
            'startColumn' => 38,
            'endColumn' => 40,
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
 * Update the session with the given ID.
 *
 * @param  string  $id
 * @return void
 */',
        'startLine' => 574,
        'endLine' => 579,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
        'aliasName' => NULL,
      ),
      'ensureRememberTokenIsSet' => 
      array (
        'name' => 'ensureRememberTokenIsSet',
        'parameters' => 
        array (
          'user' => 
          array (
            'name' => 'user',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Contracts\\Auth\\Authenticatable',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 587,
            'endLine' => 587,
            'startColumn' => 49,
            'endColumn' => 77,
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
 * Create a new "remember me" token for the user if one doesn\'t already exist.
 *
 * @param  \\Illuminate\\Contracts\\Auth\\Authenticatable  $user
 * @return void
 */',
        'startLine' => 587,
        'endLine' => 592,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
        'aliasName' => NULL,
      ),
      'queueRecallerCookie' => 
      array (
        'name' => 'queueRecallerCookie',
        'parameters' => 
        array (
          'user' => 
          array (
            'name' => 'user',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Contracts\\Auth\\Authenticatable',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 600,
            'endLine' => 600,
            'startColumn' => 44,
            'endColumn' => 72,
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
 * Queue the recaller cookie into the cookie jar.
 *
 * @param  \\Illuminate\\Contracts\\Auth\\Authenticatable  $user
 * @return void
 */',
        'startLine' => 600,
        'endLine' => 605,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
        'aliasName' => NULL,
      ),
      'createRecaller' => 
      array (
        'name' => 'createRecaller',
        'parameters' => 
        array (
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
            'startLine' => 613,
            'endLine' => 613,
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
 * Create a "remember me" cookie for a given ID.
 *
 * @param  string  $value
 * @return \\Symfony\\Component\\HttpFoundation\\Cookie
 */',
        'startLine' => 613,
        'endLine' => 616,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
        'aliasName' => NULL,
      ),
      'logout' => 
      array (
        'name' => 'logout',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Log the user out of the application.
 *
 * @return void
 */',
        'startLine' => 623,
        'endLine' => 644,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
        'aliasName' => NULL,
      ),
      'logoutCurrentDevice' => 
      array (
        'name' => 'logoutCurrentDevice',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Log the user out of the application on their current device only.
 *
 * This method does not cycle the "remember" token.
 *
 * @return void
 */',
        'startLine' => 653,
        'endLine' => 670,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
        'aliasName' => NULL,
      ),
      'clearUserDataFromStorage' => 
      array (
        'name' => 'clearUserDataFromStorage',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Remove the user data from the session and cookies.
 *
 * @return void
 */',
        'startLine' => 677,
        'endLine' => 688,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
        'aliasName' => NULL,
      ),
      'cycleRememberToken' => 
      array (
        'name' => 'cycleRememberToken',
        'parameters' => 
        array (
          'user' => 
          array (
            'name' => 'user',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Contracts\\Auth\\Authenticatable',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 696,
            'endLine' => 696,
            'startColumn' => 43,
            'endColumn' => 71,
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
 * Refresh the "remember me" token for the user.
 *
 * @param  \\Illuminate\\Contracts\\Auth\\Authenticatable  $user
 * @return void
 */',
        'startLine' => 696,
        'endLine' => 701,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
        'aliasName' => NULL,
      ),
      'logoutOtherDevices' => 
      array (
        'name' => 'logoutOtherDevices',
        'parameters' => 
        array (
          'password' => 
          array (
            'name' => 'password',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 713,
            'endLine' => 713,
            'startColumn' => 40,
            'endColumn' => 48,
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
 * Invalidate other sessions for the current user.
 *
 * The application must be using the AuthenticateSession middleware.
 *
 * @param  string  $password
 * @return \\Illuminate\\Contracts\\Auth\\Authenticatable|null
 *
 * @throws \\Illuminate\\Auth\\AuthenticationException
 */',
        'startLine' => 713,
        'endLine' => 729,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
        'aliasName' => NULL,
      ),
      'rehashUserPasswordForDeviceLogout' => 
      array (
        'name' => 'rehashUserPasswordForDeviceLogout',
        'parameters' => 
        array (
          'password' => 
          array (
            'name' => 'password',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 739,
            'endLine' => 739,
            'startColumn' => 58,
            'endColumn' => 66,
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
 * Rehash the current user\'s password for logging out other devices via AuthenticateSession.
 *
 * @param  string  $password
 * @return \\Illuminate\\Contracts\\Auth\\Authenticatable|null
 *
 * @throws \\InvalidArgumentException
 */',
        'startLine' => 739,
        'endLine' => 750,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
        'aliasName' => NULL,
      ),
      'attempting' => 
      array (
        'name' => 'attempting',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 758,
            'endLine' => 758,
            'startColumn' => 32,
            'endColumn' => 40,
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
 * Register an authentication attempt event listener.
 *
 * @param  mixed  $callback
 * @return void
 */',
        'startLine' => 758,
        'endLine' => 761,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
        'aliasName' => NULL,
      ),
      'fireAttemptEvent' => 
      array (
        'name' => 'fireAttemptEvent',
        'parameters' => 
        array (
          'credentials' => 
          array (
            'name' => 'credentials',
            'default' => NULL,
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
            'startLine' => 770,
            'endLine' => 770,
            'startColumn' => 41,
            'endColumn' => 58,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'remember' => 
          array (
            'name' => 'remember',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 770,
                'endLine' => 770,
                'startTokenPos' => 2904,
                'startFilePos' => 23037,
                'endTokenPos' => 2904,
                'endFilePos' => 23041,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 770,
            'endLine' => 770,
            'startColumn' => 61,
            'endColumn' => 77,
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
 * Fire the attempt event with the arguments.
 *
 * @param  array  $credentials
 * @param  bool  $remember
 * @return void
 */',
        'startLine' => 770,
        'endLine' => 773,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
        'aliasName' => NULL,
      ),
      'fireValidatedEvent' => 
      array (
        'name' => 'fireValidatedEvent',
        'parameters' => 
        array (
          'user' => 
          array (
            'name' => 'user',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 781,
            'endLine' => 781,
            'startColumn' => 43,
            'endColumn' => 47,
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
 * Fires the validated event if the dispatcher is set.
 *
 * @param  \\Illuminate\\Contracts\\Auth\\Authenticatable  $user
 * @return void
 */',
        'startLine' => 781,
        'endLine' => 784,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
        'aliasName' => NULL,
      ),
      'fireLoginEvent' => 
      array (
        'name' => 'fireLoginEvent',
        'parameters' => 
        array (
          'user' => 
          array (
            'name' => 'user',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 793,
            'endLine' => 793,
            'startColumn' => 39,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'remember' => 
          array (
            'name' => 'remember',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 793,
                'endLine' => 793,
                'startTokenPos' => 2984,
                'startFilePos' => 23693,
                'endTokenPos' => 2984,
                'endFilePos' => 23697,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 793,
            'endLine' => 793,
            'startColumn' => 46,
            'endColumn' => 62,
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
 * Fire the login event if the dispatcher is set.
 *
 * @param  \\Illuminate\\Contracts\\Auth\\Authenticatable  $user
 * @param  bool  $remember
 * @return void
 */',
        'startLine' => 793,
        'endLine' => 796,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
        'aliasName' => NULL,
      ),
      'fireAuthenticatedEvent' => 
      array (
        'name' => 'fireAuthenticatedEvent',
        'parameters' => 
        array (
          'user' => 
          array (
            'name' => 'user',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 804,
            'endLine' => 804,
            'startColumn' => 47,
            'endColumn' => 51,
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
 * Fire the authenticated event if the dispatcher is set.
 *
 * @param  \\Illuminate\\Contracts\\Auth\\Authenticatable  $user
 * @return void
 */',
        'startLine' => 804,
        'endLine' => 807,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
        'aliasName' => NULL,
      ),
      'fireOtherDeviceLogoutEvent' => 
      array (
        'name' => 'fireOtherDeviceLogoutEvent',
        'parameters' => 
        array (
          'user' => 
          array (
            'name' => 'user',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 815,
            'endLine' => 815,
            'startColumn' => 51,
            'endColumn' => 55,
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
 * Fire the other device logout event if the dispatcher is set.
 *
 * @param  \\Illuminate\\Contracts\\Auth\\Authenticatable  $user
 * @return void
 */',
        'startLine' => 815,
        'endLine' => 818,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
        'aliasName' => NULL,
      ),
      'fireFailedEvent' => 
      array (
        'name' => 'fireFailedEvent',
        'parameters' => 
        array (
          'user' => 
          array (
            'name' => 'user',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 827,
            'endLine' => 827,
            'startColumn' => 40,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'credentials' => 
          array (
            'name' => 'credentials',
            'default' => NULL,
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
            'startLine' => 827,
            'endLine' => 827,
            'startColumn' => 47,
            'endColumn' => 64,
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
 * Fire the failed authentication attempt event with the given arguments.
 *
 * @param  \\Illuminate\\Contracts\\Auth\\Authenticatable|null  $user
 * @param  array  $credentials
 * @return void
 */',
        'startLine' => 827,
        'endLine' => 830,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
        'aliasName' => NULL,
      ),
      'getLastAttempted' => 
      array (
        'name' => 'getLastAttempted',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the last user we attempted to authenticate.
 *
 * @return \\Illuminate\\Contracts\\Auth\\Authenticatable
 */',
        'startLine' => 837,
        'endLine' => 840,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
        'aliasName' => NULL,
      ),
      'getName' => 
      array (
        'name' => 'getName',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get a unique identifier for the auth session value.
 *
 * @return string
 */',
        'startLine' => 847,
        'endLine' => 850,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
        'aliasName' => NULL,
      ),
      'getRecallerName' => 
      array (
        'name' => 'getRecallerName',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the name of the cookie used to store the "recaller".
 *
 * @return string
 */',
        'startLine' => 857,
        'endLine' => 860,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
        'aliasName' => NULL,
      ),
      'viaRemember' => 
      array (
        'name' => 'viaRemember',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the user was authenticated via "remember me" cookie.
 *
 * @return bool
 */',
        'startLine' => 867,
        'endLine' => 870,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
        'aliasName' => NULL,
      ),
      'getRememberDuration' => 
      array (
        'name' => 'getRememberDuration',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the number of minutes the remember me cookie should be valid for.
 *
 * @return int
 */',
        'startLine' => 877,
        'endLine' => 880,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
        'aliasName' => NULL,
      ),
      'setRememberDuration' => 
      array (
        'name' => 'setRememberDuration',
        'parameters' => 
        array (
          'minutes' => 
          array (
            'name' => 'minutes',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 888,
            'endLine' => 888,
            'startColumn' => 41,
            'endColumn' => 48,
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
 * Set the number of minutes the remember me cookie should be valid for.
 *
 * @param  int  $minutes
 * @return $this
 */',
        'startLine' => 888,
        'endLine' => 893,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
        'aliasName' => NULL,
      ),
      'getCookieJar' => 
      array (
        'name' => 'getCookieJar',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the cookie creator instance used by the guard.
 *
 * @return \\Illuminate\\Contracts\\Cookie\\QueueingFactory
 *
 * @throws \\RuntimeException
 */',
        'startLine' => 902,
        'endLine' => 909,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
        'aliasName' => NULL,
      ),
      'setCookieJar' => 
      array (
        'name' => 'setCookieJar',
        'parameters' => 
        array (
          'cookie' => 
          array (
            'name' => 'cookie',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Contracts\\Cookie\\QueueingFactory',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 917,
            'endLine' => 917,
            'startColumn' => 34,
            'endColumn' => 50,
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
 * Set the cookie creator instance used by the guard.
 *
 * @param  \\Illuminate\\Contracts\\Cookie\\QueueingFactory  $cookie
 * @return void
 */',
        'startLine' => 917,
        'endLine' => 920,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
        'aliasName' => NULL,
      ),
      'getDispatcher' => 
      array (
        'name' => 'getDispatcher',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the event dispatcher instance.
 *
 * @return \\Illuminate\\Contracts\\Events\\Dispatcher
 */',
        'startLine' => 927,
        'endLine' => 930,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
        'aliasName' => NULL,
      ),
      'setDispatcher' => 
      array (
        'name' => 'setDispatcher',
        'parameters' => 
        array (
          'events' => 
          array (
            'name' => 'events',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Contracts\\Events\\Dispatcher',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 938,
            'endLine' => 938,
            'startColumn' => 35,
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
 * Set the event dispatcher instance.
 *
 * @param  \\Illuminate\\Contracts\\Events\\Dispatcher  $events
 * @return void
 */',
        'startLine' => 938,
        'endLine' => 941,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
        'aliasName' => NULL,
      ),
      'getSession' => 
      array (
        'name' => 'getSession',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the session store used by the guard.
 *
 * @return \\Illuminate\\Contracts\\Session\\Session
 */',
        'startLine' => 948,
        'endLine' => 951,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
        'aliasName' => NULL,
      ),
      'getUser' => 
      array (
        'name' => 'getUser',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Return the currently cached user.
 *
 * @return \\Illuminate\\Contracts\\Auth\\Authenticatable|null
 */',
        'startLine' => 958,
        'endLine' => 961,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
        'aliasName' => NULL,
      ),
      'setUser' => 
      array (
        'name' => 'setUser',
        'parameters' => 
        array (
          'user' => 
          array (
            'name' => 'user',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Contracts\\Auth\\Authenticatable',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 969,
            'endLine' => 969,
            'startColumn' => 29,
            'endColumn' => 57,
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
 * Set the current user.
 *
 * @param  \\Illuminate\\Contracts\\Auth\\Authenticatable  $user
 * @return $this
 */',
        'startLine' => 969,
        'endLine' => 978,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
        'aliasName' => NULL,
      ),
      'getRequest' => 
      array (
        'name' => 'getRequest',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the current request instance.
 *
 * @return \\Symfony\\Component\\HttpFoundation\\Request
 */',
        'startLine' => 985,
        'endLine' => 988,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
        'aliasName' => NULL,
      ),
      'setRequest' => 
      array (
        'name' => 'setRequest',
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
                'name' => 'Symfony\\Component\\HttpFoundation\\Request',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 996,
            'endLine' => 996,
            'startColumn' => 32,
            'endColumn' => 47,
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
 * Set the current request instance.
 *
 * @param  \\Symfony\\Component\\HttpFoundation\\Request  $request
 * @return $this
 */',
        'startLine' => 996,
        'endLine' => 1001,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
        'aliasName' => NULL,
      ),
      'getTimebox' => 
      array (
        'name' => 'getTimebox',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the timebox instance used by the guard.
 *
 * @return \\Illuminate\\Support\\Timebox
 */',
        'startLine' => 1008,
        'endLine' => 1011,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Auth',
        'declaringClassName' => 'Illuminate\\Auth\\SessionGuard',
        'implementingClassName' => 'Illuminate\\Auth\\SessionGuard',
        'currentClassName' => 'Illuminate\\Auth\\SessionGuard',
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
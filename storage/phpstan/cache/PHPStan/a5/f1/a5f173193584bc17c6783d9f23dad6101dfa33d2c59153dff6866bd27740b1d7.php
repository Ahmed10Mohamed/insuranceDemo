<?php declare(strict_types = 1);

// odsl-E:\mywork\laragon\www\MohammedSA\naqliyahtak\app\Http\Controllers\Admin\Auth\authController.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Http\Controllers\Admin\Auth\authController
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.0-8.2.29-21973ac2aa4ec3c41fd402780ff2efeb53dfc8f058c51bdb1b55640f72ff3008',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'App\\Http\\Controllers\\Admin\\Auth\\authController',
        'filename' => 'E:/mywork/laragon/www/MohammedSA/naqliyahtak/app/Http/Controllers/Admin/Auth/authController.php',
      ),
    ),
    'namespace' => 'App\\Http\\Controllers\\Admin\\Auth',
    'name' => 'App\\Http\\Controllers\\Admin\\Auth\\authController',
    'shortName' => 'authController',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 16,
    'endLine' => 73,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'App\\Http\\Controllers\\Controller',
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'Illuminate\\Foundation\\Auth\\AuthenticatesUsers',
      1 => 'Hesto\\MultiAuth\\Traits\\LogsoutGuard',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'redirectTo' => 
      array (
        'declaringClassName' => 'App\\Http\\Controllers\\Admin\\Auth\\authController',
        'implementingClassName' => 'App\\Http\\Controllers\\Admin\\Auth\\authController',
        'name' => 'redirectTo',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'/admin/\'',
          'attributes' => 
          array (
            'startLine' => 39,
            'endLine' => 39,
            'startTokenPos' => 92,
            'startFilePos' => 1094,
            'endTokenPos' => 92,
            'endFilePos' => 1102,
          ),
        ),
        'docComment' => '/**
 * Where to redirect users after login / registration.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 39,
        'endLine' => 39,
        'startColumn' => 5,
        'endColumn' => 35,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'authRepo' => 
      array (
        'declaringClassName' => 'App\\Http\\Controllers\\Admin\\Auth\\authController',
        'implementingClassName' => 'App\\Http\\Controllers\\Admin\\Auth\\authController',
        'name' => 'authRepo',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'App\\Repository\\Admin\\authRepo',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => '/**
 * Show the application\'s login form.
 *
 * @return \\Illuminate\\Http\\Response
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 53,
        'endLine' => 53,
        'startColumn' => 5,
        'endColumn' => 33,
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
          'authRepo' => 
          array (
            'name' => 'authRepo',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'App\\Repository\\Admin\\authRepo',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 54,
            'endLine' => 54,
            'startColumn' => 26,
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
        'docComment' => NULL,
        'startLine' => 54,
        'endLine' => 56,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Http\\Controllers\\Admin\\Auth',
        'declaringClassName' => 'App\\Http\\Controllers\\Admin\\Auth\\authController',
        'implementingClassName' => 'App\\Http\\Controllers\\Admin\\Auth\\authController',
        'currentClassName' => 'App\\Http\\Controllers\\Admin\\Auth\\authController',
        'aliasName' => NULL,
      ),
      'showLoginForm' => 
      array (
        'name' => 'showLoginForm',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 57,
        'endLine' => 60,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Http\\Controllers\\Admin\\Auth',
        'declaringClassName' => 'App\\Http\\Controllers\\Admin\\Auth\\authController',
        'implementingClassName' => 'App\\Http\\Controllers\\Admin\\Auth\\authController',
        'currentClassName' => 'App\\Http\\Controllers\\Admin\\Auth\\authController',
        'aliasName' => NULL,
      ),
      'login' => 
      array (
        'name' => 'login',
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
                'name' => 'App\\Http\\Requests\\Admin\\Auth\\loginRequest',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62,
            'endLine' => 62,
            'startColumn' => 27,
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
        'docComment' => NULL,
        'startLine' => 62,
        'endLine' => 66,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Http\\Controllers\\Admin\\Auth',
        'declaringClassName' => 'App\\Http\\Controllers\\Admin\\Auth\\authController',
        'implementingClassName' => 'App\\Http\\Controllers\\Admin\\Auth\\authController',
        'currentClassName' => 'App\\Http\\Controllers\\Admin\\Auth\\authController',
        'aliasName' => NULL,
      ),
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
            'startLine' => 67,
            'endLine' => 67,
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
        'docComment' => NULL,
        'startLine' => 67,
        'endLine' => 71,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Http\\Controllers\\Admin\\Auth',
        'declaringClassName' => 'App\\Http\\Controllers\\Admin\\Auth\\authController',
        'implementingClassName' => 'App\\Http\\Controllers\\Admin\\Auth\\authController',
        'currentClassName' => 'App\\Http\\Controllers\\Admin\\Auth\\authController',
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
        'illuminate\\foundation\\auth\\authenticatesusers::logout' => 'hesto\\multiauth\\traits\\logsoutguard::logout',
      ),
      'hashes' => 
      array (
        'hesto\\multiauth\\traits\\logsoutguard::logout' => 'Hesto\\MultiAuth\\Traits\\LogsoutGuard::logout',
      ),
    ),
  ),
));
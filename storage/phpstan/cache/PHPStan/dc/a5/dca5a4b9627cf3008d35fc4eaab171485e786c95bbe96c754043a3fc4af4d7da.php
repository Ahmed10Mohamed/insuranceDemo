<?php declare(strict_types = 1);

// odsl-E:\mywork\laragon\www\MohammedSA\naqliyahtak\app\Exceptions\Handler.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Exceptions\Handler
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.0-8.2.29-bea8d68e4e5924b71eafdf8c5b98776ab29f77d5519cc83ccf166fc4aa4f66df',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'App\\Exceptions\\Handler',
        'filename' => 'E:/mywork/laragon/www/MohammedSA/naqliyahtak/app/Exceptions/Handler.php',
      ),
    ),
    'namespace' => 'App\\Exceptions',
    'name' => 'App\\Exceptions\\Handler',
    'shortName' => 'Handler',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 15,
    'endLine' => 109,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Foundation\\Exceptions\\Handler',
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'App\\Traits\\ApiResponses',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'dontReport' => 
      array (
        'declaringClassName' => 'App\\Exceptions\\Handler',
        'implementingClassName' => 'App\\Exceptions\\Handler',
        'name' => 'dontReport',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 24,
            'endLine' => 26,
            'startTokenPos' => 79,
            'startFilePos' => 669,
            'endTokenPos' => 83,
            'endFilePos' => 688,
          ),
        ),
        'docComment' => '/**
 * A list of the exception types that are not reported.
 *
 * @var array<int, class-string<\\Throwable>>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 24,
        'endLine' => 26,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'dontFlash' => 
      array (
        'declaringClassName' => 'App\\Exceptions\\Handler',
        'implementingClassName' => 'App\\Exceptions\\Handler',
        'name' => 'dontFlash',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'current_password\', \'password\', \'password_confirmation\']',
          'attributes' => 
          array (
            'startLine' => 33,
            'endLine' => 37,
            'startTokenPos' => 94,
            'startFilePos' => 858,
            'endTokenPos' => 105,
            'endFilePos' => 949,
          ),
        ),
        'docComment' => '/**
 * A list of the inputs that are never flashed for validation exceptions.
 *
 * @var array<int, string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 33,
        'endLine' => 37,
        'startColumn' => 5,
        'endColumn' => 6,
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
      'unauthenticated' => 
      array (
        'name' => 'unauthenticated',
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
            'startLine' => 39,
            'endLine' => 39,
            'startColumn' => 40,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'exception' => 
          array (
            'name' => 'exception',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Auth\\AuthenticationException',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 39,
            'endLine' => 39,
            'startColumn' => 50,
            'endColumn' => 83,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 39,
        'endLine' => 46,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'App\\Exceptions',
        'declaringClassName' => 'App\\Exceptions\\Handler',
        'implementingClassName' => 'App\\Exceptions\\Handler',
        'currentClassName' => 'App\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'register' => 
      array (
        'name' => 'register',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Register the exception handling callbacks for the application.
 *
 * @return void
 */',
        'startLine' => 53,
        'endLine' => 58,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Exceptions',
        'declaringClassName' => 'App\\Exceptions\\Handler',
        'implementingClassName' => 'App\\Exceptions\\Handler',
        'currentClassName' => 'App\\Exceptions\\Handler',
        'aliasName' => NULL,
      ),
      'render' => 
      array (
        'name' => 'render',
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
            'startLine' => 60,
            'endLine' => 60,
            'startColumn' => 28,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'exception' => 
          array (
            'name' => 'exception',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Throwable',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 60,
            'endLine' => 60,
            'startColumn' => 38,
            'endColumn' => 57,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 60,
        'endLine' => 108,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Exceptions',
        'declaringClassName' => 'App\\Exceptions\\Handler',
        'implementingClassName' => 'App\\Exceptions\\Handler',
        'currentClassName' => 'App\\Exceptions\\Handler',
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
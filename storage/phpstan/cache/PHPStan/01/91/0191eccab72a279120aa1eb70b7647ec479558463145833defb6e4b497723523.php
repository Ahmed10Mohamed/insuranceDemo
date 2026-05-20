<?php declare(strict_types = 1);

// osfsl-E:/mywork/laragon/www/MohammedSA/naqliyahtak/vendor/composer/../laravel/passport/src/HasApiTokens.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Laravel\Passport\HasApiTokens
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-93b3ec9e1d3c37cb63ca37b644efb975f91be5ab6362ca70cf16c7c6cc0df018-8.2.29-6.70.0.0',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Laravel\\Passport\\HasApiTokens',
        'filename' => 'E:/mywork/laragon/www/MohammedSA/naqliyahtak/vendor/composer/../laravel/passport/src/HasApiTokens.php',
      ),
    ),
    'namespace' => 'Laravel\\Passport',
    'name' => 'Laravel\\Passport\\HasApiTokens',
    'shortName' => 'HasApiTokens',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 7,
    'endLine' => 83,
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
      'accessToken' => 
      array (
        'declaringClassName' => 'Laravel\\Passport\\HasApiTokens',
        'implementingClassName' => 'Laravel\\Passport\\HasApiTokens',
        'name' => 'accessToken',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The current access token for the authentication user.
 *
 * @var \\Laravel\\Passport\\Token|\\Laravel\\Passport\\TransientToken|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 14,
        'endLine' => 14,
        'startColumn' => 5,
        'endColumn' => 27,
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
      'clients' => 
      array (
        'name' => 'clients',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get all of the user\'s registered OAuth clients.
 *
 * @return \\Illuminate\\Database\\Eloquent\\Relations\\HasMany
 */',
        'startLine' => 21,
        'endLine' => 24,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Passport',
        'declaringClassName' => 'Laravel\\Passport\\HasApiTokens',
        'implementingClassName' => 'Laravel\\Passport\\HasApiTokens',
        'currentClassName' => 'Laravel\\Passport\\HasApiTokens',
        'aliasName' => NULL,
      ),
      'tokens' => 
      array (
        'name' => 'tokens',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get all of the access tokens for the user.
 *
 * @return \\Illuminate\\Database\\Eloquent\\Relations\\HasMany
 */',
        'startLine' => 31,
        'endLine' => 34,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Passport',
        'declaringClassName' => 'Laravel\\Passport\\HasApiTokens',
        'implementingClassName' => 'Laravel\\Passport\\HasApiTokens',
        'currentClassName' => 'Laravel\\Passport\\HasApiTokens',
        'aliasName' => NULL,
      ),
      'token' => 
      array (
        'name' => 'token',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the current access token being used by the user.
 *
 * @return \\Laravel\\Passport\\Token|\\Laravel\\Passport\\TransientToken|null
 */',
        'startLine' => 41,
        'endLine' => 44,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Passport',
        'declaringClassName' => 'Laravel\\Passport\\HasApiTokens',
        'implementingClassName' => 'Laravel\\Passport\\HasApiTokens',
        'currentClassName' => 'Laravel\\Passport\\HasApiTokens',
        'aliasName' => NULL,
      ),
      'tokenCan' => 
      array (
        'name' => 'tokenCan',
        'parameters' => 
        array (
          'scope' => 
          array (
            'name' => 'scope',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 52,
            'endLine' => 52,
            'startColumn' => 30,
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
 * Determine if the current API token has a given scope.
 *
 * @param  string  $scope
 * @return bool
 */',
        'startLine' => 52,
        'endLine' => 55,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Passport',
        'declaringClassName' => 'Laravel\\Passport\\HasApiTokens',
        'implementingClassName' => 'Laravel\\Passport\\HasApiTokens',
        'currentClassName' => 'Laravel\\Passport\\HasApiTokens',
        'aliasName' => NULL,
      ),
      'createToken' => 
      array (
        'name' => 'createToken',
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
            'startLine' => 64,
            'endLine' => 64,
            'startColumn' => 33,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'scopes' => 
          array (
            'name' => 'scopes',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 64,
                'endLine' => 64,
                'startTokenPos' => 170,
                'startFilePos' => 1556,
                'endTokenPos' => 171,
                'endFilePos' => 1557,
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
            'startLine' => 64,
            'endLine' => 64,
            'startColumn' => 40,
            'endColumn' => 57,
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
 * Create a new personal access token for the user.
 *
 * @param  string  $name
 * @param  array  $scopes
 * @return \\Laravel\\Passport\\PersonalAccessTokenResult
 */',
        'startLine' => 64,
        'endLine' => 69,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Passport',
        'declaringClassName' => 'Laravel\\Passport\\HasApiTokens',
        'implementingClassName' => 'Laravel\\Passport\\HasApiTokens',
        'currentClassName' => 'Laravel\\Passport\\HasApiTokens',
        'aliasName' => NULL,
      ),
      'withAccessToken' => 
      array (
        'name' => 'withAccessToken',
        'parameters' => 
        array (
          'accessToken' => 
          array (
            'name' => 'accessToken',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 77,
            'endLine' => 77,
            'startColumn' => 37,
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
 * Set the current access token for the user.
 *
 * @param  \\Laravel\\Passport\\Token|\\Laravel\\Passport\\TransientToken|null  $accessToken
 * @return $this
 */',
        'startLine' => 77,
        'endLine' => 82,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Passport',
        'declaringClassName' => 'Laravel\\Passport\\HasApiTokens',
        'implementingClassName' => 'Laravel\\Passport\\HasApiTokens',
        'currentClassName' => 'Laravel\\Passport\\HasApiTokens',
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
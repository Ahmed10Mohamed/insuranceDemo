<?php declare(strict_types = 1);

// osfsl-E:/mywork/laragon/www/MohammedSA/naqliyahtak/vendor/composer/../laravel/framework/src/Illuminate/Cache/CacheManager.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Cache\CacheManager
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-c1dc1373854a7176a24c2c5c67681b677d2ba26fb0a8867ef51cd48b94a3fb53-8.2.29-6.70.0.0',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Cache\\CacheManager',
        'filename' => 'E:/mywork/laragon/www/MohammedSA/naqliyahtak/vendor/composer/../laravel/framework/src/Illuminate/Cache/CacheManager.php',
      ),
    ),
    'namespace' => 'Illuminate\\Cache',
    'name' => 'Illuminate\\Cache\\CacheManager',
    'shortName' => 'CacheManager',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * @mixin \\Illuminate\\Cache\\Repository
 * @mixin \\Illuminate\\Contracts\\Cache\\LockProvider
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 17,
    'endLine' => 476,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Illuminate\\Contracts\\Cache\\Factory',
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'app' => 
      array (
        'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
        'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
        'name' => 'app',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The application instance.
 *
 * @var \\Illuminate\\Contracts\\Foundation\\Application
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 24,
        'endLine' => 24,
        'startColumn' => 5,
        'endColumn' => 19,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'stores' => 
      array (
        'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
        'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
        'name' => 'stores',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 31,
            'endLine' => 31,
            'startTokenPos' => 77,
            'startFilePos' => 692,
            'endTokenPos' => 78,
            'endFilePos' => 693,
          ),
        ),
        'docComment' => '/**
 * The array of resolved cache stores.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 31,
        'endLine' => 31,
        'startColumn' => 5,
        'endColumn' => 27,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'customCreators' => 
      array (
        'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
        'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
        'name' => 'customCreators',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 38,
            'endLine' => 38,
            'startTokenPos' => 89,
            'startFilePos' => 816,
            'endTokenPos' => 90,
            'endFilePos' => 817,
          ),
        ),
        'docComment' => '/**
 * The registered custom driver creators.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 38,
        'endLine' => 38,
        'startColumn' => 5,
        'endColumn' => 35,
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
          'app' => 
          array (
            'name' => 'app',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 45,
            'endLine' => 45,
            'startColumn' => 33,
            'endColumn' => 36,
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
 * Create a new Cache manager instance.
 *
 * @param  \\Illuminate\\Contracts\\Foundation\\Application  $app
 */',
        'startLine' => 45,
        'endLine' => 48,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Cache',
        'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
        'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
        'currentClassName' => 'Illuminate\\Cache\\CacheManager',
        'aliasName' => NULL,
      ),
      'store' => 
      array (
        'name' => 'store',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 56,
                'endLine' => 56,
                'startTokenPos' => 129,
                'startFilePos' => 1245,
                'endTokenPos' => 129,
                'endFilePos' => 1248,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 56,
            'endLine' => 56,
            'startColumn' => 27,
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
 * Get a cache store instance by name, wrapped in a repository.
 *
 * @param  string|null  $name
 * @return \\Illuminate\\Contracts\\Cache\\Repository
 */',
        'startLine' => 56,
        'endLine' => 61,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Cache',
        'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
        'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
        'currentClassName' => 'Illuminate\\Cache\\CacheManager',
        'aliasName' => NULL,
      ),
      'driver' => 
      array (
        'name' => 'driver',
        'parameters' => 
        array (
          'driver' => 
          array (
            'name' => 'driver',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 69,
                'endLine' => 69,
                'startTokenPos' => 183,
                'startFilePos' => 1566,
                'endTokenPos' => 183,
                'endFilePos' => 1569,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 69,
            'endLine' => 69,
            'startColumn' => 28,
            'endColumn' => 41,
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
 * Get a cache driver instance.
 *
 * @param  string|null  $driver
 * @return \\Illuminate\\Contracts\\Cache\\Repository
 */',
        'startLine' => 69,
        'endLine' => 72,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Cache',
        'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
        'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
        'currentClassName' => 'Illuminate\\Cache\\CacheManager',
        'aliasName' => NULL,
      ),
      'memo' => 
      array (
        'name' => 'memo',
        'parameters' => 
        array (
          'driver' => 
          array (
            'name' => 'driver',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 80,
                'endLine' => 80,
                'startTokenPos' => 212,
                'startFilePos' => 1816,
                'endTokenPos' => 212,
                'endFilePos' => 1819,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 80,
            'endLine' => 80,
            'startColumn' => 26,
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
 * Get a memoized cache driver instance.
 *
 * @param  string|null  $driver
 * @return \\Illuminate\\Contracts\\Cache\\Repository
 */',
        'startLine' => 80,
        'endLine' => 91,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Cache',
        'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
        'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
        'currentClassName' => 'Illuminate\\Cache\\CacheManager',
        'aliasName' => NULL,
      ),
      'resolve' => 
      array (
        'name' => 'resolve',
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
            'startLine' => 101,
            'endLine' => 101,
            'startColumn' => 29,
            'endColumn' => 33,
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
 * Resolve the given store.
 *
 * @param  string  $name
 * @return \\Illuminate\\Contracts\\Cache\\Repository
 *
 * @throws \\InvalidArgumentException
 */',
        'startLine' => 101,
        'endLine' => 112,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Cache',
        'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
        'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
        'currentClassName' => 'Illuminate\\Cache\\CacheManager',
        'aliasName' => NULL,
      ),
      'build' => 
      array (
        'name' => 'build',
        'parameters' => 
        array (
          'config' => 
          array (
            'name' => 'config',
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
            'startLine' => 120,
            'endLine' => 120,
            'startColumn' => 27,
            'endColumn' => 39,
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
 * Build a cache repository with the given configuration.
 *
 * @param  array  $config
 * @return \\Illuminate\\Cache\\Repository
 */',
        'startLine' => 120,
        'endLine' => 135,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Cache',
        'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
        'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
        'currentClassName' => 'Illuminate\\Cache\\CacheManager',
        'aliasName' => NULL,
      ),
      'callCustomCreator' => 
      array (
        'name' => 'callCustomCreator',
        'parameters' => 
        array (
          'config' => 
          array (
            'name' => 'config',
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
            'startLine' => 143,
            'endLine' => 143,
            'startColumn' => 42,
            'endColumn' => 54,
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
 * Call a custom driver creator.
 *
 * @param  array  $config
 * @return mixed
 */',
        'startLine' => 143,
        'endLine' => 146,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Cache',
        'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
        'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
        'currentClassName' => 'Illuminate\\Cache\\CacheManager',
        'aliasName' => NULL,
      ),
      'createApcDriver' => 
      array (
        'name' => 'createApcDriver',
        'parameters' => 
        array (
          'config' => 
          array (
            'name' => 'config',
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
            'startLine' => 154,
            'endLine' => 154,
            'startColumn' => 40,
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
 * Create an instance of the APC cache driver.
 *
 * @param  array  $config
 * @return \\Illuminate\\Cache\\Repository
 */',
        'startLine' => 154,
        'endLine' => 159,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Cache',
        'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
        'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
        'currentClassName' => 'Illuminate\\Cache\\CacheManager',
        'aliasName' => NULL,
      ),
      'createArrayDriver' => 
      array (
        'name' => 'createArrayDriver',
        'parameters' => 
        array (
          'config' => 
          array (
            'name' => 'config',
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
            'startLine' => 167,
            'endLine' => 167,
            'startColumn' => 42,
            'endColumn' => 54,
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
 * Create an instance of the array cache driver.
 *
 * @param  array  $config
 * @return \\Illuminate\\Cache\\Repository
 */',
        'startLine' => 167,
        'endLine' => 170,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Cache',
        'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
        'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
        'currentClassName' => 'Illuminate\\Cache\\CacheManager',
        'aliasName' => NULL,
      ),
      'createFileDriver' => 
      array (
        'name' => 'createFileDriver',
        'parameters' => 
        array (
          'config' => 
          array (
            'name' => 'config',
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
            'startLine' => 178,
            'endLine' => 178,
            'startColumn' => 41,
            'endColumn' => 53,
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
 * Create an instance of the file cache driver.
 *
 * @param  array  $config
 * @return \\Illuminate\\Cache\\Repository
 */',
        'startLine' => 178,
        'endLine' => 185,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Cache',
        'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
        'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
        'currentClassName' => 'Illuminate\\Cache\\CacheManager',
        'aliasName' => NULL,
      ),
      'createMemcachedDriver' => 
      array (
        'name' => 'createMemcachedDriver',
        'parameters' => 
        array (
          'config' => 
          array (
            'name' => 'config',
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
            'startLine' => 193,
            'endLine' => 193,
            'startColumn' => 46,
            'endColumn' => 58,
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
 * Create an instance of the Memcached cache driver.
 *
 * @param  array  $config
 * @return \\Illuminate\\Cache\\Repository
 */',
        'startLine' => 193,
        'endLine' => 205,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Cache',
        'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
        'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
        'currentClassName' => 'Illuminate\\Cache\\CacheManager',
        'aliasName' => NULL,
      ),
      'createNullDriver' => 
      array (
        'name' => 'createNullDriver',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create an instance of the Null cache driver.
 *
 * @return \\Illuminate\\Cache\\Repository
 */',
        'startLine' => 212,
        'endLine' => 215,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Cache',
        'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
        'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
        'currentClassName' => 'Illuminate\\Cache\\CacheManager',
        'aliasName' => NULL,
      ),
      'createRedisDriver' => 
      array (
        'name' => 'createRedisDriver',
        'parameters' => 
        array (
          'config' => 
          array (
            'name' => 'config',
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
            'startLine' => 223,
            'endLine' => 223,
            'startColumn' => 42,
            'endColumn' => 54,
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
 * Create an instance of the Redis cache driver.
 *
 * @param  array  $config
 * @return \\Illuminate\\Cache\\Repository
 */',
        'startLine' => 223,
        'endLine' => 235,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Cache',
        'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
        'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
        'currentClassName' => 'Illuminate\\Cache\\CacheManager',
        'aliasName' => NULL,
      ),
      'createDatabaseDriver' => 
      array (
        'name' => 'createDatabaseDriver',
        'parameters' => 
        array (
          'config' => 
          array (
            'name' => 'config',
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
            'startLine' => 243,
            'endLine' => 243,
            'startColumn' => 45,
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
 * Create an instance of the database cache driver.
 *
 * @param  array  $config
 * @return \\Illuminate\\Cache\\Repository
 */',
        'startLine' => 243,
        'endLine' => 262,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Cache',
        'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
        'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
        'currentClassName' => 'Illuminate\\Cache\\CacheManager',
        'aliasName' => NULL,
      ),
      'createDynamodbDriver' => 
      array (
        'name' => 'createDynamodbDriver',
        'parameters' => 
        array (
          'config' => 
          array (
            'name' => 'config',
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
            'startLine' => 270,
            'endLine' => 270,
            'startColumn' => 45,
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
 * Create an instance of the DynamoDB cache driver.
 *
 * @param  array  $config
 * @return \\Illuminate\\Cache\\Repository
 */',
        'startLine' => 270,
        'endLine' => 285,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Cache',
        'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
        'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
        'currentClassName' => 'Illuminate\\Cache\\CacheManager',
        'aliasName' => NULL,
      ),
      'newDynamodbClient' => 
      array (
        'name' => 'newDynamodbClient',
        'parameters' => 
        array (
          'config' => 
          array (
            'name' => 'config',
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
            'startLine' => 292,
            'endLine' => 292,
            'startColumn' => 42,
            'endColumn' => 54,
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
 * Create new DynamoDb Client instance.
 *
 * @return \\Aws\\DynamoDb\\DynamoDbClient
 */',
        'startLine' => 292,
        'endLine' => 311,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Cache',
        'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
        'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
        'currentClassName' => 'Illuminate\\Cache\\CacheManager',
        'aliasName' => NULL,
      ),
      'repository' => 
      array (
        'name' => 'repository',
        'parameters' => 
        array (
          'store' => 
          array (
            'name' => 'store',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Contracts\\Cache\\Store',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 320,
            'endLine' => 320,
            'startColumn' => 32,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'config' => 
          array (
            'name' => 'config',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 320,
                'endLine' => 320,
                'startTokenPos' => 1410,
                'startFilePos' => 8636,
                'endTokenPos' => 1411,
                'endFilePos' => 8637,
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
            'startLine' => 320,
            'endLine' => 320,
            'startColumn' => 46,
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
 * Create a new cache repository with the given implementation.
 *
 * @param  \\Illuminate\\Contracts\\Cache\\Store  $store
 * @param  array  $config
 * @return \\Illuminate\\Cache\\Repository
 */',
        'startLine' => 320,
        'endLine' => 327,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Cache',
        'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
        'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
        'currentClassName' => 'Illuminate\\Cache\\CacheManager',
        'aliasName' => NULL,
      ),
      'setEventDispatcher' => 
      array (
        'name' => 'setEventDispatcher',
        'parameters' => 
        array (
          'repository' => 
          array (
            'name' => 'repository',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Cache\\Repository',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 335,
            'endLine' => 335,
            'startColumn' => 43,
            'endColumn' => 64,
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
 * Set the event dispatcher on the given repository instance.
 *
 * @param  \\Illuminate\\Cache\\Repository  $repository
 * @return void
 */',
        'startLine' => 335,
        'endLine' => 344,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Cache',
        'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
        'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
        'currentClassName' => 'Illuminate\\Cache\\CacheManager',
        'aliasName' => NULL,
      ),
      'refreshEventDispatcher' => 
      array (
        'name' => 'refreshEventDispatcher',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Re-set the event dispatcher on all resolved cache repositories.
 *
 * @return void
 */',
        'startLine' => 351,
        'endLine' => 354,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Cache',
        'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
        'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
        'currentClassName' => 'Illuminate\\Cache\\CacheManager',
        'aliasName' => NULL,
      ),
      'getPrefix' => 
      array (
        'name' => 'getPrefix',
        'parameters' => 
        array (
          'config' => 
          array (
            'name' => 'config',
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
            'startLine' => 362,
            'endLine' => 362,
            'startColumn' => 34,
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
 * Get the cache prefix.
 *
 * @param  array  $config
 * @return string
 */',
        'startLine' => 362,
        'endLine' => 365,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Cache',
        'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
        'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
        'currentClassName' => 'Illuminate\\Cache\\CacheManager',
        'aliasName' => NULL,
      ),
      'getConfig' => 
      array (
        'name' => 'getConfig',
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
            'startLine' => 373,
            'endLine' => 373,
            'startColumn' => 34,
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
 * Get the cache connection configuration.
 *
 * @param  string  $name
 * @return array|null
 */',
        'startLine' => 373,
        'endLine' => 380,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Cache',
        'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
        'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
        'currentClassName' => 'Illuminate\\Cache\\CacheManager',
        'aliasName' => NULL,
      ),
      'getDefaultDriver' => 
      array (
        'name' => 'getDefaultDriver',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the default cache driver name.
 *
 * @return string
 */',
        'startLine' => 387,
        'endLine' => 390,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Cache',
        'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
        'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
        'currentClassName' => 'Illuminate\\Cache\\CacheManager',
        'aliasName' => NULL,
      ),
      'setDefaultDriver' => 
      array (
        'name' => 'setDefaultDriver',
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
            'startLine' => 398,
            'endLine' => 398,
            'startColumn' => 38,
            'endColumn' => 42,
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
 * Set the default cache driver name.
 *
 * @param  string  $name
 * @return void
 */',
        'startLine' => 398,
        'endLine' => 401,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Cache',
        'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
        'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
        'currentClassName' => 'Illuminate\\Cache\\CacheManager',
        'aliasName' => NULL,
      ),
      'forgetDriver' => 
      array (
        'name' => 'forgetDriver',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 409,
                'endLine' => 409,
                'startTokenPos' => 1747,
                'startFilePos' => 10738,
                'endTokenPos' => 1747,
                'endFilePos' => 10741,
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
            'startColumn' => 34,
            'endColumn' => 45,
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
 * Unset the given driver instances.
 *
 * @param  array|string|null  $name
 * @return $this
 */',
        'startLine' => 409,
        'endLine' => 420,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Cache',
        'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
        'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
        'currentClassName' => 'Illuminate\\Cache\\CacheManager',
        'aliasName' => NULL,
      ),
      'purge' => 
      array (
        'name' => 'purge',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 428,
                'endLine' => 428,
                'startTokenPos' => 1827,
                'startFilePos' => 11175,
                'endTokenPos' => 1827,
                'endFilePos' => 11178,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 428,
            'endLine' => 428,
            'startColumn' => 27,
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
 * Disconnect the given driver and remove from local cache.
 *
 * @param  string|null  $name
 * @return void
 */',
        'startLine' => 428,
        'endLine' => 433,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Cache',
        'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
        'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
        'currentClassName' => 'Illuminate\\Cache\\CacheManager',
        'aliasName' => NULL,
      ),
      'extend' => 
      array (
        'name' => 'extend',
        'parameters' => 
        array (
          'driver' => 
          array (
            'name' => 'driver',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 445,
            'endLine' => 445,
            'startColumn' => 28,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Closure',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 445,
            'endLine' => 445,
            'startColumn' => 37,
            'endColumn' => 53,
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
 * Register a custom driver creator Closure.
 *
 * @param  string  $driver
 * @param  \\Closure  $callback
 *
 * @param-closure-this  $this  $callback
 *
 * @return $this
 */',
        'startLine' => 445,
        'endLine' => 450,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Cache',
        'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
        'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
        'currentClassName' => 'Illuminate\\Cache\\CacheManager',
        'aliasName' => NULL,
      ),
      'setApplication' => 
      array (
        'name' => 'setApplication',
        'parameters' => 
        array (
          'app' => 
          array (
            'name' => 'app',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 458,
            'endLine' => 458,
            'startColumn' => 36,
            'endColumn' => 39,
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
 * Set the application instance used by the manager.
 *
 * @param  \\Illuminate\\Contracts\\Foundation\\Application  $app
 * @return $this
 */',
        'startLine' => 458,
        'endLine' => 463,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Cache',
        'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
        'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
        'currentClassName' => 'Illuminate\\Cache\\CacheManager',
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
            'startLine' => 472,
            'endLine' => 472,
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
            'startLine' => 472,
            'endLine' => 472,
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
 * Dynamically call the default driver instance.
 *
 * @param  string  $method
 * @param  array  $parameters
 * @return mixed
 */',
        'startLine' => 472,
        'endLine' => 475,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Cache',
        'declaringClassName' => 'Illuminate\\Cache\\CacheManager',
        'implementingClassName' => 'Illuminate\\Cache\\CacheManager',
        'currentClassName' => 'Illuminate\\Cache\\CacheManager',
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
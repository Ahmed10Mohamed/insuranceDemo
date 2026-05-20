<?php declare(strict_types = 1);

// osfsl-E:/mywork/laragon/www/MohammedSA/naqliyahtak/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/Collection.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Database\Eloquent\Collection
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-77f1dca723d5a119877b28019597c15fcd6e2389dfc4c81c1145d7a7149dd8c1-8.2.29-6.70.0.0',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Database\\Eloquent\\Collection',
        'filename' => 'E:/mywork/laragon/www/MohammedSA/naqliyahtak/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/Collection.php',
      ),
    ),
    'namespace' => 'Illuminate\\Database\\Eloquent',
    'name' => 'Illuminate\\Database\\Eloquent\\Collection',
    'shortName' => 'Collection',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * @template TKey of array-key
 * @template TModel of \\Illuminate\\Database\\Eloquent\\Model
 *
 * @extends \\Illuminate\\Support\\Collection<TKey, TModel>
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 20,
    'endLine' => 894,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Support\\Collection',
    'implementsClassNames' => 
    array (
      0 => 'Illuminate\\Contracts\\Queue\\QueueableCollection',
    ),
    'traitClassNames' => 
    array (
      0 => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\InteractsWithDictionary',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
    ),
    'immediateMethods' => 
    array (
      'find' => 
      array (
        'name' => 'find',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 33,
            'endLine' => 33,
            'startColumn' => 26,
            'endColumn' => 29,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'default' => 
          array (
            'name' => 'default',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 33,
                'endLine' => 33,
                'startTokenPos' => 87,
                'startFilePos' => 991,
                'endTokenPos' => 87,
                'endFilePos' => 994,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 33,
            'endLine' => 33,
            'startColumn' => 32,
            'endColumn' => 46,
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
 * Find a model in the collection by key.
 *
 * @template TFindDefault
 *
 * @param  mixed  $key
 * @param  TFindDefault  $default
 * @return ($key is (\\Illuminate\\Contracts\\Support\\Arrayable<array-key, mixed>|array<mixed>) ? static : TModel|TFindDefault)
 */',
        'startLine' => 33,
        'endLine' => 52,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'aliasName' => NULL,
      ),
      'findOrFail' => 
      array (
        'name' => 'findOrFail',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 62,
            'endLine' => 62,
            'startColumn' => 32,
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
 * Find a model in the collection by key or throw an exception.
 *
 * @param  mixed  $key
 * @return TModel
 *
 * @throws \\Illuminate\\Database\\Eloquent\\ModelNotFoundException
 */',
        'startLine' => 62,
        'endLine' => 83,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'aliasName' => NULL,
      ),
      'load' => 
      array (
        'name' => 'load',
        'parameters' => 
        array (
          'relations' => 
          array (
            'name' => 'relations',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 91,
            'endLine' => 91,
            'startColumn' => 26,
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
 * Load a set of relationships onto the collection.
 *
 * @param  array<array-key, array|(callable(\\Illuminate\\Database\\Eloquent\\Relations\\Relation<*, *, *>): mixed)|string>|string  $relations
 * @return $this
 */',
        'startLine' => 91,
        'endLine' => 104,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'aliasName' => NULL,
      ),
      'loadAggregate' => 
      array (
        'name' => 'loadAggregate',
        'parameters' => 
        array (
          'relations' => 
          array (
            'name' => 'relations',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 114,
            'endLine' => 114,
            'startColumn' => 35,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 114,
            'endLine' => 114,
            'startColumn' => 47,
            'endColumn' => 53,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'function' => 
          array (
            'name' => 'function',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 114,
                'endLine' => 114,
                'startTokenPos' => 516,
                'startFilePos' => 3300,
                'endTokenPos' => 516,
                'endFilePos' => 3303,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 114,
            'endLine' => 114,
            'startColumn' => 56,
            'endColumn' => 71,
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
 * Load a set of aggregations over relationship\'s column onto the collection.
 *
 * @param  array<array-key, array|(callable(\\Illuminate\\Database\\Eloquent\\Relations\\Relation<*, *, *>): mixed)|string>|string  $relations
 * @param  string  $column
 * @param  string|null  $function
 * @return $this
 */',
        'startLine' => 114,
        'endLine' => 141,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'aliasName' => NULL,
      ),
      'loadCount' => 
      array (
        'name' => 'loadCount',
        'parameters' => 
        array (
          'relations' => 
          array (
            'name' => 'relations',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 149,
            'endLine' => 149,
            'startColumn' => 31,
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
 * Load a set of relationship counts onto the collection.
 *
 * @param  array<array-key, array|(callable(\\Illuminate\\Database\\Eloquent\\Relations\\Relation<*, *, *>): mixed)|string>|string  $relations
 * @return $this
 */',
        'startLine' => 149,
        'endLine' => 152,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'aliasName' => NULL,
      ),
      'loadMax' => 
      array (
        'name' => 'loadMax',
        'parameters' => 
        array (
          'relations' => 
          array (
            'name' => 'relations',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 161,
            'endLine' => 161,
            'startColumn' => 29,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 161,
            'endLine' => 161,
            'startColumn' => 41,
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
 * Load a set of relationship\'s max column values onto the collection.
 *
 * @param  array<array-key, array|(callable(\\Illuminate\\Database\\Eloquent\\Relations\\Relation<*, *, *>): mixed)|string>|string  $relations
 * @param  string  $column
 * @return $this
 */',
        'startLine' => 161,
        'endLine' => 164,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'aliasName' => NULL,
      ),
      'loadMin' => 
      array (
        'name' => 'loadMin',
        'parameters' => 
        array (
          'relations' => 
          array (
            'name' => 'relations',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 173,
            'endLine' => 173,
            'startColumn' => 29,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 173,
            'endLine' => 173,
            'startColumn' => 41,
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
 * Load a set of relationship\'s min column values onto the collection.
 *
 * @param  array<array-key, array|(callable(\\Illuminate\\Database\\Eloquent\\Relations\\Relation<*, *, *>): mixed)|string>|string  $relations
 * @param  string  $column
 * @return $this
 */',
        'startLine' => 173,
        'endLine' => 176,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'aliasName' => NULL,
      ),
      'loadSum' => 
      array (
        'name' => 'loadSum',
        'parameters' => 
        array (
          'relations' => 
          array (
            'name' => 'relations',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 185,
            'endLine' => 185,
            'startColumn' => 29,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 185,
            'endLine' => 185,
            'startColumn' => 41,
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
 * Load a set of relationship\'s column summations onto the collection.
 *
 * @param  array<array-key, array|(callable(\\Illuminate\\Database\\Eloquent\\Relations\\Relation<*, *, *>): mixed)|string>|string  $relations
 * @param  string  $column
 * @return $this
 */',
        'startLine' => 185,
        'endLine' => 188,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'aliasName' => NULL,
      ),
      'loadAvg' => 
      array (
        'name' => 'loadAvg',
        'parameters' => 
        array (
          'relations' => 
          array (
            'name' => 'relations',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 197,
            'endLine' => 197,
            'startColumn' => 29,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 197,
            'endLine' => 197,
            'startColumn' => 41,
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
 * Load a set of relationship\'s average column values onto the collection.
 *
 * @param  array<array-key, array|(callable(\\Illuminate\\Database\\Eloquent\\Relations\\Relation<*, *, *>): mixed)|string>|string  $relations
 * @param  string  $column
 * @return $this
 */',
        'startLine' => 197,
        'endLine' => 200,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'aliasName' => NULL,
      ),
      'loadExists' => 
      array (
        'name' => 'loadExists',
        'parameters' => 
        array (
          'relations' => 
          array (
            'name' => 'relations',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 208,
            'endLine' => 208,
            'startColumn' => 32,
            'endColumn' => 41,
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
 * Load a set of related existences onto the collection.
 *
 * @param  array<array-key, array|(callable(\\Illuminate\\Database\\Eloquent\\Relations\\Relation<*, *, *>): mixed)|string>|string  $relations
 * @return $this
 */',
        'startLine' => 208,
        'endLine' => 211,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'aliasName' => NULL,
      ),
      'loadMissing' => 
      array (
        'name' => 'loadMissing',
        'parameters' => 
        array (
          'relations' => 
          array (
            'name' => 'relations',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 219,
            'endLine' => 219,
            'startColumn' => 33,
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
 * Load a set of relationships onto the collection if they are not already eager loaded.
 *
 * @param  array<array-key, array|(callable(\\Illuminate\\Database\\Eloquent\\Relations\\Relation<*, *, *>): mixed)|string>|string  $relations
 * @return $this
 */',
        'startLine' => 219,
        'endLine' => 250,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'aliasName' => NULL,
      ),
      'loadMissingRelationshipChain' => 
      array (
        'name' => 'loadMissingRelationshipChain',
        'parameters' => 
        array (
          'tuples' => 
          array (
            'name' => 'tuples',
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
            'startLine' => 258,
            'endLine' => 258,
            'startColumn' => 50,
            'endColumn' => 62,
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
 * Load a relationship path for models of the given type if it is not already eager loaded.
 *
 * @param  array<int, <string, class-string>>  $tuples
 * @return void
 */',
        'startLine' => 258,
        'endLine' => 279,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'aliasName' => NULL,
      ),
      'loadMissingRelation' => 
      array (
        'name' => 'loadMissingRelation',
        'parameters' => 
        array (
          'models' => 
          array (
            'name' => 'models',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'self',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 288,
            'endLine' => 288,
            'startColumn' => 44,
            'endColumn' => 55,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'path' => 
          array (
            'name' => 'path',
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
            'startLine' => 288,
            'endLine' => 288,
            'startColumn' => 58,
            'endColumn' => 68,
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
 * Load a relationship path if it is not already eager loaded.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Collection<int, TModel>  $models
 * @param  array  $path
 * @return void
 */',
        'startLine' => 288,
        'endLine' => 311,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'aliasName' => NULL,
      ),
      'loadMorph' => 
      array (
        'name' => 'loadMorph',
        'parameters' => 
        array (
          'relation' => 
          array (
            'name' => 'relation',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 320,
            'endLine' => 320,
            'startColumn' => 31,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'relations' => 
          array (
            'name' => 'relations',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 320,
            'endLine' => 320,
            'startColumn' => 42,
            'endColumn' => 51,
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
 * Load a set of relationships onto the mixed relationship collection.
 *
 * @param  string  $relation
 * @param  array<array-key, array|(callable(\\Illuminate\\Database\\Eloquent\\Relations\\Relation<*, *, *>): mixed)|string>  $relations
 * @return $this
 */',
        'startLine' => 320,
        'endLine' => 328,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'aliasName' => NULL,
      ),
      'loadMorphCount' => 
      array (
        'name' => 'loadMorphCount',
        'parameters' => 
        array (
          'relation' => 
          array (
            'name' => 'relation',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 337,
            'endLine' => 337,
            'startColumn' => 36,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'relations' => 
          array (
            'name' => 'relations',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 337,
            'endLine' => 337,
            'startColumn' => 47,
            'endColumn' => 56,
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
 * Load a set of relationship counts onto the mixed relationship collection.
 *
 * @param  string  $relation
 * @param  array<array-key, array|(callable(\\Illuminate\\Database\\Eloquent\\Relations\\Relation<*, *, *>): mixed)|string>  $relations
 * @return $this
 */',
        'startLine' => 337,
        'endLine' => 345,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'aliasName' => NULL,
      ),
      'contains' => 
      array (
        'name' => 'contains',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 355,
            'endLine' => 355,
            'startColumn' => 30,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 355,
                'endLine' => 355,
                'startTokenPos' => 1736,
                'startFilePos' => 11064,
                'endTokenPos' => 1736,
                'endFilePos' => 11067,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 355,
            'endLine' => 355,
            'startColumn' => 36,
            'endColumn' => 51,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 355,
                'endLine' => 355,
                'startTokenPos' => 1743,
                'startFilePos' => 11079,
                'endTokenPos' => 1743,
                'endFilePos' => 11082,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 355,
            'endLine' => 355,
            'startColumn' => 54,
            'endColumn' => 66,
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
 * Determine if a key exists in the collection.
 *
 * @param  (callable(TModel, TKey): bool)|TModel|string|int  $key
 * @param  mixed  $operator
 * @param  mixed  $value
 * @return bool
 */',
        'startLine' => 355,
        'endLine' => 366,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'aliasName' => NULL,
      ),
      'doesntContain' => 
      array (
        'name' => 'doesntContain',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 376,
            'endLine' => 376,
            'startColumn' => 35,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 376,
                'endLine' => 376,
                'startTokenPos' => 1866,
                'startFilePos' => 11709,
                'endTokenPos' => 1866,
                'endFilePos' => 11712,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 376,
            'endLine' => 376,
            'startColumn' => 41,
            'endColumn' => 56,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 376,
                'endLine' => 376,
                'startTokenPos' => 1873,
                'startFilePos' => 11724,
                'endTokenPos' => 1873,
                'endFilePos' => 11727,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 376,
            'endLine' => 376,
            'startColumn' => 59,
            'endColumn' => 71,
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
 * Determine if a key does not exist in the collection.
 *
 * @param  (callable(TModel, TKey): bool)|TModel|string|int  $key
 * @param  mixed  $operator
 * @param  mixed  $value
 * @return bool
 */',
        'startLine' => 376,
        'endLine' => 379,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'aliasName' => NULL,
      ),
      'modelKeys' => 
      array (
        'name' => 'modelKeys',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the array of primary keys.
 *
 * @return array<int, array-key>
 */',
        'startLine' => 386,
        'endLine' => 389,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'aliasName' => NULL,
      ),
      'merge' => 
      array (
        'name' => 'merge',
        'parameters' => 
        array (
          'items' => 
          array (
            'name' => 'items',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 397,
            'endLine' => 397,
            'startColumn' => 27,
            'endColumn' => 32,
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
 * Merge the collection with the given items.
 *
 * @param  iterable<array-key, TModel>  $items
 * @return static
 */',
        'startLine' => 397,
        'endLine' => 406,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'aliasName' => NULL,
      ),
      'map' => 
      array (
        'name' => 'map',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'callable',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 416,
            'endLine' => 416,
            'startColumn' => 25,
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
 * Run a map over each of the items.
 *
 * @template TMapValue
 *
 * @param  callable(TModel, TKey): TMapValue  $callback
 * @return \\Illuminate\\Support\\Collection<TKey, TMapValue>|static<TKey, TMapValue>
 */',
        'startLine' => 416,
        'endLine' => 421,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'aliasName' => NULL,
      ),
      'mapWithKeys' => 
      array (
        'name' => 'mapWithKeys',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'callable',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 434,
            'endLine' => 434,
            'startColumn' => 33,
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
 * Run an associative map over each of the items.
 *
 * The callback should return an associative array with a single key / value pair.
 *
 * @template TMapWithKeysKey of array-key
 * @template TMapWithKeysValue
 *
 * @param  callable(TModel, TKey): array<TMapWithKeysKey, TMapWithKeysValue>  $callback
 * @return \\Illuminate\\Support\\Collection<TMapWithKeysKey, TMapWithKeysValue>|static<TMapWithKeysKey, TMapWithKeysValue>
 */',
        'startLine' => 434,
        'endLine' => 439,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'aliasName' => NULL,
      ),
      'fresh' => 
      array (
        'name' => 'fresh',
        'parameters' => 
        array (
          'with' => 
          array (
            'name' => 'with',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 447,
                'endLine' => 447,
                'startTokenPos' => 2148,
                'startFilePos' => 13784,
                'endTokenPos' => 2149,
                'endFilePos' => 13785,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 447,
            'endLine' => 447,
            'startColumn' => 27,
            'endColumn' => 36,
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
 * Reload a fresh model instance from the database for all the entities.
 *
 * @param  array<array-key, string>|string  $with
 * @return static
 */',
        'startLine' => 447,
        'endLine' => 463,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'aliasName' => NULL,
      ),
      'diff' => 
      array (
        'name' => 'diff',
        'parameters' => 
        array (
          'items' => 
          array (
            'name' => 'items',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 471,
            'endLine' => 471,
            'startColumn' => 26,
            'endColumn' => 31,
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
 * Diff the collection with the given items.
 *
 * @param  iterable<array-key, TModel>  $items
 * @return static
 */',
        'startLine' => 471,
        'endLine' => 484,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'aliasName' => NULL,
      ),
      'intersect' => 
      array (
        'name' => 'intersect',
        'parameters' => 
        array (
          'items' => 
          array (
            'name' => 'items',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 492,
            'endLine' => 492,
            'startColumn' => 31,
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
 * Intersect the collection with the given items.
 *
 * @param  iterable<array-key, TModel>  $items
 * @return static
 */',
        'startLine' => 492,
        'endLine' => 509,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'aliasName' => NULL,
      ),
      'unique' => 
      array (
        'name' => 'unique',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 518,
                'endLine' => 518,
                'startTokenPos' => 2512,
                'startFilePos' => 15588,
                'endTokenPos' => 2512,
                'endFilePos' => 15591,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 518,
            'endLine' => 518,
            'startColumn' => 28,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'strict' => 
          array (
            'name' => 'strict',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 518,
                'endLine' => 518,
                'startTokenPos' => 2519,
                'startFilePos' => 15604,
                'endTokenPos' => 2519,
                'endFilePos' => 15608,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 518,
            'endLine' => 518,
            'startColumn' => 41,
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
 * Return only unique items from the collection.
 *
 * @param  (callable(TModel, TKey): mixed)|string|null  $key
 * @param  bool  $strict
 * @return static
 */',
        'startLine' => 518,
        'endLine' => 525,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'aliasName' => NULL,
      ),
      'only' => 
      array (
        'name' => 'only',
        'parameters' => 
        array (
          'keys' => 
          array (
            'name' => 'keys',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 533,
            'endLine' => 533,
            'startColumn' => 26,
            'endColumn' => 30,
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
 * Returns only the models from the collection with the specified keys.
 *
 * @param  array<array-key, mixed>|null  $keys
 * @return static
 */',
        'startLine' => 533,
        'endLine' => 542,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'aliasName' => NULL,
      ),
      'except' => 
      array (
        'name' => 'except',
        'parameters' => 
        array (
          'keys' => 
          array (
            'name' => 'keys',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 550,
            'endLine' => 550,
            'startColumn' => 28,
            'endColumn' => 32,
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
 * Returns all models in the collection except the models with specified keys.
 *
 * @param  array<array-key, mixed>|null  $keys
 * @return static
 */',
        'startLine' => 550,
        'endLine' => 559,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'aliasName' => NULL,
      ),
      'makeHidden' => 
      array (
        'name' => 'makeHidden',
        'parameters' => 
        array (
          'attributes' => 
          array (
            'name' => 'attributes',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 567,
            'endLine' => 567,
            'startColumn' => 32,
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
 * Make the given, typically visible, attributes hidden across the entire collection.
 *
 * @param  array<array-key, string>|string  $attributes
 * @return $this
 */',
        'startLine' => 567,
        'endLine' => 570,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'aliasName' => NULL,
      ),
      'makeVisible' => 
      array (
        'name' => 'makeVisible',
        'parameters' => 
        array (
          'attributes' => 
          array (
            'name' => 'attributes',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 578,
            'endLine' => 578,
            'startColumn' => 33,
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
 * Make the given, typically hidden, attributes visible across the entire collection.
 *
 * @param  array<array-key, string>|string  $attributes
 * @return $this
 */',
        'startLine' => 578,
        'endLine' => 581,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'aliasName' => NULL,
      ),
      'setVisible' => 
      array (
        'name' => 'setVisible',
        'parameters' => 
        array (
          'visible' => 
          array (
            'name' => 'visible',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 589,
            'endLine' => 589,
            'startColumn' => 32,
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
 * Set the visible attributes across the entire collection.
 *
 * @param  array<int, string>  $visible
 * @return $this
 */',
        'startLine' => 589,
        'endLine' => 592,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'aliasName' => NULL,
      ),
      'setHidden' => 
      array (
        'name' => 'setHidden',
        'parameters' => 
        array (
          'hidden' => 
          array (
            'name' => 'hidden',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 600,
            'endLine' => 600,
            'startColumn' => 31,
            'endColumn' => 37,
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
 * Set the hidden attributes across the entire collection.
 *
 * @param  array<int, string>  $hidden
 * @return $this
 */',
        'startLine' => 600,
        'endLine' => 603,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'aliasName' => NULL,
      ),
      'append' => 
      array (
        'name' => 'append',
        'parameters' => 
        array (
          'attributes' => 
          array (
            'name' => 'attributes',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 611,
            'endLine' => 611,
            'startColumn' => 28,
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
 * Append an attribute across the entire collection.
 *
 * @param  array<array-key, string>|string  $attributes
 * @return $this
 */',
        'startLine' => 611,
        'endLine' => 614,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'aliasName' => NULL,
      ),
      'getDictionary' => 
      array (
        'name' => 'getDictionary',
        'parameters' => 
        array (
          'items' => 
          array (
            'name' => 'items',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 622,
                'endLine' => 622,
                'startTokenPos' => 2888,
                'startFilePos' => 18322,
                'endTokenPos' => 2888,
                'endFilePos' => 18325,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 622,
            'endLine' => 622,
            'startColumn' => 35,
            'endColumn' => 47,
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
 * Get a dictionary keyed by primary keys.
 *
 * @param  iterable<array-key, TModel>|null  $items
 * @return array<array-key, TModel>
 */',
        'startLine' => 622,
        'endLine' => 633,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'aliasName' => NULL,
      ),
      'countBy' => 
      array (
        'name' => 'countBy',
        'parameters' => 
        array (
          'countBy' => 
          array (
            'name' => 'countBy',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 645,
                'endLine' => 645,
                'startTokenPos' => 2975,
                'startFilePos' => 18957,
                'endTokenPos' => 2975,
                'endFilePos' => 18960,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 645,
            'endLine' => 645,
            'startColumn' => 29,
            'endColumn' => 43,
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
 * Count the number of items in the collection by a field or using a callback.
 *
 * @param  (callable(TModel, TKey): array-key)|string|null  $countBy
 * @return \\Illuminate\\Support\\Collection<array-key, int>
 */',
        'startLine' => 645,
        'endLine' => 648,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'aliasName' => NULL,
      ),
      'collapse' => 
      array (
        'name' => 'collapse',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Collapse the collection of items into a single array.
 *
 * @return \\Illuminate\\Support\\Collection<int, mixed>
 */',
        'startLine' => 655,
        'endLine' => 658,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'aliasName' => NULL,
      ),
      'flatten' => 
      array (
        'name' => 'flatten',
        'parameters' => 
        array (
          'depth' => 
          array (
            'name' => 'depth',
            'default' => 
            array (
              'code' => 'INF',
              'attributes' => 
              array (
                'startLine' => 666,
                'endLine' => 666,
                'startTokenPos' => 3035,
                'startFilePos' => 19463,
                'endTokenPos' => 3035,
                'endFilePos' => 19465,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 666,
            'endLine' => 666,
            'startColumn' => 29,
            'endColumn' => 40,
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
 * Get a flattened array of the items in the collection.
 *
 * @param  int  $depth
 * @return \\Illuminate\\Support\\Collection<int, mixed>
 */',
        'startLine' => 666,
        'endLine' => 669,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'aliasName' => NULL,
      ),
      'flip' => 
      array (
        'name' => 'flip',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Flip the items in the collection.
 *
 * @return \\Illuminate\\Support\\Collection<TModel, TKey>
 */',
        'startLine' => 676,
        'endLine' => 679,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'aliasName' => NULL,
      ),
      'keys' => 
      array (
        'name' => 'keys',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the keys of the collection items.
 *
 * @return \\Illuminate\\Support\\Collection<int, TKey>
 */',
        'startLine' => 686,
        'endLine' => 689,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'aliasName' => NULL,
      ),
      'pad' => 
      array (
        'name' => 'pad',
        'parameters' => 
        array (
          'size' => 
          array (
            'name' => 'size',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 700,
            'endLine' => 700,
            'startColumn' => 25,
            'endColumn' => 29,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 700,
            'endLine' => 700,
            'startColumn' => 32,
            'endColumn' => 37,
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
 * Pad collection to the specified length with a value.
 *
 * @template TPadValue
 *
 * @param  int  $size
 * @param  TPadValue  $value
 * @return \\Illuminate\\Support\\Collection<int, TModel|TPadValue>
 */',
        'startLine' => 700,
        'endLine' => 703,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'aliasName' => NULL,
      ),
      'partition' => 
      array (
        'name' => 'partition',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
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
            'startColumn' => 31,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 713,
                'endLine' => 713,
                'startTokenPos' => 3160,
                'startFilePos' => 20646,
                'endTokenPos' => 3160,
                'endFilePos' => 20649,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 713,
            'endLine' => 713,
            'startColumn' => 37,
            'endColumn' => 52,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 713,
                'endLine' => 713,
                'startTokenPos' => 3167,
                'startFilePos' => 20661,
                'endTokenPos' => 3167,
                'endFilePos' => 20664,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 713,
            'endLine' => 713,
            'startColumn' => 55,
            'endColumn' => 67,
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
 * Partition the collection into two arrays using the given callback or key.
 *
 * @param  (callable(TModel, TKey): bool)|TModel|string  $key
 * @param  mixed  $operator
 * @param  mixed  $value
 * @return \\Illuminate\\Support\\Collection<int<0, 1>, static<TKey, TModel>>
 */',
        'startLine' => 713,
        'endLine' => 716,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'aliasName' => NULL,
      ),
      'pluck' => 
      array (
        'name' => 'pluck',
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
            'startLine' => 725,
            'endLine' => 725,
            'startColumn' => 27,
            'endColumn' => 32,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'key' => 
          array (
            'name' => 'key',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 725,
                'endLine' => 725,
                'startTokenPos' => 3206,
                'startFilePos' => 21033,
                'endTokenPos' => 3206,
                'endFilePos' => 21036,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 725,
            'endLine' => 725,
            'startColumn' => 35,
            'endColumn' => 45,
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
 * Get an array with the values of a given key.
 *
 * @param  string|array<array-key, string>|Closure|null  $value
 * @param  string|Closure|null  $key
 * @return \\Illuminate\\Support\\Collection<array-key, mixed>
 */',
        'startLine' => 725,
        'endLine' => 728,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'aliasName' => NULL,
      ),
      'zip' => 
      array (
        'name' => 'zip',
        'parameters' => 
        array (
          'items' => 
          array (
            'name' => 'items',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 738,
            'endLine' => 738,
            'startColumn' => 25,
            'endColumn' => 30,
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
 * Zip the collection together with one or more arrays.
 *
 * @template TZipValue
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable<array-key, TZipValue>|iterable<array-key, TZipValue>  ...$items
 * @return \\Illuminate\\Support\\Collection<int, \\Illuminate\\Support\\Collection<int, TModel|TZipValue>>
 */',
        'startLine' => 738,
        'endLine' => 741,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'aliasName' => NULL,
      ),
      'duplicateComparator' => 
      array (
        'name' => 'duplicateComparator',
        'parameters' => 
        array (
          'strict' => 
          array (
            'name' => 'strict',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 749,
            'endLine' => 749,
            'startColumn' => 44,
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
 * Get the comparison function to detect duplicates.
 *
 * @param  bool  $strict
 * @return callable(TModel, TModel): bool
 */',
        'startLine' => 749,
        'endLine' => 752,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'aliasName' => NULL,
      ),
      'withRelationshipAutoloading' => 
      array (
        'name' => 'withRelationshipAutoloading',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Enable relationship autoloading for all models in this collection.
 *
 * @return $this
 */',
        'startLine' => 759,
        'endLine' => 770,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'aliasName' => NULL,
      ),
      'getQueueableClass' => 
      array (
        'name' => 'getQueueableClass',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the type of the entities being queued.
 *
 * @return string|null
 *
 * @throws \\LogicException
 */',
        'startLine' => 779,
        'endLine' => 794,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'aliasName' => NULL,
      ),
      'getQueueableModelClass' => 
      array (
        'name' => 'getQueueableModelClass',
        'parameters' => 
        array (
          'model' => 
          array (
            'name' => 'model',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 802,
            'endLine' => 802,
            'startColumn' => 47,
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
 * Get the queueable class name for the given model.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Model  $model
 * @return string
 */',
        'startLine' => 802,
        'endLine' => 807,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'aliasName' => NULL,
      ),
      'getQueueableIds' => 
      array (
        'name' => 'getQueueableIds',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the identifiers for all of the entities.
 *
 * @return array<int, mixed>
 */',
        'startLine' => 814,
        'endLine' => 823,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'aliasName' => NULL,
      ),
      'getQueueableRelations' => 
      array (
        'name' => 'getQueueableRelations',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the relationships of the entities being queued.
 *
 * @return array<int, string>
 */',
        'startLine' => 830,
        'endLine' => 845,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'aliasName' => NULL,
      ),
      'getQueueableConnection' => 
      array (
        'name' => 'getQueueableConnection',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the connection of the entities being queued.
 *
 * @return string|null
 *
 * @throws \\LogicException
 */',
        'startLine' => 854,
        'endLine' => 869,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'aliasName' => NULL,
      ),
      'toQuery' => 
      array (
        'name' => 'toQuery',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the Eloquent query builder from the collection.
 *
 * @return \\Illuminate\\Database\\Eloquent\\Builder<TModel>
 *
 * @throws \\LogicException
 */',
        'startLine' => 878,
        'endLine' => 893,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Collection',
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
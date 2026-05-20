<?php declare(strict_types = 1);

// osfsl-E:/mywork/laragon/www/MohammedSA/naqliyahtak/vendor/composer/../laravel/framework/src/Illuminate/Database/Schema/Blueprint.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Database\Schema\Blueprint
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-c9fef21470608022f33cbb462deff57be57ea050c91962264d6ba4396815c773-8.2.29-6.70.0.0',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Database\\Schema\\Blueprint',
        'filename' => 'E:/mywork/laragon/www/MohammedSA/naqliyahtak/vendor/composer/../laravel/framework/src/Illuminate/Database/Schema/Blueprint.php',
      ),
    ),
    'namespace' => 'Illuminate\\Database\\Schema',
    'name' => 'Illuminate\\Database\\Schema\\Blueprint',
    'shortName' => 'Blueprint',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 18,
    'endLine' => 1949,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'Illuminate\\Support\\Traits\\Macroable',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'connection' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'name' => 'connection',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Database\\Connection',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => '/**
 * The database connection instance.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 25,
        'endLine' => 25,
        'startColumn' => 5,
        'endColumn' => 37,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'grammar' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'name' => 'grammar',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Database\\Schema\\Grammars\\Grammar',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => '/**
 * The schema grammar instance.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 30,
        'endLine' => 30,
        'startColumn' => 5,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'table' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'name' => 'table',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The table the blueprint describes.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 37,
        'endLine' => 37,
        'startColumn' => 5,
        'endColumn' => 21,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'columns' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'name' => 'columns',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 44,
            'endLine' => 44,
            'startTokenPos' => 108,
            'startFilePos' => 987,
            'endTokenPos' => 109,
            'endFilePos' => 988,
          ),
        ),
        'docComment' => '/**
 * The columns that should be added to the table.
 *
 * @var \\Illuminate\\Database\\Schema\\ColumnDefinition[]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 44,
        'endLine' => 44,
        'startColumn' => 5,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'commands' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'name' => 'commands',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 51,
            'endLine' => 51,
            'startTokenPos' => 120,
            'startFilePos' => 1136,
            'endTokenPos' => 121,
            'endFilePos' => 1137,
          ),
        ),
        'docComment' => '/**
 * The commands that should be run for the table.
 *
 * @var \\Illuminate\\Support\\Fluent[]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 51,
        'endLine' => 51,
        'startColumn' => 5,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'engine' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'name' => 'engine',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The storage engine that should be used for the table.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 58,
        'endLine' => 58,
        'startColumn' => 5,
        'endColumn' => 19,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'charset' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'name' => 'charset',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The default character set that should be used for the table.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 65,
        'endLine' => 65,
        'startColumn' => 5,
        'endColumn' => 20,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'collation' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'name' => 'collation',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The collation that should be used for the table.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 72,
        'endLine' => 72,
        'startColumn' => 5,
        'endColumn' => 22,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'temporary' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'name' => 'temporary',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 79,
            'endLine' => 79,
            'startTokenPos' => 153,
            'startFilePos' => 1627,
            'endTokenPos' => 153,
            'endFilePos' => 1631,
          ),
        ),
        'docComment' => '/**
 * Whether to make the table temporary.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 79,
        'endLine' => 79,
        'startColumn' => 5,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'after' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'name' => 'after',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The column to add new columns after.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 86,
        'endLine' => 86,
        'startColumn' => 5,
        'endColumn' => 18,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'state' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'name' => 'state',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The blueprint state instance.
 *
 * @var \\Illuminate\\Database\\Schema\\BlueprintState|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 93,
        'endLine' => 93,
        'startColumn' => 5,
        'endColumn' => 21,
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
          'connection' => 
          array (
            'name' => 'connection',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Connection',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 102,
            'endLine' => 102,
            'startColumn' => 33,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 102,
            'endLine' => 102,
            'startColumn' => 57,
            'endColumn' => 62,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'callback' => 
          array (
            'name' => 'callback',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 102,
                'endLine' => 102,
                'startTokenPos' => 193,
                'startFilePos' => 2160,
                'endTokenPos' => 193,
                'endFilePos' => 2163,
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
                      'name' => 'Closure',
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
            'startLine' => 102,
            'endLine' => 102,
            'startColumn' => 65,
            'endColumn' => 89,
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
 * Create a new schema blueprint.
 *
 * @param  \\Illuminate\\Database\\Connection  $connection
 * @param  string  $table
 * @param  \\Closure|null  $callback
 */',
        'startLine' => 102,
        'endLine' => 111,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'build' => 
      array (
        'name' => 'build',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Execute the blueprint against the database.
 *
 * @return void
 */',
        'startLine' => 118,
        'endLine' => 123,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'toSql' => 
      array (
        'name' => 'toSql',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the raw SQL statements for the blueprint.
 *
 * @return array
 */',
        'startLine' => 130,
        'endLine' => 160,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'ensureCommandsAreValid' => 
      array (
        'name' => 'ensureCommandsAreValid',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Ensure the commands on the blueprint are valid for the connection type.
 *
 * @return void
 *
 * @throws \\BadMethodCallException
 */',
        'startLine' => 169,
        'endLine' => 172,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'commandsNamed' => 
      array (
        'name' => 'commandsNamed',
        'parameters' => 
        array (
          'names' => 
          array (
            'name' => 'names',
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
            'startLine' => 182,
            'endLine' => 182,
            'startColumn' => 38,
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
 * Get all of the commands matching the given names.
 *
 * @deprecated Will be removed in a future Laravel version.
 *
 * @param  array  $names
 * @return \\Illuminate\\Support\\Collection
 */',
        'startLine' => 182,
        'endLine' => 186,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'addImpliedCommands' => 
      array (
        'name' => 'addImpliedCommands',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add the commands that are implied by the blueprint\'s state.
 *
 * @return void
 */',
        'startLine' => 193,
        'endLine' => 208,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'addFluentIndexes' => 
      array (
        'name' => 'addFluentIndexes',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add the index commands fluently specified on columns.
 *
 * @return void
 */',
        'startLine' => 215,
        'endLine' => 257,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'addFluentCommands' => 
      array (
        'name' => 'addFluentCommands',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add the fluent commands specified on any columns.
 *
 * @return void
 */',
        'startLine' => 264,
        'endLine' => 271,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'addAlterCommands' => 
      array (
        'name' => 'addAlterCommands',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add the alter commands if whenever needed.
 *
 * @return void
 */',
        'startLine' => 278,
        'endLine' => 311,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'creating' => 
      array (
        'name' => 'creating',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the blueprint has a create command.
 *
 * @return bool
 */',
        'startLine' => 318,
        'endLine' => 322,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'create' => 
      array (
        'name' => 'create',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Indicate that the table needs to be created.
 *
 * @return \\Illuminate\\Support\\Fluent
 */',
        'startLine' => 329,
        'endLine' => 332,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'engine' => 
      array (
        'name' => 'engine',
        'parameters' => 
        array (
          'engine' => 
          array (
            'name' => 'engine',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 340,
            'endLine' => 340,
            'startColumn' => 28,
            'endColumn' => 34,
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
 * Specify the storage engine that should be used for the table.
 *
 * @param  string  $engine
 * @return void
 */',
        'startLine' => 340,
        'endLine' => 343,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'innoDb' => 
      array (
        'name' => 'innoDb',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Specify that the InnoDB storage engine should be used for the table (MySQL only).
 *
 * @return void
 */',
        'startLine' => 350,
        'endLine' => 353,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'charset' => 
      array (
        'name' => 'charset',
        'parameters' => 
        array (
          'charset' => 
          array (
            'name' => 'charset',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 361,
            'endLine' => 361,
            'startColumn' => 29,
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
 * Specify the character set that should be used for the table.
 *
 * @param  string  $charset
 * @return void
 */',
        'startLine' => 361,
        'endLine' => 364,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'collation' => 
      array (
        'name' => 'collation',
        'parameters' => 
        array (
          'collation' => 
          array (
            'name' => 'collation',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 372,
            'endLine' => 372,
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
 * Specify the collation that should be used for the table.
 *
 * @param  string  $collation
 * @return void
 */',
        'startLine' => 372,
        'endLine' => 375,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'temporary' => 
      array (
        'name' => 'temporary',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Indicate that the table needs to be temporary.
 *
 * @return void
 */',
        'startLine' => 382,
        'endLine' => 385,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'drop' => 
      array (
        'name' => 'drop',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Indicate that the table should be dropped.
 *
 * @return \\Illuminate\\Support\\Fluent
 */',
        'startLine' => 392,
        'endLine' => 395,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'dropIfExists' => 
      array (
        'name' => 'dropIfExists',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Indicate that the table should be dropped if it exists.
 *
 * @return \\Illuminate\\Support\\Fluent
 */',
        'startLine' => 402,
        'endLine' => 405,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'dropColumn' => 
      array (
        'name' => 'dropColumn',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 413,
            'endLine' => 413,
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
 * Indicate that the given columns should be dropped.
 *
 * @param  mixed  $columns
 * @return \\Illuminate\\Support\\Fluent
 */',
        'startLine' => 413,
        'endLine' => 418,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'renameColumn' => 
      array (
        'name' => 'renameColumn',
        'parameters' => 
        array (
          'from' => 
          array (
            'name' => 'from',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 427,
            'endLine' => 427,
            'startColumn' => 34,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'to' => 
          array (
            'name' => 'to',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 427,
            'endLine' => 427,
            'startColumn' => 41,
            'endColumn' => 43,
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
 * Indicate that the given columns should be renamed.
 *
 * @param  string  $from
 * @param  string  $to
 * @return \\Illuminate\\Support\\Fluent
 */',
        'startLine' => 427,
        'endLine' => 430,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'dropPrimary' => 
      array (
        'name' => 'dropPrimary',
        'parameters' => 
        array (
          'index' => 
          array (
            'name' => 'index',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 438,
                'endLine' => 438,
                'startTokenPos' => 1585,
                'startFilePos' => 11563,
                'endTokenPos' => 1585,
                'endFilePos' => 11566,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 438,
            'endLine' => 438,
            'startColumn' => 33,
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
 * Indicate that the given primary key should be dropped.
 *
 * @param  string|array|null  $index
 * @return \\Illuminate\\Support\\Fluent
 */',
        'startLine' => 438,
        'endLine' => 441,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'dropUnique' => 
      array (
        'name' => 'dropUnique',
        'parameters' => 
        array (
          'index' => 
          array (
            'name' => 'index',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 449,
            'endLine' => 449,
            'startColumn' => 32,
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
 * Indicate that the given unique key should be dropped.
 *
 * @param  string|array  $index
 * @return \\Illuminate\\Support\\Fluent
 */',
        'startLine' => 449,
        'endLine' => 452,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'dropIndex' => 
      array (
        'name' => 'dropIndex',
        'parameters' => 
        array (
          'index' => 
          array (
            'name' => 'index',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 460,
            'endLine' => 460,
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
 * Indicate that the given index should be dropped.
 *
 * @param  string|array  $index
 * @return \\Illuminate\\Support\\Fluent
 */',
        'startLine' => 460,
        'endLine' => 463,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'dropFullText' => 
      array (
        'name' => 'dropFullText',
        'parameters' => 
        array (
          'index' => 
          array (
            'name' => 'index',
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
            'startColumn' => 34,
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
 * Indicate that the given fulltext index should be dropped.
 *
 * @param  string|array  $index
 * @return \\Illuminate\\Support\\Fluent
 */',
        'startLine' => 471,
        'endLine' => 474,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'dropSpatialIndex' => 
      array (
        'name' => 'dropSpatialIndex',
        'parameters' => 
        array (
          'index' => 
          array (
            'name' => 'index',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 482,
            'endLine' => 482,
            'startColumn' => 38,
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
 * Indicate that the given spatial index should be dropped.
 *
 * @param  string|array  $index
 * @return \\Illuminate\\Support\\Fluent
 */',
        'startLine' => 482,
        'endLine' => 485,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'dropForeign' => 
      array (
        'name' => 'dropForeign',
        'parameters' => 
        array (
          'index' => 
          array (
            'name' => 'index',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 493,
            'endLine' => 493,
            'startColumn' => 33,
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
 * Indicate that the given foreign key should be dropped.
 *
 * @param  string|array  $index
 * @return \\Illuminate\\Support\\Fluent
 */',
        'startLine' => 493,
        'endLine' => 496,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'dropConstrainedForeignId' => 
      array (
        'name' => 'dropConstrainedForeignId',
        'parameters' => 
        array (
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
            'startLine' => 504,
            'endLine' => 504,
            'startColumn' => 46,
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
 * Indicate that the given column and foreign key should be dropped.
 *
 * @param  string  $column
 * @return \\Illuminate\\Support\\Fluent
 */',
        'startLine' => 504,
        'endLine' => 509,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'dropForeignIdFor' => 
      array (
        'name' => 'dropForeignIdFor',
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
            'startLine' => 518,
            'endLine' => 518,
            'startColumn' => 38,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'column' => 
          array (
            'name' => 'column',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 518,
                'endLine' => 518,
                'startTokenPos' => 1813,
                'startFilePos' => 13716,
                'endTokenPos' => 1813,
                'endFilePos' => 13719,
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
            'startColumn' => 46,
            'endColumn' => 59,
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
 * Indicate that the given foreign key should be dropped.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Model|string  $model
 * @param  string|null  $column
 * @return \\Illuminate\\Support\\Fluent
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
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'dropConstrainedForeignIdFor' => 
      array (
        'name' => 'dropConstrainedForeignIdFor',
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
            'startLine' => 534,
            'endLine' => 534,
            'startColumn' => 49,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'column' => 
          array (
            'name' => 'column',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 534,
                'endLine' => 534,
                'startTokenPos' => 1876,
                'startFilePos' => 14177,
                'endTokenPos' => 1876,
                'endFilePos' => 14180,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 534,
            'endLine' => 534,
            'startColumn' => 57,
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
 * Indicate that the given foreign key should be dropped.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Model|string  $model
 * @param  string|null  $column
 * @return \\Illuminate\\Support\\Fluent
 */',
        'startLine' => 534,
        'endLine' => 541,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'renameIndex' => 
      array (
        'name' => 'renameIndex',
        'parameters' => 
        array (
          'from' => 
          array (
            'name' => 'from',
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
            'startColumn' => 33,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'to' => 
          array (
            'name' => 'to',
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
            'startColumn' => 40,
            'endColumn' => 42,
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
 * Indicate that the given indexes should be renamed.
 *
 * @param  string  $from
 * @param  string  $to
 * @return \\Illuminate\\Support\\Fluent
 */',
        'startLine' => 550,
        'endLine' => 553,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'dropTimestamps' => 
      array (
        'name' => 'dropTimestamps',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Indicate that the timestamp columns should be dropped.
 *
 * @return void
 */',
        'startLine' => 560,
        'endLine' => 563,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'dropTimestampsTz' => 
      array (
        'name' => 'dropTimestampsTz',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Indicate that the timestamp columns should be dropped.
 *
 * @return void
 */',
        'startLine' => 570,
        'endLine' => 573,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'dropSoftDeletes' => 
      array (
        'name' => 'dropSoftDeletes',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => 
            array (
              'code' => '\'deleted_at\'',
              'attributes' => 
              array (
                'startLine' => 581,
                'endLine' => 581,
                'startTokenPos' => 2019,
                'startFilePos' => 15248,
                'endTokenPos' => 2019,
                'endFilePos' => 15259,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 581,
            'endLine' => 581,
            'startColumn' => 37,
            'endColumn' => 58,
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
 * Indicate that the soft delete column should be dropped.
 *
 * @param  string  $column
 * @return void
 */',
        'startLine' => 581,
        'endLine' => 584,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'dropSoftDeletesTz' => 
      array (
        'name' => 'dropSoftDeletesTz',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => 
            array (
              'code' => '\'deleted_at\'',
              'attributes' => 
              array (
                'startLine' => 592,
                'endLine' => 592,
                'startTokenPos' => 2046,
                'startFilePos' => 15496,
                'endTokenPos' => 2046,
                'endFilePos' => 15507,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 592,
            'endLine' => 592,
            'startColumn' => 39,
            'endColumn' => 60,
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
 * Indicate that the soft delete column should be dropped.
 *
 * @param  string  $column
 * @return void
 */',
        'startLine' => 592,
        'endLine' => 595,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'dropRememberToken' => 
      array (
        'name' => 'dropRememberToken',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Indicate that the remember token column should be dropped.
 *
 * @return void
 */',
        'startLine' => 602,
        'endLine' => 605,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'dropMorphs' => 
      array (
        'name' => 'dropMorphs',
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
            'startLine' => 614,
            'endLine' => 614,
            'startColumn' => 32,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'indexName' => 
          array (
            'name' => 'indexName',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 614,
                'endLine' => 614,
                'startTokenPos' => 2098,
                'startFilePos' => 15997,
                'endTokenPos' => 2098,
                'endFilePos' => 16000,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 614,
            'endLine' => 614,
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
 * Indicate that the polymorphic columns should be dropped.
 *
 * @param  string  $name
 * @param  string|null  $indexName
 * @return void
 */',
        'startLine' => 614,
        'endLine' => 619,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'rename' => 
      array (
        'name' => 'rename',
        'parameters' => 
        array (
          'to' => 
          array (
            'name' => 'to',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 627,
            'endLine' => 627,
            'startColumn' => 28,
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
 * Rename the table to a given name.
 *
 * @param  string  $to
 * @return \\Illuminate\\Support\\Fluent
 */',
        'startLine' => 627,
        'endLine' => 630,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'primary' => 
      array (
        'name' => 'primary',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 640,
            'endLine' => 640,
            'startColumn' => 29,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'name' => 
          array (
            'name' => 'name',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 640,
                'endLine' => 640,
                'startTokenPos' => 2208,
                'startFilePos' => 16704,
                'endTokenPos' => 2208,
                'endFilePos' => 16707,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 640,
            'endLine' => 640,
            'startColumn' => 39,
            'endColumn' => 50,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'algorithm' => 
          array (
            'name' => 'algorithm',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 640,
                'endLine' => 640,
                'startTokenPos' => 2215,
                'startFilePos' => 16723,
                'endTokenPos' => 2215,
                'endFilePos' => 16726,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 640,
            'endLine' => 640,
            'startColumn' => 53,
            'endColumn' => 69,
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
 * Specify the primary key(s) for the table.
 *
 * @param  string|array  $columns
 * @param  string|null  $name
 * @param  string|null  $algorithm
 * @return \\Illuminate\\Database\\Schema\\IndexDefinition
 */',
        'startLine' => 640,
        'endLine' => 643,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'unique' => 
      array (
        'name' => 'unique',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 653,
            'endLine' => 653,
            'startColumn' => 28,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'name' => 
          array (
            'name' => 'name',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 653,
                'endLine' => 653,
                'startTokenPos' => 2256,
                'startFilePos' => 17101,
                'endTokenPos' => 2256,
                'endFilePos' => 17104,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 653,
            'endLine' => 653,
            'startColumn' => 38,
            'endColumn' => 49,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'algorithm' => 
          array (
            'name' => 'algorithm',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 653,
                'endLine' => 653,
                'startTokenPos' => 2263,
                'startFilePos' => 17120,
                'endTokenPos' => 2263,
                'endFilePos' => 17123,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 653,
            'endLine' => 653,
            'startColumn' => 52,
            'endColumn' => 68,
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
 * Specify a unique index for the table.
 *
 * @param  string|array  $columns
 * @param  string|null  $name
 * @param  string|null  $algorithm
 * @return \\Illuminate\\Database\\Schema\\IndexDefinition
 */',
        'startLine' => 653,
        'endLine' => 656,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'index' => 
      array (
        'name' => 'index',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 666,
            'endLine' => 666,
            'startColumn' => 27,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'name' => 
          array (
            'name' => 'name',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 666,
                'endLine' => 666,
                'startTokenPos' => 2304,
                'startFilePos' => 17490,
                'endTokenPos' => 2304,
                'endFilePos' => 17493,
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
            'startColumn' => 37,
            'endColumn' => 48,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'algorithm' => 
          array (
            'name' => 'algorithm',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 666,
                'endLine' => 666,
                'startTokenPos' => 2311,
                'startFilePos' => 17509,
                'endTokenPos' => 2311,
                'endFilePos' => 17512,
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
            'startColumn' => 51,
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
 * Specify an index for the table.
 *
 * @param  string|array  $columns
 * @param  string|null  $name
 * @param  string|null  $algorithm
 * @return \\Illuminate\\Database\\Schema\\IndexDefinition
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
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'fullText' => 
      array (
        'name' => 'fullText',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 679,
            'endLine' => 679,
            'startColumn' => 30,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'name' => 
          array (
            'name' => 'name',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 679,
                'endLine' => 679,
                'startTokenPos' => 2352,
                'startFilePos' => 17889,
                'endTokenPos' => 2352,
                'endFilePos' => 17892,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 679,
            'endLine' => 679,
            'startColumn' => 40,
            'endColumn' => 51,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'algorithm' => 
          array (
            'name' => 'algorithm',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 679,
                'endLine' => 679,
                'startTokenPos' => 2359,
                'startFilePos' => 17908,
                'endTokenPos' => 2359,
                'endFilePos' => 17911,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 679,
            'endLine' => 679,
            'startColumn' => 54,
            'endColumn' => 70,
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
 * Specify a fulltext index for the table.
 *
 * @param  string|array  $columns
 * @param  string|null  $name
 * @param  string|null  $algorithm
 * @return \\Illuminate\\Database\\Schema\\IndexDefinition
 */',
        'startLine' => 679,
        'endLine' => 682,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'spatialIndex' => 
      array (
        'name' => 'spatialIndex',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 692,
            'endLine' => 692,
            'startColumn' => 34,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'name' => 
          array (
            'name' => 'name',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 692,
                'endLine' => 692,
                'startTokenPos' => 2400,
                'startFilePos' => 18298,
                'endTokenPos' => 2400,
                'endFilePos' => 18301,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 692,
            'endLine' => 692,
            'startColumn' => 44,
            'endColumn' => 55,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'operatorClass' => 
          array (
            'name' => 'operatorClass',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 692,
                'endLine' => 692,
                'startTokenPos' => 2407,
                'startFilePos' => 18321,
                'endTokenPos' => 2407,
                'endFilePos' => 18324,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 692,
            'endLine' => 692,
            'startColumn' => 58,
            'endColumn' => 78,
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
 * Specify a spatial index for the table.
 *
 * @param  string|array  $columns
 * @param  string|null  $name
 * @param  string|null  $operatorClass
 * @return \\Illuminate\\Database\\Schema\\IndexDefinition
 */',
        'startLine' => 692,
        'endLine' => 695,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'rawIndex' => 
      array (
        'name' => 'rawIndex',
        'parameters' => 
        array (
          'expression' => 
          array (
            'name' => 'expression',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 704,
            'endLine' => 704,
            'startColumn' => 30,
            'endColumn' => 40,
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
            'startLine' => 704,
            'endLine' => 704,
            'startColumn' => 43,
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
 * Specify a raw index for the table.
 *
 * @param  string  $expression
 * @param  string  $name
 * @return \\Illuminate\\Database\\Schema\\IndexDefinition
 */',
        'startLine' => 704,
        'endLine' => 707,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'foreign' => 
      array (
        'name' => 'foreign',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 716,
            'endLine' => 716,
            'startColumn' => 29,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'name' => 
          array (
            'name' => 'name',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 716,
                'endLine' => 716,
                'startTokenPos' => 2489,
                'startFilePos' => 18997,
                'endTokenPos' => 2489,
                'endFilePos' => 19000,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 716,
            'endLine' => 716,
            'startColumn' => 39,
            'endColumn' => 50,
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
 * Specify a foreign key for the table.
 *
 * @param  string|array  $columns
 * @param  string|null  $name
 * @return \\Illuminate\\Database\\Schema\\ForeignKeyDefinition
 */',
        'startLine' => 716,
        'endLine' => 725,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'id' => 
      array (
        'name' => 'id',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => 
            array (
              'code' => '\'id\'',
              'attributes' => 
              array (
                'startLine' => 733,
                'endLine' => 733,
                'startTokenPos' => 2563,
                'startFilePos' => 19467,
                'endTokenPos' => 2563,
                'endFilePos' => 19470,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 733,
            'endLine' => 733,
            'startColumn' => 24,
            'endColumn' => 37,
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
 * Create a new auto-incrementing big integer (8-byte) column on the table.
 *
 * @param  string  $column
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
        'startLine' => 733,
        'endLine' => 736,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'increments' => 
      array (
        'name' => 'increments',
        'parameters' => 
        array (
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
            'startLine' => 744,
            'endLine' => 744,
            'startColumn' => 32,
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
 * Create a new auto-incrementing integer (4-byte) column on the table.
 *
 * @param  string  $column
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
        'startLine' => 744,
        'endLine' => 747,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'integerIncrements' => 
      array (
        'name' => 'integerIncrements',
        'parameters' => 
        array (
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
            'startLine' => 755,
            'endLine' => 755,
            'startColumn' => 39,
            'endColumn' => 45,
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
 * Create a new auto-incrementing integer (4-byte) column on the table.
 *
 * @param  string  $column
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
        'startLine' => 755,
        'endLine' => 758,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'tinyIncrements' => 
      array (
        'name' => 'tinyIncrements',
        'parameters' => 
        array (
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
            'startLine' => 766,
            'endLine' => 766,
            'startColumn' => 36,
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
 * Create a new auto-incrementing tiny integer (1-byte) column on the table.
 *
 * @param  string  $column
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
        'startLine' => 766,
        'endLine' => 769,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'smallIncrements' => 
      array (
        'name' => 'smallIncrements',
        'parameters' => 
        array (
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
            'startLine' => 777,
            'endLine' => 777,
            'startColumn' => 37,
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
 * Create a new auto-incrementing small integer (2-byte) column on the table.
 *
 * @param  string  $column
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
        'startLine' => 777,
        'endLine' => 780,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'mediumIncrements' => 
      array (
        'name' => 'mediumIncrements',
        'parameters' => 
        array (
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
            'startLine' => 788,
            'endLine' => 788,
            'startColumn' => 38,
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
 * Create a new auto-incrementing medium integer (3-byte) column on the table.
 *
 * @param  string  $column
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
        'startLine' => 788,
        'endLine' => 791,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'bigIncrements' => 
      array (
        'name' => 'bigIncrements',
        'parameters' => 
        array (
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
            'startLine' => 799,
            'endLine' => 799,
            'startColumn' => 35,
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
 * Create a new auto-incrementing big integer (8-byte) column on the table.
 *
 * @param  string  $column
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
        'startLine' => 799,
        'endLine' => 802,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'char' => 
      array (
        'name' => 'char',
        'parameters' => 
        array (
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
            'startLine' => 811,
            'endLine' => 811,
            'startColumn' => 26,
            'endColumn' => 32,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'length' => 
          array (
            'name' => 'length',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 811,
                'endLine' => 811,
                'startTokenPos' => 2763,
                'startFilePos' => 21616,
                'endTokenPos' => 2763,
                'endFilePos' => 21619,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 811,
            'endLine' => 811,
            'startColumn' => 35,
            'endColumn' => 48,
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
 * Create a new char column on the table.
 *
 * @param  string  $column
 * @param  int|null  $length
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
        'startLine' => 811,
        'endLine' => 816,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'string' => 
      array (
        'name' => 'string',
        'parameters' => 
        array (
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
            'startLine' => 825,
            'endLine' => 825,
            'startColumn' => 28,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'length' => 
          array (
            'name' => 'length',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 825,
                'endLine' => 825,
                'startTokenPos' => 2826,
                'startFilePos' => 22026,
                'endTokenPos' => 2826,
                'endFilePos' => 22029,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 825,
            'endLine' => 825,
            'startColumn' => 37,
            'endColumn' => 50,
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
 * Create a new string column on the table.
 *
 * @param  string  $column
 * @param  int|null  $length
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
        'startLine' => 825,
        'endLine' => 830,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'tinyText' => 
      array (
        'name' => 'tinyText',
        'parameters' => 
        array (
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
            'startLine' => 838,
            'endLine' => 838,
            'startColumn' => 30,
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
 * Create a new tiny text column on the table.
 *
 * @param  string  $column
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
        'startLine' => 838,
        'endLine' => 841,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'text' => 
      array (
        'name' => 'text',
        'parameters' => 
        array (
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
            'startLine' => 849,
            'endLine' => 849,
            'startColumn' => 26,
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
 * Create a new text column on the table.
 *
 * @param  string  $column
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
        'startLine' => 849,
        'endLine' => 852,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'mediumText' => 
      array (
        'name' => 'mediumText',
        'parameters' => 
        array (
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
            'startLine' => 860,
            'endLine' => 860,
            'startColumn' => 32,
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
 * Create a new medium text column on the table.
 *
 * @param  string  $column
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
        'startLine' => 860,
        'endLine' => 863,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'longText' => 
      array (
        'name' => 'longText',
        'parameters' => 
        array (
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
            'startLine' => 871,
            'endLine' => 871,
            'startColumn' => 30,
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
 * Create a new long text column on the table.
 *
 * @param  string  $column
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
        'startLine' => 871,
        'endLine' => 874,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'integer' => 
      array (
        'name' => 'integer',
        'parameters' => 
        array (
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
            'startLine' => 884,
            'endLine' => 884,
            'startColumn' => 29,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'autoIncrement' => 
          array (
            'name' => 'autoIncrement',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 884,
                'endLine' => 884,
                'startTokenPos' => 2993,
                'startFilePos' => 23543,
                'endTokenPos' => 2993,
                'endFilePos' => 23547,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 884,
            'endLine' => 884,
            'startColumn' => 38,
            'endColumn' => 59,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'unsigned' => 
          array (
            'name' => 'unsigned',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 884,
                'endLine' => 884,
                'startTokenPos' => 3000,
                'startFilePos' => 23562,
                'endTokenPos' => 3000,
                'endFilePos' => 23566,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 884,
            'endLine' => 884,
            'startColumn' => 62,
            'endColumn' => 78,
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
 * Create a new integer (4-byte) column on the table.
 *
 * @param  string  $column
 * @param  bool  $autoIncrement
 * @param  bool  $unsigned
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
        'startLine' => 884,
        'endLine' => 887,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'tinyInteger' => 
      array (
        'name' => 'tinyInteger',
        'parameters' => 
        array (
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
            'startLine' => 897,
            'endLine' => 897,
            'startColumn' => 33,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'autoIncrement' => 
          array (
            'name' => 'autoIncrement',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 897,
                'endLine' => 897,
                'startTokenPos' => 3044,
                'startFilePos' => 23975,
                'endTokenPos' => 3044,
                'endFilePos' => 23979,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 897,
            'endLine' => 897,
            'startColumn' => 42,
            'endColumn' => 63,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'unsigned' => 
          array (
            'name' => 'unsigned',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 897,
                'endLine' => 897,
                'startTokenPos' => 3051,
                'startFilePos' => 23994,
                'endTokenPos' => 3051,
                'endFilePos' => 23998,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 897,
            'endLine' => 897,
            'startColumn' => 66,
            'endColumn' => 82,
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
 * Create a new tiny integer (1-byte) column on the table.
 *
 * @param  string  $column
 * @param  bool  $autoIncrement
 * @param  bool  $unsigned
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
        'startLine' => 897,
        'endLine' => 900,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'smallInteger' => 
      array (
        'name' => 'smallInteger',
        'parameters' => 
        array (
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
            'startLine' => 910,
            'endLine' => 910,
            'startColumn' => 34,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'autoIncrement' => 
          array (
            'name' => 'autoIncrement',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 910,
                'endLine' => 910,
                'startTokenPos' => 3095,
                'startFilePos' => 24413,
                'endTokenPos' => 3095,
                'endFilePos' => 24417,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 910,
            'endLine' => 910,
            'startColumn' => 43,
            'endColumn' => 64,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'unsigned' => 
          array (
            'name' => 'unsigned',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 910,
                'endLine' => 910,
                'startTokenPos' => 3102,
                'startFilePos' => 24432,
                'endTokenPos' => 3102,
                'endFilePos' => 24436,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 910,
            'endLine' => 910,
            'startColumn' => 67,
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
 * Create a new small integer (2-byte) column on the table.
 *
 * @param  string  $column
 * @param  bool  $autoIncrement
 * @param  bool  $unsigned
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
        'startLine' => 910,
        'endLine' => 913,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'mediumInteger' => 
      array (
        'name' => 'mediumInteger',
        'parameters' => 
        array (
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
            'startLine' => 923,
            'endLine' => 923,
            'startColumn' => 35,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'autoIncrement' => 
          array (
            'name' => 'autoIncrement',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 923,
                'endLine' => 923,
                'startTokenPos' => 3146,
                'startFilePos' => 24854,
                'endTokenPos' => 3146,
                'endFilePos' => 24858,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 923,
            'endLine' => 923,
            'startColumn' => 44,
            'endColumn' => 65,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'unsigned' => 
          array (
            'name' => 'unsigned',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 923,
                'endLine' => 923,
                'startTokenPos' => 3153,
                'startFilePos' => 24873,
                'endTokenPos' => 3153,
                'endFilePos' => 24877,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 923,
            'endLine' => 923,
            'startColumn' => 68,
            'endColumn' => 84,
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
 * Create a new medium integer (3-byte) column on the table.
 *
 * @param  string  $column
 * @param  bool  $autoIncrement
 * @param  bool  $unsigned
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
        'startLine' => 923,
        'endLine' => 926,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'bigInteger' => 
      array (
        'name' => 'bigInteger',
        'parameters' => 
        array (
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
            'startLine' => 936,
            'endLine' => 936,
            'startColumn' => 32,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'autoIncrement' => 
          array (
            'name' => 'autoIncrement',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 936,
                'endLine' => 936,
                'startTokenPos' => 3197,
                'startFilePos' => 25290,
                'endTokenPos' => 3197,
                'endFilePos' => 25294,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 936,
            'endLine' => 936,
            'startColumn' => 41,
            'endColumn' => 62,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'unsigned' => 
          array (
            'name' => 'unsigned',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 936,
                'endLine' => 936,
                'startTokenPos' => 3204,
                'startFilePos' => 25309,
                'endTokenPos' => 3204,
                'endFilePos' => 25313,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 936,
            'endLine' => 936,
            'startColumn' => 65,
            'endColumn' => 81,
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
 * Create a new big integer (8-byte) column on the table.
 *
 * @param  string  $column
 * @param  bool  $autoIncrement
 * @param  bool  $unsigned
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
        'startLine' => 936,
        'endLine' => 939,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'unsignedInteger' => 
      array (
        'name' => 'unsignedInteger',
        'parameters' => 
        array (
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
            'startLine' => 948,
            'endLine' => 948,
            'startColumn' => 37,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'autoIncrement' => 
          array (
            'name' => 'autoIncrement',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 948,
                'endLine' => 948,
                'startTokenPos' => 3248,
                'startFilePos' => 25702,
                'endTokenPos' => 3248,
                'endFilePos' => 25706,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 948,
            'endLine' => 948,
            'startColumn' => 46,
            'endColumn' => 67,
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
 * Create a new unsigned integer (4-byte) column on the table.
 *
 * @param  string  $column
 * @param  bool  $autoIncrement
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
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
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'unsignedTinyInteger' => 
      array (
        'name' => 'unsignedTinyInteger',
        'parameters' => 
        array (
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
            'startLine' => 960,
            'endLine' => 960,
            'startColumn' => 41,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'autoIncrement' => 
          array (
            'name' => 'autoIncrement',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 960,
                'endLine' => 960,
                'startTokenPos' => 3286,
                'startFilePos' => 26072,
                'endTokenPos' => 3286,
                'endFilePos' => 26076,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 960,
            'endLine' => 960,
            'startColumn' => 50,
            'endColumn' => 71,
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
 * Create a new unsigned tiny integer (1-byte) column on the table.
 *
 * @param  string  $column
 * @param  bool  $autoIncrement
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
        'startLine' => 960,
        'endLine' => 963,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'unsignedSmallInteger' => 
      array (
        'name' => 'unsignedSmallInteger',
        'parameters' => 
        array (
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
            'startLine' => 972,
            'endLine' => 972,
            'startColumn' => 42,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'autoIncrement' => 
          array (
            'name' => 'autoIncrement',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 972,
                'endLine' => 972,
                'startTokenPos' => 3324,
                'startFilePos' => 26448,
                'endTokenPos' => 3324,
                'endFilePos' => 26452,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 972,
            'endLine' => 972,
            'startColumn' => 51,
            'endColumn' => 72,
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
 * Create a new unsigned small integer (2-byte) column on the table.
 *
 * @param  string  $column
 * @param  bool  $autoIncrement
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
        'startLine' => 972,
        'endLine' => 975,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'unsignedMediumInteger' => 
      array (
        'name' => 'unsignedMediumInteger',
        'parameters' => 
        array (
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
            'startLine' => 984,
            'endLine' => 984,
            'startColumn' => 43,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'autoIncrement' => 
          array (
            'name' => 'autoIncrement',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 984,
                'endLine' => 984,
                'startTokenPos' => 3362,
                'startFilePos' => 26827,
                'endTokenPos' => 3362,
                'endFilePos' => 26831,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 984,
            'endLine' => 984,
            'startColumn' => 52,
            'endColumn' => 73,
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
 * Create a new unsigned medium integer (3-byte) column on the table.
 *
 * @param  string  $column
 * @param  bool  $autoIncrement
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
        'startLine' => 984,
        'endLine' => 987,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'unsignedBigInteger' => 
      array (
        'name' => 'unsignedBigInteger',
        'parameters' => 
        array (
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
            'startLine' => 996,
            'endLine' => 996,
            'startColumn' => 40,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'autoIncrement' => 
          array (
            'name' => 'autoIncrement',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 996,
                'endLine' => 996,
                'startTokenPos' => 3400,
                'startFilePos' => 27201,
                'endTokenPos' => 3400,
                'endFilePos' => 27205,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 996,
            'endLine' => 996,
            'startColumn' => 49,
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
 * Create a new unsigned big integer (8-byte) column on the table.
 *
 * @param  string  $column
 * @param  bool  $autoIncrement
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
        'startLine' => 996,
        'endLine' => 999,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'foreignId' => 
      array (
        'name' => 'foreignId',
        'parameters' => 
        array (
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
            'startLine' => 1007,
            'endLine' => 1007,
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
 * Create a new unsigned big integer (8-byte) column on the table.
 *
 * @param  string  $column
 * @return \\Illuminate\\Database\\Schema\\ForeignIdColumnDefinition
 */',
        'startLine' => 1007,
        'endLine' => 1015,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'foreignIdFor' => 
      array (
        'name' => 'foreignIdFor',
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
            'startLine' => 1024,
            'endLine' => 1024,
            'startColumn' => 34,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'column' => 
          array (
            'name' => 'column',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1024,
                'endLine' => 1024,
                'startTokenPos' => 3501,
                'startFilePos' => 28063,
                'endTokenPos' => 3501,
                'endFilePos' => 28066,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1024,
            'endLine' => 1024,
            'startColumn' => 42,
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
 * Create a foreign ID column for the given model.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Model|string  $model
 * @param  string|null  $column
 * @return \\Illuminate\\Database\\Schema\\ForeignIdColumnDefinition
 */',
        'startLine' => 1024,
        'endLine' => 1049,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'float' => 
      array (
        'name' => 'float',
        'parameters' => 
        array (
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
            'startLine' => 1058,
            'endLine' => 1058,
            'startColumn' => 27,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'precision' => 
          array (
            'name' => 'precision',
            'default' => 
            array (
              'code' => '53',
              'attributes' => 
              array (
                'startLine' => 1058,
                'endLine' => 1058,
                'startTokenPos' => 3703,
                'startFilePos' => 29089,
                'endTokenPos' => 3703,
                'endFilePos' => 29090,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1058,
            'endLine' => 1058,
            'startColumn' => 36,
            'endColumn' => 50,
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
 * Create a new float column on the table.
 *
 * @param  string  $column
 * @param  int  $precision
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
        'startLine' => 1058,
        'endLine' => 1061,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'double' => 
      array (
        'name' => 'double',
        'parameters' => 
        array (
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
            'startLine' => 1069,
            'endLine' => 1069,
            'startColumn' => 28,
            'endColumn' => 34,
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
 * Create a new double column on the table.
 *
 * @param  string  $column
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
        'startLine' => 1069,
        'endLine' => 1072,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'decimal' => 
      array (
        'name' => 'decimal',
        'parameters' => 
        array (
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
            'startLine' => 1082,
            'endLine' => 1082,
            'startColumn' => 29,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'total' => 
          array (
            'name' => 'total',
            'default' => 
            array (
              'code' => '8',
              'attributes' => 
              array (
                'startLine' => 1082,
                'endLine' => 1082,
                'startTokenPos' => 3772,
                'startFilePos' => 29706,
                'endTokenPos' => 3772,
                'endFilePos' => 29706,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1082,
            'endLine' => 1082,
            'startColumn' => 38,
            'endColumn' => 47,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'places' => 
          array (
            'name' => 'places',
            'default' => 
            array (
              'code' => '2',
              'attributes' => 
              array (
                'startLine' => 1082,
                'endLine' => 1082,
                'startTokenPos' => 3779,
                'startFilePos' => 29719,
                'endTokenPos' => 3779,
                'endFilePos' => 29719,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1082,
            'endLine' => 1082,
            'startColumn' => 50,
            'endColumn' => 60,
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
 * Create a new decimal column on the table.
 *
 * @param  string  $column
 * @param  int  $total
 * @param  int  $places
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
        'startLine' => 1082,
        'endLine' => 1085,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'boolean' => 
      array (
        'name' => 'boolean',
        'parameters' => 
        array (
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
            'startLine' => 1093,
            'endLine' => 1093,
            'startColumn' => 29,
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
 * Create a new boolean column on the table.
 *
 * @param  string  $column
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
        'startLine' => 1093,
        'endLine' => 1096,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'enum' => 
      array (
        'name' => 'enum',
        'parameters' => 
        array (
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
            'startLine' => 1105,
            'endLine' => 1105,
            'startColumn' => 26,
            'endColumn' => 32,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'allowed' => 
          array (
            'name' => 'allowed',
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
            'startLine' => 1105,
            'endLine' => 1105,
            'startColumn' => 35,
            'endColumn' => 48,
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
 * Create a new enum column on the table.
 *
 * @param  string  $column
 * @param  array  $allowed
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
        'startLine' => 1105,
        'endLine' => 1110,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'set' => 
      array (
        'name' => 'set',
        'parameters' => 
        array (
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
            'startLine' => 1119,
            'endLine' => 1119,
            'startColumn' => 25,
            'endColumn' => 31,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'allowed' => 
          array (
            'name' => 'allowed',
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
            'startLine' => 1119,
            'endLine' => 1119,
            'startColumn' => 34,
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
 * Create a new set column on the table.
 *
 * @param  string  $column
 * @param  array  $allowed
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
        'startLine' => 1119,
        'endLine' => 1122,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'json' => 
      array (
        'name' => 'json',
        'parameters' => 
        array (
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
            'startLine' => 1130,
            'endLine' => 1130,
            'startColumn' => 26,
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
 * Create a new json column on the table.
 *
 * @param  string  $column
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
        'startLine' => 1130,
        'endLine' => 1133,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'jsonb' => 
      array (
        'name' => 'jsonb',
        'parameters' => 
        array (
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
            'startLine' => 1141,
            'endLine' => 1141,
            'startColumn' => 27,
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
 * Create a new jsonb column on the table.
 *
 * @param  string  $column
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
        'startLine' => 1141,
        'endLine' => 1144,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'date' => 
      array (
        'name' => 'date',
        'parameters' => 
        array (
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
            'startLine' => 1152,
            'endLine' => 1152,
            'startColumn' => 26,
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
 * Create a new date column on the table.
 *
 * @param  string  $column
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
        'startLine' => 1152,
        'endLine' => 1155,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'dateTime' => 
      array (
        'name' => 'dateTime',
        'parameters' => 
        array (
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
            'startLine' => 1164,
            'endLine' => 1164,
            'startColumn' => 30,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'precision' => 
          array (
            'name' => 'precision',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1164,
                'endLine' => 1164,
                'startTokenPos' => 4037,
                'startFilePos' => 31829,
                'endTokenPos' => 4037,
                'endFilePos' => 31832,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1164,
            'endLine' => 1164,
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
 * Create a new date-time column on the table.
 *
 * @param  string  $column
 * @param  int|null  $precision
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
        'startLine' => 1164,
        'endLine' => 1169,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'dateTimeTz' => 
      array (
        'name' => 'dateTimeTz',
        'parameters' => 
        array (
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
            'startLine' => 1178,
            'endLine' => 1178,
            'startColumn' => 32,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'precision' => 
          array (
            'name' => 'precision',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1178,
                'endLine' => 1178,
                'startTokenPos' => 4089,
                'startFilePos' => 32250,
                'endTokenPos' => 4089,
                'endFilePos' => 32253,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1178,
            'endLine' => 1178,
            'startColumn' => 41,
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
 * Create a new date-time column (with time zone) on the table.
 *
 * @param  string  $column
 * @param  int|null  $precision
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
        'startLine' => 1178,
        'endLine' => 1183,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'time' => 
      array (
        'name' => 'time',
        'parameters' => 
        array (
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
            'startLine' => 1192,
            'endLine' => 1192,
            'startColumn' => 26,
            'endColumn' => 32,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'precision' => 
          array (
            'name' => 'precision',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1192,
                'endLine' => 1192,
                'startTokenPos' => 4141,
                'startFilePos' => 32645,
                'endTokenPos' => 4141,
                'endFilePos' => 32648,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1192,
            'endLine' => 1192,
            'startColumn' => 35,
            'endColumn' => 51,
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
 * Create a new time column on the table.
 *
 * @param  string  $column
 * @param  int|null  $precision
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
        'startLine' => 1192,
        'endLine' => 1197,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'timeTz' => 
      array (
        'name' => 'timeTz',
        'parameters' => 
        array (
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
            'startLine' => 1206,
            'endLine' => 1206,
            'startColumn' => 28,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'precision' => 
          array (
            'name' => 'precision',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1206,
                'endLine' => 1206,
                'startTokenPos' => 4193,
                'startFilePos' => 33053,
                'endTokenPos' => 4193,
                'endFilePos' => 33056,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1206,
            'endLine' => 1206,
            'startColumn' => 37,
            'endColumn' => 53,
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
 * Create a new time column (with time zone) on the table.
 *
 * @param  string  $column
 * @param  int|null  $precision
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
        'startLine' => 1206,
        'endLine' => 1211,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'timestamp' => 
      array (
        'name' => 'timestamp',
        'parameters' => 
        array (
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
            'startLine' => 1220,
            'endLine' => 1220,
            'startColumn' => 31,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'precision' => 
          array (
            'name' => 'precision',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1220,
                'endLine' => 1220,
                'startTokenPos' => 4245,
                'startFilePos' => 33454,
                'endTokenPos' => 4245,
                'endFilePos' => 33457,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1220,
            'endLine' => 1220,
            'startColumn' => 40,
            'endColumn' => 56,
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
 * Create a new timestamp column on the table.
 *
 * @param  string  $column
 * @param  int|null  $precision
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
        'startLine' => 1220,
        'endLine' => 1225,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'timestampTz' => 
      array (
        'name' => 'timestampTz',
        'parameters' => 
        array (
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
            'startLine' => 1234,
            'endLine' => 1234,
            'startColumn' => 33,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'precision' => 
          array (
            'name' => 'precision',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1234,
                'endLine' => 1234,
                'startTokenPos' => 4297,
                'startFilePos' => 33877,
                'endTokenPos' => 4297,
                'endFilePos' => 33880,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1234,
            'endLine' => 1234,
            'startColumn' => 42,
            'endColumn' => 58,
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
 * Create a new timestamp (with time zone) column on the table.
 *
 * @param  string  $column
 * @param  int|null  $precision
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
        'startLine' => 1234,
        'endLine' => 1239,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'timestamps' => 
      array (
        'name' => 'timestamps',
        'parameters' => 
        array (
          'precision' => 
          array (
            'name' => 'precision',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1247,
                'endLine' => 1247,
                'startTokenPos' => 4346,
                'startFilePos' => 34295,
                'endTokenPos' => 4346,
                'endFilePos' => 34298,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1247,
            'endLine' => 1247,
            'startColumn' => 32,
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
 * Add nullable creation and update timestamps to the table.
 *
 * @param  int|null  $precision
 * @return \\Illuminate\\Support\\Collection<int, \\Illuminate\\Database\\Schema\\ColumnDefinition>
 */',
        'startLine' => 1247,
        'endLine' => 1253,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'nullableTimestamps' => 
      array (
        'name' => 'nullableTimestamps',
        'parameters' => 
        array (
          'precision' => 
          array (
            'name' => 'precision',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1263,
                'endLine' => 1263,
                'startTokenPos' => 4407,
                'startFilePos' => 34811,
                'endTokenPos' => 4407,
                'endFilePos' => 34814,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1263,
            'endLine' => 1263,
            'startColumn' => 40,
            'endColumn' => 56,
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
 * Add nullable creation and update timestamps to the table.
 *
 * Alias for self::timestamps().
 *
 * @param  int|null  $precision
 * @return \\Illuminate\\Support\\Collection<int, \\Illuminate\\Database\\Schema\\ColumnDefinition>
 */',
        'startLine' => 1263,
        'endLine' => 1266,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'timestampsTz' => 
      array (
        'name' => 'timestampsTz',
        'parameters' => 
        array (
          'precision' => 
          array (
            'name' => 'precision',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1274,
                'endLine' => 1274,
                'startTokenPos' => 4436,
                'startFilePos' => 35152,
                'endTokenPos' => 4436,
                'endFilePos' => 35155,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1274,
            'endLine' => 1274,
            'startColumn' => 34,
            'endColumn' => 50,
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
 * Add nullable creation and update timestampTz columns to the table.
 *
 * @param  int|null  $precision
 * @return \\Illuminate\\Support\\Collection<int, \\Illuminate\\Database\\Schema\\ColumnDefinition>
 */',
        'startLine' => 1274,
        'endLine' => 1280,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'nullableTimestampsTz' => 
      array (
        'name' => 'nullableTimestampsTz',
        'parameters' => 
        array (
          'precision' => 
          array (
            'name' => 'precision',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1290,
                'endLine' => 1290,
                'startTokenPos' => 4497,
                'startFilePos' => 35685,
                'endTokenPos' => 4497,
                'endFilePos' => 35688,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1290,
            'endLine' => 1290,
            'startColumn' => 42,
            'endColumn' => 58,
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
 * Add nullable creation and update timestampTz columns to the table.
 *
 * Alias for self::timestampsTz().
 *
 * @param  int|null  $precision
 * @return \\Illuminate\\Support\\Collection<int, \\Illuminate\\Database\\Schema\\ColumnDefinition>
 */',
        'startLine' => 1290,
        'endLine' => 1293,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'datetimes' => 
      array (
        'name' => 'datetimes',
        'parameters' => 
        array (
          'precision' => 
          array (
            'name' => 'precision',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1301,
                'endLine' => 1301,
                'startTokenPos' => 4526,
                'startFilePos' => 36013,
                'endTokenPos' => 4526,
                'endFilePos' => 36016,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1301,
            'endLine' => 1301,
            'startColumn' => 31,
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
 * Add creation and update datetime columns to the table.
 *
 * @param  int|null  $precision
 * @return \\Illuminate\\Support\\Collection<int, \\Illuminate\\Database\\Schema\\ColumnDefinition>
 */',
        'startLine' => 1301,
        'endLine' => 1307,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'softDeletes' => 
      array (
        'name' => 'softDeletes',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => 
            array (
              'code' => '\'deleted_at\'',
              'attributes' => 
              array (
                'startLine' => 1316,
                'endLine' => 1316,
                'startTokenPos' => 4587,
                'startFilePos' => 36453,
                'endTokenPos' => 4587,
                'endFilePos' => 36464,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1316,
            'endLine' => 1316,
            'startColumn' => 33,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'precision' => 
          array (
            'name' => 'precision',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1316,
                'endLine' => 1316,
                'startTokenPos' => 4594,
                'startFilePos' => 36480,
                'endTokenPos' => 4594,
                'endFilePos' => 36483,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1316,
            'endLine' => 1316,
            'startColumn' => 57,
            'endColumn' => 73,
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
 * Add a "deleted at" timestamp for the table.
 *
 * @param  string  $column
 * @param  int|null  $precision
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
        'startLine' => 1316,
        'endLine' => 1319,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'softDeletesTz' => 
      array (
        'name' => 'softDeletesTz',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => 
            array (
              'code' => '\'deleted_at\'',
              'attributes' => 
              array (
                'startLine' => 1328,
                'endLine' => 1328,
                'startTokenPos' => 4630,
                'startFilePos' => 36812,
                'endTokenPos' => 4630,
                'endFilePos' => 36823,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1328,
            'endLine' => 1328,
            'startColumn' => 35,
            'endColumn' => 56,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'precision' => 
          array (
            'name' => 'precision',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1328,
                'endLine' => 1328,
                'startTokenPos' => 4637,
                'startFilePos' => 36839,
                'endTokenPos' => 4637,
                'endFilePos' => 36842,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1328,
            'endLine' => 1328,
            'startColumn' => 59,
            'endColumn' => 75,
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
 * Add a "deleted at" timestampTz for the table.
 *
 * @param  string  $column
 * @param  int|null  $precision
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
        'startLine' => 1328,
        'endLine' => 1331,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'softDeletesDatetime' => 
      array (
        'name' => 'softDeletesDatetime',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => 
            array (
              'code' => '\'deleted_at\'',
              'attributes' => 
              array (
                'startLine' => 1340,
                'endLine' => 1340,
                'startTokenPos' => 4673,
                'startFilePos' => 37182,
                'endTokenPos' => 4673,
                'endFilePos' => 37193,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1340,
            'endLine' => 1340,
            'startColumn' => 41,
            'endColumn' => 62,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'precision' => 
          array (
            'name' => 'precision',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1340,
                'endLine' => 1340,
                'startTokenPos' => 4680,
                'startFilePos' => 37209,
                'endTokenPos' => 4680,
                'endFilePos' => 37212,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1340,
            'endLine' => 1340,
            'startColumn' => 65,
            'endColumn' => 81,
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
 * Add a "deleted at" datetime column to the table.
 *
 * @param  string  $column
 * @param  int|null  $precision
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
        'startLine' => 1340,
        'endLine' => 1343,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'year' => 
      array (
        'name' => 'year',
        'parameters' => 
        array (
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
            'startLine' => 1351,
            'endLine' => 1351,
            'startColumn' => 26,
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
 * Create a new year column on the table.
 *
 * @param  string  $column
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
        'startLine' => 1351,
        'endLine' => 1354,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'binary' => 
      array (
        'name' => 'binary',
        'parameters' => 
        array (
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
            'startLine' => 1364,
            'endLine' => 1364,
            'startColumn' => 28,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'length' => 
          array (
            'name' => 'length',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1364,
                'endLine' => 1364,
                'startTokenPos' => 4747,
                'startFilePos' => 37819,
                'endTokenPos' => 4747,
                'endFilePos' => 37822,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1364,
            'endLine' => 1364,
            'startColumn' => 37,
            'endColumn' => 50,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'fixed' => 
          array (
            'name' => 'fixed',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 1364,
                'endLine' => 1364,
                'startTokenPos' => 4754,
                'startFilePos' => 37834,
                'endTokenPos' => 4754,
                'endFilePos' => 37838,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1364,
            'endLine' => 1364,
            'startColumn' => 53,
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
 * Create a new binary column on the table.
 *
 * @param  string  $column
 * @param  int|null  $length
 * @param  bool  $fixed
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
        'startLine' => 1364,
        'endLine' => 1367,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'uuid' => 
      array (
        'name' => 'uuid',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => 
            array (
              'code' => '\'uuid\'',
              'attributes' => 
              array (
                'startLine' => 1375,
                'endLine' => 1375,
                'startTokenPos' => 4795,
                'startFilePos' => 38129,
                'endTokenPos' => 4795,
                'endFilePos' => 38134,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1375,
            'endLine' => 1375,
            'startColumn' => 26,
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
 * Create a new UUID column on the table.
 *
 * @param  string  $column
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
        'startLine' => 1375,
        'endLine' => 1378,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'foreignUuid' => 
      array (
        'name' => 'foreignUuid',
        'parameters' => 
        array (
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
            'startLine' => 1386,
            'endLine' => 1386,
            'startColumn' => 33,
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
 * Create a new UUID column on the table with a foreign key constraint.
 *
 * @param  string  $column
 * @return \\Illuminate\\Database\\Schema\\ForeignIdColumnDefinition
 */',
        'startLine' => 1386,
        'endLine' => 1392,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'ulid' => 
      array (
        'name' => 'ulid',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => 
            array (
              'code' => '\'ulid\'',
              'attributes' => 
              array (
                'startLine' => 1401,
                'endLine' => 1401,
                'startTokenPos' => 4876,
                'startFilePos' => 38836,
                'endTokenPos' => 4876,
                'endFilePos' => 38841,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1401,
            'endLine' => 1401,
            'startColumn' => 26,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'length' => 
          array (
            'name' => 'length',
            'default' => 
            array (
              'code' => '26',
              'attributes' => 
              array (
                'startLine' => 1401,
                'endLine' => 1401,
                'startTokenPos' => 4883,
                'startFilePos' => 38854,
                'endTokenPos' => 4883,
                'endFilePos' => 38855,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1401,
            'endLine' => 1401,
            'startColumn' => 44,
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
 * Create a new ULID column on the table.
 *
 * @param  string  $column
 * @param  int|null  $length
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
        'startLine' => 1401,
        'endLine' => 1404,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'foreignUlid' => 
      array (
        'name' => 'foreignUlid',
        'parameters' => 
        array (
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
            'startLine' => 1413,
            'endLine' => 1413,
            'startColumn' => 33,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'length' => 
          array (
            'name' => 'length',
            'default' => 
            array (
              'code' => '26',
              'attributes' => 
              array (
                'startLine' => 1413,
                'endLine' => 1413,
                'startTokenPos' => 4918,
                'startFilePos' => 39200,
                'endTokenPos' => 4918,
                'endFilePos' => 39201,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1413,
            'endLine' => 1413,
            'startColumn' => 42,
            'endColumn' => 53,
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
 * Create a new ULID column on the table with a foreign key constraint.
 *
 * @param  string  $column
 * @param  int|null  $length
 * @return \\Illuminate\\Database\\Schema\\ForeignIdColumnDefinition
 */',
        'startLine' => 1413,
        'endLine' => 1420,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'ipAddress' => 
      array (
        'name' => 'ipAddress',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => 
            array (
              'code' => '\'ip_address\'',
              'attributes' => 
              array (
                'startLine' => 1428,
                'endLine' => 1428,
                'startTokenPos' => 4978,
                'startFilePos' => 39611,
                'endTokenPos' => 4978,
                'endFilePos' => 39622,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1428,
            'endLine' => 1428,
            'startColumn' => 31,
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
 * Create a new IP address column on the table.
 *
 * @param  string  $column
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
        'startLine' => 1428,
        'endLine' => 1431,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'macAddress' => 
      array (
        'name' => 'macAddress',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => 
            array (
              'code' => '\'mac_address\'',
              'attributes' => 
              array (
                'startLine' => 1439,
                'endLine' => 1439,
                'startTokenPos' => 5010,
                'startFilePos' => 39901,
                'endTokenPos' => 5010,
                'endFilePos' => 39913,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1439,
            'endLine' => 1439,
            'startColumn' => 32,
            'endColumn' => 54,
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
 * Create a new MAC address column on the table.
 *
 * @param  string  $column
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
        'startLine' => 1439,
        'endLine' => 1442,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'geometry' => 
      array (
        'name' => 'geometry',
        'parameters' => 
        array (
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
            'startLine' => 1452,
            'endLine' => 1452,
            'startColumn' => 30,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'subtype' => 
          array (
            'name' => 'subtype',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1452,
                'endLine' => 1452,
                'startTokenPos' => 5045,
                'startFilePos' => 40261,
                'endTokenPos' => 5045,
                'endFilePos' => 40264,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1452,
            'endLine' => 1452,
            'startColumn' => 39,
            'endColumn' => 53,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'srid' => 
          array (
            'name' => 'srid',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 1452,
                'endLine' => 1452,
                'startTokenPos' => 5052,
                'startFilePos' => 40275,
                'endTokenPos' => 5052,
                'endFilePos' => 40275,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1452,
            'endLine' => 1452,
            'startColumn' => 56,
            'endColumn' => 64,
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
 * Create a new geometry column on the table.
 *
 * @param  string  $column
 * @param  string|null  $subtype
 * @param  int  $srid
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
        'startLine' => 1452,
        'endLine' => 1455,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'geography' => 
      array (
        'name' => 'geography',
        'parameters' => 
        array (
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
            'startLine' => 1465,
            'endLine' => 1465,
            'startColumn' => 31,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'subtype' => 
          array (
            'name' => 'subtype',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1465,
                'endLine' => 1465,
                'startTokenPos' => 5096,
                'startFilePos' => 40651,
                'endTokenPos' => 5096,
                'endFilePos' => 40654,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1465,
            'endLine' => 1465,
            'startColumn' => 40,
            'endColumn' => 54,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'srid' => 
          array (
            'name' => 'srid',
            'default' => 
            array (
              'code' => '4326',
              'attributes' => 
              array (
                'startLine' => 1465,
                'endLine' => 1465,
                'startTokenPos' => 5103,
                'startFilePos' => 40665,
                'endTokenPos' => 5103,
                'endFilePos' => 40668,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1465,
            'endLine' => 1465,
            'startColumn' => 57,
            'endColumn' => 68,
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
 * Create a new geography column on the table.
 *
 * @param  string  $column
 * @param  string|null  $subtype
 * @param  int  $srid
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
        'startLine' => 1465,
        'endLine' => 1468,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'computed' => 
      array (
        'name' => 'computed',
        'parameters' => 
        array (
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
            'startLine' => 1477,
            'endLine' => 1477,
            'startColumn' => 30,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'expression' => 
          array (
            'name' => 'expression',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1477,
            'endLine' => 1477,
            'startColumn' => 39,
            'endColumn' => 49,
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
 * Create a new generated, computed column on the table.
 *
 * @param  string  $column
 * @param  string  $expression
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
        'startLine' => 1477,
        'endLine' => 1480,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'vector' => 
      array (
        'name' => 'vector',
        'parameters' => 
        array (
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
            'startLine' => 1489,
            'endLine' => 1489,
            'startColumn' => 28,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'dimensions' => 
          array (
            'name' => 'dimensions',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1489,
                'endLine' => 1489,
                'startTokenPos' => 5184,
                'startFilePos' => 41367,
                'endTokenPos' => 5184,
                'endFilePos' => 41370,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1489,
            'endLine' => 1489,
            'startColumn' => 37,
            'endColumn' => 54,
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
 * Create a new vector column on the table.
 *
 * @param  string  $column
 * @param  int|null  $dimensions
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
        'startLine' => 1489,
        'endLine' => 1494,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'morphs' => 
      array (
        'name' => 'morphs',
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
            'startLine' => 1504,
            'endLine' => 1504,
            'startColumn' => 28,
            'endColumn' => 32,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'indexName' => 
          array (
            'name' => 'indexName',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1504,
                'endLine' => 1504,
                'startTokenPos' => 5241,
                'startFilePos' => 41758,
                'endTokenPos' => 5241,
                'endFilePos' => 41761,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1504,
            'endLine' => 1504,
            'startColumn' => 35,
            'endColumn' => 51,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'after' => 
          array (
            'name' => 'after',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1504,
                'endLine' => 1504,
                'startTokenPos' => 5248,
                'startFilePos' => 41773,
                'endTokenPos' => 5248,
                'endFilePos' => 41776,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1504,
            'endLine' => 1504,
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
 * Add the proper columns for a polymorphic table.
 *
 * @param  string  $name
 * @param  string|null  $indexName
 * @param  string|null  $after
 * @return void
 */',
        'startLine' => 1504,
        'endLine' => 1513,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'nullableMorphs' => 
      array (
        'name' => 'nullableMorphs',
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
            'startLine' => 1523,
            'endLine' => 1523,
            'startColumn' => 36,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'indexName' => 
          array (
            'name' => 'indexName',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1523,
                'endLine' => 1523,
                'startTokenPos' => 5350,
                'startFilePos' => 42368,
                'endTokenPos' => 5350,
                'endFilePos' => 42371,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1523,
            'endLine' => 1523,
            'startColumn' => 43,
            'endColumn' => 59,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'after' => 
          array (
            'name' => 'after',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1523,
                'endLine' => 1523,
                'startTokenPos' => 5357,
                'startFilePos' => 42383,
                'endTokenPos' => 5357,
                'endFilePos' => 42386,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1523,
            'endLine' => 1523,
            'startColumn' => 62,
            'endColumn' => 74,
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
 * Add nullable columns for a polymorphic table.
 *
 * @param  string  $name
 * @param  string|null  $indexName
 * @param  string|null  $after
 * @return void
 */',
        'startLine' => 1523,
        'endLine' => 1532,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'numericMorphs' => 
      array (
        'name' => 'numericMorphs',
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
            'startLine' => 1542,
            'endLine' => 1542,
            'startColumn' => 35,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'indexName' => 
          array (
            'name' => 'indexName',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1542,
                'endLine' => 1542,
                'startTokenPos' => 5459,
                'startFilePos' => 43035,
                'endTokenPos' => 5459,
                'endFilePos' => 43038,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1542,
            'endLine' => 1542,
            'startColumn' => 42,
            'endColumn' => 58,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'after' => 
          array (
            'name' => 'after',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1542,
                'endLine' => 1542,
                'startTokenPos' => 5466,
                'startFilePos' => 43050,
                'endTokenPos' => 5466,
                'endFilePos' => 43053,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1542,
            'endLine' => 1542,
            'startColumn' => 61,
            'endColumn' => 73,
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
 * Add the proper columns for a polymorphic table using numeric IDs (incremental).
 *
 * @param  string  $name
 * @param  string|null  $indexName
 * @param  string|null  $after
 * @return void
 */',
        'startLine' => 1542,
        'endLine' => 1551,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'nullableNumericMorphs' => 
      array (
        'name' => 'nullableNumericMorphs',
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
            'startLine' => 1561,
            'endLine' => 1561,
            'startColumn' => 43,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'indexName' => 
          array (
            'name' => 'indexName',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1561,
                'endLine' => 1561,
                'startTokenPos' => 5570,
                'startFilePos' => 43609,
                'endTokenPos' => 5570,
                'endFilePos' => 43612,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1561,
            'endLine' => 1561,
            'startColumn' => 50,
            'endColumn' => 66,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'after' => 
          array (
            'name' => 'after',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1561,
                'endLine' => 1561,
                'startTokenPos' => 5577,
                'startFilePos' => 43624,
                'endTokenPos' => 5577,
                'endFilePos' => 43627,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1561,
            'endLine' => 1561,
            'startColumn' => 69,
            'endColumn' => 81,
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
 * Add nullable columns for a polymorphic table using numeric IDs (incremental).
 *
 * @param  string  $name
 * @param  string|null  $indexName
 * @param  string|null  $after
 * @return void
 */',
        'startLine' => 1561,
        'endLine' => 1572,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'uuidMorphs' => 
      array (
        'name' => 'uuidMorphs',
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
            'startLine' => 1582,
            'endLine' => 1582,
            'startColumn' => 32,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'indexName' => 
          array (
            'name' => 'indexName',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1582,
                'endLine' => 1582,
                'startTokenPos' => 5691,
                'startFilePos' => 44204,
                'endTokenPos' => 5691,
                'endFilePos' => 44207,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1582,
            'endLine' => 1582,
            'startColumn' => 39,
            'endColumn' => 55,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'after' => 
          array (
            'name' => 'after',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1582,
                'endLine' => 1582,
                'startTokenPos' => 5698,
                'startFilePos' => 44219,
                'endTokenPos' => 5698,
                'endFilePos' => 44222,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1582,
            'endLine' => 1582,
            'startColumn' => 58,
            'endColumn' => 70,
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
 * Add the proper columns for a polymorphic table using UUIDs.
 *
 * @param  string  $name
 * @param  string|null  $indexName
 * @param  string|null  $after
 * @return void
 */',
        'startLine' => 1582,
        'endLine' => 1591,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'nullableUuidMorphs' => 
      array (
        'name' => 'nullableUuidMorphs',
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
            'startLine' => 1601,
            'endLine' => 1601,
            'startColumn' => 40,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'indexName' => 
          array (
            'name' => 'indexName',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1601,
                'endLine' => 1601,
                'startTokenPos' => 5802,
                'startFilePos' => 44741,
                'endTokenPos' => 5802,
                'endFilePos' => 44744,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1601,
            'endLine' => 1601,
            'startColumn' => 47,
            'endColumn' => 63,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'after' => 
          array (
            'name' => 'after',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1601,
                'endLine' => 1601,
                'startTokenPos' => 5809,
                'startFilePos' => 44756,
                'endTokenPos' => 5809,
                'endFilePos' => 44759,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1601,
            'endLine' => 1601,
            'startColumn' => 66,
            'endColumn' => 78,
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
 * Add nullable columns for a polymorphic table using UUIDs.
 *
 * @param  string  $name
 * @param  string|null  $indexName
 * @param  string|null  $after
 * @return void
 */',
        'startLine' => 1601,
        'endLine' => 1612,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'ulidMorphs' => 
      array (
        'name' => 'ulidMorphs',
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
            'startLine' => 1622,
            'endLine' => 1622,
            'startColumn' => 32,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'indexName' => 
          array (
            'name' => 'indexName',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1622,
                'endLine' => 1622,
                'startTokenPos' => 5923,
                'startFilePos' => 45322,
                'endTokenPos' => 5923,
                'endFilePos' => 45325,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1622,
            'endLine' => 1622,
            'startColumn' => 39,
            'endColumn' => 55,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'after' => 
          array (
            'name' => 'after',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1622,
                'endLine' => 1622,
                'startTokenPos' => 5930,
                'startFilePos' => 45337,
                'endTokenPos' => 5930,
                'endFilePos' => 45340,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1622,
            'endLine' => 1622,
            'startColumn' => 58,
            'endColumn' => 70,
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
 * Add the proper columns for a polymorphic table using ULIDs.
 *
 * @param  string  $name
 * @param  string|null  $indexName
 * @param  string|null  $after
 * @return void
 */',
        'startLine' => 1622,
        'endLine' => 1631,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'nullableUlidMorphs' => 
      array (
        'name' => 'nullableUlidMorphs',
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
            'startLine' => 1641,
            'endLine' => 1641,
            'startColumn' => 40,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'indexName' => 
          array (
            'name' => 'indexName',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1641,
                'endLine' => 1641,
                'startTokenPos' => 6034,
                'startFilePos' => 45859,
                'endTokenPos' => 6034,
                'endFilePos' => 45862,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1641,
            'endLine' => 1641,
            'startColumn' => 47,
            'endColumn' => 63,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'after' => 
          array (
            'name' => 'after',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1641,
                'endLine' => 1641,
                'startTokenPos' => 6041,
                'startFilePos' => 45874,
                'endTokenPos' => 6041,
                'endFilePos' => 45877,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1641,
            'endLine' => 1641,
            'startColumn' => 66,
            'endColumn' => 78,
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
 * Add nullable columns for a polymorphic table using ULIDs.
 *
 * @param  string  $name
 * @param  string|null  $indexName
 * @param  string|null  $after
 * @return void
 */',
        'startLine' => 1641,
        'endLine' => 1652,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'rememberToken' => 
      array (
        'name' => 'rememberToken',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add the `remember_token` column to the table.
 *
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
        'startLine' => 1659,
        'endLine' => 1662,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'rawColumn' => 
      array (
        'name' => 'rawColumn',
        'parameters' => 
        array (
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
            'startLine' => 1671,
            'endLine' => 1671,
            'startColumn' => 31,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'definition' => 
          array (
            'name' => 'definition',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1671,
            'endLine' => 1671,
            'startColumn' => 40,
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
 * Create a new custom column on the table.
 *
 * @param  string  $column
 * @param  string  $definition
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
        'startLine' => 1671,
        'endLine' => 1674,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'comment' => 
      array (
        'name' => 'comment',
        'parameters' => 
        array (
          'comment' => 
          array (
            'name' => 'comment',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1682,
            'endLine' => 1682,
            'startColumn' => 29,
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
 * Add a comment to the table.
 *
 * @param  string  $comment
 * @return \\Illuminate\\Support\\Fluent
 */',
        'startLine' => 1682,
        'endLine' => 1685,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'indexCommand' => 
      array (
        'name' => 'indexCommand',
        'parameters' => 
        array (
          'type' => 
          array (
            'name' => 'type',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1697,
            'endLine' => 1697,
            'startColumn' => 37,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'columns' => 
          array (
            'name' => 'columns',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1697,
            'endLine' => 1697,
            'startColumn' => 44,
            'endColumn' => 51,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'index' => 
          array (
            'name' => 'index',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1697,
            'endLine' => 1697,
            'startColumn' => 54,
            'endColumn' => 59,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'algorithm' => 
          array (
            'name' => 'algorithm',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1697,
                'endLine' => 1697,
                'startTokenPos' => 6260,
                'startFilePos' => 47383,
                'endTokenPos' => 6260,
                'endFilePos' => 47386,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1697,
            'endLine' => 1697,
            'startColumn' => 62,
            'endColumn' => 78,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
          'operatorClass' => 
          array (
            'name' => 'operatorClass',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1697,
                'endLine' => 1697,
                'startTokenPos' => 6267,
                'startFilePos' => 47406,
                'endTokenPos' => 6267,
                'endFilePos' => 47409,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1697,
            'endLine' => 1697,
            'startColumn' => 81,
            'endColumn' => 101,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a new index command on the blueprint.
 *
 * @param  string  $type
 * @param  string|array  $columns
 * @param  string  $index
 * @param  string|null  $algorithm
 * @param  string|null  $operatorClass
 * @return \\Illuminate\\Support\\Fluent
 */',
        'startLine' => 1697,
        'endLine' => 1709,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'dropIndexCommand' => 
      array (
        'name' => 'dropIndexCommand',
        'parameters' => 
        array (
          'command' => 
          array (
            'name' => 'command',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1719,
            'endLine' => 1719,
            'startColumn' => 41,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'type' => 
          array (
            'name' => 'type',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1719,
            'endLine' => 1719,
            'startColumn' => 51,
            'endColumn' => 55,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'index' => 
          array (
            'name' => 'index',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1719,
            'endLine' => 1719,
            'startColumn' => 58,
            'endColumn' => 63,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a new drop index command on the blueprint.
 *
 * @param  string  $command
 * @param  string  $type
 * @param  string|array  $index
 * @return \\Illuminate\\Support\\Fluent
 */',
        'startLine' => 1719,
        'endLine' => 1731,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'createIndexName' => 
      array (
        'name' => 'createIndexName',
        'parameters' => 
        array (
          'type' => 
          array (
            'name' => 'type',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1740,
            'endLine' => 1740,
            'startColumn' => 40,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'columns' => 
          array (
            'name' => 'columns',
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
            'startLine' => 1740,
            'endLine' => 1740,
            'startColumn' => 47,
            'endColumn' => 60,
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
 * Create a default index name for the table.
 *
 * @param  string  $type
 * @param  array  $columns
 * @return string
 */',
        'startLine' => 1740,
        'endLine' => 1753,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'addColumn' => 
      array (
        'name' => 'addColumn',
        'parameters' => 
        array (
          'type' => 
          array (
            'name' => 'type',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1763,
            'endLine' => 1763,
            'startColumn' => 31,
            'endColumn' => 35,
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
            'startLine' => 1763,
            'endLine' => 1763,
            'startColumn' => 38,
            'endColumn' => 42,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'parameters' => 
          array (
            'name' => 'parameters',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 1763,
                'endLine' => 1763,
                'startTokenPos' => 6591,
                'startFilePos' => 49629,
                'endTokenPos' => 6592,
                'endFilePos' => 49630,
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
            'startLine' => 1763,
            'endLine' => 1763,
            'startColumn' => 45,
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
 * Add a new column to the blueprint.
 *
 * @param  string  $type
 * @param  string  $name
 * @param  array  $parameters
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
        'startLine' => 1763,
        'endLine' => 1768,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'addColumnDefinition' => 
      array (
        'name' => 'addColumnDefinition',
        'parameters' => 
        array (
          'definition' => 
          array (
            'name' => 'definition',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1776,
            'endLine' => 1776,
            'startColumn' => 44,
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
 * Add a new column definition to the blueprint.
 *
 * @param  \\Illuminate\\Database\\Schema\\ColumnDefinition  $definition
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
        'startLine' => 1776,
        'endLine' => 1791,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'after' => 
      array (
        'name' => 'after',
        'parameters' => 
        array (
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
            'startLine' => 1800,
            'endLine' => 1800,
            'startColumn' => 27,
            'endColumn' => 33,
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
            'startLine' => 1800,
            'endLine' => 1800,
            'startColumn' => 36,
            'endColumn' => 52,
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
 * Add the columns from the callback after the given column.
 *
 * @param  string  $column
 * @param  \\Closure  $callback
 * @return void
 */',
        'startLine' => 1800,
        'endLine' => 1807,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'removeColumn' => 
      array (
        'name' => 'removeColumn',
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
            'startLine' => 1815,
            'endLine' => 1815,
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
 * Remove a column from the schema blueprint.
 *
 * @param  string  $name
 * @return $this
 */',
        'startLine' => 1815,
        'endLine' => 1826,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'addCommand' => 
      array (
        'name' => 'addCommand',
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
            'startLine' => 1835,
            'endLine' => 1835,
            'startColumn' => 35,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'parameters' => 
          array (
            'name' => 'parameters',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 1835,
                'endLine' => 1835,
                'startTokenPos' => 6902,
                'startFilePos' => 51450,
                'endTokenPos' => 6903,
                'endFilePos' => 51451,
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
            'startLine' => 1835,
            'endLine' => 1835,
            'startColumn' => 42,
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
 * Add a new command to the blueprint.
 *
 * @param  string  $name
 * @param  array  $parameters
 * @return \\Illuminate\\Support\\Fluent
 */',
        'startLine' => 1835,
        'endLine' => 1840,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'createCommand' => 
      array (
        'name' => 'createCommand',
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
            'startLine' => 1849,
            'endLine' => 1849,
            'startColumn' => 38,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'parameters' => 
          array (
            'name' => 'parameters',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 1849,
                'endLine' => 1849,
                'startTokenPos' => 6955,
                'startFilePos' => 51802,
                'endTokenPos' => 6956,
                'endFilePos' => 51803,
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
            'startLine' => 1849,
            'endLine' => 1849,
            'startColumn' => 45,
            'endColumn' => 66,
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
 * Create a new Fluent command.
 *
 * @param  string  $name
 * @param  array  $parameters
 * @return \\Illuminate\\Support\\Fluent
 */',
        'startLine' => 1849,
        'endLine' => 1852,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'getTable' => 
      array (
        'name' => 'getTable',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the table the blueprint describes.
 *
 * @return string
 */',
        'startLine' => 1859,
        'endLine' => 1862,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'getPrefix' => 
      array (
        'name' => 'getPrefix',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the table prefix.
 *
 * @deprecated Use DB::getTablePrefix()
 *
 * @return string
 */',
        'startLine' => 1871,
        'endLine' => 1874,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'getColumns' => 
      array (
        'name' => 'getColumns',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the columns on the blueprint.
 *
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition[]
 */',
        'startLine' => 1881,
        'endLine' => 1884,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'getCommands' => 
      array (
        'name' => 'getCommands',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the commands on the blueprint.
 *
 * @return \\Illuminate\\Support\\Fluent[]
 */',
        'startLine' => 1891,
        'endLine' => 1894,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'hasState' => 
      array (
        'name' => 'hasState',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the blueprint has state.
 *
 * @return bool
 */',
        'startLine' => 1901,
        'endLine' => 1904,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'getState' => 
      array (
        'name' => 'getState',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the state of the blueprint.
 *
 * @return \\Illuminate\\Database\\Schema\\BlueprintState
 */',
        'startLine' => 1911,
        'endLine' => 1914,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'getAddedColumns' => 
      array (
        'name' => 'getAddedColumns',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the columns on the blueprint that should be added.
 *
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition[]
 */',
        'startLine' => 1921,
        'endLine' => 1926,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'getChangedColumns' => 
      array (
        'name' => 'getChangedColumns',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the columns on the blueprint that should be changed.
 *
 * @deprecated Will be removed in a future Laravel version.
 *
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition[]
 */',
        'startLine' => 1935,
        'endLine' => 1940,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'aliasName' => NULL,
      ),
      'defaultTimePrecision' => 
      array (
        'name' => 'defaultTimePrecision',
        'parameters' => 
        array (
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
                  'name' => 'int',
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
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the default time precision.
 */',
        'startLine' => 1945,
        'endLine' => 1948,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Schema',
        'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
        'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
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
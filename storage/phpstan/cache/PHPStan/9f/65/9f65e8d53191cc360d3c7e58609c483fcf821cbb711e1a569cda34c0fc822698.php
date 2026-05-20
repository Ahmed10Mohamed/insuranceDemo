<?php declare(strict_types = 1);

// osfsl-E:/mywork/laragon/www/MohammedSA/naqliyahtak/vendor/composer/../laravel/framework/src/Illuminate/Validation/Rule.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Validation\Rule
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-881789cc46ef128485fb4772b953b09ccd6ba48fe788da6369f7242301ba01e7-8.2.29-6.70.0.0',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Validation\\Rule',
        'filename' => 'E:/mywork/laragon/www/MohammedSA/naqliyahtak/vendor/composer/../laravel/framework/src/Illuminate/Validation/Rule.php',
      ),
    ),
    'namespace' => 'Illuminate\\Validation',
    'name' => 'Illuminate\\Validation\\Rule',
    'shortName' => 'Rule',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 26,
    'endLine' => 321,
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
    ),
    'immediateMethods' => 
    array (
      'can' => 
      array (
        'name' => 'can',
        'parameters' => 
        array (
          'ability' => 
          array (
            'name' => 'ability',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 37,
            'endLine' => 37,
            'startColumn' => 32,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'arguments' => 
          array (
            'name' => 'arguments',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 37,
            'endLine' => 37,
            'startColumn' => 42,
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
 * Get a can constraint builder instance.
 *
 * @param  string  $ability
 * @param  mixed  ...$arguments
 * @return \\Illuminate\\Validation\\Rules\\Can
 */',
        'startLine' => 37,
        'endLine' => 40,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Validation',
        'declaringClassName' => 'Illuminate\\Validation\\Rule',
        'implementingClassName' => 'Illuminate\\Validation\\Rule',
        'currentClassName' => 'Illuminate\\Validation\\Rule',
        'aliasName' => NULL,
      ),
      'when' => 
      array (
        'name' => 'when',
        'parameters' => 
        array (
          'condition' => 
          array (
            'name' => 'condition',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 50,
            'endLine' => 50,
            'startColumn' => 33,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'rules' => 
          array (
            'name' => 'rules',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 50,
            'endLine' => 50,
            'startColumn' => 45,
            'endColumn' => 50,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'defaultRules' => 
          array (
            'name' => 'defaultRules',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 50,
                'endLine' => 50,
                'startTokenPos' => 172,
                'startFilePos' => 1789,
                'endTokenPos' => 173,
                'endFilePos' => 1790,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 50,
            'endLine' => 50,
            'startColumn' => 53,
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
 * Apply the given rules if the given condition is truthy.
 *
 * @param  callable|bool  $condition
 * @param  \\Illuminate\\Contracts\\Validation\\ValidationRule|\\Illuminate\\Contracts\\Validation\\InvokableRule|\\Illuminate\\Contracts\\Validation\\Rule|\\Closure|array|string  $rules
 * @param  \\Illuminate\\Contracts\\Validation\\ValidationRule|\\Illuminate\\Contracts\\Validation\\InvokableRule|\\Illuminate\\Contracts\\Validation\\Rule|\\Closure|array|string  $defaultRules
 * @return \\Illuminate\\Validation\\ConditionalRules
 */',
        'startLine' => 50,
        'endLine' => 53,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Validation',
        'declaringClassName' => 'Illuminate\\Validation\\Rule',
        'implementingClassName' => 'Illuminate\\Validation\\Rule',
        'currentClassName' => 'Illuminate\\Validation\\Rule',
        'aliasName' => NULL,
      ),
      'unless' => 
      array (
        'name' => 'unless',
        'parameters' => 
        array (
          'condition' => 
          array (
            'name' => 'condition',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 63,
            'endLine' => 63,
            'startColumn' => 35,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'rules' => 
          array (
            'name' => 'rules',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 63,
            'endLine' => 63,
            'startColumn' => 47,
            'endColumn' => 52,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'defaultRules' => 
          array (
            'name' => 'defaultRules',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 63,
                'endLine' => 63,
                'startTokenPos' => 216,
                'startFilePos' => 2492,
                'endTokenPos' => 217,
                'endFilePos' => 2493,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 63,
            'endLine' => 63,
            'startColumn' => 55,
            'endColumn' => 72,
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
 * Apply the given rules if the given condition is falsy.
 *
 * @param  callable|bool  $condition
 * @param  \\Illuminate\\Contracts\\Validation\\ValidationRule|\\Illuminate\\Contracts\\Validation\\InvokableRule|\\Illuminate\\Contracts\\Validation\\Rule|\\Closure|array|string  $rules
 * @param  \\Illuminate\\Contracts\\Validation\\ValidationRule|\\Illuminate\\Contracts\\Validation\\InvokableRule|\\Illuminate\\Contracts\\Validation\\Rule|\\Closure|array|string  $defaultRules
 * @return \\Illuminate\\Validation\\ConditionalRules
 */',
        'startLine' => 63,
        'endLine' => 66,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Validation',
        'declaringClassName' => 'Illuminate\\Validation\\Rule',
        'implementingClassName' => 'Illuminate\\Validation\\Rule',
        'currentClassName' => 'Illuminate\\Validation\\Rule',
        'aliasName' => NULL,
      ),
      'array' => 
      array (
        'name' => 'array',
        'parameters' => 
        array (
          'keys' => 
          array (
            'name' => 'keys',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 74,
                'endLine' => 74,
                'startTokenPos' => 254,
                'startFilePos' => 2775,
                'endTokenPos' => 254,
                'endFilePos' => 2778,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 74,
            'endLine' => 74,
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
 * Get an array rule builder instance.
 *
 * @param  array|null  $keys
 * @return \\Illuminate\\Validation\\Rules\\ArrayRule
 */',
        'startLine' => 74,
        'endLine' => 77,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Validation',
        'declaringClassName' => 'Illuminate\\Validation\\Rule',
        'implementingClassName' => 'Illuminate\\Validation\\Rule',
        'currentClassName' => 'Illuminate\\Validation\\Rule',
        'aliasName' => NULL,
      ),
      'forEach' => 
      array (
        'name' => 'forEach',
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
            'startLine' => 85,
            'endLine' => 85,
            'startColumn' => 36,
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
 * Create a new nested rule set.
 *
 * @param  callable  $callback
 * @return \\Illuminate\\Validation\\NestedRules
 */',
        'startLine' => 85,
        'endLine' => 88,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Validation',
        'declaringClassName' => 'Illuminate\\Validation\\Rule',
        'implementingClassName' => 'Illuminate\\Validation\\Rule',
        'currentClassName' => 'Illuminate\\Validation\\Rule',
        'aliasName' => NULL,
      ),
      'unique' => 
      array (
        'name' => 'unique',
        'parameters' => 
        array (
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
            'startLine' => 97,
            'endLine' => 97,
            'startColumn' => 35,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'column' => 
          array (
            'name' => 'column',
            'default' => 
            array (
              'code' => '\'NULL\'',
              'attributes' => 
              array (
                'startLine' => 97,
                'endLine' => 97,
                'startTokenPos' => 318,
                'startFilePos' => 3327,
                'endTokenPos' => 318,
                'endFilePos' => 3332,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 97,
            'endLine' => 97,
            'startColumn' => 43,
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
 * Get a unique constraint builder instance.
 *
 * @param  string  $table
 * @param  string  $column
 * @return \\Illuminate\\Validation\\Rules\\Unique
 */',
        'startLine' => 97,
        'endLine' => 100,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Validation',
        'declaringClassName' => 'Illuminate\\Validation\\Rule',
        'implementingClassName' => 'Illuminate\\Validation\\Rule',
        'currentClassName' => 'Illuminate\\Validation\\Rule',
        'aliasName' => NULL,
      ),
      'exists' => 
      array (
        'name' => 'exists',
        'parameters' => 
        array (
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
            'startLine' => 109,
            'endLine' => 109,
            'startColumn' => 35,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'column' => 
          array (
            'name' => 'column',
            'default' => 
            array (
              'code' => '\'NULL\'',
              'attributes' => 
              array (
                'startLine' => 109,
                'endLine' => 109,
                'startTokenPos' => 355,
                'startFilePos' => 3629,
                'endTokenPos' => 355,
                'endFilePos' => 3634,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 109,
            'endLine' => 109,
            'startColumn' => 43,
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
 * Get an exists constraint builder instance.
 *
 * @param  string  $table
 * @param  string  $column
 * @return \\Illuminate\\Validation\\Rules\\Exists
 */',
        'startLine' => 109,
        'endLine' => 112,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Validation',
        'declaringClassName' => 'Illuminate\\Validation\\Rule',
        'implementingClassName' => 'Illuminate\\Validation\\Rule',
        'currentClassName' => 'Illuminate\\Validation\\Rule',
        'aliasName' => NULL,
      ),
      'in' => 
      array (
        'name' => 'in',
        'parameters' => 
        array (
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 120,
            'endLine' => 120,
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
 * Get an in rule builder instance.
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable|\\BackedEnum|\\UnitEnum|array|string  $values
 * @return \\Illuminate\\Validation\\Rules\\In
 */',
        'startLine' => 120,
        'endLine' => 127,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Validation',
        'declaringClassName' => 'Illuminate\\Validation\\Rule',
        'implementingClassName' => 'Illuminate\\Validation\\Rule',
        'currentClassName' => 'Illuminate\\Validation\\Rule',
        'aliasName' => NULL,
      ),
      'notIn' => 
      array (
        'name' => 'notIn',
        'parameters' => 
        array (
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 135,
            'endLine' => 135,
            'startColumn' => 34,
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
 * Get a not_in rule builder instance.
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable|\\BackedEnum|\\UnitEnum|array|string  $values
 * @return \\Illuminate\\Validation\\Rules\\NotIn
 */',
        'startLine' => 135,
        'endLine' => 142,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Validation',
        'declaringClassName' => 'Illuminate\\Validation\\Rule',
        'implementingClassName' => 'Illuminate\\Validation\\Rule',
        'currentClassName' => 'Illuminate\\Validation\\Rule',
        'aliasName' => NULL,
      ),
      'requiredIf' => 
      array (
        'name' => 'requiredIf',
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
            'startLine' => 150,
            'endLine' => 150,
            'startColumn' => 39,
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
 * Get a required_if rule builder instance.
 *
 * @param  (\\Closure(): bool)|bool  $callback
 * @return \\Illuminate\\Validation\\Rules\\RequiredIf
 */',
        'startLine' => 150,
        'endLine' => 153,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Validation',
        'declaringClassName' => 'Illuminate\\Validation\\Rule',
        'implementingClassName' => 'Illuminate\\Validation\\Rule',
        'currentClassName' => 'Illuminate\\Validation\\Rule',
        'aliasName' => NULL,
      ),
      'excludeIf' => 
      array (
        'name' => 'excludeIf',
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
            'startLine' => 161,
            'endLine' => 161,
            'startColumn' => 38,
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
 * Get a exclude_if rule builder instance.
 *
 * @param  (\\Closure(): bool)|bool  $callback
 * @return \\Illuminate\\Validation\\Rules\\ExcludeIf
 */',
        'startLine' => 161,
        'endLine' => 164,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Validation',
        'declaringClassName' => 'Illuminate\\Validation\\Rule',
        'implementingClassName' => 'Illuminate\\Validation\\Rule',
        'currentClassName' => 'Illuminate\\Validation\\Rule',
        'aliasName' => NULL,
      ),
      'prohibitedIf' => 
      array (
        'name' => 'prohibitedIf',
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
            'startLine' => 172,
            'endLine' => 172,
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
 * Get a prohibited_if rule builder instance.
 *
 * @param  (\\Closure(): bool)|bool  $callback
 * @return \\Illuminate\\Validation\\Rules\\ProhibitedIf
 */',
        'startLine' => 172,
        'endLine' => 175,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Validation',
        'declaringClassName' => 'Illuminate\\Validation\\Rule',
        'implementingClassName' => 'Illuminate\\Validation\\Rule',
        'currentClassName' => 'Illuminate\\Validation\\Rule',
        'aliasName' => NULL,
      ),
      'date' => 
      array (
        'name' => 'date',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get a date rule builder instance.
 *
 * @return \\Illuminate\\Validation\\Rules\\Date
 */',
        'startLine' => 182,
        'endLine' => 185,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Validation',
        'declaringClassName' => 'Illuminate\\Validation\\Rule',
        'implementingClassName' => 'Illuminate\\Validation\\Rule',
        'currentClassName' => 'Illuminate\\Validation\\Rule',
        'aliasName' => NULL,
      ),
      'email' => 
      array (
        'name' => 'email',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get an email rule builder instance.
 *
 * @return \\Illuminate\\Validation\\Rules\\Email
 */',
        'startLine' => 192,
        'endLine' => 195,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Validation',
        'declaringClassName' => 'Illuminate\\Validation\\Rule',
        'implementingClassName' => 'Illuminate\\Validation\\Rule',
        'currentClassName' => 'Illuminate\\Validation\\Rule',
        'aliasName' => NULL,
      ),
      'enum' => 
      array (
        'name' => 'enum',
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
            'startLine' => 203,
            'endLine' => 203,
            'startColumn' => 33,
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
 * Get an enum rule builder instance.
 *
 * @param  class-string  $type
 * @return \\Illuminate\\Validation\\Rules\\Enum
 */',
        'startLine' => 203,
        'endLine' => 206,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Validation',
        'declaringClassName' => 'Illuminate\\Validation\\Rule',
        'implementingClassName' => 'Illuminate\\Validation\\Rule',
        'currentClassName' => 'Illuminate\\Validation\\Rule',
        'aliasName' => NULL,
      ),
      'file' => 
      array (
        'name' => 'file',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get a file rule builder instance.
 *
 * @return \\Illuminate\\Validation\\Rules\\File
 */',
        'startLine' => 213,
        'endLine' => 216,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Validation',
        'declaringClassName' => 'Illuminate\\Validation\\Rule',
        'implementingClassName' => 'Illuminate\\Validation\\Rule',
        'currentClassName' => 'Illuminate\\Validation\\Rule',
        'aliasName' => NULL,
      ),
      'imageFile' => 
      array (
        'name' => 'imageFile',
        'parameters' => 
        array (
          'allowSvg' => 
          array (
            'name' => 'allowSvg',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 224,
                'endLine' => 224,
                'startTokenPos' => 696,
                'startFilePos' => 6404,
                'endTokenPos' => 696,
                'endFilePos' => 6408,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 224,
            'endLine' => 224,
            'startColumn' => 38,
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
 * Get an image file rule builder instance.
 *
 * @param  bool  $allowSvg
 * @return \\Illuminate\\Validation\\Rules\\ImageFile
 */',
        'startLine' => 224,
        'endLine' => 227,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Validation',
        'declaringClassName' => 'Illuminate\\Validation\\Rule',
        'implementingClassName' => 'Illuminate\\Validation\\Rule',
        'currentClassName' => 'Illuminate\\Validation\\Rule',
        'aliasName' => NULL,
      ),
      'dimensions' => 
      array (
        'name' => 'dimensions',
        'parameters' => 
        array (
          'constraints' => 
          array (
            'name' => 'constraints',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 235,
                'endLine' => 235,
                'startTokenPos' => 729,
                'startFilePos' => 6684,
                'endTokenPos' => 730,
                'endFilePos' => 6685,
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
            'startLine' => 235,
            'endLine' => 235,
            'startColumn' => 39,
            'endColumn' => 61,
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
 * Get a dimensions rule builder instance.
 *
 * @param  array  $constraints
 * @return \\Illuminate\\Validation\\Rules\\Dimensions
 */',
        'startLine' => 235,
        'endLine' => 238,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Validation',
        'declaringClassName' => 'Illuminate\\Validation\\Rule',
        'implementingClassName' => 'Illuminate\\Validation\\Rule',
        'currentClassName' => 'Illuminate\\Validation\\Rule',
        'aliasName' => NULL,
      ),
      'numeric' => 
      array (
        'name' => 'numeric',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get a numeric rule builder instance.
 *
 * @return \\Illuminate\\Validation\\Rules\\Numeric
 */',
        'startLine' => 245,
        'endLine' => 248,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Validation',
        'declaringClassName' => 'Illuminate\\Validation\\Rule',
        'implementingClassName' => 'Illuminate\\Validation\\Rule',
        'currentClassName' => 'Illuminate\\Validation\\Rule',
        'aliasName' => NULL,
      ),
      'anyOf' => 
      array (
        'name' => 'anyOf',
        'parameters' => 
        array (
          'rules' => 
          array (
            'name' => 'rules',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 258,
            'endLine' => 258,
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
 * Get an "any of" rule builder instance.
 *
 * @param  array  $rules
 * @return \\Illuminate\\Validation\\Rules\\AnyOf
 *
 * @throws \\InvalidArgumentException
 */',
        'startLine' => 258,
        'endLine' => 261,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Validation',
        'declaringClassName' => 'Illuminate\\Validation\\Rule',
        'implementingClassName' => 'Illuminate\\Validation\\Rule',
        'currentClassName' => 'Illuminate\\Validation\\Rule',
        'aliasName' => NULL,
      ),
      'contains' => 
      array (
        'name' => 'contains',
        'parameters' => 
        array (
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 269,
            'endLine' => 269,
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
 * Get a contains rule builder instance.
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable|\\BackedEnum|\\UnitEnum|array|string  $values
 * @return \\Illuminate\\Validation\\Rules\\Contains
 */',
        'startLine' => 269,
        'endLine' => 276,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Validation',
        'declaringClassName' => 'Illuminate\\Validation\\Rule',
        'implementingClassName' => 'Illuminate\\Validation\\Rule',
        'currentClassName' => 'Illuminate\\Validation\\Rule',
        'aliasName' => NULL,
      ),
      'doesntContain' => 
      array (
        'name' => 'doesntContain',
        'parameters' => 
        array (
          'values' => 
          array (
            'name' => 'values',
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
            'startColumn' => 42,
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
 * Get a "does not contain" rule builder instance.
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable|\\BackedEnum|\\UnitEnum|array|string  $values
 * @return \\Illuminate\\Validation\\Rules\\DoesntContain
 */',
        'startLine' => 284,
        'endLine' => 291,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Validation',
        'declaringClassName' => 'Illuminate\\Validation\\Rule',
        'implementingClassName' => 'Illuminate\\Validation\\Rule',
        'currentClassName' => 'Illuminate\\Validation\\Rule',
        'aliasName' => NULL,
      ),
      'compile' => 
      array (
        'name' => 'compile',
        'parameters' => 
        array (
          'attribute' => 
          array (
            'name' => 'attribute',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 301,
            'endLine' => 301,
            'startColumn' => 36,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'rules' => 
          array (
            'name' => 'rules',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 301,
            'endLine' => 301,
            'startColumn' => 48,
            'endColumn' => 53,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'data' => 
          array (
            'name' => 'data',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 301,
                'endLine' => 301,
                'startTokenPos' => 947,
                'startFilePos' => 8428,
                'endTokenPos' => 947,
                'endFilePos' => 8431,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 301,
            'endLine' => 301,
            'startColumn' => 56,
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
 * Compile a set of rules for an attribute.
 *
 * @param  string  $attribute
 * @param  array  $rules
 * @param  array|null  $data
 * @return object|\\stdClass
 */',
        'startLine' => 301,
        'endLine' => 320,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Validation',
        'declaringClassName' => 'Illuminate\\Validation\\Rule',
        'implementingClassName' => 'Illuminate\\Validation\\Rule',
        'currentClassName' => 'Illuminate\\Validation\\Rule',
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
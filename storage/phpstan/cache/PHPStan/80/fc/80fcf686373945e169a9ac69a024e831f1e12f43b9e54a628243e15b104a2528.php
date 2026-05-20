<?php declare(strict_types = 1);

// osfsl-E:/mywork/laragon/www/MohammedSA/naqliyahtak/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/Concerns/TransformsToResource.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Database\Eloquent\Concerns\TransformsToResource
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-792e7520c75575e491db8e1be90344788cfd73d373340782511165112ed91ed5-8.2.29-6.70.0.0',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Database\\Eloquent\\Concerns\\TransformsToResource',
        'filename' => 'E:/mywork/laragon/www/MohammedSA/naqliyahtak/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/Concerns/TransformsToResource.php',
      ),
    ),
    'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
    'name' => 'Illuminate\\Database\\Eloquent\\Concerns\\TransformsToResource',
    'shortName' => 'TransformsToResource',
    'isInterface' => false,
    'isTrait' => true,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 9,
    'endLine' => 70,
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
      'toResource' => 
      array (
        'name' => 'toResource',
        'parameters' => 
        array (
          'resourceClass' => 
          array (
            'name' => 'resourceClass',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 17,
                'endLine' => 17,
                'startTokenPos' => 43,
                'startFilePos' => 478,
                'endTokenPos' => 43,
                'endFilePos' => 481,
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
                      'name' => 'string',
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
            'startLine' => 17,
            'endLine' => 17,
            'startColumn' => 32,
            'endColumn' => 60,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a new resource object for the given resource.
 *
 * @param  class-string<\\Illuminate\\Http\\Resources\\Json\\JsonResource>|null  $resourceClass
 * @return \\Illuminate\\Http\\Resources\\Json\\JsonResource
 */',
        'startLine' => 17,
        'endLine' => 24,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\TransformsToResource',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\TransformsToResource',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\TransformsToResource',
        'aliasName' => NULL,
      ),
      'guessResource' => 
      array (
        'name' => 'guessResource',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Guess the resource class for the model.
 *
 * @return \\Illuminate\\Http\\Resources\\Json\\JsonResource
 */',
        'startLine' => 31,
        'endLine' => 40,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\TransformsToResource',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\TransformsToResource',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\TransformsToResource',
        'aliasName' => NULL,
      ),
      'guessResourceName' => 
      array (
        'name' => 'guessResourceName',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Guess the resource class name for the model.
 *
 * @return array<class-string<\\Illuminate\\Http\\Resources\\Json\\JsonResource>>
 */',
        'startLine' => 47,
        'endLine' => 69,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
        'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\TransformsToResource',
        'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\TransformsToResource',
        'currentClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\TransformsToResource',
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
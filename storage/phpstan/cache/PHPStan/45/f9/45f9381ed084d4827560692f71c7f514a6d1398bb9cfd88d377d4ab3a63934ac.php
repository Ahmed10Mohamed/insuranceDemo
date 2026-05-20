<?php declare(strict_types = 1);

// odsl-E:\mywork\laragon\www\MohammedSA\naqliyahtak\app\Models\Order.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Models\Order
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.0-8.2.29-f7cd8b02578463d07ca615457614c0f10c64f3705b0481a2ff715497c215b1e3',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'App\\Models\\Order',
        'filename' => 'E:/mywork/laragon/www/MohammedSA/naqliyahtak/app/Models/Order.php',
      ),
    ),
    'namespace' => 'App\\Models',
    'name' => 'App\\Models\\Order',
    'shortName' => 'Order',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * @property-read Company $company
 * @property-read Company $companyDataTo
 * @property-read Driver $driver
 * @property-read User $client
 * @property-read orderStatus $orderStatus
 * @property-read TruckType $truckType
 * @property-read TruckSize $truckSize
 * @property-read \\Illuminate\\Database\\Eloquent\\Collection|TrackOrder[] $orderTrack
 * @property-read \\Illuminate\\Database\\Eloquent\\Collection|orderSpecial[] $specialOrder
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 23,
    'endLine' => 131,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
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
      'fillable' => 
      array (
        'declaringClassName' => 'App\\Models\\Order',
        'implementingClassName' => 'App\\Models\\Order',
        'name' => 'fillable',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'company_id\', \'driver_id\', \'client_id\', \'start_latitude\', \'start_longitude\', \'start_address\', \'end_latitude\', \'end_longitude\', \'end_address\', \'track_latitude\', \'track_longitude\', \'track_address\', \'calculateProgress\', \'startOrder\', \'endOrder\', \'desc\', \'weight\', \'notes\', \'truck_type_id\', \'truck_size_id\', \'order_statuses_id\', \'price\', \'companyTo\', \'orderNum\', \'cancelOrderDate\', \'sendMail\', \'isSpecial\', \'lastLocation\', \'isSendNotification\', \'speed\', \'nextNotification\', \'isOrderCompany\', \'country_id\']',
          'attributes' => 
          array (
            'startLine' => 27,
            'endLine' => 61,
            'startTokenPos' => 57,
            'startFilePos' => 834,
            'endTokenPos' => 158,
            'endFilePos' => 1640,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 27,
        'endLine' => 61,
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
      'country' => 
      array (
        'name' => 'country',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 62,
        'endLine' => 65,
        'startColumn' => 6,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models',
        'declaringClassName' => 'App\\Models\\Order',
        'implementingClassName' => 'App\\Models\\Order',
        'currentClassName' => 'App\\Models\\Order',
        'aliasName' => NULL,
      ),
      'getIsTruckableAttribute' => 
      array (
        'name' => 'getIsTruckableAttribute',
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
        'docComment' => NULL,
        'startLine' => 66,
        'endLine' => 76,
        'startColumn' => 5,
        'endColumn' => 9,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models',
        'declaringClassName' => 'App\\Models\\Order',
        'implementingClassName' => 'App\\Models\\Order',
        'currentClassName' => 'App\\Models\\Order',
        'aliasName' => NULL,
      ),
      'getCanChangeStatusAttribute' => 
      array (
        'name' => 'getCanChangeStatusAttribute',
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
        'docComment' => NULL,
        'startLine' => 78,
        'endLine' => 81,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models',
        'declaringClassName' => 'App\\Models\\Order',
        'implementingClassName' => 'App\\Models\\Order',
        'currentClassName' => 'App\\Models\\Order',
        'aliasName' => NULL,
      ),
      'casts' => 
      array (
        'name' => 'casts',
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
        'docComment' => NULL,
        'startLine' => 82,
        'endLine' => 87,
        'startColumn' => 6,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'App\\Models',
        'declaringClassName' => 'App\\Models\\Order',
        'implementingClassName' => 'App\\Models\\Order',
        'currentClassName' => 'App\\Models\\Order',
        'aliasName' => NULL,
      ),
      'scopeIsOrderCompany' => 
      array (
        'name' => 'scopeIsOrderCompany',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\Eloquent\\Builder',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 89,
            'endLine' => 89,
            'startColumn' => 43,
            'endColumn' => 56,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Database\\Eloquent\\Builder',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 89,
        'endLine' => 92,
        'startColumn' => 7,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models',
        'declaringClassName' => 'App\\Models\\Order',
        'implementingClassName' => 'App\\Models\\Order',
        'currentClassName' => 'App\\Models\\Order',
        'aliasName' => NULL,
      ),
      'company' => 
      array (
        'name' => 'company',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 94,
        'endLine' => 97,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models',
        'declaringClassName' => 'App\\Models\\Order',
        'implementingClassName' => 'App\\Models\\Order',
        'currentClassName' => 'App\\Models\\Order',
        'aliasName' => NULL,
      ),
      'companyDataTo' => 
      array (
        'name' => 'companyDataTo',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 98,
        'endLine' => 101,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models',
        'declaringClassName' => 'App\\Models\\Order',
        'implementingClassName' => 'App\\Models\\Order',
        'currentClassName' => 'App\\Models\\Order',
        'aliasName' => NULL,
      ),
      'driver' => 
      array (
        'name' => 'driver',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 102,
        'endLine' => 105,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models',
        'declaringClassName' => 'App\\Models\\Order',
        'implementingClassName' => 'App\\Models\\Order',
        'currentClassName' => 'App\\Models\\Order',
        'aliasName' => NULL,
      ),
      'client' => 
      array (
        'name' => 'client',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 106,
        'endLine' => 109,
        'startColumn' => 7,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models',
        'declaringClassName' => 'App\\Models\\Order',
        'implementingClassName' => 'App\\Models\\Order',
        'currentClassName' => 'App\\Models\\Order',
        'aliasName' => NULL,
      ),
      'orderStatus' => 
      array (
        'name' => 'orderStatus',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 110,
        'endLine' => 113,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models',
        'declaringClassName' => 'App\\Models\\Order',
        'implementingClassName' => 'App\\Models\\Order',
        'currentClassName' => 'App\\Models\\Order',
        'aliasName' => NULL,
      ),
      'truckType' => 
      array (
        'name' => 'truckType',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 114,
        'endLine' => 117,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models',
        'declaringClassName' => 'App\\Models\\Order',
        'implementingClassName' => 'App\\Models\\Order',
        'currentClassName' => 'App\\Models\\Order',
        'aliasName' => NULL,
      ),
      'truckSize' => 
      array (
        'name' => 'truckSize',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 118,
        'endLine' => 121,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models',
        'declaringClassName' => 'App\\Models\\Order',
        'implementingClassName' => 'App\\Models\\Order',
        'currentClassName' => 'App\\Models\\Order',
        'aliasName' => NULL,
      ),
      'orderTrack' => 
      array (
        'name' => 'orderTrack',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 122,
        'endLine' => 125,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models',
        'declaringClassName' => 'App\\Models\\Order',
        'implementingClassName' => 'App\\Models\\Order',
        'currentClassName' => 'App\\Models\\Order',
        'aliasName' => NULL,
      ),
      'specialOrder' => 
      array (
        'name' => 'specialOrder',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 126,
        'endLine' => 129,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models',
        'declaringClassName' => 'App\\Models\\Order',
        'implementingClassName' => 'App\\Models\\Order',
        'currentClassName' => 'App\\Models\\Order',
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
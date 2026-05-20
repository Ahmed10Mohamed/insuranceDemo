<?php declare(strict_types = 1);

// odsl-E:\mywork\laragon\www\MohammedSA\naqliyahtak\app\Models\Company.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Models\Company
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.0-8.2.29-9b7f7406bfbb038fc9c384ab89f19c10949647554c3f7d8bf2242fcc3f56e0b6',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'App\\Models\\Company',
        'filename' => 'E:/mywork/laragon/www/MohammedSA/naqliyahtak/app/Models/Company.php',
      ),
    ),
    'namespace' => 'App\\Models',
    'name' => 'App\\Models\\Company',
    'shortName' => 'Company',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * @property-read User $user
 * @property-read TruckType $truckType
 * @property-read companySpecialization $companySpecialization
 * @property-read TruckSize $truckSize
 * @property-read \\Illuminate\\Database\\Eloquent\\Collection|Order[] $orders
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 18,
    'endLine' => 67,
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
        'declaringClassName' => 'App\\Models\\Company',
        'implementingClassName' => 'App\\Models\\Company',
        'name' => 'fillable',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'user_id\', \'companyName\', \'companyType\', \'commercialNumber\', \'contactPerson\', \'phonePerson\', \'emailPerson\', \'truck_type_id\', \'truck_size_id\', \'webSite\', \'generateNum\', \'company_specialization_id\', \'sendMail\']',
          'attributes' => 
          array (
            'startLine' => 22,
            'endLine' => 36,
            'startTokenPos' => 52,
            'startFilePos' => 609,
            'endTokenPos' => 93,
            'endFilePos' => 942,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 22,
        'endLine' => 36,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'casts' => 
      array (
        'declaringClassName' => 'App\\Models\\Company',
        'implementingClassName' => 'App\\Models\\Company',
        'name' => 'casts',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'companyType\' => \\App\\Enums\\companyType::class, \'sendMail\' => \'boolean\']',
          'attributes' => 
          array (
            'startLine' => 37,
            'endLine' => 40,
            'startTokenPos' => 102,
            'startFilePos' => 969,
            'endTokenPos' => 121,
            'endFilePos' => 1059,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 37,
        'endLine' => 40,
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
        'docComment' => NULL,
        'startLine' => 42,
        'endLine' => 45,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models',
        'declaringClassName' => 'App\\Models\\Company',
        'implementingClassName' => 'App\\Models\\Company',
        'currentClassName' => 'App\\Models\\Company',
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
        'startLine' => 46,
        'endLine' => 49,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models',
        'declaringClassName' => 'App\\Models\\Company',
        'implementingClassName' => 'App\\Models\\Company',
        'currentClassName' => 'App\\Models\\Company',
        'aliasName' => NULL,
      ),
      'companySpecialization' => 
      array (
        'name' => 'companySpecialization',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 50,
        'endLine' => 53,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models',
        'declaringClassName' => 'App\\Models\\Company',
        'implementingClassName' => 'App\\Models\\Company',
        'currentClassName' => 'App\\Models\\Company',
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
        'startLine' => 54,
        'endLine' => 57,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models',
        'declaringClassName' => 'App\\Models\\Company',
        'implementingClassName' => 'App\\Models\\Company',
        'currentClassName' => 'App\\Models\\Company',
        'aliasName' => NULL,
      ),
      'getcompanyTypeLabelAttribute' => 
      array (
        'name' => 'getcompanyTypeLabelAttribute',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 58,
        'endLine' => 61,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models',
        'declaringClassName' => 'App\\Models\\Company',
        'implementingClassName' => 'App\\Models\\Company',
        'currentClassName' => 'App\\Models\\Company',
        'aliasName' => NULL,
      ),
      'lastOrder' => 
      array (
        'name' => 'lastOrder',
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
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models',
        'declaringClassName' => 'App\\Models\\Company',
        'implementingClassName' => 'App\\Models\\Company',
        'currentClassName' => 'App\\Models\\Company',
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
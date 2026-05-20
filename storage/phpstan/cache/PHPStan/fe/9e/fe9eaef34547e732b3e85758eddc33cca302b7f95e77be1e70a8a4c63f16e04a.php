<?php declare(strict_types = 1);

// osfsl-E:/mywork/laragon/www/MohammedSA/naqliyahtak/vendor/composer/../twilio/sdk/src/Twilio/Rest/Notify.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Twilio\Rest\Notify
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-72940b1a8b4fb21134f1cde97b5b75f86e03ac5634e186ef242755c2ea735a5b-8.2.29-6.70.0.0',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Twilio\\Rest\\Notify',
        'filename' => 'E:/mywork/laragon/www/MohammedSA/naqliyahtak/vendor/composer/../twilio/sdk/src/Twilio/Rest/Notify.php',
      ),
    ),
    'namespace' => 'Twilio\\Rest',
    'name' => 'Twilio\\Rest\\Notify',
    'shortName' => 'Notify',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 7,
    'endLine' => 41,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Twilio\\Rest\\NotifyBase',
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
      'getCredentials' => 
      array (
        'name' => 'getCredentials',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Notify\\V1\\CredentialList',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated Use v1->credentials instead.
 */',
        'startLine' => 11,
        'endLine' => 14,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Notify',
        'implementingClassName' => 'Twilio\\Rest\\Notify',
        'currentClassName' => 'Twilio\\Rest\\Notify',
        'aliasName' => NULL,
      ),
      'contextCredentials' => 
      array (
        'name' => 'contextCredentials',
        'parameters' => 
        array (
          'sid' => 
          array (
            'name' => 'sid',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 20,
            'endLine' => 20,
            'startColumn' => 43,
            'endColumn' => 53,
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
            'name' => 'Twilio\\Rest\\Notify\\V1\\CredentialContext',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated Use v1->credentials(\\$sid) instead.
 * @param string $sid The unique string that identifies the resource
 */',
        'startLine' => 20,
        'endLine' => 23,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Notify',
        'implementingClassName' => 'Twilio\\Rest\\Notify',
        'currentClassName' => 'Twilio\\Rest\\Notify',
        'aliasName' => NULL,
      ),
      'getServices' => 
      array (
        'name' => 'getServices',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Notify\\V1\\ServiceList',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated Use v1->services instead.
 */',
        'startLine' => 28,
        'endLine' => 31,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Notify',
        'implementingClassName' => 'Twilio\\Rest\\Notify',
        'currentClassName' => 'Twilio\\Rest\\Notify',
        'aliasName' => NULL,
      ),
      'contextServices' => 
      array (
        'name' => 'contextServices',
        'parameters' => 
        array (
          'sid' => 
          array (
            'name' => 'sid',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 37,
            'endLine' => 37,
            'startColumn' => 40,
            'endColumn' => 50,
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
            'name' => 'Twilio\\Rest\\Notify\\V1\\ServiceContext',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated Use v1->services(\\$sid) instead.
 * @param string $sid The unique string that identifies the resource
 */',
        'startLine' => 37,
        'endLine' => 40,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Notify',
        'implementingClassName' => 'Twilio\\Rest\\Notify',
        'currentClassName' => 'Twilio\\Rest\\Notify',
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
<?php declare(strict_types = 1);

// osfsl-E:/mywork/laragon/www/MohammedSA/naqliyahtak/vendor/composer/../twilio/sdk/src/Twilio/Rest/Monitor.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Twilio\Rest\Monitor
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-c4d943721464bc9aecace69423d4abead44a30b2495c49055808236bde9733e3-8.2.29-6.70.0.0',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Twilio\\Rest\\Monitor',
        'filename' => 'E:/mywork/laragon/www/MohammedSA/naqliyahtak/vendor/composer/../twilio/sdk/src/Twilio/Rest/Monitor.php',
      ),
    ),
    'namespace' => 'Twilio\\Rest',
    'name' => 'Twilio\\Rest\\Monitor',
    'shortName' => 'Monitor',
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
    'parentClassName' => 'Twilio\\Rest\\MonitorBase',
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
      'getAlerts' => 
      array (
        'name' => 'getAlerts',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Monitor\\V1\\AlertList',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated Use v1->alerts instead.
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
        'declaringClassName' => 'Twilio\\Rest\\Monitor',
        'implementingClassName' => 'Twilio\\Rest\\Monitor',
        'currentClassName' => 'Twilio\\Rest\\Monitor',
        'aliasName' => NULL,
      ),
      'contextAlerts' => 
      array (
        'name' => 'contextAlerts',
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
            'startColumn' => 38,
            'endColumn' => 48,
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
            'name' => 'Twilio\\Rest\\Monitor\\V1\\AlertContext',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated Use v1->alerts(\\$sid) instead.
 * @param string $sid The SID that identifies the resource to fetch
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
        'declaringClassName' => 'Twilio\\Rest\\Monitor',
        'implementingClassName' => 'Twilio\\Rest\\Monitor',
        'currentClassName' => 'Twilio\\Rest\\Monitor',
        'aliasName' => NULL,
      ),
      'getEvents' => 
      array (
        'name' => 'getEvents',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Monitor\\V1\\EventList',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated Use v1->events instead.
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
        'declaringClassName' => 'Twilio\\Rest\\Monitor',
        'implementingClassName' => 'Twilio\\Rest\\Monitor',
        'currentClassName' => 'Twilio\\Rest\\Monitor',
        'aliasName' => NULL,
      ),
      'contextEvents' => 
      array (
        'name' => 'contextEvents',
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
            'startColumn' => 38,
            'endColumn' => 48,
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
            'name' => 'Twilio\\Rest\\Monitor\\V1\\EventContext',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated Use v1->events(\\$sid) instead.
 * @param string $sid The SID that identifies the resource to fetch
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
        'declaringClassName' => 'Twilio\\Rest\\Monitor',
        'implementingClassName' => 'Twilio\\Rest\\Monitor',
        'currentClassName' => 'Twilio\\Rest\\Monitor',
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
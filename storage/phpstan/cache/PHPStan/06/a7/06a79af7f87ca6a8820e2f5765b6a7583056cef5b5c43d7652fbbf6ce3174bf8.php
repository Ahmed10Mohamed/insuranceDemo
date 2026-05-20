<?php declare(strict_types = 1);

// osfsl-E:/mywork/laragon/www/MohammedSA/naqliyahtak/vendor/composer/../twilio/sdk/src/Twilio/Rest/Routes.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Twilio\Rest\Routes
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-57c5f0716863b9f04e70fa60f13fb5c9247979b759daa5bffdf33f6e14de2c59-8.2.29-6.70.0.0',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Twilio\\Rest\\Routes',
        'filename' => 'E:/mywork/laragon/www/MohammedSA/naqliyahtak/vendor/composer/../twilio/sdk/src/Twilio/Rest/Routes.php',
      ),
    ),
    'namespace' => 'Twilio\\Rest',
    'name' => 'Twilio\\Rest\\Routes',
    'shortName' => 'Routes',
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
    'endLine' => 58,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Twilio\\Rest\\RoutesBase',
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
      'getPhoneNumbers' => 
      array (
        'name' => 'getPhoneNumbers',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Routes\\V2\\PhoneNumberList',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated Use v2->phoneNumbers instead.
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
        'declaringClassName' => 'Twilio\\Rest\\Routes',
        'implementingClassName' => 'Twilio\\Rest\\Routes',
        'currentClassName' => 'Twilio\\Rest\\Routes',
        'aliasName' => NULL,
      ),
      'contextPhoneNumbers' => 
      array (
        'name' => 'contextPhoneNumbers',
        'parameters' => 
        array (
          'phoneNumber' => 
          array (
            'name' => 'phoneNumber',
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
            'startColumn' => 44,
            'endColumn' => 62,
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
            'name' => 'Twilio\\Rest\\Routes\\V2\\PhoneNumberContext',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated  Use v2->phoneNumbers(\\$phoneNumber) instead.
 * @param string $phoneNumber The phone number
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
        'declaringClassName' => 'Twilio\\Rest\\Routes',
        'implementingClassName' => 'Twilio\\Rest\\Routes',
        'currentClassName' => 'Twilio\\Rest\\Routes',
        'aliasName' => NULL,
      ),
      'getSipDomains' => 
      array (
        'name' => 'getSipDomains',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Routes\\V2\\SipDomainList',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated Use v2->sipDomains instead.
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
        'declaringClassName' => 'Twilio\\Rest\\Routes',
        'implementingClassName' => 'Twilio\\Rest\\Routes',
        'currentClassName' => 'Twilio\\Rest\\Routes',
        'aliasName' => NULL,
      ),
      'contextSipDomains' => 
      array (
        'name' => 'contextSipDomains',
        'parameters' => 
        array (
          'sipDomain' => 
          array (
            'name' => 'sipDomain',
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
            'startColumn' => 42,
            'endColumn' => 58,
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
            'name' => 'Twilio\\Rest\\Routes\\V2\\SipDomainContext',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated Use v2->sipDomains(\\$sipDomain) instead.
 * @param string $sipDomain The sip_domain
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
        'declaringClassName' => 'Twilio\\Rest\\Routes',
        'implementingClassName' => 'Twilio\\Rest\\Routes',
        'currentClassName' => 'Twilio\\Rest\\Routes',
        'aliasName' => NULL,
      ),
      'getTrunks' => 
      array (
        'name' => 'getTrunks',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Routes\\V2\\TrunkList',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated Use v2->trunks instead.
 */',
        'startLine' => 45,
        'endLine' => 48,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Routes',
        'implementingClassName' => 'Twilio\\Rest\\Routes',
        'currentClassName' => 'Twilio\\Rest\\Routes',
        'aliasName' => NULL,
      ),
      'contextTrunks' => 
      array (
        'name' => 'contextTrunks',
        'parameters' => 
        array (
          'sipTrunkDomain' => 
          array (
            'name' => 'sipTrunkDomain',
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
            'startLine' => 54,
            'endLine' => 54,
            'startColumn' => 38,
            'endColumn' => 59,
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
            'name' => 'Twilio\\Rest\\Routes\\V2\\TrunkContext',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated Use v2->trunks(\\$sipTrunkDomain instead.
 * @param string $sipTrunkDomain The SIP Trunk
 */',
        'startLine' => 54,
        'endLine' => 57,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Routes',
        'implementingClassName' => 'Twilio\\Rest\\Routes',
        'currentClassName' => 'Twilio\\Rest\\Routes',
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
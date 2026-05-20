<?php declare(strict_types = 1);

// osfsl-E:/mywork/laragon/www/MohammedSA/naqliyahtak/vendor/composer/../twilio/sdk/src/Twilio/Rest/Api.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Twilio\Rest\Api
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-5770bf7c4b7b0d51be0135f582a98969b9e0fbb9f04e40103e9127b8ab6982cc-8.2.29-6.70.0.0',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Twilio\\Rest\\Api',
        'filename' => 'E:/mywork/laragon/www/MohammedSA/naqliyahtak/vendor/composer/../twilio/sdk/src/Twilio/Rest/Api.php',
      ),
    ),
    'namespace' => 'Twilio\\Rest',
    'name' => 'Twilio\\Rest\\Api',
    'shortName' => 'Api',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 6,
    'endLine' => 371,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Twilio\\Rest\\ApiBase',
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
      'getAccount' => 
      array (
        'name' => 'getAccount',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Api\\V2010\\AccountContext',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @return \\Twilio\\Rest\\Api\\V2010\\AccountContext Account provided as the
 *                                               authenticating account
 */',
        'startLine' => 11,
        'endLine' => 13,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Api',
        'implementingClassName' => 'Twilio\\Rest\\Api',
        'currentClassName' => 'Twilio\\Rest\\Api',
        'aliasName' => NULL,
      ),
      'getAccounts' => 
      array (
        'name' => 'getAccounts',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Api\\V2010\\AccountList',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 15,
        'endLine' => 17,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Api',
        'implementingClassName' => 'Twilio\\Rest\\Api',
        'currentClassName' => 'Twilio\\Rest\\Api',
        'aliasName' => NULL,
      ),
      'contextAccounts' => 
      array (
        'name' => 'contextAccounts',
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
            'startLine' => 22,
            'endLine' => 22,
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
            'name' => 'Twilio\\Rest\\Api\\V2010\\AccountContext',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param string $sid Fetch by unique Account Sid
 */',
        'startLine' => 22,
        'endLine' => 24,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Api',
        'implementingClassName' => 'Twilio\\Rest\\Api',
        'currentClassName' => 'Twilio\\Rest\\Api',
        'aliasName' => NULL,
      ),
      'getAddresses' => 
      array (
        'name' => 'getAddresses',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\AddressList',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated Use account->addresses instead.
 */',
        'startLine' => 29,
        'endLine' => 32,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Api',
        'implementingClassName' => 'Twilio\\Rest\\Api',
        'currentClassName' => 'Twilio\\Rest\\Api',
        'aliasName' => NULL,
      ),
      'contextAddresses' => 
      array (
        'name' => 'contextAddresses',
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
            'startLine' => 38,
            'endLine' => 38,
            'startColumn' => 41,
            'endColumn' => 51,
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
            'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\AddressContext',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated Use account->addresses(\\$sid) instead.
 * @param string $sid The unique string that identifies the resource
 */',
        'startLine' => 38,
        'endLine' => 41,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Api',
        'implementingClassName' => 'Twilio\\Rest\\Api',
        'currentClassName' => 'Twilio\\Rest\\Api',
        'aliasName' => NULL,
      ),
      'getApplications' => 
      array (
        'name' => 'getApplications',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\ApplicationList',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated Use account->applications instead.
 */',
        'startLine' => 46,
        'endLine' => 49,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Api',
        'implementingClassName' => 'Twilio\\Rest\\Api',
        'currentClassName' => 'Twilio\\Rest\\Api',
        'aliasName' => NULL,
      ),
      'contextApplications' => 
      array (
        'name' => 'contextApplications',
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
            'startLine' => 55,
            'endLine' => 55,
            'startColumn' => 44,
            'endColumn' => 54,
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
            'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\ApplicationContext',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated Use account->applications(\\$sid) instead.
 * @param string $sid The unique string that identifies the resource
 */',
        'startLine' => 55,
        'endLine' => 58,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Api',
        'implementingClassName' => 'Twilio\\Rest\\Api',
        'currentClassName' => 'Twilio\\Rest\\Api',
        'aliasName' => NULL,
      ),
      'getAuthorizedConnectApps' => 
      array (
        'name' => 'getAuthorizedConnectApps',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\AuthorizedConnectAppList',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated Use account->authorizedConnectApps instead.
 */',
        'startLine' => 63,
        'endLine' => 66,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Api',
        'implementingClassName' => 'Twilio\\Rest\\Api',
        'currentClassName' => 'Twilio\\Rest\\Api',
        'aliasName' => NULL,
      ),
      'contextAuthorizedConnectApps' => 
      array (
        'name' => 'contextAuthorizedConnectApps',
        'parameters' => 
        array (
          'connectAppSid' => 
          array (
            'name' => 'connectAppSid',
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
            'startLine' => 72,
            'endLine' => 72,
            'startColumn' => 53,
            'endColumn' => 73,
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
            'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\AuthorizedConnectAppContext',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated Use account->authorizedConnectApps(\\$connectAppSid) instead.
 * @param string $connectAppSid The SID of the Connect App to fetch
 */',
        'startLine' => 72,
        'endLine' => 75,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Api',
        'implementingClassName' => 'Twilio\\Rest\\Api',
        'currentClassName' => 'Twilio\\Rest\\Api',
        'aliasName' => NULL,
      ),
      'getAvailablePhoneNumbers' => 
      array (
        'name' => 'getAvailablePhoneNumbers',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\AvailablePhoneNumberCountryList',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated Use account->availablePhoneNumbers instead.
 */',
        'startLine' => 80,
        'endLine' => 83,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Api',
        'implementingClassName' => 'Twilio\\Rest\\Api',
        'currentClassName' => 'Twilio\\Rest\\Api',
        'aliasName' => NULL,
      ),
      'contextAvailablePhoneNumbers' => 
      array (
        'name' => 'contextAvailablePhoneNumbers',
        'parameters' => 
        array (
          'countryCode' => 
          array (
            'name' => 'countryCode',
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
            'startLine' => 90,
            'endLine' => 90,
            'startColumn' => 53,
            'endColumn' => 71,
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
            'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\AvailablePhoneNumberCountryContext',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated Use account->availablePhoneNumbers(\\$countryCode) instead.
 * @param string $countryCode The ISO country code of the country to fetch
 *                            available phone number information about
 */',
        'startLine' => 90,
        'endLine' => 93,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Api',
        'implementingClassName' => 'Twilio\\Rest\\Api',
        'currentClassName' => 'Twilio\\Rest\\Api',
        'aliasName' => NULL,
      ),
      'getBalance' => 
      array (
        'name' => 'getBalance',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\BalanceList',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated Use account->balance instead.
 */',
        'startLine' => 98,
        'endLine' => 101,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Api',
        'implementingClassName' => 'Twilio\\Rest\\Api',
        'currentClassName' => 'Twilio\\Rest\\Api',
        'aliasName' => NULL,
      ),
      'getCalls' => 
      array (
        'name' => 'getCalls',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\CallList',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated Use account->calls instead
 */',
        'startLine' => 106,
        'endLine' => 109,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Api',
        'implementingClassName' => 'Twilio\\Rest\\Api',
        'currentClassName' => 'Twilio\\Rest\\Api',
        'aliasName' => NULL,
      ),
      'contextCalls' => 
      array (
        'name' => 'contextCalls',
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
            'startLine' => 115,
            'endLine' => 115,
            'startColumn' => 37,
            'endColumn' => 47,
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
            'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\CallContext',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated Use account->calls(\\$sid) instead.
 * @param string $sid The SID of the Call resource to fetch
 */',
        'startLine' => 115,
        'endLine' => 118,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Api',
        'implementingClassName' => 'Twilio\\Rest\\Api',
        'currentClassName' => 'Twilio\\Rest\\Api',
        'aliasName' => NULL,
      ),
      'getConferences' => 
      array (
        'name' => 'getConferences',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\ConferenceList',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated Use account->conferences instead.
 */',
        'startLine' => 123,
        'endLine' => 126,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Api',
        'implementingClassName' => 'Twilio\\Rest\\Api',
        'currentClassName' => 'Twilio\\Rest\\Api',
        'aliasName' => NULL,
      ),
      'contextConferences' => 
      array (
        'name' => 'contextConferences',
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
            'startLine' => 132,
            'endLine' => 132,
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
            'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\ConferenceContext',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated Use account->conferences(\\$sid) instead.
 * @param string $sid The unique string that identifies this resource
 */',
        'startLine' => 132,
        'endLine' => 135,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Api',
        'implementingClassName' => 'Twilio\\Rest\\Api',
        'currentClassName' => 'Twilio\\Rest\\Api',
        'aliasName' => NULL,
      ),
      'getConnectApps' => 
      array (
        'name' => 'getConnectApps',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\ConnectAppList',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated Use account->connectApps instead.
 */',
        'startLine' => 140,
        'endLine' => 143,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Api',
        'implementingClassName' => 'Twilio\\Rest\\Api',
        'currentClassName' => 'Twilio\\Rest\\Api',
        'aliasName' => NULL,
      ),
      'contextConnectApps' => 
      array (
        'name' => 'contextConnectApps',
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
            'startLine' => 149,
            'endLine' => 149,
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
            'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\ConnectAppContext',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated account->connectApps(\\$sid)
 * @param string $sid The unique string that identifies the resource
 */',
        'startLine' => 149,
        'endLine' => 152,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Api',
        'implementingClassName' => 'Twilio\\Rest\\Api',
        'currentClassName' => 'Twilio\\Rest\\Api',
        'aliasName' => NULL,
      ),
      'getIncomingPhoneNumbers' => 
      array (
        'name' => 'getIncomingPhoneNumbers',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\IncomingPhoneNumberList',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated Use account->incomingPhoneNumbers instead
 */',
        'startLine' => 157,
        'endLine' => 160,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Api',
        'implementingClassName' => 'Twilio\\Rest\\Api',
        'currentClassName' => 'Twilio\\Rest\\Api',
        'aliasName' => NULL,
      ),
      'contextIncomingPhoneNumbers' => 
      array (
        'name' => 'contextIncomingPhoneNumbers',
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
            'startLine' => 166,
            'endLine' => 166,
            'startColumn' => 52,
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
            'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\IncomingPhoneNumberContext',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated Use account->incomingPhoneNumbers(\\$sid) instead.
 * @param string $sid The unique string that identifies the resource
 */',
        'startLine' => 166,
        'endLine' => 169,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Api',
        'implementingClassName' => 'Twilio\\Rest\\Api',
        'currentClassName' => 'Twilio\\Rest\\Api',
        'aliasName' => NULL,
      ),
      'getKeys' => 
      array (
        'name' => 'getKeys',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\KeyList',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated Use account->keys instead.
 */',
        'startLine' => 174,
        'endLine' => 177,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Api',
        'implementingClassName' => 'Twilio\\Rest\\Api',
        'currentClassName' => 'Twilio\\Rest\\Api',
        'aliasName' => NULL,
      ),
      'contextKeys' => 
      array (
        'name' => 'contextKeys',
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
            'startLine' => 183,
            'endLine' => 183,
            'startColumn' => 36,
            'endColumn' => 46,
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
            'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\KeyContext',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated Use account->keys(\\$sid) instead
 * @param string $sid The unique string that identifies the resource
 */',
        'startLine' => 183,
        'endLine' => 186,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Api',
        'implementingClassName' => 'Twilio\\Rest\\Api',
        'currentClassName' => 'Twilio\\Rest\\Api',
        'aliasName' => NULL,
      ),
      'getMessages' => 
      array (
        'name' => 'getMessages',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\MessageList',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated Use account->messages instead.
 */',
        'startLine' => 191,
        'endLine' => 194,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Api',
        'implementingClassName' => 'Twilio\\Rest\\Api',
        'currentClassName' => 'Twilio\\Rest\\Api',
        'aliasName' => NULL,
      ),
      'contextMessages' => 
      array (
        'name' => 'contextMessages',
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
            'startLine' => 200,
            'endLine' => 200,
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
            'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\MessageContext',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated Use account->messages(\\$sid) instead.
 * @param string $sid The unique string that identifies the resource
 */',
        'startLine' => 200,
        'endLine' => 203,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Api',
        'implementingClassName' => 'Twilio\\Rest\\Api',
        'currentClassName' => 'Twilio\\Rest\\Api',
        'aliasName' => NULL,
      ),
      'getNewKeys' => 
      array (
        'name' => 'getNewKeys',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\NewKeyList',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated Use account->newKeys instead.
 */',
        'startLine' => 208,
        'endLine' => 211,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Api',
        'implementingClassName' => 'Twilio\\Rest\\Api',
        'currentClassName' => 'Twilio\\Rest\\Api',
        'aliasName' => NULL,
      ),
      'getNewSigningKeys' => 
      array (
        'name' => 'getNewSigningKeys',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\NewSigningKeyList',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated Use account->newSigningKeys instead.
 */',
        'startLine' => 216,
        'endLine' => 219,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Api',
        'implementingClassName' => 'Twilio\\Rest\\Api',
        'currentClassName' => 'Twilio\\Rest\\Api',
        'aliasName' => NULL,
      ),
      'getNotifications' => 
      array (
        'name' => 'getNotifications',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\NotificationList',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated Use account->notifications instead.
 */',
        'startLine' => 224,
        'endLine' => 227,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Api',
        'implementingClassName' => 'Twilio\\Rest\\Api',
        'currentClassName' => 'Twilio\\Rest\\Api',
        'aliasName' => NULL,
      ),
      'contextNotifications' => 
      array (
        'name' => 'contextNotifications',
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
            'startLine' => 233,
            'endLine' => 233,
            'startColumn' => 45,
            'endColumn' => 55,
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
            'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\NotificationContext',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated Use account->notifications(\\$sid) instead.
 * @param string $sid The unique string that identifies the resource
 */',
        'startLine' => 233,
        'endLine' => 236,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Api',
        'implementingClassName' => 'Twilio\\Rest\\Api',
        'currentClassName' => 'Twilio\\Rest\\Api',
        'aliasName' => NULL,
      ),
      'getOutgoingCallerIds' => 
      array (
        'name' => 'getOutgoingCallerIds',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\OutgoingCallerIdList',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated Use account->outgoingCallerIds instead.
 */',
        'startLine' => 241,
        'endLine' => 244,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Api',
        'implementingClassName' => 'Twilio\\Rest\\Api',
        'currentClassName' => 'Twilio\\Rest\\Api',
        'aliasName' => NULL,
      ),
      'contextOutgoingCallerIds' => 
      array (
        'name' => 'contextOutgoingCallerIds',
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
            'startLine' => 250,
            'endLine' => 250,
            'startColumn' => 49,
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
            'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\OutgoingCallerIdContext',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated Use account->outgoingCallerIds(\\$sid) instead.
 * @param string $sid The unique string that identifies the resource
 */',
        'startLine' => 250,
        'endLine' => 253,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Api',
        'implementingClassName' => 'Twilio\\Rest\\Api',
        'currentClassName' => 'Twilio\\Rest\\Api',
        'aliasName' => NULL,
      ),
      'getQueues' => 
      array (
        'name' => 'getQueues',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\QueueList',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated Use account->queues instead.
 */',
        'startLine' => 258,
        'endLine' => 261,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Api',
        'implementingClassName' => 'Twilio\\Rest\\Api',
        'currentClassName' => 'Twilio\\Rest\\Api',
        'aliasName' => NULL,
      ),
      'contextQueues' => 
      array (
        'name' => 'contextQueues',
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
            'startLine' => 267,
            'endLine' => 267,
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
            'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\QueueContext',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated Use account->queues(\\$sid) instead.
 * @param string $sid The unique string that identifies this resource
 */',
        'startLine' => 267,
        'endLine' => 270,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Api',
        'implementingClassName' => 'Twilio\\Rest\\Api',
        'currentClassName' => 'Twilio\\Rest\\Api',
        'aliasName' => NULL,
      ),
      'getRecordings' => 
      array (
        'name' => 'getRecordings',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\RecordingList',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated Use account->recordings instead.
 */',
        'startLine' => 275,
        'endLine' => 278,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Api',
        'implementingClassName' => 'Twilio\\Rest\\Api',
        'currentClassName' => 'Twilio\\Rest\\Api',
        'aliasName' => NULL,
      ),
      'contextRecordings' => 
      array (
        'name' => 'contextRecordings',
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
            'startLine' => 284,
            'endLine' => 284,
            'startColumn' => 42,
            'endColumn' => 52,
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
            'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\RecordingContext',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated Use account->recordings(\\$sid) instead.
 * @param string $sid The unique string that identifies the resource
 */',
        'startLine' => 284,
        'endLine' => 287,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Api',
        'implementingClassName' => 'Twilio\\Rest\\Api',
        'currentClassName' => 'Twilio\\Rest\\Api',
        'aliasName' => NULL,
      ),
      'getSigningKeys' => 
      array (
        'name' => 'getSigningKeys',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\SigningKeyList',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated  Use account->signingKeys instead.
 */',
        'startLine' => 292,
        'endLine' => 295,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Api',
        'implementingClassName' => 'Twilio\\Rest\\Api',
        'currentClassName' => 'Twilio\\Rest\\Api',
        'aliasName' => NULL,
      ),
      'contextSigningKeys' => 
      array (
        'name' => 'contextSigningKeys',
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
            'startLine' => 301,
            'endLine' => 301,
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
            'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\SigningKeyContext',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated Use account->signingKeys(\\$sid) instead.
 * @param string $sid The sid
 */',
        'startLine' => 301,
        'endLine' => 304,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Api',
        'implementingClassName' => 'Twilio\\Rest\\Api',
        'currentClassName' => 'Twilio\\Rest\\Api',
        'aliasName' => NULL,
      ),
      'getSip' => 
      array (
        'name' => 'getSip',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\SipList',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated Use account->sip instead.
 */',
        'startLine' => 309,
        'endLine' => 312,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Api',
        'implementingClassName' => 'Twilio\\Rest\\Api',
        'currentClassName' => 'Twilio\\Rest\\Api',
        'aliasName' => NULL,
      ),
      'getShortCodes' => 
      array (
        'name' => 'getShortCodes',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\ShortCodeList',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated Use account->shortCodes instead.
 */',
        'startLine' => 317,
        'endLine' => 320,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Api',
        'implementingClassName' => 'Twilio\\Rest\\Api',
        'currentClassName' => 'Twilio\\Rest\\Api',
        'aliasName' => NULL,
      ),
      'contextShortCodes' => 
      array (
        'name' => 'contextShortCodes',
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
            'startLine' => 326,
            'endLine' => 326,
            'startColumn' => 42,
            'endColumn' => 52,
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
            'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\ShortCodeContext',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated Use account->shortCodes(\\$sid) instead.
 * @param string $sid The unique string that identifies this resource
 */',
        'startLine' => 326,
        'endLine' => 329,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Api',
        'implementingClassName' => 'Twilio\\Rest\\Api',
        'currentClassName' => 'Twilio\\Rest\\Api',
        'aliasName' => NULL,
      ),
      'getTokens' => 
      array (
        'name' => 'getTokens',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\TokenList',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated Use account->token instead.
 */',
        'startLine' => 334,
        'endLine' => 337,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Api',
        'implementingClassName' => 'Twilio\\Rest\\Api',
        'currentClassName' => 'Twilio\\Rest\\Api',
        'aliasName' => NULL,
      ),
      'getTranscriptions' => 
      array (
        'name' => 'getTranscriptions',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\TranscriptionList',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated Use account->transcriptions instead.
 */',
        'startLine' => 342,
        'endLine' => 345,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Api',
        'implementingClassName' => 'Twilio\\Rest\\Api',
        'currentClassName' => 'Twilio\\Rest\\Api',
        'aliasName' => NULL,
      ),
      'contextTranscriptions' => 
      array (
        'name' => 'contextTranscriptions',
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
            'startLine' => 351,
            'endLine' => 351,
            'startColumn' => 46,
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
            'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\TranscriptionContext',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated Use account->transcriptions(\\$sid) instead
 * @param string $sid The unique string that identifies the resource
 */',
        'startLine' => 351,
        'endLine' => 354,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Api',
        'implementingClassName' => 'Twilio\\Rest\\Api',
        'currentClassName' => 'Twilio\\Rest\\Api',
        'aliasName' => NULL,
      ),
      'getUsage' => 
      array (
        'name' => 'getUsage',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\UsageList',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated Use account->usage instead.
 */',
        'startLine' => 359,
        'endLine' => 362,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Api',
        'implementingClassName' => 'Twilio\\Rest\\Api',
        'currentClassName' => 'Twilio\\Rest\\Api',
        'aliasName' => NULL,
      ),
      'getValidationRequests' => 
      array (
        'name' => 'getValidationRequests',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\ValidationRequestList',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @deprecated Use account->validationRequests instead.
 */',
        'startLine' => 367,
        'endLine' => 370,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Api',
        'implementingClassName' => 'Twilio\\Rest\\Api',
        'currentClassName' => 'Twilio\\Rest\\Api',
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
<?php declare(strict_types = 1);

// osfsl-E:/mywork/laragon/www/MohammedSA/naqliyahtak/vendor/composer/../twilio/sdk/src/Twilio/Rest/Api/V2010/Account/SipList.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Twilio\Rest\Api\V2010\Account\SipList
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-4d0c5ad872ca224f8508a0a61d0128de817afc3ef07ed7c3139b2e1013dd5760-8.2.29-6.70.0.0',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\SipList',
        'filename' => 'E:/mywork/laragon/www/MohammedSA/naqliyahtak/vendor/composer/../twilio/sdk/src/Twilio/Rest/Api/V2010/Account/SipList.php',
      ),
    ),
    'namespace' => 'Twilio\\Rest\\Api\\V2010\\Account',
    'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\SipList',
    'shortName' => 'SipList',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * @property DomainList $domains
 * @property CredentialListList $credentialLists
 * @property IpAccessControlListList $ipAccessControlLists
 * @method \\Twilio\\Rest\\Api\\V2010\\Account\\Sip\\DomainContext domains(string $sid)
 * @method \\Twilio\\Rest\\Api\\V2010\\Account\\Sip\\CredentialListContext credentialLists(string $sid)
 * @method \\Twilio\\Rest\\Api\\V2010\\Account\\Sip\\IpAccessControlListContext ipAccessControlLists(string $sid)
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 36,
    'endLine' => 148,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Twilio\\ListResource',
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
      '_domains' => 
      array (
        'declaringClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\SipList',
        'implementingClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\SipList',
        'name' => '_domains',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'null',
          'attributes' => 
          array (
            'startLine' => 38,
            'endLine' => 38,
            'startTokenPos' => 62,
            'startFilePos' => 1327,
            'endTokenPos' => 62,
            'endFilePos' => 1330,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 38,
        'endLine' => 38,
        'startColumn' => 5,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_credentialLists' => 
      array (
        'declaringClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\SipList',
        'implementingClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\SipList',
        'name' => '_credentialLists',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'null',
          'attributes' => 
          array (
            'startLine' => 39,
            'endLine' => 39,
            'startTokenPos' => 71,
            'startFilePos' => 1367,
            'endTokenPos' => 71,
            'endFilePos' => 1370,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 39,
        'endLine' => 39,
        'startColumn' => 5,
        'endColumn' => 39,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_ipAccessControlLists' => 
      array (
        'declaringClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\SipList',
        'implementingClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\SipList',
        'name' => '_ipAccessControlLists',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'null',
          'attributes' => 
          array (
            'startLine' => 40,
            'endLine' => 40,
            'startTokenPos' => 80,
            'startFilePos' => 1412,
            'endTokenPos' => 80,
            'endFilePos' => 1415,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 40,
        'endLine' => 40,
        'startColumn' => 5,
        'endColumn' => 44,
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
          'version' => 
          array (
            'name' => 'version',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Twilio\\Version',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 49,
            'endLine' => 49,
            'startColumn' => 9,
            'endColumn' => 24,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'accountSid' => 
          array (
            'name' => 'accountSid',
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
            'startLine' => 50,
            'endLine' => 50,
            'startColumn' => 9,
            'endColumn' => 26,
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
 * Construct the SipList
 *
 * @param Version $version Version that contains the resource
 * @param string $accountSid The SID of the [Account](https://www.twilio.com/docs/iam/api/account) that created the SipDomain resources to read.
 */',
        'startLine' => 48,
        'endLine' => 60,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Twilio\\Rest\\Api\\V2010\\Account',
        'declaringClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\SipList',
        'implementingClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\SipList',
        'currentClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\SipList',
        'aliasName' => NULL,
      ),
      'getDomains' => 
      array (
        'name' => 'getDomains',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\Sip\\DomainList',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Access the domains
 */',
        'startLine' => 65,
        'endLine' => 74,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest\\Api\\V2010\\Account',
        'declaringClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\SipList',
        'implementingClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\SipList',
        'currentClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\SipList',
        'aliasName' => NULL,
      ),
      'getCredentialLists' => 
      array (
        'name' => 'getCredentialLists',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\Sip\\CredentialListList',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Access the credentialLists
 */',
        'startLine' => 79,
        'endLine' => 88,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest\\Api\\V2010\\Account',
        'declaringClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\SipList',
        'implementingClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\SipList',
        'currentClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\SipList',
        'aliasName' => NULL,
      ),
      'getIpAccessControlLists' => 
      array (
        'name' => 'getIpAccessControlLists',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\Sip\\IpAccessControlListList',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Access the ipAccessControlLists
 */',
        'startLine' => 93,
        'endLine' => 102,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest\\Api\\V2010\\Account',
        'declaringClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\SipList',
        'implementingClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\SipList',
        'currentClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\SipList',
        'aliasName' => NULL,
      ),
      '__get' => 
      array (
        'name' => '__get',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
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
            'startLine' => 111,
            'endLine' => 111,
            'startColumn' => 27,
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
 * Magic getter to lazy load subresources
 *
 * @param string $name Subresource to return
 * @return \\Twilio\\ListResource The requested subresource
 * @throws TwilioException For unknown subresources
 */',
        'startLine' => 111,
        'endLine' => 119,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Twilio\\Rest\\Api\\V2010\\Account',
        'declaringClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\SipList',
        'implementingClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\SipList',
        'currentClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\SipList',
        'aliasName' => NULL,
      ),
      '__call' => 
      array (
        'name' => '__call',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
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
            'startLine' => 129,
            'endLine' => 129,
            'startColumn' => 28,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'arguments' => 
          array (
            'name' => 'arguments',
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
            'startLine' => 129,
            'endLine' => 129,
            'startColumn' => 42,
            'endColumn' => 57,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\InstanceContext',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Magic caller to get resource contexts
 *
 * @param string $name Resource to return
 * @param array $arguments Context parameters
 * @return InstanceContext The requested resource context
 * @throws TwilioException For unknown resource
 */',
        'startLine' => 129,
        'endLine' => 137,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Twilio\\Rest\\Api\\V2010\\Account',
        'declaringClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\SipList',
        'implementingClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\SipList',
        'currentClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\SipList',
        'aliasName' => NULL,
      ),
      '__toString' => 
      array (
        'name' => '__toString',
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
        'docComment' => '/**
 * Provide a friendly representation
 *
 * @return string Machine friendly representation
 */',
        'startLine' => 144,
        'endLine' => 147,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Twilio\\Rest\\Api\\V2010\\Account',
        'declaringClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\SipList',
        'implementingClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\SipList',
        'currentClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\SipList',
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
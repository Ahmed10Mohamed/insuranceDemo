<?php declare(strict_types = 1);

// osfsl-E:/mywork/laragon/www/MohammedSA/naqliyahtak/vendor/composer/../twilio/sdk/src/Twilio/Rest/Api/V2010/Account/IncomingPhoneNumberContext.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Twilio\Rest\Api\V2010\Account\IncomingPhoneNumberContext
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-41c313714a92487d57beb409b32b209d09dc9633306bd48b3d123024c376a663-8.2.29-6.70.0.0',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\IncomingPhoneNumberContext',
        'filename' => 'E:/mywork/laragon/www/MohammedSA/naqliyahtak/vendor/composer/../twilio/sdk/src/Twilio/Rest/Api/V2010/Account/IncomingPhoneNumberContext.php',
      ),
    ),
    'namespace' => 'Twilio\\Rest\\Api\\V2010\\Account',
    'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\IncomingPhoneNumberContext',
    'shortName' => 'IncomingPhoneNumberContext',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * @property AssignedAddOnList $assignedAddOns
 * @method \\Twilio\\Rest\\Api\\V2010\\Account\\IncomingPhoneNumber\\AssignedAddOnContext assignedAddOns(string $sid)
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 34,
    'endLine' => 237,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Twilio\\InstanceContext',
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
      '_assignedAddOns' => 
      array (
        'declaringClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\IncomingPhoneNumberContext',
        'implementingClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\IncomingPhoneNumberContext',
        'name' => '_assignedAddOns',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 36,
        'endLine' => 36,
        'startColumn' => 5,
        'endColumn' => 31,
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
            'startLine' => 46,
            'endLine' => 46,
            'startColumn' => 9,
            'endColumn' => 24,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'accountSid' => 
          array (
            'name' => 'accountSid',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 47,
            'endLine' => 47,
            'startColumn' => 9,
            'endColumn' => 19,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'sid' => 
          array (
            'name' => 'sid',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 48,
            'endLine' => 48,
            'startColumn' => 9,
            'endColumn' => 12,
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
 * Initialize the IncomingPhoneNumberContext
 *
 * @param Version $version Version that contains the resource
 * @param string $accountSid The SID of the [Account](https://www.twilio.com/docs/iam/api/account) that will create the resource.
 * @param string $sid The Twilio-provided string that uniquely identifies the IncomingPhoneNumber resource to delete.
 */',
        'startLine' => 45,
        'endLine' => 63,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Twilio\\Rest\\Api\\V2010\\Account',
        'declaringClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\IncomingPhoneNumberContext',
        'implementingClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\IncomingPhoneNumberContext',
        'currentClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\IncomingPhoneNumberContext',
        'aliasName' => NULL,
      ),
      'delete' => 
      array (
        'name' => 'delete',
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
 * Delete the IncomingPhoneNumberInstance
 *
 * @return bool True if delete succeeds, false otherwise
 * @throws TwilioException When an HTTP error occurs.
 */',
        'startLine' => 71,
        'endLine' => 76,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Twilio\\Rest\\Api\\V2010\\Account',
        'declaringClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\IncomingPhoneNumberContext',
        'implementingClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\IncomingPhoneNumberContext',
        'currentClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\IncomingPhoneNumberContext',
        'aliasName' => NULL,
      ),
      'fetch' => 
      array (
        'name' => 'fetch',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\IncomingPhoneNumberInstance',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Fetch the IncomingPhoneNumberInstance
 *
 * @return IncomingPhoneNumberInstance Fetched IncomingPhoneNumberInstance
 * @throws TwilioException When an HTTP error occurs.
 */',
        'startLine' => 85,
        'endLine' => 97,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Twilio\\Rest\\Api\\V2010\\Account',
        'declaringClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\IncomingPhoneNumberContext',
        'implementingClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\IncomingPhoneNumberContext',
        'currentClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\IncomingPhoneNumberContext',
        'aliasName' => NULL,
      ),
      'update' => 
      array (
        'name' => 'update',
        'parameters' => 
        array (
          'options' => 
          array (
            'name' => 'options',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 107,
                'endLine' => 107,
                'startTokenPos' => 339,
                'startFilePos' => 3257,
                'endTokenPos' => 340,
                'endFilePos' => 3258,
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
            'startLine' => 107,
            'endLine' => 107,
            'startColumn' => 28,
            'endColumn' => 46,
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
            'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\IncomingPhoneNumberInstance',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Update the IncomingPhoneNumberInstance
 *
 * @param array|Options $options Optional Arguments
 * @return IncomingPhoneNumberInstance Updated IncomingPhoneNumberInstance
 * @throws TwilioException When an HTTP error occurs.
 */',
        'startLine' => 107,
        'endLine' => 170,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Twilio\\Rest\\Api\\V2010\\Account',
        'declaringClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\IncomingPhoneNumberContext',
        'implementingClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\IncomingPhoneNumberContext',
        'currentClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\IncomingPhoneNumberContext',
        'aliasName' => NULL,
      ),
      'getAssignedAddOns' => 
      array (
        'name' => 'getAssignedAddOns',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\IncomingPhoneNumber\\AssignedAddOnList',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Access the assignedAddOns
 */',
        'startLine' => 176,
        'endLine' => 187,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest\\Api\\V2010\\Account',
        'declaringClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\IncomingPhoneNumberContext',
        'implementingClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\IncomingPhoneNumberContext',
        'currentClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\IncomingPhoneNumberContext',
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
            'startLine' => 196,
            'endLine' => 196,
            'startColumn' => 27,
            'endColumn' => 38,
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
            'name' => 'Twilio\\ListResource',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Magic getter to lazy load subresources
 *
 * @param string $name Subresource to return
 * @return ListResource The requested subresource
 * @throws TwilioException For unknown subresources
 */',
        'startLine' => 196,
        'endLine' => 204,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Twilio\\Rest\\Api\\V2010\\Account',
        'declaringClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\IncomingPhoneNumberContext',
        'implementingClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\IncomingPhoneNumberContext',
        'currentClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\IncomingPhoneNumberContext',
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
            'startLine' => 214,
            'endLine' => 214,
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
            'startLine' => 214,
            'endLine' => 214,
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
        'startLine' => 214,
        'endLine' => 222,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Twilio\\Rest\\Api\\V2010\\Account',
        'declaringClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\IncomingPhoneNumberContext',
        'implementingClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\IncomingPhoneNumberContext',
        'currentClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\IncomingPhoneNumberContext',
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
        'startLine' => 229,
        'endLine' => 236,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Twilio\\Rest\\Api\\V2010\\Account',
        'declaringClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\IncomingPhoneNumberContext',
        'implementingClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\IncomingPhoneNumberContext',
        'currentClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\IncomingPhoneNumberContext',
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
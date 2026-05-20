<?php declare(strict_types = 1);

// osfsl-E:/mywork/laragon/www/MohammedSA/naqliyahtak/vendor/composer/../twilio/sdk/src/Twilio/Rest/Api/V2010/Account/AddressList.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Twilio\Rest\Api\V2010\Account\AddressList
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-c82db17f5b78c9333828a0aff88940b2dc107565f26db9eb053bb777963145d5-8.2.29-6.70.0.0',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\AddressList',
        'filename' => 'E:/mywork/laragon/www/MohammedSA/naqliyahtak/vendor/composer/../twilio/sdk/src/Twilio/Rest/Api/V2010/Account/AddressList.php',
      ),
    ),
    'namespace' => 'Twilio\\Rest\\Api\\V2010\\Account',
    'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\AddressList',
    'shortName' => 'AddressList',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 28,
    'endLine' => 236,
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
            'startLine' => 37,
            'endLine' => 37,
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
            'startLine' => 38,
            'endLine' => 38,
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
 * Construct the AddressList
 *
 * @param Version $version Version that contains the resource
 * @param string $accountSid The SID of the [Account](https://www.twilio.com/docs/iam/api/account) that will be responsible for the new Address resource.
 */',
        'startLine' => 36,
        'endLine' => 51,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Twilio\\Rest\\Api\\V2010\\Account',
        'declaringClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\AddressList',
        'implementingClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\AddressList',
        'currentClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\AddressList',
        'aliasName' => NULL,
      ),
      'create' => 
      array (
        'name' => 'create',
        'parameters' => 
        array (
          'customerName' => 
          array (
            'name' => 'customerName',
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
            'startLine' => 66,
            'endLine' => 66,
            'startColumn' => 28,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'street' => 
          array (
            'name' => 'street',
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
            'startLine' => 66,
            'endLine' => 66,
            'startColumn' => 50,
            'endColumn' => 63,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'city' => 
          array (
            'name' => 'city',
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
            'startLine' => 66,
            'endLine' => 66,
            'startColumn' => 66,
            'endColumn' => 77,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'region' => 
          array (
            'name' => 'region',
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
            'startLine' => 66,
            'endLine' => 66,
            'startColumn' => 80,
            'endColumn' => 93,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
          'postalCode' => 
          array (
            'name' => 'postalCode',
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
            'startLine' => 66,
            'endLine' => 66,
            'startColumn' => 96,
            'endColumn' => 113,
            'parameterIndex' => 4,
            'isOptional' => false,
          ),
          'isoCountry' => 
          array (
            'name' => 'isoCountry',
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
            'startLine' => 66,
            'endLine' => 66,
            'startColumn' => 116,
            'endColumn' => 133,
            'parameterIndex' => 5,
            'isOptional' => false,
          ),
          'options' => 
          array (
            'name' => 'options',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 66,
                'endLine' => 66,
                'startTokenPos' => 169,
                'startFilePos' => 2191,
                'endTokenPos' => 170,
                'endFilePos' => 2192,
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
            'startLine' => 66,
            'endLine' => 66,
            'startColumn' => 136,
            'endColumn' => 154,
            'parameterIndex' => 6,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\AddressInstance',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create the AddressInstance
 *
 * @param string $customerName The name to associate with the new address.
 * @param string $street The number and street address of the new address.
 * @param string $city The city of the new address.
 * @param string $region The state or region of the new address.
 * @param string $postalCode The postal code of the new address.
 * @param string $isoCountry The ISO country code of the new address.
 * @param array|Options $options Optional Arguments
 * @return AddressInstance Created AddressInstance
 * @throws TwilioException When an HTTP error occurs.
 */',
        'startLine' => 66,
        'endLine' => 102,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Twilio\\Rest\\Api\\V2010\\Account',
        'declaringClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\AddressList',
        'implementingClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\AddressList',
        'currentClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\AddressList',
        'aliasName' => NULL,
      ),
      'read' => 
      array (
        'name' => 'read',
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
                'startLine' => 121,
                'endLine' => 121,
                'startTokenPos' => 392,
                'startFilePos' => 4279,
                'endTokenPos' => 393,
                'endFilePos' => 4280,
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
            'startLine' => 121,
            'endLine' => 121,
            'startColumn' => 26,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'limit' => 
          array (
            'name' => 'limit',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 121,
                'endLine' => 121,
                'startTokenPos' => 403,
                'startFilePos' => 4297,
                'endTokenPos' => 403,
                'endFilePos' => 4300,
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
                      'name' => 'int',
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
            'startLine' => 121,
            'endLine' => 121,
            'startColumn' => 47,
            'endColumn' => 64,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'pageSize' => 
          array (
            'name' => 'pageSize',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 121,
                'endLine' => 121,
                'startTokenPos' => 410,
                'startFilePos' => 4315,
                'endTokenPos' => 410,
                'endFilePos' => 4318,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 121,
            'endLine' => 121,
            'startColumn' => 67,
            'endColumn' => 82,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
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
 * Reads AddressInstance records from the API as a list.
 * Unlike stream(), this operation is eager and will load `limit` records into
 * memory before returning.
 *
 * @param array|Options $options Optional Arguments
 * @param int $limit Upper limit for the number of records to return. read()
 *                   guarantees to never return more than limit.  Default is no
 *                   limit
 * @param mixed $pageSize Number of records to fetch per request, when not set
 *                        will use the default value of 50 records.  If no
 *                        page_size is defined but a limit is defined, read()
 *                        will attempt to read the limit with the most
 *                        efficient page size, i.e. min(limit, 1000)
 * @return AddressInstance[] Array of results
 */',
        'startLine' => 121,
        'endLine' => 124,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Twilio\\Rest\\Api\\V2010\\Account',
        'declaringClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\AddressList',
        'implementingClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\AddressList',
        'currentClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\AddressList',
        'aliasName' => NULL,
      ),
      'stream' => 
      array (
        'name' => 'stream',
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
                'startLine' => 145,
                'endLine' => 145,
                'startTokenPos' => 456,
                'startFilePos' => 5463,
                'endTokenPos' => 457,
                'endFilePos' => 5464,
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
            'startLine' => 145,
            'endLine' => 145,
            'startColumn' => 28,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'limit' => 
          array (
            'name' => 'limit',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 145,
                'endLine' => 145,
                'startTokenPos' => 467,
                'startFilePos' => 5481,
                'endTokenPos' => 467,
                'endFilePos' => 5484,
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
                      'name' => 'int',
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
            'startLine' => 145,
            'endLine' => 145,
            'startColumn' => 49,
            'endColumn' => 66,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'pageSize' => 
          array (
            'name' => 'pageSize',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 145,
                'endLine' => 145,
                'startTokenPos' => 474,
                'startFilePos' => 5499,
                'endTokenPos' => 474,
                'endFilePos' => 5502,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 145,
            'endLine' => 145,
            'startColumn' => 69,
            'endColumn' => 84,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Stream',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Streams AddressInstance records from the API as a generator stream.
 * This operation lazily loads records as efficiently as possible until the
 * limit
 * is reached.
 * The results are returned as a generator, so this operation is memory
 * efficient.
 *
 * @param array|Options $options Optional Arguments
 * @param int $limit Upper limit for the number of records to return. stream()
 *                   guarantees to never return more than limit.  Default is no
 *                   limit
 * @param mixed $pageSize Number of records to fetch per request, when not set
 *                        will use the default value of 50 records.  If no
 *                        page_size is defined but a limit is defined, stream()
 *                        will attempt to read the limit with the most
 *                        efficient page size, i.e. min(limit, 1000)
 * @return Stream stream of results
 */',
        'startLine' => 145,
        'endLine' => 152,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Twilio\\Rest\\Api\\V2010\\Account',
        'declaringClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\AddressList',
        'implementingClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\AddressList',
        'currentClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\AddressList',
        'aliasName' => NULL,
      ),
      'page' => 
      array (
        'name' => 'page',
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
                'startLine' => 164,
                'endLine' => 164,
                'startTokenPos' => 558,
                'startFilePos' => 6193,
                'endTokenPos' => 559,
                'endFilePos' => 6194,
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
            'startLine' => 164,
            'endLine' => 164,
            'startColumn' => 9,
            'endColumn' => 27,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'pageSize' => 
          array (
            'name' => 'pageSize',
            'default' => 
            array (
              'code' => '\\Twilio\\Values::NONE',
              'attributes' => 
              array (
                'startLine' => 165,
                'endLine' => 165,
                'startTokenPos' => 566,
                'startFilePos' => 6217,
                'endTokenPos' => 568,
                'endFilePos' => 6228,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 165,
            'endLine' => 165,
            'startColumn' => 9,
            'endColumn' => 32,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'pageToken' => 
          array (
            'name' => 'pageToken',
            'default' => 
            array (
              'code' => '\\Twilio\\Values::NONE',
              'attributes' => 
              array (
                'startLine' => 166,
                'endLine' => 166,
                'startTokenPos' => 577,
                'startFilePos' => 6259,
                'endTokenPos' => 579,
                'endFilePos' => 6270,
              ),
            ),
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
            'startColumn' => 9,
            'endColumn' => 40,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'pageNumber' => 
          array (
            'name' => 'pageNumber',
            'default' => 
            array (
              'code' => '\\Twilio\\Values::NONE',
              'attributes' => 
              array (
                'startLine' => 167,
                'endLine' => 167,
                'startTokenPos' => 586,
                'startFilePos' => 6295,
                'endTokenPos' => 588,
                'endFilePos' => 6306,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 167,
            'endLine' => 167,
            'startColumn' => 9,
            'endColumn' => 34,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\AddressPage',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieve a single page of AddressInstance records from the API.
 * Request is executed immediately
 *
 * @param mixed $pageSize Number of records to return, defaults to 50
 * @param string $pageToken PageToken provided by the API
 * @param mixed $pageNumber Page Number, this value is simply for client state
 * @return AddressPage Page of AddressInstance
 */',
        'startLine' => 163,
        'endLine' => 190,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Twilio\\Rest\\Api\\V2010\\Account',
        'declaringClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\AddressList',
        'implementingClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\AddressList',
        'currentClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\AddressList',
        'aliasName' => NULL,
      ),
      'getPage' => 
      array (
        'name' => 'getPage',
        'parameters' => 
        array (
          'targetUrl' => 
          array (
            'name' => 'targetUrl',
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
            'startLine' => 199,
            'endLine' => 199,
            'startColumn' => 29,
            'endColumn' => 45,
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
            'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\AddressPage',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieve a specific page of AddressInstance records from the API.
 * Request is executed immediately
 *
 * @param string $targetUrl API-generated URL for the requested results page
 * @return AddressPage Page of AddressInstance
 */',
        'startLine' => 199,
        'endLine' => 207,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Twilio\\Rest\\Api\\V2010\\Account',
        'declaringClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\AddressList',
        'implementingClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\AddressList',
        'currentClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\AddressList',
        'aliasName' => NULL,
      ),
      'getContext' => 
      array (
        'name' => 'getContext',
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
            'startLine' => 216,
            'endLine' => 216,
            'startColumn' => 9,
            'endColumn' => 19,
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
 * Constructs a AddressContext
 *
 * @param string $sid The Twilio-provided string that uniquely identifies the Address resource to delete.
 */',
        'startLine' => 215,
        'endLine' => 225,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Twilio\\Rest\\Api\\V2010\\Account',
        'declaringClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\AddressList',
        'implementingClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\AddressList',
        'currentClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\AddressList',
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
        'startLine' => 232,
        'endLine' => 235,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Twilio\\Rest\\Api\\V2010\\Account',
        'declaringClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\AddressList',
        'implementingClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\AddressList',
        'currentClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\AddressList',
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
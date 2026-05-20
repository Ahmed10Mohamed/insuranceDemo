<?php declare(strict_types = 1);

// osfsl-E:/mywork/laragon/www/MohammedSA/naqliyahtak/vendor/composer/../twilio/sdk/src/Twilio/Rest/Api/V2010/Account/ShortCodeList.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Twilio\Rest\Api\V2010\Account\ShortCodeList
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-fae86adc94f75217f1e727fcb47a8f8fc463f56961805198a1996b424154b01e-8.2.29-6.70.0.0',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\ShortCodeList',
        'filename' => 'E:/mywork/laragon/www/MohammedSA/naqliyahtak/vendor/composer/../twilio/sdk/src/Twilio/Rest/Api/V2010/Account/ShortCodeList.php',
      ),
    ),
    'namespace' => 'Twilio\\Rest\\Api\\V2010\\Account',
    'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\ShortCodeList',
    'shortName' => 'ShortCodeList',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 26,
    'endLine' => 178,
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
            'startLine' => 35,
            'endLine' => 35,
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
            'startLine' => 36,
            'endLine' => 36,
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
 * Construct the ShortCodeList
 *
 * @param Version $version Version that contains the resource
 * @param string $accountSid The SID of the [Account](https://www.twilio.com/docs/iam/api/account) that created the ShortCode resource(s) to fetch.
 */',
        'startLine' => 34,
        'endLine' => 49,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Twilio\\Rest\\Api\\V2010\\Account',
        'declaringClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\ShortCodeList',
        'implementingClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\ShortCodeList',
        'currentClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\ShortCodeList',
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
                'startLine' => 67,
                'endLine' => 67,
                'startTokenPos' => 129,
                'startFilePos' => 2268,
                'endTokenPos' => 130,
                'endFilePos' => 2269,
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
            'startLine' => 67,
            'endLine' => 67,
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
                'startLine' => 67,
                'endLine' => 67,
                'startTokenPos' => 140,
                'startFilePos' => 2286,
                'endTokenPos' => 140,
                'endFilePos' => 2289,
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
            'startLine' => 67,
            'endLine' => 67,
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
                'startLine' => 67,
                'endLine' => 67,
                'startTokenPos' => 147,
                'startFilePos' => 2304,
                'endTokenPos' => 147,
                'endFilePos' => 2307,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 67,
            'endLine' => 67,
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
 * Reads ShortCodeInstance records from the API as a list.
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
 * @return ShortCodeInstance[] Array of results
 */',
        'startLine' => 67,
        'endLine' => 70,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Twilio\\Rest\\Api\\V2010\\Account',
        'declaringClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\ShortCodeList',
        'implementingClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\ShortCodeList',
        'currentClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\ShortCodeList',
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
                'startLine' => 91,
                'endLine' => 91,
                'startTokenPos' => 193,
                'startFilePos' => 3454,
                'endTokenPos' => 194,
                'endFilePos' => 3455,
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
            'startLine' => 91,
            'endLine' => 91,
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
                'startLine' => 91,
                'endLine' => 91,
                'startTokenPos' => 204,
                'startFilePos' => 3472,
                'endTokenPos' => 204,
                'endFilePos' => 3475,
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
            'startLine' => 91,
            'endLine' => 91,
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
                'startLine' => 91,
                'endLine' => 91,
                'startTokenPos' => 211,
                'startFilePos' => 3490,
                'endTokenPos' => 211,
                'endFilePos' => 3493,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 91,
            'endLine' => 91,
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
 * Streams ShortCodeInstance records from the API as a generator stream.
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
        'startLine' => 91,
        'endLine' => 98,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Twilio\\Rest\\Api\\V2010\\Account',
        'declaringClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\ShortCodeList',
        'implementingClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\ShortCodeList',
        'currentClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\ShortCodeList',
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
                'startLine' => 110,
                'endLine' => 110,
                'startTokenPos' => 295,
                'startFilePos' => 4190,
                'endTokenPos' => 296,
                'endFilePos' => 4191,
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
            'startLine' => 110,
            'endLine' => 110,
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
                'startLine' => 111,
                'endLine' => 111,
                'startTokenPos' => 303,
                'startFilePos' => 4214,
                'endTokenPos' => 305,
                'endFilePos' => 4225,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 111,
            'endLine' => 111,
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
                'startLine' => 112,
                'endLine' => 112,
                'startTokenPos' => 314,
                'startFilePos' => 4256,
                'endTokenPos' => 316,
                'endFilePos' => 4267,
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
            'startLine' => 112,
            'endLine' => 112,
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
                'startLine' => 113,
                'endLine' => 113,
                'startTokenPos' => 323,
                'startFilePos' => 4292,
                'endTokenPos' => 325,
                'endFilePos' => 4303,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 113,
            'endLine' => 113,
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
            'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\ShortCodePage',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieve a single page of ShortCodeInstance records from the API.
 * Request is executed immediately
 *
 * @param mixed $pageSize Number of records to return, defaults to 50
 * @param string $pageToken PageToken provided by the API
 * @param mixed $pageNumber Page Number, this value is simply for client state
 * @return ShortCodePage Page of ShortCodeInstance
 */',
        'startLine' => 109,
        'endLine' => 132,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Twilio\\Rest\\Api\\V2010\\Account',
        'declaringClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\ShortCodeList',
        'implementingClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\ShortCodeList',
        'currentClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\ShortCodeList',
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
            'startLine' => 141,
            'endLine' => 141,
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
            'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\ShortCodePage',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieve a specific page of ShortCodeInstance records from the API.
 * Request is executed immediately
 *
 * @param string $targetUrl API-generated URL for the requested results page
 * @return ShortCodePage Page of ShortCodeInstance
 */',
        'startLine' => 141,
        'endLine' => 149,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Twilio\\Rest\\Api\\V2010\\Account',
        'declaringClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\ShortCodeList',
        'implementingClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\ShortCodeList',
        'currentClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\ShortCodeList',
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
            'startLine' => 158,
            'endLine' => 158,
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
            'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\ShortCodeContext',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Constructs a ShortCodeContext
 *
 * @param string $sid The Twilio-provided string that uniquely identifies the ShortCode resource to fetch
 */',
        'startLine' => 157,
        'endLine' => 167,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Twilio\\Rest\\Api\\V2010\\Account',
        'declaringClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\ShortCodeList',
        'implementingClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\ShortCodeList',
        'currentClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\ShortCodeList',
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
        'startLine' => 174,
        'endLine' => 177,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Twilio\\Rest\\Api\\V2010\\Account',
        'declaringClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\ShortCodeList',
        'implementingClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\ShortCodeList',
        'currentClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\ShortCodeList',
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
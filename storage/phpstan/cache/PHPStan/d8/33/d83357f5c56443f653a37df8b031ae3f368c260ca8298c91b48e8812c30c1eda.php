<?php declare(strict_types = 1);

// osfsl-E:/mywork/laragon/www/MohammedSA/naqliyahtak/vendor/composer/../twilio/sdk/src/Twilio/Rest/Api/V2010/Account/AuthorizedConnectAppList.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Twilio\Rest\Api\V2010\Account\AuthorizedConnectAppList
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-3a35dd2b33230386d6db746143946bf2c63e9d000644d5f8a1e622d3b6f94d5c-8.2.29-6.70.0.0',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\AuthorizedConnectAppList',
        'filename' => 'E:/mywork/laragon/www/MohammedSA/naqliyahtak/vendor/composer/../twilio/sdk/src/Twilio/Rest/Api/V2010/Account/AuthorizedConnectAppList.php',
      ),
    ),
    'namespace' => 'Twilio\\Rest\\Api\\V2010\\Account',
    'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\AuthorizedConnectAppList',
    'shortName' => 'AuthorizedConnectAppList',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 25,
    'endLine' => 169,
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
            'startLine' => 34,
            'endLine' => 34,
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
            'startLine' => 35,
            'endLine' => 35,
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
 * Construct the AuthorizedConnectAppList
 *
 * @param Version $version Version that contains the resource
 * @param string $accountSid The SID of the [Account](https://www.twilio.com/docs/iam/api/account) that created the AuthorizedConnectApp resource to fetch.
 */',
        'startLine' => 33,
        'endLine' => 48,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Twilio\\Rest\\Api\\V2010\\Account',
        'declaringClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\AuthorizedConnectAppList',
        'implementingClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\AuthorizedConnectAppList',
        'currentClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\AuthorizedConnectAppList',
        'aliasName' => NULL,
      ),
      'read' => 
      array (
        'name' => 'read',
        'parameters' => 
        array (
          'limit' => 
          array (
            'name' => 'limit',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 65,
                'endLine' => 65,
                'startTokenPos' => 125,
                'startFilePos' => 2248,
                'endTokenPos' => 125,
                'endFilePos' => 2251,
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
            'startLine' => 65,
            'endLine' => 65,
            'startColumn' => 26,
            'endColumn' => 43,
            'parameterIndex' => 0,
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
                'startLine' => 65,
                'endLine' => 65,
                'startTokenPos' => 132,
                'startFilePos' => 2266,
                'endTokenPos' => 132,
                'endFilePos' => 2269,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 65,
            'endLine' => 65,
            'startColumn' => 46,
            'endColumn' => 61,
            'parameterIndex' => 1,
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
 * Reads AuthorizedConnectAppInstance records from the API as a list.
 * Unlike stream(), this operation is eager and will load `limit` records into
 * memory before returning.
 *
 * @param int $limit Upper limit for the number of records to return. read()
 *                   guarantees to never return more than limit.  Default is no
 *                   limit
 * @param mixed $pageSize Number of records to fetch per request, when not set
 *                        will use the default value of 50 records.  If no
 *                        page_size is defined but a limit is defined, read()
 *                        will attempt to read the limit with the most
 *                        efficient page size, i.e. min(limit, 1000)
 * @return AuthorizedConnectAppInstance[] Array of results
 */',
        'startLine' => 65,
        'endLine' => 68,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Twilio\\Rest\\Api\\V2010\\Account',
        'declaringClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\AuthorizedConnectAppList',
        'implementingClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\AuthorizedConnectAppList',
        'currentClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\AuthorizedConnectAppList',
        'aliasName' => NULL,
      ),
      'stream' => 
      array (
        'name' => 'stream',
        'parameters' => 
        array (
          'limit' => 
          array (
            'name' => 'limit',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 88,
                'endLine' => 88,
                'startTokenPos' => 176,
                'startFilePos' => 3358,
                'endTokenPos' => 176,
                'endFilePos' => 3361,
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
            'startLine' => 88,
            'endLine' => 88,
            'startColumn' => 28,
            'endColumn' => 45,
            'parameterIndex' => 0,
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
                'startLine' => 88,
                'endLine' => 88,
                'startTokenPos' => 183,
                'startFilePos' => 3376,
                'endTokenPos' => 183,
                'endFilePos' => 3379,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 88,
            'endLine' => 88,
            'startColumn' => 48,
            'endColumn' => 63,
            'parameterIndex' => 1,
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
 * Streams AuthorizedConnectAppInstance records from the API as a generator stream.
 * This operation lazily loads records as efficiently as possible until the
 * limit
 * is reached.
 * The results are returned as a generator, so this operation is memory
 * efficient.
 *
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
        'startLine' => 88,
        'endLine' => 95,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Twilio\\Rest\\Api\\V2010\\Account',
        'declaringClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\AuthorizedConnectAppList',
        'implementingClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\AuthorizedConnectAppList',
        'currentClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\AuthorizedConnectAppList',
        'aliasName' => NULL,
      ),
      'page' => 
      array (
        'name' => 'page',
        'parameters' => 
        array (
          'pageSize' => 
          array (
            'name' => 'pageSize',
            'default' => 
            array (
              'code' => '\\Twilio\\Values::NONE',
              'attributes' => 
              array (
                'startLine' => 107,
                'endLine' => 107,
                'startTokenPos' => 262,
                'startFilePos' => 4094,
                'endTokenPos' => 264,
                'endFilePos' => 4105,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 107,
            'endLine' => 107,
            'startColumn' => 9,
            'endColumn' => 32,
            'parameterIndex' => 0,
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
                'startLine' => 108,
                'endLine' => 108,
                'startTokenPos' => 273,
                'startFilePos' => 4136,
                'endTokenPos' => 275,
                'endFilePos' => 4147,
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
            'startLine' => 108,
            'endLine' => 108,
            'startColumn' => 9,
            'endColumn' => 40,
            'parameterIndex' => 1,
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
                'startLine' => 109,
                'endLine' => 109,
                'startTokenPos' => 282,
                'startFilePos' => 4172,
                'endTokenPos' => 284,
                'endFilePos' => 4183,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 109,
            'endLine' => 109,
            'startColumn' => 9,
            'endColumn' => 34,
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
            'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\AuthorizedConnectAppPage',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieve a single page of AuthorizedConnectAppInstance records from the API.
 * Request is executed immediately
 *
 * @param mixed $pageSize Number of records to return, defaults to 50
 * @param string $pageToken PageToken provided by the API
 * @param mixed $pageNumber Page Number, this value is simply for client state
 * @return AuthorizedConnectAppPage Page of AuthorizedConnectAppInstance
 */',
        'startLine' => 106,
        'endLine' => 123,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Twilio\\Rest\\Api\\V2010\\Account',
        'declaringClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\AuthorizedConnectAppList',
        'implementingClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\AuthorizedConnectAppList',
        'currentClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\AuthorizedConnectAppList',
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
            'startLine' => 132,
            'endLine' => 132,
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
            'name' => 'Twilio\\Rest\\Api\\V2010\\Account\\AuthorizedConnectAppPage',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieve a specific page of AuthorizedConnectAppInstance records from the API.
 * Request is executed immediately
 *
 * @param string $targetUrl API-generated URL for the requested results page
 * @return AuthorizedConnectAppPage Page of AuthorizedConnectAppInstance
 */',
        'startLine' => 132,
        'endLine' => 140,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Twilio\\Rest\\Api\\V2010\\Account',
        'declaringClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\AuthorizedConnectAppList',
        'implementingClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\AuthorizedConnectAppList',
        'currentClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\AuthorizedConnectAppList',
        'aliasName' => NULL,
      ),
      'getContext' => 
      array (
        'name' => 'getContext',
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
            'startLine' => 149,
            'endLine' => 149,
            'startColumn' => 9,
            'endColumn' => 29,
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
 * Constructs a AuthorizedConnectAppContext
 *
 * @param string $connectAppSid The SID of the Connect App to fetch.
 */',
        'startLine' => 148,
        'endLine' => 158,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Twilio\\Rest\\Api\\V2010\\Account',
        'declaringClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\AuthorizedConnectAppList',
        'implementingClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\AuthorizedConnectAppList',
        'currentClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\AuthorizedConnectAppList',
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
        'startLine' => 165,
        'endLine' => 168,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Twilio\\Rest\\Api\\V2010\\Account',
        'declaringClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\AuthorizedConnectAppList',
        'implementingClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\AuthorizedConnectAppList',
        'currentClassName' => 'Twilio\\Rest\\Api\\V2010\\Account\\AuthorizedConnectAppList',
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
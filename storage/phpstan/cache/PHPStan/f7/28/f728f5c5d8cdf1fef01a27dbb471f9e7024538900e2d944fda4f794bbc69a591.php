<?php declare(strict_types = 1);

// osfsl-E:/mywork/laragon/www/MohammedSA/naqliyahtak/vendor/composer/../kreait/firebase-php/src/Firebase/Messaging/WebPushConfig.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Kreait\Firebase\Messaging\WebPushConfig
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-dacc81649f635bf6aba3ed2bda746edb340b6528b5830abe9d2b5f81a665fd03-8.2.29-6.70.0.0',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Kreait\\Firebase\\Messaging\\WebPushConfig',
        'filename' => 'E:/mywork/laragon/www/MohammedSA/naqliyahtak/vendor/composer/../kreait/firebase-php/src/Firebase/Messaging/WebPushConfig.php',
      ),
    ),
    'namespace' => 'Kreait\\Firebase\\Messaging',
    'name' => 'Kreait\\Firebase\\Messaging\\WebPushConfig',
    'shortName' => 'WebPushConfig',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 32,
    'docComment' => '/**
 * @see https://tools.ietf.org/html/rfc8030#section-5.3 Web Push Message Urgency
 *
 * @phpstan-type WebPushHeadersShape array{
 *     TTL?: positive-int|numeric-string|null,
 *     Urgency?: self::URGENCY_*
 * }
 *
 * @see https://firebase.google.com/docs/reference/fcm/rest/v1/projects.messages#webpushfcmoptions WebPush FCM Options
 *
 * @phpstan-type WebPushFcmOptionsShape array{
 *     link?: non-empty-string,
 *     analytics_label?: non-empty-string
 * }
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/API/Notification/Notification#syntax WebPush Notification Syntax
 *
 * @phpstan-type WebPushNotificationShape array{
 *     title: string|null,
 *     dir?: \'ltr\'|\'rtl\'|\'auto\',
 *     lang?: string,
 *     badge?: non-empty-string,
 *     body?: non-empty-string,
 *     tag?: non-empty-string,
 *     icon?: non-empty-string,
 *     image?: non-empty-string,
 *     data?: mixed,
 *     vibrate?: list<positive-int>,
 *     renotify?: bool,
 *     requireInteraction?: bool,
 *     actions?: list<array{
 *         action: non-empty-string,
 *         title: non-empty-string,
 *         icon: non-empty-string
 *     }>,
 *     silent?: bool
 * }
 *
 * @see https://firebase.google.com/docs/reference/fcm/rest/v1/projects.messages#webpushconfig WebPush Config Syntax
 *
 * @phpstan-type WebPushConfigShape array{
 *     headers?: WebPushHeadersShape,
 *     data?: array<non-empty-string, non-empty-string>,
 *     notification?: WebPushNotificationShape,
 *     fcm_options?: WebPushFcmOptionsShape
 * }
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 67,
    'endLine' => 190,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'JsonSerializable',
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
      'URGENCY_VERY_LOW' => 
      array (
        'declaringClassName' => 'Kreait\\Firebase\\Messaging\\WebPushConfig',
        'implementingClassName' => 'Kreait\\Firebase\\Messaging\\WebPushConfig',
        'name' => 'URGENCY_VERY_LOW',
        'modifiers' => 4,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'very-low\'',
          'attributes' => 
          array (
            'startLine' => 69,
            'endLine' => 69,
            'startTokenPos' => 110,
            'startFilePos' => 1998,
            'endTokenPos' => 110,
            'endFilePos' => 2007,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 69,
        'endLine' => 69,
        'startColumn' => 5,
        'endColumn' => 48,
      ),
      'URGENCY_LOW' => 
      array (
        'declaringClassName' => 'Kreait\\Firebase\\Messaging\\WebPushConfig',
        'implementingClassName' => 'Kreait\\Firebase\\Messaging\\WebPushConfig',
        'name' => 'URGENCY_LOW',
        'modifiers' => 4,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'low\'',
          'attributes' => 
          array (
            'startLine' => 71,
            'endLine' => 71,
            'startTokenPos' => 121,
            'startFilePos' => 2043,
            'endTokenPos' => 121,
            'endFilePos' => 2047,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 71,
        'endLine' => 71,
        'startColumn' => 5,
        'endColumn' => 38,
      ),
      'URGENCY_NORMAL' => 
      array (
        'declaringClassName' => 'Kreait\\Firebase\\Messaging\\WebPushConfig',
        'implementingClassName' => 'Kreait\\Firebase\\Messaging\\WebPushConfig',
        'name' => 'URGENCY_NORMAL',
        'modifiers' => 4,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'normal\'',
          'attributes' => 
          array (
            'startLine' => 73,
            'endLine' => 73,
            'startTokenPos' => 132,
            'startFilePos' => 2086,
            'endTokenPos' => 132,
            'endFilePos' => 2093,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 73,
        'endLine' => 73,
        'startColumn' => 5,
        'endColumn' => 44,
      ),
      'URGENCY_HIGH' => 
      array (
        'declaringClassName' => 'Kreait\\Firebase\\Messaging\\WebPushConfig',
        'implementingClassName' => 'Kreait\\Firebase\\Messaging\\WebPushConfig',
        'name' => 'URGENCY_HIGH',
        'modifiers' => 4,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'high\'',
          'attributes' => 
          array (
            'startLine' => 75,
            'endLine' => 75,
            'startTokenPos' => 143,
            'startFilePos' => 2130,
            'endTokenPos' => 143,
            'endFilePos' => 2135,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 75,
        'endLine' => 75,
        'startColumn' => 5,
        'endColumn' => 40,
      ),
      'VALID_URGENCIES' => 
      array (
        'declaringClassName' => 'Kreait\\Firebase\\Messaging\\WebPushConfig',
        'implementingClassName' => 'Kreait\\Firebase\\Messaging\\WebPushConfig',
        'name' => 'VALID_URGENCIES',
        'modifiers' => 4,
        'type' => NULL,
        'value' => 
        array (
          'code' => '[self::URGENCY_VERY_LOW, self::URGENCY_LOW, self::URGENCY_NORMAL, self::URGENCY_HIGH]',
          'attributes' => 
          array (
            'startLine' => 77,
            'endLine' => 82,
            'startTokenPos' => 154,
            'startFilePos' => 2175,
            'endTokenPos' => 176,
            'endFilePos' => 2298,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 77,
        'endLine' => 82,
        'startColumn' => 5,
        'endColumn' => 6,
      ),
    ),
    'immediateProperties' => 
    array (
      'config' => 
      array (
        'declaringClassName' => 'Kreait\\Firebase\\Messaging\\WebPushConfig',
        'implementingClassName' => 'Kreait\\Firebase\\Messaging\\WebPushConfig',
        'name' => 'config',
        'modifiers' => 4,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 87,
        'endLine' => 87,
        'startColumn' => 34,
        'endColumn' => 54,
        'isPromoted' => true,
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
          'config' => 
          array (
            'name' => 'config',
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
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 87,
            'endLine' => 87,
            'startColumn' => 34,
            'endColumn' => 54,
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
 * @param WebPushConfigShape $config
 */',
        'startLine' => 87,
        'endLine' => 89,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Kreait\\Firebase\\Messaging',
        'declaringClassName' => 'Kreait\\Firebase\\Messaging\\WebPushConfig',
        'implementingClassName' => 'Kreait\\Firebase\\Messaging\\WebPushConfig',
        'currentClassName' => 'Kreait\\Firebase\\Messaging\\WebPushConfig',
        'aliasName' => NULL,
      ),
      'new' => 
      array (
        'name' => 'new',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'self',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 91,
        'endLine' => 94,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Kreait\\Firebase\\Messaging',
        'declaringClassName' => 'Kreait\\Firebase\\Messaging\\WebPushConfig',
        'implementingClassName' => 'Kreait\\Firebase\\Messaging\\WebPushConfig',
        'currentClassName' => 'Kreait\\Firebase\\Messaging\\WebPushConfig',
        'aliasName' => NULL,
      ),
      'fromArray' => 
      array (
        'name' => 'fromArray',
        'parameters' => 
        array (
          'config' => 
          array (
            'name' => 'config',
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
            'startLine' => 99,
            'endLine' => 99,
            'startColumn' => 38,
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
            'name' => 'self',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param WebPushConfigShape $config
 */',
        'startLine' => 99,
        'endLine' => 112,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Kreait\\Firebase\\Messaging',
        'declaringClassName' => 'Kreait\\Firebase\\Messaging\\WebPushConfig',
        'implementingClassName' => 'Kreait\\Firebase\\Messaging\\WebPushConfig',
        'currentClassName' => 'Kreait\\Firebase\\Messaging\\WebPushConfig',
        'aliasName' => NULL,
      ),
      'withHighUrgency' => 
      array (
        'name' => 'withHighUrgency',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'self',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 114,
        'endLine' => 117,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Kreait\\Firebase\\Messaging',
        'declaringClassName' => 'Kreait\\Firebase\\Messaging\\WebPushConfig',
        'implementingClassName' => 'Kreait\\Firebase\\Messaging\\WebPushConfig',
        'currentClassName' => 'Kreait\\Firebase\\Messaging\\WebPushConfig',
        'aliasName' => NULL,
      ),
      'withNormalUrgency' => 
      array (
        'name' => 'withNormalUrgency',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'self',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 119,
        'endLine' => 122,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Kreait\\Firebase\\Messaging',
        'declaringClassName' => 'Kreait\\Firebase\\Messaging\\WebPushConfig',
        'implementingClassName' => 'Kreait\\Firebase\\Messaging\\WebPushConfig',
        'currentClassName' => 'Kreait\\Firebase\\Messaging\\WebPushConfig',
        'aliasName' => NULL,
      ),
      'withLowUrgency' => 
      array (
        'name' => 'withLowUrgency',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'self',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 124,
        'endLine' => 127,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Kreait\\Firebase\\Messaging',
        'declaringClassName' => 'Kreait\\Firebase\\Messaging\\WebPushConfig',
        'implementingClassName' => 'Kreait\\Firebase\\Messaging\\WebPushConfig',
        'currentClassName' => 'Kreait\\Firebase\\Messaging\\WebPushConfig',
        'aliasName' => NULL,
      ),
      'withVeryLowUrgency' => 
      array (
        'name' => 'withVeryLowUrgency',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'self',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 129,
        'endLine' => 132,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Kreait\\Firebase\\Messaging',
        'declaringClassName' => 'Kreait\\Firebase\\Messaging\\WebPushConfig',
        'implementingClassName' => 'Kreait\\Firebase\\Messaging\\WebPushConfig',
        'currentClassName' => 'Kreait\\Firebase\\Messaging\\WebPushConfig',
        'aliasName' => NULL,
      ),
      'withUrgency' => 
      array (
        'name' => 'withUrgency',
        'parameters' => 
        array (
          'urgency' => 
          array (
            'name' => 'urgency',
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
            'startLine' => 137,
            'endLine' => 137,
            'startColumn' => 33,
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
            'name' => 'self',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param self::URGENCY_* $urgency
 */',
        'startLine' => 137,
        'endLine' => 145,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Kreait\\Firebase\\Messaging',
        'declaringClassName' => 'Kreait\\Firebase\\Messaging\\WebPushConfig',
        'implementingClassName' => 'Kreait\\Firebase\\Messaging\\WebPushConfig',
        'currentClassName' => 'Kreait\\Firebase\\Messaging\\WebPushConfig',
        'aliasName' => NULL,
      ),
      'jsonSerialize' => 
      array (
        'name' => 'jsonSerialize',
        'parameters' => 
        array (
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
 * @return WebPushConfigShape
 */',
        'startLine' => 150,
        'endLine' => 154,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Kreait\\Firebase\\Messaging',
        'declaringClassName' => 'Kreait\\Firebase\\Messaging\\WebPushConfig',
        'implementingClassName' => 'Kreait\\Firebase\\Messaging\\WebPushConfig',
        'currentClassName' => 'Kreait\\Firebase\\Messaging\\WebPushConfig',
        'aliasName' => NULL,
      ),
      'ensureValidHeaders' => 
      array (
        'name' => 'ensureValidHeaders',
        'parameters' => 
        array (
          'headers' => 
          array (
            'name' => 'headers',
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
            'startLine' => 161,
            'endLine' => 161,
            'startColumn' => 48,
            'endColumn' => 61,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param WebPushHeadersShape $headers
 *
 * @return WebPushHeadersShape
 */',
        'startLine' => 161,
        'endLine' => 189,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 20,
        'namespace' => 'Kreait\\Firebase\\Messaging',
        'declaringClassName' => 'Kreait\\Firebase\\Messaging\\WebPushConfig',
        'implementingClassName' => 'Kreait\\Firebase\\Messaging\\WebPushConfig',
        'currentClassName' => 'Kreait\\Firebase\\Messaging\\WebPushConfig',
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
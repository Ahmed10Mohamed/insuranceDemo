<?php declare(strict_types = 1);

// osfsl-E:/mywork/laragon/www/MohammedSA/naqliyahtak/vendor/composer/../kreait/firebase-php/src/Firebase/Messaging/AndroidConfig.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Kreait\Firebase\Messaging\AndroidConfig
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-60c0bb00aeb0e1d0802d836876ee787614e246a62ce4bc26a51a23731303d056-8.2.29-6.70.0.0',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'filename' => 'E:/mywork/laragon/www/MohammedSA/naqliyahtak/vendor/composer/../kreait/firebase-php/src/Firebase/Messaging/AndroidConfig.php',
      ),
    ),
    'namespace' => 'Kreait\\Firebase\\Messaging',
    'name' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
    'shortName' => 'AndroidConfig',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 32,
    'docComment' => '/**
 * @see https://firebase.google.com/docs/reference/fcm/rest/v1/projects.messages#androidconfig
 * @see https://firebase.google.com/docs/cloud-messaging/concept-options#setting-the-priority-of-a-message
 * @see https://firebase.google.com/docs/reference/fcm/rest/v1/projects.messages#androidmessagepriority Android Message Priorities
 * @see https://firebase.google.com/docs/reference/fcm/rest/v1/projects.messages#androidfcmoptions Android FCM Options Syntax
 *
 * @phpstan-type AndroidFcmOptionsShape array{
 *     analytics_label?: non-empty-string
 * }
 *
 * @see https://firebase.google.com/docs/reference/fcm/rest/v1/projects.messages#LightSettings Android FCM Light Settings Syntax
 *
 * @phpstan-type AndroidFcmLightSettingsShape array{
 *     color: array{
 *         red: float,
 *         green: float,
 *         blue: float,
 *         alpha: float
 *     },
 *     light_on_duration: non-empty-string,
 *     light_off_duration: non-empty-string
 * }
 *
 * @see https://firebase.google.com/docs/reference/fcm/rest/v1/projects.messages#AndroidNotification Android Notification Syntax
 *
 * @phpstan-type AndroidNotificationShape array{
 *     title?: non-empty-string,
 *     body?: non-empty-string,
 *     icon?: non-empty-string,
 *     color?: non-empty-string,
 *     sound?: non-empty-string,
 *     click_action?: non-empty-string,
 *     body_loc_key?: non-empty-string,
 *     body_loc_args?: list<non-empty-string>,
 *     title_loc_key?: non-empty-string,
 *     title_loc_args?: list<non-empty-string>,
 *     channel_id?: non-empty-string,
 *     ticker?: non-empty-string,
 *     sticky?: bool,
 *     event_time?: non-empty-string,
 *     local_only?: bool,
 *     notification_priority?: self::NOTIFICATION_PRIORITY_*,
 *     default_sound?: bool,
 *     default_vibrate_timings?: bool,
 *     default_light_settings?: bool,
 *     vibrate_timings?: list<non-empty-string>,
 *     visibility?: self::NOTIFICATION_VISIBILITY_*,
 *     notification_count?: positive-int,
 *     light_settings?: AndroidFcmLightSettingsShape,
 *     image?: non-empty-string
 * }
 *
 * @see https://firebase.google.com/docs/reference/fcm/rest/v1/projects.messages#androidconfig Android Config Syntax
 *
 * @phpstan-type AndroidConfigShape array{
 *     collapse_key?: non-empty-string,
 *     priority?: self::MESSAGE_PRIORITY_*,
 *     ttl?: positive-int|non-empty-string|null,
 *     restricted_package_name?: non-empty-string,
 *     data?: array<non-empty-string, non-empty-string>,
 *     notification?: AndroidNotificationShape,
 *     fcm_options?: AndroidFcmOptionsShape,
 *     direct_boot_ok?: bool
 * }
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 82,
    'endLine' => 280,
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
      'MESSAGE_PRIORITY_NORMAL' => 
      array (
        'declaringClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'implementingClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'name' => 'MESSAGE_PRIORITY_NORMAL',
        'modifiers' => 4,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'normal\'',
          'attributes' => 
          array (
            'startLine' => 84,
            'endLine' => 84,
            'startTokenPos' => 89,
            'startFilePos' => 3032,
            'endTokenPos' => 89,
            'endFilePos' => 3039,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 84,
        'endLine' => 84,
        'startColumn' => 5,
        'endColumn' => 53,
      ),
      'MESSAGE_PRIORITY_HIGH' => 
      array (
        'declaringClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'implementingClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'name' => 'MESSAGE_PRIORITY_HIGH',
        'modifiers' => 4,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'high\'',
          'attributes' => 
          array (
            'startLine' => 86,
            'endLine' => 86,
            'startTokenPos' => 100,
            'startFilePos' => 3085,
            'endTokenPos' => 100,
            'endFilePos' => 3090,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 86,
        'endLine' => 86,
        'startColumn' => 5,
        'endColumn' => 49,
      ),
      'NOTIFICATION_PRIORITY_UNSPECIFIED' => 
      array (
        'declaringClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'implementingClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'name' => 'NOTIFICATION_PRIORITY_UNSPECIFIED',
        'modifiers' => 4,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'PRIORITY_UNSPECIFIED\'',
          'attributes' => 
          array (
            'startLine' => 88,
            'endLine' => 88,
            'startTokenPos' => 111,
            'startFilePos' => 3148,
            'endTokenPos' => 111,
            'endFilePos' => 3169,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 88,
        'endLine' => 88,
        'startColumn' => 5,
        'endColumn' => 77,
      ),
      'NOTIFICATION_PRIORITY_MIN' => 
      array (
        'declaringClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'implementingClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'name' => 'NOTIFICATION_PRIORITY_MIN',
        'modifiers' => 4,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'PRIORITY_MIN\'',
          'attributes' => 
          array (
            'startLine' => 90,
            'endLine' => 90,
            'startTokenPos' => 122,
            'startFilePos' => 3219,
            'endTokenPos' => 122,
            'endFilePos' => 3232,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 90,
        'endLine' => 90,
        'startColumn' => 5,
        'endColumn' => 61,
      ),
      'NOTIFICATION_PRIORITY_LOW' => 
      array (
        'declaringClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'implementingClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'name' => 'NOTIFICATION_PRIORITY_LOW',
        'modifiers' => 4,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'PRIORITY_LOW\'',
          'attributes' => 
          array (
            'startLine' => 92,
            'endLine' => 92,
            'startTokenPos' => 133,
            'startFilePos' => 3282,
            'endTokenPos' => 133,
            'endFilePos' => 3295,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 92,
        'endLine' => 92,
        'startColumn' => 5,
        'endColumn' => 61,
      ),
      'NOTIFICATION_PRIORITY_DEFAULT' => 
      array (
        'declaringClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'implementingClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'name' => 'NOTIFICATION_PRIORITY_DEFAULT',
        'modifiers' => 4,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'PRIORITY_DEFAULT\'',
          'attributes' => 
          array (
            'startLine' => 94,
            'endLine' => 94,
            'startTokenPos' => 144,
            'startFilePos' => 3349,
            'endTokenPos' => 144,
            'endFilePos' => 3366,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 94,
        'endLine' => 94,
        'startColumn' => 5,
        'endColumn' => 69,
      ),
      'NOTIFICATION_PRIORITY_HIGH' => 
      array (
        'declaringClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'implementingClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'name' => 'NOTIFICATION_PRIORITY_HIGH',
        'modifiers' => 4,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'PRIORITY_HIGH\'',
          'attributes' => 
          array (
            'startLine' => 96,
            'endLine' => 96,
            'startTokenPos' => 155,
            'startFilePos' => 3417,
            'endTokenPos' => 155,
            'endFilePos' => 3431,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 96,
        'endLine' => 96,
        'startColumn' => 5,
        'endColumn' => 63,
      ),
      'NOTIFICATION_PRIORITY_MAX' => 
      array (
        'declaringClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'implementingClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'name' => 'NOTIFICATION_PRIORITY_MAX',
        'modifiers' => 4,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'PRIORITY_MAX\'',
          'attributes' => 
          array (
            'startLine' => 98,
            'endLine' => 98,
            'startTokenPos' => 166,
            'startFilePos' => 3481,
            'endTokenPos' => 166,
            'endFilePos' => 3494,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 98,
        'endLine' => 98,
        'startColumn' => 5,
        'endColumn' => 61,
      ),
      'NOTIFICATION_VISIBILITY_PRIVATE' => 
      array (
        'declaringClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'implementingClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'name' => 'NOTIFICATION_VISIBILITY_PRIVATE',
        'modifiers' => 4,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'PRIVATE\'',
          'attributes' => 
          array (
            'startLine' => 100,
            'endLine' => 100,
            'startTokenPos' => 177,
            'startFilePos' => 3550,
            'endTokenPos' => 177,
            'endFilePos' => 3558,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 100,
        'endLine' => 100,
        'startColumn' => 5,
        'endColumn' => 62,
      ),
      'NOTIFICATION_VISIBILITY_PUBLIC' => 
      array (
        'declaringClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'implementingClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'name' => 'NOTIFICATION_VISIBILITY_PUBLIC',
        'modifiers' => 4,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'PUBLIC\'',
          'attributes' => 
          array (
            'startLine' => 102,
            'endLine' => 102,
            'startTokenPos' => 188,
            'startFilePos' => 3613,
            'endTokenPos' => 188,
            'endFilePos' => 3620,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 102,
        'endLine' => 102,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
      'NOTIFICATION_VISIBILITY_SECRET' => 
      array (
        'declaringClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'implementingClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'name' => 'NOTIFICATION_VISIBILITY_SECRET',
        'modifiers' => 4,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'SECRET\'',
          'attributes' => 
          array (
            'startLine' => 104,
            'endLine' => 104,
            'startTokenPos' => 199,
            'startFilePos' => 3675,
            'endTokenPos' => 199,
            'endFilePos' => 3682,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 104,
        'endLine' => 104,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
    ),
    'immediateProperties' => 
    array (
      'config' => 
      array (
        'declaringClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'implementingClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
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
        'startLine' => 109,
        'endLine' => 109,
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
            'startLine' => 109,
            'endLine' => 109,
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
 * @param AndroidConfigShape $config
 */',
        'startLine' => 109,
        'endLine' => 111,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Kreait\\Firebase\\Messaging',
        'declaringClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'implementingClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'currentClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
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
        'startLine' => 113,
        'endLine' => 116,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Kreait\\Firebase\\Messaging',
        'declaringClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'implementingClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'currentClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
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
            'startLine' => 123,
            'endLine' => 123,
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
 * @param AndroidConfigShape $config
 *
 * @throws InvalidArgument
 */',
        'startLine' => 123,
        'endLine' => 130,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Kreait\\Firebase\\Messaging',
        'declaringClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'implementingClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'currentClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'aliasName' => NULL,
      ),
      'withDefaultSound' => 
      array (
        'name' => 'withDefaultSound',
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
        'startLine' => 132,
        'endLine' => 135,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Kreait\\Firebase\\Messaging',
        'declaringClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'implementingClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'currentClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'aliasName' => NULL,
      ),
      'withSound' => 
      array (
        'name' => 'withSound',
        'parameters' => 
        array (
          'sound' => 
          array (
            'name' => 'sound',
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
            'startLine' => 143,
            'endLine' => 143,
            'startColumn' => 31,
            'endColumn' => 43,
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
 * The sound to play when the device receives the notification. Supports "default" or the filename
 * of a sound resource bundled in the app. Sound files must reside in /res/raw/.
 *
 * @param non-empty-string $sound
 */',
        'startLine' => 143,
        'endLine' => 151,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Kreait\\Firebase\\Messaging',
        'declaringClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'implementingClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'currentClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'aliasName' => NULL,
      ),
      'withHighMessagePriority' => 
      array (
        'name' => 'withHighMessagePriority',
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
        'startLine' => 153,
        'endLine' => 156,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Kreait\\Firebase\\Messaging',
        'declaringClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'implementingClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'currentClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'aliasName' => NULL,
      ),
      'withNormalMessagePriority' => 
      array (
        'name' => 'withNormalMessagePriority',
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
        'startLine' => 158,
        'endLine' => 161,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Kreait\\Firebase\\Messaging',
        'declaringClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'implementingClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'currentClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'aliasName' => NULL,
      ),
      'withMessagePriority' => 
      array (
        'name' => 'withMessagePriority',
        'parameters' => 
        array (
          'messagePriority' => 
          array (
            'name' => 'messagePriority',
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
            'startColumn' => 41,
            'endColumn' => 63,
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
 * @param self::MESSAGE_PRIORITY_* $messagePriority
 */',
        'startLine' => 166,
        'endLine' => 172,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Kreait\\Firebase\\Messaging',
        'declaringClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'implementingClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'currentClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'aliasName' => NULL,
      ),
      'withMinimalNotificationPriority' => 
      array (
        'name' => 'withMinimalNotificationPriority',
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
        'startLine' => 174,
        'endLine' => 177,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Kreait\\Firebase\\Messaging',
        'declaringClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'implementingClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'currentClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'aliasName' => NULL,
      ),
      'withLowNotificationPriority' => 
      array (
        'name' => 'withLowNotificationPriority',
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
        'startLine' => 179,
        'endLine' => 182,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Kreait\\Firebase\\Messaging',
        'declaringClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'implementingClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'currentClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'aliasName' => NULL,
      ),
      'withDefaultNotificationPriority' => 
      array (
        'name' => 'withDefaultNotificationPriority',
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
        'startLine' => 184,
        'endLine' => 187,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Kreait\\Firebase\\Messaging',
        'declaringClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'implementingClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'currentClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'aliasName' => NULL,
      ),
      'withHighNotificationPriority' => 
      array (
        'name' => 'withHighNotificationPriority',
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
        'startLine' => 189,
        'endLine' => 192,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Kreait\\Firebase\\Messaging',
        'declaringClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'implementingClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'currentClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'aliasName' => NULL,
      ),
      'withMaximalNotificationPriority' => 
      array (
        'name' => 'withMaximalNotificationPriority',
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
        'startLine' => 194,
        'endLine' => 197,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Kreait\\Firebase\\Messaging',
        'declaringClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'implementingClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'currentClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'aliasName' => NULL,
      ),
      'withUnspecifiedNotificationPriority' => 
      array (
        'name' => 'withUnspecifiedNotificationPriority',
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
        'startLine' => 199,
        'endLine' => 202,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Kreait\\Firebase\\Messaging',
        'declaringClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'implementingClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'currentClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'aliasName' => NULL,
      ),
      'withNotificationPriority' => 
      array (
        'name' => 'withNotificationPriority',
        'parameters' => 
        array (
          'notificationPriority' => 
          array (
            'name' => 'notificationPriority',
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
            'startLine' => 207,
            'endLine' => 207,
            'startColumn' => 46,
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
            'name' => 'self',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param self::NOTIFICATION_PRIORITY_* $notificationPriority
 */',
        'startLine' => 207,
        'endLine' => 215,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Kreait\\Firebase\\Messaging',
        'declaringClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'implementingClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'currentClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'aliasName' => NULL,
      ),
      'withPrivateNotificationVisibility' => 
      array (
        'name' => 'withPrivateNotificationVisibility',
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
        'startLine' => 217,
        'endLine' => 220,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Kreait\\Firebase\\Messaging',
        'declaringClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'implementingClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'currentClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'aliasName' => NULL,
      ),
      'withPublicNotificationVisibility' => 
      array (
        'name' => 'withPublicNotificationVisibility',
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
        'startLine' => 222,
        'endLine' => 225,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Kreait\\Firebase\\Messaging',
        'declaringClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'implementingClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'currentClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'aliasName' => NULL,
      ),
      'withSecretNotificationVisibility' => 
      array (
        'name' => 'withSecretNotificationVisibility',
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
        'startLine' => 227,
        'endLine' => 230,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Kreait\\Firebase\\Messaging',
        'declaringClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'implementingClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'currentClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'aliasName' => NULL,
      ),
      'withNotificationVisibility' => 
      array (
        'name' => 'withNotificationVisibility',
        'parameters' => 
        array (
          'notificationVisibility' => 
          array (
            'name' => 'notificationVisibility',
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
            'startLine' => 235,
            'endLine' => 235,
            'startColumn' => 48,
            'endColumn' => 77,
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
 * @param self::NOTIFICATION_VISIBILITY_* $notificationVisibility
 */',
        'startLine' => 235,
        'endLine' => 243,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Kreait\\Firebase\\Messaging',
        'declaringClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'implementingClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'currentClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
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
        'docComment' => NULL,
        'startLine' => 245,
        'endLine' => 248,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Kreait\\Firebase\\Messaging',
        'declaringClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'implementingClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'currentClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'aliasName' => NULL,
      ),
      'ensureValidTtl' => 
      array (
        'name' => 'ensureValidTtl',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 257,
            'endLine' => 257,
            'startColumn' => 44,
            'endColumn' => 49,
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
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param int|string $value
 *
 * @throws InvalidArgument
 *
 * @return non-empty-string
 */',
        'startLine' => 257,
        'endLine' => 279,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 20,
        'namespace' => 'Kreait\\Firebase\\Messaging',
        'declaringClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'implementingClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
        'currentClassName' => 'Kreait\\Firebase\\Messaging\\AndroidConfig',
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
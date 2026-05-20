<?php declare(strict_types = 1);

// osfsl-E:/mywork/laragon/www/MohammedSA/naqliyahtak/vendor/composer/../kreait/firebase-php/src/Firebase/Contract/Messaging.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Kreait\Firebase\Contract\Messaging
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-8e04af6d1c56770ac7b2ac1df00dda19a7de397ba52b087f0b520c85972d73e2-8.2.29-6.70.0.0',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Kreait\\Firebase\\Contract\\Messaging',
        'filename' => 'E:/mywork/laragon/www/MohammedSA/naqliyahtak/vendor/composer/../kreait/firebase-php/src/Firebase/Contract/Messaging.php',
      ),
    ),
    'namespace' => 'Kreait\\Firebase\\Contract',
    'name' => 'Kreait\\Firebase\\Contract\\Messaging',
    'shortName' => 'Messaging',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * @phpstan-import-type MessageInputShape from Message
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 23,
    'endLine' => 134,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
      'BATCH_MESSAGE_LIMIT' => 
      array (
        'declaringClassName' => 'Kreait\\Firebase\\Contract\\Messaging',
        'implementingClassName' => 'Kreait\\Firebase\\Contract\\Messaging',
        'name' => 'BATCH_MESSAGE_LIMIT',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '500',
          'attributes' => 
          array (
            'startLine' => 28,
            'endLine' => 28,
            'startTokenPos' => 93,
            'startFilePos' => 813,
            'endTokenPos' => 93,
            'endFilePos' => 815,
          ),
        ),
        'docComment' => '/**
 * @deprecated 7.5.0
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 28,
        'endLine' => 28,
        'startColumn' => 5,
        'endColumn' => 43,
      ),
    ),
    'immediateProperties' => 
    array (
    ),
    'immediateMethods' => 
    array (
      'send' => 
      array (
        'name' => 'send',
        'parameters' => 
        array (
          'message' => 
          array (
            'name' => 'message',
            'default' => NULL,
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
                      'name' => 'Kreait\\Firebase\\Messaging\\Message',
                      'isIdentifier' => false,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'array',
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
            'startLine' => 39,
            'endLine' => 39,
            'startColumn' => 26,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'validateOnly' => 
          array (
            'name' => 'validateOnly',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 39,
                'endLine' => 39,
                'startTokenPos' => 117,
                'startFilePos' => 1114,
                'endTokenPos' => 117,
                'endFilePos' => 1118,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'bool',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 39,
            'endLine' => 39,
            'startColumn' => 50,
            'endColumn' => 75,
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
 * @param Message|MessageInputShape $message
 *
 * @throws MessagingException
 * @throws FirebaseException
 * @throws InvalidArgumentException
 *
 * @return array<array-key, mixed>
 */',
        'startLine' => 39,
        'endLine' => 39,
        'startColumn' => 5,
        'endColumn' => 84,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Kreait\\Firebase\\Contract',
        'declaringClassName' => 'Kreait\\Firebase\\Contract\\Messaging',
        'implementingClassName' => 'Kreait\\Firebase\\Contract\\Messaging',
        'currentClassName' => 'Kreait\\Firebase\\Contract\\Messaging',
        'aliasName' => NULL,
      ),
      'sendMulticast' => 
      array (
        'name' => 'sendMulticast',
        'parameters' => 
        array (
          'message' => 
          array (
            'name' => 'message',
            'default' => NULL,
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
                      'name' => 'Kreait\\Firebase\\Messaging\\Message',
                      'isIdentifier' => false,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'array',
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
            'startLine' => 49,
            'endLine' => 49,
            'startColumn' => 35,
            'endColumn' => 56,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'registrationTokens' => 
          array (
            'name' => 'registrationTokens',
            'default' => NULL,
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
                      'name' => 'Kreait\\Firebase\\Messaging\\RegistrationTokens',
                      'isIdentifier' => false,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'Kreait\\Firebase\\Messaging\\RegistrationToken',
                      'isIdentifier' => false,
                    ),
                  ),
                  2 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'array',
                      'isIdentifier' => true,
                    ),
                  ),
                  3 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'string',
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
            'startLine' => 49,
            'endLine' => 49,
            'startColumn' => 59,
            'endColumn' => 127,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'validateOnly' => 
          array (
            'name' => 'validateOnly',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 49,
                'endLine' => 49,
                'startTokenPos' => 156,
                'startFilePos' => 1723,
                'endTokenPos' => 156,
                'endFilePos' => 1727,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'bool',
                'isIdentifier' => true,
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
            'startColumn' => 130,
            'endColumn' => 155,
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
            'name' => 'Kreait\\Firebase\\Messaging\\MulticastSendReport',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param Message|MessageInputShape $message
 * @param RegistrationTokens|RegistrationToken|list<RegistrationToken|string>|non-empty-string $registrationTokens
 *
 * @throws InvalidArgumentException if the message is invalid or the list of registration tokens is empty
 * @throws MessagingException if the API request failed
 * @throws FirebaseException if something very unexpected happened (never :))
 */',
        'startLine' => 49,
        'endLine' => 49,
        'startColumn' => 5,
        'endColumn' => 178,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Kreait\\Firebase\\Contract',
        'declaringClassName' => 'Kreait\\Firebase\\Contract\\Messaging',
        'implementingClassName' => 'Kreait\\Firebase\\Contract\\Messaging',
        'currentClassName' => 'Kreait\\Firebase\\Contract\\Messaging',
        'aliasName' => NULL,
      ),
      'sendAll' => 
      array (
        'name' => 'sendAll',
        'parameters' => 
        array (
          'messages' => 
          array (
            'name' => 'messages',
            'default' => NULL,
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
                      'name' => 'array',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'Kreait\\Firebase\\Messaging\\Messages',
                      'isIdentifier' => false,
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
            'startLine' => 58,
            'endLine' => 58,
            'startColumn' => 29,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'validateOnly' => 
          array (
            'name' => 'validateOnly',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 58,
                'endLine' => 58,
                'startTokenPos' => 184,
                'startFilePos' => 2124,
                'endTokenPos' => 184,
                'endFilePos' => 2128,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'bool',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 58,
            'endLine' => 58,
            'startColumn' => 55,
            'endColumn' => 80,
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
            'name' => 'Kreait\\Firebase\\Messaging\\MulticastSendReport',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param list<Message|MessageInputShape>|Messages $messages
 *
 * @throws InvalidArgumentException if the message is invalid
 * @throws MessagingException if the API request failed
 * @throws FirebaseException if something very unexpected happened (never :))
 */',
        'startLine' => 58,
        'endLine' => 58,
        'startColumn' => 5,
        'endColumn' => 103,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Kreait\\Firebase\\Contract',
        'declaringClassName' => 'Kreait\\Firebase\\Contract\\Messaging',
        'implementingClassName' => 'Kreait\\Firebase\\Contract\\Messaging',
        'currentClassName' => 'Kreait\\Firebase\\Contract\\Messaging',
        'aliasName' => NULL,
      ),
      'validate' => 
      array (
        'name' => 'validate',
        'parameters' => 
        array (
          'message' => 
          array (
            'name' => 'message',
            'default' => NULL,
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
                      'name' => 'Kreait\\Firebase\\Messaging\\Message',
                      'isIdentifier' => false,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'array',
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
            'startLine' => 70,
            'endLine' => 70,
            'startColumn' => 30,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param Message|MessageInputShape $message
 *
 * @throws InvalidMessage
 * @throws MessagingException
 * @throws FirebaseException
 * @throws InvalidArgumentException
 *
 * @return array<non-empty-string, mixed>
 */',
        'startLine' => 70,
        'endLine' => 70,
        'startColumn' => 5,
        'endColumn' => 60,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Kreait\\Firebase\\Contract',
        'declaringClassName' => 'Kreait\\Firebase\\Contract\\Messaging',
        'implementingClassName' => 'Kreait\\Firebase\\Contract\\Messaging',
        'currentClassName' => 'Kreait\\Firebase\\Contract\\Messaging',
        'aliasName' => NULL,
      ),
      'validateRegistrationTokens' => 
      array (
        'name' => 'validateRegistrationTokens',
        'parameters' => 
        array (
          'registrationTokenOrTokens' => 
          array (
            'name' => 'registrationTokenOrTokens',
            'default' => NULL,
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
                      'name' => 'Kreait\\Firebase\\Messaging\\RegistrationTokens',
                      'isIdentifier' => false,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'Kreait\\Firebase\\Messaging\\RegistrationToken',
                      'isIdentifier' => false,
                    ),
                  ),
                  2 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'array',
                      'isIdentifier' => true,
                    ),
                  ),
                  3 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'string',
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
            'startLine' => 84,
            'endLine' => 84,
            'startColumn' => 48,
            'endColumn' => 123,
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
 * @param RegistrationTokens|RegistrationToken|list<RegistrationToken|non-empty-string>|non-empty-string $registrationTokenOrTokens
 *
 * @throws MessagingException
 * @throws FirebaseException
 *
 * @return array{
 *     valid: list<non-empty-string>,
 *     unknown: list<non-empty-string>,
 *     invalid: list<non-empty-string>
 * }
 */',
        'startLine' => 84,
        'endLine' => 84,
        'startColumn' => 5,
        'endColumn' => 132,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Kreait\\Firebase\\Contract',
        'declaringClassName' => 'Kreait\\Firebase\\Contract\\Messaging',
        'implementingClassName' => 'Kreait\\Firebase\\Contract\\Messaging',
        'currentClassName' => 'Kreait\\Firebase\\Contract\\Messaging',
        'aliasName' => NULL,
      ),
      'subscribeToTopic' => 
      array (
        'name' => 'subscribeToTopic',
        'parameters' => 
        array (
          'topic' => 
          array (
            'name' => 'topic',
            'default' => NULL,
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
                      'name' => 'string',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'Kreait\\Firebase\\Messaging\\Topic',
                      'isIdentifier' => false,
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
            'startLine' => 92,
            'endLine' => 92,
            'startColumn' => 38,
            'endColumn' => 56,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'registrationTokenOrTokens' => 
          array (
            'name' => 'registrationTokenOrTokens',
            'default' => NULL,
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
                      'name' => 'Kreait\\Firebase\\Messaging\\RegistrationTokens',
                      'isIdentifier' => false,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'Kreait\\Firebase\\Messaging\\RegistrationToken',
                      'isIdentifier' => false,
                    ),
                  ),
                  2 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'array',
                      'isIdentifier' => true,
                    ),
                  ),
                  3 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'string',
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
            'startLine' => 92,
            'endLine' => 92,
            'startColumn' => 59,
            'endColumn' => 134,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param Topic|non-empty-string $topic
 * @param RegistrationTokens|RegistrationToken|list<RegistrationToken|non-empty-string>|non-empty-string $registrationTokenOrTokens
 *
 * @return array<string, array<string, string>>
 */',
        'startLine' => 92,
        'endLine' => 92,
        'startColumn' => 5,
        'endColumn' => 143,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Kreait\\Firebase\\Contract',
        'declaringClassName' => 'Kreait\\Firebase\\Contract\\Messaging',
        'implementingClassName' => 'Kreait\\Firebase\\Contract\\Messaging',
        'currentClassName' => 'Kreait\\Firebase\\Contract\\Messaging',
        'aliasName' => NULL,
      ),
      'subscribeToTopics' => 
      array (
        'name' => 'subscribeToTopics',
        'parameters' => 
        array (
          'topics' => 
          array (
            'name' => 'topics',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'iterable',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 100,
            'endLine' => 100,
            'startColumn' => 39,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'registrationTokenOrTokens' => 
          array (
            'name' => 'registrationTokenOrTokens',
            'default' => NULL,
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
                      'name' => 'Kreait\\Firebase\\Messaging\\RegistrationTokens',
                      'isIdentifier' => false,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'Kreait\\Firebase\\Messaging\\RegistrationToken',
                      'isIdentifier' => false,
                    ),
                  ),
                  2 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'array',
                      'isIdentifier' => true,
                    ),
                  ),
                  3 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'string',
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
            'startLine' => 100,
            'endLine' => 100,
            'startColumn' => 57,
            'endColumn' => 132,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param iterable<non-empty-string|Topic> $topics
 * @param RegistrationTokens|RegistrationToken|list<RegistrationToken|non-empty-string>|non-empty-string $registrationTokenOrTokens
 *
 * @return array<string, array<string, string>>
 */',
        'startLine' => 100,
        'endLine' => 100,
        'startColumn' => 5,
        'endColumn' => 141,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Kreait\\Firebase\\Contract',
        'declaringClassName' => 'Kreait\\Firebase\\Contract\\Messaging',
        'implementingClassName' => 'Kreait\\Firebase\\Contract\\Messaging',
        'currentClassName' => 'Kreait\\Firebase\\Contract\\Messaging',
        'aliasName' => NULL,
      ),
      'unsubscribeFromTopic' => 
      array (
        'name' => 'unsubscribeFromTopic',
        'parameters' => 
        array (
          'topic' => 
          array (
            'name' => 'topic',
            'default' => NULL,
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
                      'name' => 'string',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'Kreait\\Firebase\\Messaging\\Topic',
                      'isIdentifier' => false,
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
            'startLine' => 108,
            'endLine' => 108,
            'startColumn' => 42,
            'endColumn' => 60,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'registrationTokenOrTokens' => 
          array (
            'name' => 'registrationTokenOrTokens',
            'default' => NULL,
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
                      'name' => 'Kreait\\Firebase\\Messaging\\RegistrationTokens',
                      'isIdentifier' => false,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'Kreait\\Firebase\\Messaging\\RegistrationToken',
                      'isIdentifier' => false,
                    ),
                  ),
                  2 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'array',
                      'isIdentifier' => true,
                    ),
                  ),
                  3 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'string',
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
            'startLine' => 108,
            'endLine' => 108,
            'startColumn' => 63,
            'endColumn' => 138,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param Topic|non-empty-string $topic
 * @param RegistrationTokens|RegistrationToken|list<RegistrationToken|non-empty-string>|non-empty-string $registrationTokenOrTokens
 *
 * @return array<string, array<string, string>>
 */',
        'startLine' => 108,
        'endLine' => 108,
        'startColumn' => 5,
        'endColumn' => 147,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Kreait\\Firebase\\Contract',
        'declaringClassName' => 'Kreait\\Firebase\\Contract\\Messaging',
        'implementingClassName' => 'Kreait\\Firebase\\Contract\\Messaging',
        'currentClassName' => 'Kreait\\Firebase\\Contract\\Messaging',
        'aliasName' => NULL,
      ),
      'unsubscribeFromTopics' => 
      array (
        'name' => 'unsubscribeFromTopics',
        'parameters' => 
        array (
          'topics' => 
          array (
            'name' => 'topics',
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
            'startLine' => 116,
            'endLine' => 116,
            'startColumn' => 43,
            'endColumn' => 55,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'registrationTokenOrTokens' => 
          array (
            'name' => 'registrationTokenOrTokens',
            'default' => NULL,
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
                      'name' => 'Kreait\\Firebase\\Messaging\\RegistrationTokens',
                      'isIdentifier' => false,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'Kreait\\Firebase\\Messaging\\RegistrationToken',
                      'isIdentifier' => false,
                    ),
                  ),
                  2 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'array',
                      'isIdentifier' => true,
                    ),
                  ),
                  3 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'string',
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
            'startLine' => 116,
            'endLine' => 116,
            'startColumn' => 58,
            'endColumn' => 133,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param array<non-empty-string|Topic> $topics
 * @param RegistrationTokens|RegistrationToken|list<RegistrationToken|non-empty-string>|non-empty-string $registrationTokenOrTokens
 *
 * @return array<string, array<string, string>>
 */',
        'startLine' => 116,
        'endLine' => 116,
        'startColumn' => 5,
        'endColumn' => 142,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Kreait\\Firebase\\Contract',
        'declaringClassName' => 'Kreait\\Firebase\\Contract\\Messaging',
        'implementingClassName' => 'Kreait\\Firebase\\Contract\\Messaging',
        'currentClassName' => 'Kreait\\Firebase\\Contract\\Messaging',
        'aliasName' => NULL,
      ),
      'unsubscribeFromAllTopics' => 
      array (
        'name' => 'unsubscribeFromAllTopics',
        'parameters' => 
        array (
          'registrationTokenOrTokens' => 
          array (
            'name' => 'registrationTokenOrTokens',
            'default' => NULL,
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
                      'name' => 'Kreait\\Firebase\\Messaging\\RegistrationTokens',
                      'isIdentifier' => false,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'Kreait\\Firebase\\Messaging\\RegistrationToken',
                      'isIdentifier' => false,
                    ),
                  ),
                  2 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'array',
                      'isIdentifier' => true,
                    ),
                  ),
                  3 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'string',
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
            'startLine' => 123,
            'endLine' => 123,
            'startColumn' => 46,
            'endColumn' => 121,
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
 * @param RegistrationTokens|RegistrationToken|list<RegistrationToken|non-empty-string>|non-empty-string $registrationTokenOrTokens
 *
 * @return array<string, array<string, string>>
 */',
        'startLine' => 123,
        'endLine' => 123,
        'startColumn' => 5,
        'endColumn' => 130,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Kreait\\Firebase\\Contract',
        'declaringClassName' => 'Kreait\\Firebase\\Contract\\Messaging',
        'implementingClassName' => 'Kreait\\Firebase\\Contract\\Messaging',
        'currentClassName' => 'Kreait\\Firebase\\Contract\\Messaging',
        'aliasName' => NULL,
      ),
      'getAppInstance' => 
      array (
        'name' => 'getAppInstance',
        'parameters' => 
        array (
          'registrationToken' => 
          array (
            'name' => 'registrationToken',
            'default' => NULL,
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
                      'name' => 'Kreait\\Firebase\\Messaging\\RegistrationToken',
                      'isIdentifier' => false,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'string',
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
            'startLine' => 133,
            'endLine' => 133,
            'startColumn' => 36,
            'endColumn' => 78,
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
            'name' => 'Kreait\\Firebase\\Messaging\\AppInstance',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @see https://developers.google.com/instance-id/reference/server#results
 *
 * @param RegistrationToken|non-empty-string $registrationToken
 *
 * @throws InvalidArgument if the registration token is invalid
 * @throws MessagingException
 */',
        'startLine' => 133,
        'endLine' => 133,
        'startColumn' => 5,
        'endColumn' => 93,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Kreait\\Firebase\\Contract',
        'declaringClassName' => 'Kreait\\Firebase\\Contract\\Messaging',
        'implementingClassName' => 'Kreait\\Firebase\\Contract\\Messaging',
        'currentClassName' => 'Kreait\\Firebase\\Contract\\Messaging',
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
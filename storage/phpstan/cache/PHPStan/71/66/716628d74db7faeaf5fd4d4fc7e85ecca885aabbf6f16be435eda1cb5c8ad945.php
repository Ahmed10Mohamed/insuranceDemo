<?php declare(strict_types = 1);

// osfsl-E:/mywork/laragon/www/MohammedSA/naqliyahtak/vendor/composer/../twilio/sdk/src/Twilio/Rest/Client.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Twilio\Rest\Client
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-85833349a29e2d9d7c78df4d8516555f0497eba0545246cf42af0f669d4c1f84-8.2.29-6.70.0.0',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Twilio\\Rest\\Client',
        'filename' => 'E:/mywork/laragon/www/MohammedSA/naqliyahtak/vendor/composer/../twilio/sdk/src/Twilio/Rest/Client.php',
      ),
    ),
    'namespace' => 'Twilio\\Rest',
    'name' => 'Twilio\\Rest\\Client',
    'shortName' => 'Client',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * A client for accessing the Twilio API.
 *
 * @property Accounts $accounts
 * @property Api $api
 * @property Assistants $assistants
 * @property Bulkexports $bulkexports
 * @property Chat $chat
 * @property Content $content
 * @property Conversations $conversations
 * @property Events $events
 * @property FlexApi $flexApi
 * @property FrontlineApi $frontlineApi
 * @property PreviewIam $previewIam
 * @property Iam $iam
 * @property Insights $insights
 * @property Intelligence $intelligence
 * @property IpMessaging $ipMessaging
 * @property Lookups $lookups
 * @property Marketplace $marketplace
 * @property Messaging $messaging
 * @property Monitor $monitor
 * @property Notify $notify
 * @property Numbers $numbers
 * @property Oauth $oauth
 * @property Preview $preview
 * @property Pricing $pricing
 * @property Proxy $proxy
 * @property Routes $routes
 * @property Serverless $serverless
 * @property Studio $studio
 * @property Supersim $supersim
 * @property Sync $sync
 * @property Taskrouter $taskrouter
 * @property Trunking $trunking
 * @property Trusthub $trusthub
 * @property Verify $verify
 * @property Video $video
 * @property Voice $voice
 * @property Wireless $wireless
 * @property \\Twilio\\Rest\\Api\\V2010\\Account\\AddressList $addresses
 * @property \\Twilio\\Rest\\Api\\V2010\\Account\\ApplicationList $applications
 * @property \\Twilio\\Rest\\Api\\V2010\\Account\\AuthorizedConnectAppList $authorizedConnectApps
 * @property \\Twilio\\Rest\\Api\\V2010\\Account\\AvailablePhoneNumberCountryList $availablePhoneNumbers
 * @property \\Twilio\\Rest\\Api\\V2010\\Account\\BalanceList $balance
 * @property \\Twilio\\Rest\\Api\\V2010\\Account\\CallList $calls
 * @property \\Twilio\\Rest\\Api\\V2010\\Account\\ConferenceList $conferences
 * @property \\Twilio\\Rest\\Api\\V2010\\Account\\ConnectAppList $connectApps
 * @property \\Twilio\\Rest\\Api\\V2010\\Account\\IncomingPhoneNumberList $incomingPhoneNumbers
 * @property \\Twilio\\Rest\\Api\\V2010\\Account\\KeyList $keys
 * @property \\Twilio\\Rest\\Api\\V2010\\Account\\MessageList $messages
 * @property \\Twilio\\Rest\\Api\\V2010\\Account\\NewKeyList $newKeys
 * @property \\Twilio\\Rest\\Api\\V2010\\Account\\NewSigningKeyList $newSigningKeys
 * @property \\Twilio\\Rest\\Api\\V2010\\Account\\NotificationList $notifications
 * @property \\Twilio\\Rest\\Api\\V2010\\Account\\OutgoingCallerIdList $outgoingCallerIds
 * @property \\Twilio\\Rest\\Api\\V2010\\Account\\QueueList $queues
 * @property \\Twilio\\Rest\\Api\\V2010\\Account\\RecordingList $recordings
 * @property \\Twilio\\Rest\\Api\\V2010\\Account\\ShortCodeList $shortCodes
 * @property \\Twilio\\Rest\\Api\\V2010\\Account\\SigningKeyList $signingKeys
 * @property \\Twilio\\Rest\\Api\\V2010\\Account\\SipList $sip
 * @property \\Twilio\\Rest\\Api\\V2010\\Account\\TokenList $tokens
 * @property \\Twilio\\Rest\\Api\\V2010\\Account\\TranscriptionList $transcriptions
 * @property \\Twilio\\Rest\\Api\\V2010\\Account\\UsageList $usage
 * @property \\Twilio\\Rest\\Api\\V2010\\Account\\ValidationRequestList $validationRequests
 * @method \\Twilio\\Rest\\Api\\V2010\\Account\\AddressContext Addresses(string $sid)
 * @method \\Twilio\\Rest\\Api\\V2010\\Account\\ApplicationContext Applications(string $sid)
 * @method \\Twilio\\Rest\\Api\\V2010\\Account\\AuthorizedConnectAppContext AuthorizedConnectApps(string $connectAppSid)
 * @method \\Twilio\\Rest\\Api\\V2010\\Account\\AvailablePhoneNumberCountryContext AvailablePhoneNumbers(string $countryCode)
 * @method \\Twilio\\Rest\\Api\\V2010\\Account\\CallContext Calls(string $sid)
 * @method \\Twilio\\Rest\\Api\\V2010\\Account\\ConferenceContext Conferences(string $sid)
 * @method \\Twilio\\Rest\\Api\\V2010\\Account\\ConnectAppContext ConnectApps(string $sid)
 * @method \\Twilio\\Rest\\Api\\V2010\\Account\\IncomingPhoneNumberContext IncomingPhoneNumbers(string $sid)
 * @method \\Twilio\\Rest\\Api\\V2010\\Account\\KeyContext Keys(string $sid)
 * @method \\Twilio\\Rest\\Api\\V2010\\Account\\MessageContext Messages(string $sid)
 * @method \\Twilio\\Rest\\Api\\V2010\\Account\\NotificationContext Notifications(string $sid)
 * @method \\Twilio\\Rest\\Api\\V2010\\Account\\OutgoingCallerIdContext OutgoingCallerIds(string $sid)
 * @method \\Twilio\\Rest\\Api\\V2010\\Account\\QueueContext Queues(string $sid)
 * @method \\Twilio\\Rest\\Api\\V2010\\Account\\RecordingContext Recordings(string $sid)
 * @method \\Twilio\\Rest\\Api\\V2010\\Account\\ShortCodeContext ShortCodes(string $sid)
 * @method \\Twilio\\Rest\\Api\\V2010\\Account\\SigningKeyContext SigningKeys(string $sid)
 * @method \\Twilio\\Rest\\Api\\V2010\\Account\\TranscriptionContext Transcriptions(string $sid)
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 101,
    'endLine' => 721,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Twilio\\Base\\BaseClient',
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
      '_accounts' => 
      array (
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'name' => '_accounts',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 102,
        'endLine' => 102,
        'startColumn' => 5,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_api' => 
      array (
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'name' => '_api',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 103,
        'endLine' => 103,
        'startColumn' => 5,
        'endColumn' => 20,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_assistants' => 
      array (
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'name' => '_assistants',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 104,
        'endLine' => 104,
        'startColumn' => 5,
        'endColumn' => 27,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_bulkexports' => 
      array (
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'name' => '_bulkexports',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 105,
        'endLine' => 105,
        'startColumn' => 5,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_chat' => 
      array (
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'name' => '_chat',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 106,
        'endLine' => 106,
        'startColumn' => 5,
        'endColumn' => 21,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_content' => 
      array (
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'name' => '_content',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 107,
        'endLine' => 107,
        'startColumn' => 5,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_conversations' => 
      array (
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'name' => '_conversations',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 108,
        'endLine' => 108,
        'startColumn' => 5,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_events' => 
      array (
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'name' => '_events',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 109,
        'endLine' => 109,
        'startColumn' => 5,
        'endColumn' => 23,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_flexApi' => 
      array (
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'name' => '_flexApi',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 110,
        'endLine' => 110,
        'startColumn' => 5,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_frontlineApi' => 
      array (
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'name' => '_frontlineApi',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 111,
        'endLine' => 111,
        'startColumn' => 5,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_previewIam' => 
      array (
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'name' => '_previewIam',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 112,
        'endLine' => 112,
        'startColumn' => 5,
        'endColumn' => 27,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_iam' => 
      array (
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'name' => '_iam',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 113,
        'endLine' => 113,
        'startColumn' => 5,
        'endColumn' => 20,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_insights' => 
      array (
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'name' => '_insights',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 114,
        'endLine' => 114,
        'startColumn' => 5,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_intelligence' => 
      array (
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'name' => '_intelligence',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 115,
        'endLine' => 115,
        'startColumn' => 5,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_ipMessaging' => 
      array (
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'name' => '_ipMessaging',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 116,
        'endLine' => 116,
        'startColumn' => 5,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_lookups' => 
      array (
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'name' => '_lookups',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 117,
        'endLine' => 117,
        'startColumn' => 5,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_marketplace' => 
      array (
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'name' => '_marketplace',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 118,
        'endLine' => 118,
        'startColumn' => 5,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_messaging' => 
      array (
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'name' => '_messaging',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 119,
        'endLine' => 119,
        'startColumn' => 5,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_monitor' => 
      array (
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'name' => '_monitor',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 120,
        'endLine' => 120,
        'startColumn' => 5,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_notify' => 
      array (
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'name' => '_notify',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 121,
        'endLine' => 121,
        'startColumn' => 5,
        'endColumn' => 23,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_numbers' => 
      array (
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'name' => '_numbers',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 122,
        'endLine' => 122,
        'startColumn' => 5,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_oauth' => 
      array (
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'name' => '_oauth',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 123,
        'endLine' => 123,
        'startColumn' => 5,
        'endColumn' => 22,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_preview' => 
      array (
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'name' => '_preview',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 124,
        'endLine' => 124,
        'startColumn' => 5,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_pricing' => 
      array (
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'name' => '_pricing',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 125,
        'endLine' => 125,
        'startColumn' => 5,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_proxy' => 
      array (
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'name' => '_proxy',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 126,
        'endLine' => 126,
        'startColumn' => 5,
        'endColumn' => 22,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_routes' => 
      array (
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'name' => '_routes',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 127,
        'endLine' => 127,
        'startColumn' => 5,
        'endColumn' => 23,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_serverless' => 
      array (
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'name' => '_serverless',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 128,
        'endLine' => 128,
        'startColumn' => 5,
        'endColumn' => 27,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_studio' => 
      array (
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'name' => '_studio',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 129,
        'endLine' => 129,
        'startColumn' => 5,
        'endColumn' => 23,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_supersim' => 
      array (
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'name' => '_supersim',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 130,
        'endLine' => 130,
        'startColumn' => 5,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_sync' => 
      array (
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'name' => '_sync',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 131,
        'endLine' => 131,
        'startColumn' => 5,
        'endColumn' => 21,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_taskrouter' => 
      array (
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'name' => '_taskrouter',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 132,
        'endLine' => 132,
        'startColumn' => 5,
        'endColumn' => 27,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_trunking' => 
      array (
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'name' => '_trunking',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 133,
        'endLine' => 133,
        'startColumn' => 5,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_trusthub' => 
      array (
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'name' => '_trusthub',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 134,
        'endLine' => 134,
        'startColumn' => 5,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_verify' => 
      array (
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'name' => '_verify',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 135,
        'endLine' => 135,
        'startColumn' => 5,
        'endColumn' => 23,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_video' => 
      array (
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'name' => '_video',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 136,
        'endLine' => 136,
        'startColumn' => 5,
        'endColumn' => 22,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_voice' => 
      array (
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'name' => '_voice',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 137,
        'endLine' => 137,
        'startColumn' => 5,
        'endColumn' => 22,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      '_wireless' => 
      array (
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'name' => '_wireless',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 138,
        'endLine' => 138,
        'startColumn' => 5,
        'endColumn' => 25,
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
            'name' => 'Twilio\\Rest\\Accounts',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Access the Accounts Twilio Domain
 *
 * @return Accounts Accounts Twilio Domain
 */',
        'startLine' => 145,
        'endLine' => 150,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
        'aliasName' => NULL,
      ),
      'getApi' => 
      array (
        'name' => 'getApi',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Api',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Access the Api Twilio Domain
 *
 * @return Api Api Twilio Domain
 */',
        'startLine' => 156,
        'endLine' => 161,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
        'aliasName' => NULL,
      ),
      'getAssistants' => 
      array (
        'name' => 'getAssistants',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Assistants',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Access the Assistants Twilio Domain
 *
 * @return Assistants Assistants Twilio Domain
 */',
        'startLine' => 167,
        'endLine' => 172,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
        'aliasName' => NULL,
      ),
      'getBulkexports' => 
      array (
        'name' => 'getBulkexports',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Bulkexports',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Access the Bulkexports Twilio Domain
 *
 * @return Bulkexports Bulkexports Twilio Domain
 */',
        'startLine' => 178,
        'endLine' => 183,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
        'aliasName' => NULL,
      ),
      'getChat' => 
      array (
        'name' => 'getChat',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Chat',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Access the Chat Twilio Domain
 *
 * @return Chat Chat Twilio Domain
 */',
        'startLine' => 189,
        'endLine' => 194,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
        'aliasName' => NULL,
      ),
      'getContent' => 
      array (
        'name' => 'getContent',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Content',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Access the Content Twilio Domain
 *
 * @return Content Content Twilio Domain
 */',
        'startLine' => 200,
        'endLine' => 205,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
        'aliasName' => NULL,
      ),
      'getConversations' => 
      array (
        'name' => 'getConversations',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Conversations',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Access the Conversations Twilio Domain
 *
 * @return Conversations Conversations Twilio Domain
 */',
        'startLine' => 211,
        'endLine' => 216,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
        'aliasName' => NULL,
      ),
      'getEvents' => 
      array (
        'name' => 'getEvents',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Events',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Access the Events Twilio Domain
 *
 * @return Events Events Twilio Domain
 */',
        'startLine' => 222,
        'endLine' => 227,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
        'aliasName' => NULL,
      ),
      'getFlexApi' => 
      array (
        'name' => 'getFlexApi',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\FlexApi',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Access the FlexApi Twilio Domain
 *
 * @return FlexApi FlexApi Twilio Domain
 */',
        'startLine' => 233,
        'endLine' => 238,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
        'aliasName' => NULL,
      ),
      'getFrontlineApi' => 
      array (
        'name' => 'getFrontlineApi',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\FrontlineApi',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Access the FrontlineApi Twilio Domain
 *
 * @return FrontlineApi FrontlineApi Twilio Domain
 */',
        'startLine' => 244,
        'endLine' => 249,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
        'aliasName' => NULL,
      ),
      'getPreviewIam' => 
      array (
        'name' => 'getPreviewIam',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\PreviewIam',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Access the PreviewIam Twilio Domain
 *
 * @return PreviewIam PreviewIam Twilio Domain
 */',
        'startLine' => 255,
        'endLine' => 260,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
        'aliasName' => NULL,
      ),
      'getIam' => 
      array (
        'name' => 'getIam',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Iam',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Access the Iam Twilio Domain
 *
 * @return Iam Iam Twilio Domain
 */',
        'startLine' => 266,
        'endLine' => 271,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
        'aliasName' => NULL,
      ),
      'getInsights' => 
      array (
        'name' => 'getInsights',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Insights',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Access the Insights Twilio Domain
 *
 * @return Insights Insights Twilio Domain
 */',
        'startLine' => 277,
        'endLine' => 282,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
        'aliasName' => NULL,
      ),
      'getIntelligence' => 
      array (
        'name' => 'getIntelligence',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Intelligence',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Access the Intelligence Twilio Domain
 *
 * @return Intelligence Intelligence Twilio Domain
 */',
        'startLine' => 288,
        'endLine' => 293,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
        'aliasName' => NULL,
      ),
      'getIpMessaging' => 
      array (
        'name' => 'getIpMessaging',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\IpMessaging',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Access the IpMessaging Twilio Domain
 *
 * @return IpMessaging IpMessaging Twilio Domain
 */',
        'startLine' => 299,
        'endLine' => 304,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
        'aliasName' => NULL,
      ),
      'getLookups' => 
      array (
        'name' => 'getLookups',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Lookups',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Access the Lookups Twilio Domain
 *
 * @return Lookups Lookups Twilio Domain
 */',
        'startLine' => 310,
        'endLine' => 315,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
        'aliasName' => NULL,
      ),
      'getMarketplace' => 
      array (
        'name' => 'getMarketplace',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Marketplace',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Access the Marketplace Twilio Domain
 *
 * @return Marketplace Marketplace Twilio Domain
 */',
        'startLine' => 321,
        'endLine' => 326,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
        'aliasName' => NULL,
      ),
      'getMessaging' => 
      array (
        'name' => 'getMessaging',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Messaging',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Access the Messaging Twilio Domain
 *
 * @return Messaging Messaging Twilio Domain
 */',
        'startLine' => 332,
        'endLine' => 337,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
        'aliasName' => NULL,
      ),
      'getMonitor' => 
      array (
        'name' => 'getMonitor',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Monitor',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Access the Monitor Twilio Domain
 *
 * @return Monitor Monitor Twilio Domain
 */',
        'startLine' => 343,
        'endLine' => 348,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
        'aliasName' => NULL,
      ),
      'getNotify' => 
      array (
        'name' => 'getNotify',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Notify',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Access the Notify Twilio Domain
 *
 * @return Notify Notify Twilio Domain
 */',
        'startLine' => 354,
        'endLine' => 359,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
        'aliasName' => NULL,
      ),
      'getNumbers' => 
      array (
        'name' => 'getNumbers',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Numbers',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Access the Numbers Twilio Domain
 *
 * @return Numbers Numbers Twilio Domain
 */',
        'startLine' => 365,
        'endLine' => 370,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
        'aliasName' => NULL,
      ),
      'getOauth' => 
      array (
        'name' => 'getOauth',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Oauth',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Access the Oauth Twilio Domain
 *
 * @return Oauth Oauth Twilio Domain
 */',
        'startLine' => 376,
        'endLine' => 381,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
        'aliasName' => NULL,
      ),
      'getPreview' => 
      array (
        'name' => 'getPreview',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Preview',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Access the Preview Twilio Domain
 *
 * @return Preview Preview Twilio Domain
 */',
        'startLine' => 387,
        'endLine' => 392,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
        'aliasName' => NULL,
      ),
      'getPricing' => 
      array (
        'name' => 'getPricing',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Pricing',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Access the Pricing Twilio Domain
 *
 * @return Pricing Pricing Twilio Domain
 */',
        'startLine' => 398,
        'endLine' => 403,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
        'aliasName' => NULL,
      ),
      'getProxy' => 
      array (
        'name' => 'getProxy',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Proxy',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Access the Proxy Twilio Domain
 *
 * @return Proxy Proxy Twilio Domain
 */',
        'startLine' => 409,
        'endLine' => 414,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
        'aliasName' => NULL,
      ),
      'getRoutes' => 
      array (
        'name' => 'getRoutes',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Routes',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Access the Routes Twilio Domain
 *
 * @return Routes Routes Twilio Domain
 */',
        'startLine' => 420,
        'endLine' => 425,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
        'aliasName' => NULL,
      ),
      'getServerless' => 
      array (
        'name' => 'getServerless',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Serverless',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Access the Serverless Twilio Domain
 *
 * @return Serverless Serverless Twilio Domain
 */',
        'startLine' => 431,
        'endLine' => 436,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
        'aliasName' => NULL,
      ),
      'getStudio' => 
      array (
        'name' => 'getStudio',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Studio',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Access the Studio Twilio Domain
 *
 * @return Studio Studio Twilio Domain
 */',
        'startLine' => 442,
        'endLine' => 447,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
        'aliasName' => NULL,
      ),
      'getSupersim' => 
      array (
        'name' => 'getSupersim',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Supersim',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Access the Supersim Twilio Domain
 *
 * @return Supersim Supersim Twilio Domain
 */',
        'startLine' => 453,
        'endLine' => 458,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
        'aliasName' => NULL,
      ),
      'getSync' => 
      array (
        'name' => 'getSync',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Sync',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Access the Sync Twilio Domain
 *
 * @return Sync Sync Twilio Domain
 */',
        'startLine' => 464,
        'endLine' => 469,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
        'aliasName' => NULL,
      ),
      'getTaskrouter' => 
      array (
        'name' => 'getTaskrouter',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Taskrouter',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Access the Taskrouter Twilio Domain
 *
 * @return Taskrouter Taskrouter Twilio Domain
 */',
        'startLine' => 475,
        'endLine' => 480,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
        'aliasName' => NULL,
      ),
      'getTrunking' => 
      array (
        'name' => 'getTrunking',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Trunking',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Access the Trunking Twilio Domain
 *
 * @return Trunking Trunking Twilio Domain
 */',
        'startLine' => 486,
        'endLine' => 491,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
        'aliasName' => NULL,
      ),
      'getTrusthub' => 
      array (
        'name' => 'getTrusthub',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Trusthub',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Access the Trusthub Twilio Domain
 *
 * @return Trusthub Trusthub Twilio Domain
 */',
        'startLine' => 497,
        'endLine' => 502,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
        'aliasName' => NULL,
      ),
      'getVerify' => 
      array (
        'name' => 'getVerify',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Verify',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Access the Verify Twilio Domain
 *
 * @return Verify Verify Twilio Domain
 */',
        'startLine' => 508,
        'endLine' => 513,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
        'aliasName' => NULL,
      ),
      'getVideo' => 
      array (
        'name' => 'getVideo',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Video',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Access the Video Twilio Domain
 *
 * @return Video Video Twilio Domain
 */',
        'startLine' => 519,
        'endLine' => 524,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
        'aliasName' => NULL,
      ),
      'getVoice' => 
      array (
        'name' => 'getVoice',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Voice',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Access the Voice Twilio Domain
 *
 * @return Voice Voice Twilio Domain
 */',
        'startLine' => 530,
        'endLine' => 535,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
        'aliasName' => NULL,
      ),
      'getWireless' => 
      array (
        'name' => 'getWireless',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Twilio\\Rest\\Wireless',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Access the Wireless Twilio Domain
 *
 * @return Wireless Wireless Twilio Domain
 */',
        'startLine' => 541,
        'endLine' => 546,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
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
        'docComment' => NULL,
        'startLine' => 547,
        'endLine' => 549,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
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
            'startLine' => 553,
            'endLine' => 553,
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
 * @param string $sid The Twilio-provided string that uniquely identifies the Address resource to fetch.
 */',
        'startLine' => 553,
        'endLine' => 555,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
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
        'docComment' => NULL,
        'startLine' => 556,
        'endLine' => 558,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
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
            'startLine' => 562,
            'endLine' => 562,
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
 * @param string $sid The Twilio-provided string that uniquely identifies the Application resource to fetch.
 */',
        'startLine' => 562,
        'endLine' => 564,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
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
        'docComment' => NULL,
        'startLine' => 565,
        'endLine' => 567,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
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
            'startLine' => 571,
            'endLine' => 571,
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
 * @param string $connectAppSid The SID of the Connect App to fetch.
 */',
        'startLine' => 571,
        'endLine' => 573,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
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
        'docComment' => NULL,
        'startLine' => 574,
        'endLine' => 576,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
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
            'startLine' => 580,
            'endLine' => 580,
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
 * @param string $countryCode The [ISO-3166-1](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country code of the country to fetch available phone number information about.
 */',
        'startLine' => 580,
        'endLine' => 582,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
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
        'docComment' => NULL,
        'startLine' => 583,
        'endLine' => 585,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
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
        'docComment' => NULL,
        'startLine' => 586,
        'endLine' => 588,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
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
            'startLine' => 592,
            'endLine' => 592,
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
 * @param string $sid The SID of the Call resource to fetch.
 */',
        'startLine' => 592,
        'endLine' => 594,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
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
        'docComment' => NULL,
        'startLine' => 595,
        'endLine' => 597,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
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
            'startLine' => 601,
            'endLine' => 601,
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
 * @param string $sid The Twilio-provided string that uniquely identifies the Conference resource to fetch
 */',
        'startLine' => 601,
        'endLine' => 603,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
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
        'docComment' => NULL,
        'startLine' => 604,
        'endLine' => 606,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
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
            'startLine' => 610,
            'endLine' => 610,
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
 * @param string $sid The Twilio-provided string that uniquely identifies the ConnectApp resource to fetch.
 */',
        'startLine' => 610,
        'endLine' => 612,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
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
        'docComment' => NULL,
        'startLine' => 613,
        'endLine' => 615,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
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
            'startLine' => 619,
            'endLine' => 619,
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
 * @param string $sid The Twilio-provided string that uniquely identifies the IncomingPhoneNumber resource to fetch.
 */',
        'startLine' => 619,
        'endLine' => 621,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
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
        'docComment' => NULL,
        'startLine' => 622,
        'endLine' => 624,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
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
            'startLine' => 628,
            'endLine' => 628,
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
 * @param string $sid The Twilio-provided string that uniquely identifies the Key resource to fetch.
 */',
        'startLine' => 628,
        'endLine' => 630,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
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
        'docComment' => NULL,
        'startLine' => 631,
        'endLine' => 633,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
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
            'startLine' => 637,
            'endLine' => 637,
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
 * @param string $sid The SID of the Message resource to be fetched
 */',
        'startLine' => 637,
        'endLine' => 639,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
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
        'docComment' => NULL,
        'startLine' => 640,
        'endLine' => 642,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
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
        'docComment' => NULL,
        'startLine' => 643,
        'endLine' => 645,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
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
        'docComment' => NULL,
        'startLine' => 646,
        'endLine' => 648,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
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
            'startLine' => 652,
            'endLine' => 652,
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
 * @param string $sid The Twilio-provided string that uniquely identifies the Notification resource to fetch.
 */',
        'startLine' => 652,
        'endLine' => 654,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
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
        'docComment' => NULL,
        'startLine' => 655,
        'endLine' => 657,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
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
            'startLine' => 661,
            'endLine' => 661,
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
 * @param string $sid The Twilio-provided string that uniquely identifies the OutgoingCallerId resource to fetch.
 */',
        'startLine' => 661,
        'endLine' => 663,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
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
        'docComment' => NULL,
        'startLine' => 664,
        'endLine' => 666,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
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
            'startLine' => 670,
            'endLine' => 670,
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
 * @param string $sid The Twilio-provided string that uniquely identifies the Queue resource to fetch
 */',
        'startLine' => 670,
        'endLine' => 672,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
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
        'docComment' => NULL,
        'startLine' => 673,
        'endLine' => 675,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
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
            'startLine' => 679,
            'endLine' => 679,
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
 * @param string $sid The Twilio-provided string that uniquely identifies the Recording resource to fetch.
 */',
        'startLine' => 679,
        'endLine' => 681,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
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
        'docComment' => NULL,
        'startLine' => 682,
        'endLine' => 684,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
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
            'startLine' => 688,
            'endLine' => 688,
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
 * @param string $sid The Twilio-provided string that uniquely identifies the ShortCode resource to fetch
 */',
        'startLine' => 688,
        'endLine' => 690,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
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
        'docComment' => NULL,
        'startLine' => 691,
        'endLine' => 693,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
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
            'startLine' => 697,
            'endLine' => 697,
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
 * @param string $sid The sid
 */',
        'startLine' => 697,
        'endLine' => 699,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
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
        'docComment' => NULL,
        'startLine' => 700,
        'endLine' => 702,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
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
        'docComment' => NULL,
        'startLine' => 703,
        'endLine' => 705,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
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
        'docComment' => NULL,
        'startLine' => 706,
        'endLine' => 708,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
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
            'startLine' => 712,
            'endLine' => 712,
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
 * @param string $sid The Twilio-provided string that uniquely identifies the Transcription resource to fetch.
 */',
        'startLine' => 712,
        'endLine' => 714,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
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
        'docComment' => NULL,
        'startLine' => 715,
        'endLine' => 717,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
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
        'docComment' => NULL,
        'startLine' => 718,
        'endLine' => 720,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Twilio\\Rest',
        'declaringClassName' => 'Twilio\\Rest\\Client',
        'implementingClassName' => 'Twilio\\Rest\\Client',
        'currentClassName' => 'Twilio\\Rest\\Client',
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
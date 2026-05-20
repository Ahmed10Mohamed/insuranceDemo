<?php declare(strict_types = 1);

// osfsl-E:/mywork/laragon/www/MohammedSA/naqliyahtak/vendor/composer/../laravel/framework/src/Illuminate/Foundation/Bus/PendingDispatch.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Foundation\Bus\PendingDispatch
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-e8e21bfa7d1059133b35380d2641a84f4ac668738bba136a0aaf6fe5ed5eaab8-8.2.29-6.70.0.0',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'filename' => 'E:/mywork/laragon/www/MohammedSA/naqliyahtak/vendor/composer/../laravel/framework/src/Illuminate/Foundation/Bus/PendingDispatch.php',
      ),
    ),
    'namespace' => 'Illuminate\\Foundation\\Bus',
    'name' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
    'shortName' => 'PendingDispatch',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 12,
    'endLine' => 241,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'Illuminate\\Foundation\\Queue\\InteractsWithUniqueJobs',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'job' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'implementingClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'name' => 'job',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The job.
 *
 * @var mixed
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 21,
        'endLine' => 21,
        'startColumn' => 5,
        'endColumn' => 19,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'afterResponse' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'implementingClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'name' => 'afterResponse',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 28,
            'endLine' => 28,
            'startTokenPos' => 67,
            'startFilePos' => 606,
            'endTokenPos' => 67,
            'endFilePos' => 610,
          ),
        ),
        'docComment' => '/**
 * Indicates if the job should be dispatched immediately after sending the response.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 28,
        'endLine' => 28,
        'startColumn' => 5,
        'endColumn' => 37,
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
          'job' => 
          array (
            'name' => 'job',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 35,
            'endLine' => 35,
            'startColumn' => 33,
            'endColumn' => 36,
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
 * Create a new pending job dispatch.
 *
 * @param  mixed  $job
 */',
        'startLine' => 35,
        'endLine' => 38,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Bus',
        'declaringClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'implementingClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'currentClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'aliasName' => NULL,
      ),
      'onConnection' => 
      array (
        'name' => 'onConnection',
        'parameters' => 
        array (
          'connection' => 
          array (
            'name' => 'connection',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 46,
            'endLine' => 46,
            'startColumn' => 34,
            'endColumn' => 44,
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
 * Set the desired connection for the job.
 *
 * @param  \\BackedEnum|string|null  $connection
 * @return $this
 */',
        'startLine' => 46,
        'endLine' => 51,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Bus',
        'declaringClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'implementingClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'currentClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'aliasName' => NULL,
      ),
      'onQueue' => 
      array (
        'name' => 'onQueue',
        'parameters' => 
        array (
          'queue' => 
          array (
            'name' => 'queue',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 59,
            'endLine' => 59,
            'startColumn' => 29,
            'endColumn' => 34,
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
 * Set the desired queue for the job.
 *
 * @param  \\BackedEnum|string|null  $queue
 * @return $this
 */',
        'startLine' => 59,
        'endLine' => 64,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Bus',
        'declaringClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'implementingClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'currentClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'aliasName' => NULL,
      ),
      'onGroup' => 
      array (
        'name' => 'onGroup',
        'parameters' => 
        array (
          'group' => 
          array (
            'name' => 'group',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 74,
            'endLine' => 74,
            'startColumn' => 29,
            'endColumn' => 34,
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
 * Set the desired job "group".
 *
 * This feature is only supported by some queues, such as Amazon SQS.
 *
 * @param  \\UnitEnum|string  $group
 * @return $this
 */',
        'startLine' => 74,
        'endLine' => 79,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Bus',
        'declaringClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'implementingClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'currentClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'aliasName' => NULL,
      ),
      'allOnConnection' => 
      array (
        'name' => 'allOnConnection',
        'parameters' => 
        array (
          'connection' => 
          array (
            'name' => 'connection',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 87,
            'endLine' => 87,
            'startColumn' => 37,
            'endColumn' => 47,
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
 * Set the desired connection for the chain.
 *
 * @param  \\BackedEnum|string|null  $connection
 * @return $this
 */',
        'startLine' => 87,
        'endLine' => 92,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Bus',
        'declaringClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'implementingClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'currentClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'aliasName' => NULL,
      ),
      'allOnQueue' => 
      array (
        'name' => 'allOnQueue',
        'parameters' => 
        array (
          'queue' => 
          array (
            'name' => 'queue',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 100,
            'endLine' => 100,
            'startColumn' => 32,
            'endColumn' => 37,
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
 * Set the desired queue for the chain.
 *
 * @param  \\BackedEnum|string|null  $queue
 * @return $this
 */',
        'startLine' => 100,
        'endLine' => 105,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Bus',
        'declaringClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'implementingClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'currentClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'aliasName' => NULL,
      ),
      'delay' => 
      array (
        'name' => 'delay',
        'parameters' => 
        array (
          'delay' => 
          array (
            'name' => 'delay',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 113,
            'endLine' => 113,
            'startColumn' => 27,
            'endColumn' => 32,
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
 * Set the desired delay in seconds for the job.
 *
 * @param  \\DateTimeInterface|\\DateInterval|int|null  $delay
 * @return $this
 */',
        'startLine' => 113,
        'endLine' => 118,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Bus',
        'declaringClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'implementingClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'currentClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'aliasName' => NULL,
      ),
      'withoutDelay' => 
      array (
        'name' => 'withoutDelay',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set the delay for the job to zero seconds.
 *
 * @return $this
 */',
        'startLine' => 125,
        'endLine' => 130,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Bus',
        'declaringClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'implementingClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'currentClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'aliasName' => NULL,
      ),
      'afterCommit' => 
      array (
        'name' => 'afterCommit',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Indicate that the job should be dispatched after all database transactions have committed.
 *
 * @return $this
 */',
        'startLine' => 137,
        'endLine' => 142,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Bus',
        'declaringClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'implementingClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'currentClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'aliasName' => NULL,
      ),
      'beforeCommit' => 
      array (
        'name' => 'beforeCommit',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Indicate that the job should not wait until database transactions have been committed before dispatching.
 *
 * @return $this
 */',
        'startLine' => 149,
        'endLine' => 154,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Bus',
        'declaringClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'implementingClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'currentClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'aliasName' => NULL,
      ),
      'chain' => 
      array (
        'name' => 'chain',
        'parameters' => 
        array (
          'chain' => 
          array (
            'name' => 'chain',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 162,
            'endLine' => 162,
            'startColumn' => 27,
            'endColumn' => 32,
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
 * Set the jobs that should run if this job is successful.
 *
 * @param  array  $chain
 * @return $this
 */',
        'startLine' => 162,
        'endLine' => 167,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Bus',
        'declaringClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'implementingClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'currentClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'aliasName' => NULL,
      ),
      'afterResponse' => 
      array (
        'name' => 'afterResponse',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Indicate that the job should be dispatched after the response is sent to the browser.
 *
 * @return $this
 */',
        'startLine' => 174,
        'endLine' => 179,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Bus',
        'declaringClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'implementingClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'currentClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'aliasName' => NULL,
      ),
      'shouldDispatch' => 
      array (
        'name' => 'shouldDispatch',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the job should be dispatched.
 *
 * @return bool
 */',
        'startLine' => 186,
        'endLine' => 194,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Bus',
        'declaringClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'implementingClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'currentClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'aliasName' => NULL,
      ),
      'getJob' => 
      array (
        'name' => 'getJob',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the underlying job instance.
 *
 * @return mixed
 */',
        'startLine' => 201,
        'endLine' => 204,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Bus',
        'declaringClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'implementingClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'currentClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'aliasName' => NULL,
      ),
      '__call' => 
      array (
        'name' => '__call',
        'parameters' => 
        array (
          'method' => 
          array (
            'name' => 'method',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 213,
            'endLine' => 213,
            'startColumn' => 28,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'parameters' => 
          array (
            'name' => 'parameters',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 213,
            'endLine' => 213,
            'startColumn' => 37,
            'endColumn' => 47,
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
 * Dynamically proxy methods to the underlying job.
 *
 * @param  string  $method
 * @param  array  $parameters
 * @return $this
 */',
        'startLine' => 213,
        'endLine' => 218,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Bus',
        'declaringClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'implementingClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'currentClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'aliasName' => NULL,
      ),
      '__destruct' => 
      array (
        'name' => '__destruct',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Handle the object\'s destruction.
 *
 * @return void
 */',
        'startLine' => 225,
        'endLine' => 240,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Bus',
        'declaringClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'implementingClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'currentClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
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

# traaittCASH RPC PHP

traaittCASH RPC PHP is a PHP wrapper for the traaittCASH JSON-RPC interfaces.

Requires traaittCASH v0.8.4+

---

1) [Install traaittCASH RPC PHP](#install-traaittplatform-rpc-php)
1) [Examples](#examples)
1) [Docs](#docs)
1) [License](#license)

---

## Install traaittCASH RPC PHP

This package requires PHP >=7.1.3. Require this package with composer:

```
composer require traaittplatform/traaittplatform-rpc-php
```

## Examples

```php
use traaittCASH\XTCASHnetwork;

$config = [
    'rpcHost' => 'http://127.0.0.1',
    'rpcPort' => 24496,
];

$XTCASHnetwork = new XTCASHnetwork($config);
echo $XTCASHnetwork->getBlockCount();

> {"id":2,"jsonrpc":"2.0","result":{"count":784547,"status":"OK"}}
``` 

```php
use traaittCASH\ETRXservice;

$config = [
    'rpcHost'     => 'http://127.0.0.1',
    'rpcPort'     => 8447,
    'rpcPassword' => 'test',
];

$ETRXservice = new ETRXservice($config);
echo $ETRXservice->getBalance($walletAddress);

> {"id":0,"jsonrpc":"2.0","result":["availableBalance":100,"lockedAmount":50]}
``` 

Optionally, you may access details about the response:

```php
$response = $ETRXservice->getBalance($walletAddress);

// The result field from the RPC response
$response->result();

// RPC response as JSON string
$response->toJson();

// RPC response as an array
$response->toArray();

// Or other response details
$response->getStatusCode();
$response->getProtocolVersion();
$response->getHeaders();
$response->hasHeader($header);
$response->getHeader($header);
$response->getHeaderLine($header);
$response->getBody();
``` 

## Docs

Documentation of the traaittCASH RPC API and more PHP examples for this package can be found at [api-docs.traaittplatform.lol](https://api-docs.traaittplatform.lol).

## License

traaittCASH RPC PHP is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

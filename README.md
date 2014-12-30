PHP SDK for Mapado API
=======

## Installation
Install with [composer](http://getcomposer.org):
```
composer require "mapado/php-sdk:~0.1"
```

## Usage

### Get a token
```php
$oauth = new \Mapado\Sdk\Oauth('your_client_id', 'your_client_secrer');
$token = $oauth->getClientToken(); // or $token = $oauth->getUserToken('username', 'password');
```

### Refresh a token
The token is valid 1h. You can refresh it by calling:
```php
$token = $oauth->refreshUserToken('refresh_token');
```

### Create a client
```php
$client = new \Mapado\Sdk\Client($token);
```

### Rubrics
```php
$rubrics = $client->rubric->findBy(['q' => 'concert']);
$rubric = $client->rubric->findOne('63e4b024-6f08-43d3-a73b-634a306bc6c6');
```

### Activities
```php
$activities = $client->activity->findBy(['q' => 'transbordeur']);
$activity = $client->activity->findOne('63e4b024-6f08-43d3-a73b-634a306bc6c6');
```

### Users
```php
$me = $client->user->me();
$user = $client->user->findOne('63e4b024-6f08-43d3-a73b-634a306bc6c6');
```

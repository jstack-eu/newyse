jstack Newyse
=============


Installation
------------

Add the package to your composer.json

```
composer require jstack-eu/newyse
```


Usage
-----

```php
<?php

require 'vendor/autoload.php';

use Jstack\Newyse\Client;
use Jstack\Newyse\Newyse;

$client = new Client('username', 'pa$$word', 'CHANNEL', 'http://scws.newyse.com/nwsservice_[COMPANY_NAME]_live/nwsws/newyseservice?wsdl');

$newyse = new Newyse($client);

/** @var Jstack\Newyse\Model\AccommodationType[] $accommodationTypes */
$accommodationTypes = $newyse->getAccommodationTypes();

```

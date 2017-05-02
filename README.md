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

use Jstack\Newyse\Newyse;

$newyse = new Newyse('username', 'pa$$word', 'CHANNEL', 'http://scws.newyse.com/nwsservice_[COMPANY_NAME]_live/nwsws/newyseservice?wsdl');

/** @var Jstack\Newyse\Model\AccommodationType[] $accommodationTypes */
$accommodationTypes = $newyse->getAccommodationTypes();

```

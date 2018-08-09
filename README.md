# DVPP (Damn vulnerable PHP Package)

### WARNING: DO NOT ATTEMPT TO INSTALL THIS PACKAGE. IT'S MADE FOR TESTING PURPOSE.

### Install via composer

Add `shieldfy/DVPP` to composer.json configuration file.
```
$ composer require shieldfy/DVPP
```

And update the composer
```
$ composer update
```
    
## Get joke by username
```php
require 'vendor/autoload.php';

use Shieldfy\DVPP;

$results = DVPP::getJokeByUsername();
```
`/index.php?username=jak`
# discord-interaction-bundle
[![Packagist Version](https://img.shields.io/packagist/v/mrgoodbytes8667/discord-interaction-bundle?logo=packagist&logoColor=FFF&style=flat)](https://packagist.org/packages/mrgoodbytes8667/discord-interaction-bundle)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/mrgoodbytes8667/discord-interaction-bundle?logo=php&logoColor=FFF&style=flat)](https://packagist.org/packages/mrgoodbytes8667/discord-interaction-bundle)
![Symfony Versions Supported](https://img.shields.io/endpoint?url=https%3A%2F%2Fshields.goodbytes.live%2Fshield%2Fsymfony%2F%255E5.3%2520%257C%2520%255E6.0&logoColor=FFF&style=flat)
![Symfony Versions Tested](https://img.shields.io/endpoint?url=https%3A%2F%2Fshields.goodbytes.live%2Fshield%2Fsymfony-test%2F%253E%253D5.3%2520%253C6.1&logoColor=FFF&style=flat)  
![GitHub Workflow Status](https://img.shields.io/github/workflow/status/mrgoodbytes8667/discord-interaction-bundle/release?label=stable&logo=github&logoColor=FFF&style=flat)
![GitHub Workflow Status](https://img.shields.io/github/workflow/status/mrgoodbytes8667/discord-interaction-bundle/tests?logo=github&logoColor=FFF&style=flat)
[![codecov](https://img.shields.io/codecov/c/github/mrgoodbytes8667/discord-interaction-bundle?logo=codecov&logoColor=FFF&style=flat)](https://codecov.io/gh/mrgoodbytes8667/discord-interaction-bundle)
![Packagist License](https://img.shields.io/packagist/l/mrgoodbytes8667/discord-interaction-bundle?logo=creative-commons&logoColor=FFF&style=flat)  
A Symfony bundle providing Discord Application Command interaction events

## Installation

Make sure Composer is installed globally, as explained in the
[installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

### Applications that use Symfony Flex

Open a command console, enter your project directory and execute:

```console
$ composer require mrgoodbytes8667/discord-interaction-bundle
```

### Applications that don't use Symfony Flex

#### Step 1: Download the Bundle

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```console
$ composer require mrgoodbytes8667/discord-interaction-bundle
```

#### Step 2: Enable the Bundle

Then, enable the bundle by adding it to the list of registered bundles
in the `config/bundles.php` file of your project:

```php
// config/bundles.php

return [
    // ...
    Bytes\DiscordInteractionBundle\BytesDiscordInteractionBundle::class => ['all' => true],
];
```
Note: this bundle depends on the [Enum-Serializer-Bundle](https://github.com/mrgoodbytes8667/enum-serializer-bundle) and [setup instructions](https://github.com/mrgoodbytes8667/enum-serializer-bundle/blob/main/README.md#applications-that-dont-use-symfony-flex) for it must be followed as well.

## License
[![License](https://i.creativecommons.org/l/by-nc/4.0/88x31.png)]("http://creativecommons.org/licenses/by-nc/4.0/)  
discord-interaction-bundle by [MrGoodBytes](https://www.goodbytes.live) is licensed under a [Creative Commons Attribution-NonCommercial 4.0 International License](http://creativecommons.org/licenses/by-nc/4.0/).  
Based on a work at [https://github.com/mrgoodbytes8667/discord-interaction-bundle](https://github.com/mrgoodbytes8667/discord-interaction-bundle).

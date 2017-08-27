# bgaze/silex-finder-provider

A Silex service provider for Symfony finder component.

## Install

```
composer require bgaze/silex-finder-provider dev-master
```

## Usage

Once the provider is registred, a [Symfony Finder Component][1] instance is available through `$app['finder']`.

```php
$app->register(new \Bgaze\Silex\Provider\FinderProvider());

$app["finder"]->files()->in(__DIR__);

foreach ($app["finder"] as $file) {
    // Dump the absolute path
    var_dump($file->getRealpath());

    // Dump the relative path to the file, omitting the filename
    var_dump($file->getRelativePath());

    // Dump the relative path to the file
    var_dump($file->getRelativePathname());
}
```

# More stuff

[Pre-configured skeleton for the Silex microframework][2]

[CLI application service provider for Silex][3]

[1][https://symfony.com/doc/current/components/finder.html]
[2][https://github.com/bgaze/silex-skeleton]
[3][https://github.com/bgaze/silex-console-provider]
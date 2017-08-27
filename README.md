# bgaze/silex-finder-provider

A Silex service provider for Symfony finder component.

## Install

```
composer require bgaze/silex-finder-provider dev-master
```

## Usage

Once the provider is registred, a [Symfony Finder Component](https://symfony.com/doc/current/components/finder.html) instance is available through `$app['finder']`.

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

## More stuff

* [Pre-configured skeleton for the Silex microframework](https://github.com/bgaze/silex-skeleton)
* [CLI application service provider for Silex](https://github.com/bgaze/silex-console-provider)

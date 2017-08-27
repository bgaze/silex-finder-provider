# Silex Finder Service Provider

## Install

    composer require bgaze/silex-finder-provider dev-master
 
## Usage

Once the provider registred, a Finder instance is available through `$app['finder']`.

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

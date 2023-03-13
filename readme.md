# Lumberjack Cache Provider
Lumberjack Cache Provider is a package that allows you to use the Symfony Cache Component in Lumberjack applications. With this package, you can easily implement caching to improve the performance of your Lumberjack application.

## Installation
You can install the package via Composer:


`composer require arnaudbagnis/lumberjack-cache-provider
`
## Usage
### Using Symfony Cache
Symfony Cache is a powerful caching system that supports many different types of caching, including file, array, APCu, Redis, and more. To use Symfony Cache, you first need to create an instance of the cache you want to use. Here's an example of creating a file-based cache:

    use Symfony\Component\Cache\Adapter\FilesystemAdapter;
    $cache = new FilesystemAdapter();


Once you have a cache instance, you can use it to store and retrieve data. Here's an example of storing data in the cache:




    $cache->set('my_key', 'my_value');
And here's an example of retrieving data from the cache:



    $value = $cache->get('my_key');
### Adding CacheProvider to LumberjackAdding CacheProvider to Lumberjack
To add the CacheProvider to your Lumberjack application, you need to add it to the list of providers in the app.php file of your theme. Here's an example:




    return [
        // ...
    
        /**
         * List of providers to initialise during app boot
         */
        'providers' => [
            // ...
            CacheProvider::class,
        ],
    
        // ...
    
        'aliases' => [
            // ...
            'Cache' => CacheProvider::class,
        ],
    ];

Once you've added the provider, you can access the Symfony Cache instance using the Cache alias, like this:


    Cache::set('my_key', 'my_value');
    $value = Cache::get('my_key');

That's it! Now you can use Symfony Cache in your Lumberjack application to improve its performance
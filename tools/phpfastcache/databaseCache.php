<?php
require __DIR__."/../../vendor/autoload.php";
use phpFastCache\CacheManager;
use Whoops\Run;

$whoops = new Run();
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();
// Setup File Path on your config files
CacheManager::setDefaultConfig(array(
    "path" => 'D:/tmp/', // or in windows "C:/tmp/"
));

// In your class, function, you can call the Cache
$InstanceCache = CacheManager::getInstance('files');

/**
 * Try to get $products from Caching First
 * product_page is "identity keyword";
 */
$key = "product_page";
$CachedString = $InstanceCache->getItem($key);

$your_product_data = [
    'First product',
    'Second product',
    'Third product'
    // etc...
];

if (is_null($CachedString->get())) {
    $CachedString->set($your_product_data)->expiresAfter(5);//in seconds, also accepts Datetime
    $InstanceCache->save($CachedString); // Save the cache item just like you do with doctrine and entities

    echo "FIRST LOAD // WROTE OBJECT TO CACHE // RELOAD THE PAGE AND SEE // ";
    var_dump($CachedString->get());

} else {
    echo "READ FROM CACHE // ";
    echo $CachedString->get()[0];// Will prints 'First product'
}

/**
 * use your products here or return it;
 */
echo implode('<br />', $CachedString->get());// Will echo your product list
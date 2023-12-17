<?php
// Get the cache component
$cache = Yii::$app->cache;

// Define a key for the data
$key = 'my_data_key';

// Try to retrieve the data from cache
$data = $cache->get($key);

// If the data is not found in cache, calculate it from scratch
if ($data === false) {
    $data = $this->calculateData();

    // Store the data in cache so that it can be retrieved next time
    $cache->set($key, $data);
}

// Use the data
echo $data;
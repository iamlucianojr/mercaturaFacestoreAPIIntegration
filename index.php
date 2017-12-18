<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    // Configure API key authorization: APIKeyHeader
    $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('APIToken', '<api-key-here>');
    // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
    // $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIToken', 'Bearer');

    $apiInstance = new Swagger\Client\Api\BrandsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
        new GuzzleHttp\Client(),
        $config
    );
    $id = 10; // int | ID of brand to update
    $includes = array("includes_example"); // string[] | Include associated objects within response
    $limit = 56; // int | max records to return

    $result = $apiInstance->getBrandById($id, $includes, $limit);
    print_r($result);
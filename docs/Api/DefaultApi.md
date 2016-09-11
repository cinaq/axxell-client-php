# Axxell\DefaultApi

All URIs are relative to *https://axxell.cinaq.com/v1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**aggregateCountEvents**](DefaultApi.md#aggregateCountEvents) | **GET** /aggregates/countevents/{eventType} | 
[**aggregateEffective**](DefaultApi.md#aggregateEffective) | **GET** /aggregates/effective/{eventType} | 
[**aggregateEvents**](DefaultApi.md#aggregateEvents) | **GET** /aggregates/events/{eventType} | 
[**aggregateRecent**](DefaultApi.md#aggregateRecent) | **GET** /aggregates/recent/{eventType} | 
[**aggregateTop**](DefaultApi.md#aggregateTop) | **GET** /aggregates/top/{eventType} | 
[**authStore**](DefaultApi.md#authStore) | **POST** /auth | 
[**deleteAllEvents**](DefaultApi.md#deleteAllEvents) | **DELETE** /events | 
[**deleteAllItems**](DefaultApi.md#deleteAllItems) | **DELETE** /items | 
[**deleteItem**](DefaultApi.md#deleteItem) | **DELETE** /items/{itemid} | 
[**recommendInteresting**](DefaultApi.md#recommendInteresting) | **GET** /recommendations/interesting | 
[**recommendSimilar**](DefaultApi.md#recommendSimilar) | **GET** /recommendations/similar | 
[**registerEvent**](DefaultApi.md#registerEvent) | **POST** /events | 
[**registerItem**](DefaultApi.md#registerItem) | **POST** /items | 
[**registerStore**](DefaultApi.md#registerStore) | **POST** /store | 
[**retrieveEvents**](DefaultApi.md#retrieveEvents) | **GET** /events | 
[**retrieveItems**](DefaultApi.md#retrieveItems) | **GET** /items | 


# **aggregateCountEvents**
> \Axxell\Model\DataPoint aggregateCountEvents($storeid, $event_type, $data_period)



Return list of counts per event

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
Axxell\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Axxell\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new Axxell\Api\DefaultApi();
$storeid = "storeid_example"; // string | Store identifier
$event_type = "event_type_example"; // string | Valid values purchase, view or recommend
$data_period = "data_period_example"; // string | Valid values are last7days, last30days, today, yesterday

try {
    $result = $api_instance->aggregateCountEvents($storeid, $event_type, $data_period);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->aggregateCountEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storeid** | **string**| Store identifier |
 **event_type** | **string**| Valid values purchase, view or recommend |
 **data_period** | **string**| Valid values are last7days, last30days, today, yesterday |

### Return type

[**\Axxell\Model\DataPoint**](../Model/DataPoint.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **aggregateEffective**
> \Axxell\Model\DataPoint[] aggregateEffective($storeid, $event_type)



Return list of aggregated data points correlated with recommendationa and eventType

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
Axxell\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Axxell\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new Axxell\Api\DefaultApi();
$storeid = "storeid_example"; // string | Store identifier
$event_type = "event_type_example"; // string | Valid values purchase, view or recommend

try {
    $result = $api_instance->aggregateEffective($storeid, $event_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->aggregateEffective: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storeid** | **string**| Store identifier |
 **event_type** | **string**| Valid values purchase, view or recommend |

### Return type

[**\Axxell\Model\DataPoint[]**](../Model/DataPoint.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **aggregateEvents**
> \Axxell\Model\DataPoint[] aggregateEvents($storeid, $event_type)



Return list of aggregated data points

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
Axxell\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Axxell\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new Axxell\Api\DefaultApi();
$storeid = "storeid_example"; // string | Store identifier
$event_type = "event_type_example"; // string | Valid values purchase, view or recommend

try {
    $result = $api_instance->aggregateEvents($storeid, $event_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->aggregateEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storeid** | **string**| Store identifier |
 **event_type** | **string**| Valid values purchase, view or recommend |

### Return type

[**\Axxell\Model\DataPoint[]**](../Model/DataPoint.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **aggregateRecent**
> \Axxell\Model\Item[] aggregateRecent($storeid, $event_type)



Returns recent products

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
Axxell\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Axxell\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new Axxell\Api\DefaultApi();
$storeid = "storeid_example"; // string | Store identifier
$event_type = "event_type_example"; // string | Valid values purchase, view or recommend

try {
    $result = $api_instance->aggregateRecent($storeid, $event_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->aggregateRecent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storeid** | **string**| Store identifier |
 **event_type** | **string**| Valid values purchase, view or recommend |

### Return type

[**\Axxell\Model\Item[]**](../Model/Item.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **aggregateTop**
> \Axxell\Model\Item[] aggregateTop($storeid, $event_type)



Returns top products

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
Axxell\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Axxell\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new Axxell\Api\DefaultApi();
$storeid = "storeid_example"; // string | Store identifier
$event_type = "event_type_example"; // string | Valid values purchase, view or recommend

try {
    $result = $api_instance->aggregateTop($storeid, $event_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->aggregateTop: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storeid** | **string**| Store identifier |
 **event_type** | **string**| Valid values purchase, view or recommend |

### Return type

[**\Axxell\Model\Item[]**](../Model/Item.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authStore**
> \Axxell\Model\Store authStore($store)



Retrieve authentication token using password

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
Axxell\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Axxell\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new Axxell\Api\DefaultApi();
$store = new \Axxell\Model\Store(); // \Axxell\Model\Store | Store

try {
    $result = $api_instance->authStore($store);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->authStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store** | [**\Axxell\Model\Store**](../Model/\Axxell\Model\Store.md)| Store |

### Return type

[**\Axxell\Model\Store**](../Model/Store.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAllEvents**
> \Axxell\Model\Event deleteAllEvents($storeid)



Delete all events

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
Axxell\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Axxell\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new Axxell\Api\DefaultApi();
$storeid = "storeid_example"; // string | Store identifier

try {
    $result = $api_instance->deleteAllEvents($storeid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteAllEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storeid** | **string**| Store identifier |

### Return type

[**\Axxell\Model\Event**](../Model/Event.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAllItems**
> \Axxell\Model\Item deleteAllItems($storeid)



Delete all items

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
Axxell\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Axxell\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new Axxell\Api\DefaultApi();
$storeid = "storeid_example"; // string | Store identifier

try {
    $result = $api_instance->deleteAllItems($storeid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteAllItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storeid** | **string**| Store identifier |

### Return type

[**\Axxell\Model\Item**](../Model/Item.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteItem**
> \Axxell\Model\Item deleteItem($storeid, $itemid)



Delete existing item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
Axxell\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Axxell\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new Axxell\Api\DefaultApi();
$storeid = "storeid_example"; // string | Store identifier
$itemid = "itemid_example"; // string | Item identifier

try {
    $result = $api_instance->deleteItem($storeid, $itemid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storeid** | **string**| Store identifier |
 **itemid** | **string**| Item identifier |

### Return type

[**\Axxell\Model\Item**](../Model/Item.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recommendInteresting**
> \Axxell\Model\Item[] recommendInteresting($storeid, $userid, $count)



Return list of recommended items

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
Axxell\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Axxell\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new Axxell\Api\DefaultApi();
$storeid = "storeid_example"; // string | Store identifier
$userid = "userid_example"; // string | Interesting items for visitor
$count = 1.2; // double | Return exactly this amount of suggestions. Maximum value is 50, default is 5.

try {
    $result = $api_instance->recommendInteresting($storeid, $userid, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->recommendInteresting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storeid** | **string**| Store identifier |
 **userid** | **string**| Interesting items for visitor |
 **count** | **double**| Return exactly this amount of suggestions. Maximum value is 50, default is 5. | [optional]

### Return type

[**\Axxell\Model\Item[]**](../Model/Item.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recommendSimilar**
> \Axxell\Model\Item[] recommendSimilar($storeid, $userid, $itemid, $count)



Return list of recommended items

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
Axxell\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Axxell\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new Axxell\Api\DefaultApi();
$storeid = "storeid_example"; // string | Store identifier
$userid = "userid_example"; // string | User requesting the recommendation
$itemid = "itemid_example"; // string | Similar items bought by others
$count = 1.2; // double | Return exactly this amount of suggestions. Maximum value is 50, default is 5.

try {
    $result = $api_instance->recommendSimilar($storeid, $userid, $itemid, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->recommendSimilar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storeid** | **string**| Store identifier |
 **userid** | **string**| User requesting the recommendation |
 **itemid** | **string**| Similar items bought by others |
 **count** | **double**| Return exactly this amount of suggestions. Maximum value is 50, default is 5. | [optional]

### Return type

[**\Axxell\Model\Item[]**](../Model/Item.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registerEvent**
> \Axxell\Model\Event registerEvent($storeid, $event)



Register new event

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
Axxell\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Axxell\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new Axxell\Api\DefaultApi();
$storeid = "storeid_example"; // string | Store identifier
$event = new \Axxell\Model\Event(); // \Axxell\Model\Event | Single event to register

try {
    $result = $api_instance->registerEvent($storeid, $event);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->registerEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storeid** | **string**| Store identifier |
 **event** | [**\Axxell\Model\Event**](../Model/\Axxell\Model\Event.md)| Single event to register |

### Return type

[**\Axxell\Model\Event**](../Model/Event.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registerItem**
> \Axxell\Model\Item registerItem($storeid, $item)



Register new item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
Axxell\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Axxell\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new Axxell\Api\DefaultApi();
$storeid = "storeid_example"; // string | Store identifier
$item = new \Axxell\Model\Item(); // \Axxell\Model\Item | Single item to register

try {
    $result = $api_instance->registerItem($storeid, $item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->registerItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storeid** | **string**| Store identifier |
 **item** | [**\Axxell\Model\Item**](../Model/\Axxell\Model\Item.md)| Single item to register |

### Return type

[**\Axxell\Model\Item**](../Model/Item.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registerStore**
> \Axxell\Model\Store registerStore($store)



Register new Store

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
Axxell\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Axxell\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new Axxell\Api\DefaultApi();
$store = new \Axxell\Model\Store(); // \Axxell\Model\Store | Store

try {
    $result = $api_instance->registerStore($store);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->registerStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store** | [**\Axxell\Model\Store**](../Model/\Axxell\Model\Store.md)| Store |

### Return type

[**\Axxell\Model\Store**](../Model/Store.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveEvents**
> \Axxell\Model\Event[] retrieveEvents($storeid)



Get recent events

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
Axxell\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Axxell\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new Axxell\Api\DefaultApi();
$storeid = "storeid_example"; // string | Store identifier

try {
    $result = $api_instance->retrieveEvents($storeid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->retrieveEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storeid** | **string**| Store identifier |

### Return type

[**\Axxell\Model\Event[]**](../Model/Event.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveItems**
> \Axxell\Model\Item[] retrieveItems($storeid)



Get recent items

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
Axxell\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Axxell\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$api_instance = new Axxell\Api\DefaultApi();
$storeid = "storeid_example"; // string | Store identifier

try {
    $result = $api_instance->retrieveItems($storeid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->retrieveItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storeid** | **string**| Store identifier |

### Return type

[**\Axxell\Model\Item[]**](../Model/Item.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


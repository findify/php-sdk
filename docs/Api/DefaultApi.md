# Swagger\Client\DefaultApi

All URIs are relative to *https://api-v3.findify.io/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**autocompletePost**](DefaultApi.md#autocompletePost) | **POST** /autocomplete | 
[**feedbackPost**](DefaultApi.md#feedbackPost) | **POST** /feedback | 
[**recommendItemsFeaturedPost**](DefaultApi.md#recommendItemsFeaturedPost) | **POST** /recommend/items/featured | 
[**recommendItemsItemIdViewedViewedPost**](DefaultApi.md#recommendItemsItemIdViewedViewedPost) | **POST** /recommend/items/{item_id}/viewed/viewed | 
[**recommendItemsItemIdsBoughtBoughtPost**](DefaultApi.md#recommendItemsItemIdsBoughtBoughtPost) | **POST** /recommend/items/{item_ids}/bought/bought | 
[**recommendItemsNewestPost**](DefaultApi.md#recommendItemsNewestPost) | **POST** /recommend/items/newest | 
[**recommendItemsTrendingPost**](DefaultApi.md#recommendItemsTrendingPost) | **POST** /recommend/items/trending | 
[**recommendItemsViewedLatestPost**](DefaultApi.md#recommendItemsViewedLatestPost) | **POST** /recommend/items/viewed/latest | 
[**recommendSlotPost**](DefaultApi.md#recommendSlotPost) | **POST** /recommend/{slot} | 
[**searchPost**](DefaultApi.md#searchPost) | **POST** /search | 
[**smartCollectionSlotPost**](DefaultApi.md#smartCollectionSlotPost) | **POST** /smart-collection/{slot} | 


# **autocompletePost**
> \Swagger\Client\Model\AutocompleteResponse autocompletePost($autocomplete)



Autocomplete

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\DefaultApi();
$autocomplete = new \Swagger\Client\Model\AutocompleteRequest(); // \Swagger\Client\Model\AutocompleteRequest | Request parameters for autocomplete

try {
    $result = $api_instance->autocompletePost($autocomplete);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->autocompletePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **autocomplete** | [**\Swagger\Client\Model\AutocompleteRequest**](../Model/\Swagger\Client\Model\AutocompleteRequest.md)| Request parameters for autocomplete |

### Return type

[**\Swagger\Client\Model\AutocompleteResponse**](../Model/AutocompleteResponse.md)

### Authorization

[key](../../README.md#key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **feedbackPost**
> feedbackPost($feedback)



Feedback API

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\DefaultApi();
$feedback = new \Swagger\Client\Model\Feedback(); // \Swagger\Client\Model\Feedback | Feedback query

try {
    $api_instance->feedbackPost($feedback);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->feedbackPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feedback** | [**\Swagger\Client\Model\Feedback**](../Model/\Swagger\Client\Model\Feedback.md)| Feedback query |

### Return type

void (empty response body)

### Authorization

[key](../../README.md#key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recommendItemsFeaturedPost**
> \Swagger\Client\Model\GenericRecommendationResponse recommendItemsFeaturedPost($recommendation)



Featured items recommendation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\DefaultApi();
$recommendation = new \Swagger\Client\Model\FeaturedRecommendationRequest(); // \Swagger\Client\Model\FeaturedRecommendationRequest | Recommendation query

try {
    $result = $api_instance->recommendItemsFeaturedPost($recommendation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->recommendItemsFeaturedPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recommendation** | [**\Swagger\Client\Model\FeaturedRecommendationRequest**](../Model/\Swagger\Client\Model\FeaturedRecommendationRequest.md)| Recommendation query |

### Return type

[**\Swagger\Client\Model\GenericRecommendationResponse**](../Model/GenericRecommendationResponse.md)

### Authorization

[key](../../README.md#key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recommendItemsItemIdViewedViewedPost**
> \Swagger\Client\Model\GenericRecommendationResponse recommendItemsItemIdViewedViewedPost($item_id, $recommendation)



Users who viewed this item also viewed that recommendation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\DefaultApi();
$item_id = "item_id_example"; // string | 
$recommendation = new \Swagger\Client\Model\RecommendationRequest(); // \Swagger\Client\Model\RecommendationRequest | Recommendation query

try {
    $result = $api_instance->recommendItemsItemIdViewedViewedPost($item_id, $recommendation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->recommendItemsItemIdViewedViewedPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **string**|  |
 **recommendation** | [**\Swagger\Client\Model\RecommendationRequest**](../Model/\Swagger\Client\Model\RecommendationRequest.md)| Recommendation query |

### Return type

[**\Swagger\Client\Model\GenericRecommendationResponse**](../Model/GenericRecommendationResponse.md)

### Authorization

[key](../../README.md#key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recommendItemsItemIdsBoughtBoughtPost**
> \Swagger\Client\Model\GenericRecommendationResponse recommendItemsItemIdsBoughtBoughtPost($item_ids, $recommendation)



Frequently purchased together recommendation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\DefaultApi();
$item_ids = "item_ids_example"; // string | 
$recommendation = new \Swagger\Client\Model\RecommendationRequest(); // \Swagger\Client\Model\RecommendationRequest | Recommendation query

try {
    $result = $api_instance->recommendItemsItemIdsBoughtBoughtPost($item_ids, $recommendation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->recommendItemsItemIdsBoughtBoughtPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_ids** | **string**|  |
 **recommendation** | [**\Swagger\Client\Model\RecommendationRequest**](../Model/\Swagger\Client\Model\RecommendationRequest.md)| Recommendation query |

### Return type

[**\Swagger\Client\Model\GenericRecommendationResponse**](../Model/GenericRecommendationResponse.md)

### Authorization

[key](../../README.md#key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recommendItemsNewestPost**
> \Swagger\Client\Model\GenericRecommendationResponse recommendItemsNewestPost($recommendation)



Newest items recommendation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\DefaultApi();
$recommendation = new \Swagger\Client\Model\RecommendationRequest(); // \Swagger\Client\Model\RecommendationRequest | Recommendation query

try {
    $result = $api_instance->recommendItemsNewestPost($recommendation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->recommendItemsNewestPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recommendation** | [**\Swagger\Client\Model\RecommendationRequest**](../Model/\Swagger\Client\Model\RecommendationRequest.md)| Recommendation query |

### Return type

[**\Swagger\Client\Model\GenericRecommendationResponse**](../Model/GenericRecommendationResponse.md)

### Authorization

[key](../../README.md#key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recommendItemsTrendingPost**
> \Swagger\Client\Model\GenericRecommendationResponse recommendItemsTrendingPost($recommendation)



Newest items recommendation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\DefaultApi();
$recommendation = new \Swagger\Client\Model\RecommendationRequest(); // \Swagger\Client\Model\RecommendationRequest | Recommendation query

try {
    $result = $api_instance->recommendItemsTrendingPost($recommendation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->recommendItemsTrendingPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recommendation** | [**\Swagger\Client\Model\RecommendationRequest**](../Model/\Swagger\Client\Model\RecommendationRequest.md)| Recommendation query |

### Return type

[**\Swagger\Client\Model\GenericRecommendationResponse**](../Model/GenericRecommendationResponse.md)

### Authorization

[key](../../README.md#key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recommendItemsViewedLatestPost**
> \Swagger\Client\Model\GenericRecommendationResponse recommendItemsViewedLatestPost($recommendation)



Latest viewed items by the user recommendation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\DefaultApi();
$recommendation = new \Swagger\Client\Model\RecommendationRequest(); // \Swagger\Client\Model\RecommendationRequest | Recommendation query

try {
    $result = $api_instance->recommendItemsViewedLatestPost($recommendation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->recommendItemsViewedLatestPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recommendation** | [**\Swagger\Client\Model\RecommendationRequest**](../Model/\Swagger\Client\Model\RecommendationRequest.md)| Recommendation query |

### Return type

[**\Swagger\Client\Model\GenericRecommendationResponse**](../Model/GenericRecommendationResponse.md)

### Authorization

[key](../../README.md#key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recommendSlotPost**
> \Swagger\Client\Model\GenericRecommendationResponse recommendSlotPost($slot, $recommendation)



Generic recommendation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\DefaultApi();
$slot = "slot_example"; // string | 
$recommendation = new \Swagger\Client\Model\GenericRecommendationRequest(); // \Swagger\Client\Model\GenericRecommendationRequest | Recommendation query

try {
    $result = $api_instance->recommendSlotPost($slot, $recommendation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->recommendSlotPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slot** | **string**|  |
 **recommendation** | [**\Swagger\Client\Model\GenericRecommendationRequest**](../Model/\Swagger\Client\Model\GenericRecommendationRequest.md)| Recommendation query |

### Return type

[**\Swagger\Client\Model\GenericRecommendationResponse**](../Model/GenericRecommendationResponse.md)

### Authorization

[key](../../README.md#key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchPost**
> \Swagger\Client\Model\SearchResponse searchPost($search)



Search

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\DefaultApi();
$search = new \Swagger\Client\Model\SearchRequest(); // \Swagger\Client\Model\SearchRequest | Search query

try {
    $result = $api_instance->searchPost($search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->searchPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | [**\Swagger\Client\Model\SearchRequest**](../Model/\Swagger\Client\Model\SearchRequest.md)| Search query |

### Return type

[**\Swagger\Client\Model\SearchResponse**](../Model/SearchResponse.md)

### Authorization

[key](../../README.md#key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **smartCollectionSlotPost**
> \Swagger\Client\Model\CollectionResponse smartCollectionSlotPost($slot, $collection)



Smart collection

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Key', 'Bearer');

$api_instance = new Swagger\Client\Api\DefaultApi();
$slot = "slot_example"; // string | 
$collection = new \Swagger\Client\Model\CollectionRequest(); // \Swagger\Client\Model\CollectionRequest | Smart collection query

try {
    $result = $api_instance->smartCollectionSlotPost($slot, $collection);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->smartCollectionSlotPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **slot** | **string**|  |
 **collection** | [**\Swagger\Client\Model\CollectionRequest**](../Model/\Swagger\Client\Model\CollectionRequest.md)| Smart collection query |

### Return type

[**\Swagger\Client\Model\CollectionResponse**](../Model/CollectionResponse.md)

### Authorization

[key](../../README.md#key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


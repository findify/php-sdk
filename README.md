# Findify PHP SDK

This is a PHP SDK for our JSON API, you can check full documentation here: https://developers.findify.io/


## Requirements

PHP 5.4.0 and later

## Installation & Usage

### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "require": {
    "findify/sdk": "1.*"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path-to-findify-sdk/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit lib/Tests
```

## Getting Started

Please visit [Findify Developer Portal](https://developers.findify.io) for the full API spec and guides.

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Key', 'YOUR_API_KEY');

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

## Documentation for API Endpoints

All URIs are relative to *https://api-v3.findify.io/v3*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**autocompletePost**](docs/Api/DefaultApi.md#autocompletepost) | **POST** /autocomplete | 
*DefaultApi* | [**feedbackPost**](docs/Api/DefaultApi.md#feedbackpost) | **POST** /feedback | 
*DefaultApi* | [**recommendItemsFeaturedPost**](docs/Api/DefaultApi.md#recommenditemsfeaturedpost) | **POST** /recommend/items/featured | 
*DefaultApi* | [**recommendItemsItemIdViewedBoughtPost**](docs/Api/DefaultApi.md#recommenditemsitemidviewedboughtpost) | **POST** /recommend/items/{item_id}/viewed/bought | 
*DefaultApi* | [**recommendItemsItemIdViewedViewedPost**](docs/Api/DefaultApi.md#recommenditemsitemidviewedviewedpost) | **POST** /recommend/items/{item_id}/viewed/viewed | 
*DefaultApi* | [**recommendItemsNewestPost**](docs/Api/DefaultApi.md#recommenditemsnewestpost) | **POST** /recommend/items/newest | 
*DefaultApi* | [**recommendItemsTrendingPost**](docs/Api/DefaultApi.md#recommenditemstrendingpost) | **POST** /recommend/items/trending | 
*DefaultApi* | [**recommendItemsViewedLatestPost**](docs/Api/DefaultApi.md#recommenditemsviewedlatestpost) | **POST** /recommend/items/viewed/latest | 
*DefaultApi* | [**recommendSlotPost**](docs/Api/DefaultApi.md#recommendslotpost) | **POST** /recommend/{slot} | 
*DefaultApi* | [**searchPost**](docs/Api/DefaultApi.md#searchpost) | **POST** /search | 
*DefaultApi* | [**smartCollectionSlotPost**](docs/Api/DefaultApi.md#smartcollectionslotpost) | **POST** /smart-collection/{slot} | 


## Documentation For Models

 - [AutocompleteRequest](docs/Model/AutocompleteRequest.md)
 - [AutocompleteResponse](docs/Model/AutocompleteResponse.md)
 - [AutocompleteResponseMeta](docs/Model/AutocompleteResponseMeta.md)
 - [AutocompleteSuggestion](docs/Model/AutocompleteSuggestion.md)
 - [Banner](docs/Model/Banner.md)
 - [BannerProducts](docs/Model/BannerProducts.md)
 - [CollectionRequest](docs/Model/CollectionRequest.md)
 - [CollectionResponse](docs/Model/CollectionResponse.md)
 - [CollectionResponseMeta](docs/Model/CollectionResponseMeta.md)
 - [Error](docs/Model/Error.md)
 - [Facet](docs/Model/Facet.md)
 - [FacetChildValueFour](docs/Model/FacetChildValueFour.md)
 - [FacetChildValueOne](docs/Model/FacetChildValueOne.md)
 - [FacetChildValueThree](docs/Model/FacetChildValueThree.md)
 - [FacetChildValueTwo](docs/Model/FacetChildValueTwo.md)
 - [FeaturedRecommendationRequest](docs/Model/FeaturedRecommendationRequest.md)
 - [Feedback](docs/Model/Feedback.md)
 - [Filter](docs/Model/Filter.md)
 - [FilterValues](docs/Model/FilterValues.md)
 - [GenericRecommendationRequest](docs/Model/GenericRecommendationRequest.md)
 - [GenericRecommendationResponse](docs/Model/GenericRecommendationResponse.md)
 - [GenericRecommendationResponseMeta](docs/Model/GenericRecommendationResponseMeta.md)
 - [Product](docs/Model/Product.md)
 - [RecommendationRequest](docs/Model/RecommendationRequest.md)
 - [Redirect](docs/Model/Redirect.md)
 - [SearchRequest](docs/Model/SearchRequest.md)
 - [SearchResponse](docs/Model/SearchResponse.md)
 - [SearchResponseMeta](docs/Model/SearchResponseMeta.md)
 - [Sort](docs/Model/Sort.md)
 - [User](docs/Model/User.md)

## Contributing

Feel free to create issues, send pull requests or contact as at yourfriends@findify.io!

## Licence

MIT
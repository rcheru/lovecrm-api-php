# Love-CRM API Client

> Data cleansing, enrichment and suggestions via [Love-CRM API](https://love-crm.ru/api)

[![Latest Stable Version][packagist-image]][packagist-url]
[![Total Downloads][downloads-image]][packagist-url]
[![License][license-image]][packagist-url]

Thin PHP wrapper over Love-CRM API.

## Installation

```sh
composer require rcheru/lovecrm-api-php
```

Requirements:

-   PHP 5.6+
-   Guzzle 6 or 7

## Usage

Create API client instance:

```php
> $token = "Replace with Love-CRM API key";
> $secret = "Replace with Love-CRM secret key";
> $lovecrm = new \LoveCrm\LoveCrmClient($token, $secret);
```

Then call API methods as specified below.

## Postal Address

### [Add new Deal](https://love-crm.ru/api/deals/add/)

```php
> $response = $lovecrm->deals("add", [
	'name' => '',  // Name deal (required field)
	'price' => '',  // Price deal (optional)
	'id_cat' => '',  // Category ID (optional)
	'id_status' => '',  // Status deal ID (optional)
	'id_origin' => '',  // Origin ID (optional)
	'archive' => false,  // Moving a Deal to the archive (optional)
	'tags' => '',  // Tags separated by commas (optional)
	'color' => '', // Color Deal in HEX, example: AD3939 (optional)
	'text' => '',  // Text detail description Deal (optional)
]);

> RESPONSE Success: 

array [
	'code' => 200,  // Status code request
	'message' => 'Deal added successfully', // Message status request
	'id_deal' => '9999', // .. ID new created Deal
]

> RESPONSE Error: 

array [
	'code' => 500,  // Status code request
	'message' => 'Error in data field Name', // Message status request
]

```

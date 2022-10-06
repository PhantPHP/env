# Env

## Presentation

The environment variable manager makes it easy to manipulate your environment variables in your projects.


## Installation

`composer require phant/env`


## Technologies used

- `PHP 8.1`
- `Composer` for dependencies management (PHP)


## Usage

### Get

If the variable is not defined, an exception will be thrown.

```php
use Phant\Env\Manager as Env;

echo Env::get('MY_VAR');
```

### Get with default value

```php
use Phant\Env\Manager as Env;

echo Env::get('MY_VAR', 'default value');
```

### Set

If the variable is already defined, an exception will be thrown.

```php
use Phant\Env\Manager as Env;

echo Env::set('MY_VAR', 'my new value');
```

### Set value on existing var

```php
use Phant\Env\Manager as Env;

echo Env::set('MY_VAR', 'my new value', true);
```

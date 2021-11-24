<div align="center">
  <img src="./docs/logo.png" width="140px" alt="logo" />
  <h2>Is::email($value)</h2>
  <p>Type checks values in PHP</p>

  <p>
    <a href="#">
      <img src="https://img.shields.io/badge/PRs-Welcome-brightgreen.svg?style=flat-square" alt="PRs Welcome">
    </a>
    <a href="#">
      <img src="https://img.shields.io/badge/License-MIT-brightgreen.svg?style=flat-square" alt="MIT License">
    </a>
  </p>
</div>

---

## Example

```php
$isEmail = Is::email('vikbert@mail.com'); //=> true
$isEmail = Is::email('vikbert@mail'); //=> false
```

## Install

```bash
composer req vikbert/istype
```

## Test

```bash
vendor/bin/phpunit
```

## API

| usage  | return  | description |
|---|---|---|
| Is::email($value)  | bool  | check if it is an email string  |
| Is::url($value)  | bool  | check if it is an URL string  |
| Is::https($value)  | bool  | check if it is an URL with "https" scheme  |
| Is::http($value)  | bool  | check if it is an URL with "http" scheme  |
| Is::file($value)  | bool  | check if it is a valid file  |
| Is::image($value)  | bool  | check if it is a valid image  |
| Is::json($value)  | bool  | check if it is a valid json string  |
| Is::xml($value)  | bool  | check if it is a valid xml string  |
| Is::ip($value)  | bool  | check if it is a valid IP address  |

## licence

MIT [@vikbert](https://vikbert.github.io/)

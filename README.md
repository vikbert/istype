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
$isEmail = Is::email('xun.zhou@mail.schwarz'); //=> true
$isEmail = Is::email('xun.zhou@mail'); //=> false
```


## Install
```bash
composer req vikbert/istype
```

## Test
```bash
vendor/bin/phpunit
```


## licence

MIT [@vikbert](https://vikbert.github.io/)

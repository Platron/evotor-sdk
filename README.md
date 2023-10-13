Platron Evotor SDK
===============
## Установка

Проект предполагает установку с использованием composer
<pre><code>composer require payprocessing/evotor-sdk</code></pre>

## Тесты
Для работы тестов необходим PHPUnit, для его установки необходимо выполнить команду
```
composer require phpunit/phpunit
```
Для того, чтобы запустить интеграционные тесты нужно скопировать файл tests/integration/MerchantSettings.php.sample удалив 
из названия расширение .sample и вставив настройки магазина. После выполнить команду из корня проекта
```
vendor/bin/phpunit vendor/payprocessing/evotor-sdk/tests/integration
```

## Примеры использования

Можно найти в интеграционных тестах tests/integration

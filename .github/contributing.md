# Coding Standards

This library follows [PSR-1](https://www.php-fig.org/psr/psr-1/) & [PSR-2](https://www.php-fig.org/psr/psr-2/) standards.

Before pushing changes ensure you run the following commands (and they return successfully).

**Please only run `vendor/bin/php-cs-fixer fix .` if you are using PHP 5**

```bash
vendor/bin/php-cs-fixer fix
vendor/bin/phpunit
```

If you are interested in the benchmarks, or wish to improve them, you can run;

```bash
vendor/bin/phpbench run  --report=quick
vendor/bin/phpbench run  --report=quick --output=markdown
```
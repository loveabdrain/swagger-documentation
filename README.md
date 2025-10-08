## Installing

```bash
composer require victorygroup/swagger-documentation
```

## Install config
```bash
mkdir config && cp vendor/victorygroup/swagger-documentation/src/config/documentation.php config/documentation.php
```

## Install command
```bash
cp vendor/victorygroup/swagger-documentation/src/generateDoc.php generateDoc.php
```

## Generate doc
```bash
php generateDoc.php
```
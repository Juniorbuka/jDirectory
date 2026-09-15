### jDirectory - показ ресурсов в табличном виде вместо дерева

<img src="https://img.shields.io/badge/PHP-%3E=7.3-green.svg?php=7.3"> <img src="https://img.shields.io/badge/EVO-%3E%3D3.5.8-green">

#### Установка

```bash
php -d="memory_limit=-1" artisan package:installrequire jevo/jdirectory "*"
php artisan vendor:publish --provider="Jevo\JDirectory\JDirectoryServiceProvider"
```

После установки задайте конфигурацию в каталоге:

```text
core/custom/directory
```

![jDirectory](https://user-images.githubusercontent.com/8789957/121332218-181bfd00-c931-11eb-8144-f411ab5f2321.png)

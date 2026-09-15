### jDirectory - відображення ресурсів у вигляді таблиці замість дерева

<img src="https://img.shields.io/badge/EVO-%3E%3D3.5.7-green">

#### Встановлення

```bash
cd ~/public_html/core
php -d="memory_limit=-1" artisan package:installrequire jevo/jdirectory "^1.0"
php artisan vendor:publish --provider="Jevo\JDirectory\JDirectoryServiceProvider"
```

Після встановлення задайте конфігурацію в каталозі:

```text
core/custom/directory
```

![jDirectory](https://user-images.githubusercontent.com/8789957/121332218-181bfd00-c931-11eb-8144-f411ab5f2321.png)

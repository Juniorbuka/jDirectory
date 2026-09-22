
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

<img width="1461" height="794" alt="20260922_143738" src="https://github.com/user-attachments/assets/bc2df91a-9712-4b4c-9ab5-04e0e962cce2" />

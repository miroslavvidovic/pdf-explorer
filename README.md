# pdf-explorer

List all pdf files inside a directory in a html table view

<img src=http://i.imgur.com/Z0u4oNG.png>

### About

The idea behind this small project was to implement a simple way to search a collection of PDF files in the web browser.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Requirements

- PHP
- [Bower](https://bower.io/)

## Deployment

- Clone the project

- Install the project dependencies listed in bower.json

```
  bower install
```

- Define the path to your PDF files directory in config.php

```php
  <?php

  define('PATH', 'pdf_files');
```

- Run the PHP built-in web server

```
  cd pdf-explorer
  php -S localhost:8000
```

## Built With

* [Bootstrap](https://getbootstrap.com/)

## Authors

* **Miroslav Vidović** - [miroslavvidovic](https://github.com/miroslavvidovic)

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

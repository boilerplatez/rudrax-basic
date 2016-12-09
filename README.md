# rudrax-basic
Sample RudraxPhp project

For Server Setup [XAMPP-MAC](/rudraks/docs/blob/master/docs/SERVER-XAMPP-MAC.md)

For System Environment Setup [PHP-COMPOSER](/rudraks/docs/blob/master/docs/SYSTEM.md)

- Fix build directory   
    ````
    $ sudo chmod 0777  build
    ````
- Update composer dependency
    ````
    $ composer update
    ````
- Hit this URL  in browser to build project
    ````
    http://<project.url>?RX_MODE_DEBUG=true&RX_MODE_BUILD=1&_display_errors_=1
    ````
- Done.
This package comes with a view finder class and a view service provider for your apps created with Laravel Framework.

With this package device specific view files/templates will be automatically rendered in your app.

## Installation

This package can be installed via Composer:

``` bash
composer require muhci/multiview
```

## Usage
After requiring the package there is nothing more to do. ViewServiceProvider will be automatically discovered by Laravel and be ready to use.

You can create your device specific view files under the views/mobile and views/tablet folder.

If these view files is present they will be rendered automatically according to the user's device.

If not your default view files will be rendered.

Note: For tablet users finder first looks for tablet/file.blade.php, if it's not present try to find mobile/file.blade.php.
If that also not present it will return the default view file.

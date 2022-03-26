# nova-registerpage

## Installation

Install the package:

`composer require acvxqs/nova-registerpage`

Go to your `/nova/register` page to view the registration screen.

## Configuration

By default (after installation) the page `/nova/register` is enabled and will show.

Use the command `php artisan vendor:publish --tag="nova-registerpage"` to publish the configuration file and the resource views. Doing so, will:

- _Disable_ the `/nova/register` page as the _enabled_ key in the config file is set to _false_.
- Allow you to edit the register views: `base_path('resources/views/vendor/nova-registerpage')`

## Note

Never done anything like this before. Feedback appreciated. 

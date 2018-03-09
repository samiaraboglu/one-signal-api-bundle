# one-signal-api-bundle

Use the OneSignal PHP API [made by Norkunas](https://github.com/norkunas/onesignal-php-api).

### Download the Bundle

```console
$ composer require samiaraboglu/one-signal-api-bundle
```

### Enable the Bundle

Registered bundles in the `app/AppKernel.php` file of your project:

```php
<?php
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // ...
            new samiaraboglu\OneSignalApiBundle\OneSignalApiBundle(),
        );
        // ...
    }
    // ...
}
```

### Config
Add this to config.yml:

```yaml
one_signal_api:
    app_id:         %one_signal_api_app_id%
    app_auth_key:   %one_signal_api_app_auth_key%
    user_auth_key:  %one_signal_api_user_auth_key%
```

### Basic Use
Gets all apps:

```php
$service = $this->get('one_signal_api.service');

$myApps = $service->apps->getAll();
```
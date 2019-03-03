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
            new Samiax\OneSignalApiBundle\SamiaxOneSignalApiBundle(),
        );
        // ...
    }
    // ...
}
```

### Config
Add this to config.yml:

```yaml
samiax_one_signal_api:
    app_id:         "{ONE_SIGNAL_API_APP_ID}"
    app_auth_key:   "{ONE_SIGNAL_API_APP_AUTH_KEY}"
    user_auth_key:  "{ONE_SIGNAL_API_USER_AUTH_KEY}"
```

### Basic Use
Gets all apps:

```php
$service = $this->get('samiax_one_signal_api.service');

$myApps = $service->apps->getAll();
```

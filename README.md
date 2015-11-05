Getting Started With Chaplean Cookie Bundle
===========================================

# 1. Add me in AppKernel

app/AppKernel.php:
```php
...
    /**
     * @return array
     */
    public function registerBundles()
    {
        return array(
            ...
            new Chaplean\Bundle\CookieBundle\ChapleanCookieBundle(),
        );
    }
...
```

# 2. Set learn_more

Add a url for learn_more in headband.

app/config/config.yml:
```yaml
chaplean_cookie:
    learn_more: <your_url>
```

# 3. Update assetic

Add this bundle in assetic config:
```yaml
assetic:
    bundles: ['ChapleanCookieBundle']
```

# 4. Add routes

Include a routing in global routing

app/config/routing.yml:
```yaml
chaplean_cookie_bundle:
    resource: "@ChapleanCookieBundle/Resources/config/routing.yml"
    prefix:   /
```

# 5. Add script in layout

In layout html add me simply:

```html
<script type="text/javascript" src="{{ path('chaplean_cookie_headband') }}"></script>
```
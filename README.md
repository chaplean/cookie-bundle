Getting Started With Chaplean Cookie Bundle
===========================================

# Installation

## 1. Composer

```
composer require chaplean/cookie-bundle
```

## 2. AppKernel.php

Add
```
            new Chaplean\Bundle\CookieBundle\ChapleanCookieBundle(),
```

## 3. Set learn_more

Add a url for learn_more in headband.

app/config/config.yml:
```yaml
chaplean_cookie:
    learn_more: <your_url>
    translations: ~
```

## 4. Update assetic

Add this bundle in assetic config:
```yaml
assetic:
    bundles: ['ChapleanCookieBundle']
```

## 5. Add routes

Include a routing in global routing

app/config/routing.yml:
```yaml
chaplean_cookie_bundle:
    resource: '@ChapleanCookieBundle/Resources/config/routing.yml'
    prefix:   /
```

## 6. Add script in layout

In layout html add me simply:

```html
<script type="text/javascript" src="{{ path('chaplean_cookie_headband') }}"></script>
```

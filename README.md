# Yii2 Boostrtap Confirmation

Based on **[BootstrapConfirmation](http://mistic100.github.io/Bootstrap-Confirmation/)**.


## What is Bootstrap Confirmation?

Bootstrap Confirmation - is Bootstrap plugin for on-place confirm boxes using Popover.

![sshot-1](https://cloud.githubusercontent.com/assets/1616795/6599520/efa717fe-c812-11e4-9916-5e3e171c1f7c.png)


## Installation


### Composer

The preferred way to install this extension is through [Composer](http://getcomposer.org/).

Either run

```
php composer.phar require uran1980/yii2-bootstrap-confirmation "dev-master"
```

or add

```
"uran1980/yii2-bootstrap-confirmation": "dev-master"
```

to the require section of your ```composer.json```


## Usage

To use this component add dependency to you project asset bundle.
 For example in ```...\frontend\assets\AppAsset.php``` file add to dependency:

```php
<?php

namespace frontend\assets;

class AppAsset extends \yii\web\AssetBundle
{
    ...
    public $depends = [
        ...
        'uran1980\yii\bootstrapConfirmation\BootstrapConfirmationAsset',
    ];
}
```

That's it. In the View add button like this:

```html
<button class="btn btn-default" data-toggle="confirmation">Confirmation</button>
```

For more info see [Bootstrap Confirmation](http://mistic100.github.io/Bootstrap-Confirmation/) main project page.


## Author

[Ivan Yakovlev](https://github.com/uran1980/), e-mail: [uran1980@gmail.com](mailto:uran1980@gmail.com)

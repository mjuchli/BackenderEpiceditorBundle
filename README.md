# Symfony2 BackenderEpiceditorBundle
This bundle provides a EpicEditor integration for your Symfony2 Project. It simply adds the form field type `epiceditor` to the Form Component.

For more information about EpicEditor see: http://oscargodson.github.com/EpicEditor/
## Installation

1. Add BackenderEpiceditorBundle to your composer.json
2. Enable the bundle
3. Install bundle assets
4. Configure the bundle (optional)
5. Add the editor to a form

### Step 1: Add BackenderEpiceditorBundle to your composer.json
```js
{
    "require": {
        "Backender/epiceditor-bundle": "*"
    }
}
```
Update your project dependencies:

```bash
php composer.phar update Backender/epiceditor-bundle
```

### Step 2: Enable the bundle
``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Backender\EpiceditorBundle\BackenderEpiceditorBundle(),
    );
}
```

### Step 3: Install bundle assets
```bash
$ php ./app/console assets:install web --symlink
```

--symlink is optional

### Step 4: Configure the bundle (optional)

For a full configuration dump use:
```bash
$ php ./app/console config:dump-reference BackenderEpiceditorBundle

```

An example configuration:

```yaml
backender_epiceditor:  
    class:                Backender\EpiceditorBundle\Form\Type\EpiceditorType 
    container:            epiceditor 
    basepath:             /web/bundles/backenderepiceditor 
    clientSideStorage:    true 
    localStorageName:     epiceditor 
    parser:               marked 
    focusOnLoad:          false 
    file:                 
        name:                 epiceditor 
        defaultContent:       
        autoSave:             100 
    theme:                
        base:                 /themes/base/epiceditor.css 
        preview:              /themes/preview/github.css 
        editor:               /themes/editor/epic-dark.css 
    shortcut:             
        modifier:             18 
        fullscreen:           70 
        preview:              80 
        edit:                 79 
```

Or even overwrite the configuration within a FormBuilder (see Step 5).

### Step 5: Add the editor to a form

Example form:

```php
<?php

$form = $this->createFormBuilder($post)
    ->add('content', 'epiceditor', array(
            'container'             => 'epiceditor',
            'basepath'              => '/~marc/blog/web/bundles/backenderepiceditor',
            'clientSideStorage'     => true,
            'localStorageName'      => 'epiceditor',
            'parser'                => 'marked',
            'focusOnLoad'           => false,
            'file'                  => array(
                'name'              => 'epiceditor',
                'defaultContent'    => '',
                'autoSave'          => 100
            ),
            'theme'                 => array(
                'base'              => '/themes/base/epiceditor.css',
                'preview'           => '/themes/preview/github.css',
                'editor'            => '/themes/editor/epic-dark.css'
            ),
            'shortcut'              => array(
                'modifier'          => 18,
                'fullscreen'        => 70,
                'preview'           => 80,
                'edit'              => 79
            )
        ))
        ->getForm()
;
```

**Note:** All parameters from config.yml can be overwritten in a form (*excluding `class`*).

##Contribute

If the bundle doesn't allow you to customize an option, I invite you to make a PR & I will merge it.

All code contributions - including those of people having commit access -
must go through a pull request and approved by a core developer before being
merged. This is to ensure proper review of all the code.

Fork the project, create a feature branch, and send a pull request.

To ensure a consistent code base, you should make sure the code follows
the [Coding Standards](http://symfony.com/doc/2.1/contributing/code/standards.html)
which we borrowed from Symfony.


##License

This bundle is under the MIT license. See the complete license [here](https://github.com/backender/BackenderEpiceditorBundle/blob/master/LICENSE).

## Next Steps

- Testing is coming soon

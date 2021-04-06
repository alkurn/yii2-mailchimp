yii2-mailchimp
==============

Yii2 MailChimp extension.

This is the most dirt simple extension you could ever imagine, literally this is how you use it:

    $mc = new alkurn\mailchimp\Mailchimp(['apiKey' => 'lalala']);
    $mc->lists->getList();

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist alkurn/yii2-mailchimp "dev-master"
```

or add

```
"alkurn/yii2-mailchimp": "dev-master"
```

to the require section of your `composer.json` file.


Set Up
------


The class is merely a layer that calls `__call` on everything that comes in and passes it to the actual Mailchimp API wrapper.

Please refer to the documentation for...documentation: [here](http://apidocs.mailchimp.com/api/2.0/).

For support please post an [issue](https://github.com/alkurn/yii2-mailchimp/issues).

 

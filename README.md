Anax weather module (bjos19/anax-weathermodule)
=================================================
# Badges
Travis-CI  
[![Build Status](https://travis-ci.com/bjorn-87/anax-weathermodule.svg?branch=master)](https://travis-ci.com/bjorn-87/anax-weathermodule)  
CircleCI  
[![<ORG_NAME>](https://circleci.com/gh/bjorn-87/anax-weathermodule.svg?style=svg)](https://app.circleci.com/pipelines/github/bjorn-87/anax-weathermodule)  
Scrutinzer  
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/bjorn-87/anax-weathermodule/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/bjorn-87/anax-weathermodule/?branch=master)  
[![Code Coverage](https://scrutinizer-ci.com/g/bjorn-87/anax-weathermodule/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/bjorn-87/anax-weathermodule/?branch=master)  
[![Build Status](https://scrutinizer-ci.com/g/bjorn-87/anax-weathermodule/badges/build.png?b=master)](https://scrutinizer-ci.com/g/bjorn-87/anax-weathermodule/build-status/master)  
[![Code Intelligence Status](https://scrutinizer-ci.com/g/bjorn-87/anax-weathermodule/badges/code-intelligence.svg?b=master)](https://scrutinizer-ci.com/code-intelligence)  

# Installing

## Step 1 install the module

### install using composer
`composer require bjos19/anax-weathermodule`

## Step 2 Copy the configuration files and other necessary folders.
Stand in the root of your Anax repo and copy all files:  

```
rsync -av vendor/bjos19/anax-weathermodule/config ./
rsync -av vendor/bjos19/anax-weathermodule/src ./
rsync -av vendor/bjos19/anax-weathermodule/view ./
rsync -av vendor/bjos19/anax-weathermodule/test ./
```

## Step 3 Add namespace
Add namespace `Bjos` to `composer.json` and run command `composer dump-autoload`.
```
"autoload": {
    "psr-4": {
        "Anax\\": "src/",
        "Bjos\\": "src/"
    }
},
```

# Test
Run command `make test` to check that the code validates.

# To be able to use the module properly you have to add 2 api-keys

## Add api key from [ipstack](https://ipstack.com/)
Create file `/config/api_ipstack.php` and copy the code below or rename the file `/config/api_ipstack_sample.php`.  

```
<?php

return [
    "apiKey" => "Replace this with valid Apikey"
];
```

## Add api key from [openweathermap one-call-api](https://openweathermap.org/api/one-call-api)
Create file `/config/api_owm.php` and copy the code below or rename the file `/config/api_owm_sample.php`.  

```
<?php

return [
    "apiKey" => "Replace this with valid Apikey"
];
```

# Routes
After you have followed the steps above the following routes is available.
```
/api
/weather
/weatherapi
/ip
/ip-json
/geo
/geoapi
```

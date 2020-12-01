Anax weather module (bjos19/anax-weathermodule)
=================================================

# Copy the configuration files and other necessary folders.
`rsync -av vendor/bjos19/anax-weathermodule/config ./`
`rsync -av vendor/bjos19/anax-weathermodule/src ./`
`rsync -av vendor/bjos19/anax-weathermodule/view ./`
`rsync -av vendor/bjos19/anax-weathermodule/test ./`

# Add namespace
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

# To be able to use the module properly you have to enter 2 api-keys

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

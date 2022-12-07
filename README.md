<p align="center">Booking System</p>

## About Booking System

Booking system build using laravel framework.

## requirements

    php 7.4
    php7.4-memcached
    mysql 
    appcache server
    SQLite for testing
## Laravel installations
    clone repository 
    create local database { call it ubex not mandatory but to follow .emv.example :( }
    copy .env, example with name .env add 
    chenge database config on .env DB_DATABASE, DB_USERNAME, DB_PASSWORD
    run the following commands
    cd ubex
    composer install
    php artisan migrate
    php artisan test //to see unit test result and every thing is okay
    php artisan db:seed //to get som dummy data on database .
## Endpoints
`login :`
    http://127.0.0.1:8002/api/v1/login`

        {
        "email" : "test@example.com",
        "password" : "password"
        }

`list last statistics on trip:`
        http://127.0.0.1:8002/api/v1/shipments/statistics

    `query params => ['last_update', 'date_created', 'status', 'type'] `
`


# test-lang-api
## Installation:

Change directory to project and run in your terminal:

`composer install`

Change .env settings for your DB and migrate database:

`php artisan migrate --seed`

Launch web-server:

`php artisan serve`

## Usage:
* All available languages:

`GET /api/langs`

* Texts for current language:

`GET /api/texts/{en|ru|ar}`

* Texts for all languages:

`GET /api/texts`

* Adding new keyword:

`POST /api/key`
```
key = keyword
```

* Adding text for keyword:

`POST /api/key`

```
lang = {en|ru|ar}
key = keyword
text = text for keyword
```

All response have field `status`: `error` or `success`.
If status success, response have data. If not - have `message` field with error description.
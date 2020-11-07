The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## How to build a Laravel API

This is a simple laravel API which includes API versioning (v1 and v2). 

## Getting started

<ol>
  <li>First, clone this repo</li>
  <li>CD into the directory</li>
  <li>Run <b>composer install </b></li>
  <li>Run <b>php artisan key:generate </b></li>
  <li>Run table migrations <b>php artisan migrate </b></li>
  <li>Seed the database with some random data <b> php artisan db:seed </b></li>
  <li>Run <b>php artisan serve</b></li>
</ol>

## How to use (v1)

- Fetch index of all data in Person table with pagination <br><b>localhost:8000/api/v1/people </b> <br>
  <b> Method GET </b> <br>
  
- Fetch single data <br><b>localhost:8000/api/v1/person/5 </b> <br>
<b> Method GET </b> <br>
<b>Sample response</b>
<code>
<pre>
    {
    "data": {
        "id": 5,
        "first_name": "Lenna",
        "last_name": "Jacobs",
        "phone": "1-578-480-5526 x210",
        "email": "sporer.prudence@example.net",
        "country": "Cocos (Keeling) Islands",
        "created_at": "2020-11-07T20:10:56.000000Z",
        "updated_at": "2020-11-07T20:10:56.000000Z"
        }
    }
</pre>
</code>

- Store new data <br><b>localhost:8000/api/v1/person </b> <br>
<b> Method POST </b> <br>
You can pass this in form-data of postman.
<br>
<code>
    <pre>
    {
       "first_name":
       "last_name":
       "email" :
       "phone" :
       "country" :
    }
    </pre>
  </code>
  
- Update a single record <br><b>localhost:8000/api/v1/person/1 </b> <br>
<b> Method PUT </b> <br>
<b>Sample Body </b> <br>
<code>
    <pre>
    {
        "first_name" : "Nnaemeka",
        "last_name" : "Nweke",
        "phone" : "1234567890",
        "email" : "nnaemeka@example.com",
        "country" : "Nigeria"
    }
    </pre>
</code>

- Delete a single record <br><b>localhost:8000/api/v1/person/1 </b> <br>
<b> Method DELETE </b> <br>


- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[OP.GG](https://op.gg)**


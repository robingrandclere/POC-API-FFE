
# POC for FFE licence in full API with LARAVEL 12

## Run the server 

>php artisan serve

## API

### Get the XRSF token
http://localhost:8000/sanctum/csrf-cookie

### Login
>http://localhost:8000/api/login

You must be logged and use the XRSF token in order to use these API below

### Get all the licences
>http://localhost:8000/api/licences

### Get licence info
>http://localhost:8000/api/licence/{id}

### Get licence info
>http://localhost:8000/api/licence/{id}

### Add a licence 
>POST http://localhost:8000/api/licence/add

Please use this body in order to add a new licence
{
      "type_licence": "N",
      "libelle_licence": "New Licence",
      "description": "Licence New pour cadence rapide et lente"
}

### Update a licence 
>PATCH http://localhost:8000/api/licence/{id}/update

Please use this body in order to add a new licence
{
      "type_licence": "A updated by API",
      "libelle_licence": "Licence A updated by API",
      "description": "Licence A updated by API pour cadence rapide et lente"
}

### Delete a licence 
>DELETE http://localhost:8000/api/licence/{id}/delete


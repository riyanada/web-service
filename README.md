# Project: Lumen Service App
# 📁 Collection: Auth - JWT 


## End-point: Auth Register
### Method: POST
>```
>localhost:5000/auth/register
>```
### Body formdata

|Param|value|Type|
|---|---|---|
|name|Firts User|text|
|email|email@gmail.com|text|
|password|12345678|text|
|password_confirmation|12345678|text|



⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: Login Test
### Method: POST
>```
>localhost:5000/auth/login
>```
### Body (**raw**)

```json
{
    "email" : "riyanmaulana402@yahoo.co.id",
    "password" : "password"
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃
# 📁 Collection: Tugas 9 
## End-point: Get All Posts
### Method: GET
>```
>localhost:5000/posts
>```
### Headers

|Content-Type|Value|
|---|---|
|Accept|application/json|


### 🔑 Authentication bearer

|Param|value|Type|
|---|---|---|
|token|eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vbG9jYWxob3N0OjUwMDAvYXV0aC9sb2dpbiIsImlhdCI6MTcwMzQwMzgwOCwiZXhwIjoxNzAzNDA3NDA4LCJuYmYiOjE3MDM0MDM4MDgsImp0aSI6InNoSmFYV0NNSlRpWFl6NzAiLCJzdWIiOiIxIiwicHJ2IjoiMjNiZDVjODk0OWY2MDBhZGIzOWU3MDFjNDAwODcyZGI3YTU5NzZmNyJ9.vr4uodfMjrJzT95eagVsBXWZCEfraGqCX4aPwuI_IFI|string|



⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: Get Detail Post
### Method: GET
>```
>localhost:5000/post/1
>```
### 🔑 Authentication bearer

|Param|value|Type|
|---|---|---|
|token|eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vbG9jYWxob3N0OjUwMDAvYXV0aC9sb2dpbiIsImlhdCI6MTcwMzQwODU2OSwiZXhwIjoxNzAzNDEyMTY5LCJuYmYiOjE3MDM0MDg1NjksImp0aSI6IjdsSWFMRU9UMVpsTThoWFYiLCJzdWIiOiIxIiwicHJ2IjoiMjNiZDVjODk0OWY2MDBhZGIzOWU3MDFjNDAwODcyZGI3YTU5NzZmNyJ9.m48O3BKtWTb3h49RddH566yXeenUwS0JkKbNx7jTv3o|string|



⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: Adding Post
### Method: POST
>```
>localhost:5000/posts
>```
### Headers

|Content-Type|Value|
|---|---|
|Accept|application/json|


### Body (**raw**)

```json
{
    "title": "Cara membuat5",
    "status": "draft",
    "content": "Bisa semuannya!",
    "categories_id": 1
}
```

### 🔑 Authentication bearer

|Param|value|Type|
|---|---|---|
|token|eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vbG9jYWxob3N0OjUwMDAvYXV0aC9sb2dpbiIsImlhdCI6MTcwMzQwODU2OSwiZXhwIjoxNzAzNDEyMTY5LCJuYmYiOjE3MDM0MDg1NjksImp0aSI6IjdsSWFMRU9UMVpsTThoWFYiLCJzdWIiOiIxIiwicHJ2IjoiMjNiZDVjODk0OWY2MDBhZGIzOWU3MDFjNDAwODcyZGI3YTU5NzZmNyJ9.m48O3BKtWTb3h49RddH566yXeenUwS0JkKbNx7jTv3o|string|



⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: Update Post
### Method: PUT
>```
>localhost:5000/post/1
>```
### Body (**raw**)

```json
{
    "title": "",
    "status": "draft",
    "content": "Bisa semuannya!",
    "user_id": 1,
    "categories_id": 1
}
```

### 🔑 Authentication bearer

|Param|value|Type|
|---|---|---|
|token|R81FMxv7y3SB/dRZlM/EQU9pQI50lmFfDuYjP7QwHVg=|string|



⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: Delete Post
### Method: DELETE
>```
>localhost:5000/post/1
>```
### 🔑 Authentication bearer

|Param|value|Type|
|---|---|---|
|token|eua5XmIVCL4dlEuZT/ZX9pfXTqllJvtg9DcASUEfggk=|string|
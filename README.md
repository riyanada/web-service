# Project: Lumen Service App
Tugas 11 - Web Service
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
# 📁 Collection: Tugas 11 


## End-point: Create Update Profile
### Method: POST
>```
>localhost:5000/profiles
>```
### Body formdata

|Param|value|Type|
|---|---|---|
|name|riyaada|text|
|no_telp|89528989758|text|
|alamat|Jl Cimahi|text|
|tempat_lahir|Cimahi|text|
|tgl_lahir|16-11-1998|text|
|bio|mantap bgs|text|
|pp|/C:/Users/riyanada/Downloads/1x1.jpg|file|


### 🔑 Authentication bearer

|Param|value|Type|
|---|---|---|
|token|{{accessToken}}|string|



⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: Get Profile
### Method: GET
>```
>localhost:5000/profile/1
>```
### 🔑 Authentication bearer

|Param|value|Type|
|---|---|---|
|token|{{accessToken}}|string|



⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: Get Image
### Method: GET
>```
>localhost:5000/profile/image/1_6592f819001d9
>```
### 🔑 Authentication bearer

|Param|value|Type|
|---|---|---|
|token|{{accessToken}}|string|



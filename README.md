
### Steps

1. Download this folder
2. Keep this folder in C:\xampp\htdocs
3. Open Xampp start Apache and MySQL
4. Go to ``` C:\xampp\htdocs\this foler name ```
5. Run the server at below address
```
http://localhost/this folder name/
```

### Create database named   ``` user_db ```
### Into ``` user_db ``` create table  named  ```user``` like below

| Column	             | Type                 |NuLL |extra            |
| -----------------------|----------------------|-----|-----------------|
|  id   (primary)        | int(10)              |  No |auto_incremented |
|  name                  | varchar(255)         |  No |                 |
|  email  (email_unique) | varchar(255)         |  No |                 |
|  password              | varchar(255)         |  No |                 |
|  role                  | enum('admin', 'user')|  No |                 |

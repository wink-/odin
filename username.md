# Switch login field from email to username
-[x] Add username field to migration
-[x] Adjust seeds to fill in username
-[x] Adjust model to accept fillable fields (username)
-[x] Edit user views to show new fields
-[x] Adjust validation on UserController
```php
/**
    * Override the username method used to validate login
    *
    * @return string
    */
    public function username()
    {
        return 'username';
    } 
```
-[X] Fix login view to accept username instead of email
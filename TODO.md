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

# TODO
-[x] Check over existings views for missing @can statements

-[] Figure out about nesting route groups in middleware.

-[X] Figure out date/time formatting in Workorder's datatable

-[X] Add picture to DMR's

-[] Add customer DMR reports

-[] Make DMR fallback on finding a Workorder in workorder history if it is not found in current workorders
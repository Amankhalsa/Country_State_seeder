# Country_State_seeder
# Create Seeder with bellow command <a href="https://www.itsolutionstuff.com/post/how-to-add-country-list-in-laravelexample.html" >Follow</a>
    php artisan make:seeder CountrySeeder
# now let's run seeder:
    php artisan db:seed --class=CountrySeeder
# use full 
        Country::truncate();
        foreach ($countries as $key => $value) {
        Country::create($value);
        }
----------------------------------
        State::truncate();
        foreach ($states as $key => $value) {
                    State::create($value);
                }



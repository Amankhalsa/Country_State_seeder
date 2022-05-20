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

# for user seeder 
    php artisan db:seed   
* for insert data in DB first you have to model class and migrate it 
* ========================================
* 2nd make a seender 
* ========================================
* 3rd then add data in  example Income seeder
* ========================================
* like that way and import model class name 
========================================
use App\Models\Income;
----------------------
       $income =[
            ['name' => 'Upto INR 1 Lakh'], 
            ['name' => 'INR 1 Lakh to 2 Lakh'], 
            ['name' => 'INR 2 Lakh to 4 Lakh'], 
            ['name' => 'INR 4 Lakh to 7 Lakh'], 
            ['name' => 'INR 7 Lakh to 10 Lakh'], 
            ['name' => 'INR 10 Lakh to 15 Lakh'], 
            ['name' => 'INR 15 Lakh to 20 Lakh'], 
            ['name' => 'INR 20 Lakh to 30 Lakh'], 
            ['name' => 'INR 30 Lakh to 50 Lakh'], 
            ['name' => 'INR 50 Lakh to 75 Lakh'], 
            ['name' => 'INR 75 Lakh to 1 Crore'], 
            ['name' => 'INR 1 Crore & above'], 
            ['name' => 'Not applicable'],  
        ];
        foreach ($income as $key => $val) {
            Income::create($val);
        }
========================================


* 4th Add this function using model class name 
========================================
* 5th Run this commad****
    
        php artisan db:seed --class=EducationSeeder

                  $this->call([
                            IncomeSeeder::class,
                        ]);
               
main Steps:

    *   php artisan make:model Education -m   
    *   php artisan make:seeder IncomeSeeder
    *   php artisan db:seed --class=EducationSeeder

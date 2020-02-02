> <h2 style="text-align: center"> Ecommerce অ্যাপ্লিকেশান এর জন্যে লারাভেল ব্যাবহার করে API তৈরি - লারাভেল ভার্সন - ৫.৬</h2>

> আমাদের API এর Fields সমূহ নিচে দেওয়া হল -

    ১। User + ২ + ৩
        1. id->primary_key->int
        2. name->required->str
        3. email->required->str
        4. password->required->str
        5. verified->required->bool
        6. verified_token->optional->str
        7. admin->required->bool
    
    ২। Buyer + Transaction
        1. transaction->set
            2.1 Transaction
                1. id->PrimaryKey
                2. quantity->required
                3. buyer->required
                4. product->required

    ৩। Seller
        1. products->set
            3.1 Product
                1. id->primaryKey
                2. name->required
                3. description->required
                4. quantity->required
                5. status->required
                6. seller->required
                7. transaction->set
                8. categories->set

    ৪। Category
        1. id->primaryKey
        2. name->required
        description->required
        products->set


১। প্রথমেই আমাদের লারাভেল Structure তৈরি করতে হবে Model এর জন্যে এবং migration করতে হবে ।
```sh
    php artisan make:model User -m
    php artisan make:model Buyer -m
    php artisan make:model Seller -m
    php artisan make:model Product -m
    php artisan make:model Category -m
    php artisan make:model Transaction -m
```

২। এখন আমাদের লারাভেল API এর জন্যে Controller তৈরি করতে হবে এবং এই Controller গুলোকে এক একটা ফোল্ডারে রাখতে হবে ।

```sh
    php artisan make:controller User/UserController
    php artisan make:controller Buyer/BuyerController 
    php artisan make:controller Seller/SellerController
    php artisan make:controller Product/ProductController
    php artisan make:controller Category/CategoryController
    php artisan make:controller Transaction/TransactionController
```

৩। এখন আমাদের route/api.php এর মধ্যে কি কি end point থাকবে তা বলে দিতে হবে ।
যখন আমরা চাইব আমাদের API এর end-point গুলোকে লিমিটেড করে দিতে তখন আমরা 'only' অথবা 'except' ব্যাবহার করে বলে দিতে পারি আমরা কোন কোন end-point দেখতে চাই ।
```php
    // Buyer
    Route::resource('buyer', 'Buyer\BuyerController', ['only' => ["index", "show"]]);

    // Categories
    Route::resource('categories', 'Category\CategoryController', ['except' => ["create", "edit"]]);

    // Products
    Route::resource('products', 'Product\ProductController', ['only' => ["index", "show"]]);

    // Sellers
    Route::resource('sellers', 'Seller\SellerController', ['only' => ["index", "show"]]);

    // Transaction
    Route::resource('transactions', 'Transaction\TransactionController', ['only' => ["index", "show"]]);

    // Users
    Route::resource('users', 'User\UserController', ['except' => ["create", "edit"]]);
```

৪। এখন আমাদের RESTFul API এর Models এবং এর Relationship করতে হবে Laravel Eloquent এর মাধ্যমে ।

    ৫। আমাদের সকল মডেল এর Properties সেট করে দিতে হবে ।
        ১। মডেল গুলোর মধ্যে সম্পর্ক 
```php

class User extends Authenticatable
{
    use Notifiable;
    const VERIFIED_USER = '1';
    const UNVERIFIED_USER = '0';

    const ADMIN_USER = 'true';
    const REGULAR_USER = 'false';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'verified', // নতুন যুক্ত 
        'verification_token', // নতুন যুক্ত 
        'admin', // নতুন যুক্ত 

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'verification_token',// নতুন যুক্ত 
    ];

    public function isVerified() // নতুন যুক্ত 
    {
        return $this->verified == User::VERIFIED_USER;
    }

    public function isAdmin() // নতুন যুক্ত 
    {
        return $this->admin == User::ADMIN_USER;
    }

    public static function generateVerificationCode() // নতুন যুক্ত  
    {
        return str_random(40);
    }
}

```

    আমার প্রশ্ন -
        ১। fillable এর কাজ কি ?
        ২। Foreign key কি ? Foreign key কাজ কি ?




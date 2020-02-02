> ## লারাভেল ৬.১১ এর mySql এর মধ্যে ডাটা পাঠাবার সিস্টেম -

    ১। প্রথমেই আমাদের একটা Database table তৈরি করে নিতে হবে -
        যেমন - products নামের একটা টেবিল তৈরি করলাম 
    ২। একটা Controller তৈরি করতে হবে 
        php artisan make:controller API/Products
    ৩। আমাদের এখন একটা Route বলে দিতে হবে routes/api.php এই ফাইল এ 
        Route::post('product', 'API\Products@save');
    ৪। আমাদের Database এর টেবিল এর নামে একটা Model তৈরি করতে হবে ।
        php artisan make:model Product

 > আমাদের কিছু কোড লেখা লাগবে ডাটা save করার জন্যে 
 





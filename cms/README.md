
<strong><center><h3>Building a cms for blogging system</h3></center></strong><hr/>
### Chapter One
1. Basic auth scaffolding
    ```sh
        composer require laravel/ui
        php artisan ui bootstrap --auth
    ```
2. Laying out the UI and creating Category and Post model with migration data
3. Creating Category form and view it
4. Store category to database and validate the user input
5. Request object custom request - Example
    1. Create a request object by using artisan command as - 
        ```sh
        php artisan make:request CreateCategoryRequest
        ```
    2. Go to Request folder and write rules for the category as 
```php
    // In here we can provide authentication and rules or validations as 

        public function authorize()
        {
            return true;
        }

        /**
        * Get the validation rules that apply to the request.
        *
        * @return array
        */
        public function rules()
        {
            return [
                "name" => "required|unique:categories",
            ];
        }
```
6. Update Category
7. Destroy Category with javascript and modal

### Chapter Two
1. Creating post and index page
2. Image needs to be saved in storage folder and have to link it through php artisan command. The process is given below -
```php
    $image = $request->image->save('posts');
    Post::create([
        'image': $image,
    ]);

    // For storing image in storage folder we have to add a single line in our .env file as - "FILESYSTEM_DRIVER=public"
    // The image will saved in storage/app/public/posts. 

```
3. We have to link this storage folder with our public folder using artisan command as - 
```sh
    php artisan storage:link
```
4. Soft deleting a model or in our case soft deleting a Post model - For soft delate we have to go for a short listed work in both our migration and Model class corresponding to our delation or trashed.
    1. First of all we have to go to our model from our case in Post model and write one line of code as " use SoftDeletes; ". 

    2. After that we have to add a column in our migration named as "deleted_at" we can make this by making a new migration file which will add that extra field to our colum by making a new migration file which will connected to the create_post_database_table file by using php artisan command as -
    ```sh
        php artisan make:migration add_deleted_at_to_post --table=posts
    ```
    3. Permantly delete trashed Post by - 
    ```php
    public function destroy($id)
    {
        $post = Post::withTrashed()->where('id', $id)->firstOrFail();

        if ($post->trashed()) {
            Storage::delete($post->image);
            $post->forceDelete();
        } else {
            $post->delete();
        }
        return redirect(route('post.index'))->with('success', 'Post has been trashed');
    }
    ```
    4. Delete image that are saved in storage folder using 
    ```php
        // Bug - not working in this project
        Storage::delete($post->image)
    ```
    5. Update and add trix editor and flat picker for time and writings.
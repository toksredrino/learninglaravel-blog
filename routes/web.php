<?php
use App\Post;
//use Illuminate\Database\Eloquent\ModelNotFoundException;

Route::get('/', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{id}', function($id) {
	$post = Post::findOrFail($id);
	return $post;
});

/*Route::get('posts/{post}', 'PostsController@show');*/
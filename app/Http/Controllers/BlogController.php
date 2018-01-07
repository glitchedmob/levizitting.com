<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
	public function index()
	{
		$response = [];

		if(request()->query('posts') !== 'false') {
			$perPage = request()->query('per_page') ?? 5;
			$response['posts'] = Post::published()->latest()->paginate((int)$perPage);
		}

		return response()->json(
			$this->buildResponse($response)
		);
	}

	public function single(Post $post)
	{
		return response()->json(
			$this->buildResponse([
				"post" => $post
			])
		);
	}

	private function buildResponse($response) {

		if(request()->query('popular') === 'true') {
			$response['popular'] = Post::popular();
		}

		if(request()->query('recent') === 'true') {
			$response['recent'] = Post::recent();
		}

		return $response;
	}

}

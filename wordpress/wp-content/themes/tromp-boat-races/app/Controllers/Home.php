<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Home extends Controller
{

	public function introduction()
	{
		return "test";
	}

	public function news_settings()
	{
		return (object) [
			"category" => get_field("news_post_category", "option"),
			"limit" => get_field("news_limit", "option")
		];
	}

	public function notifications_settings() {
		return (object) [
			"category" => get_field("notifications_post_category", "option"),
			"limit" => get_field("notifications_limit", "option") 
		];
	}
}

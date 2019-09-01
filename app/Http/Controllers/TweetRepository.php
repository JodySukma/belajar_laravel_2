<?php

namespace App\Http\Controllers;

use App\Tweet;
use http\Client\Curl\User;
use Illuminate\Http\Request;

class TweetRepository
{
    protected $model;

    public function __construct(Tweet $tweet)
    {
        $this->model = $tweet;
    }

    public function getLatestTweets($userId)
    {
        return $this->model->where('user_id', $userId)->orderBy('created_at', 'desc');
    }
}

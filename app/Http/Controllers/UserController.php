<?php

namespace App\Http\Controllers;

use App\Tweet;
use http\Client\Curl\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $tweetRepository;

    public function __construct(TweetRepository $tweetRepository)
    {
        $this->tweetRepository = $tweetRepository;
    }

    public function getTweets(Request $request)
    {
        $user = User::find($request->user_id);
        $latestTweets = $this->tweetRepository->getLatestTweets($user->id);
    }
}

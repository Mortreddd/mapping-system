<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        return view('pages.feedback');
    }

    public function show()
    {
        return view('pages.admin.feedbacks');
    }
}
<?php

namespace App\Http\Controllers;

use App\Http\Requests\Landings\FeedbackRequest;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function store(FeedbackRequest $request)
    {
        Feedback::create($request->validated());

        if ($request->ajax()) {
            return response('OK', 200);
        } else {
            return response('Not Ajax', 500);
        }
    }
}

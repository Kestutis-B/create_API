<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\ContactUs;
use App\Http\Requests\ContactUsRequest;
use App\Mail\ContactUsMail;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function __invoke(ContactUsRequest $request)
    {
        ContactUs::create($request->validated());

        return response()->json(Response::HTTP_CREATED);
    }
}

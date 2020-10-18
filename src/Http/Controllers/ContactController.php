<?php


namespace Garstea\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Garstea\Contact\Mail\ContactMailable;
use Garstea\Contact\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{

    public function __construct()
    {
        $this->middleware('web');
    }

    public function index()
    {
        return view('contact::index');
    }

    public function sendEmail(Request $request)
    {
        Contact::create($request->all());
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->post('message'), $request->post('name'), $request->post('email')));
        return Redirect::route(config('contact.redirect_to'))->with('success', 'Message was successfully sent.');
    }
}

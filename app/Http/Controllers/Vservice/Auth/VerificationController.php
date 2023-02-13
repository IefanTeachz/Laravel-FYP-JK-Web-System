<?php

namespace App\Http\Controllers\Vservice\Auth;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Auth\Access\AuthorizationException;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | vservice that recently registered with the application. Emails may also
    | be re-sent if the vservice didn't receive the original email message.
    |
    */

    use VerifiesEmails;

    /**
     * Where to redirect vservices after verification.
     *
     * @var string
     */
    protected $redirectTo = '/vservice';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('vservice.auth');
        $this->middleware('signed')->only('vservice.verify');
        $this->middleware('throttle:6,1')->only('vservice.verify', 'resend');
    }

    /**
     * Show the email verification notice.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        return $request->user('vservice')->hasVerifiedEmail()
            ? redirect($this->redirectPath())
            : view('vservice.auth.verify');
    }

    /**
     * Mark the authenticated user's email address as verified.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function verify(Request $request)
    {
        if (! hash_equals((string) $request->route('id'), (string) $request->user('vservice')->getKey())) {
            throw new AuthorizationException;
        }

        if (! hash_equals((string) $request->route('hash'), sha1($request->user('vservice')->getEmailForVerification()))) {
            throw new AuthorizationException;
        }

        if ($request->user('vservice')->hasVerifiedEmail()) {
            return redirect($this->redirectPath());
        }

        if ($request->user('vservice')->markEmailAsVerified()) {
            event(new Verified($request->user('vservice')));
        }

        return redirect($this->redirectPath())->with('verified', true);
    }

    /**
     * Resend the email verification notification.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function resend(Request $request)
    {
        if ($request->user('vservice')->hasVerifiedEmail()) {
            return redirect($this->redirectPath());
        }

        $request->user('vservice')->sendEmailVerificationNotification();

        return back()->with('resent', true);
    }
}

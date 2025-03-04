<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CredentialsController extends Controller
{
    function showCredentials(){
        $email = Auth::user()->email;
        $name = Auth::user()->name;
        return view('pages.Credentials', ['email' => $email, 'name' => $name]);
    }
    function showPasskey(){
        return view('Passkeys');
    }
    function showPayments(){
        return view('Payments');
    }
    function showSecureNotes(){
        return view('SecureNotes');
    }
    function showPersonalInfo(){
        return view('PersonalInfo');
    }
    function showIds(){
        return view('Ids');
    }
    function showSharingCenter(){
        return view('SharingCenter');
    }
    function showPasswordHealth(){
        return view('PasswordHealth');
    }
    function showDarkwebMonitoring(){
        return view('DarkwebMonitoring');
    }
    function showVPN(){
        return view('VPN');
    }
}

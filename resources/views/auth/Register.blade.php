@extends('layouts.auth')

@section('title', 'Register - Dashlane Clone')

@section('content')
<div class="w-3/4 bg-gray-100 flex flex-col justify-center px-16 relative">
    <img src="{{ asset('images/dashlane_logo.jfif') }}" alt="Logo" class="absolute top-6 left-6 w-20 rounded-full shadow-lg">

    <div class="mt-24">
        <h1 class="text-4xl font-bold mb-4">Welcome to Dashlane on the web</h1>
        <p class="text-gray-600">Access your logins and personal data in the web app — quickly and securely.</p>
    </div>
</div>

<div class="w-1/4 flex flex-col justify-center px-10 relative bg-white">

    <div class="flex justify-end items-center space-x-2 absolute top-6 right-6">
        <p class="text-sm text-gray-600">Already have an account?</p>
        <a href="{{route('login')}}" class="bg-teal-600 text-white px-4 py-2 rounded-lg hover:bg-teal-700 transition">Login</a>
    </div>

    <h2 class="text-2xl font-semibold mb-2">Start using Dashlane for free</h2>
    <p class="text-gray-600 text-sm mb-4">Enter the email you'd like to associate with your Dashlane account.</p>

    <form action="{{route('register')}}" method="POST" class="mt-4 space-y-4">
        @csrf

        <div>
            <label for="exampleInputEmail1" class="block text-gray-700 text-sm font-bold mb-2">Email address</label>
            <input type="email" name="email" value="{{old('email')}}" id="exampleInputEmail1"
                class="w-full border rounded p-2 focus:ring-2 focus:ring-teal-500 focus:outline-none">
            <p class="text-gray-600 text-xs italic mt-1">We'll never share your email with anyone else.</p>
        </div>

        <div>
            <label for="exampleInputName1" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
            <input type="text" name="name" id="exampleInputName1"
                class="w-full border rounded p-2 focus:ring-2 focus:ring-teal-500 focus:outline-none">
        </div>

        <div>
            <label for="exampleInputPassword1" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
            <input type="password" name="password" id="exampleInputPassword1"
                class="w-full border rounded p-2 focus:ring-2 focus:ring-teal-500 focus:outline-none">
        </div>

        <div>
            <label for="exampleInputConfirmPassword1" class="block text-gray-700 text-sm font-bold mb-2">Confirm Password</label>
            <input type="password" name="password_confirmation" id="exampleInputConfirmPassword1"
                class="w-full border rounded p-2 focus:ring-2 focus:ring-teal-500 focus:outline-none">
        </div>

        <div class="flex justify-center">
            <button type="submit" class="bg-teal-600 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded focus:outline-none">
                Register
            </button>
        </div>
    </form>

</div>
@endsection

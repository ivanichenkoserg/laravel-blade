@extends('layouts.auth', ['title' => __('Verify Your Email Address')])

@section('description')
    {{ __('Before proceeding, please check your email for a verification link.') }}
    {{ __('If you did not receive the email, click the button below to request another one.') }}
@endsection

@section('content')
    <x-form :action="route('verification.resend')">
        <div class="mt-6">
            <span class="block w-full rounded-md shadow-sm">
                <x-submit class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                    {{ __('Request a new verification link') }}
                </x-submit>
            </span>
        </div>
    </x-form>
@endsection

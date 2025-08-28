@extends('layouts.guest')
@section('title', 'Login')

@section('content')
    <section class="bg-blue-300 flex items-center justify-center w-full h-screen">
        <div class="flex flex-col gap-4 bg-white rounded-lg shadow-lg p-10 w-lg">
            <h1 class="text-2xl font-bold text-center">Register</h1>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="flex flex-col mb-6">
                    <label for="email">Email</label>
                    <input type="email" class="border border-gray-300 p-2 rounded" name="email" id="email" required>
                </div>
                <div class="flex flex-col mb-6">
                    <label for="password">Password</label>
                    <input type="password" class="border border-gray-300 p-2 rounded" name="password" id="password"
                        required>
                </div>
                <div class="flex flex-col mb-6">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" class="border border-gray-300 p-2 rounded" name="password_confirmation"
                        id="password_confirmation" required>
                </div>
                <div>
                    <button type="submit"
                        class="bg-blue-500 text-white py-2 px-5 rounded hover:bg-blue-700 cursor-pointer">Register</button>
                    <span>Already have an account? <a href="{{ route('login') }}" class="text-blue-400">Login</a></span>
                </div>

            </form>
        </div>
    </section>
@endsection

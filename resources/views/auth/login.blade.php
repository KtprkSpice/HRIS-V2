@extends('layouts.guest')
@section('title', 'Login')

@section('content')
    <section class="bg-blue-300 flex items-center justify-center w-full h-screen">
        <div class="flex flex-col gap-4 bg-white rounded-lg shadow-lg p-10 w-lg">
            <h1 class="text-2xl font-bold text-center">Login</h1>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="flex flex-col mb-6">
                    <label for="email">Email</label>
                    <input type="email" class="border border-gray-300 p-2 rounded" name="email" id="email" required>
                    @if ($errors->all())

                        @foreach ($errors->all() as $error)
                            <span>{{ $error }}</span>
                        @endforeach
                    @endif

                </div>
                <div class="flex flex-col mb-6">
                    <label for="password">Password</label>
                    <input type="password" class="border border-gray-300 p-2 rounded" name="password" id="password"
                        required>
                    @if ($errors->all())

                        @foreach ($errors->all() as $error)
                            <span>{{ $error }}</span>
                        @endforeach
                    @endif
                </div>
                <div>
                    <button type="submit"
                        class="bg-blue-500 text-white py-2 px-5 rounded hover:bg-blue-700 cursor-pointer">Login</button>
                    <span>Doesn't have an account? <a href="{{ route('register') }}" class="text-blue-400">Create
                            one</a></span>
                </div>

            </form>

        </div>
    </section>
@endsection

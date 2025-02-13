@extends('layouts.app')

@section('content')
    <div class="flex flex-col w-full items-center py-10 mt-20">

        <h1 class="mb-5 text-xl">Create an account</h1>
        <form method="POST" action="{{ route('users.store') }}">
            @csrf
            <div class="flex flex-col gap-3 xl:w-[20vw]">
                <div class="flex flex-col gap-1">
                    <label for="email" class="text-sm">Email</label>
                    <input type="email" id="email" name="email" class="input" required></input>
                    @error('email')
                        <p class="text-xs text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col gap-1">
                    <label for="name" class="text-sm">Username</label>
                    <input type="text" id="name" name="name" class="input" required></input>
                    @error('name')
                        <p class="text-xs text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col gap-1">
                    <label for="password" class="text-sm">Password</label>
                    <input type="password" id="password" name="password" class="input" required></input>
                    @error('password')
                        <p class="text-xs text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-between mt-4">
                    <a href="/" class="btn">Cancel</a>
                    <button type="submit" class="btn">Create</button>
                </div>
            </div>

        </form>
    </div>
@endsection

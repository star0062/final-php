
{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ url('/table-sh') }}"> Tableau de Superheros</a>

                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu</title>
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body>

    <x-app-layout>
        <x-slot name="header">
            <h1 class=>
                {{ __('Dashboard') }}
            </h1>
        </x-slot>

        <div class=>
            <div >
                <div class=>
                    <div class=>
                        <a class="btn" href="{{ url('/table-sh') }}"> Tableau de Superheros</a>

                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>

</body>
</html>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Condovid
        </h2>
    </x-slot>

    <style>
        .card {
            padding: 25px 15px;
        }

        h2 {
            font-size: 18pt;
        }
    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="">
                @foreach ($data as $d)
                    <div class="card mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                        <h2>{{ $d->title }} - {{ $d->autor }}</h2>
                        <p>{{ $d->conteudo }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>

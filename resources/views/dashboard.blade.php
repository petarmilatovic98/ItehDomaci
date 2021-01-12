<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <div class="flex">
                    <div class="flex-auto text-2xl mb-4">Lista pesama</div>
                    <div clasd="flex-auto text-right mt-2">
                        <a href="/song" class="bg-blue-500 hover: bg-blue-760 text-white font-bold py-2 px-4 rounded">Dodaj novu pesmu</a>
                    </div>
                </div>
                <table class=" w-full text-md rounded mb-4">
                    <thead>
                        <tr class="border-b">
                            <th class="text-left p-3 px-5">Naziv pesme</th>
                            <th class="text-left p-3 px-5">Izvodjac</th>
                            <th class="text-left p-3 px-S">Akcije</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach(auth()->user()->songs as $song)
                        <tr class="border-b hover: bg-orange-100">
                            <td class="p-3 px-5">
                                {{$song->song_name}}
                            </td>
                            <td class="p-3 px-5">
                                {{$song->artist}}
                            </td>
                            <td class="p-3 px-5">
                                <a href="/song/{{$song->id}}" name="edit" class="mr-3 text-sm bg-blue-500 hover: bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Izmeni</a>
                                <form action=" /song/{{$song->id}}" class="inline-block">
                                    <button type="submit" name="delete" formmethod="POST" class="text-sm bg-red-500 hover: bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Obrisi</button>
                                    {{ csrf_field() }}
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Izmeni pesmu') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <form method="POST" action="/song/{{ $song->id }}">
                    <div style="display:flex; justify-content:space-between">
                        <div class="form-group">
                            <input type="text" name="song_name" class="bg-gray-100 rounded border border-gray-400 leading-normal py-2 px-3" />
                            @if ($errors->has('song_name'))
                            <span class="text-danger">{{ $errors->first('song_name') }}</span>
                            @endif
                            <input type="text" name="artist" class="bg-gray-100 rounded border border-gray-400 leading-normal py-2 px-3" />
                            @if ($errors->has('artist'))
                            <span class="text-danger">{{ $errors->first('artist') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <button type="submit" name="update" class="bg-blue-500 hover: bg-blue-700 text-white font-bold py-2 px-4 rounded">Izmeni</button>
                        </div>
                    </div>
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
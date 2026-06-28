@extends('layouts.Master')

@section('title', 'Home')

@section('content')

<div class="bg-white p-8 rounded-lg shadow-md">
    <h1 class="text-4xl font-bold text-blue-600 mb-4">
        Welcome to Our {{ $page }} Page
    </h1>
    <div>
        <form @if(isset($note)) action="{{ route('update', ['id' => $note->id]) }}" @else action="/save" @endif method="POST" class="mb-6">
            @csrf
            @if(isset($note))
                @method("PUT")
            @endif
            <label for="note" class="block text-gray-700 font-bold mb-2">Note:</label>
            <input type="text" id="note" name="note" @if(isset($note)) value="{{ old('note', $note->note) }}" @else value="{{ old('note') }}" @endif class="border border-gray-300 
            w-lg
            rounded py-2
             px-4 focus:outline-none 
            focus:ring-2 focus:ring-blue-500">
            
            <button type="submit" class="bg-blue-600 text-white px-5 py-2 rounded hover:bg-blue-700">
                Submit
            </button>
            @error('note')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>

            @enderror
        </form>
    </div>
    <div class="mt-8 w-lg overflow-x-auto shadow-md rounded-lg ">
        <table class="min-w-full bg-white border border-gray-200 outline-0 text-left">
            <thead class="bg-gray-100">
                <tr class="text-gray-600 uppercase text-sm leading-normal">
                    <th class=" px-4 py-2">ID</th>
                    <th class=" px-4 py-2">Note</th>
                    <th class=" px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach( $notes as $note)
                
                    <tr>
                        <td class=" px-4 py-2">{{ $note->id }}</td>
                        <td class=" px-4 py-2">{{ $note->note }}</td>
                        <td class=" px-4 py-2">
                            <a href="/edit/{{ $note->id }}" class="bg-green-600 text-white px-3 py-1 rounded hover:bg-green-700">
                                Edit
                            </a>
                            <form action="/delete/{{ $note->id }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                
            </tbody>
        </table>

    </div>

</div>

@endsection
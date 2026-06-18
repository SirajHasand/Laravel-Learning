@extends('layouts.Master')

@section('title', 'Home')

@section('content')

<div class="bg-white p-8 rounded-lg shadow-md">
    <h1 class="text-4xl font-bold text-blue-600 mb-4">
        Welcome to Our {{ $page }} Page
    </h1>
    <div>
        <form action="">
            <label for="note" class="block text-gray-700 font-bold mb-2">Note:</label>
            <input type="text" id="note" name="note" class="border border-gray-300 
            w-lg
            rounded py-2
             px-4 focus:outline-none 
            focus:ring-2 focus:ring-blue-500">
            <button type="submit" class="bg-blue-600 text-white px-5 py-2 rounded hover:bg-blue-700">
                Submit
            </button>
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
                
                    <tr>
                        <td class=" px-4 py-2">1</td>
                        <td class=" px-4 py-2">Sample Note</td>
                        <td class=" px-4 py-2">
                            <button class="bg-green-600 text-white px-3 py-1 rounded hover:bg-green-700">
                                Edit
                            </button>
                            <button class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700">
                                Delete
                            </button>
                        </td>
                    </tr>
                
            </tbody>
        </table>

    </div>

</div>

@endsection
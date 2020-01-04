@extends('layouts.app')

@section('title', 'Categories')

@section('content')
<div class="text-gray-900 bg-gray-200">
    <div class="p-4 flex">
        <h1 class="text-3xl">
            Category
        </h1>
    </div>
    <div class="flex justify-between pr-6 py-2">
        <div class="relative">
            <span class="relative inline-block">
                <input id="docsearch" class="bg-white focus:outline-none shadow-md border border-transparent placeholder-gray-600 rounded-lg py-2 pr-4 pl-10 block w-full appearance-none leading-normal" type="text" placeholder="Search" autocomplete="off">
            </span>
            <div class="pointer-events-none absolute inset-y-0 left-0 pl-4 flex items-center">
                <svg class="fill-current pointer-events-none text-gray-600 w-4 h-4" 
                    xmlns="http://www.w3.org/2000/svg" 
                    viewBox="0 0 20 20">
                    <path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path>
                </svg>
            </div>
        </div>
        <div class="pt-1">
        <a href="{{ route('category.create') }}" class="text-sm flex bg-blue-500 hover:bg-blue-700 text-white py-1 px-4 rounded-lg focus:outline-none focus:shadow-outline">Create Categores</a>
        </div>
    </div>
    <div class="flex flex-col justify-center bg-white shadow rounded-t-lg">
        <div class="flex justify-between">
            <div class="flex py-3 px-2">
                <label class="flex items-center">
                    <input type="checkbox" class="form-checkbox">
                    <span class="pl-1 text-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24">
                            <path class="heroicon-ui" d="M15.3 9.3a1 1 0 011.4 1.4l-4 4a1 1 0 01-1.4 0l-4-4a1 1 0 011.4-1.4l3.3 3.29 3.3-3.3z"/>
                        </svg>
                    </span>
                </label>
            </div>
            <div class="py-2 px-2">
                <button class="flex mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" 
                         width="24" height="24">
                         <path class="heroicon-ui" d="M2.3 7.7A1 1 0 012 7V3a1 1 0 011-1h18a1 1 0 011 1v4a1 1 0 01-.3.7L15 14.42V17a1 1 0 01-.3.7l-4 4A1 1 0 019 21v-6.59l-6.7-6.7zM4 4v2.59l6.7 6.7a1 1 0 01.3.71v4.59l2-2V14a1 1 0 01.3-.7L20 6.58V4H4z"/>
                    </svg>
                </button>
            </div>
        </div>
        <table class="w-full text-md">
            <thead>
                <tr class="border bg-gray-200">
                    <th class="text-left p-1 px-5">Name</th>
                    <th class="text-left p-1 px-5">Email</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @for($i=0; $i <= 10; $i++)
                <tr class="border-b hover:bg-orange-100">
                    <td class="p-3 px-5">dfd</td>
                    <td class="p-3 px-5">dfdsfds</td>
                    <td class="p-3 px-5 flex justify-end">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path class="heroicon-ui text-gray-100" d="M17.56 17.66a8 8 0 01-11.32 0L1.3 12.7a1 1 0 010-1.42l4.95-4.95a8 8 0 0111.32 0l4.95 4.95a1 1 0 010 1.42l-4.95 4.95zm-9.9-1.42a6 6 0 008.48 0L20.38 12l-4.24-4.24a6 6 0 00-8.48 0L3.4 12l4.25 4.24zM11.9 16a4 4 0 110-8 4 4 0 010 8zm0-2a2 2 0 100-4 2 2 0 000 4z"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path class="heroicon-ui text-gray-100" d="M8 6V4c0-1.1.9-2 2-2h4a2 2 0 012 2v2h5a1 1 0 010 2h-1v12a2 2 0 01-2 2H6a2 2 0 01-2-2V8H3a1 1 0 110-2h5zM6 8v12h12V8H6zm8-2V4h-4v2h4zm-4 4a1 1 0 011 1v6a1 1 0 01-2 0v-6a1 1 0 011-1zm4 0a1 1 0 011 1v6a1 1 0 01-2 0v-6a1 1 0 011-1z"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path class="heroicon-ui text-gray-100" d="M6.3 12.3l10-10a1 1 0 011.4 0l4 4a1 1 0 010 1.4l-10 10a1 1 0 01-.7.3H7a1 1 0 01-1-1v-4a1 1 0 01.3-.7zM8 16h2.59l9-9L17 4.41l-9 9V16zm10-2a1 1 0 012 0v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6c0-1.1.9-2 2-2h6a1 1 0 010 2H4v14h14v-6z"/></svg>
                    </td>
                </tr>
                @endfor
            </tbody>
        </table>
    </div>
</div>
@endsection

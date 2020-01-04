@extends('layouts.app')

@section('title', 'Settings')

@section('content')
<div class="text-gray-900 bg-gray-200">
    <div class="p-4 flex">
        <h1 class="text-3xl">
            Settings
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
            <a href="{{ route('settings.create') }}" class="text-sm flex bg-blue-500 hover:bg-blue-700 text-white py-1 px-4 rounded-lg focus:outline-none focus:shadow-outline">Create Settings</a>
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
    </div>
    <table id="dataTable" class="w-full text-md bg-white shadow">
        <thead>
            <tr class="border bg-gray-200">
                <th class="text-left p-1 px-5">Label</th>
                <th class="text-left p-1 px-5">Name</th>
                <th class="text-left p-1 px-5">Is-Active</th>
                <th class="text-left p-1 px-5">Api-Access</th>
                <th class="text-left p-1 px-5">Group</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
@endsection

@push('scripts')
    @include('backend.pages.configuration.settings_datatable')
@endpush

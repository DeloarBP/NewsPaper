@extends('layouts.app')

@section('title','Settings Create')

@section('content')
    <settings-form
        :url="'{{ route('settings.store') }}'"
        :method="'post'">
    </settings-form>
@endsection

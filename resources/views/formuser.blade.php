@extends('layouts.app')

{{-- Customize layout section --}}
@section('subtitle', 'Form User')
@section('content_header_title', 'Form')
@section('content_header_subtitle', 'Form User')

@section('content')
<div class="card-body">
    <form>
        <div class="row">
            <div class="col-sm-6">
                <!-- text input -->
                <div class="form-group">
                    <label>Level id</label><input type="text" class="form-control" placeholder="contoh : 1">

                    <label>username</label><input type="text" class="form-control" placeholder="contoh : adminfaqih">

                    <label>name</label><input type="text" class="form-control" placeholder="contoh : faqih">

                    <label>password</label><input type="password" class="form-control" placeholder="contoh : 12345">

                    <button type="submit" class="btn btn-info">Submit </button>
                </div>
                @stop


                {{--- Push extra CSS --}}
                @push('css')
                {{-- Add here extra stylesheets --}}
                {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
                @endpush

                {{--- Push extra scripts --}}
                @push('js')
                <script>
                    console.log("Hi, I'm using the laravel-AdminLTE package!");
                </script>
                @endpush
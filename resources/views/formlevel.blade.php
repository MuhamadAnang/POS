@extends('layouts.app')

{{-- Customize layout section --}}
@section('subtitle', 'Form Level')
@section('content_header_title', 'Form')
@section('content_header_subtitle', 'Form Level')

@section('content')
<div class="card-body">
    <form>
        <div class="row">
            <div class="col-sm-6">
                <!-- text input -->
                <div class="form-group">
                    <label>Level kode</label><input type="text" class="form-control" placeholder="contoh : ADM">

                    <label>Level name</label><input type="text" class="form-control" placeholder="contoh : Admin">
                    
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
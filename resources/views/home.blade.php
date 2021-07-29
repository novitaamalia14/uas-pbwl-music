@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body" >
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <img src="image/music.jpeg" alt="[IMG]" width="100" class="card-img-top">

                    <h4 class="display-5">
                         <br> Selamat Datang Di Musixmatch - Lyrics & Music Player 
                    </h4>

                    <div class="alert alert-primary" roles="alert">
                        {{ __('You are logged in!') }}
                    </div>

                </div>
            </div>

            <footer>
                    <div class="row ">
                        <div class="col my-5 card-footer p-3 mb-2 bg-secondary text-white" style="text-align:center";>
                           Copyright Novita Amalia &copy;2021
                        </div>
                    </div>
                </footer>
        </div>
    </div>
</div>
@endsection

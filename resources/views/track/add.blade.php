@extends('layouts.app') 

@section('content') 

<div class="container"> 

    <h3>Tambah Data Track</h3> 
    <div class="alert alert-primary" roles="alert">
            Inputlah Data Dengan Benar!
    </div>

    <form action="{{ url('/track') }}" method="POST"> 
        @csrf 
        <div class="form-group">
            <label for="">Nama Track</label>
            <input type="text" name="track_name" class="form-control">            
        </div>

        <div class="form-group">
            <label for="">Artist</label>
            <input type="text" name="artist_id" class="form-control">            
        </div>

        <div class="form-group">
            <label for="">Album</label>
            <input type="text" name="album_id" class="form-control">            
        </div>

        <div class="form-group">
            <label for="">Durasi</label>
            <input type="time" name="waktu" class="form-control">            
        </div>

        <div class="form-group">
            <input type="submit" value="SIMPAN" class="btn btn-primary">            
        </div>
    </form> 

</div> 
 
@endsection
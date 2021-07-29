@extends('layouts.app')

@section('content')

<div class="container"> 

    <h3>
        Daftar Played
    </h3> 
<p>
    <br><a href="{{ url('/played/create') }}" class="btn btn-primary btn-sm float-right my-3"><span class="bi bi-plus-lg"> Tambah Data</a></br>

   
    <table class="table table-bordered table-striped table-hover table-bordered">
        <tr>
            <th style="text-align:center">#</th>
            <th style="text-align:center">ARTIS</th>
            <th style="text-align:center">ALBUM</th>
            <th style="text-align:center">TRACK</th>
            <th style="text-align:center">PLAYED</th> 
            <th style="text-align:center">AKSI EDIT</th>
            <th style="text-align:center">AKSI DELETE</th>
        </tr> 
       
        @foreach($rows as $row) 
       
        <tr> 
            <td>{{ $row->played_id }}</td>
            <td>{{ $row->artist_id }}</td>
            <td>{{ $row->album_id }}</td>
            <td>{{ $row->track_id }}</td>
            <td>{{ $row->played }}</td>
            <td><a href="{{ url('played/' . $row->played_id . '/edit') }}" class="btn btn-primary btn-sm btn-info"><span class="bi bi-pencil"> Edit</a></td>  
            <td>
                <form action="{{ url('/played/' . $row->played_id) }}" method="POST"><input name="_method" type="hidden" value="DELETE"> 
                @csrf 
                <button class="btn btn-sm btn-danger"><span class="bi bi-trash"> Hapus</button> 
                </form>
            </td>
        </tr>
        @endforeach 
    </table> 
</p>
    
</div>

@endsection
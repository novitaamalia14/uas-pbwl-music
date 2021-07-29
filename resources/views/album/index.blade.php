@extends('layouts.app')

@section('content')

<div class="container"> 

    <h3>
        Daftar Album
    </h3> 

<p>
        <a href="{{ url('/album/create') }}" class="btn btn-primary btn-sm float-right my-3"><span class="bi bi-plus-lg"> Tambah Data</a>

        
    <table class="table table-bordered table-striped table-hover table-bordered"> 
        <tr> 
            <th>#</th>
            <th>ARTIST</th>
            <th>NAMA ALBUM</th>
            <th>AKSI EDIT</th>
            <th>AKSI DELETE</th>
        </tr> 
      
        @foreach($rows as $row) 
      
        <tr> 
            <td>{{ $row->album_id }}</td>
            <td>{{ $row->artist_id }}</td>
            <td>{{ $row->album_name }}</td>
            <td><a href="{{ url('album/' . $row->album_id . '/edit') }}" class="btn btn-primary btn-sm btn-info"><span class="bi bi-pencil"> Edit</a></td>  
            <td>
                <form action="{{ url('/album/' . $row->album_id) }}" method="POST"><input name="_method" type="hidden" value="DELETE"> 
                @csrf 
                <button class="btn btn-danger btn-sm"><span class="bi bi-trash"> Hapus</button> 
                </form>
            </td>
        </tr>
        @endforeach 
    </table> 
</p>

</div>

@endsection
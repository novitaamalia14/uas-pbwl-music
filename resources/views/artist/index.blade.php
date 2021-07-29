@extends('layouts.app')

@section('content')

<div class="container"> 

    <h3>
        Daftar Artist
    </h3> 

<p>
        <a href="{{ url('/artist/create') }}" class="btn btn-primary btn-sm float-right my-3"><span class="bi bi-plus-lg"> Tambah Data</a>

        <table class="table table-bordered table-striped table-hover table-bordered"> 
        <tr>
            <th style="text-align:center">#</th> 
            <th style="text-align:center">NAMA</th> 
            <th style="text-align:center">AKSI EDIT</th>
            <th style="text-align:center">AKSI DELETE</th>
        </tr> 
       
        @foreach($rows as $row) 
       
        <tr> 
            <td>{{ $row->artist_id }}</td>
            <td>{{ $row->artist_name }}</td>
            <td><a href="{{ url('artist/' . $row->artist_id . '/edit') }}" class="btn btn-primary btn-sm btn-info"><span class="bi bi-pencil"> Edit</a></td>  
            <td>
                <form action="{{ url('/artist/' . $row->artist_id) }}" method="POST"><input name="_method" type="hidden" value="DELETE"> 
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
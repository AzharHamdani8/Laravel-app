@extends('layout/main')

@section ('title', 'Daftar Mahasiswa')


@section ('container')

<div class="container">
    <div class="row">
      <div class="col-6">
    <h1 class="mt-3">Daftar Mahasiswa </h1>

      <a href="/students/create" class="btn btn-primary my-3">Tambah Data Mahasiswa</a>
          @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

          <ul class="list-group">
          @foreach ($students as $student)
        <li class="list-group-item d-flex justify-content-between align-items-center">
          {{$student->nama}}
         <a href="/students/{{ $student->id}}" class="badge badge-info">detail</a>
        </li>
              
       @endforeach
      </ul>



    <!-- <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">nama</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($students as $students)
        <tr>
          <th scope="row">{{ $loop->iteration}}</th>
          <td>{{ $students->nama}}</td>
          
            <td> 
              <a href="/students/{{$students->id}}" class="badge badge-info">show detail</a>

            </td>

        </tr>
       
       @endforeach

      </tbody>
    </table> -->

  </div>
  </div>
  </div>
@endsection


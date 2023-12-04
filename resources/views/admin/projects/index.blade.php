@extends('admin.home')

@section('content')

<h3 class="text-black">PROJECTS</h3>

<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Azioni</th>

      </tr>
    </thead>
    <tbody>

        @foreach ( $projects as $project )

        <tr>
            <td>{{$project->id}}</td>
            <td>{{$project->title}}</td>
            <td>{{$project->description}}</td>
            <td>
                <a href="{{ route('admin.projects.show', $project) }}" class="btn btn-warning "><i class="fa-solid fa-eye"></i></a>
                <a href="{{ route('admin.projects.create', $project) }}" class="btn btn-danger"><i class="fa-solid fa-pencil"></i></a>


            </td>


          </tr>

        @endforeach


    </tbody>
  </table>


@endsection

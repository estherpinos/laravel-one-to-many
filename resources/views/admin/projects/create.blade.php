@extends('admin.home')

@section('content')
<h1>Inserimento nuovo proggetto</h1>

<div class="row">
    <div class="col-8">

        @csrf
        <form action="{{route('admin.projects.store')}}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input
                  type="text"
                  class="form-control @error('title') is-invalid  @enderror"
                  id="title"
                  name="title"
                  value="{{ old('title')}}">
                @error('title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input
                type="text"
                class="form-control @error('title') is-invalid  @enderror"
                id="description"
                name="description"
                value="{{ old('description')}}">
              @error('description')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
            <label for="type_id" class="form-label">Type</label>

            <div class="mb-3">
                <select name="type_id" class="form-select" id="type_id">
                    @foreach ($types as $type )
                        <option value="{{$type->id}}" {{old("type_id", $project?->type_id) == $type->id?'selected' : ''}}>{{$type->title}}</option>
                    @endforeach
                  </select>
            </div>

            {{-- BUTTONS --}}
            <button type="submit" class="btn btn-primary">Send</button>
            <button type="reset" class="btn btn-secondary">Delete</button>

        </form>




    </div>
</div>


@endsection

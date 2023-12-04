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
            <div class="mb-3">
                <label for="type_id" class="form-label">Type</label>
                <input
                type="text"
                class="form-control @error('type') is-invalid  @enderror"
                id="type"
                name="type"
                value="{{ old('type')}}">
              @error('type')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>

            {{-- BUTTONS --}}
            <button type="submit" class="btn btn-primary">Send</button>
            <button type="reset" class="btn btn-secondary">Delete</button>

        </form>




    </div>
</div>


@endsection

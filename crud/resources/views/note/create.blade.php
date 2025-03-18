@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create Note</h1>
                <form action="{{ route('note.store') }}" method="POST">
                    @csrf
                    <div class="form-group
                    {{ $errors->has('title') ? 'has-error' : '' }}">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                        @if ($errors->has('title'))
                            <span class="help-block
                            text-danger">{{ $errors->first('title') }}</span>
                        @endif
                    </div>
                    <div class="form-group
                    {{ $errors->has('content') ? 'has-error' : '' }}">
                        <label for="content">Content</label>
                        <textarea class="form-control" id="content" name="content">{{ old('content') }}</textarea>
                        @if ($errors->has('content'))
                            <span class="help-block
                            text-danger">{{ $errors->first('content') }}</span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
                <button class="btn btn-secondary" onclick="window.location='{{ route('note.index') }}'">Back</button>
            </div>
        </div>
    </div>
@endsection
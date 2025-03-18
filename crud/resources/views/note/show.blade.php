@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>{{ $note->title }}</h1>
            <p>{{ $note->content }}</p>
            <p>Created At: {{ $note->created_at }}</p>
            <p>Updated At: {{ $note->updated_at }}</p>
            <a href="{{ route('note.edit', $note->id) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('note.destroy', $note->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <a href="{{ route('note.index') }}" class="btn btn-primary">Back</a>
        </div>
    </div>
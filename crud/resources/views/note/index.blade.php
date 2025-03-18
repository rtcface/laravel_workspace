@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Note List</h1>
                <a class="text-right
                btn btn-primary" href="{{ route('note.create') }}">Create Note</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- utiliza un forelse para el recorrido --}}
                        @forelse ($notes as $note)
                            <tr>
                                <td>{{ $note->id }}</td>
                                <td><a class="" href="{{ route('note.show',$note->id)}}"> {{ $note->title }}</a></td>
                                <td>{{ $note->content }}</td>
                                <td>{{ $note->created_at }}</td>
                                <td>{{ $note->updated_at }}</td>
                                <td>
                                    <a class="btn btn-secondary" href="{{ route('note.edit', $note->id) }}">Edit</a>
                                    <form action="{{ route('note.destroy', $note->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6">No notes found.</td>
                            </tr>
                        @endforelse                                               
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

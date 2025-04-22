@extends('layout')

@section('content')
    <a href="{{ route('contacts.create') }}">+ Add New Contact</a>
    <ul>
        @foreach ($contacts as $contact)
            <li>
                <strong>{{ $contact->name }}</strong> - {{ $contact->email }} - {{ $contact->phone }}
                <a href="{{ route('contacts.edit', $contact->id) }}">Edit</a>
                <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Delete this contact?')">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection

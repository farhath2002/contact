@extends('layout')

@section('content')
    <h2>Edit Contact</h2>
    <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $contact->name }}" required><br>
        <input type="email" name="email" value="{{ $contact->email }}" required><br>
        <input type="text" name="phone" value="{{ $contact->phone }}" required><br>
        <button type="submit">Update</button>
    </form>
    <a href="{{ route('contacts.index') }}">Back</a>
@endsection

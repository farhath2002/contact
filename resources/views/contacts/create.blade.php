@extends('layout')

@section('content')
    <h2>Add Contact</h2>
    <form action="{{ route('contacts.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="text" name="phone" placeholder="Phone" required><br>
        <button type="submit">Save</button>
    </form>
    <a href="{{ route('contacts.index') }}">Back</a>
@endsection

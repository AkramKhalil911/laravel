@extends('layouts.app')

@section('content')
    <form method="post" action="{{ route('greetings.store') }}">
        @csrf
        <div class="form-group">
            <label>Greeting</label>
            <input type="text" class="form-control" name="greeting">
        </div>
        <button type="submit" class="btn btn-primary">Toevoegen</button>
    </form>
@endsection

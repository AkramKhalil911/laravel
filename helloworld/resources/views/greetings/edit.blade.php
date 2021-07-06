@extends('layouts.app')

@section('content')
    <form method="post" action="{{ route('greetings.update', $greeting->id) }}">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label>Greeting</label>
            <input type="text" class="form-control" name="greeting" value="{{$greeting->greeting}}"/>
        </div>
        <button type="submit" class="btn btn-primary">Wijzigen</button>
    </form>
@endsection

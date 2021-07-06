@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <td>Greeting</td>
            <td colspan=2>Acties</td>
        </tr>
        </thead>
        <tbody>
        @foreach($greetings as $greeting)
            <tr>
                <td>{{$greeting->greeting}}</td>
                <td>
                    <a href="{{ route('greetings.edit',$greeting->id)}}" class="btn btn-primary">Wijzig</a>
                </td>
                <td>
                    <form action="{{ route('greetings.destroy', $greeting->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Verwijder</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <example-component>
    </example-component>
    <my-component prop1="test" prop2="1" prop3="2" prop4="3"></my-component>
@endsection

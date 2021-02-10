@extends('layouts.emailLayout')

@section('content')
  <h2>Spedici una nuova mail</h2>

  <form action="{{route('send-mail')}}" method="post">
    @csrf
    @method('POST')

    <label for="message">Testo della emai:</label>
    <br>

    <input type="text" name="message" value="">

    <input type="submit" value="Invia">
  </form>
@endsection

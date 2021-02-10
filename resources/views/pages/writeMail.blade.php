@extends('layouts.emailLayout')

@section('content')

  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif

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

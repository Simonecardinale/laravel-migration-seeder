@extends('layouts.app')

@section('content')
    
<table class="table">
    <thead>
      <tr>
        <th scope="col">Marca</th>
        <th scope="col">Tipologia</th>
        <th scope="col">Liquidi</th>
        <th scope="col">Prezzo</th>
        <th scope="col">Descrizione</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($ecig as $element)
      <tr>
            {{-- <td>{{ $element['marca'] }}</td>
            <td>{{ $element['tipologia'] }}</td>
            <td>{{ $element['prezzo'] }}</td>
            <td>{{ $element['liquidi'] }}</td>
            <td>{{ $element['description'] }}</td> --}}

            <td>{{ $element -> marca }}</td>
            <td>{{ $element -> tipologia }}</td>
            <td>{{ $element -> prezzo }}</td>
            <td>{{ $element -> liquidi }}</td>
            <td>{{ $element -> description }}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection
@extends('layouts.app')

@section('title', 'DC Comics | Read Index')

@section('main')
    <main>

        <h1>Tutti i fumetti</h1>


        <div class="table-responsive">

            <a href="{{ route('comics.create') }}" class="btn btn-primary">Crea fumetto</a>


            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">title</th>
                        <th scope="col">description</th>
                        <th scope="col">thumb</th>
                        <th scope="col">price</th>
                        <th scope="col">series</th>
                        <th scope="col">sale_date</th>
                        <th scope="col">type</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($comics as $item)
                        <tr class="">
                            <td scope="row">
                                <a href="{{ route('comics.show', $item->id) }}">
                                    {{ $item->title }}</a>
                                </td>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->thumb }}</td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->series }}</td>
                            <td>{{ $item->sale_date }}</td>
                            <td>{{ $item->type }}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>



    </main>
@endsection

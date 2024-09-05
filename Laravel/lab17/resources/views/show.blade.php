@extends('layout.app')

@section('title') Show  @endsection

@section('content')
        <fieldset>
            <legend class="text-center">Students Data</legend>
            <table class="table w-75 m-auto table-bordered mt-5">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                        <th scope="col">address</th>
                        <th scope="col">image</th>
                        <th scope="col">gender</th>
                        <th scope="col">age</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>

                            <td>{{ $student->id }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->address }}</td>
                            <td>{{ $student->image }}</td>
                            <td>{{ $student->gender }}</td>
                            <td>{{ $student->age }}</td>
                            <td>
                                <a class="btn btn-info" href={{route('students.index')}} >Back</a>
                            </td>
                        </tr>
                </tbody>
            </table>
        </fieldset>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
@endsection

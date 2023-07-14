@extends('admin.layouts.layout')
@section('content')

    <main class="multi-forms">
        <div class="main-dive">
            inserted masseges
            <form method="POST" >
                @csrf
                <table>
                    <tr>
                        <th>name</th>
                        <th>email</th>
                        <th>massage</th>
                        <th>edite</th>
                        <th>delete</th>
                    </tr>
                    @foreach($result['list'] as $item)
                        <tr>
                            <td>{{$item['name']}}</td>
                            <td>{{$item['email']}}</td>
                            <td>{{$item['message']}}</td>
                            <td><a  href="" class="btn btn-danger">edite</a></td>
                            <td><a  href="" class="btn btn-danger">Delete</a></td>
                        </tr>
                    @endforeach
                </table>
            </form>

        </div>
    </main>

@endsection

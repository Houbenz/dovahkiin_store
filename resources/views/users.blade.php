@extends('index')

@section('content')



    <div class="container pt-5">


        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">

                @foreach($users as $user)

                <table class="table">
                    <thead>
                        <tr>
                             <th>Name</th>
                             <th>Email</th>
                        </tr>
                    </thead>

                   <tr>
                       <td>{{$user->name}}</td>
                       <td>{{$user->email}}</td>
                   </tr>

                </table>

                @endforeach


            </div>
            <div class="col-3"></div>
        </div>
    </div>

    @endsection

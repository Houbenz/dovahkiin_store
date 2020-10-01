@extends('index')

@section('content')
<example-component></example-component>
<todo-item
            v-for='item in groceryList'
            v-bind:todo='item'
            v-bind:key='item.id'></todo-item>

@endsection

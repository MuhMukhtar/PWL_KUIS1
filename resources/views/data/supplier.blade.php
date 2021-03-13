@extends('data.layouts.app')
    
    @section('content')
    <table class="table table-borderless">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Name</th>          
          <th scope="col">Phone</th>
          <th scope="col">Address</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($suppliers as $item)
        <tr>
          <th scope="row">{{$item->id}}</th>
          <td>{{$item->name}}</td>          
          <td>{{$item->phone}}</td>
          <td>{{$item->address}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
    @endsection
    
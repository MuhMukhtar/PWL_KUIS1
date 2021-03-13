@extends('data.layouts.app')
    
    @section('content')
    <table class="table table-borderless">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Name</th>
          <th scope="col">Desd</th>
          <th scope="col">Stock</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($barangs as $item)
        <tr>
          <th scope="row">{{$item->id}}</th>
          <td>{{$item->name}}</td>
          <td>{{$item->desc}}</td>
          <td>{{$item->stock}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
    @endsection
    

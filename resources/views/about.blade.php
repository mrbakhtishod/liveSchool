@extends('inc.app')

@section('title', 'About')

@section('content')
<div class="container">
   <h1> {{__('words.about')}} </h1>


   <table class="table table-striped table-white">
     <thead class="text-center">
         <tr>
            <th scope="col">N0</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
         </tr>
     </thead>
     <tbody>
         @forelse($data as $data)
            <tr>
               <th scope="row">{{$loop->index+1}}</th>
               <td>{{$data->title}}</td>
               <td>{{$data->description}}</td>
               <td><img class="img-fluid" alt="News Photo" src="{{$data->image}}"></td>
            </tr>
         @empty
            <p>No news !!!</p>
         @endforelse
     </tbody>
   </table>
</div>


@endsection

@extends('index')

@section('content')
   @include('_common._form')

   <hr>
   <div class="text-right"><b>Total:</b><i class="badge">{{ $count }}</i> </div><br/>
   @include('pages.messages._items')
@stop
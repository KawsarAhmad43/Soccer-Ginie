@extends('layouts.main')

@section('content')



<div class="container-lg" style="margin: 0 auto;">
<h1 class="text-center mt-3" style="font-weight: bolder; font-size:6vh; color:green;">Superliga LiveScores</h1>
    <div class="row mt-5">

@if(isset($response['data']))

     
@foreach($response['data'] as $match)

<div class="col-lg-12 col-md-12 col-sm-12 text-center mb-5">
    <div class="card" style="width: 100%; box-shadow:3px 2px 4px 6px rgba(0,0,0,0.5)">
     <img src="" alt="">

     <div class="card-body">
            <div class="card-title" style="font-size: 4vh; font-weight:bold;">
    <!--home logo--> <img style="width: 60px;" src="{{ $match['teams']['home']['img'] }}" alt="">
              {{ $match['teams']['home']['name'] }} {{ $match['scores']['home_score'] }} - {{ $match['scores']['away_score'] }} {{ $match['teams']['away']['name'] }} 
     <!--away logo--> <img style="width: 60px;" src="{{ $match['teams']['away']['img'] }}" alt="">
            </div>
            <div class="card-text" style="color: blue; font-size: 2.5vh;"> {{ $match['time']['time'] }} {{ $match['time']['timezone'] }} </div>
         <div class="card-text" style="color: green; font-size: 2.5vh;"> {{ $match['status_name'] }} </div>
         <div class="card-text" style="font-size: 2.5vh;"> {{ $match['league']['name'] }} - {{ $match['league']['country_name'] }} </div>
     </div>

     </div>
</div>
@endforeach




       

        @else

        <h1 class="text-center" style="color: red; font-size:6vh; text-align:center">No match Found Today!</h1>

        @endif







    </div>
</div>

@endsection
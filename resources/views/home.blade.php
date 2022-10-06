@extends('layouts.app')
@section('content')
<div class="container">
   
   @foreach (['success', 'danger', 'warning', 'info'] as $alert)
      @if ($message = Session::get($alert))
         <div class="alert alert-{{$alert}} text-center alert-block">
            <button type="button" class="close text-light" data-dismiss="alert">×</button>
            <strong lass="text-light">{{ $message }}</strong>
         </div>
      @endif
   @endforeach


   <div class="row justify-content-center">
      <div class="col-md-12">
         <div class="card">
            <div class="card-header text-center">

               <ul class="nav nav-pills" id="tabMenu">
                  <li class="nav-item">
                     <a class="nav-link active btn-sm py-1 m-1" data-toggle="pill" href="#home">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link btn-sm py-1 m-1" data-toggle="pill" href="#addQuestion">Add question</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link btn-sm py-1 m-1" data-toggle="pill" href="#addVote">Add vote</a>
                  </li>
               </ul>

            </div>

            <div class="card-body row">
               <div class="tab-content" id="pills-tabContent">

                  <div class="tab-pane fade show active" id="home">
                     <p class="bg-success text-center pb-1">home</p>   
                  </div>

                  <div class="tab-pane fade show" id="addQuestion">
                     <p class="bg-success text-center pb-1">addQuestion</p>   
                  </div>

                  <div class="tab-pane fade show" id="addVote">
                     <p class="bg-success text-center pb-1">addVote</p>   
                  </div>
   
               </div>            
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="panel">
                    <div class="panel-heading">Forum Threads</div>

                    <div class="panel-body">

                            <article>
                               <div class="panel-heading">
                                   <h2>{{$thread->title}}</h2>
                               </div>
                               <div class="panel-body">
                                   {{$thread->body}}
                               </div>
                            </article>
                            <hr>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

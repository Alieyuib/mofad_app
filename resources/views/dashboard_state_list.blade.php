@extends('layouts.mofad')

@section('head')
    @parent()
@endsection()

@section('side_nav')
@parent()
@endsection

@section('top_nav')
    @parent()
@endsection

@section('content')

<div class="row">
    <div class="col s12 m12 l12">
        <div class="card ">
            <div class="card-content ">
                <h4 class="header"></h4>
                <p>Select State</p>
                <div id="view-avatar">
                    <div class="row">
                        <div class="col s8">
                            <ul class="collection">
                                @foreach($state_list as $state)
                                <a class="" href="{{url('/dashboard/state/'.$state->id)}}">
                                <li class="collection-item avatar ">
                                    <img src="{{asset('assets/img/lubricant-image-1.jpg')}}" alt="" class="circle">
                                    <span class="title">{{$state->name}}</span>
                                    <p> Open
                                    </p>
                                    <a href="#!" class="secondary-content">
                                        <i class="material-icons">store</i>
                                    </a>
                                </li>
                                </a>
                                @endforeach
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div>
</div>

                    
                        
                        

        
@endsection

@section('footer')
@parent()
@endsection

@section('footer_scripts')
@parent()
@endsection
    
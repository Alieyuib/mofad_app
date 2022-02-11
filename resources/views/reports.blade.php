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
@include('includes.post_status')

<!-- STI -->
<div class="row">
    <div class="col s12 m12 l12">
        <div class="card ">
            <div class="card-content ">
           
                <h4 class="header">MOFAD STOCK INVENORY ANALYSIS</h4>
                <div class="row">
                    <form class="col s12" method="post" action="{{url('/reports')}}">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="input-field col m4 s6">
                                <select name="state" class="form-control  browser-default"> 
                                    <option>Select State</option>
                                    <option value="1">Kano</option>
                                    <option value="2">Abuja</option>
                                    
                                

                                </select> 
                            
                            </div>
                            <div class="input-field col m4 s6">
                                <input type="number" name="cash_at_hand" placeholder="Total cash at hand" value="">
                            </div>
                            <div class="input-field col m4 s6">
                                <input type="number" name="cash_invested" placeholder="Total Invested" value="">
                            </div>
                            <input type="hidden" name="report_type" value="SIA">
                            </div>
                           
                               
                            <div class="input-field col m4 s6 align-content-center">
                                <button class=" btn btn-primary green darken-3" type="submit"> Download</button>
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <div>
</div>
<!-- Stations Reports -->
<div class="row">
    <div class="col s12 m12 l12">
        <div class="card ">
            <div class="card-content ">
        
                <h4 class="header">Lube Sotre(Substore) sales</h4>
                <div class="row">
                    <form class="col s12" method="post" action="{{url('/reports')}}">
                    {{csrf_field()}}
                    <input type="hidden" name="report_type" value="substore_sales">
                    
                    <div class="row">
                        <div class="input-field col m4 s4">
                        <select name="substore" class="form-control  browser-default"> 
                            <option value="">Select Substore</option>
                            @foreach($substores as $substore)
                            <option value="{{$substore->id}}">{{$substore->name}}</option>
                            @endforeach
                        

                        </select>
                        </div>

                        <div class="input-field col m4 s12">
                                    <label class="bmd-label-floating">From: </label>
                                    <input name="start_date"  value= "{{old('start_date')}}" type="date" placeholder="{{old('start_date')}}" class="form-control date-input" >   
                        </div>
                        <div class="input-field col m4 s12">
                                    <label class="bmd-label-floating">To: </label>
                                    <input name="end_date" value= "{{old('end_date')}}" type="date" placeholder="" class="form-control date-input" >
                        </div>

                        <div class="input-field  col m4 s6">
                        <button class=" btn btn-primary green darken-3" type="submit"> Open</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    <div>
</div>
<!-- Lubebay Reports -->
<div class="row">
    <div class="col s12 m12 l12">
        <div class="card ">
            <div class="card-content ">
        
                <h4 class="header">Lubeay services</h4>
                <div class="row">
                <form class="col s12" method="post" action="{{url('/reports')}}">
                    {{csrf_field()}}
                    <input type="hidden" name="report_type" value="lubebay_service_sales">
                    
                    <div class="row">
                        <div class="input-field col m4 s6">
                        <select name="lubebay" class="form-control  browser-default"> 
                            <option value="">Select Lubebay</option>
                            @foreach($lubebays as $lubebay)
                            <option value="{{$lubebay->id}}">{{$lubebay->name}}</option>
                            @endforeach
                        

                        </select>
                        </div>

                       
                        <div class="input-field col m4 s12">
                                    <label class="bmd-label-floating">From: </label>
                                    <input name="start_date"  value= "{{old('start_date')}}" type="date" placeholder="{{old('start_date')}}" class="form-control date-input" >   
                        </div>
                        <div class="input-field col m4 s12">
                                    <label class="bmd-label-floating">To: </label>
                                    <input name="end_date" value= "{{old('end_date')}}" type="date" placeholder="" class="form-control date-input" >
                        </div>

                        <div class="input-field  col m4 s6">
                        <button class=" btn btn-primary green darken-3" type="submit"> Open</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    <div>
</div>

<div class="row">
    <div class="col s12 m12 l12">
        <div class="card ">
            <div class="card-content ">
        
                <h4 class="header">Customer Profile</h4>
                <div class="row">
                <form class="col s12" method="post" action="{{url('/reports')}}">
                    {{csrf_field()}}
                    <input type="hidden" name="report_type" value="customer_profile">
                    
                    <div class="row">
                        <div class="input-field col m6 s6">
                        <select name="customer" class="form-control  browser-default"> 
                            <option value="">Select Customer</option>
                            @foreach($customers as $customer)
                            <option value="{{$customer->id}}">{{$customer->name}}</option>
                            @endforeach
                        

                        </select>
                        </div>
                        
                        <div class="input-field  col m6 s6">
                        <button class=" btn btn-primary green darken-3" type="submit"> Open</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    <div>
</div>

<div class="row">
    <div class="col s12 m12 l12">
        <div class="card ">
            <div class="card-content ">
        
                <h4 class="header">Debtors List</h4>
                <div class="row">
                <form class="col s12" method="post" action="{{url('/reports')}}">
                    {{csrf_field()}}
                    <input type="hidden" name="report_type" value="debtors_list">
                    
                    <div class="row">
                        
                        <div class="input-field col m6 s6">
                            <select name="state" class="form-control  browser-default"> 
                                <option value="">Select State</option>
                                @foreach($states as $state)
                                <option value="{{$state->id}}">{{$state->name}}</option>
                                @endforeach
                            

                            </select>
                        </div>
                        <div class="input-field  col m6 s6">
                        <button class=" btn btn-primary green darken-3" type="submit"> Open</button>
                        </div>
                    </div>
                    </form>
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
    
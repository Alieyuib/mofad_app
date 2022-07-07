@extends('layouts.mofad')
@section('head') 
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/flag-icon/css/flag-icon.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/data-tables/css/jquery.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/data-tables/css/select.dataTables.min.css')}}">
    <!-- END: VENDOR CSS-->
    @parent()
   
@endsection()

      @section('side_nav')
        @parent()
      @endsection
      @section('top_nav')
            @parent()
      @endsection
      <!-- End Navbar -->
      @section('content')
      @include('includes.post_status')     
      @if (session()->has('status'))
          <script type="application/javascript">
              Swal.fire({
                  icon: 'success',
                  // title: 'Oops...',
                  text: 'Sales Reversal Successfully',
                  // footer: '<a href="">Why do I have this issue?</a>'
              })
          </script>
      @endif
      <div class="col s12">
                <div class="container">
                    <div class="section section-data-tables">
                        <div class="card">
                            <div class="card-content">
                                <p class="caption mb-0">Product Reversal Form</p>
                            </div>
                        </div>
                        @foreach ($array_products as $item)
                       <form  class="col s12 card bg-success" action="{{url('/admin/sst/reverse-sst/final-reverse')}}" method="POST">
                        {{csrf_field()}}
                        <input type="hidden" name="substore_id" value="{{ $substore_id }}">
                        <input type="hidden" name="sstId" value="{{ $sstId }}">
                                <div class="row">
                                    <div class="col m3">
                                        <label for=""><b>Product Name</b></label>
                                        <input type="text" name="product_name" value="{{ $item->product_name }}" disabled>
                                    </div>
                                    <div class="col m3">
                                        <label for=""><b>Product Quantity</b></label>
                                        <input type="text" name="product_quantity" value="{{ $item->product_quantity }}" disabled>
                                    </div>
                                    <div class="col m3">
                                        <label for=""><b>Product Price</b></label>
                                        <input type="text" name="product_price" value="{{ $item->product_price }}" disabled>
                                    </div>
                                    <div class="col m3">
                                        <label for=""><b>Product Code</b></label>
                                        <input type="text" name="product_code" value="{{ $item->product_code }}" disabled>
                                    </div>
                                </div>
                            <div class="row">
                                <button type="submit" class="btn btn-success reverse_btn">Reverse Sales</button>
                            </div>
                       </form>
                       @endforeach
                    </div>
                <div class="content-overlay"></div>
            </div>
      @endsection

      @section('footer')
        @parent()
     
      @endsection
      @section('footer_scripts')
        @parent()
        
        <!-- BEGIN PAGE VENDOR JS-->
        <script src="{{asset('app-assets/vendors/data-tables/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('app-assets/vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('app-assets/vendors/data-tables/js/dataTables.select.min.js')}}"></script>
        <!-- END PAGE VENDOR JS-->

      
        <!-- BEGIN PAGE LEVEL JS-->
        <script src="{{asset('app-assets/js/scripts/data-tables.js')}}"></script>
        
      @endsection
      
   
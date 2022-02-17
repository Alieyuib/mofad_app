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

                    <h4 class="header">MOFAD CUSTOMERS REPORTS</h4>
                    <div class="row">
                        <form class="col s12" method="post" action="{{ url('/reports') }}">
                            {{ csrf_field() }}
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

            <div class="card ">
                <div class="card-content ">

                    {!! $dataTable->table() !!}
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
        {{-- <script type="text/javascript">
            $(document).ready(function() {
                $('#scroll-dynamic').DataTable({
                    dom:'Bfrtip',
                    buttons:
                });
            });
        </script> --}}
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
        <script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
        <script src="/vendor/datatables/buttons.server-side.js"></script>
        {!! $dataTable->scripts() !!}
    @endsection

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

            <div class="card">
                <div class="card-content">
                    <h4 class="card-title">Customers
                    </h4>
                    <div class="row">
                        <div class="col s12">
                            <table id="scroll-dynamic" class="display scroll-dynamic">
                                <thead>
                                    <tr>
                                        <th>Name </th>
                                        <th>Address</th>
                                        <th>Balance</th>
                                        <th>Deposits</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @forelse ($customers as $customer)
                                        <tr>
                                            <td>{{ $customer['name'] }}</td>
                                            <td>{{ $customer['address'] }}</td>
                                            @if ($customer['balance'] < 0)
                                                <td style="color:red">
                                                    ₦{{ $customer['balance'] ? $customer['balance'] : 0 }}</td>
                                            @else
                                                <td style="color:green">
                                                    ₦{{ $customer['balance'] ? $customer['balance'] : 0 }}</td>
                                            @endif
                                            <td> ₦{{ $customer->totalPurchases() }} </td>
                                            <td>
                                                <button class="edit-modal btn btn-info"
                                                    data-info="{{ $customer->name }},{{ $customer->address }},{{ $customer->balance }}">
                                                    <span class="glyphicon glyphicon-edit"></span> Edit
                                                </button>
                                                <button class="delete-modal btn btn-danger"
                                                    data-info="{{ $customer->name }},{{ $customer->address }},{{ $customer->balance }},{{ $customer->email }},{{ $customer->gender }},{{ $customer->country }},{{ $customer->salary }}">
                                                    <span class="glyphicon glyphicon-trash"></span> Delete
                                                </button>
                                            </td>
                                        </tr>
                                    @empty
                                        No customers available
                                    @endforelse

                                </tbody>

                                {{-- <tfoot>
                                    <tr>
                                        <th>Total </th>
                                        <th>{{ number_format($grand_total_quantity) }}</th>
                                        <th> ₦{{ number_format($grand_total_price) }}</th>
                                    </tr>
                                </tfoot> --}}
                            </table>
                            {{-- {{ $customers->links('vendor.pagination.custom') }} --}}
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
        <script type="text/javascript">
            $(document).ready(function() {
                $('#scroll-dynamic').DataTable();
            });
        </script>
    @endsection

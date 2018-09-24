@extends('layout.dash1')
@section('content')

    <!-- Page Content Start -->
    <!-- ================== -->
    <div class="main-grid">
        <div class="agile-grids">


            <!-- blank-page -->
            <div class="table-heading">
                <h2>{!! $user->name !!}'s Income & Expense History</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <a class="btn btn-primary" href="{{ route('pdfview') }}">Show In PDF</a>
                </div>
                {{--<div>
                    <a class="btn btn-primary" href="{{ route('pdfview',['download'=>'pdf']) }}">Download PDF</a>
                </div>--}}
            </div>
            <hr>
            <div class="well">
                <div class="w3l-table-info">

                    <table id="table">
                        <thead>
                        <tr>
                            <th>Account</th>
                            <th>Date</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Income Money IN</th>
                            <th>Expense Money Out</th>
                            <th>Debit/Credit</th>
                            <th>Overall Balance</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($details as $detail)
                            <tr>
                                <td><strong>{!! $detail->account !!}</strong></td>
                                <td><strong>{!! $detail->date !!}</strong></td>
                                <td><strong>{!! $detail->description !!}</strong></td>
                                <td><strong>{!! $detail->category !!}</strong></td>
                                <td><strong>{!! $detail->income !!}</strong></td>
                                <td><strong>{!! $detail->expense !!}</strong></td>
                                <td><strong>{!! $detail->debitorcredit !!}</strong></td>
                                <td><strong>{!! $detail->totalbalance !!}</strong></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>


@endsection





@extends('layout.app')

@section('content')
    <div class="text-center">
        <h2 class="main-title-w3layouts mb-2 text-center">Income & Expense History</h2>
    </div>
    <div class="row">
        <div class="col-md-6">
            <a class="btn btn-primary" href="{{ route('pdfview') }}">Show In PDF</a>
        </div>
        {{--<div>
            <a class="btn btn-primary" href="{{ route('pdfview',['download'=>'pdf']) }}">Download PDF</a>
        </div>--}}
    </div>
    {{--<a class="btn btn-primary" href="{{ route('pdfview',['download'=>'pdf']) }}">Show In PDF</a>--}}
    <hr>
    <!-- table3 -->
    <div class="outer-w3-agile mt-3">
       {{-- <h4 class="tittle-w3-agileits mb-4">Striped Rows</h4>--}}
        <table class="table table-striped">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Account</th>
                <th scope="col">Date</th>
                <th scope="col">Description</th>
                <th scope="col">Category</th>
                <th scope="col">Income Money IN</th>
                <th scope="col">Expense Money Out</th>
                <th scope="col">Debit/Credit</th>
                <th scope="col">Overall Balance</th>
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
    <!--// table3 -->

@endsection
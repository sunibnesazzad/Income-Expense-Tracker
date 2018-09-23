@extends('layout.app')

@section('content')
    <div class="text-center">
        <h2 class="main-title-w3layouts mb-2 text-center">Enter Income & Expense Detail</h2>
    </div>
    <hr>
    <!-- Forms-3 -->
    <div class="row">
        {{--<h4 class="tittle-w3-agileits mb-4">Grid System Form</h4>--}}
        <div class="col-md-2">

        </div>
       <div class="col-md-8">
           <div class="outer-w3-agile mt-3">
               <form action="/detail" method="POST">
                   {{csrf_field()}}
                   <div class="form-row">
                       <div class="form-group col-md-6">
                           <label for="inputEmail4">Account Name</label>
                           <input type="text" class="form-control" id="account"  name="account" placeholder="Enter Account Name" required="">
                       </div>
                       <div class="form-group col-md-6">
                           <label for="inputPassword4">Date</label>
                           <input id="date" type="date" class="form-control" name="date" placeholder="2017-06-01" required>
                          {{-- <input type="text" class="form-control" id="inputPassword4" name="date" placeholder="Password" required="">--}}
                       </div>
                   </div>
                   <div class="form-group">
                       <label for="inputAddress">Description</label>
                       <input type="text" class="form-control" id="inputAddress" name="description" placeholder="Example Balance" required="">
                   </div>
                   <div class="form-group">
                       <label for="inputAddress2">Category</label>
                       <input type="text" class="form-control" id="inputPassword4" name="category" placeholder="Example" required="">
                   </div>
                   <div class="form-group">
                       <label for="inputAddress">Income/Expence Money</label>
                       <input type="number" class="form-control" id="inputAddress" name="incomeorexpense" placeholder="1023" required="">
                   </div>
                   <div class="form-group">
                       <label for="inputAddress2">Debit/Credit</label>
                       <select id="inputState" class="form-control" name="debitorcredit">
                           <option value="Debit">Debid</option>
                           <option value="Credit">Credit</option>
                       </select>
                   </div>

                   <button type="submit" class="btn btn-primary">Submit</button>
               </form>
           </div>
       </div>
    </div>
    <!--// Forms-3 -->

@endsection
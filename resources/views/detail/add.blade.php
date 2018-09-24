@extends('layout.dash1')
@section('content')

    <!-- Page Content Start -->
    <!-- ================== -->
    <div class="main-grid">
        <div class="agile-grids">
            <div class="table-heading">
                <h2>Add Income/Expense Detail</h2>
            </div>
            <!-- Form start Start -->


            <div class="panel panel-widget forms-panel">
                <div class="forms" >
                    <div class=" form-grids form-grids-right">
                        <div class="widget-shadow " data-example-id="basic-forms">
                            <div class="form-title">
                            </div>
                            <div class="form-body">
                                <form class="form-horizontal" method="POST" action="/detail" >
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Account Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="account" class="form-control" id="name" placeholder="Enter Account Name" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Date</label>
                                        <div class="col-sm-9">
                                            <input id="date" type="date" class="form-control" name="date" placeholder="2017-06-01" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">Description</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="description" class="form-control" id="phone" placeholder="Example Balance" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">category</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="category" class="form-control" id="role" placeholder="Example" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">Income/Expence Money</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="incomeorexpense" class="form-control" id="position" placeholder="1023" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Debit/Credit</label>
                                        <div class="col-sm-9">
                                            <select id="inputState" class="form-control" name="debitorcredit">
                                                <option value="Debit">Debid</option>
                                                <option value="Credit">Credit</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-offset-2">
                                        <button type="submit" class="btn btn-default w3ls-button">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
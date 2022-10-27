@extends('layouts.app')

@section('content')
    <section class="content">

        <div class="row ">
            <div class="col-md-8 mt-4">
                <div class="box box-solid">
                    <div class="box-header with-border mt-4">
                        <h3 class="box-title" >Transanction Record</h3>
                    </div>
                    <div class="box-body">
                        <div class="card">
                            <div class="card-body">
                        <form action="{{route('expense-voucher')}}" onsubmit="return validate()" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                            @csrf
                            <div class="col-md-12 popup_details_div">
                                <div class="row">
                                    <center>
                                        <h3 id="exp"  class="page-title">TRANSACTION RECORD</h3><br><br>
                                    </center>
                                </div>
                                @if(session()->has('message'))
                                    <p class="alert alert-success text-center mt-4">{{ session()->get('message') }}</p>
                                @elseif(session()->has('error'))
                                    <p class="alert alert-danger text-center mt-4">{{ session()->get('error') }}</p>
                                @endif
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                                <span style="font-size: 20px;font-weight: bold;">Balance: </span><span style="font-size: 20px;font-weight: bold;color:rgb(55, 214, 55);" id="account-balance">0</span> 
                                        </div>
                                    </div>
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon d-flex align-items-center" style="margin-right: 10px"><b>Tra. No: </b></span>
                                                <input type="text" class="form-control" maxlength="15" name="tran_id" value="{{$tran_id}}" id="invno"  placeholder="e.g. AXE121119101" disabled>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group" >
                                            <div class="input-group">
                                                <span  class="input-group-addon d-flex align-items-center" style="margin-right: 10px" ><b>Date: </b></span>

                                                <input class="form-control"   id="currentDate"  type="date" name="date">
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group" >
                                            <label>Deposit From</label>
                                            <div class="input-group">
                                                <select class="form-control" id="deposit-form">
                                                    <option value="">-Select-</option>

                                                    @foreach($bankaccounts as $bankaccount)
                                                         @if ($bankaccount->account_type === 'bank')
                                                            <option  value="{{$bankaccount->id}}">{{$bankaccount->bank->short_name.'- '.$bankaccount->account_no}}</option>
                                                         @else
                                                            <option  value="{{$bankaccount->id}}">{{$bankaccount->title.'- '.$bankaccount->account_no}}</option>
                                                         @endif
                                                    @endforeach

                                                </select>



                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group" >
                                            <label>Cheque No</label>
                                            <input type="text" maxlength="25" class="form-control" name="ref" id="ref" placeholder="e.g. Sumon" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group" >
                                            <label>Cheque Date</label>
                                            <input type="text" maxlength="25" class="form-control" name="ref" id="ref" placeholder="e.g. Sumon" autocomplete="off">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-5">
                                        <div class="form-group" >
                                            <label>Deposit To</label>
                                            <div class="input-group">
                                                <select class="form-control" id="expense">
                                                    <option value="">-Select-</option>

                                                    @foreach($bankaccounts as $bankaccount)
                                                         @if ($bankaccount->account_type === 'bank')
                                                            <option  value="{{$bankaccount->id}}">{{$bankaccount->bank->short_name.'- '.$bankaccount->account_no}}</option>
                                                         @else
                                                            <option  value="{{$bankaccount->id}}">{{$bankaccount->title.'- '.$bankaccount->account_no}}</option>
                                                         @endif
                                                    @endforeach

                                                </select>



                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group" >
                                            <label>Ref</label>
                                            <input type="text" maxlength="25" class="form-control" name="ref" id="ref" placeholder="e.g. Sumon" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Amount</label>
                                            <input type="text" maxlength="6" class="form-control" name="totalamount" id="amount" placeholder="e.g. 500" autocomplete="off" >
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label>&nbsp;</label>
                                            <input type="button" id="addexp" class="btn btn-flat bg-red" style="background-color: red;
                                              color: white;" value="Add"/>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <table class="table table-bordered table-striped" id="create_expanse_table">
                                            <thead style="background-color: #babebf;">
                                            <th style="width:40px; text-align:center">SN</th>
                                            <th>Sourch</th>
                                            <th>Pay To</th>
                                            <th>Amount</th>
                                            <th>Cheque</th>
                                            <th>Date</th>
                                            <th>Ref</th>
                                            <th style="width:40px; text-align:center"><a class="empty" style="cursor: pointer;"><i class="fa fa-trash"></i></a></th>
                                            </thead>
                                            <tbody id="itemdata">

                                            </tbody>
                                            <tfoot id="totalitemfoot" style="opacity: 0">
                                                    <td style="width:40px; text-align:center"></td>
                                                    <td style="text-align: right;">Total</td>
                                                    <td id="totalamount"></td>
                                                    <input type="hidden" name="ref" id="ref">

                                                    <input type="hidden" name="totalamount" id="totalvalue">
                                                    <td></td>
                                                    <td class="removedata" style="width:40px; text-align:center"><a class="empty" style="cursor: pointer;"></a></td>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Note</label>
                                            <textarea class="form-control" name="note" id="note" maxlength="250" rows="3" placeholder="e.g. Note"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="clearfix" ></div>
                            <div class="col-md-12 nopadding widgets_area"></div>
                            <div class="row"style="margin-top: 15px" >
                                <div class="col-md-8"></div>

                                <div class="modal-footer">

                                    <input type="submit" class="btn btn-primary" value="submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                    </div>
                </div>
            </div>
            <script>
                var date = new Date();
                var currentDate = date.toISOString().slice(0,10);

                document.getElementById('currentDate').value = currentDate;
            </script>

@endsection

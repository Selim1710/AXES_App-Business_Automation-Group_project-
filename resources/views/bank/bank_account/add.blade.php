@extends('layouts.app')
@section('content')
<div class="pt-4"></div>
@if(session('success'))
<div class="alert alert-success mt-4" role="alert">
    {{session('success')}}
</div>
@endif

<div class="d-flex justify-content-center mt-4">
<div class="card" style="width: 500px">
    <div class="card-header d-flex justify-content-center bg-primary text-white">
      <h5 class="modal-title" id="bankCreateModelLabel">Create New Account</h5>
    </div>
    <div class="card-body">
      <div class="border p-3 rounded">
        <form id="create-bank" method="POST" action="{{route('bank-account.store')}}" >
          <div class="modal-body">
                          <div class="row mt-3">
                              <div class="col-md-6">
                                  <label for="validationDefault01" class="form-label">Account No</label>
                                  <div class="input-group"> <span class="input-group-text" id="inputGroupPrepend2">AC</span>
                                      <input type="text" name="account_no" placeholder="Account No" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required="">
                                  </div>                                                        </div>
                              <div class="col-md-6">
                                  <label for="validationDefault02" class="form-label">Account Title</label>
                                  <div class="input-group"> <span class="input-group-text" id="inputGroupPrepend2">AT</span>
                                      <input type="text" name="account_title" placeholder="Account Title" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required="">
                                  </div>                                                        </div>
                              
                          </div>
                          <div class="row mt-3">
                              <div class="col-md-6">
                                  <label for="validationDefault04" class="form-label">Select Bank</label>
                                  <select class="form-select" name="selected_bank" id="validationDefault04" required="">
                                      <option selected="" disabled="" value="">Choose...</option>
                                      @foreach ($banks as $bank)
                                          <option  value="{{$bank->id}}">{{$bank->name}}</option>
                                      @endforeach
                                  </select>
                              </div>
                              <div class="col-md-6">
                                  <label for="validationDefault03" class="form-label">Branch Name</label>
                                  <div class="input-group"> <span class="input-group-text" id="inputGroupPrepend2">BN</span>
                                      <input type="text" name="branch_name" class="form-control" placeholder="Branch Name" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required="">
                                  </div>                                                        </div>

                          </div>
                          <div class="row mt-3">
                              <div class="col-md-6">
                                  <label for="validationDefault05" class="form-label">Branch Code</label>
                                  <div class="input-group"> <span class="input-group-text" id="inputGroupPrepend2">BC</span>
                                      <input type="text" name="branch_code" class="form-control" placeholder="Branch Code" id="validationDefault05" required="">
                                  </div>
                              </div>  
                              <div class="col-md-6">
                                  <label for="validationDefaultUsername" class="form-label">Branch Location</label>
                                  <div class="input-group"> <span class="input-group-text" id="inputGroupPrepend2">BL</span>
                                      <input type="text" name="branch_location" placeholder="Branch Location" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required="">
                                  </div>
                              </div>
                          </div>
                              <div class="col-12 mt-3">
                                  <div class="form-check">
                                      <input class="form-check-input" type="checkbox"  value="" id="invalidCheck2" required="">
                                      <label class="form-check-label" for="invalidCheck2">I input the field Carefully.</label>
                                  </div>
                              </div>
                             
                          
                      </d iv>
                 
 

  <div class="modal-footer">
      @csrf
      <button type="submit" class="btn btn-primary">Create Account</button>
  </div>
</form>

  </div>
    </div>
    </div>
  </div>

@endsection
@extends('includePage')
@section('body')
    @if(session()->has('error'))
                    <div class="alert alert-danger">
                        {{session()->get('error')}}
                    </div>
                @endif
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{session()->get('success')}}
                    </div>
                @endif
                
            <div class="row ">

                <div class="col-6  alert alert-secondary  ">
                    <form method="POST" class=" form" action="">
                        @csrf
                        <div class="row">
                        <div class="col-6 mb-2">
                            <label for="institute" class="form-label">Institutaion Name</label>
                            <input type="text" class="form-control input-field" id="institute" name="institute" placeholder="enter the Institutaion Name " value="{{$configData->institute}}" required />
                        </div>
                            <div class="col-6 mb-2">
                                <label for="location" class="form-label">Address</label>
                                <input type="text" class="form-control input-field" id="location" name="location" placeholder="enter the institutaion location " value="{{$configData->location}}" required />
                            </div>
                            <div class="col-6 mb-2">
                                <label for="mail" class="form-label">Email</label>
                                <input type="email" class="form-control input-field" id="mail" name="mail" aria-describedby="emailHelp" placeholder="enter the email " value="{{$configData->mail}}" required />
                            </div>
                            <div class="col-6 mb-2">
                                <label for="mobile" class="form-label">Phone Number</label>
                                <input type="number" class="form-control input-field" id="mobile"  name="mobile"  placeholder="enter the number " value="{{$configData->mobile}}" required />
                            </div>
                            <div class="col-6 mb-2">
                                <label for="userId" class="form-label">User Id</label>
                                <input type="text" class="form-control input-field" id="userId"  name="userId"  placeholder="Enter admin id " value="{{$configData->userId}}" required />
                            </div>
                            <div class=" mt-4">
                                <button type="submit" class="btn btn-sm btn-success text-white" onclick="confirm('Are you sure to install the server. It will be not undone after once a install?')">Update </button>
                            </div>
                        </div>
                    </form>  
                </div>
                <div class="col-1"></div>
                <div class="col-5 alert alert-secondary ">
                    <form method="POST" class=" form" action="">
                        <div class="col-8 mb-3 ">
                            <label for="pass" class="form-label">Old Password</label>
                            <input type="password" class="form-control input-field" id="pass" name="pass" placeholder="Enter login password" required />
                        </div>
                        <div class="col-8 mb-3 ">
                            <label for="pass" class="form-label">New Password</label>
                            <input type="password" class="form-control input-field" id="pass" name="pass" placeholder="Enter login password" required />
                        </div>
                        <div class="col-8 mb-2 ">
                            <label for="pass" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control input-field" id="pass" name="pass" placeholder="Enter login password" required />
                        </div>
                        <div class=" mt-4">
                        <button type="submit" class="btn btn-sm btn-success text-white" onclick="confirm('Are you sure to install the server. It will be not undone after once a install?')">Change Password</button>
                        </div>
                    </form>
                </div>
            </div>
@endsection
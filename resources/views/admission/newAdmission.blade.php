@extends('includePage')
@section('body')

<div class="container">
    <div class="row mb-4">
        <h4      class="text-uppercase">New admission entry</h4     >
    </div>
    <form class="new-added-form" action="#" method="#" enctype="multipart/form-data">
        @csrf
        <div class="row align-items-center">
            <div class="col-xl-3 col-lg-6 col-12 form-group mb-3">
                <label for="fullName" class="form-label ">Full Name</label>
                <input type="text" class="form-control " id="fullName" name="fullName" placeholder="Enter student full name" required>
            </div>
            <div class="col-xl-3 col-lg-6 col-12 form-group mb-3">
                <label for="lastName"class="form-label ">Sure Name </label>
                <input type="text" name="" for="lase-name" placeholder="Enter student last name" class="form-control" id="lastName" required>
            </div>
            <div class="col-xl-3 col-lg-6 col-12 form-group mb-3">
                <label for="fatherName"class="form-label ">Father's Name </label>
                <input type="text" name="" placeholder="Enter fathers name" class="form-control" id="fatherName" required>
            </div>
            <div class="col-xl-3 col-lg-6 col-12 form-group mb-3">
                <label for="mothername"  class="form-label ">Mother's Name </label>
                <input type="text" name="" placeholder="Enter Mothers name" class="form-control" id="mothername" required>
            </div>
            <div class="col-xl-3 col-lg-6 col-12 form-group mb-3">
                <label for="gender" class="form-lavel">Gender </label>
                <select class="form-select" aria-label="Default select example"required>
                <option selected>Gender select</option> 
                <option value="1">Male</option>
                <option value="2">Female</option>
                <option value="3">other</option>
                </select>
            </div>
            <div class="col-xl-3 col-lg-6 col-12 form-group mb-3">
                <label for="birthDate" class="form-lavel">Date Of Birth </label>
                <input type="date" name="" placeholder="dd/mm/yyyy" class="form-control air-datepicker"
                    data-position='bottom right' id="birthDate" class="form-confrol" required>
            </div>
            <div class="col-xl-3 col-lg-6 col-12 form-group mb-3">
                <label for="roll" class="form-lavel">Roll</label>
                <input type="text"  name="" placeholder="Enter student class roll" id="roll" class="form-control" required>
            </div>
            <div class="col-xl-3 col-lg-6 col-12 form-group mb-3">
                <label for="bloodgroup" class="form-lavel">Blood Group </label>
                <select class="select2" class="from-controller" name="">
                    <option value="">Select </option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                </select>
            </div>
            <div class="col-xl-3 col-lg-6 col-12 form-group mb-3">
                <label for="religion" class="form-lavel">Religion </label>
                <select class="select2" class="form-controller" name="" required>
                    <option value="">Select </option>
                    <option value="Islam">Islam</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Christian">Christian</option>
                    <option value="Buddish">Buddish</option>
                    <option value="Others">Others</option>
                </select>
            </div>
            <div class="col-xl-3 col-lg-6 col-12 form-group mb-3">
                <label for="">E-Mail</label>
                <input type="email" name="" placeholder="Enter student email" class="form-control">
            </div>
            <div class="col-xl-3 col-lg-6 col-12 form-group mb-3">
                <label>Session </label>
                <select class="select2" name="" required>
                    <option value="">Select </option>
                </select>
                    
            </div>
            <div class="col-xl-3 col-lg-6 col-12 form-group mb-3">
                <label>Class </label>
                <select class="select2" name="" required>
                    <option value="">Select </option>
                </select>
            </div>
            <div class="col-xl-3 col-lg-6 col-12 form-group mb-3">
                <label>Section/Group </label>
                <select class="select2" name="" required>
                    <option value="">Select </option>
                </select>
            </div>
            <div class="col-xl-3 col-lg-6 col-12 form-group mb-3">
                <label>Phone</label>
                <input type="text" name="" placeholder="Enter gurdian mobile number" class="form-control" required>
            </div>
            <div class="col-xl-3 col-lg-6 col-12 form-group mb-3">
                <label>Address</label>
                <input type="text" class="form-control" placeholder="Student full address" name="">
            </div>
            <div class="col-xl-3 col-lg-6 col-12 form-group mg-t-30">
                <label class="text-dark-medium">Avatar (150px X 150px)</label>
                <input type="file" name="" class="form-control-file">
            </div>
            <div class="col-12 form-group mg-t-8">
                <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
            </div>
        </div>
    </form>
</div>

@endsection
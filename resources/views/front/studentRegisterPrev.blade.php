@extends('front.include')
@section('frontBody')

<!-- start hero section -->
<section id="home" class="p-0 parallax mobile-height wow animate__fadeIn" data-parallax-background-ratio="0.5" style="background-image:url('{{ asset('public/front/html/') }}/images/cpi_cover.jpg');height:570px">
    <div class="opacity-extra-medium bg-extra-dark-gray"></div>
    <div class="container position-relative full-screen">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center">
                <img src="{{ asset('public/front/html/') }}/images/text2.png" alt=""/>
                <div class="down-section text-center"><a href="#about" class="inner-link"><i class="ti-arrow-down icon-extra-small text-white-2 bg-deep-pink padding-15px-all sm-padding-10px-all rounded-circle"></i></a></div>
            </div>
        </div>
    </div>
</section>
<!-- end hero section -->
<div class="container p-4">
    <div class="row align-items-center my-3 mb-4">
        <div class="col-12 text-center">
            <h2 class="display-6 fw-bold">Reunion Registration Form</h2>
            <!-- Button trigger modal -->
            <a class="fw-bold btn btn-success" data-bs-toggle="modal" data-bs-target="#programDetails"><i class="fa-sharp fa-light fa-memo-circle-info"></i> Program Details</a>
            <a class="fw-bold btn btn-primary" data-bs-toggle="modal" data-bs-target="#tShirtDetails"><i class="fa-sharp fa-solid fa-shirt"></i> T-Shirt Details</a>
        </div>
    </div>
    <div class="row align-items-center mt-5">
        <div class="col-11 mx-auto">
            <div class="card card-body shadow p-4">
                @if(Session::has('error'))
                    <div class="alert alert-danger">
                        {{ Session::get('error') }}
                    </div>
                @endif
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <form class="row g-3" method="POST" action="{{ route('saveStudent') }}">
                    @csrf
                    <h6 class="mb-0 fw-bold">Personal Details</h6>
                    <div class="col-12 col-md-4">
                        <label for="stdName" class="form-label">Your Name(*)</label>
                        <input type="text" class="form-control" id="stdName" required placeholder="Enter fullname" name="stdName">
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="dept" class="form-label">Department(*)</label>
                        <select id="dept" class="form-select" required name="dept">
                            <option selected>Choose...</option>
                            <option>Civil Technology</option>
                            <option>Electrical Technology</option>
                            <option>Mechanical Technology</option>
                            <option>Power Technology</option>
                            <option>Eelectronics Technology</option>
                            <option>Computer Technology</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="shift" class="form-label">Shift(*)</label>
                        <select id="shift" class="form-select" required name="shift">
                            <option selected>Choose...</option>
                            <option>1st</option>
                            <option>2nd</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="phone" class="form-label">Phone/Mobile(*)</label>
                        <input type="text" class="form-control" id="phone" placeholder="Enter a valid phone no" required name="phone">
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="stdMail" class="form-label">e-Mail(*)</label>
                        <input type="email" class="form-control" id="stdMail" placeholder="Enter and active email" required name="mailAddress">
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="gender" class="form-label">Gender(*)</label>
                        <select id="gender" class="form-select" required name="gender">
                            <option selected>Choose...</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="blGroup" class="form-label">Blood Group(*)</label>
                        <select id="blGroup" class="form-select" required name="blGroup">
                            <option selected>Choose...</option>
                            <option>A+</option>
                            <option>A-</option>
                            <option>B+</option>
                            <option>B-</option>
                            <option>AB+</option>
                            <option>AB-</option>
                            <option>O+</option>
                            <option>O-</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="tShirtSize" class="form-label">T-Shirt Size(*)</label>
                        <select id="tShirtSize" class="form-select" required name="tShirtSize">
                            <option selected>Choose...</option>
                            <option>S &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[Chest-36 X Length-26 INCH]</option>
                            <option>M &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[Chest-38 X Length-27 INCH]</option>
                            <option>L &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[Chest-40 X Length-28 INCH]</option>
                            <option>XL  &nbsp;&nbsp;&nbsp;&nbsp;[Chest-42 X Length-29 INCH]</option>
                            <option>2XL &nbsp;[Chest-44 X Length-30 INCH]</option>
                            <option>3XL &nbsp;[Chest-46 X Length-31 INCH]</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="currentAddress" class="form-label">Current Address(*)</label>
                        <input type="text" class="form-control" id="currentAddress" placeholder="Briefly Describe Current Location" required name="currentAddress">
                    </div>
                    <h6 class="mb-0 fw-bold">Professional Details</h6>
                    <div class="col-12 col-md-6">
                        <label for="professionDetails" class="form-label">Profession</label>
                        <input type="text" class="form-control" id="professionDetails" placeholder="Position & Company" name="professionDetails">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="expreience" class="form-label">Professional Experience</label>
                        <input type="text" class="form-control" id="expreience" placeholder="Experience details please" name="expreience">
                    </div>
                    <h6 class="mb-0 fw-bold">Guest Details</h6>
                    <div class="col-12 col-md-4">
                        <label for="totalJoin" class="form-label">Number of Guest(*)</label>
                        <select name="totalMember" onchange="totMember(this)" id="totalJoin" class="form-control">
                            <option value="">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <div class="row" id="memberList"></div>
                    </div>
                    <h6 class="mb-0 fw-bold">Payment Details</h6>
                    <div class="col-12 col-md-4">
                        <label for="totalPayment" class="form-label">Total Amount(*)</label>
                        <input type="number" class="form-control" id="totalPayment" placeholder="Enter payment amount" required name="payAmount">
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="dept" class="form-label">Payment Method(*)</label>
                        <select id="dept" class="form-select" onchange='payNumber(this.value)' required name="payType">
                            <option selected>Choose...</option>
                            <option>Bkash</option>
                            <option>Nagad</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="txnId" class="form-label">TXNID(*)</label>
                        <input type="text" class="form-control" id="txnId" placeholder="Example: BJP9PG9ZVB" required name="payId">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <div class="col-12 mt-4" id="paymentNumber"></div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Program Details -->
<div class="modal fade main model mt-5" id="programDetails" tabindex="-1" role="dialog" aria-labelledby="programDetailsModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl mt-5" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="programDetailsModalLabel">Program Details</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-12 col-md-6">
                <h6 class="text-extra-dark-gray sm-w-80 d-inline-block mb-0 fw-bold">Reunion Venue</h6>
                <p class="fw-bold">Play Ground of Cumilla Polytechnic Institute</p>
                <h6 class="text-extra-dark-gray sm-w-80 d-inline-block mb-0 fw-bold">Reunion Will Held</h6>
                <p class="fw-bold">25th December 2024, Wednesday at 8.30 AM to Day Long</p>
                <h6 class="text-extra-dark-gray sm-w-80 d-inline-block mb-0 fw-bold">Registration Fees</h6>
                
                <ul>
                    <li><b>Participate:</b> 1530/- (Bkash/Nagad Charge Included)</li>
                    <li><b>Guest:</b> 1020/- (Bkash/Nagad Charge Included)</li>
                </ul>
                <p class="my-2 mt-4 fw-bold text-success">Payment System:</p>
                <ul>
                    <li><b class="text-danger">Bkash:</b> 01972-006267 (Merchant Make Payment)</li>
                    <li><b class="text-danger">Nagad:</b> 01972-006267 (Merchant Make Payment)</li>
                </ul>
                <h6 class="text-extra-dark-gray sm-w-80 d-inline-block mb-0 fw-bold">Registration Rules</h6>
                
                <ol>
                    <li>Fill The Form for Only Once Even If There Are Multiple Guests</li>
                    <li>General Member(Student of Session 2010-11 of CPI) joining fee 1500 BDT</li>
                    <li>Per Guest Member Joining Fees 1000 BDT</li>
                    <li>6 Years of Age Own Children Must Register, Don't Need to Below 6 Years</li>
                </ol>
            </div>
            <div class="col-12 col-md-6">
                <h6 class="text-extra-dark-gray sm-w-80 d-inline-block mb-0 fw-bold">Program Arrangement Details</h6>
                
                <ul>
                    <li>Breakfast(Premium Package)</li>
                    <li>Lunch(Premium Package for Any Religion)</li>
                    <li>Evening Snacks</li>
                    <li>Premium Quality Branded T-Shirt(Polo)</li>
                    <li>Souvenir Mog(Branded)</li>
                    <li>Coffee Corner</li>
                    <li>Baby Feeding Zone</li>
                    <li>Female Rest Room</li>
                    <li>Photo Zone</li>
                    <li>Fun Zone for Kids</li>
                    <li>Guest Female/Entertainment for Woman</li>
                    <li>Raffle Draw (Attractive Gift)</li>
                    <li>Gettings Video Message Display About Ex Engineers from Foreigners Friends(01674-779916 Imo,WhatsApp, Viber)</li>
                </ul>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal T-Shirt Details -->
<div class="modal fade main model mt-5" id="tShirtDetails" tabindex="-1" role="dialog" aria-labelledby="tShirtDetailsModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered mt-5" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tShirtDetailsModalLabel">T-Shirt Details</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-12">
                <p>*All size details here are inch</p>
                <table class="table table-bordered text-center">
                    <thead>
                        <th>Sizes</th>
                        <th>Chest</th>
                        <th>Length</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>S</td>
                            <td>36</td>
                            <td>26</td>
                        </tr>
                        <tr>
                            <td>M</td>
                            <td>38</td>
                            <td>27</td>
                        </tr>
                        <tr>
                            <td>L</td>
                            <td>40</td>
                            <td>28</td>
                        </tr>
                        <tr>
                            <td>XL</td>
                            <td>42</td>
                            <td>29</td>
                        </tr>
                        <tr>
                            <td>2XL</td>
                            <td>44</td>
                            <td>30</td>
                        </tr>
                        <tr>
                            <td>3XL</td>
                            <td>46</td>
                            <td>31</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection
<script>
    function totMember(e){
        document.getElementById("memberList").innerHTML = "";
        document.getElementById("totalPayment").value = "";
        x = e.value
        for (let i = 0; i < x; i++) {
            text = "<div class='col-12 col-md-4'><label class='text-success'>Guest Name</label><input type='text' class='form-control border-success text-success' placeholder='Example: Thamina Akter' required name='guestName[]' required></div><div class='col-12 col-md-4'><label class='text-success'>Relation</label><select class='form-control border-success text-success' name='guestRelation[]' onchange='guestRelation(this.value,"+i+")' required><option value=''>-</option><option>Spouse</option><option>Father</option><option>Mother</option><option>Brother</option><option>Sister</option><option>Son</option><option>Daughter</option><option>Other</option></select></div><div class='col-12 col-md-4'><div id='guestAge["+i+"]' style='display:none'><label class='text-success'>Guest Age</label><input onchange='paymentDetails(this.value)' type='number' class='form-control border-success text-success' placeholder='Example: 25' name='guestAge[]' id='memberAge[]' value=''></div></div>";
            document.getElementById("memberList").innerHTML += text;
        }
    }
    function sum(x,y){
        a = x;
        b = y;
        c = Number(a)+Number(b);
        return Number(c);
    }

    function payNumber(e){
        if(e === 'Bkash'){
            document.getElementById("paymentNumber").innerHTML = "<h6>`bKash` payment via USSD:</h6><ul><li>Dial *247#</li><li>Choose “Payment”</li><li>Enter the Merchant bKash Account Number(01972-006267)</li><li>Enter the amount</li><li>Enter Reference(CPI 10-11)</li><li>Type PIN</li><li>Done! You will receive confirmation SMS at the end of payment</li></ul> <h6>‘bKash’ payment via app:</h6><ul><li>Login to bKash App</li><li>Click the Payment button</li><li>Type the Merchant Account Number(01972-006267) or scan the QR code</li><li>Type The Amount</li><li>Type The Reference(CPI 10-11) & Pin</li><li>Tap & Hold</li><li>Receive confirmation SMS at the end of payment</li></ul>";
        }else if(e === 'Nagad'){
            document.getElementById("paymentNumber").innerHTML = "<h6>‘Nagad’ payment via USSD:</h6><ul><li>Dial *167#</li><li>Select payment</li><li>Tyoe The Marchand Account Number(01972-006267)</li><li>Type The Amount</li><li>Type the counter number(Put 0)</li><li>Type The Reference(CPI 10-11)</li><li>Type PIN</li><li>Receive confirmation SMS at the end of payment</li></ul> <h6>‘Nagad’ payment via app:</h6><ul><li>Login to Nagad App</li><li>Click the Merchant Pay button</li><li>Type the Merchant Account Number(01972-006267) or scan the QR code</li><li>Type The Amount</li><li>Type The Reference(CPI 10-11) & Pin</li><li>Tap & Hold</li><li>Receive confirmation SMS at the end of payment</li></ul>";
        }else{
            document.getElementById("paymentNumber").innerHTML = "";
        }
    }

    function guestRelation(e,f){
        var x = document.getElementById("guestAge["+f+"]");
        if(e==='Son' || e==='Daughter'){
            x.style.display = "block";
        }else{
            x.style.display = "none";
        }
    }

    // function paymentDetails(e){
    //     // document.getElementById("totalPayment").value = "";
    //     totId = document.querySelectorAll('#memberAge').length;
    //     payment = document.getElementById("totalPayment").value;
    //     // alert (totId)
    //     // i =0;
    //     idNo = document.querySelector("#memberAge");
    //     for (let i = 0; i <= totId; i++){
    //         return alert(idNo+=i);
    //         if(e>6){
    //             var totPayment = sum(payment,1000);
    //             document.getElementById("totalPayment").value = totPayment;
    //         }else{
    //             document.getElementById("totalPayment").value = payment;
    //         }
    //     }
        
    // }
</script>
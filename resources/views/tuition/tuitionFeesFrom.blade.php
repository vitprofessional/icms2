@extends('includePage')
@section('body')
    <div class="row mx-auto ">
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
    <form method="POST" class="card-body form" action="">
        @csrf
        <div class="row mb-4">
            <h4 class="text-bold">Tuition Fees Collection</h4>
        </div>
        <div class="row">
            <div class="col-md-4 mb-2">
                <label for="session" class="form-label">Session Name</label>
                <select class="form-select " id="session" name="session" aria-label="Default select example" required>
                    <option selected>-select-</option>
                    <option value="Debit">Octal</option>
                    <option value="Crtedit">Hidro</option>
                </select>
            </div>
            <div class="col-md-4 mb-2">
                <label for="className" class="form-label ">Class Name</label>
                <select class="form-select " id="className" name="className" aria-label="Default select example" required>
                    <option selected>-select-</option>
                    <option value="Debit">Six</option>
                    <option value="Crtedit">Ten</option>
                </select>
            </div>
            <div class="col-md-4 mb-2">
                <label for="section" class="form-label">Section Name</label>
                <select class="form-select " id="section" name="section" aria-label="Default select example" required>
                    <option selected>-select-</option>
                    <option value="Debit">Octal</option>
                    <option value="Crtedit">Hidro</option>
                </select>
            </div>
            <div class="col-md-4 mb-2">
                <label for="stdName" class="form-label">Student Name</label>
                <input type="text" class="form-control " id="stdName" name="stdName" placeholder="" required>
                </select>
            </div>
            <div class="col-md-4 mb-2">
                <label for="rollNumber" class="form-label">Roll Number</label>
                <input type="text" class="form-control " id="rollNumber" name="rollNumber" placeholder="" required>
                </select>
            </div>
            <div class="col-md-4 mb-2">
                <label for="amount" class="form-label">Amount</label>
                <input type="number" class="form-control " id="amount" name="amount" placeholder="" required>
                </select>
            </div>
            <div class="  mx-auto  gap-2 mt-4">
                <button class="btn btn-primary btn-color btn-sm" type="submit">Submit</button>
                <button class="btn btn-danger btn-color btn-sm" type="reset">Reset</button>
            </div>
        </div>
    </form>
</div>

@endsection
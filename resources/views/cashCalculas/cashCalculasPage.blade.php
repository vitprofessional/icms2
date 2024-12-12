@extends('includePage') 
@section('body')
    <div class="row ">
        <div class="col-6 mx-auto  ">
            <div class="card shadow text-bg-light p-2 border-0 ">
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
                <form method="POST" class="card-body form" action="{{route('saveCashCalculas')}}">
                    @csrf
                    <div class="mb-2">
                        <label for="source" class="form-label ">Source</label>
                        <input type="text" class="form-control form-control-sm" id="source" name="source" placeholder="" required>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label for="amount" class="form-label ">Amount</label>
                        <input type="number" class="form-control form-control-sm" id="amount" name="amount" placeholder="" required>
                    </div>
                    <div class="mb-2">
                        <label for="transaction" class="form-label">Type Of Transaction</label>
                        <select class="form-select form-select-sm" id="transaction" name="transaction" aria-label="Default select example" required>
                            <option selected>Open this select menu</option>
                            <option value="Debit">Debit</option>
                            <option value="Crtedit">Crtedit</option>
                        </select>
                    </div>
                    
                    <div class="mb-2">
                        <label for="date" class="form-label ">Date</label>
                        <input type="date" class="form-control form-control-sm" id="date" name="date" placeholder="">
                    </div>
                    <div class=" col-6 mx-auto d-grid gap-2 mt-5">
                        <button class="btn btn-primary btn-color btn-sm" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
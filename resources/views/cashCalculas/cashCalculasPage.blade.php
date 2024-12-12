@extends('includePage') 
@section('body')
    <div class="row ">
        <div class="col-6 mx-auto  ">
            <div class="card shadow text-bg-light p-2 border-0 ">
                <form class="card-body">
                    <div class="mb-2">
                        <label for="accName" class="form-label ">Source</label>
                        <input type="text" class="form-control form-control-sm" id="accName" name="accName" placeholder="">
                        </select>
                    </div>
                    <div class="mb-2">
                        <label for="accNumber" class="form-label ">Amount</label>
                        <input type="text" class="form-control form-control-sm" id="accNumber" name="accNumber" placeholder="">
                    </div>
                    <div class="mb-2">
                        <label for="userName" class="form-label">Type Of Transaction</label>
                        <select class="form-select form-select-sm" aria-label="Default select example">
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
@if(!empty($studentList) && count($studentList)>0)
    <div class="col-md-4 mb-2">
        <label for="stdName" class="form-label">Student Name</label>
        <select name="stdName" id="stdName" class="form-control" required>
            @foreach($studentList as $std)
            <option value="{{ $std->id }}">{{ $std->fullName }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-4 mb-2">
        <label for="rollNumber" class="form-label">Roll Number</label>
        <input type="text" class="form-control " id="rollNumber" name="rollNumber" placeholder="" required>
    </div>
    <div class="col-md-4 mb-2">
        <label for="amount" class="form-label">Amount</label>
        <input type="number" class="form-control " id="amount" name="amount" placeholder="" required>
    </div>
@else
    <div class="alert alert-info">Sorry! No data found</div>
@endif
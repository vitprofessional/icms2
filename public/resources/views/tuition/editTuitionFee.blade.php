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
    <form method="POST" class="card-body form" action="{{route('updateTuitionFee')}}">
        @csrf
        
        <input type="hidden" name="tuitionFeeId" value="{{$editData->id}}">
        <div class="row mb-4">
            <h4 class="text-bold">Tuition Fees Collection</h4>
        </div>
        <div class="row">
        @php 
            $sessionData  = \App\Models\sessionManage::find($editData->session);
            $classData  = \App\Models\classManage::find($editData->className);
            $sectionData  = \App\Models\sectionManage::find($editData->section);
        @endphp
            <div class="col-md-4 mb-2">
                <label for="session" class="form-label">Session Name</label>
                <select class="form-select " id="session" name="session" aria-label="Default select example" required>
                    @if(!empty($sessionData))
                    <option value="{{$sessionData->id}}">{{$sessionData->session}}</option>
                    @endif
                        @if(!empty($sessionDetails) && count($sessionDetails)>0)
                            @foreach($sessionDetails as $sd)
                            <option value="{{ $sd->id }}">{{ $sd->session}}</option>
                            @endforeach
                        @endif         
                </select>
            </div>
            <div class="col-md-4 mb-2">
                <label for="className" class="form-label ">Class Name</label>
                <select class="form-select " id="className" name="className" aria-label="Default select example" required>
                    @if(!empty($classData))
                    <option value="{{$classData->id}}">{{$classData->className}}</option>
                    @endif
                        @if(!empty($classDetails) && count($classDetails)>0)
                            @foreach($classDetails as $cd)
                            <option value="{{ $cd->id }}">{{ $cd->className}}</option>
                            @endforeach
                        @endif  
                    
                </select>
            </div>
            <div class="col-md-4 mb-2">
                <label for="section" class="form-label">Section Name</label>
                <select class="form-select " id="section" name="section" aria-label="Default select example" required>
                    @if(!empty($sectionData))
                    <option value="{{$sectionData->id}}">{{$sectionData->section}}</option>
                    @endif
                        @if(!empty($sectionDetails) && count($sectionDetails)>0)
                            @foreach($sectionDetails as $sec)
                            <option value="{{ $sec->id }}">{{ $sec->section}}</option>
                            @endforeach
                        @endif  
                </select>
            </div>
            <div class="col-md-4 mb-2">
                <label for="stdName" class="form-label">Student Name</label>
                <input type="text" class="form-control " id="stdName" name="stdName" placeholder="" value="{{$editData->stdName}}" required>
                </select>
            </div>
            <div class="col-md-4 mb-2">
                <label for="rollNumber" class="form-label">Roll Number</label>
                <input type="text" class="form-control " id="rollNumber" name="rollNumber" placeholder="" value="{{$editData->rollNumber}}" required>
                </select>
            </div>
            <div class="col-md-4 mb-2">
                <label for="amount" class="form-label">Amount</label>
                <input type="number" class="form-control " id="amount" name="amount" placeholder="" value="{{$editData->amount}}" required>
                </select>
            </div>
            <div class="  mx-auto  gap-2 mt-4">
                <button class="btn btn-primary btn-color btn-sm" type="submit">Update</button>
                <a href="{{route('tuitionFeeList')}}"class="btn btn-success btn-color btn-sm">Back</a>
            </div>
        </div>
    </form>
</div>

@endsection
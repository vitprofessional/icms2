@extends('includePage')
@section('body')
    <div class="row ">
        <div class="col-6 mx-auto">
            <div class="card shadow  p-2 border-0 ">
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
                <form method="POST" class="card-body form" action="{{route('updateSection')}}">
                    @csrf
                    <input type="hidden" name="sectionId" value="{{$editData->id}}">
                    <div class="mb-2">
                        <label for="section" class="form-label ">Section Name</label>
                        <input type="text" class="form-control form-control-sm" id="section" name="section" placeholder="" value="{{$editData->section}}" required>
                        </select>
                    </div>
                    <div class=" mx-auto gap-2 mt-5">
                        <a href="{{route('sectionForm')}}" class="btn btn-success btn-color btn-sm" type="submit">Back</a>
                        <button class="btn btn-primary btn-color btn-sm" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
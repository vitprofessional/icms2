@extends('includePage')
@section('body')
    <div class="row ">
        <div class="col-6 mx-auto  ">
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
                <form method="POST" class="card-body form" action="{{route('saveSession')}}">
                    @csrf
                    <div class="mb-2">
                        <label for="session" class="form-label ">Session</label>
                        <input type="text" class="form-control form-control-sm" id="session" name="session" placeholder="" required>
                        </select>
                    </div>
                    <div class=" mx-auto gap-2 mt-5">
                        <button class="btn btn-primary btn-color btn-sm" type="submit">Submit</button>
                        <button class="btn btn-danger btn-color btn-sm" type="submit">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
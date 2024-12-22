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

<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card card-body  border  ">
            <table class=" table table-striped table-hover text-center shadow-lg p-3 rounded" >
                <thead class="table-info">
                    <tr>
                    <th>Session Name</th>
                    <th>Acton</th>
                    </tr>
                </thead>
                <tbody class="">
                @if(!empty($sessionList) && count($sessionList)>0)
                    @foreach($sessionList as $sess)
                    <tr>
                        <td>{{$sess->session}}</td>
                    <td>
                            <a href="{{route('editSession',['id'=>$sess-> id])}}"><i class="fa-solid fa-pen-to-square mx-2" style="color: #4125b1;"></i></a>
                            <a onclick="confirm('are you sure')" href="{{route('deleteSession',['id'=> $sess -> id])}}"><i class="fa-solid fa-trash mx-2" style="color: #c10b26;"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
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
                <form method="POST" class="card-body form" action="{{route('saveClass')}}">
                    @csrf
                    <div class="mb-2">
                        <label for="className" class="form-label ">Class Name</label>
                        <input type="text" class="form-control form-control-sm" id="className" name="className" placeholder="" required>
                        </select>
                    </div>
                    <div class=" mx-auto gap-2 mt-5">
                        <button class="btn btn-primary btn-color btn-sm" type="submit">Submit</button>
                        <button class="btn btn-danger btn-color btn-sm" type="reset">Reset</button>
                    </div>
                </form>
                @php 
                    $config = \App\Models\configurationManage::find(Session::get('adminSession'));
                @endphp
                {{ $config->institute }}
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card card-body  border  ">
           
            <table class=" table table-striped table-hover  shadow-lg  rounded" >
                <thead class="table-info">
                    <tr>
                    <th>Calss Name</th>
                    <th>Acton</th>
                    </tr>
                </thead>
                <tbody class="">
                @if(!empty($classList) && count($classList)>0)
                    @foreach($classList as $cd)
                    <tr>
                        <td>{{$cd->className}}</td>
                    <td>
                            <a href="{{route('editClass',['id'=>$cd->id])}}"><i class="fa-solid fa-pen-to-square mx-2" style="color: #4125b1;"></i></a>
                            <a onclick="confirm('are you sure')" href="{{route('deleteClass',['id'=>$cd->id])}}"><i class="fa-solid fa-trash mx-2" style="color: #c10b26;"></i></a>
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
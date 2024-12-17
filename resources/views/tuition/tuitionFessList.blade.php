@extends('includePage') 
@section('body')
    <div class="row   ">
        <div class="card card-body  border  ">
            @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
            @endif
            @if(Session::has('error'))
            <div class="alert alert-danger">
                {{Session::get('error')}}
            </div>
            @endif
            <table class=" table table-striped table-hover text-center shadow-lg p-3 rounded" >
                <thead class="table-info">
                    <tr>
                    <th>Date</th>
                    <th>Student Name</th>
                    <th>Class</th>
                    <th>Section Name</th>
                    <th>Roll Numbe</th>
                    <th>Amount</th>
                    </tr>
                </thead>
                <tbody class="">
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href=""><i class="fa-solid fa-eye mx-2" style="color:rgb(35 170 211);"></i></a>
                            <a href=""><i class="fa-solid fa-pen-to-square mx-2" style="color: #4125b1;"></i></a>
                            <a onclick="confirm('are you sure')" href=""><i class="fa-solid fa-trash mx-2" style="color: #c10b26;"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="5"> Do not entry any data</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
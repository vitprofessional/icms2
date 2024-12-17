@extends('includePage')
@section('body')
<div class="row">
    <div class="card card-body">
    <table class=" table table-striped table-hover text-center shadow-lg p-3 rounded" >
                <thead class="table-info">
                    <tr>
                    <th scope="col">Full Name</th>
                    <th scope="col">Sure Name</th>
                    <th scope="col">E-Mail</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Session</th>
                    <th scope="col">Class</th>
                    <th scope="col">Section</th>
                    <th scope="col">Roll</th>
                    <th scope="col">Image</th>
                    <th>Action</th>
                   
                 </tr>
                </thead>
                <tbody class="">
                @if(!empty($cashManageData) && count($cashManageData)>0)
                    @foreach($cashManageData    as $d)
                    <tr>
                        <td>fdsf</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
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
                        <td colspan="10"> Do not entry any data</td>
                    </tr>
                    @endif
                </tbody>
            </table>
    </div>
</div>
@endsection
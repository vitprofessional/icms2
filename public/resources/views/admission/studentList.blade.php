@extends('includePage')
@section('body')
<div class="row">
    <div class="card card-body">
    <table class=" table table-striped table-hover text-center shadow-lg p-3 rounded" >
                <thead class="table-info">
                    <tr>
                    <th scope="col">Full Name</th>
                    <th scope="col">Session</th>
                    <th scope="col">Class</th>
                    <th scope="col">Section</th>
                    <th scope="col">Roll</th>
                    <th scope="col">E-Mail</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Image</th>
                    <th>Action</th>
                   
                 </tr>
                </thead>
                <tbody class="">
                @if(!empty($stdDetails) && count($stdDetails)>0)
                    @foreach($stdDetails as $std)
                    @php 
                    $sessionData= \App\Models\sessionManage::find($std->sessName);
                    $classData= \App\Models\classManage::find($std->className);
                    $sectionData= \App\Models\sectionManage::find($std->sectionName);
                    @endphp
                    <tr>
                    <td>{{$std->fullName}}</td>
                    @if(!empty($sessionData))
                    <td>{{$sessionData->session}}</td>
                    @else
                    <td>-</td>
                    @endif
                    @if(!empty($classData))
                    <td>{{$classData->className}}</td>
                    @else
                    <td>-</td>
                    @endif
                    @if(!empty($sectionData))
                    <td>{{$sectionData->section}}</td>
                    @else
                    <td>-</td>
                    @endif
                    <td>{{$std->rollNumber}}</td>
                    <td>{{$std->mail}}</td>
                    <td>{{$std->phone}}</td>
                    <td>{{$std->avatar}}</td>
                        <td>
                            <a href="{{route('viewAdmission',['id'=>$std->id])}}"><i class="fa-solid fa-eye mx-2" style="color:rgb(35 170 211);"></i></a>
                            <a href="{{route('editAdmission',['id'=>$std->id])}}"><i class="fa-solid fa-pen-to-square mx-2" style="color: #4125b1;"></i></a>
                            <a onclick="confirm('are you sure')" href="{{route('dltAdmission',['id'=>$std->id])}}"><i class="fa-solid fa-trash mx-2" style="color: #c10b26;"></i></a>
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
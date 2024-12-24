@extends('includePage') 
@section('body')
    <div class="row col-md-6 mx-auto">
        <div class="card card-body  border  ">
            
        <div class="mb-3 text-center">
         <u class="h4">View Student Profile</u>
        </div>
            <table class=" table table-striped table-hover hadow-lg p-3 rounded" >
                @php
                $sessionData =\App\Models\sessionManage::find($singleData->sessName);
                $classData   =\App\Models\classManage::find($singleData->className);
                $sectionData =\App\Models\sectionManage::find($singleData->sectionName);
                @endphp
                <tbody class="">

                    <tr>
                        <th>Admission Date</th>
                        <td>{{$singleData->created_at->format('d-m-y')}}</td>
                    </tr>
                    <tr>
                        <th >Student Name</th>
                        <td>{{$singleData->fullName}}</td>
                    </tr>
                    <tr>
                        <th >Session</th>
                        @if(!empty($sessionData))
                        <td>{{$sessionData->session}}</td>
                        @else
                        <td>-</td>
                        @endif
                    </tr>
                    <tr>
                        <th >Class</th>
                        @if(!empty($classData))
                        <td>{{$classData->className}}</td>
                        @else
                        <td>-</td>
                        @endif
                    </tr>
                    <tr>
                        <th >Section</th>
                        @if(!empty($sectionData))
                        <td>{{$sectionData->section}}</td>
                        @else
                        <td>-</td>
                        @endif
                    </tr>
                    <tr>
                        <th >Roll</th>
                        <td>{{$singleData->rollNumber}}</td>
                    </tr>
                    <tr>
                        <th >E-Mail</th>
                        <td>{{$singleData->mail}}</td>
                    </tr>
                    <tr>
                        <th >Phone</th>
                        <td>{{$singleData->phone}}</td>
                    </tr>
                    <tr>
                        <th >Image</th>
                        <td><img src="{{ asset('/public/upload/image/student/') }}/{{ $singleData->avatar }}" alt="jhjh" class="w-25"></td>
                    </tr>
                    
                </tbody>
            </table>
            <div class="mt-3">
                <a href="{{route('studentList')}}"class="btn btn-success btn-color btn-sm">Back</a>
            </div>
        </div>
    </div>
</div>

@endsection
@extends('includePage') 
@section('body')
    <div class="row col-md-6 mx-auto">
        <div class="card card-body  border  ">
            
        <div class="mb-3 text-center">
         <u class="h4">View Student Admission</u>
        </div>
            <table class=" table table-striped table-hover hadow-lg p-3 rounded" >
                <tbody class="">
                    <tr>
                        <th scope="col">Full Name</th>
                        <td>{{$singleData->fullName}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Session</th>
                        <td>{{$singleData->sessName}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Class</th>
                        <td>{{$singleData->className}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Section</th>
                        <td>{{$singleData->sectionName}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Roll</th>
                        <td>{{$singleData->rollNumber}}</td>
                    </tr>
                    <tr>
                        <th scope="col">E-Mail</th>
                        <td>{{$singleData->mail}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Phone</th>
                        <td>{{$singleData->phone}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Image</th>
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
@include('layouts.default.header')
<body>
<div class="boxed_wrapper">

<div class="innerHeading-wrap">
  <div class="container">
    <h1>{{ $title }}</h1>
  </div>
</div>
<div class="innerContent-wrap">
  <div class="container">
 <div class="col-lg-12 ">
      <table class="table table-bordered">
        <thead>
          <tr style="background-color:#242950; text-align: center;font-size: 10px;">
            {{-- <th scope="col">ID</th> --}}
            <th scope="col" style="color: #fff;">STUDENT NAME</th>
            <th scope="col" style="color: #fff;">CLASS</th>
            <th scope="col" style="color: #fff;">GOVT. ID</th>
            <th scope="col" style="color: #fff;">DETAILS</th>
          </tr>
        </thead>
        <tbody>
          @foreach($student_list as $row)
          <tr style="font-size: 11px;text-align: center;">
            {{-- <th scope="row">{{$row->id}}</th> --}}
            <td>{{$row->name}}</td>
            <td>{{$row->class}}</td>
             <td>{{$row->gov_id}}</td>
            <td><a href="{{ route('student.details', $row->id)}}" class="btn btn-info" style="background-color: #242950;border-color: #242950; padding: 4px 14px 4px 14px; font-size: 9px;">view</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
      </div>
      </div>
      </div>



@include('layouts.default.footer')
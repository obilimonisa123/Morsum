 @extends('layouts.master')
@section('content')
      <p>&nbsp</p>
  <table class="table table-striped table-sm" id="myTable" >

       <thead>
        <tr>
          <th>title</th>
          <th>date</th>
          <th>notes</th>
        </tr>
       </thead>
       <tbody>
        @foreach($bankholidays as $bankholiday)
        <tr>
          <td>{{$bankholiday->title}}</td>
          <td>{{$bankholiday->date}}</td>
          <td>{{$bankholiday->notes}}</td>
      </tr>
      @endforeach
       </tbody>
     </table>
@endsection

 
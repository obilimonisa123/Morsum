 @extends('layouts.master')
@section('content')
      <p>&nbsp</p>
   <a class="btn btn-primary" href="/bookshelf/create" role="button" >Create New Book</a>

 <h5 style="float:right;"><a href="/bankholidays" style="text-decoration: none;">Display Bankholidays</a></h5>
 
  <table class="table table-striped table-sm" id="myTable" style="width:200px;">

       <thead>
        <tr>
          <th>Book Name</th>
       
        </tr>
       </thead>
       <tbody>
        <tr>
       
      </tr>
       </tbody>
     </table>
 

 </body>
  <script>
$(function() {
    $.ajax({
       url: "/bookjson"
    })
  .done(function( data ) {
     $.each(data, function(i, item){ 
    $('#myTable tr:last').after('<tr><td>' + item.book_name + '</td></tr>');

  });
  });
});

 </script>
@endsection

 
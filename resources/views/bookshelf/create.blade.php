 @extends('layouts.master')
@section('content')
	<h4>Morsum - Add a Book</h4>
	<p>&nbsp</p>

	<div class="row">
	
		<div class="col-md-6">
			 
            <form  role="form" autocomplete="off"  method="post" action="/bookshelf">
                	@csrf
                	
                	<div class="form-group">
    			
      			<label for="question">Book Name:</label>
      			<input type="text" class="form-control" name="book_name"id="book_name" placeholder="Enter your book" >
   				 </div>
   				 
               <button  class="btn btn-primary">Submit</button>
                     
                </form>
          
         
           
		</div>

	</div>
@endsection
	


   



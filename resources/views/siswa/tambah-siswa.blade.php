@extends('layouts.app')

   @section('content')

      <h1>
      	daftar siswa
      </h1>
            <div class="row col-12"> 

            	    <div class="card-header col-12">
            	    	   
            	    	   <div class="card-header">
            	    	   	<h1>
            	    	   		list 
            	    	   	</h1>
            	    	   	
            	    	   	</div>

            	    	   	<div class="card-body">
            	    	   		<form action="{{route('create.siswa')}}" method="post">
                                          @csrf
            	    	   		<div class="form-group">
            	    	   			<label>masukkan nama</label>
            	    	   			<input type="text" class="form-control" name="nama">
            	    	    	       </div>

            	    	   		<div class="form-group">
            	    	   			<label>masukkan kelas</label>
            	    	   			<input type="text" class="form-control" name="kelas">
            	    	   		</div>
            	    	   
            	    	   		<div class="form-group">
            	    	   			<label>masukkan alamat</label>
            	    	   			<input type="text" class="form-control" name="alamat">
            	    	  		</div>
            	    	   		
            	    	   		<input type="submit" class="btn btn-primary">
            	           		
            	           </form>
            	       
            	   </div>
            </div>

   @endsection
      
@extends('layouts.app')

   @section('content')

      <h1>
      	tambah barang
      </h1>
            <div class="row col-12"> 

            	    <div class="card-header col-12">
            	    	   
            	    	   <div class="card-header">
            	    	   	<h1>
            	    	   		edit siswa
            	    	   	</h1>
            	    	   	
            	    	   	</div>

            	    	   	<div class="card-body">
            	    	   		<form action="{{route('edit.siswa', $siswa->id)}}" method="post">
                                          @csrf
                                          @method('put')
            	    	   		<div class="form-group">
            	    	   			<label>masukkan nama</label>
            	    	   			<input type="text" value="{{ $siswa->name }}" class="form-control" name="nama">
            	    	    	       </div>

            	    	   		<div class="form-group">
            	    	   			<label>masukkan kelas</label>
            	    	   			<input type="text" class="form-control" value="{{ $siswa->kelas }}" name="kelas">
            	    	   		</div>
            	    	   
            	    	   		<div class="form-group">
            	    	   			<label>masukkan alamat</label>
            	    	   			<input type="text" class="form-control" name="alamat" value="{{ $siswa->alamat }}">
            	    	  		</div>
            	    	   		
            	    	   		<input type="submit" class="btn btn-primary">
            	           		
            	           </form>
            	       
            	   </div>
            </div>

   @endsection
      
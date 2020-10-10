@extends('layouts.app')

@section('content')
    <h1>Contact us</h1>
    
   
   
    <form  method="post" action="{{ route('contact-submit') }}" >
        @csrf
     <div class="form-group">
         <label for="name">Name</label>
        <input type="text" class="form-control" name="name" id="name"  placeholder="Enter name">
    </div>
        
      <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
     </div>
      
      <div class="form-group">
         <label for="subject">Subject</label>
        <input type="text" class="form-control" name="subject" id="subject"  placeholder="Enter subject">
    </div>
    
    
    <div class="form-group">
    <label for="message">Message</label>
    <textarea class="form-control" name="message" id="message" rows="3"></textarea>
  </div>
      
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
@endsection

@section('sidebar')
@extends('main')

@section('title', '| Contact')

@section('content')
        <div class="row">
            <div class="col-md-12">
            <h1> Contact Us </h1>
            <hr>

            <form> 

                <div class="form-group">
                <label name="email"> Email: </label>
                <input id="email" name="email" class="form-control">
                </div>

                <div class="form-group">
                <label name="subject"> Subject: </label>
                <input id="subject" name="subject" class="form-control">
                </div

                <div class="form-group">
                <label name="message"> Message: </label>
                <textarea id="message" name="message" class="form-control" placeholder="Type your message..."></textarea>
                
                <input type="submit" style="margin-top:15px;" value="Send Message" class="btn btn-success">
                </div>

            </form>

         </div>
@endsection
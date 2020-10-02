@extends('main')

@section('title', '| InstaFeed')

@section('content')

        <div class="parallax"></div>
        <div class="content">
                <h1>Oops...</h1>
                <h4><p>I will just leave this parallax effect here</p></h4>
        </div>

        <!-- Style for parallax -->
                
        <style>
        
        .parallax {
                background-image: url("images/2.png");
                width: 80%;
                height: 600px;
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
        }

        .content {
                display: block;
                width: 100px;
                height: 700px;
        }

        .content h1 {
                font-size: 56px;
                margin-top: 80px;
        }


        </style>
  
        
@endsection
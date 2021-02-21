@extends('client.layouts.main')

@section('content')
    
        <div class="row py-5 ">
            <!-- <div class="home-overlay"></div> -->
            <div class="col-md-12 home">
                <div class="header">           
                    <h1>canoë | <span style="color:rgb(76, 161, 175)">kayak</span> club</h1>
                    <h3>chalon sur saône</h3>
                </div>
            </div>
        </div>
        <svg id="blob_home" viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg" width="100%">
            <defs>
                <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
                <stop offset="0%" style="stop-color: rgb(76, 161, 175);"></stop>
                <stop offset="100%" style="stop-color: rgb(196, 224, 229);"></stop>
                </linearGradient>
            </defs>
            <path id="blob" d="M424.5,288.5Q423,327,417,378Q411,429,368.5,456Q326,483,279,454Q232,425,196,415.5Q160,406,120,389.5Q80,373,49.5,336Q19,299,45.5,255.5Q72,212,78,170.5Q84,129,111.5,93.5Q139,58,184,53.5Q229,49,267,65Q305,81,344.5,91Q384,101,422,129Q460,157,443,203.5Q426,250,424.5,288.5Z" fill="url(#gradient)"></path>
        </svg>
    
@endsection

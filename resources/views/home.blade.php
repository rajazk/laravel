@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-3 p-5">
         <!--    <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div> -->
            <img src="https://scontent-sea1-1.cdninstagram.com/vp/6c21555d193def8a08d0903dca42a7b8/5DB47138/t51.2885-19/s150x150/22709172_932712323559405_7810049005848625152_n.jpg?_nc_ht=scontent-sea1-1.cdninstagram.com" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{$user->username}}</h1></div>            
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">freeCodeCamp.org</div>
            <div>We're a global community of millions of people learning to code together. We're an open source, donor-supported, 501(c)(3) nonprofit.</div>
            <div><a href="#">www.freecodecamp.org</div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="https://scontent-sea1-1.cdninstagram.com/vp/6ca2b10b96e0725c72c8b9272dc627fc/5DCE92B3/t51.2885-15/sh0.08/e35/c0.54.847.847a/s640x640/66036540_355410028689526_4219555080293749431_n.jpg?_nc_ht=scontent-sea1-1.cdninstagram.com" class="w-100">
        </div> 
        <div class="col-4">
            <img src="https://scontent-sea1-1.cdninstagram.com/vp/f7aa8c7d64ec2112b5d427afcfd440b9/5DE5F2F9/t51.2885-15/sh0.08/e35/s640x640/67076065_2005791976189341_5278548834495028647_n.jpg?_nc_ht=scontent-sea1-1.cdninstagram.com" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://scontent-sea1-1.cdninstagram.com/vp/7ba5481308af277a2c2b48412717622a/5DCE789B/t51.2885-15/sh0.08/e35/c3.0.743.743a/s640x640/66096029_362133041137173_4364216796366985117_n.jpg?_nc_ht=scontent-sea1-1.cdninstagram.com" class="w-100">
        </div>        
    </div>
</div>
@endsection

@extends('layouts.master',['title'=>'Welcome to my personal freelance website'])

@section('content')
        {{-- Home Section  --}}
        <div class="header demo">
         <div class="content">
            <div id="large-header" class="large-header">
               <canvas id="demo-canvas"></canvas>
               <h1 class="main-title"><span class="thin">Explore</span> Space</h1>
            </div>
         </div>
      </div>
          {{-- ./Home Section  --}}
            {{-- About Section  --}}
         <div class="section-about">
            <div class="container">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <h2 class="text-center">About me</h2>
              </div>
            </div>
         </div>
          {{-- ./about Section  --}}
           {{-- Skills Section  --}}
         <div class="section-skills">
            <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <h2 class="text-center">my skils</h2>
                </div> 
            </div>
         </div>
          {{-- ./Skills Section  --}}
           {{-- Work Section  --}}
           <div class="section-work">
            <div class="container">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2 class="text-center"> my works</h2>
              </div>
                
            </div>
               
           </div>
           {{-- ./work section --}}

           <div class="section-hire-me">
                <div class="container">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2 class="text-center"> Hire me?</h2>
                  </div>
                </div>
               
           </div>
@endsection

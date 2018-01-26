@extends('layouts.master',['title'=>'Welcome to my personal freelance website'])

@section('content')
        {{-- Home Section  --}}
         <div  class="masthead text-center d-flex">
            <div class="container">
               <div class="row">
                 <div class="col-lg-12">
                     <h1 class=" text-uppercase "> yous ask ! we build</h1>
                 </div>
             </div> 
            </div>
         </div>
          {{-- ./Home Section  --}}
           {{-- Skills Section  --}}
         <div class="section-skills">
            <div class="container">
                 <h1>my skils</h1>
            </div>
         </div>
          {{-- ./Skills Section  --}}
           {{-- Work Section  --}}
           <div class="section-skills">
            <div class="container">
                <h1> my works</h1>
            </div>
               
           </div>
           {{-- ./work section --}}

           <div class="section-hire-me">
                <div class="container">
                    <h2>Why you should Hire me?</h2>
                </div>
               
           </div>
@endsection

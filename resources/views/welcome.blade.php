@extends('layouts.master',['title'=>'Welcome to my personal freelance website'])

@section('content')
        {{-- Home Section  --}}
        <div class="header demo">
         <div class="content">
            <div id="large-header" class="large-header">
               <canvas id="demo-canvas"></canvas>
               <div class="main-title">
                   <h1 class="text-header" ><span class="thin">you ask |</span> we build... </h1>
                     <h2 class="text-list ">
                     <span>Junior Consultant </span>
                          <span><i class="fa fa-angle-right"></i></span>
                            <span>SI</span> 
                            <span><i class="fa fa-angle-right"></i></span>
                             <span> Full stack developper</span>
                   </h2>
               </div>
            </div>
         </div>
      </div>
          {{-- ./Home Section  --}}
            {{-- About Section  --}}
         <div class="section-about">
            <div class="container">
              <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <div class="about-photo text-center">

                  <a data-flickr-embed="true"  href="https://www.flickr.com/photos/159110628@N03/39972987151/in/album-72157692047151074/" title="serge-brunet-torrilus-fullstack-developper"><img src="https://www.w3schools.com/w3css/img_lights.jpg"  alt="serge-brunet-torrilus-fullstack-developper"></a>
                 </div>
                 <div class="about-text">
                      <p class="text-justify">
                        I'm Serge Brunet Torrilus, an Information System, web and database developpment freelancer based in port-au-prince, Haiti.i'm interesting with all the concepts that will take major role in our future like : BIG DATA, SMART CITY, IOT, IA. when im not coding, our learning new things , I pass my time between GYM, MUSIC or TV SHOW
                      </p>
                 </div>
              </div>
              </div>
            </div>
         </div>
          {{-- ./about Section  --}}
           {{-- Skills Section  --}}
         <div class="section-skills">
            <div class="container">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <h2 class="text-center">my skils</h2>
                  <div>
                      <p class="justify">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                      </p>
                  </div>
                </div> 
              </div>
            </div>
         </div>
          {{-- ./Skills Section  --}}
           {{-- Work Section  --}}
           <div class="section-work">
            <div class="container">
                <h2 class="text-center"> Happy Costumers</h2>
              <div class="row">
                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                         <figure class="imghvr-push-up">
                          <img src="http://www.monoingroup.com/webroot/images/logo_monoin_mini.png" alt="">
                           <figcaption>
                               <h3 class="ih-fade-down ih-delay-sm ">Oscar Wilde</h3>
                                  <p class="ih-zoom-in ih-delay-md">
                                    <i>"I have the simplest tastes, I am always satisfied with the best."</i>
                                  </p>
                                  <a class="ih-fade-up ih-delay-lg button" href="#">Read More</a>
                            </figcaption>
                            <a href="#!"></a>
                         </figure>
                      </div>
                  </div>
              </div>
            </div>
               
           </div>
           {{-- ./work section --}}

           <div class="section-hire-me">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2 class="text-center"> Hire me?</h2>
                    <div >
                      <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.   </p>
                      
                    </div>
                  </div>
                  </div>
                </div>
               
           </div>
@endsection

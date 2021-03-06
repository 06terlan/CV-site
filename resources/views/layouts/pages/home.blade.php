@extends('layouts.master')

@section('content')

<!-- START: PAGE CONTENT -->
 <section id="about" class="section section-about">
   <div class="animate-up animated">
     <div class="section-box">

       <div class="profile">
         <div class="row">
           <div class="col-xs-5">
             <div class="profile-photo"><img src="{{ $user->photo() }}" alt="Robert Smith"></div>
           </div>
           <div class="col-xs-7">
             <div class="profile-info">
               <div class="profile-preword"><span>Hello</span></div>
               <h1 class="profile-title"><span>I'm</span> {{ $user->fullname() }}</h1>
               <h2 class="profile-position">{{ $user->job }}</h2></div>
                <ul class="profile-list">
                    <li class="clearfix">
                        <strong class="title">Age</strong>
                        <span class="cont">{{ $user->birthday == "" ? "-" : App\Library\Date::diff(App\Library\Date::d(null,'Y-m-d'),$user->birthday,'Y') }}</span>
                    </li>
                    <li class="clearfix">
                        <strong class="title">Address</strong>
                        <span class="cont">{{ $user->address }}</span>
                    </li>
                    <li class="clearfix">
                        <strong class="title">E-mail</strong>
                        <span class="cont"><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></span>
                    </li>
                    <li class="clearfix">
                        <strong class="title">Phone</strong>
                        <span class="cont"><a href="tel:+12562548456">{{ $user->phone }}</a></span>
                    </li>
                    <li class="clearfix">
                        <strong class="title">Date of birth</strong>
                        <span class="cont">{{ $user->birthday == "" ? "-" : App\Library\Date::d($user->birthday,'F d,Y') }}</span>
                    </li>
                    <!-- <li class="clearfix">
                        <strong class="title"><span class="button">On Vacation</span></strong>
                        <span class="cont"><i class="rsicon rsicon-calendar"></i>till March 25, 2016</span>
                    </li> -->
                </ul>
           </div>
         </div>
       </div>

       <div class="profile-social">
         <ul class="social">
           <li><a class="ripple-centered" href="https://www.facebook.com/terlan.abdullayev.16" target="_blank"><i class="rsicon rsicon-facebook"></i></a></li>
           <li><a class="ripple-centered"><i class="rsicon rsicon-twitter"></i></a></li>
           <li><a class="ripple-centered" href="https://www.linkedin.com/in/terlan-abdullayev-45b76783/" target="_blank"><i class="rsicon rsicon-linkedin"></i></a></li>
           <li><a class="ripple-centered"><i class="rsicon rsicon-google-plus"></i></a></li>
           <li><a class="ripple-centered"><i class="rsicon rsicon-dribbble"></i></a></li>
           <li><a class="ripple-centered" href="https://www.instagram.com/06terlan/" target="_blank"><i class="rsicon rsicon-instagram"></i></a></li>
         </ul>
       </div>
     </div>

      <div class="section-txt-btn">
          <p><a class="btn btn-lg btn-border ripple" target="_blank" href="{{ url('cv.pdf') }}">Download Resume</a></p>
          <p>
              {!! $about !!}
          </p>
      </div>
   </div>  
 </section><!-- #about -->
                             
 <section id="skills" class="section section-skills">
   <div class="animate-up animated">
     <h2 class="section-title">Professional  Skills</h2>
     <div class="section-box">
        @php ( $count = 0 )
        @foreach ( $skills as $skill )
            @php ( $count++ )
            @if ( $count % 2 == 1 )
                <div class="row">
                 <div class="col-sm-6">
                   <div class="progress-bar animate-right">
                     <div class="bar-data">
                       <span class="bar-title">{{ $skill->skill }}</span>
                       <span class="bar-value"></span>
                     </div>
                     <div class="bar-line">
                       <span class="bar-fill" data-width="{{ $skill->percent }}%"></span>
                     </div>
                   </div>
                 </div>
            @else
                <div class="col-sm-6">
                   <div class="progress-bar animate-left">
                     <div class="bar-data">
                       <span class="bar-title">{{ $skill->skill }}</span>
                       <span class="bar-value"></span>
                     </div>
                     <div class="bar-line">
                       <span class="bar-fill" data-width="{{ $skill->percent }}%"></span>
                     </div>
                   </div>
                 </div>
               </div>
            @endif
        @endforeach

        @if( $count % 2 == 1 )
            </div>
        @endif
     </div>
   </div>  
 </section>

<section id="skills" class="section section-skills">
   <div class="animate-up animated">
     <h2 class="section-title">General skills</h2>
     <div class="section-box">
        @php ( $count = 0 )
        @foreach ( $generalSkills as $skill )
            @php ( $count++ )
            @if ( $count % 2 == 1 )
                <div class="row">
                 <div class="col-sm-6">
                   <div class="progress-bar animate-right">
                     <div class="bar-data">
                       <span class="bar-title">{{ $skill->skill }}</span>
                       <span class="bar-value"></span>
                     </div>
                     <div class="bar-line">
                       <span class="bar-fill" data-width="{{ $skill->percent }}%"></span>
                     </div>
                   </div>
                 </div>
            @else
                <div class="col-sm-6">
                   <div class="progress-bar animate-left">
                     <div class="bar-data">
                       <span class="bar-title">{{ $skill->skill }}</span>
                       <span class="bar-value"></span>
                     </div>
                     <div class="bar-line">
                       <span class="bar-fill" data-width="{{ $skill->percent }}%"></span>
                     </div>
                   </div>
                 </div>
               </div>
            @endif
        @endforeach

        @if( $count % 2 == 1 )
            </div>
        @endif
     </div>
   </div>  
 </section>
 <!-- #skills -->
         
 <section id="portfolio" class="section section-portfolio">
   <div class="animate-up">
     <h2 class="section-title">Portfolio</h2>

     <div class="filter">
       <div class="filter-inner">
         <div class="filter-btn-group">
           <button data-filter="*" class="active">All</button>
           <button data-filter=".photography">Photography</button>
           <button data-filter=".nature">Nature</button>
         </div>
         <div class="filter-bar">
           <span class="filter-bar-line" style="left: 0px; width: 35px;"></span>
         </div>
       </div>
     </div>

     <div class="grid" style="position: relative; height: 597.25px;">
       <div class="grid-sizer"></div>
       
       <div class="grid-item size22 photography" style="position: absolute; left: 0%; top: 0px;">
         <div class="grid-box">
           <figure class="portfolio-figure">
             <img src="./asset/portfolio-thumb-05-610x600.jpg" alt="">
             <figcaption class="portfolio-caption">
               <div class="portfolio-caption-inner">
                 <h3 class="portfolio-title">Street Photography</h3>
                 <h4 class="portfolio-cat">Photography</h4>

                 <div class="btn-group">
                   <a class="btn-link" href="http://bit.ly/1YtB8he" target="_blank"><i class="rsicon rsicon-link"></i></a>
                   <a class="portfolioFancybox btn-zoom" data-fancybox-group="portfolioFancybox1" href="#portfolio1-inline1"><i class="rsicon rsicon-eye"></i></a>
                   <a class="portfolioFancybox hidden" data-fancybox-group="portfolioFancybox1" href="#portfolio1-inline2"></a>
                   <a class="portfolioFancybox hidden" data-fancybox-group="portfolioFancybox1" href="#portfolio1-inline3"></a>
                 </div>
               </div>
             </figcaption>
           </figure>

           <!-- Start: Portfolio Inline Boxes -->
           <div id="portfolio1-inline1" class="fancybox-inline-box">
                                 <div class="inline-embed" data-embed-type="image" data-embed-url="img/uploads/portfolio/portfolio-thumb-05-large.jpg"></div>
             <div class="inline-cont">
               <h2 class="inline-title">Street photography is photography that features the chance encounters and random accidents within public places.</h2>
               <div class="inline-text">
                 <p>Street photography does not necessitate the presence of a street or even the urban environment. Though people usually feature directly, street photography might be absent of people and can be an object or environment where the image projects a decidedly human character in facsimile or aesthetic.</p>
               </div>
             </div>
           </div>                                
           
           <div id="portfolio1-inline2" class="fancybox-inline-box">
                                 <div class="inline-embed" data-embed-type="image" data-embed-url="img/uploads/portfolio/portfolio-thumb-01-large.jpg"></div>
             <div class="inline-cont">
               <div class="inline-text">
                 <h2 class="inline-title">Framing and timing</h2>
                 <p>Framing and timing can be key aspects of the craft with the aim of some street photography being to create images at a decisive or poignant moment. Street photography can focus on emotions displayed, thereby also recording people's history from an emotional point of view.</p>
               </div>
             </div>
           </div>
           
           <div id="portfolio1-inline3" class="fancybox-inline-box">
                                 <div class="inline-embed" data-embed-type="iframe" data-embed-url="https://player.vimeo.com/video/118244244"></div>
             <div class="inline-cont">
               <div class="inline-text">
                 <h2 class="inline-title">A Look Into Documenting Street Fashion Photography</h2>
                 <p>HB Nam is an internationally known street fashion photographer. In this Leica Camera Portrait, Nam explains how he started in photography and what photography means to him. For Nam, it's about documenting what's around him and the concentration required to achieve a good shot.</p>
               </div>
             </div>
           </div>
           <!-- End: Portfolio Inline Boxes -->
         </div>
       </div><!-- .grid-item -->     
     
       <div class="grid-item size11 bridge" style="position: absolute; left: 66.5957%; top: 0px;">
         <div class="grid-box">
           <figure class="portfolio-figure">
             <img src="./asset/portfolio-thumb-11-289x281.jpg" alt="">
             <figcaption class="portfolio-caption">
               <div class="portfolio-caption-inner">
                 <h3 class="portfolio-title">Suspension Bridge</h3>
                 <h4 class="portfolio-cat">Bridge</h4>

                 <div class="btn-group">
                   <a class="btn-link" href="http://bit.ly/1YtB8he" target="_blank"><i class="rsicon rsicon-link"></i></a>
                   <a class="portfolioFancybox btn-zoom" data-fancybox-group="portfolioFancybox2" href="#portfolio2-inline1"><i class="rsicon rsicon-eye"></i></a>
                 </div>
               </div>
             </figcaption>
           </figure>
           
           <!-- Start: Portfolio Inline Boxes -->
           <div id="portfolio2-inline1" class="fancybox-inline-box">
             <div class="inline-cont">
               <h2 class="inline-title">Suspension Bridges - Design Technology</h2>
               <div class="inline-text">
                 <p>Suspension bridges in their simplest form were originally made from rope and wood.
                 Modern suspension bridges use a box section roadway supported by high tensile strength cables. 
                 In the early nineteenth century, suspension bridges used iron chains for cables. The high tensile cables used in most modern suspension 
                 bridges were introduced in the late nineteenth century.<br>
                 Today, the cables are made of thousands of individual steel wires bound tightly together. Steel, which is very strong under tension, is 
                 an ideal material for cables; a single steel wire, only 0.1 inch thick, can support over half a ton without breaking.</p>
                 <p>Light, and strong, suspension bridges can span distances from 2,000 to 7,000 feet far longer than any other kind of bridge. They are 
                 ideal for covering busy waterways.</p>
                 <p>With any bridge project the choice of materials and form usually comes down to cost.
                 Suspension bridges tend to be the most expensive to build. A suspension bridge suspends the roadway from huge main cables, which extend 
                 from one end of the bridge to the other. These cables rest on top of high towers and have to be securely anchored into the bank at either 
                 end of the bridge. The towers enable the main cables to be draped over long distances. Most of the weight or load of the bridge is 
                 transferred by the cables to the anchorage systems. These are imbedded in either solid rock or huge concrete blocks. Inside the anchorages, 
                 the cables are spread over a large area to evenly distribute the load and to prevent the cables from breaking free.</p>
                 <p>The Arthashastra of Kautilya mentions the construction of dams and bridges.A Mauryan bridge near Girnar was surveyed by James Princep. 
                 The bridge was swept away during a flood, and later repaired by Puspagupta, the chief architect of emperor Chandragupta I. The bridge 
                 also fell under the care of the Yavana Tushaspa, and the Satrap Rudra Daman. The use of stronger bridges using plaited bamboo and iron 
                 chain was visible in India by about the 4th century. A number of bridges, both for military and commercial purposes, were constructed by 
                 the Mughal administration in India.</p>
               </div>
             </div>
           </div>
           <!-- End: Portfolio Inline Boxes -->
         </div>
       </div><!-- .grid-item -->
       
       <div class="grid-item size11 nature photography" style="position: absolute; left: 66.5957%; top: 298px;">
         <div class="grid-box">
           <figure class="portfolio-figure">
             <img src="./asset/portfolio-thumb-08-289x281.jpg" alt="">
             <figcaption class="portfolio-caption">
               <div class="portfolio-caption-inner">
                 <h3 class="portfolio-title">Rocky Mountains</h3>
                 <h4 class="portfolio-cat">Nature, Photography</h4>

                 <div class="btn-group">
                   <a class="btn-link" href="http://bit.ly/1YtB8he" target="_blank"><i class="rsicon rsicon-link"></i></a>
                   <a class="portfolioFancybox btn-zoom" data-fancybox-group="portfolioFancybox3" href="#portfolio3-inline1"><i class="rsicon rsicon-eye"></i></a>
                   <a class="portfolioFancybox hidden" data-fancybox-group="portfolioFancybox3" href="#portfolio3-inline2"></a>
                   <a class="portfolioFancybox hidden" data-fancybox-group="portfolioFancybox3" href="#portfolio3-inline3"></a>
                 </div>
               </div>
             </figcaption>
           </figure>

           <!-- Start: Portfolio Inline Boxes -->
           <div id="portfolio3-inline1" class="fancybox-inline-box">
                                 <div class="inline-embed" data-embed-type="image" data-embed-url="img/uploads/portfolio/portfolio-thumb-08-large.jpg"></div>
           </div>

           <div id="portfolio3-inline2" class="fancybox-inline-box">
                                 <div class="inline-embed" data-embed-type="image" data-embed-url="img/uploads/portfolio/portfolio-thumb-04-large.jpg"></div>
           </div>
           
           <div id="portfolio3-inline3" class="fancybox-inline-box">
                                 <div class="inline-embed" data-embed-type="image" data-embed-url="img/uploads/portfolio/portfolio-thumb-02-large.jpg"></div>
           </div>
           <!-- End: Portfolio Inline Boxes -->
         </div>
       </div><!-- .grid-item -->
     </div>

     <div class="grid-more">
       <span class="ajax-loader"></span>
       <button class="btn btn-border ripple"><i class="rsicon rsicon-add"></i></button>
     </div>
   </div>  
 </section><!-- #portfolio -->
 
 <section id="experience" class="section section-experience">
   <div class="animate-up">
     <h2 class="section-title">Work Experience</h2>

     <div class="timeline">
       <div class="timeline-bar" style="top: 80px; height: 666px;"></div>
       <div class="timeline-inner clearfix" style="height: 999px;">
                         <div class="timeline-box timeline-box-left" style="position: absolute; left: 0px; top: 0px;">
                             <span class="dot"></span>
                             <div class="timeline-box-inner animate-right">
                                 <span class="arrow"></span>
                                 <div class="date">2014 - 2016</div>
                                 <h3>PINEAPPLE</h3>
                                 <h4>Full Stack developer</h4>
                                 <p>Worked as part of a multi-disciplinary team, carrying out ad-hoc tasks as requested by the IT Manager. Had a specific brief to ensure the websites build for customer’s precisely matched their requirements.developers and marketers.</p>
                             </div>
                         </div>

                         <div class="timeline-box timeline-box-right" style="position: absolute; right: 0px; top: 70px;">
                             <span class="dot"></span>
                             <div class="timeline-box-inner animate-left">
                                 <span class="arrow"></span>
                                 <div class="date">2011 - 2014</div>
                                 <h3>MACROSOOFT</h3>
                                 <h4>Web Developer</h4>
                                 <p>I was responsible for working on a range of projects, designing appealing websites and interacting on a daily basis with graphic designers, back-end developers and marketers.</p>
                             </div>
                         </div>

                         <div class="timeline-box timeline-box-left" style="position: absolute; left: 0px; top: 334px;">
                             <span class="dot"></span>
                             <div class="timeline-box-inner animate-right">
                                 <span class="arrow"></span>
                                 <div class="date">2003 - 2006</div>
                                 <h3>JOOJLE</h3>
                                 <h4>Systems Analyst / Web Developer</h4>
                                 <p>Rebuilt and enhanced existing ASP B2C site with ASP.NET 2.0 Framework and tools. Technology consists of ASP.NET 2.0 (C#), IIS, Microsoft SQL Server 2005, Stored Procedures &amp; PayPal Instant Payment Notification.</p>
                             </div>
                         </div>

                         <div class="timeline-box timeline-box-right" style="position: absolute; right: 0px; top: 380px;">
                             <span class="dot"></span>
                             <div class="timeline-box-inner animate-left">
                                 <span class="arrow"></span>
                                 <div class="date">2004 - 2008</div>
                                 <h3>IBBBM</h3>
                                 <h4>Webmaster / Web Developer</h4>
                                 <p>Developed, managed, operated and promoted an Internet business.Handled customer support issues.Planned and managed business finances.</p>
                             </div>
                         </div>

         <div class="timeline-box timeline-box-left" style="position: absolute; left: 0px; top: 668px;">
           <span class="dot"></span>
           <div class="timeline-box-inner animate-right">
             <span class="arrow"></span>
             <div class="date">2003 - 2004</div>
             <h3>HEADBOOK</h3>
             <h4>Intern</h4>
             <p>This was beginning of my career. Developed, managed, operated and promoted an Internet business.Handled customer support issues.</p>
           </div>
         </div>
         
         <div class="timeline-box timeline-box-right" style="position: absolute; right: 0px; top: 666px;">
                             <span class="dot"></span>
                             <div class="timeline-box-inner animate-left">
             <span class="arrow"></span>
             <div class="date">2000 - 2003</div>
             <h3>UBEAR</h3>
             <h4>Taxi Driver</h4>
             <p>Driving from point A to point B and if necessary to point C and sometimes even to point R and point S. I was known as experienced driver. Once my passenger who was a web developer told me about his job and I have made my decision at that moment to became a developer.</p>
           </div>
         </div>
       </div>
     </div>
   </div>  
 </section><!-- #experience -->
 
 <section id="education" class="section section-education">
   <div class="animate-up">
     <h2 class="section-title">Education</h2>
     <div class="timeline">
       <div class="timeline-bar" style="top: 80px; height: 418px;"></div>
       <div class="timeline-inner clearfix" style="height: 590px;">

                         <div class="timeline-box timeline-box-compact timeline-box-left" style="position: absolute; left: 0px; top: 0px;">
                             <span class="dot"></span>

                             <div class="timeline-box-inner animate-right">
                                 <span class="arrow"></span>
                                 <div class="date"><span>2012 - 2014</span></div>
                                 <h3>Master of Information Technology</h3>
                                 <h4>MIT&amp;T</h4>
                             </div>
                         </div>

                         <div class="timeline-box timeline-box-compact timeline-box-right" style="position: absolute; right: 0px; top: 70px;">
                             <span class="dot"></span>

                             <div class="timeline-box-inner animate-left">
                                 <span class="arrow"></span>
                                 <div class="date"><span>2008 - 2012</span></div>
                                 <h3>Bachelor Computer Engineering</h3>
                                 <h4>Harwarg Universitey</h4>
                             </div>
                         </div>

                         <div class="timeline-box timeline-box-compact timeline-box-left" style="position: absolute; left: 0px; top: 197px;">
                             <span class="dot"></span>

                             <div class="timeline-box-inner animate-right">
                                 <span class="arrow"></span>
                                 <div class="date"><span>2007 - 2008</span></div>
                                 <h3>Certificate for courses of Computer Science</h3>
                                 <h4>Stanfoorb Universitey</h4>
                             </div>
                         </div>

                         <div class="timeline-box timeline-box-compact timeline-box-right" style="position: absolute; right: 0px; top: 267px;">
                             <span class="dot"></span>

                             <div class="timeline-box-inner animate-left">
                                 <span class="arrow"></span>
                                 <div class="date"><span>2007 - 2008</span></div>
                                 <h3>1 week Courses of Information Systems</h3>
                                 <h4>Oxforz Universitey</h4>
                             </div>
                         </div>
       
         <div class="timeline-box timeline-box-compact timeline-box-left" style="position: absolute; left: 0px; top: 418px;">
           <span class="dot"></span>

           <div class="timeline-box-inner animate-right">
             <span class="arrow"></span>
             <div class="date"><span>2006 - 2007</span></div>
             <h3>Software Engineering</h3>
             <h4>Sordonne University</h4>
           </div>
         </div>
       </div>
     </div>
   </div>  
 </section><!-- #education -->
         
 <section id="references" class="section section-references">
   <div class="animate-up animated">
     <h2 class="section-title">References</h2>
     <div class="section-box">
       <div class="bx-wrapper" style="max-width: 100%; margin: 0px auto;"><div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 282px;"><ul class="ref-slider" style="width: 515%; position: relative; transition-duration: 0s; transform: translate3d(-810px, 0px, 0px);"><li style="float: left; list-style: none; position: relative; width: 810px;" class="bx-clone">
           <div class="ref-box">
             <div class="person-speech">
               <p>I have known Robert Smith for 10 years as web developer. I can confirm that he is a man of great integrity, is extremely dedicated 
               to his family and work, and is entirely peace-loving.</p>
             </div>
             <div class="person-info clearfix">
               <img class="person-img" src="./asset/rs-avatar-60x60.jpg" alt="Headshot">
               <div class="person-name-title">
                 <span class="person-name">Alexander Jokovich</span>
                 <span class="person-title">Modern LLC , HR</span>
               </div>
             </div>
           </div>
         </li>
         <li style="float: left; list-style: none; position: relative; width: 810px;">
           <div class="ref-box">
             <div class="person-speech">
               <p>I confirm that I have dealt with New Company Ltd since 1998. Their work has been a major factor in our 
               website's success, helping it to become one of the most visited resources of its kind on the Internet.</p>
             </div>
             <div class="person-info clearfix">
               <img class="person-img" src="./asset/rs-avatar-60x60.jpg" alt="Headshot">
               <div class="person-name-title">
                 <span class="person-name">Alexander Jokovich</span>
                 <span class="person-title">Modern LLC , HR</span>
               </div>
             </div>
           </div>
         </li>
         <li style="float: left; list-style: none; position: relative; width: 810px;">
           <div class="ref-box">
             <div class="person-speech">
               <p>I confirm that New Company Ltd has been a customer of ours since 1998, during which time they have always made payments reliably, 
               in full and on time.</p>
             </div>
             <div class="person-info clearfix">
               <img class="person-img" src="./asset/rs-avatar-60x60.jpg" alt="Headshot">
               <div class="person-name-title">
                 <span class="person-name">Alexander Jokovich</span>
                 <span class="person-title">Modern LLC , HR</span>
               </div>
             </div>
           </div>
         </li>
         <li style="float: left; list-style: none; position: relative; width: 810px;">
           <div class="ref-box">
             <div class="person-speech">
               <p>I have known Robert Smith for 10 years as web developer. I can confirm that he is a man of great integrity, is extremely dedicated 
               to his family and work, and is entirely peace-loving.</p>
             </div>
             <div class="person-info clearfix">
               <img class="person-img" src="./asset/rs-avatar-60x60.jpg" alt="Headshot">
               <div class="person-name-title">
                 <span class="person-name">Alexander Jokovich</span>
                 <span class="person-title">Modern LLC , HR</span>
               </div>
             </div>
           </div>
         </li>
       <li style="float: left; list-style: none; position: relative; width: 810px;" class="bx-clone">
           <div class="ref-box">
             <div class="person-speech">
               <p>I confirm that I have dealt with New Company Ltd since 1998. Their work has been a major factor in our 
               website's success, helping it to become one of the most visited resources of its kind on the Internet.</p>
             </div>
             <div class="person-info clearfix">
               <img class="person-img" src="./asset/rs-avatar-60x60.jpg" alt="Headshot">
               <div class="person-name-title">
                 <span class="person-name">Alexander Jokovich</span>
                 <span class="person-title">Modern LLC , HR</span>
               </div>
             </div>
           </div>
         </li></ul></div><div class="bx-controls"></div></div>
       <div class="ref-slider-nav">
         <span id="ref-slider-prev" class="slider-prev"><a class="bx-next" href=""><i class="rsicon rsicon-chevron_right"></i></a></span>
         <span id="ref-slider-next" class="slider-next"><a class="bx-prev" href=""><i class="rsicon rsicon-chevron_left"></i></a></span>
       </div>
     </div>
   </div>  
 </section>
         <!-- #references -->
 
 <section id="blog" class="section section-blog">
   <div class="animate-up animated">
     <h2 class="section-title">From The Blog</h2>

                 <div class="blog-grid" style="position: relative; height: 482.719px;">
                     <div class="grid-sizer"></div>
                     <div class="grid-item" style="position: absolute; left: 0%; top: 0px;">
                         <article class="post-box">
                             <div class="post-media">
                                 <div class="post-image">
                                     <a href="http://rscard.px-lab.com/single.html"><img src="./asset/thumb-449x286-1.jpg" alt=""> </a>
                                 </div>
                             </div>

                             <div class="post-data">
                                 <time class="post-datetime" datetime="2015-03-13T07:44:01+00:00">
                                     <span class="day">03</span>
                                     <span class="month">MAY</span>
                                 </time>

                                 <div class="post-tag">
                                     <a href="">#Photo</a>
                                     <a href="">#Architect</a>
                                 </div>

                                 <h3 class="post-title">
                                     <a href="http://rscard.px-lab.com/single-image.html">Image Post</a>
                                 </h3>

                                 <div class="post-info">
                                     <a href=""><i class="rsicon rsicon-user"></i>by admin</a>
                                     <a href=""><i class="rsicon rsicon-comments"></i>56</a>
                                 </div>
                             </div>
                         </article>
                     </div>

                     <div class="grid-item" style="position: absolute; left: 50%; top: 0px;">
                         <article class="post-box">
                             <div class="post-media">
                                 <div class="post-image">
                                     <a href="http://rscard.px-lab.com/single-vimeo.html">
                                         <img src="./asset/thumb-449x286-5.jpg" alt="">
                                         <span class="post-type-icon"><i class="rsicon rsicon-play"></i></span>
                                     </a>
                                 </div>
                             </div>

           <div class="post-data">
             <time class="post-datetime" datetime="2015-03-13T07:44:01+00:00">
               <span class="day">03</span>
               <span class="month">MAY</span>
             </time>

             <div class="post-tag">
               <a href="">#Photo</a>
               <a href="">#Architect</a>
             </div>

             <h3 class="post-title">
               <a href="http://rscard.px-lab.com/single-vimeo.html">Vimeo Video Post</a>
             </h3>

             <div class="post-info">
               <a href=""><i class="rsicon rsicon-user"></i>by admin</a>
               <a href=""><i class="rsicon rsicon-comments"></i>56</a>
             </div>
           </div>
         </article>
       </div>
     </div>
   </div>  
 </section><!-- #blog -->
 
 <section id="text-section" class="section section-text">
   <div class="animate-up animated">
     <h2 class="section-title">Text Section</h2>
     <div class="section-box">
       <p>Hello! I’m Robert Smith and this is custom editor section. You can add here any text or "Strikethrough" text  and even you can add bulleted or numbered text and even you will be able to add blockquot text. You can align this text to left/right/center.

       One of the most interesting options is to divide this section to "One half" "One Third" and "One Fourth".

       You can use this for Honors or Achievments or Awards sections. You can insert images and photos right in this editor!</p>
     </div>
   </div>
 </section><!-- #text-section -->
 
 <section id="interests" class="section section-interests">
   <div class="animate-up animated">
     <h2 class="section-title">My Interests</h2>

     <div class="section-box">
       <p>I have a keen interest in photography. I was vice-president of the photography club during my time at university, 
       and during this period I organised a number of very successful exhibitions and events both on and off campus.           
       <br>I also play the piano to grade 8 standard.</p>

       <ul class="interests-list">
         <li>
           <i class="map-icon map-icon-bicycling"></i>
           <span style="left: 7px;">Bicycling</span>
         </li>
         <li>
           <i class="map-icon map-icon-movie-theater"></i>
           <span style="left: -6.5px;">Watch Movies</span>
         </li>
         <li>
           <i class="map-icon map-icon-ice-skating"></i>
           <span style="left: 10.5px;">Skating</span>
         </li>
         <li>
           <i class="map-icon map-icon-shopping-mall"></i>
           <span style="left: 5px;">Shopping</span>
         </li>
         <li>
           <i class="map-icon map-icon-tennis"></i>
           <span style="left: -7.5px;">Playing Tennis</span>
         </li>
         <li>
           <i class="map-icon map-icon-bowling-alley"></i>
           <span style="left: -11px;">Playing Bowling</span>
         </li>
         <li>
           <i class="map-icon map-icon-swimming"></i>
           <span style="left: 2.5px;">Swimming</span>
         </li>
       </ul>
     </div>
   </div>  
 </section><!-- #interests -->
 
 <section id="calendar" class="section section-calendar">
   <div class="animate-up animated">
     <h2 class="section-title">Availability Calendar</h2>

     <div class="calendar-busy" data-weekstart="monday">
       <div class="calendar-today">
         <div class="valign-outer">
           <div class="valign-middle">
             <div class="valign-inner">
               <div class="date">
                 <span class="day">7</span>
                 <span class="month">Jun</span>
               </div>
               <div class="week-day">Wednesday</div>
             </div>
           </div>
         </div>
       </div>

       <div class="calendar-cont">
         <div class="calendar-header">
           <div class="calendar-nav">
             <span class="active-date"><span class="active-month">June</span><span class="active-year">2017</span></span>
             <a class="calendar-prev ripple-centered" title="Prev"><i class="rsicon rsicon-chevron_left"></i></a>
             <a class="calendar-next ripple-centered" title="Next"><i class="rsicon rsicon-chevron_right"></i></a>
           </div>
         </div>

         <table class="calendar-body">
           <thead class="calendar-thead"><tr><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th><th>Sun</th></tr></thead>
           <tbody class="calendar-tbody"><tr><td class="calendar-other-month"><span></span></td><td class="calendar-other-month"><span></span></td><td class="calendar-other-month"><span></span></td><td class="calendar-current-month"><span class="">1</span></td><td class="calendar-current-month"><span class="">2</span></td><td class="calendar-current-month"><span class="">3</span></td><td class="calendar-current-month"><span class="">4</span></td></tr><tr><td class="calendar-current-month"><span class="">5</span></td><td class="calendar-current-month"><span class="">6</span></td><td class="calendar-current-month"><span class="current-day">7</span></td><td class="calendar-current-month"><span class="">8</span></td><td class="calendar-current-month"><span class="">9</span></td><td class="calendar-current-month"><span class="">10</span></td><td class="calendar-current-month"><span class="">11</span></td></tr><tr><td class="calendar-current-month"><span class="">12</span></td><td class="calendar-current-month"><span class="">13</span></td><td class="calendar-current-month"><span class="">14</span></td><td class="calendar-current-month"><span class="">15</span></td><td class="calendar-current-month"><span class="">16</span></td><td class="calendar-current-month"><span class="">17</span></td><td class="calendar-current-month"><span class="">18</span></td></tr><tr><td class="calendar-current-month"><span class="">19</span></td><td class="calendar-current-month"><span class="">20</span></td><td class="calendar-current-month"><span class="">21</span></td><td class="calendar-current-month"><span class="">22</span></td><td class="calendar-current-month"><span class="">23</span></td><td class="calendar-current-month"><span class="">24</span></td><td class="calendar-current-month"><span class="">25</span></td></tr><tr><td class="calendar-current-month"><span class="">26</span></td><td class="calendar-current-month"><span class="">27</span></td><td class="calendar-current-month"><span class="">28</span></td><td class="calendar-current-month"><span class="">29</span></td><td class="calendar-current-month"><span class="">30</span></td><td class="calendar-other-month"><span></span></td><td class="calendar-other-month"><span></span></td></tr><tr><td class="calendar-other-month"><span></span></td><td class="calendar-other-month"><span></span></td><td class="calendar-other-month"><span></span></td><td class="calendar-other-month"><span></span></td><td class="calendar-other-month"><span></span></td><td class="calendar-other-month"><span></span></td><td class="calendar-other-month"><span></span></td></tr></tbody>
         </table>
         <div class="calendar-busy-note">Sorry. I'm not available on those days</div>
       </div>
     </div>
   </div>  
 </section><!-- #calendar -->
 
 <section id="contact" class="section section-contact">
   <div class="animate-up animated">
     <h2 class="section-title">Contact Me</h2>

     <div class="row">
       <div class="col-sm-6">
         <div class="section-box contact-form" style="min-height: 488px;">
           <h3>Feel free to contact me</h3>
           
           <form class="contactForm" action="http://rscard.px-lab.com/php/contact_form.php" method="post">
             <div class="input-field">
               <input class="contact-name" type="text" name="name">
               <span class="line"></span>
               <label>Name</label>
             </div>

             <div class="input-field">
               <input class="contact-email" type="email" name="email">
               <span class="line"></span>
               <label>Email</label>
             </div>

             <div class="input-field">
               <input class="contact-subject" type="text" name="subject">
               <span class="line"></span>
               <label>Subject</label>
             </div>

             <div class="input-field">
               <textarea class="contact-message" rows="4" name="message"></textarea>
               <span class="line"></span>
               <label>Message</label>
             </div>

             <span class="btn-outer btn-primary-outer ripple">
               <input class="contact-submit btn btn-lg btn-primary" type="submit" value="Send">
             </span>
             
             <div class="contact-response"></div>
           </form>
         </div>
       </div>

       <div class="col-sm-6">
         <div class="section-box contact-info has-map" style="min-height: 488px;">
           <ul class="contact-list">
             <li class="clearfix">
               <strong>Address</strong>
               <span>Belgium, Brussels, Liutte 27, BE</span>
             </li>
             <li class="clearfix">
               <strong>phone</strong>
               <span><a href="tel:+12562548456">+1 256 254 84 56</a></span>
             </li>
             <li class="clearfix">
               <strong>E-mail</strong>
               <span><a href="mailto:robertsmith@company.com">robertsmith@company.com</a></span>
             </li>
           </ul>

           
         </div>
       </div>
     </div>
   </div>  
 </section><!-- #contact -->
 
         
<!-- END: PAGE CONTENT -->

@endsection

@section('script')
  {!! Html::script('asset/plugins/swal/sweetalert2.min.js') !!}
@endsection

@section('style')
  {!! Html::style('asset/plugins/swal/sweetalert2.min.css') !!}
@endsection
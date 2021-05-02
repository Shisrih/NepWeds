
@extends('layouts.app')


@section('content')

<div class = "container-fluid head-image-div">
    <div class = "row">
      <div class = "col-lg-6">
      <img src = "images/logo.png" class = "head-image">
</div>

</div>
</div>

 <div class = "container-fluid">
     <div class = "jumbotron">
<h1 class = "text-center">Welcome</h1>

<hr>
<p class = "text-center">Welcome to events. Plan and Book your events at any time you like.</p>
    
     <div class= "row ">
        <div class = "col-md-4 welcome-infobox">
           <div class = "welcome-infobox-image">
           <img src = "{{asset('images/planning.png')}}">
           </div>
           <div class = "welcome-infobox-info">
               <h4 class = "text-center">Simplify your planning</h4>
               <div class = "welcome-infobox-paragraph">
               <p class = "text-center">Create a 100% mobile-optimized event page and start selling tickets in minutes.</p>
           </div>
       </div>
        </div>
        <div class = "col-md-4 welcome-infobox">
             <div class = "welcome-infobox-image">
             <img src = "{{asset('images/booking.png')}}">
           </div>
            <div class = "welcome-infobox-info">
               <h4 class = "text-center">Simplify your planning</h4>
               <div class = "welcome-infobox-paragraph">
               <p class = "text-center">Create a 100% mobile-optimized event page and start selling tickets in minutes.</p>
           </div>
           </div>
        </div>
        <div class = "col-md-4 welcome-infobox">
             <div class = "welcome-infobox-image">
             <img src = "{{asset('images/browse.png')}}">
           </div>
            <div class = "welcome-infobox-info">
               <h4 class = "text-center">Simplify your planning</h4>
               <div class = "welcome-infobox-paragraph">
               <p class = "text-center">Create a 100% mobile-optimized event page and start selling tickets in minutes.</p>
           </div>
           </div>
        </div>
          </div>
     </div>
 </div>
 <div class="container-fluid website-feature">
  <div class="row destacados">
    <div class="col-md-4">
        <div>
        <img src="{{asset('images/party.jpg')}}" alt="Texto Alternativo" class="img-square img-thumbnail">
        <div class = "info-box-infos">
        <h2>BUSINESS</h2>
        <p>Every Business related events are avaliable over here.</p>
        <a href="#" class="btn btn-primary" title="Enlace">Explore»</a>
      </div>

      </div>
    </div>

    <div class="col-md-4">
      <div>
      <img src="{{asset('images/tomorrow land 4.png')}}" alt="Texto Alternativo" class="img-square img-thumbnail">
         <div class = "info-box-infos">
        <h2>CULTURAL</h2>
        <p>All the cultural events that are avaliable in Nepal.</p>
        <a href="#" class="btn btn-primary" title="Enlace">Explore »</a>
      </div>
  </div>
    </div>

    <div class="col-md-4">
      <div>
      <img src="{{asset('images/tomorrow land 4.png')}}" alt="Texto Alternativo" class="img-square img-thumbnail">
         <div class = "info-box-infos">
        <h2>SPORTS</h2>
        <p>Sorts that will be held in the upcoming days.</p>
        <a href="#" class="btn btn-primary" title="Enlace">Explore »</a>
    </div>
      </div>
    </div>
  </div>
</div>


@endsection
@section('navbarscript')

<script type="text/javascript">
    $(window).scroll(function(){
      if($(window).scrollTop()>20){
        $('.navbar').addClass('transparent');
      }else{
           $('.navbar').removeClass('transparent');
      }

    });


</script>
@append
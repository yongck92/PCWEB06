@extends('layouts.app')
@section('content')
<!--Animate.css-->
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />


<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-3">
           <img id="profile-animate" class="rounded-circle" width="150" src="/storage/{{ $profile->image }}">
       </div>
       
       <div class="col-md-9">
       <a class="weatherwidget-io" href="https://forecast7.com/en/1d35103d82/singapore/" data-label_1="SINGAPORE" data-label_2="WEATHER" data-icons="Climacons Animated" data-days="3" data-theme="retro-sky" >SINGAPORE WEATHER</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
<br>

           <h3>{{ $user->name }}</h3>
           <span><strong>0</strong> posts</span>

           @if (empty($profile->description))

                    <div class="pt-3"><a href="/profile/edit">Add a description to your profile!</a></div>

                @else:

           <div class="pt-3">{{$profile->description}}</div>
           <div class="pt-3"><a href="/profile/edit">Edit profile</a></div>

                @endif

                <div class="row pt-5">
                        @foreach($posts as $post)
                            <div class="col-4 mb-5">
                                <a href="/post/{{$post->id}}">
                                    <img src="/storage/{{$post->image}}" class="w-100">
                                </a>
                            </div>
                        @endforeach   
                </div>
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-a414f161-57a0-430c-abff-6ec370dfd3e5"></div>

       </div>
   </div>
</div>
<!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
    <script type="text/javascript"src="{{ asset('js/profile.js') }}"></script>
@endsection


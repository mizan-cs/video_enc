@extends('layouts.app')

@section('content')
<div class="container">
   <!--  <iframe width="560" height="315" src="https://www.youtube.com/embed/xgWoXrXpl98?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay=1; encrypted-media" allowfullscreen></iframe> -->
  <!--  <iframe class="embed-responsive-item" id="videoframe" width="100%" height="full" src="https://www.youtube.com/embed/xgWoXrXpl98?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=1" allow="autoplay; encrypted-media" allowfullscreen frameborder="1" allowfullscreen="" allowTransparency="true"></iframe>
 -->

     <div class="video-code">
            <div class="embed-responsive embed-responsive-16by9">
              {!!$live->live_url!!}
          </div>
 	</div>

</div>
@endsection

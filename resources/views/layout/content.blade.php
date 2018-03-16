
<!-- ========== Content ========== -->
<section id="videos" class="content-section">
    <div class="container">
        <div class="row">

            <!-- ========== SECTION HEADER ========== -->
            <div class="col-md-12 section-header text-center">
                <h3 class="section-title underline">Videos</h3>
                <p class="section-subtitle">Toutes les vidéos de l'événement</p>
            </div> <!-- end section-header -->


            <!-- timer -->
            <div class="agileits-timer"> 
                <div class="clock">
                    <div class="column days">
                        <div class="timer" id="days"></div>
                        <div class="text">Days</div>
                    </div>
                    <div class="timer days"></div>
                    <div class="column">
                        <div class="timer" id="hours"></div>
                        <div class="text">Hours</div>
                    </div>
                    <div class="timer"></div>
                    <div class="column">
                        <div class="timer" id="minutes"></div>
                        <div class="text">Minutes</div>
                    </div>
                    <div class="timer"></div>
                    <div class="column">
                        <div class="timer" id="seconds"></div>
                        <div class="text">Seconds</div>
                    </div>
                    <div class="clearfix"> </div>
                </div>   
            </div>

            <!-- ========== FILTER BUTTONS ========== -->
            <div class="col-md-12">
                <div id="js-filters-juicy-projects" class="cbp-l-filters-button">
                    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">
                        Accueil
                        
                    </div>
                    <div data-filter=".identity" class="cbp-filter-item">
                        Les Vidéos
                        
                    </div>
                    <div data-filter=".web-design" class="cbp-filter-item">
                        Les combats du jour
                        
                    </div>
                    
                </div> <!-- end cbp-l-filters-button -->
            </div> <!-- end col-md-12 -->

            <div class="col-md-12">
                <div id="js-grid-juicy-projects" class="cbp">

                    @foreach($videos as $video)
                    <div class="cbp-item identity graphic">
                        <div class="cbp-caption">
                            <div class="cbp-caption-defaultWrap">
                                <img src="{{$video->imageurl}}" alt="">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <!-- <a href="ajax-portfolio/project1.html" class="cbp-singlePage cbp-l-caption-buttonLeft" rel="nofollow">info</a> -->
                                        <a href="#{{$video->test_code_id}}" class="open-modal cbp-l-caption-buttonRight" >voir la vidéo</a>
                                    </div> <!-- end cbp-l-caption-body -->
                                </div> <!-- end cbp-l-caption-alignCenter -->
                            </div> <!-- end cbp-caption-activeWrap -->
                        </div> <!-- end cbp-caption -->
                        <div class="cbp-l-grid-projects-title">{{$video->title}}</div>
                        <div class="cbp-l-grid-projects-desc">{{$video->subtitle}}</div>
                    </div> <!-- end cbp-item -->
                    @endforeach


                    

                </div> <!-- end cbp -->
            </div> <!-- end col-md-12 -->
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>

@foreach($videos as $video)
<a id='{{$video->vdo_id}}' href="{{$video->video_url}}" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="{{$video->title}}<br>{{$video->subtitle}}"></a>
@endforeach





@foreach($videos as $video)
<div id="{{$video->test_code_id}}" class="zoom-anim-dialog mfp-hide st-popup">
    <div style="text-align: center;font-size: 40px">
        <i class="fa fa-key"></i>
    </div>
    <h4 id="hd1" class="title">ENTREZ VOTRE PASS COMBAT</h4>
    <div  style="text-align: center;" class="form-group">
        @if($video->code_status === 0)
        <label style="text-align: center;" for="code"></label>
        @else
        <label style="text-align: center;" for="code">Tapez le code:<code>{{$video->code}}</code></label>
        @endif
        <input id="code1" style="text-align: center;" name="code" type="password" class="form-control" placeholder="****" required="">
    </div>
    <div style="text-align: center;font-size: 40px">
        <button id="submit1" onmouseover="myFunction1()" onclick="openVideo1()" type="submit" class="st-btn primary-btn hvr-back hvr-sweep-to-right pull-center">VALIDER</button>
        <script type="text/javascript">
            var btn1 = document.getElementById('submit1');
            var vdo1 = document.getElementById('{{$video->vdo_id}}');
            function myFunction1() {
                var c1 = document.getElementById('code1').value;
                if(c1 == {{$video->code}}){
                    code1.style.borderColor = '#47b475';
                    code1.style.borderColor = '#47b475';
                    btn1.style.borderColor = '#47b475';
                    btn1.style.backgroundColor  = '#47b475';
                    btn1.innerHTML = 'VALIDER';
                    vdo1.id = '{{$video->vdo_id}}';       
                }else{
                    code1.value = null;
                    code1.style.borderColor = '#d12424';
                    btn1.style.borderColor = '#d12424';
                    btn1.style.backgroundColor = '#d12424';
                    btn1.innerHTML = "Le code n'est pas valide";
                    vdo1.id = 'hgsa';
                }
            }
            function openVideo1(){
                document.getElementById("{{$video->vdo_id}}").click();
            }
        </script>
    </div>
    <br>
    <br>
</div> 

@endforeach
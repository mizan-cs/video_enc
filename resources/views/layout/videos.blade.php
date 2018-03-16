<section id="videos" class="content-section">
    <div style="text-align: center;" class="row">
        <div style="margin-bottom:10px" class="col-md-12 section-header text-center">
            <h3 class="section-title underline">Combat Balla Gaye/Gris Bordeaux</h3>
        </div> <!-- end section-header -->
        <div class="col-md-12 text-center">
            <section class="cta trans affix-next">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h5 class="cta-title">Le combat en direct</h5>
                        <p class="cta-desc mb20">It couldn’t be easier to start broadcasting to the world! YouTube’s ‘Hangout on Air’ option is ideal for discussions, webinars and performances. With a well-placed webcam, you could also broadcast sessions or keynotes from a live event, enabling people to attend virtually</p>
                         @guest
                            <a style="background-color: red!important;color: white!important;    border:none!important" href="#" class="st-btn full-rounded mr20 mb20" data-toggle="modal" data-target="#myModal-2"><strong>Voir le live</strong> </a>
                        @else
                           <a style="background-color: #5FB51C !important;color: white!important;    border:none!important" href="/live" class="st-btn full-rounded mr20 mb20" ><strong>Voir le live</strong> </a>
                        @endguest
                        
                    </div> <!-- end text-center -->
                </div> <!-- end row -->

            </section>
        </div> <!-- end text-center -->

        <!-- Modal -->
        <div class="modal fade" id="myModal-2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
            <div class="container">
                <div class="row pt60 pb60">
                    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 login-box">
                        <i style="font-size: 30px;" class="fa fa-lock"></i>
                        <h4 style="color: #47b475;">Entrez votre pass Joni Joni</h4>
                        <hr style="border-top: 1px solid black;margin-top: 1px">

                        <meta name="csrf-token" content="{{ csrf_token() }}">

                        <div style="text-align: center;" class="form-group">
                            <label  for="password"><code id="code_w">Code:</code></label>
                            <input style="text-align: center;" name="password" type="password" class="form-control" id="password" placeholder="****" required="">
                        </div>

                        <div style="text-align: center;border-top:none" class="modal-footer">
                            <button type="button" class="st-btn btn-small" data-dismiss="modal">Close</button>
                            <button type="submit" id="submit" class="st-btn primary-btn hvr-back hvr-sweep-to-right btn-small">Submit</button>
                        </div>

                        <img style="visibility: hidden;" id="loading" src="images\loading.gif">
                        
                    </div> <!-- end login-box -->
                </div> <!-- end row -->
            </div> <!-- end container -->
        </div> <!-- end modal -->
    </div> <!-- end row -->

    <script type="text/javascript">
        $(document).ready(function(){
            $('#submit').click(function(){
                $('#loading').css("visibility","visible");
                var password = $("#password").val();

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                    type: "post",
                    data: "password="+password,
                    url: "<?php echo url('/submit') ?>",
                    success:function(data){
                        if(data['code'] === 'True'){
                            console.log('Success');
                            $('#loading').css("visibility","hidden");
                            document.getElementById('code_w').innerHTML = 'Success!';
                            $('#loading').css("visibility","hidden");
                            window.location.replace("/$2y$10$2wdy163lTDFJEIIDDq3sqeqUowlFU0AAet4Kpf7oWMWRrrLaZD0mC");
                        }else{
                            console.log('Sorry');
                            $("#password").css("border","2px solid #8d1010")
                            $("#password").val(null);
                            document.getElementById('code_w').innerHTML = 'Enter valid code';
                            $('#loading').css("visibility","hidden");
                        }
                    } 
                });
            });
        });
    </script>

</section>
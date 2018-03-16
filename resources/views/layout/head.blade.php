<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- ========== VIEWPORT META ========== -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- ========== PAGE TITLE ========== -->
    <title>Sports & Recreation</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <style type="text/css">
        <style>
        #watch{
            margin: 0px !important;
            background: transparent;
        }

        #related-posts{
            background: transparent;
            margin: 0px !important;
            padding: 0px;
            color: #c2c7d0;
            height: 475px;
        }


        #related-posts h4{
            color: #c2c7d0;
            padding: 20px 0px 10px 0px;
            border-bottom: 1px solid #c2c7d0;
            font-size: 16px;
            margin: 0px 25px 0px 0px;
        }

/*        #related-posts .related-video-item{
            margin-top: 10px;
            margin-bottom: 30px;
        }*/

        .videolist{
            height: 500px;
            overflow-x: hidden;
            overflow-y: scroll;
        }

          .videolist::-webkit-scrollbar-track
          {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
            background-color: #2f3848;
            border-radius: 10px;
          }

          .videolist::-webkit-scrollbar
          {
            width: 10px;
            background-color: #2f3848;
          }

          .videolist::-webkit-scrollbar-thumb
          {
            border-radius: 10px;
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
            background-color: #000;
          }
        .related-video-item{
            height: 58px;
            width: 100%;
            overflow: hidden;
            position: relative;
        }

        .related-video-item a.title{
            color: #c2c7d0 !important;
        }

        .related-video-item .thumb{
            height: 58px !important;
        }

        .video-code{
            background: #454e54 url(assets/images/dw_logo_convereted.png) no-repeat center center;
            background-size: Auto 120px;
            /*height: 475px;*/
            width: 100%;
            position: relative;
        }

        @media only screen and (max-width: 768px) {
            .video-code{
                background-size: Auto 60px;
                height: 207px;
                margin-top: 20px;
            }

            #related-posts{
                margin-top: 10px !important
            }
        }

        .col-md-3.padd-0 {
                padding: 0px;
                    }
                    
    .livecls, .arcls, .upcls {
    position: absolute;
    background: #e84b3a;
    left: 130px;
    color: #fff;
    padding: 2px 5px;
    font-weight: 600;
    top: 18px;
    line-height: 16px;
    border-radius: 2px;
    font-size: 11px;
}     
    .arcls{
        background: grey;
    }
    .upcls{
      background: #3535e8;
    }

#related-posts .related-video-item a.title{
    height: 16px;
    overflow: hidden;
}

    </style>
    </style>

    <script type="text/javascript">
          // <!-- Facebook Pixel Code -->
      <script>
          !function(f,b,e,v,n,t,s)
          {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
              n.callMethod.apply(n,arguments):n.queue.push(arguments)};
              if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
              n.queue=[];t=b.createElement(e);t.async=!0;
              t.src=v;s=b.getElementsByTagName(e)[0];
              s.parentNode.insertBefore(t,s)}(window, document,'script',
              'https://connect.facebook.net/en_US/fbevents.js');
          fbq('init', '574754385979045');
          fbq('track', 'PageView');
      </script>
      <noscript><img height="1" width="1" style="display:none"
                     src="https://www.facebook.com/tr?id=574754385979045&ev=PageView&noscript=1"
          /></noscript>
      <!-- End Facebook Pixel Code -->

      <script>
          var OneSignal = window.OneSignal || [];
          OneSignal.push(["init", {
              appId: "0c5aa69e-e043-4408-87a2-5a9a4b635d0c",
              autoRegister: true,
              notifyButton: {
                  enable: false /* Set to false to hide */
              }
          }]);
      </script>
    </script>


    <script type="text/javascript">
        $(function($) {

            // For modal-1
            $('#modal-1').magnificPopup({
                type: 'inline',

                  fixedContentPos: false,
                  fixedBgPos: true,

                  overflowY: 'auto',

                  closeBtnInside: true,
                  preloader: false,

                  midClick: true,
                  removalDelay: 300,
                  mainClass: 'my-mfp-zoom-in'
            });

            // For modal-2
            $('#modal-2').magnificPopup({
                type: 'inline',

                  fixedContentPos: false,
                  fixedBgPos: true,

                  overflowY: 'auto',

                  closeBtnInside: true,
                  preloader: false,

                  midClick: true,
                  removalDelay: 300,
                  mainClass: 'my-mfp-slide-bottom'
            });
        });
    </script>

    <!-- ========== META TAGS ========== -->
    <meta name="description" content="Sports & Recreation">
    <meta name="keywords" content="Sports, Sports Recreation">

    <!-- ========== FAVICON & APPLE ICONS ========== -->
    

    <!-- ========== MINIFIED VENDOR CSS ========== -->
    <link rel="stylesheet" href="styles/vendor.css">

    <link rel="stylesheet" href="vendor/sweetalert2/dist/sweetalert2.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- ========== MAIN CSS ========== -->
    <link rel="stylesheet" href="styles/main.css">

    <script src="scripts/vendor/modernizr.js"></script>
<!doctype html>
<html lang="en">

    <head>
        <title>Contact Form 10</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,700" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href={{asset('/contactUs/css/style.css')}}>
        <script nonce="878a4703-9c70-4204-bb8b-97ea36b31c09">(function(w,d){!function(a,b,c,d){a[c]=a[c]||{};a[c].executed=[];a.zaraz={deferred:[],listeners:[]};a.zaraz.q=[];a.zaraz._f=function(e){return async function(){var f=Array.prototype.slice.call(arguments);a.zaraz.q.push({m:e,a:f})}};for(const g of["track","set","debug"])a.zaraz[g]=a.zaraz._f(g);a.zaraz.init=()=>{var h=b.getElementsByTagName(d)[0],i=b.createElement(d),j=b.getElementsByTagName("title")[0];j&&(a[c].t=b.getElementsByTagName("title")[0].text);a[c].x=Math.random();a[c].w=a.screen.width;a[c].h=a.screen.height;a[c].j=a.innerHeight;a[c].e=a.innerWidth;a[c].l=a.location.href;a[c].r=b.referrer;a[c].k=a.screen.colorDepth;a[c].n=b.characterSet;a[c].o=(new Date).getTimezoneOffset();if(a.dataLayer)for(const n of Object.entries(Object.entries(dataLayer).reduce(((o,p)=>({...o[1],...p[1]})),{})))zaraz.set(n[0],n[1],{scope:"page"});a[c].q=[];for(;a.zaraz.q.length;){const q=a.zaraz.q.shift();a[c].q.push(q)}i.defer=!0;for(const r of[localStorage,sessionStorage])Object.keys(r||{}).filter((t=>t.startsWith("_zaraz_"))).forEach((s=>{try{a[c]["z_"+s.slice(7)]=JSON.parse(r.getItem(s))}catch{a[c]["z_"+s.slice(7)]=r.getItem(s)}}));i.referrerPolicy="origin";i.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a[c])));h.parentNode.insertBefore(i,h)};["complete","interactive"].includes(b.readyState)?zaraz.init():a.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
    </head>

    <body>
        <section class="ftco-section img bg-hero" style="background-image: url({{asset('img/bg8.png')}});">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center mb-5">
                        <h2 class="heading-section">Contact Form</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-11">
                        <div class="wrapper">
                            <div class="row no-gutters justify-content-between">
                                <div class="col-lg-6 d-flex align-items-stretch">
                                    <div class="info-wrap w-100 p-5">
                                        <h3 class="mb-4">Contact us</h3>
                                        <div class="dbox w-100 d-flex align-items-start">
                                            <div class="icon d-flex align-items-center justify-content-center">
                                                <span class="fa fa-map-marker"></span>
                                            </div>
                                            <div class="text pl-4">
                                                <p><span>Address:</span> 10 rue du Lorguillon 54750 Trieux</p>  
                                            </div>
                                        </div>
                                        <div class="dbox w-100 d-flex align-items-start">
                                            <div class="icon d-flex align-items-center justify-content-center">
                                                <span class="fa fa-phone"></span>
                                            </div>
                                            <div class="text pl-4">
                                                <p><span>Phone:</span> <a href="tel://+33766713269">+33 7 66 71 32 69</a></p>
                                            </div>
                                        </div>
                                        <div class="dbox w-100 d-flex align-items-start">
                                            <div class="icon d-flex align-items-center justify-content-center">
                                                <span class="fa fa-paper-plane"></span>
                                            </div>
                                            <div class="text pl-4">
                                                <p><span>Email:</span> <a href="mailto:transeralegend@gmail.com">transeralegend@gmail.com</a></p>
                                            </div>
                                        </div>
                                        <div class="dbox w-100 d-flex align-items-start">
                                            <div class="icon d-flex align-items-center justify-content-center">
                                                <span class="fa fa-globe"></span>
                                            </div>
                                            <div class="text pl-4">
                                                <p><span>Website</span> <a href="{{ url('/') }}">TransEra Legend</a></p>
                                            </div>
                                        </div>
                                        <div class="dbox w-100 d-flex align-items-start">
                                            <a href="javascript:history.go(-1);" class="btn btn-outline-light">Previous</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="contact-wrap w-100 p-md-5 p-4">
                                        <h3 class="mb-4">Get in touch</h3>
                                        <div id="form-message-warning" class="mb-4"></div>
                                        <div id="form-message-success" class="mb-4">
                                            Your message was sent, thank you!
                                        </div>
                                        <form method="POST" id="contactForm" name="contactForm">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="name" id="name" placeholder="{{ Auth::user()->name }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" name="email" id="email" placeholder="{{ Auth::user()->email }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <textarea name="message" class="form-control" id="message" cols="30" rows="5" placeholder="Message"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="submit" value="Send Message" class="btn btn-outline-light">
                                                        <div class="submitting"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script src="{{asset('/contactUs/js/jquery.min.js')}}"></script>
        <script src="{{asset('/contactUs/js/popper.js')}}"></script>
        <script src="{{asset('/contactUs/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('/contactUs/js/jquery.validate.min.js')}}"></script>
        <!-- Main Javascript -->
        <script src="{{asset('/contactUs/js/main.js')}}"></script>
        <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854" integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg==" data-cf-beacon='{"rayId":"806fb6a88d212a68","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.8.0","si":100}' crossorigin="anonymous"></script>
    </body>
</html>

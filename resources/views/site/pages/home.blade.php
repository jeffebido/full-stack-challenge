@extends('site.layout.main')
@section('content')
    
    <section class="hero d-flex align-items-center" id="hero">
       <div class="container">
            <div class="row">
                <span>spa & beauty center</span>
                <h1>Beauty and success starts here.</h1>
                <p>Together creeping heaven upon third dominion be upon won't darkness rule behold it created good saw after she'd Our set living.</p>
                <div class="actions">
                    <a class="btn" href="#" title="Reserve Now">
                        Reserve Now
                    </a>
                    <a class="btn-video" href="https://www.youtube.com/" title="Watch our story" target="_blank">
                        <span>
                            <ion-icon name="play-outline"></ion-icon>
                        </span>
                        Watch our story
                    </a>
                </div>
            </div>
       </div>
    </section>

    <section class="about" id="about">
        <div class="container text-center">
            <div class="row ">
                <div class="col ">
                    <img src="{{asset('img/leospa-icon.png')}}" class="img-fluid" alt="">
                    <h4>ABOUT OUR SPA CENTER</h4>
                    <h2>Come and you will be Inspired!</h2>
                    <p>
                        It’s the end of summer the sweltering heat makes human sweat in the night and makes the plants and trees wilt even in the moonlit nights. The eastern wind breeze brings an eerie feeling, that the monsoon clouds are soon coming, there is a strange silence in the ears, the sky gets darker and darker
                    </p>
                    <a class="btn btn-rounded" href="#" title="Read More">
                        Read More
                    </a>
                </div>
                
            </div>
        </div>
    </section>

    <section class="features" id="features">
        <div class="container-fluid">
            <div class="row">
                <div class="col col-6 col-md-3 ">
                    <div>
                        <img src="{{asset('img/features/leospa-modern-style.png')}}" class="img-fluid" alt="">
                        <div class="overlay">
                            <img src="{{asset('img/features/icon.png')}}" class="img-fluid" alt="">
                            <span>Modern Style</span>
                        </div>
                    </div>
                </div>
                <div class="col col-6 col-md-3 ">
                    <div>
                        <img src="{{asset('img/features/leospa-body-treatment.png')}}" class="img-fluid" alt="">
                        <div class="overlay">
                            <img src="{{asset('img/features/icon.png')}}" class="img-fluid" alt="">
                            <span>Body Treatment</span>
                        </div>
                    </div>
                </div>
                <div class="col col-6 col-md-3 ">
                    <div>
                        <img src="{{asset('img/features/leospa-best-places.png')}}" class="img-fluid" alt="">
                        <div class="overlay">
                            <img src="{{asset('img/features/icon.png')}}" class="img-fluid" alt="">
                            <span>Best Places</span>
                        </div>
                    </div>
                </div>
                <div class="col col-6 col-md-3 ">
                    <div>
                        <img src="{{asset('img/features/leospa-expert-staff.png')}}" class="img-fluid" alt="">
                        <div class="overlay">
                            <img src="{{asset('img/features/icon.png')}}" class="img-fluid" alt="">
                            <span>Expert Staff</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services" id="services">
        <div class="container text-center">
            <div class="row ">
                <div class="col">
                    <h2>Popular Procedures</h2>
                    <p class="subtitle">
                        To doesn't his appear replenish together called he of mad place won't wherein blessed second every wherein were meat kind wherein and martcin
                    </p>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col col-xxl-auto">
                    <div class="service-box">
                        <img src="{{asset('img/services/leospa-message-theraphy.png')}}" class="img-fluid" alt="">
                        <h3>Massage Therapy</h3>
                        <p>Living winged said you darkness you're divide gathered and bring one seasons face great dr Waters firmament place which.</p>
                        <a class="btn btn-rounded btn-dark" href="#" title="Read More">
                            Read More
                        </a>
                    </div>
                </div>
                <div class="col col-xxl-auto">
                    <div class="service-box">
                        <img src="{{asset('img/services/leospa-message-theraphy.png')}}" class="img-fluid" alt="">
                        <h3>Massage Therapy</h3>
                        <p>Living winged said you darkness you're divide gathered and bring one seasons face great dr Waters firmament place which.</p>
                        <a class="btn btn-rounded btn-dark" href="#" title="Read More">
                            Read More
                        </a>
                    </div>
                </div>
                <div class="col col-xxl-auto">
                    <div class="service-box">
                        <img src="{{asset('img/services/leospa-message-theraphy.png')}}" class="img-fluid" alt="">
                        <h3>Massage Therapy</h3>
                        <p>Living winged said you darkness you're divide gathered and bring one seasons face great dr Waters firmament place which.</p>
                        <a class="btn btn-rounded btn-dark" href="#" title="Read More">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials" id="testimonials">
        <div class="container text-center">
            <div class="row">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <img src="{{asset('img/leospa-quote.png')}}" class="img-fluid" alt="">
                        <p>
                            First i beast be fruitful open you tree all Won't can't likeness and you're have whales creature seed to two grass life blessed you meat shall you winged under from their there he That you're one called gather make much red wherein set fourth green bearing fifth replenish given she had.
                        </p>
                        <img src="{{asset('img/leospa-testimonials-default.png')}}" class="img-fluid rounded-circle" alt="">
                        <h3>Jack Marsh, <span>Executive</span></h3>
                    </div>
                    <div class="item">
                        <img src="{{asset('img/leospa-quote.png')}}" class="img-fluid" alt="">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fermentum feugiat sem et ornare. Ut in suscipit libero. Sed accumsan enim sem, ut consequat ipsum accumsan sed. Donec dictum vehicula tellus eu ullamcorper.rhoncus maximus, augue leo mattis erat, et rutrhoncus egestas neque accumsan quis purus et, varius lorem.
                        </p>
                        <img src="{{asset('img/leospa-testimonials-default.png')}}" class="img-fluid rounded-circle" alt="">
                        <h3>Joseph Austin, <span>Director</span></h3>
                    </div>
                    <div class="item">
                        <img src="{{asset('img/leospa-quote.png')}}" class="img-fluid" alt="">
                        <p>
                            Nam arcu turpis, porttitor ac risus id, malesuada dapibus augue. <br> Aliquam blandit tempor neque et viverra. Etiam facilisis orci hendrerit dui pellentesque,
                        </p>
                        <img src="{{asset('img/leospa-testimonials-default.png')}}" class="img-fluid rounded-circle" alt="">
                        <h3>David Hannan, <span>Creative</span></h3>
                    </div>
                    <div class="item">
                        <img src="{{asset('img/leospa-quote.png')}}" class="img-fluid" alt="">
                        <p>
                            Quisque sed faucibus risus. Morbi pulvinar neque ex, lobortis blandit est tincidunt non. Aliquam cursus elementum erat, a accumsan mi fermentum eu. Praesent pretium nulla a ullamcorper dignissim.<br>Donec mi dolor, porta sed commodo hendrerit, pharetra ac metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
                        <img src="{{asset('img/leospa-testimonials-default.png')}}" class="img-fluid rounded-circle" alt="">
                        <h3>Cheryl Harris, <span>Executive</span></h3>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="team" id="team">
        <div class="container text-center">
            <div class="row ">
                <div class="col">
                    <h2>Experienced Team</h2>
                    <p class="subtitle">
                        To doesn't his appear replenish together called he of mad place won't wherein blessed second every wherein were meat kind wherein and martcin
                    </p>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col col-xxl-auto">
                    <div class="team-box">
                        <img src="{{asset('img/team/leospa-austin.png')}}" class="img-fluid" alt="">
                        <div class="info">
                            
                            <h3>Joseph Austin</h3>
                            <p>Thai Message</p>
                            <div class="social">
                                <a href="https://www.facebook.com/" target="_blank" title="Joseph Austin - Facebook">
                                    <img src="{{asset('img/icons/facebook.svg')}}" >
                                </a>
                                <a href="https://twitter.com/" target="_blank" title="Joseph Austin - Twitter">
                                    <img src="{{asset('img/icons/twitter.svg')}}" >
                                </a>
                                <a href="https://www.google.com/" target="_blank" title="Joseph Austin - Google">
                                    <img src="{{asset('img/icons/googleplus.svg')}}" >
                                </a>
                                <a href="https://www.instagram.com/" target="_blank" title="Joseph Austin - Instagram">
                                    <img src="{{asset('img/icons/instagram.svg')}}" >
                                </a>
                            </div>
                        </div>

                        
                    </div>
                </div>
                <div class="col col-xxl-auto">
                    <div class="team-box">
                        <img src="{{asset('img/team/leospa-david.png')}}" class="img-fluid" alt="">
                        <div class="info">
                            <h3>David Hannan</h3>
                            <p>Thai Message</p>
                            <div class="social">
                                <a href="https://www.facebook.com/" target="_blank" title="David Hannan - Facebook">
                                    <img src="{{asset('img/icons/facebook.svg')}}" >
                                </a>
                                <a href="https://twitter.com/" target="_blank" title="David Hannan - Twitter">
                                    <img src="{{asset('img/icons/twitter.svg')}}" >
                                </a>
                                <a href="https://www.google.com/" target="_blank" title="David Hannan - Google">
                                    <img src="{{asset('img/icons/googleplus.svg')}}" >
                                </a>
                                <a href="https://www.instagram.com/" target="_blank" title="David Hannan - Instagram">
                                    <img src="{{asset('img/icons/instagram.svg')}}" >
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-xxl-auto">
                    <div class="team-box">
                        <img src="{{asset('img/team/leospa-cherly.png')}}" class="img-fluid" alt="">
                        <div class="info">
                            <h3>Cheryl Harris</h3>
                            <p>Thai Message</p>
                            <div class="social">
                                <a href="https://www.facebook.com/" target="_blank" title="Cheryl Harris - Facebook">
                                    <img src="{{asset('img/icons/facebook.svg')}}" >
                                </a>
                                <a href="https://twitter.com/" target="_blank" title="Cheryl Harris - Twitter">
                                    <img src="{{asset('img/icons/twitter.svg')}}" >
                                </a>
                                <a href="https://www.google.com/" target="_blank" title="Cheryl Harris - Google">
                                    <img src="{{asset('img/icons/googleplus.svg')}}" >
                                </a>
                                <a href="https://www.instagram.com/" target="_blank" title="Cheryl Harris - Instagram">
                                    <img src="{{asset('img/icons/instagram.svg')}}" >
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="appointment" id="appointment">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-5 col-sm-12 appointment-bkg"></div>
                <div class="col-xl-7 col-sm-12 appointment-form">
                    <form action="{{route('site.appointment.form')}}" method="post">
                        @csrf
                        <div class="appointment-fields">
                            <input name="name" type="text" placeholder="NAME" >
                            <input name="email" type="email" placeholder="EMAIL ADDRESS" >
                        </div>
                        <div class="appointment-fields">
                            <select name="service" >
                                <option>SELECT SERVICE</option>
                                <option>SELECT SERVICE ...</option>
                                <option>SELECT SERVICE .......</option>
                              </select>
                            <input name="phone" type="tel" placeholder="PHONE NUMBER" >
                        </div>
                        <div class="appointment-fields">
                            <input name="date" type="date" placeholder="DATE" >
                            <input name="time" type="time" placeholder="TIME" >
                        </div>
                        <div class="appointment-field">
                            <textarea name="notes" placeholder="YOUR NOTES"></textarea>
                        </div>
                        <button class="btn btn-rounded">Make an Appointment</button>
                    </form>
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section class="blog" id="blog">
        <div class="container text-center">
            <div class="row ">
                <div class="col">
                    <h2>Latest From Blog</h2>
                    <p class="subtitle">
                        To doesn't his appear replenish together called he of mad place won't wherein blessed second every wherein were meat kind wherein and martcin                     </p>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col col-xxl-auto">
                    <div class="blog-box">
                        <figure class="figure"></figure>
                        <h3>Had seed herb grass mids</h3>
                        <p>She'd yielding seas green appear unto worne seas field most come mede do bad</p>
                        <a class="btn btn-rounded btn-dark" href="#" title="Read More">
                            Read More
                        </a>
                    </div>
                </div>
                <div class="col col-xxl-auto">
                    <div class="blog-box">
                        <figure class="figure"></figure>
                        <h3>Divid image unto creeping </h3>
                        <p>She'd yielding seas green appear unto worne seas field most come mede do bad</p>
                        <a class="btn btn-rounded btn-dark" href="#" title="Read More">
                            Read More
                        </a>
                    </div>
                </div>
                <div class="col col-xxl-auto">
                    <div class="blog-box">
                        <figure class="figure"></figure>
                        <h3> Had seed herb grass mids</h3>
                        <p>She'd yielding seas green appear unto worne seas field most come mede do bad</p>
                        <a class="btn btn-rounded btn-dark" href="#" title="Read More">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <div class="container">
            <div class="row">
                <div class="col text-center title ">
                    <h2>Get In Touch</h2>
                    <p>
                        To doesn't his appear replenish together called he of mad place won't wherein blessed second every wherein were meat kind wherein and martcin 
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-5 col-sm-12 contact-info">
                    <div class="row">
                        <div class="col-2 info-box">
                            <div class="icon">
                                <img src="{{asset('img/icons/map.svg')}}" class="img-fluid" alt="">
                            </div>
                            
                        </div>
                        <div class="col  text-info">
                            <p>848 E 28th ST, BROOKLYN</p>
                            <p>NEW YORK, USa</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 info-box">
                            <div class="icon">
                                <img src="{{asset('img/icons/email.svg')}}" class="img-fluid" alt="">
                            </div>
                            
                        </div>
                        <div class="col  text-info">
                            <p>example@leospa.com</p>
                            <p>example@leospa.com</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 info-box">
                            <div class="icon">
                                <img src="{{asset('img/icons/tablet.svg')}}" class="img-fluid" alt="">
                            </div>
                            
                        </div>
                        <div class="col  text-info">
                            <p>+02 365 2365 3265 (02)</p>
                            <p>+01 365 2365 3265 (04)</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-7 col-sm-12 contact-form">
                    <form action="{{route('site.contact.form')}}" method="post">
                        @csrf
                        <div class="contact-fields">
                            <input name="name" type="text" placeholder="NAME" >
                        </div>
                        <div class="contact-fields">
                            <input name="email" type="email" placeholder="EMAIL ADDRESS" >
                        </div>
                        <div class="contact-fields">
                            <textarea name="comment" placeholder="WRITE COMMENT"></textarea>
                        </div>
                        <button class="btn btn-rounded">SUBMIT NOW</button>
                    </form>
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    
@stop

@extends('layouts.frontend.index')

@section('content')
    <!--== 5. Header ==-->
    <section id="header-slider" class="owl-carousel">
        @foreach($slides as $key => $slide)
        <div class="item" style="background-image: url('uploads/images/{{ $slide->image }}')">
            <div class="container">
                <div class="header-content @if($key == 2) text-right pull-right @endif ">
                    <h1 class="header-title">{{ $slide->title }}</h1>
                    <p class="header-sub-title">{{ $slide->sub_title }}</p>
                </div> <!-- /.header-content -->
            </div>
        </div>
        @endforeach
    </section>



    <!--== 6. About us ==-->
    <section id="about" class="about">
        <img src="{{ asset('assets/frontend/images/icons/about_color.png') }}" class="img-responsive section-icon hidden-sm hidden-xs">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row dis-table">
                    <div class="hidden-xs col-sm-6 section-bg about-bg dis-table-cell">

                    </div>
                    <div class="col-xs-12 col-sm-6 dis-table-cell">
                        <div class="section-content">
                            <h2 class="section-content-title">About us</h2>
                            <p class="section-content-para">
                                Astronomy compels the soul to look upward, and leads us from this world to another.  Curious that we spend more time congratulating people who have succeeded than encouraging people who have not. As we got further and further away, it [the Earth] diminished in size.
                            </p>
                            <p class="section-content-para">
                                beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man.  Where ignorance lurks, so too do the frontiers of discovery and imagination.
                            </p>
                        </div> <!-- /.section-content -->
                    </div>
                </div> <!-- /.row -->
            </div> <!-- /.container-fluid -->
        </div> <!-- /.wrapper -->
    </section> <!-- /#about -->


    <!--==  7. Afordable Pricing  ==-->
    <section id="pricing" class="pricing">
        <div id="w">
            <div class="pricing-filter">
                <div class="pricing-filter-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="section-header">
                                    <h2 class="pricing-title">Affordable Pricing</h2>
                                    <ul id="filter-list" class="clearfix">
                                        <li class="filter" data-filter="all">All</li>
                                        @foreach($categories as $category)
                                        <li class="filter" data-filter=".{{ Str::slug($category->title) }}">{{ $category->title }}</li>
                                        @endforeach
                                    </ul><!-- @end #filter-list -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">  
                    <div class="col-md-10 col-md-offset-1">
                        <ul id="menu-pricing" class="menu-price">
                            @foreach($foods as $food)
                            <li class="item {{ Str::slug($food->category->title) }}">

                                <a href="#">
                                    <img src="{{ asset('uploads/images/' . $food->image) }}" class="img-responsive" alt="{{ $food->name }}" >
                                    <div class="menu-desc text-center">
                                        <span>
                                            <h3>{{ $food->name }}</h3>
                                            {{ $food->description }}
                                        </span>
                                    </div>
                                </a>
                                    
                                <h2 class="white">${{ $food->price }}</h2>
                            </li>
                            @endforeach
                        </ul>

                    </div>   
                </div>
            </div>

        </div> 
    </section>


    <!--== 8. Great Place to enjoy ==-->
    <section id="great-place-to-enjoy" class="great-place-to-enjoy">
        <img class="img-responsive section-icon hidden-sm hidden-xs" src="{{ asset('assets/frontend/images/icons/beer_black.png') }}">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row dis-table">
                    <div class="col-xs-6 col-sm-6 dis-table-cell color-bg">
                        <h2 class="section-title">Great Place to enjoy</h2>
                    </div>
                    <div class="col-xs-6 col-sm-6 dis-table-cell section-bg">
                        
                    </div>
                </div> <!-- /.dis-table -->
            </div> <!-- /.row -->
        </div> <!-- /.wrapper -->
    </section> <!-- /#great-place-to-enjoy -->



    <!--==  9. Our Beer  ==-->
    <section id="beer" class="beer">
        <img class="img-responsive section-icon hidden-sm hidden-xs" src="{{ asset('assets/frontend/images/icons/beer_color.png') }}">
        <div class="container-fluid">
            <div class="row dis-table">
                <div class="hidden-xs col-sm-6 dis-table-cell section-bg">

                </div>

                <div class="col-xs-12 col-sm-6 dis-table-cell">
                    <div class="section-content">
                        <h2 class="section-content-title">Our Beer</h2>
                        <div class="section-description">
                            <p class="section-content-para">
                                Astronomy compels the soul to look upward, and leads us from this world to another.  Curious that we spend more time congratulating people who have succeeded than encouraging people who have not. As we got further and further away, it [the Earth] diminished in size.
                            </p>
                            <p class="section-content-para">
                                beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man.  Where ignorance lurks, so too do the frontiers of discovery and imagination.Astronomy compels the soul to look upward, and leads us from this world to another.  Curious that we spend more time congratulating people who have succeeded than encouraging people who have not. As we got further and further away, it [the Earth] diminished in size.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!--== 10. Our Breakfast Menu ==-->
    <section id="breakfast" class="breakfast">
        <img class="img-responsive section-icon hidden-sm hidden-xs" src="{{ asset('assets/frontend/images/icons/bread_black.png') }}">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row dis-table">
                    <div class="col-xs-6 col-sm-6 dis-table-cell color-bg">
                        <h2 class="section-title">Our Breakfast Menu</h2>
                    </div>
                    <div class="col-xs-6 col-sm-6 dis-table-cell section-bg">
                        
                    </div>
                </div> <!-- /.dis-table -->
            </div> <!-- /.row -->
        </div> <!-- /.wrapper -->
    </section> <!-- /#breakfast -->



    <!--== 11. Our Bread ==-->
    <section id="bread" class="bread">
        <img class="img-responsive section-icon hidden-sm hidden-xs" src="{{ asset('assets/frontend/images/icons/bread_color.png') }}">
        <div class="container-fluid">
            <div class="row dis-table">
                <div class="hidden-xs col-sm-6 dis-table-cell section-bg">

                </div>
                <div class="col-xs-12 col-sm-6 dis-table-cell">
                    <div class="section-content">
                        <h2 class="section-content-title">
                            Our Bread
                        </h2>
                        <div class="section-description">
                            <p class="section-content-para">
                                Astronomy compels the soul to look upward, and leads us from this world to another.  Curious that we spend more time congratulating people who have succeeded than encouraging people who have not. As we got further and further away, it [the Earth] diminished in size.
                            </p>
                            <p class="section-content-para">
                                beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man.  Where ignorance lurks, so too do the frontiers of discovery and imagination.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!--== 12. Our Featured Dishes Menu ==-->
    <section id="featured-dish" class="featured-dish">
        <img class="img-responsive section-icon hidden-sm hidden-xs" src="{{ asset('assets/frontend/images/icons/food_black.png') }}">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row dis-table">
                    <div class="col-xs-6 col-sm-6 dis-table-cell color-bg">
                        <h2 class="section-title">Our Featured Dishes Menu</h2>
                    </div>
                    <div class="col-xs-6 col-sm-6 dis-table-cell section-bg">
                        
                    </div>
                </div> <!-- /.dis-table -->
            </div> <!-- /.row -->
        </div> <!-- /.wrapper -->
    </section> <!-- /#featured-dish -->




    <!--== 13. Menu List ==-->
    <section id="menu-list" class="menu-list">
        <div class="container">
            <div class="row menu">
                <div class="col-md-10 col-md-offset-1 col-sm-9 col-sm-offset-2 col-xs-12">
                    <div class="row">
                        @foreach($featured as $food)
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="menu-item">
                                    <h3 class="menu-title">{{ $food->name }}</h3>
                                    <p class="menu-about">{{ $food->description }}</p>

                                    <div class="menu-system">
                                        <p class="prices">${{ $food->price }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!--== 15. Reserve A Table! ==-->
    <section id="reserve" class="reserve">
        <img class="img-responsive section-icon hidden-sm hidden-xs" src="{{ asset('assets/frontend/images/icons/reserve_black.png') }}">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row dis-table">
                    <div class="col-xs-6 col-sm-6 dis-table-cell color-bg">
                        <h2 class="section-title">Reserve A Table !</h2>
                    </div>
                    <div class="col-xs-6 col-sm-6 dis-table-cell section-bg">
                        
                    </div>
                </div> <!-- /.dis-table -->
            </div> <!-- /.row -->
        </div> <!-- /.wrapper -->
    </section> <!-- /#reserve -->



    <section class="reservation">
        <img class="img-responsive section-icon hidden-sm hidden-xs" src="{{ asset('assets/frontend/images/icons/reserve_color.png') }}">
        <div class="wrapper">
            <div class="container-fluid">
                <div class=" section-content">
                    <div class="row">
                        <div class="col-md-5 col-sm-6">
                            <form class="reservation-form" method="post" action="{{ route('frontend.reservation') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control reserve-form empty iconified" name="name" id="name" placeholder="  &#xf007;  Name" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control reserve-form empty iconified" id="email" placeholder="  &#xf1d8;  e-mail" required="required">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="phone" class="form-control reserve-form empty iconified" name="phone" id="phone" required="required" placeholder="  &#xf095;  Phone" required="required">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="date" class="form-control reserve-form empty iconified" name="reservation_date" id="reservation_date" required="required" placeholder="&#xf017;  Date" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="time" class="form-control reserve-form empty iconified" name="reservation_time" id="reservation_time" required="required" placeholder="&#xf017;  Time" required="required">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <textarea type="text" name="message" class="form-control reserve-form empty iconified" id="message" rows="3" required="required" placeholder="  &#xf086;  We're listening"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" id="submit" name="submit" class="btn btn-reservation">
                                            <span><i class="fa fa-check-circle-o"></i></span>
                                            Make a reservation
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="col-md-2 hidden-sm hidden-xs"></div>

                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="opening-time">
                                <h3 class="opening-time-title">Hours</h3>
                                <p>Mon to Fri: 7:30 AM - 11:30 AM</p>
                                <p>Sat & Sun: 8:00 AM - 9:00 AM</p>

                                <div class="launch">
                                    <h4>Lunch</h4>
                                    <p>Mon to Fri: 12:00 PM - 5:00 PM</p>
                                </div>

                                <div class="dinner">
                                    <h4>Dinner</h4>
                                    <p>Mon to Sat: 6:00 PM - 1:00 AM</p>
                                    <p>Sun: 5:30 PM - 12:00 AM</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>




    <section id="contact" class="contact">
        <div class="container-fluid color-bg">
            <div class="row dis-table">
                <div class="hidden-xs col-sm-6 dis-table-cell">
                    <h2 class="section-title">Contact With us</h2>
                </div>
                <div class="col-xs-6 col-sm-6 dis-table-cell">
                    <div class="section-content">
                        <p>16th Birn street Get Plaza (4th floar) USA</p>
                        <p>+44 12 213584</p>
                        <p>example@mail.com </p>
                    </div>
                </div>
            </div>
            <div class="social-media">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <ul class="center-block">
                            <li><a href="#" class="fb"></a></li>
                            <li><a href="#" class="twit"></a></li>
                            <li><a href="#" class="g-plus"></a></li>
                            <li><a href="#" class="link"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-form">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                    <div class="row">
                         <form class="contact-form" method="post" action="{{ route('frontend.contact') }}">
                            @csrf
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input  name="name" type="text" class="form-control" id="cname" required="required" placeholder="  Name">
                                </div>
                                <div class="form-group">
                                    <input name="email" type="email" class="form-control" id="cemail" required="required" placeholder="  Email">
                                </div>
                                <div class="form-group">
                                    <input name="subject" type="text" class="form-control" id="csubject" required="required" placeholder="  Subject">
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <textarea name="message" type="text" class="form-control" id="cmessage" rows="7" placeholder="  Message"></textarea>
                            </div>

                            <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                                <div class="text-center">
                                    <button type="submit" id="submit" name="submit" class="btn btn-send">Send </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
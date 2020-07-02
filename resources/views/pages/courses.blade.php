@extends('layout.master');
@section('content')
<div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <a href="#">Courses</a>
                        <span>Teen driver education</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Courses Details Section Begin -->
    <section class="course-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="course__details__desc">
                        <img src="img/courses/details/course-details.jpg" alt="">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="course__details__title">
                                    <h3>Defensive Driving Course</h3>
                                    <div class="price">$ 129</div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="course__details__rating">
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p>( 03 Reviews )</p>
                                </div>
                            </div>
                        </div>
                        <p class="course__details__text">We provide free pick up and drop off at home or school for all
                            behind-the-wheel lessons. And, we offer a payment plan at no additional charge. Also, the
                            student will choose from one of the following driving programs: The Basic Course includes 6
                            hours of in-car driving & 6 hours of in-car observation; The Advantage Plus Program includes
                            8 hours of all private lessons (no need to do any observation); The Classic Experience
                            includes 12 hours of all private lessons. All programs earn state certification and meet all
                            high school graduation requirements. We also offer 25 and 50 hours behind-the-wheel
                            programs.</p>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-md-3 col-sm-6">
                                <div class="course__details__feature">
                                    <h5>Programs Available</h5>
                                    <ul>
                                        <li><i class="fa fa-check-circle-o"></i> <span>Complete Course Options
                                                (Classroom + Behind the Wheel Lessons)</span></li>
                                        <li><i class="fa fa-check-circle-o"></i> <span>Partial Course Options (Behind
                                                the Wheel Lessons Only)</span></li>
                                        <li><i class="fa fa-check-circle-o"></i> <span>Partial Course Options (Classroom
                                                Instruction)</span></li>
                                        <li><i class="fa fa-check-circle-o"></i> <span>Additional Practice Hours (Behind
                                                Wheel Lessons)</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-md-3 col-sm-6">
                                <div class="course__details__feature">
                                    <h5>Eligibility Requirements</h5>
                                    <ul>
                                        <li><i class="fa fa-check-circle-o"></i> <span>At least 16 years old</span></li>
                                        <li><i class="fa fa-check-circle-o"></i> <span>Has had the permit at least 9
                                                months</span></li>
                                        <li><i class="fa fa-check-circle-o"></i> <span>Has completed Driver’s ED
                                                Course</span></li>
                                        <li><i class="fa fa-check-circle-o"></i> <span>Has accumulated 50 hours of
                                                behind-the-wheel extra practice</span></li>
                                        <li><i class="fa fa-check-circle-o"></i> <span>Has received letter of
                                                eligibility from the State</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="course__details__sidebar">
                        <div class="course__details__sidebar__location">
                            <div class="course__details__location__map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2942.5524090066037!2d-71.10245469994108!3d42.47980730490846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e3748250c43a43%3A0xe1b9879a5e9b6657!2sWinter%20Street%20Public%20Parking%20Lot!5e0!3m2!1sen!2sbd!4v1577299251173!5m2!1sen!2sbd"
                                    height="300" style="border:0;" allowfullscreen=""></iframe>
                            </div>
                            <div class="course__details__location__address">
                                <h5>When & Where?</h5>
                                <p><span>Address:</span> 2 Sta. Lucia St., Plainview, <br />Mandaluyong City</p>
                                <p><span>Time:</span> Nov 20, 2019 <br />from 6:30pm - 8:30pm</p>
                            </div>
                        </div>
                        <div class="course__details__sidebar__register">
                            <h5>REgister now</h5>
                            <form action="#">
                                <input type="text" placeholder="Name">
                                <input type="text" placeholder="Email">
                                <input type="text" placeholder="Phone">
                                <input type="text" placeholder="Date & time" class="datepicker_pop">
                                <select>
                                    <option value="">Car type</option>
                                    <option value="">Hatchback</option>
                                    <option value="">Sedan</option>
                                    <option value="">Crossover</option>
                                </select>
                                <button type="submit" class="site-btn second-bg">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Courses Details Section End -->
@endsection
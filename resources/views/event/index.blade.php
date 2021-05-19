@extends('layouts.appdef')

@section('content')

<section id="cheers-event">
    <div class="myfullpad">
        <div class="row g-1">
            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-6 col-sm-12 event-leftsection">
                <div id="eventCalendar"></div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 event-rightsection">
            <h3 class="titleof-category">Event List</h3>

            <div class="row g-1">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="card eventstd-card mb-1">
                        <div class="row g-0">
                            <div class="col-3">
                                <img src="{{ asset('public/assets/img/637C1448.jpg')}}" class="card-img rounded">
                            </div>

                            <div class="col-9">
                                <div class="card-body">
                                    <div class="title-section text-left">
                                        <a href="event-detail.php"><h5>Cheers Music Weekend</h5></a>
                                        <span class="metaeventstd"><i class="fad fa-calendar-day"></i> 29 Sep 2020 20:00</span>
                                        <span class="metaeventstd"><i class="fad fa-map-marker-alt"></i> Lap. Brawijaya</span> 
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="card eventstd-card mb-1">
                        <div class="row g-0">
                            <div class="col-3">
                                <img src="{{ asset('public/assets/img/637C1448.jpg')}}" class="card-img rounded">
                            </div>

                            <div class="col-9">
                                <div class="card-body">
                                    <div class="title-section text-left">
                                        <a href="event-detail.php"><h5>Cheers Music Weekend</h5></a>
                                        <span class="metaeventstd"><i class="fad fa-calendar-day"></i> 29 Sep 2020 20:00</span> 
                                        <span class="metaeventstd"><i class="fad fa-map-marker-alt"></i> Lap. Brawijaya</span> 
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="card eventstd-card mb-1">
                        <div class="row g-0">
                            <div class="col-3">
                                <img src="{{ asset('public/assets/img/637C1448.jpg')}}" class="card-img rounded">
                            </div>

                            <div class="col-9">
                                <div class="card-body">
                                    <div class="title-section text-left">
                                        <a href="event-detail.php"><h5>Cheers Music Weekend</h5></a>
                                        <span class="metaeventstd"><i class="fad fa-calendar-day"></i> 29 Sep 2020 20:00</span> 
                                        <span class="metaeventstd"><i class="fad fa-map-marker-alt"></i> Lap. Brawijaya</span> 
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>

<section id="cheers-promopart">
    <div class="myfullpad">
        <div class="text-left">
            <h3>Promo</h3>
            <hr class="cheers-separator">
        
        </div>
        <div class="row mb-5">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 order-md-2 promo-part">
                <a href="#">
                    <div class="card card-promo">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <div class="cardpromo-img">
                                    <div class="promoicon">
                                        <div id="burst-12"><div><i class="fad fa-percentage"></i></div></div>
                                        
                                    </div>
                                    <img src="{{ asset('public/assets/img/audience.jpg')}}" class="promo-img rounded" alt="...">
                                </div>
                               
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h6 class="card-title">Promo</h6>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 order-md-2 promo-part">
                <a href="#">
                    <div class="card card-promo">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <div class="cardpromo-img">
                                    <div class="promoicon">
                                        <div id="burst-12"><div><i class="fad fa-percentage"></i></div></div>
                                        
                                    </div>
                                    <img src="{{ asset('public/assets/img/audience.jpg')}}" class="promo-img rounded" alt="...">
                                </div>
                               
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h6 class="card-title">Promo</h6>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 order-md-2 promo-part">
                <a href="#">
                    <div class="card card-promo">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <div class="cardpromo-img">
                                    <div class="promoicon">
                                        <div id="burst-12"><div><i class="fad fa-percentage"></i></div></div>
                                        
                                    </div>
                                    <img src="{{ asset('public/assets/img/audience.jpg')}}" class="promo-img rounded" alt="...">
                                </div>
                               
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h6 class="card-title">Promo</h6>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('eventCalendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            headerToolbar: {
                left: 'prev,next title',
                center: '',
                right: 'today dayGridMonth,list'
            },
            // titleFormat: { // will produce something like "Tuesday, September 18, 2018"
            //     month: 'long',
            //     year: 'numeric',
            //     day: 'numeric'
            // },
            themeSystem: 'bootstrap',
            initialView: 'dayGridMonth',
            selectable: true,
            selectConstraint:{
                start: '00:01', 
                end: '23:59',
                allDay: false
            },
            eventConstraint:{
                start: '00:00', 
                end: '24:00', 
                allDay: false
            },
            // dateClick: function(info) {
            //     alert('clicked ' + info.dateStr);
            // },
            // select: function(info) {
            //     alert('selected ' + info.startStr + ' to ' + info.endStr);
            // },
            events: [
                {
                    start: '2020-12-24',
                    end: '2020-12-27',
                    color: '#191919',
                    textColor: '#e1ea2f',
                    title: 'COVID-19'
                },

                {
                    start: '2020-12-22',
                    end: '2020-12-25',
                    title: 'Music Event'
                }
            ],
            
        });
        calendar.render();
    });
</script>
@endsection


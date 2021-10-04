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
                    @foreach ($events as $ev)
                    <div class="card eventstd-card mb-1">
                        <div class="row g-0">
                            <div class="col-3">
                                <img src="{{ $baseurl.$ev['image'] }}" class="card-img rounded">
                            </div>

                            <div class="col-9">
                                <div class="card-body">
                                    <div class="title-section text-left">
                                        <a href="{{ url('event/view/'.$ev['id']) }}"><h5>{{ $ev['name'] }}</h5></a>
                                        <span class="metaeventstd"><i class="fad fa-calendar-day"></i> 
                                            {{ strftime("%d %B %Y", strtotime($ev['startdate'])).' - '.strftime("%d %B %Y", strtotime($ev['enddate'])) }}
                                        </span>
                                        <span class="metaeventstd"><i class="fad fa-map-marker-alt"></i> {{ $ev['lokasi'] }}</span> 
                                        <p>{!! $ev['description'] !!}</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    @endforeach
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
            @foreach ($promos as $pr)
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 order-md-2 promo-part">
                <a type="button" data-bs-toggle="modal" data-bs-target="#promo-modal-{{ $pr['id'] }}">
                    <div class="card card-promo">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <div class="cardpromo-img">
                                    <div class="promoicon">
                                        <div id="burst-12"><div><i class="fad fa-percentage"></i></div></div>
                                    </div>
                                    <img src="{{ $baseurl.$pr['image']}}" class="promo-img rounded" alt="{{ $pr['name'] }}">
                                </div>
                               
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h6 class="card-title">{{ $pr['name'] }}</h6>
                                    <div class="card-text">{!! strip_tags(htmlspecialchars_decode(substr($pr['description'], 0, 250))).'...' !!}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>  
            @endforeach
        </div>
    </div>
</section>

@foreach ($promos as $pr)
<!-- Modal -->
<div class="modal fade" id="promo-modal-{{ $pr['id'] }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">{{ $pr['name'] }}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-4 d-flex ms-auto justify-content-center">
                    <img src="{{ $baseurl.$pr['image'] }}" class="promo-img rounded" style="width: 170px; height: auto;" alt="...">
                </div>
                <div class="col-md-8 ms-auto">
                    <div class="card-text">{!! $pr['description'] !!}</div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
</div>
@endforeach

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var CSRF_TOKEN = "{{ csrf_token() }}";
        var URL = "{{ url('/') }}";

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
            events: {
                type: "GET",
                url: URL+'/api/eventCalendar',
                data: {_token: CSRF_TOKEN},
                dataType: 'json'
            },
        });
        calendar.render();
    });
</script>
@endsection


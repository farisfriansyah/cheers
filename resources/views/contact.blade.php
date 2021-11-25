@extends('layouts.appdef')

@section('content')

<section id="cheers-contact">
    <div class="myfullpad">
        <div class="row g-0">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 contact-rightsection">
                {{-- <img src="{{ asset('public/assets/img/SVG/contact.svg')}}" class="img-fluid">  --}}
                <h3><span style="font-weight: 500;">@lang('contact.chs-titleformsend')</span> @lang('contact.chs-titleformmess')</h3>
                <hr class="cheers-separator">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                    </div>
                @endif
                <div class="send-form">
                    <form method="post" action="{{ url('sendemail/send') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-floating mb-3">
                                    <input type="text" name="firstname" class="form-control" id="chs-firstname"
                                        placeholder="First Name">
                                    <label for="chs-firstname">@lang('contact.cf-firstname')</label>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-floating mb-3">
                                    <input type="text" name="lastname" class="form-control" id="chs-lastname"
                                            placeholder="Last Name">
                                    <label for="chs-lastname">@lang('contact.cf-lastname')</label>
                                </div>
                            </div>
                        </div>
    
                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control" id="chs-email"
                                placeholder="name@example.com">
                            <label for="chs-email">@lang('contact.cf-email')</label>
                        </div>
    
                        <div class="form-floating mb-3">
                            <select class="form-select" name="usertype" id="floatingSelect" aria-label="Floating label select example">
                              <option value="consumer" selected>@lang('contact.cf-usertype-consumer')</option>
                              <option value="horeca">@lang('contact.cf-usertype-horeca')</option>
                              <option value="instansi">@lang('contact.cf-usertype-agency')</option>
                              <option value="distributor">@lang('contact.cf-usertype-distributor')</option>
                              <option value="other">@lang('contact.cf-usertype-other')</option>
                            </select>
                            <label for="floatingSelect">@lang('contact.cf-usertypelabel')</label>
                        </div>
    
                        <div class="form-floating mb-3">
                            <select class="form-select" name="questiontype" id="floatingSelect" aria-label="Floating label select example">
                              <option value="harga" selected>@lang('contact.cf-questiontype-price')</option>
                              <option value="pengiriman">@lang('contact.cf-questiontype-delivery')</option>
                              <option value="berlangganan">@lang('contact.cf-questiontype-subscribe')</option>
                              <option value="distributor">@lang('contact.cf-questiontype-distributor')</option>
                              <option value="dibelidi">@lang('contact.cf-questiontype-pk')</option>
                              <option value="other">@lang('contact.cf-questiontype-other')</option>
                            </select>
                            <label for="floatingSelect">@lang('contact.cf-questiontypelabel')</label>
                        </div>
    
                        <div class="form-floating mb-3">
                            <textarea class="form-control" name="comment" placeholder="Leave a comment here" id="chs-comment"
                                style="height: 100px"></textarea>
                            <label for="chs-comment">@lang('contact.cf-comment')</label>
                        </div>
    
                        <button class="btn btn-danger btn-cheerslight" type="submit">@lang('contact.cf-submit')</button>
                    </form>
                </div>
                
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 contact-leftsection">
                <div class="information-contact">
                    <div class="title-section text-left">
                        <h3><span style="font-weight: 500;">@lang('contact.chs-titlecontact')</span> @lang('contact.chs-titleus')</h3>
                        <hr class="cheers-separator">
                        <p>@lang('contact.chs-subtitle')</p>
                    </div>
                    
                    <div class="contact-info">
                        <div class="infocontact-section">
                            <div class="d-flex">
                                <div class="col-1 text-center">
                                    <i class="fad fa-phone"></i>
                                </div>
                                <div class="col-11">
                                    <h6>@lang('contact.chs-phone')</h6>
                                    <p> 0807 - 1 - CHEERS (243377)</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="infocontact-section">
                            <div class="d-flex">
                                <div class="col-1 text-center">
                                    <i class="fad fa-envelope"></i>
                                </div>
                                <div class="col-11">
                                    <h6>@lang('contact.chs-email')</h6>
                                    <p>info@saycheers.com</p>
                                </div>
                            </div>
                        </div>

                        <div class="infocontact-section">
                            <div class="d-flex">
                                <div class="col-1 text-center">
                                    <i class="fad fa-map-marker-alt"></i>
                                </div>
                                <div class="col-11">
                                    <h6>@lang('contact.chs-location')</h6>
                                    <p>Jl. Raya Surabaya-Malang KM. 52,2 <br> Pandaan 67161 Jawa Timur <br> Indonesia</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <p class="mb-0">@lang('contact.chs-faq')</p>
                        <a href="{{ url('/faq') }}" class="btn btn-danger btn-outcheerslight">FAQ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
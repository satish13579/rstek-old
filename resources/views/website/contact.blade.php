@extends('layouts.web_layout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
@endsection

@section('title', 'Contact Us')

@section('content')
    <div style="margin-bottom:0px;" class="section page-content-section">
        <div class="container">
            <!-- <div class="row">
                                            <div class="col-12">
                                                <div class="body-content">
                                                    <h1 class="rp-page-header-two">Contact <span class="half-page-header">Us</span></h1>
                                                </div>
                                            </div>
                                        </div> -->
            <div class="row rp-form-container">
                <div class="col-md-5 rp-form-color">
                    <h2>Where Vision Meets Execution. <br /><br /><b>Contact Us</b> to Transform <b>Your Ideas</b> into
                        Reality.</h2>
                    <br /><br />
                    <div class="info-wrap">
                        <div class="dbox w-100 d-flex align-items-start">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="bx bx-map"></span>
                            </div>
                            <div class="text pl-3">
                                <p>1309, Coffeen Avenue<br />
                                    STE 12705 Sheridan<br />
                                    WY 82801<br><br>
                                </p>
                            </div>
                        </div>
                        {{-- <div class="dbox w-100 d-flex align-items-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="bx bx-phone"></span>
                            </div>
                            <div class="text pl-3">
                                <p><a class="text-white" href="tel://1234567920">+ 1235 2355 98</a></p>
                            </div>
                        </div> --}}
                        <div class="dbox w-100 d-flex align-items-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="bx bx-envelope"></span>
                            </div>
                            <div class="text pl-3">
                                <p><a class="text-white"
                                        href="mailto:operations@rsteksolutions.com">consulting@rsteksolutions.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <h3 class="text-center">Get in touch</h3>
                    <br /><br />
                    <form
                        onsubmit="sub_btn.innerHTML=`Please Wait <span class='spinner-grow spinner-grow-sm' role='status' aria-hidden='true'></span>`"
                        method="POST" action="{{ route('website.contact.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6">
                                <input type="text" name="full_name" value="{{ old('full_name') }}"
                                    placeholder="Your Full Name *" class="form-control shadow-none" required>
                                @error('full_name')
                                    <div class="text-danger pl-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" value="{{ old('email') }}"
                                    placeholder="Your Email Address *" class="form-control shadow-none" required>
                                @error('email')
                                    <div class="text-danger pl-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12">
                                <input type="text" name="company" value="{{ old('company') }}" placeholder="Your Company"
                                    class="form-control shadow-none">
                                @error('company')
                                    <div class="text-danger pl-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <input type="text" name="title" value="{{ old('title') }}" placeholder="Your Title"
                                    class="form-control shadow-none">
                                @error('title')
                                    <div class="text-danger pl-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input type="tel" name="phone_number" value="{{ old('phone_number') }}"
                                    placeholder="Your Phone Number" class="form-control shadow-none">
                                @error('phone_number')
                                    <div class="text-danger pl-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <p
                            style="font-weight:700;text-align: start;padding:.375rem .75rem;margin-bottom:8px;color:#666666b5;">
                            Interested Service *</p>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="">

                                    <label class="checkbox-wrap-container">
                                        <input type="checkbox" name="interested_services[]" value="Test Solutions"
                                            {{ in_array('Test Solutions', old('interested_services', [])) ? 'checked' : '' }}>Test
                                        Solutions
                                        <div class="checkmark-custom"></div>
                                    </label>
                                    <label class="checkbox-wrap-container">
                                        <input type="checkbox" name="interested_services[]" value="Talent Hiring"
                                            {{ in_array('Talent Hiring', old('interested_services', [])) ? 'checked' : '' }}>Talent
                                        Hiring<br>
                                        <div class="checkmark-custom"></div>
                                    </label>
                                    <label class="checkbox-wrap-container">
                                        <input type="checkbox" name="interested_services[]" value="Market your Product"
                                            {{ in_array('Market your Product', old('interested_services', [])) ? 'checked' : '' }}>Market
                                        your Product<br>
                                        <div class="checkmark-custom"></div>
                                    </label>
                                </div>

                                {{-- <div class="select">
                                <div class="form-holder">
                                    <div class="select-control">Interested Service *</div>
                                    <input type="hidden" class="select-control" name="interested_service" value="">
                                    <i class="bx bx-chevron-down"></i>
                                </div>
                                <ul class="dropdown">
                                    <li rel="Test Solutions">Test Solutions</li>
                                    <li rel="Talent Hiring">Talent Hiring</li>
                                    <li rel="Market your Product">Market your Product</li>
                                    <li rel="QA Magazine contribution">QA Magazine contribution</li>
                                    <li rel="Online courses/QA Training">Online courses/QA Training</li>
                                    <li rel="Others">Others</li>
                                </ul>
                            </div> --}}


                            </div>
                            <div class="col-md-6">
                                <label class="checkbox-wrap-container">
                                    <input type="checkbox" name="interested_services[]" value="QA Magazine contribution"
                                        {{ in_array('QA Magazine contribution', old('interested_services', [])) ? 'checked' : '' }}>QA
                                    Magazine contribution<br>
                                    <div class="checkmark-custom"></div>
                                </label>
                                <label class="checkbox-wrap-container">
                                    <input type="checkbox" name="interested_services[]" value="Online courses/QA Training"
                                        {{ in_array('Online courses/QA Training', old('interested_services', [])) ? 'checked' : '' }}>Online
                                    courses/QA Training<br>
                                    <div class="checkmark-custom"></div>
                                </label>
                                <label class="checkbox-wrap-container">
                                    <input class="form-control" type="checkbox" name="interested_services[]"
                                        value="Others"
                                        {{ in_array('Others', old('interested_services', [])) ? 'checked' : '' }}>Others<br>
                                    <div class="checkmark-custom"></div>
                                </label>
                            </div>
                            @error('interested_services')
                                <div class="text-danger pl-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-row">
                            <div class="col-md-12">
                                <textarea name="attachment_link" placeholder="Document/Files Cloud Link, if any (Eg: Google drive, Dropbox etc.)"
                                    class="form-control shadow-none" style="height: 80px;">{{ old('attachment_link') }}</textarea>
                                @error('attachment_link')
                                    <div class="text-danger pl-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12">
                                <textarea name="message" placeholder="Your Message *" class="form-control shadow-none" style="height: 99px;"
                                    required>{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="text-danger pl-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <!-- Google Recaptcha -->
                        <div style="width: 304px; height: 78px;" class="g-recaptcha mt-4"  data-sitekey={{ config('services.recaptcha.key') }}></div>
                        @if (session('gcaptcha'))
                            <div class="text-danger mt-2">
                                {{ session('gcaptcha') }}
                            </div>
                        @endif
                        <p class="rp-para-one">
                            <span class="rp-custom-btn-container">
                                <button style="display: flex;align-items:center;gap:10px;" type="submit" name="sub_btn"
                                    class="btn btn-rp-grad">Submit</button>
                            </span>
                        </p>
                    </form>
                    <br /><br />
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                </div>
            </div>
            <br id="scrollele" />
        </div>
    @endsection

    @section('scripts')
        <script>
            $('html').click(function() {
                $('.select .dropdown').hide();
            });
            $('.select').click(function(event) {
                event.stopPropagation();
            });
            $('.select .select-control').click(function() {
                $(this).parent().next().toggle();
            })
            $('.select .dropdown li').click(function() {
                $(this).parent().toggle();
                var text = $(this).attr('rel');
                $(this).parent().prev().find('div').text(text);
                $(this).parent().prev().find('input').val(text);
            })

            document.addEventListener('DOMContentLoaded', function() {
                // Scroll to the first error if there are any
                var firstError = document.querySelector('.text-danger.pl-1');
                if (firstError) {
                    firstError.scrollIntoView({
                        behavior: 'smooth',
                        block: 'center'
                    });
                }

                var firstError = document.querySelector('.text-danger.mt-2');
                if (firstError) {
                    firstError.scrollIntoView({
                        behavior: 'smooth',
                        block: 'center'
                    });
                }

                var successMessage = document.querySelector('.alert.alert-success');
                if (successMessage) {
                    var scrollele = document.getElementById('scrollele');
                    scrollele.scrollIntoView({
                        behavior: 'smooth',
                        block: 'end'
                    })
                }
            });
        </script>
    @endsection

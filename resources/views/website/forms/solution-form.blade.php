@extends('layouts.web_layout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
@endsection

@section('title', 'Solution Form')

@section('content')
    <div style="margin-bottom:0px;" class="section page-content-section">
        <div class="container">
            <div class="row rp-form-container">
                <div class="col-md-12">
                    <h3 class="text-center">Fill in your details and get started</h3>
                    <p>Where quality is the destination, thorough testing is the journey.</p>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <form
                                onsubmit="sub_btn.innerHTML=`Please Wait <span class='spinner-grow spinner-grow-sm' role='status' aria-hidden='true'></span>`"
                                method="POST" action="{{ route('website.forms.save-solution-form') }}"
                                enctype="multipart/form-data">
                                @csrf

                                {{-- <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="select">
                                            <div class="form-holder">
                                                <div class="select-control">Select Test Solutions *</div>
                                                <input type="hidden" class="select-control" id="interested_service"
                                                    name="interested_service" value="">
                                                <i class="bx bx-chevron-down"></i>
                                            </div>
                                            <ul class="dropdown">
                                                <li rel="UI Testing">UI Testing</li>
                                                <li rel="API Testing">API Testing</li>
                                                <li rel="Mobile Testing">Mobile Testing</li>
                                                <li rel="Performance testing">Performance testing</li>
                                                <li rel="Test planning/Test strategy">Test planning/Test strategy</li>
                                                <li rel="Others">Others</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div id="preloader-row" class="form-row">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        style="margin:auto;background:#fff;display:block;" width="118px" height="118px"
                                        viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                                        <circle cx="76" cy="50" fill="#f8760c" r="5">
                                            <animate attributeName="r" values="3;3;5;3;3" times="0;0.1;0.2;0.3;1"
                                                dur="1.8518518518518516s" repeatCount="indefinite"
                                                begin="-1.6975308641975309s"></animate>
                                            <animate attributeName="fill" values="#f8760c;#f8760c;#e60b42;#f8760c;#f8760c"
                                                repeatCount="indefinite" times="0;0.1;0.2;0.3;1" dur="1.8518518518518516s"
                                                begin="-1.6975308641975309s"></animate>
                                        </circle>
                                        <circle cx="72.51666049839541" cy="63" fill="#f8760c" r="5">
                                            <animate attributeName="r" values="3;3;5;3;3" times="0;0.1;0.2;0.3;1"
                                                dur="1.8518518518518516s" repeatCount="indefinite"
                                                begin="-1.5432098765432098s"></animate>
                                            <animate attributeName="fill" values="#f8760c;#f8760c;#e60b42;#f8760c;#f8760c"
                                                repeatCount="indefinite" times="0;0.1;0.2;0.3;1" dur="1.8518518518518516s"
                                                begin="-1.5432098765432098s"></animate>
                                        </circle>
                                        <circle cx="63" cy="72.5166604983954" fill="#f8760c" r="5">
                                            <animate attributeName="r" values="3;3;5;3;3" times="0;0.1;0.2;0.3;1"
                                                dur="1.8518518518518516s" repeatCount="indefinite"
                                                begin="-1.3888888888888888s"></animate>
                                            <animate attributeName="fill" values="#f8760c;#f8760c;#e60b42;#f8760c;#f8760c"
                                                repeatCount="indefinite" times="0;0.1;0.2;0.3;1" dur="1.8518518518518516s"
                                                begin="-1.3888888888888888s"></animate>
                                        </circle>
                                        <circle cx="50" cy="76" fill="#f8760c" r="5">
                                            <animate attributeName="r" values="3;3;5;3;3" times="0;0.1;0.2;0.3;1"
                                                dur="1.8518518518518516s" repeatCount="indefinite"
                                                begin="-1.2345679012345678s"></animate>
                                            <animate attributeName="fill" values="#f8760c;#f8760c;#e60b42;#f8760c;#f8760c"
                                                repeatCount="indefinite" times="0;0.1;0.2;0.3;1" dur="1.8518518518518516s"
                                                begin="-1.2345679012345678s"></animate>
                                        </circle>
                                        <circle cx="37.00000000000001" cy="72.51666049839541" fill="#f8760c" r="5">
                                            <animate attributeName="r" values="3;3;5;3;3" times="0;0.1;0.2;0.3;1"
                                                dur="1.8518518518518516s" repeatCount="indefinite"
                                                begin="-1.0802469135802468s"></animate>
                                            <animate attributeName="fill" values="#f8760c;#f8760c;#e60b42;#f8760c;#f8760c"
                                                repeatCount="indefinite" times="0;0.1;0.2;0.3;1"
                                                dur="1.8518518518518516s" begin="-1.0802469135802468s"></animate>
                                        </circle>
                                        <circle cx="27.483339501604593" cy="63" fill="#f8760c" r="5">
                                            <animate attributeName="r" values="3;3;5;3;3" times="0;0.1;0.2;0.3;1"
                                                dur="1.8518518518518516s" repeatCount="indefinite"
                                                begin="-0.9259259259259258s"></animate>
                                            <animate attributeName="fill" values="#f8760c;#f8760c;#e60b42;#f8760c;#f8760c"
                                                repeatCount="indefinite" times="0;0.1;0.2;0.3;1"
                                                dur="1.8518518518518516s" begin="-0.9259259259259258s"></animate>
                                        </circle>
                                        <circle cx="24" cy="50" fill="#f8760c" r="5">
                                            <animate attributeName="r" values="3;3;5;3;3" times="0;0.1;0.2;0.3;1"
                                                dur="1.8518518518518516s" repeatCount="indefinite"
                                                begin="-0.7716049382716049s"></animate>
                                            <animate attributeName="fill" values="#f8760c;#f8760c;#e60b42;#f8760c;#f8760c"
                                                repeatCount="indefinite" times="0;0.1;0.2;0.3;1"
                                                dur="1.8518518518518516s" begin="-0.7716049382716049s"></animate>
                                        </circle>
                                        <circle cx="27.48333950160459" cy="37.00000000000001" fill="#f8760c" r="5">
                                            <animate attributeName="r" values="3;3;5;3;3" times="0;0.1;0.2;0.3;1"
                                                dur="1.8518518518518516s" repeatCount="indefinite"
                                                begin="-0.6172839506172839s"></animate>
                                            <animate attributeName="fill" values="#f8760c;#f8760c;#e60b42;#f8760c;#f8760c"
                                                repeatCount="indefinite" times="0;0.1;0.2;0.3;1"
                                                dur="1.8518518518518516s" begin="-0.6172839506172839s"></animate>
                                        </circle>
                                        <circle cx="36.999999999999986" cy="27.483339501604604" fill="#f8760c" r="5">
                                            <animate attributeName="r" values="3;3;5;3;3" times="0;0.1;0.2;0.3;1"
                                                dur="1.8518518518518516s" repeatCount="indefinite"
                                                begin="-0.4629629629629629s"></animate>
                                            <animate attributeName="fill" values="#f8760c;#f8760c;#e60b42;#f8760c;#f8760c"
                                                repeatCount="indefinite" times="0;0.1;0.2;0.3;1"
                                                dur="1.8518518518518516s" begin="-0.4629629629629629s"></animate>
                                        </circle>
                                        <circle cx="49.99999999999999" cy="24" fill="#f8760c" r="5">
                                            <animate attributeName="r" values="3;3;5;3;3" times="0;0.1;0.2;0.3;1"
                                                dur="1.8518518518518516s" repeatCount="indefinite"
                                                begin="-0.30864197530864196s"></animate>
                                            <animate attributeName="fill" values="#f8760c;#f8760c;#e60b42;#f8760c;#f8760c"
                                                repeatCount="indefinite" times="0;0.1;0.2;0.3;1"
                                                dur="1.8518518518518516s" begin="-0.30864197530864196s"></animate>
                                        </circle>
                                        <circle cx="63" cy="27.483339501604597" fill="#f8760c" r="5">
                                            <animate attributeName="r" values="3;3;5;3;3" times="0;0.1;0.2;0.3;1"
                                                dur="1.8518518518518516s" repeatCount="indefinite"
                                                begin="-0.15432098765432098s"></animate>
                                            <animate attributeName="fill" values="#f8760c;#f8760c;#e60b42;#f8760c;#f8760c"
                                                repeatCount="indefinite" times="0;0.1;0.2;0.3;1"
                                                dur="1.8518518518518516s" begin="-0.15432098765432098s"></animate>
                                        </circle>
                                        <circle cx="72.5166604983954" cy="36.999999999999986" fill="#f8760c" r="5">
                                            <animate attributeName="r" values="3;3;5;3;3" times="0;0.1;0.2;0.3;1"
                                                dur="1.8518518518518516s" repeatCount="indefinite" begin="0s">
                                            </animate>
                                            <animate attributeName="fill" values="#f8760c;#f8760c;#e60b42;#f8760c;#f8760c"
                                                repeatCount="indefinite" times="0;0.1;0.2;0.3;1"
                                                dur="1.8518518518518516s" begin="0s"></animate>
                                        </circle>
                                    </svg>
                                </div> --}}

                                <div id="rp-main-form" class="rp-hidden-form d-block">
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
                                                placeholder="Your Email Address *" class="form-control shadow-none"
                                                required>
                                            @error('email')
                                                <div class="text-danger pl-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <input type="text" name="company" value="{{ old('company') }}"
                                                placeholder="Your Company *" class="form-control shadow-none" required>
                                            @error('company')
                                                <div class="text-danger pl-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <input type="text" name="title" value="{{ old('title') }}"
                                                placeholder="Your Title *" class="form-control shadow-none" required>
                                            @error('title')
                                                <div class="text-danger pl-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <input type="tel" name="phone_number" value="{{ old('phone_number') }}"
                                                placeholder="Your Phone Number *" class="form-control shadow-none" required>
                                            @error('phone_number')
                                                <div class="text-danger pl-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <p
                                        style="font-weight:700;text-align: start;padding:.375rem .75rem;margin-bottom:8px;color:#666666b5;">
                                        Select Test Solutions *</p>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <label class="checkbox-wrap-container">
                                                <input type="checkbox" name="selected_services[]" value="UI Testing"
                                                    {{ in_array('UI Testing', old('selected_services', [])) ? 'checked' : '' }}>UI
                                                Testing
                                                <div class="checkmark-custom"></div>
                                            </label>
                                            <label class="checkbox-wrap-container">
                                                <input type="checkbox" name="selected_services[]" value="API Testing"
                                                    {{ in_array('API Testing', old('selected_services', [])) ? 'checked' : '' }}>API
                                                Testing
                                                <div class="checkmark-custom"></div>
                                            </label>
                                            <label class="checkbox-wrap-container">
                                                <input type="checkbox" name="selected_services[]" value="Mobile Testing"
                                                    {{ in_array('Mobile Testing', old('selected_services', [])) ? 'checked' : '' }}>Mobile
                                                Testing
                                                <div class="checkmark-custom"></div>
                                            </label>
                                            <label class="checkbox-wrap-container">
                                                <input type="checkbox" name="selected_services[]"
                                                    value="Performance testing"
                                                    {{ in_array('Performance testing', old('selected_services', [])) ? 'checked' : '' }}>Performance
                                                testing
                                                <div class="checkmark-custom"></div>
                                            </label>
                                        </div>
                                        <div style="padding-left:0px!important;" class="col-md-6">
                                            <label class="checkbox-wrap-container">
                                                <input type="checkbox" name="selected_services[]"
                                                    value="Test planning/Test strategy"
                                                    {{ in_array('Test planning/Test strategy', old('selected_services', [])) ? 'checked' : '' }}>Test
                                                planning/Test strategy
                                                <div class="checkmark-custom"></div>
                                            </label>
                                            <label class="checkbox-wrap-container">
                                                <input type="checkbox" name="selected_services[]"
                                                    value="End to end (Full Stack) Automation Solutions"
                                                    {{ in_array('End to end (Full Stack) Automation Solutions', old('selected_services', [])) ? 'checked' : '' }}>End
                                                to end (Full Stack) Automation Solutions
                                                <div class="checkmark-custom"></div>
                                            </label>
                                            <label class="checkbox-wrap-container">
                                                <input id="others-select" class="form-control" type="checkbox" name="selected_services[]"
                                                    value="Others"
                                                    {{ in_array('Others', old('selected_services', [])) ? 'checked' : '' }}>Others<br>
                                                <div class="checkmark-custom"></div>
                                            </label>
                                        </div>
                                        @error('selected_services')
                                            <div class="text-danger pl-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div style="margin-block: 20px!important;" id="other-text-container" class="rp-hidden-form">
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <input id="other_text" type="text" name="other_text"
                                                    value="{{ old('other_text') }}" placeholder="Specify if any other *"
                                                    class="form-control shadow-none">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <textarea name="project_description" placeholder="Project Description *" class="form-control shadow-none"
                                            rows="5" required>{{ old('project_description') }}</textarea>
                                        @error('project_description')
                                            <div class="text-danger pl-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <input type="text" name="estimated_timeline" value="{{ old('estimated_timeline') }}"
                                                placeholder="Estimated Timeline *" class="form-control shadow-none"
                                                required>
                                            @error('estimated_timeline')
                                                <div class="text-danger pl-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="company_size" value="{{ old('company_size') }}" placeholder="Company Size *"
                                                class="form-control shadow-none" required>
                                            @error('company_size')
                                                <div class="text-danger pl-1">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <textarea name="additional_comments" value="{{ old('additional_comments') }}" placeholder="Additional Comments" class="form-control shadow-none"
                                            rows="3"></textarea>
                                        @error('additional_comments')
                                            <div class="text-danger pl-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <p style="margin-bottom: 0px;" id="submit-btn-container" class="rp-para-one">
                                        <span class="rp-custom-btn-container">
                                            <button style="display: flex;align-items:center;gap:10px;" name="sub_btn" id="submitBtn" type="submit" class="btn btn-rp-grad">Submit</button>
                                        </span>
                                    </p>
                                </div>
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
                        <div class="col-md-2"></div>
                    </div>
                </div>
            </div>
            <br />
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

                $('#other-text-container').hide();
                $('#rp-main-form').hide();
                $('#submit-btn-container').hide();

                $("#preloader-row").show();

                setTimeout(() => {
                    $("#preloader-row").hide();
                    $('#rp-main-form').show();
                    $('#submit-btn-container').show();
                    if (text == 'Others') {
                        $('#other-text-container').show();
                    } else {
                        $('#other-text-container').hide();
                    }
                }, 2000);
            });

            $('#solutionPageForm').submit(function(e) {
                e.preventDefault();
                var form = $(this);
                var url = "{{ route('website.forms.save-solution-form') }}";
                var data = form.serialize();
                var btn = $('#submitBtn');
                btn.prop('disabled', true);
                btn.html('Please wait...');

                $.ajax({
                    type: 'POST',
                    url: url,
                    data: data,
                    dataType: 'json',
                    headers: {
                        'Accept': 'application/json'
                    },
                    success: function(response) {
                        btn.prop('disabled', false);
                        btn.html('Submit');
                        console.log(response);
                        if (response.success) {
                            form[0].reset();
                            $('#alertMsg').html('<div class="alert alert-success">' + response.success +
                                '</div>');
                        } else {
                            $('#alertMsg').html('<div class="alert alert-danger">' + response.success +
                                '</div>');
                        }
                    },
                    error: function(error) {
                        btn.prop('disabled', false);
                        btn.html('Submit');
                        alert('An error occurred. Please try again later.');
                    }
                });
            });

            document.addEventListener('DOMContentLoaded', function() {
                // Scroll to the first error if there are any
                var firstError = document.querySelector('.text-danger.pl-1');
                if (firstError) {
                    firstError.scrollIntoView({
                        behavior: 'smooth',
                        block: 'center'
                    });
                }

                var successMessage = document.querySelector('.alert.alert-success');
                if (successMessage) {
                    successMessage.scrollIntoView({
                        behavior: 'smooth',
                        block: 'end'
                    })
                }

                $("#others-select").on('change',function(e){
                    if(e.target.checked){
                        $('#other-text-container').show();
                        $('#other_text').prop('required', true);
                    }else{
                        $('#other-text-container').hide();
                        $('#other_text').prop('required', false);
                    }
                })
            });
        </script>
    @endsection

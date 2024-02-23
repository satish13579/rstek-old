@extends('layouts.web_layout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
@endsection

@section('title', 'Hiring Form')

@section('content')
    <div class="section page-content-section">
        <div class="container">
            <div class="row rp-form-container">
            <div class="col-md-12">
                <h3 class="text-center">Fill in your details and get started</h3>
                <p>We don't just hire testers; we invest in architects of assurance.</p>
                <br/><br/>

                <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                <form id="hiringPageForm" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="form-row">                     
                        <div class="col-md-12">
                            <div class="select">
                                <div class="form-holder">
                                    <div class="select-control">Select testing type *</div>
                                    <input type="hidden" class="select-control" id="testing_type" name="testing_type" value="">
                                    <i class="bx bx-chevron-down"></i>
                                </div>
                                <ul class="dropdown">
                                    <li rel="Functional Testing">Functional Testing</li>
                                    <li rel="Function automation">Function automation (Full stack - UI+API)</li>
                                    <li rel="Performance testing">Performance testing</li>
                                    <li rel="Security testing">Security testing</li>
                                    <li rel="Mobile testing">Mobile testing</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div id="preloader-row" class="form-row">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin:auto;background:#fff;display:block;" width="118px" height="118px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                        <circle cx="76" cy="50" fill="#f8760c" r="5">
                        <animate attributeName="r" values="3;3;5;3;3" times="0;0.1;0.2;0.3;1" dur="1.8518518518518516s" repeatCount="indefinite" begin="-1.6975308641975309s"></animate>
                        <animate attributeName="fill" values="#f8760c;#f8760c;#e60b42;#f8760c;#f8760c" repeatCount="indefinite" times="0;0.1;0.2;0.3;1" dur="1.8518518518518516s" begin="-1.6975308641975309s"></animate>
                        </circle><circle cx="72.51666049839541" cy="63" fill="#f8760c" r="5">
                        <animate attributeName="r" values="3;3;5;3;3" times="0;0.1;0.2;0.3;1" dur="1.8518518518518516s" repeatCount="indefinite" begin="-1.5432098765432098s"></animate>
                        <animate attributeName="fill" values="#f8760c;#f8760c;#e60b42;#f8760c;#f8760c" repeatCount="indefinite" times="0;0.1;0.2;0.3;1" dur="1.8518518518518516s" begin="-1.5432098765432098s"></animate>
                        </circle><circle cx="63" cy="72.5166604983954" fill="#f8760c" r="5">
                        <animate attributeName="r" values="3;3;5;3;3" times="0;0.1;0.2;0.3;1" dur="1.8518518518518516s" repeatCount="indefinite" begin="-1.3888888888888888s"></animate>
                        <animate attributeName="fill" values="#f8760c;#f8760c;#e60b42;#f8760c;#f8760c" repeatCount="indefinite" times="0;0.1;0.2;0.3;1" dur="1.8518518518518516s" begin="-1.3888888888888888s"></animate>
                        </circle><circle cx="50" cy="76" fill="#f8760c" r="5">
                        <animate attributeName="r" values="3;3;5;3;3" times="0;0.1;0.2;0.3;1" dur="1.8518518518518516s" repeatCount="indefinite" begin="-1.2345679012345678s"></animate>
                        <animate attributeName="fill" values="#f8760c;#f8760c;#e60b42;#f8760c;#f8760c" repeatCount="indefinite" times="0;0.1;0.2;0.3;1" dur="1.8518518518518516s" begin="-1.2345679012345678s"></animate>
                        </circle><circle cx="37.00000000000001" cy="72.51666049839541" fill="#f8760c" r="5">
                        <animate attributeName="r" values="3;3;5;3;3" times="0;0.1;0.2;0.3;1" dur="1.8518518518518516s" repeatCount="indefinite" begin="-1.0802469135802468s"></animate>
                        <animate attributeName="fill" values="#f8760c;#f8760c;#e60b42;#f8760c;#f8760c" repeatCount="indefinite" times="0;0.1;0.2;0.3;1" dur="1.8518518518518516s" begin="-1.0802469135802468s"></animate>
                        </circle><circle cx="27.483339501604593" cy="63" fill="#f8760c" r="5">
                        <animate attributeName="r" values="3;3;5;3;3" times="0;0.1;0.2;0.3;1" dur="1.8518518518518516s" repeatCount="indefinite" begin="-0.9259259259259258s"></animate>
                        <animate attributeName="fill" values="#f8760c;#f8760c;#e60b42;#f8760c;#f8760c" repeatCount="indefinite" times="0;0.1;0.2;0.3;1" dur="1.8518518518518516s" begin="-0.9259259259259258s"></animate>
                        </circle><circle cx="24" cy="50" fill="#f8760c" r="5">
                        <animate attributeName="r" values="3;3;5;3;3" times="0;0.1;0.2;0.3;1" dur="1.8518518518518516s" repeatCount="indefinite" begin="-0.7716049382716049s"></animate>
                        <animate attributeName="fill" values="#f8760c;#f8760c;#e60b42;#f8760c;#f8760c" repeatCount="indefinite" times="0;0.1;0.2;0.3;1" dur="1.8518518518518516s" begin="-0.7716049382716049s"></animate>
                        </circle><circle cx="27.48333950160459" cy="37.00000000000001" fill="#f8760c" r="5">
                        <animate attributeName="r" values="3;3;5;3;3" times="0;0.1;0.2;0.3;1" dur="1.8518518518518516s" repeatCount="indefinite" begin="-0.6172839506172839s"></animate>
                        <animate attributeName="fill" values="#f8760c;#f8760c;#e60b42;#f8760c;#f8760c" repeatCount="indefinite" times="0;0.1;0.2;0.3;1" dur="1.8518518518518516s" begin="-0.6172839506172839s"></animate>
                        </circle><circle cx="36.999999999999986" cy="27.483339501604604" fill="#f8760c" r="5">
                        <animate attributeName="r" values="3;3;5;3;3" times="0;0.1;0.2;0.3;1" dur="1.8518518518518516s" repeatCount="indefinite" begin="-0.4629629629629629s"></animate>
                        <animate attributeName="fill" values="#f8760c;#f8760c;#e60b42;#f8760c;#f8760c" repeatCount="indefinite" times="0;0.1;0.2;0.3;1" dur="1.8518518518518516s" begin="-0.4629629629629629s"></animate>
                        </circle><circle cx="49.99999999999999" cy="24" fill="#f8760c" r="5">
                        <animate attributeName="r" values="3;3;5;3;3" times="0;0.1;0.2;0.3;1" dur="1.8518518518518516s" repeatCount="indefinite" begin="-0.30864197530864196s"></animate>
                        <animate attributeName="fill" values="#f8760c;#f8760c;#e60b42;#f8760c;#f8760c" repeatCount="indefinite" times="0;0.1;0.2;0.3;1" dur="1.8518518518518516s" begin="-0.30864197530864196s"></animate>
                        </circle><circle cx="63" cy="27.483339501604597" fill="#f8760c" r="5">
                        <animate attributeName="r" values="3;3;5;3;3" times="0;0.1;0.2;0.3;1" dur="1.8518518518518516s" repeatCount="indefinite" begin="-0.15432098765432098s"></animate>
                        <animate attributeName="fill" values="#f8760c;#f8760c;#e60b42;#f8760c;#f8760c" repeatCount="indefinite" times="0;0.1;0.2;0.3;1" dur="1.8518518518518516s" begin="-0.15432098765432098s"></animate>
                        </circle><circle cx="72.5166604983954" cy="36.999999999999986" fill="#f8760c" r="5">
                        <animate attributeName="r" values="3;3;5;3;3" times="0;0.1;0.2;0.3;1" dur="1.8518518518518516s" repeatCount="indefinite" begin="0s"></animate>
                        <animate attributeName="fill" values="#f8760c;#f8760c;#e60b42;#f8760c;#f8760c" repeatCount="indefinite" times="0;0.1;0.2;0.3;1" dur="1.8518518518518516s" begin="0s"></animate>
                        </circle>
                        </svg>
                    </div>

                    <div id="other-text-container" class="rp-hidden-form">
                        <div class="form-row">
                            <div class="col-md-12">
                                <input type="text" name="other_text" placeholder="Specify if any other" class="form-control shadow-none">
                            </div>
                        </div>
                    </div>

                    <div id="rp-main-form" class="rp-hidden-form">
                        <div class="form-row">                     
                            <div class="col-md-12">
                                <div class="select">
                                    <div class="form-holder">
                                        <div class="select-control"> Select tool you're expertise in</div>
                                        <input type="hidden" class="select-control" id="tool_expertise" name="tool_expertise" value="">
                                        <i class="bx bx-chevron-down"></i>
                                    </div>
                                    <ul class="dropdown">
                                        <li rel="Selenium">Selenium</li>
                                        <li rel="Cypress">Cypress</li>
                                        <li rel="Playright">Playright</li>
                                        <li rel="RestAssured">RestAssured</li>
                                        <li rel="JMeter">JMeter</li>
                                        <li rel="Appium">Appium</li>
                                        <li rel="WebDriverIO">WebDriverIO</li>
                                        <li rel="others">others</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <div id="hidden_other_tools" class="form-row" style="display:none">
                        <div class="col-md-12">
                            <input type="text" name="other_tools" placeholder="Specify other tools" class="form-control shadow-none">
                            <div id="other_tools_error" class="text-danger"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12">
                            <input type="text" name="experience" placeholder="Your experience (eg: 3+ years)" class="form-control shadow-none">
                            <div id="experience_error" class="text-danger"></div>
                        </div>
                    </div>
                    <div class="form-row">                     
                        <div class="col-md-12">
                            <div class="select">
                                <div class="form-holder">
                                    <div class="checkbox-tick text-center">
                                        <p>Is it managerial position</p>
                                        <label class="male">
                                            <input type="radio" name="managerial_position" value="yes"> Yes<br>
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="female">
                                            <input type="radio" name="managerial_position" value="no"> No<br>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">                     
                        <div class="col-md-12">
                            <div class="select">
                                <div class="form-holder">
                                    <div class="checkbox-tick text-center">
                                        <p>Work Type</p>
                                        <label class="male">
                                            <input type="radio" name="location_type" value="Remote"> Remote<br>
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="male">
                                            <input type="radio" name="location_type" value="Hybrid"> Hybrid<br>
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="female">
                                            <input type="radio" name="location_type" value="Office"> Office<br>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="hidden_other_location" class="form-row" style="display:none">
                        <div class="col-md-12">
                            <input type="text" name="location" placeholder="Location" class="form-control shadow-none">
                            <div id="location_error" class="text-danger"></div>
                        </div>
                    </div>
                    <div class="form-group">
                            <textarea name="job_description" placeholder="Job Description Link (if available online)" class="form-control shadow-none" rows="5"></textarea>
                            <div id="job_description_error" class="text-danger"></div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <input type="text" name="full_name" placeholder="Your Full Name *" class="form-control shadow-none" required>
                                <div id="full_name_error" class="text-danger"></div>
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" placeholder="Your Email Address *" class="form-control shadow-none" required>
                                <div id="email_error" class="text-danger"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12">
                                <input type="text" name="company" placeholder="Your Company" class="form-control shadow-none">
                                <div id="company_error" class="text-danger"></div>
                            </div>
                        </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <input type="text" name="title" placeholder="Job Title" class="form-control shadow-none">
                            <div id="title_error" class="text-danger"></div>
                        </div>
                        <div class="col-md-6">
                            <input type="tel" name="phone_number" placeholder="Your Phone Number" class="form-control shadow-none">
                            <div id="phone_number_error" class="text-danger"></div>
                        </div>
                    </div>
                    </div>

                    <br/><br/>
                    <p id="submit-btn-container" class="rp-para-one">
                        <span class="rp-custom-btn-container">
                            <button id="submitBtn" type="submit" class="btn btn-rp-grad">Submit</button>
                        </span>
                    </p>
                </form>
                <div id="alertMsg"></div>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                </div>
                <div class="col-md-2"></div>
                </div>
            </div>
        </div>
        <br/>
    </div>
@endsection

@section('scripts')
<script>
    $('html').click(function() {
        $('.select .dropdown').hide();
    });
    $('.select').click(function(event){
        event.stopPropagation();
    });
    $('.select .select-control').click(function(){
        $(this).parent().next().toggle();
    })
    $('.select .dropdown li').click(function(){
        $(this).parent().toggle();
        var text = $(this).attr('rel');
        $(this).parent().prev().find('div').text(text);
        $(this).parent().prev().find('input').val(text);

        const id = $(this).parent().prev().find('input').attr('id');

        if(id == 'testing_type') {
            $('#submit-btn-container').hide();
            $("#preloader-row").show();
            $('#rp-main-form').hide();

            setTimeout(() => {
                $("#preloader-row").hide();
                $('#rp-main-form').show();
                $('#submit-btn-container').show();
            }, 2000);
        } else if(id == 'tool_expertise') {
            if(text == 'others') {
                $('#hidden_other_tools').show();
            } else {
                $('#hidden_other_tools').hide();
            }
        }
    });
    
    $('input[name="location_type"]').click(function() {
        if($(this).val() == 'Remote') {
            $('#hidden_other_location').hide();
        } else {
            $('#hidden_other_location').show();
        }
    });

    $('#hiringPageForm').submit(function(e) {
        e.preventDefault();
        var form = $(this);
        var url = "{{ route('website.forms.save-hiring-form') }}";
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
                if(response.success) {
                    form[0].reset();
                    $('#alertMsg').html('<div class="alert alert-success">'+response.success+'</div>');
                } else {
                    $('#alertMsg').html('<div class="alert alert-danger">'+response.success+'</div>');
                }
            },
            error: function(error) {
                btn.prop('disabled', false);
                btn.html('Submit');
                alert('An error occurred. Please try again later.');
            }
        });
    });
</script>
@endsection

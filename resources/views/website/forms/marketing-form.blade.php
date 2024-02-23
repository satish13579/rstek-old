@extends('layouts.web_layout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
@endsection

@section('title', 'Marketing Form')

@section('content')
    <div class="section page-content-section">
        <div class="container">
            <div class="row rp-form-container">
            <div class="col-md-12">
                <h3 class="text-center">Fill in your details and get started</h3>
                <p>Where quality is the destination, thorough testing is the journey.</p>
                <br/><br/>
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

                <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                <form id="marketingPageForm" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="form-row">                     
                        <div class="col-md-12">
                            <div class="select">
                                <div class="form-holder">
                                    <div class="checkbox-tick text-center">
                                        <p>Select an option</p>
                                        <label class="male">
                                            <input type="radio" name="marketing_type" value="market_yourself"> Promote myself<br>
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="female">
                                            <input type="radio" name="marketing_type" value="market_product"> Promote my product<br>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
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

                    <!-- <div id="other-text-container" class="rp-hidden-form">
                        <div class="form-row">
                            <div class="col-md-12">
                                <input type="text" name="other_text" placeholder="Specify if any other" class="form-control shadow-none">
                            </div>
                        </div>
                    </div> -->

                    <div id="dynamic-form" class="rp-hidden-form">

                    </div>
                    
                        
                    

                    <br/><br/>
                    <p id="submit-btn-container" class="rp-para-one">
                        <span class="rp-custom-btn-container">
                            <button id="submitBtn" type="submit" class="btn btn-rp-grad">Submit</button>
                        </span>
                    </p>
                </form>
                <div id="alertMsg"></div>
                </div>
                <div class="col-md-2"></div>
                </div>
            </div>
        </div>
        <br/>
    </div>

    <div id="productFields" class="rp-hidden-form">
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
            <div class="col-md-6">
                <input type="text" name="title" placeholder="Your Job Title" class="form-control shadow-none" required>
                <div id="title_error" class="text-danger"></div>
            </div>
            <div class="col-md-6">
                <input type="tel" name="phone_number" placeholder="Your Phone Number" class="form-control shadow-none">
                <div id="phone_number_error" class="text-danger"></div>
            </div>
        </div>
            <div class="form-group">
            <textarea name="product_description" placeholder="Tell us about your product" class="form-control shadow-none" rows="3"></textarea>
                <div id="product_description_error" class="text-danger"></div>
            </div>

            <div class="form-group">
            <textarea name="product_link" placeholder="List down the product website/social media pages to more about your product*" class="form-control shadow-none" rows="3" required></textarea>
                <div id="product_link_error" class="text-danger"></div>
            </div>

            <div class="checkbox-tick text-center">
                <p>Do you have clients/customers using your product? </p>
                <label class="male">
                    <input type="radio" name="is_customer" value="yes" checked=""> Yes<br>
                    <span class="checkmark"></span>
                </label>
                <label class="female">
                    <input type="radio" name="is_customer" value="no"> No<br>
                    <span class="checkmark"></span>
                </label>
            </div>

            <div id="noOfCustomers" class="form-group">
                <input type="text" name="no_of_customer" placeholder="please list the number of customers" class="form-control shadow-none">
                <div id="no_of_customer_error" class="text-danger"></div>
            </div>

            <div class="form-group">
                <textarea name="additional_comments" placeholder="Additional Comments" class="form-control shadow-none" rows="3"></textarea>
                <div id="additional_comments_error" class="text-danger"></div>
            </div>
        </div>

    <div id="selfFields" class="rp-hidden-form" style="display:none">
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
                        <div class="col-md-6">
                            <input type="text" name="title" placeholder="Your Job Title" class="form-control shadow-none" required>
                            <div id="title_error" class="text-danger"></div>
                        </div>
                        <div class="col-md-6">
                            <input type="tel" name="phone_number" placeholder="Your Phone Number" class="form-control shadow-none">
                            <div id="phone_number_error" class="text-danger"></div>
                        </div>
                    </div>
                        <div class="form-row">                     
                            <div class="col-md-12">
                                <div class="select large-dropdown">
                                    <div class="form-holder">
                                        <div class="select-control">Type of Contribution</div>
                                        <i class="bx bx-chevron-down"></i>
                                    </div>
                                    <ul class="dropdown">
                                        <li rel="QA Articles">QA Articles<br/><span>In-depth explorations of quality assurance practices, principles, and methodologies</span></li>
                                        <li rel="Test Automation Best Practices">Test Automation Best Practices<br/><span>Strategies and insights on achieving efficiency and accuracy in test automation.</span></li>
                                        <li rel="Student Success Stories">Student Success Stories<br/><span>Inspirational accounts from students who have excelled in the QA field after training.</span></li>
                                        <li rel="Automation Frameworks">Automation Frameworks<br/><span>Comprehensive details on various QA automation frameworks, their uses, and benefits.</span></li>
                                        <li rel="QA Cartoons">QA Cartoons<br/><span>Humorous sketches that depict the quirks and realities of life in QA.</span></li>
                                        <li rel="QA Hacks">QA Hacks<br/><span>Clever tips and tricks for overcoming common challenges in quality assurance.</span></li>
                                        <li rel="Tackle the Interviewer">Tackle the Interviewer<br/><span>Guidance for navigating both behavioral and technical interviews in the QA industry.</span></li>
                                        <li rel="Tool Reviews">Tool Reviews<br/><span>Critical analysis of the latest tools in QA and test automation.</span></li>
                                        <li rel="Case Studies">Case Studies<br/><span>Real-world success stories of QA processes and their impact on projects.</span></li>
                                        <li rel="Industry Trends">Industry Trends<br/><span>Examination of the latest trends shaping the future of software testing.</span></li>
                                        <li rel="Opinion Pieces">Opinion Pieces<br/><span>Personal perspectives from thought leaders on various QA topics.</span></li>
                                        <li rel="Technology Spotlights">Technology Spotlights<br/><span>Features on emerging technologies and their relevance to QA practices.</span></li>
                                        <li rel="Process Improvements">Process Improvements<br/><span>Advice on enhancing QA processes for better efficiency and results.</span></li>
                                        <li rel="Conference Summaries">Conference Summaries<br/><span>Recaps of key points and learnings from recent QA conferences.</span></li>
                                        <li rel="Security Testing">Security Testing<br/><span>Focus on the techniques and importance of security within software testing.</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" name="proposed_title" placeholder="Proposed Title/Topic*" class="form-control shadow-none" required>
                            <div id="proposed_title_error" class="text-danger"></div>
                        </div>
                        <div class="form-group">
                        <textarea name="summary" placeholder="Brief Summary of the Content*" class="form-control shadow-none" rows="3" required></textarea>
                            <div id="summary_error" class="text-danger"></div>
                        </div>
                        <div class="form-row">
                        <div class="col-md-12">
                        <textarea name="motivation" placeholder="What's your motivation to contribute to QA Magazine?*" class="form-control shadow-none" rows="3" required></textarea>
                            <div id="motivation_error" class="text-danger"></div>
                            </div>
                        </div>
                        <div class="form-row">
                        <div class="col-md-12">
                        <textarea name="description" placeholder="What unique perspective or knowledge will readers gain from the proposed topic?*" class="form-control shadow-none" rows="3" required></textarea>
                            <div id="description_error" class="text-danger"></div>
                            </div>
                        </div>
                        <div class="form-row">
                        <div class="col-md-12">
                            <textarea name="attachment_link" placeholder="Attachments (Please Paste any relevant documents or files a Google Drive link)" class="form-control shadow-none" style="height: 80px;"></textarea>
                            <div id="attachment_link_error" class="text-danger"></div>
                        </div>
                        </div>
                        <div class="form-group">
                        <div class="checkbox-circle">
                            <label>
                                <input type="checkbox" required> Acceptance of <a href="{{route('website.submission-guidelines')}}">Submission Guidelines</a> and <a href="{{route('website.editorial-policy')}}">Editorial Policy</a>.
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        </div>
                    </div>
                    </div>
@endsection

@section('scripts')
<script>

$('input[name="marketing_type"]').change(function(){
    $("#submit-btn-container").hide();
    $("#preloader-row").show();
    $("#dynamic-form").hide().html('');
    setTimeout(() => {
        if($(this).val() === 'market_product') {
            $("#dynamic-form").html($('#productFields').html()).show();

        } else {
            $("#dynamic-form").html($('#selfFields').html()).show();
        }
        $("#preloader-row").hide();
        $("#submit-btn-container").show();
    }, 1000);
});
    $('html').click(function() {
        $('.select .dropdown').hide();
    });
    // $('.select').click(function(event){
    //     event.stopPropagation();
    // });
    // $('.select .select-control').click(function(){
    //     $(this).parent().next().toggle();
    // })
    // $('.select .dropdown li').click(function(){
    //     $(this).parent().toggle();
    //     var text = $(this).attr('rel');
    //     $(this).parent().prev().find('div').text(text);
    //     $(this).parent().prev().find('input').val(text);

    //     // $('#other-text-container').hide();
    //     // $('#rp-main-form').hide();
    //     // $('#submit-btn-container').hide();

    //     // $("#preloader-row").show();

    //     // setTimeout(() => {
    //     //     $("#preloader-row").hide();
    //     //     $('#rp-main-form').show();
    //     //     $('#submit-btn-container').show();
    //     //     if(text == 'Others') {
    //     //         $('#other-text-container').show();
    //     //     } else {
    //     //         $('#other-text-container').hide();
    //     //     }
    //     // }, 2000);
    // });

    $("#dynamic-form").on("click", ".select", function(e) {
        e.stopPropagation();
    });

    $("#dynamic-form").on("click", ".select .select-control", function(e) {
        const target = e.currentTarget ;
        $(target).parent().next().toggle();
    });

    $("#dynamic-form").on("click", ".select .dropdown li", function(e) {
        const target = e.currentTarget;
        $(target).parent().toggle();
        var text = $(target).attr('rel');
        $(target).parent().prev().find('div').text(text);
        $(target).parent().prev().find('input').val(text);
    });

    $('#marketingPageForm').submit(function(e) {
        e.preventDefault();
        var form = $(this);
        var url = "{{ route('website.forms.save-marketing-form') }}";
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

    /*
    $('#submitBtn').click(function(e) {
            e.preventDefault();
            $.ajax({
                url: '{{ route('website.forms.save-solution-form') }}',
                method: 'POST',
                data: $('#solutionPageForm').serialize(),
                success: function(response) {
                    // Handle success response
                    console.log(response);
                    // You can display a success message or redirect to another page
                },
                error: function(xhr, status, error) {
                    // Handle error response
                    console.log(xhr.responseText);
                    // You can display an error message or handle the error accordingly
                }
            });
        });
    */
</script>
@endsection

@extends('layouts.web_layout')

@section('title', 'Submission Guidelines')
@section('content')
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="body-content">
                    <br/><br/><br/>
                    <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark rp-jumbotron">
                                <div class="row">
                                    <div class="col-md-8 px-4">
                                        <h1 class="">Submission Guidelines for <span class="half-header-dark">Online Software</span> QA Magazine</h1>
                                        <p class="lead my-3">We welcome contributions from professionals, enthusiasts, and students in the field of Software Quality Assurance (QA) and Test Automation. To ensure high-quality content and a valuable experience for both our readers and contributors, we have established the following submission guidelines.</p>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{ asset('image/submission-guidelines.png') }}" alt="Market Yourself"
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 test-plan-list">
                    <br/>
                    <p class="rp-heading-two"><b>General Guidelines</b></p>
                    <ul>
                        <li><b>Originality</b>: All submissions must be original work that has not been published elsewhere.</li>
                        <li><b>Relevance</b>: Content should be relevant to the field of software testing, QA, and test automation.</li>
                        <li><b>Language</b>: Submissions must be in English, with correct grammar and spelling.</li>
                        <li><b>Length</b>: Articles should be between 500-2000 words, while other types of submissions (cartoons, hacks, etc.) can be of variable lengths.</li>
                        <li><b>Formatting</b>: Submit your work in a commonly used digital format (e.g., DOCX, PDF for text; PNG, JPEG for images).</li>
                        <li><b>Structure</b>: Articles should have a clear structure, with a title, introduction, body, and conclusion.</li>
                        <li><b>Code</b>: If sharing code, include comments and explanations to ensure clarity.</li>
                        <li><b>Images and Screenshots</b>: Provide high-quality images or screenshots where necessary to enhance understanding.</li>
                        <li><b>Biography</b>: Include a brief author bio (up to 150 words) and a headshot.</li>
                    </ul>
                    <p class="rp-heading-two"><b>Specific Category Requirements</b></p>
                    <p class="rp-heading-two">QA Articles & Test Automation Best Practices</p>
                    <ul>
                        <li>Focus on actionable insights and practical examples.</li>
                        <li>Include case studies or real-world scenarios if possible.</li>
                    </ul>
                    <p class="rp-heading-two">Student Success Stories</p>
                    <ul>
                        <li>Share your journey, challenges faced, and how you overcame them.</li>
                        <li>Highlight the impact of QA and test automation training on your career.</li>
                    </ul>
                    <p class="rp-heading-two">Sharing Automation Frameworks</p>
                    <ul>
                        <li>Provide an overview of the framework and its unique features.</li>
                        <li>Include installation instructions and a simple use case.</li>
                    </ul>
                    <p class="rp-heading-two">QA Cartoons</p>
                    <ul>
                        <li>Must be original and humorous while reflecting the QA industry.</li>
                        <li>Captions should be concise and complement the visual content.</li>
                    </ul>
                    <p class="rp-heading-two">QA Hacks</p>
                    <ul>
                        <li>Short tips or tricks that provide innovative solutions to common problems.</li>
                        <li>Clearly describe the problem and the proposed hack.</li>
                    </ul>
                    <p class="rp-heading-two">Tackle the Interviewer</p>
                    <ul>
                        <li>Include both behavioral and technical questions with suggested answers.</li>
                        <li>Offer context for why certain questions may be asked and how best to respond.</li>
                    </ul>
                    <p class="rp-heading-two"><b>Submission Process</b></p>
                    <ol>
                        <li>Submit your piece via our online submission form, including all required fields.</li>
                        <li>Agree to our terms of publication, confirming you have the right to submit the work and that it adheres to our guidelines.</li>
                        <li>After submission, our editorial team will review your contribution for relevance and quality.</li>
                        <li>You will receive an email notification regarding acceptance or rejection. Feedback may be provided for revisions if necessary.</li>
                    </ol>
                    <p class="rp-heading-two"><b>Deadlines</b></p>
                    <ul>
                        <li>Submissions must be received by the following quarterly deadlines:</li>
                        <li>Spring Issue: March 1st</li>
                        <li>Summer Issue: June 1st</li>
                        <li>Fall Issue: September 1st</li>
                        <li>Winter Issue: December 1st</li>
                    </ul>
                    <p class="rp-heading-two"><b>Rights & Permissions</b></p>
                    <p class="rp-para-three">By submitting your work, you grant us non-exclusive rights to publish it in our magazine and on related platforms. You also agree that we may edit submissions for clarity, length, or style while maintaining the integrity of your work.</p>
                    <p class="rp-heading-two"><b>Contact Information</b></p>
                    <p class="rp-para-three">If you have any questions regarding the submission process or guidelines, please contact us at <a href="mailto:magazine@rsteksolutions.com" class="rp-link">magazine@rsteksolutions.com</a></p>
                    <p class="rp-para-three">Thank you for your interest in contributing to our Software QA Magazine. We look forward to your insightful submissions that foster growth and learning within the QA community.</p>
                    <br/><br/><br/>
                </div>
            </div>
        </div>
@endsection
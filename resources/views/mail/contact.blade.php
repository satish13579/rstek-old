<!doctype html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>{{$mailData["subject"]}}</title>
    <style media="all" type="text/css">
    /* -------------------------------------
    GLOBAL RESETS
------------------------------------- */
    
    body {
      font-family: Helvetica, sans-serif;
      -webkit-font-smoothing: antialiased;
      font-size: 16px;
      line-height: 1.3;
      -ms-text-size-adjust: 100%;
      -webkit-text-size-adjust: 100%;
    }
    
    table {
      border-collapse: separate;
      mso-table-lspace: 0pt;
      mso-table-rspace: 0pt;
      width: 100%;
    }
    
    table td {
      font-family: Helvetica, sans-serif;
      font-size: 16px;
      vertical-align: top;
    }
    /* -------------------------------------
    BODY & CONTAINER
------------------------------------- */
    
    body {
      background-color: #f4f5f6;
      margin: 0;
      padding: 0;
    }
    
    .body {
      background-color: #f4f5f6;
      width: 100%;
    }
    
    .container {
      margin: 0 auto !important;
      max-width: 600px;
      padding: 0;
      padding-top: 24px;
      width: 600px;
    }
    
    .content {
      box-sizing: border-box;
      display: block;
      margin: 0 auto;
      max-width: 600px;
      padding: 0;
    }
    /* -------------------------------------
    HEADER, FOOTER, MAIN
------------------------------------- */
    
    .main {
      background: #ffffff;
      border: 1px solid #eaebed;
      border-radius: 16px;
      width: 100%;
    }
    
    .wrapper {
      box-sizing: border-box;
      padding: 24px;
    }
    
    .footer {
      clear: both;
      padding-top: 24px;
      text-align: center;
      width: 100%;
    }
    
    .footer td,
    .footer p,
    .footer span,
    .footer a {
      color: #9a9ea6;
      font-size: 16px;
      text-align: center;
    }
    /* -------------------------------------
    TYPOGRAPHY
------------------------------------- */
    
    p {
      font-family: Helvetica, sans-serif;
      font-size: 16px;
      font-weight: normal;
      margin: 0;
      margin-bottom: 16px;
    }
    
    a {
      color: #0867ec;
      text-decoration: underline;
    }
    /* -------------------------------------
    BUTTONS
------------------------------------- */
    
    .btn {
      box-sizing: border-box;
      min-width: 100% !important;
      width: 100%;
    }
    
    .btn > tbody > tr > td {
      padding-bottom: 16px;
    }
    
    .btn table {
      width: auto;
    }
    
    .btn table td {
      background-color: #ffffff;
      border-radius: 4px;
      text-align: center;
    }
    
    .btn a {
      background-color: #ffffff;
      border: solid 2px #0867ec;
      border-radius: 4px;
      box-sizing: border-box;
      color: #0867ec;
      cursor: pointer;
      display: inline-block;
      font-size: 16px;
      font-weight: bold;
      margin: 0;
      padding: 12px 24px;
      text-decoration: none;
      text-transform: capitalize;
    }
    
    .btn-primary table td {
      background-color: #0867ec;
    }
    
    .btn-primary a {
      background-color: #0867ec;
      border-color: #0867ec;
      color: #ffffff;
    }
    
    @media all {
      .btn-primary table td:hover {
        background-color: #ec0867 !important;
      }
      .btn-primary a:hover {
        background-color: #ec0867 !important;
        border-color: #ec0867 !important;
      }
    }
    
    /* -------------------------------------
    OTHER STYLES THAT MIGHT BE USEFUL
------------------------------------- */
    
    .last {
      margin-bottom: 0;
    }
    
    .first {
      margin-top: 0;
    }
    
    .align-center {
      text-align: center;
    }
    
    .align-right {
      text-align: right;
    }
    
    .align-left {
      text-align: left;
    }
    
    .text-link {
      color: #0867ec !important;
      text-decoration: underline !important;
    }
    
    .clear {
      clear: both;
    }
    
    .mt0 {
      margin-top: 0;
    }
    
    .mb0 {
      margin-bottom: 0;
    }
    
    .preheader {
      color: transparent;
      display: none;
      height: 0;
      max-height: 0;
      max-width: 0;
      opacity: 0;
      overflow: hidden;
      mso-hide: all;
      visibility: hidden;
      width: 0;
    }
    
    .powered-by a {
      text-decoration: none;
    }
    
    /* -------------------------------------
    RESPONSIVE AND MOBILE FRIENDLY STYLES
------------------------------------- */
    
    @media only screen and (max-width: 640px) {
      .main p,
      .main td,
      .main span {
        font-size: 16px !important;
      }
      .wrapper {
        padding: 8px !important;
      }
      .content {
        padding: 0 !important;
      }
      .container {
        padding: 0 !important;
        padding-top: 8px !important;
        width: 100% !important;
      }
      .main {
        border-left-width: 0 !important;
        border-radius: 0 !important;
        border-right-width: 0 !important;
      }
      .btn table {
        max-width: 100% !important;
        width: 100% !important;
      }
      .btn a {
        font-size: 16px !important;
        max-width: 100% !important;
        width: 100% !important;
      }
    }
    /* -------------------------------------
    PRESERVE THESE STYLES IN THE HEAD
------------------------------------- */
    
    @media all {
      .ExternalClass {
        width: 100%;
      }
      .ExternalClass,
      .ExternalClass p,
      .ExternalClass span,
      .ExternalClass font,
      .ExternalClass td,
      .ExternalClass div {
        line-height: 100%;
      }
      .apple-link a {
        color: inherit !important;
        font-family: inherit !important;
        font-size: inherit !important;
        font-weight: inherit !important;
        line-height: inherit !important;
        text-decoration: none !important;
      }
      #MessageViewBody a {
        color: inherit;
        text-decoration: none;
        font-size: inherit;
        font-family: inherit;
        font-weight: inherit;
        line-height: inherit;
      }
    }
    </style>
  </head>
  <body>
    <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
      <tr>
        <td>&nbsp;</td>
        <td class="container">
          <div class="content">

            <!-- START CENTERED WHITE CONTAINER -->
            <span class="preheader">This is preheader text. Some clients will show this text as a preview.</span>
            <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="main">

              <!-- START MAIN CONTENT AREA -->
              <tr>
                <td class="wrapper">
                  <p>Hi {{ $mailData["name"] }}.,</p>
                  @if($mailData["type"] === "contact")
                  <h2>Thank you for reaching out to us at RS TekSolutions!</h2>
                    <p>Your message is important to us, and we are committed to providing you with the highest quality software QA consulting services. Your inquiry has been successfully received and is currently under review by our team of specialists.</p>
                    <p>We understand the critical role that quality assurance plays in your business success, and we are eager to show you how our tailored solutions can enhance your software's performance and reliability.</p>
                    <p>A member of our consulting team will be in touch within the next 24 hours to discuss your specific needs and how we can assist you in achieving your goals.</p>
                    <p>In the meantime, if you have any more details to add or any immediate questions, feel free to reply to this email or call us directly at +1 23456789.</p>
                    <p>We look forward to speaking with you and thank you again for considering RS TekSolutions as your trusted partner in quality assurance.</p>
                    @elseif($mailData["type"] === "solution")
                    <h2>Thank you for your interest in RS TekSolutions' Test Solutions and Services. We are delighted to have the opportunity to discuss how we can support your organization's drive for impeccable software quality.</h2>
                    <p>Your inquiry is now in the hands of our expert team, who are dedicated to understanding and fulfilling your specific testing needs. We pride ourselves on delivering comprehensive, customized solutions that ensure your software meets the highest standards of quality and reliability.</p>
                    <p>You can expect to hear from us within one business day, as timely and clear communication is at the core of our partnership approach. Our specialist will be in touch to delve deeper into your requirements and outline how our services can align with your goals for success.</p>
                    <p>If there are any immediate questions you have or additional information you'd like to provide, please reply to this email or use the contact details below. We are here to provide you with all the support you need for a seamless experience.</p>
                    <p>Thank you once again for choosing RS TekSolutions. We are committed to helping you navigate your quality assurance journey with confidence and expertise.</p>
                    @elseif($mailData["type"] === "hiring")
                    <h2>Warm greetings from RS TekSolutions!</h2>
                    <p>We are delighted to acknowledge the receipt of your Talent Hiring form submission. It’s our pleasure to assist you in finding exceptional software QA professionals who can drive success for your projects and integrate seamlessly with your team.</p>
                    <p>Your request is being reviewed with the utmost attention by our dedicated talent acquisition specialists. We understand the urgency that often accompanies the hiring process, and we are committed to responding to your needs promptly.</p>
                    <p>You can expect a personalized follow-up from one of our team members within the next business day. Our goal is to thoroughly understand your requirements and provide you with the best possible candidates who match your technical and cultural expectations.</p>
                    <p>Should you wish to provide additional details regarding your hiring needs or if you have any immediate concerns, please feel free to respond to this email or reach out to us via the contact information below. We are here to ensure that your experience with RS TekSolutions is nothing short of excellent.</p>
                    <p>Thank you for choosing RS TekSolutions as your partner in building a robust, quality-assured software environment. We look forward to contributing to your success through our dedicated talent solutions.</p>
                    @elseif($mailData["type"] === "marketing")
                    <p>We're excited to confirm that we've received your submission for our RS TekSolutions Quarterly QA Magazine. Whether you're aiming to showcase your innovative product or share your expertise with a vibrant community of QA professionals, your contribution is a valuable addition to our upcoming edition.</p>
                    <p><b>For Product Promotion:</b> Your organization's pursuit of excellence in software quality aligns perfectly with our magazine's mission. We are keen to help you highlight your product's features and benefits to our readership, which includes some of the industry's most influential decision-makers and experts.</p>
                    <p><b>For Article Contribution:</b> Your insights into QA best practices, test automation frameworks, and other key topics will be instrumental in enriching the knowledge base of our readers. We are committed to providing a platform for QA professionals like yourself to voice your experiences and innovations.</p>
                    <p>Our editorial team will review your submission and contact you shortly to discuss the next steps, including any additional information we might need and the publication timeline.</p>
                    <p>Please look forward to a follow-up within the next business day. In the meantime, if you have any further questions or additional information to share, don't hesitate to reach out via reply email or the contact details below.</p>
                    <p>Thank you for contributing to the RS TekSolutions community. We're looking forward to your involvement in making our Quarterly QA Magazine a resounding success!</p>
                    @endif
                </td>
              </tr>

              <!-- END MAIN CONTENT AREA -->
              </table>

            <!-- START FOOTER -->
            <div class="footer">
              <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td class="content-block">
                    <span class="apple-link">RS TEKSolutions | A RahulShetty Academy Company</span>
                    <br/>1309, Coffeen Avenue STE 12705 Sheridan<br/> WY 82801.
                  </td>
                </tr>
              </table>
            </div>

            <!-- END FOOTER -->
            
<!-- END CENTERED WHITE CONTAINER --></div>
        </td>
        <td>&nbsp;</td>
      </tr>
    </table>
  </body>
</html>
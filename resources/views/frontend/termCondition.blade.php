@extends('layouts.frontend.app')

<style>
    h1, h2 {
        color: #d5b941 !important;
        text-align: center;
        margin-bottom: 15px;
    }

    p, li {
        color: #333;
        margin-bottom: 15px;
        line-height: 1.6;
    }

    ul.terms-list {
        list-style: none;
        padding-left: 20px;
    }

    ul.terms-list li::before {
        content: "\2022";
        color: #d5b941;
        font-weight: bold;
        display: inline-block;
        width: 1em;
        margin-left: -1em;
    }

    a {
        color: #d5b941;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }

    .section-header {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 15px;
    }

    .custom-title {
        background-color: #d5b941;
        color: #fff;
        padding: 10px 20px;
        clip-path: polygon(0% 0%, 100% 0%, 92% 100%, 0% 100%);
        font-size: 20px;
        font-weight: 600;
    }

    .custom-subtitle {
        background-color: #333;
        color: #f5f5f5;
        padding: 10px 20px;
        clip-path: polygon(22% 0%, 100% 0%, 100% 100%, 0% 100%);
        font-size: 18px;
        margin-left: -35px;
    }

    .section-title {
        font-size: 32px;
        font-family: 'Outfit', sans-serif;
        color: #333;
        margin-bottom: 15px;
        line-height: 1.25em;
        font-weight: 700;
    }

    .content-container {
        padding: 20px 0;
    }

    .container {
        max-width: 900px;
        margin: 0 auto;
    }

    .highlight {
        font-weight: bold;
        color: #d1b540;
    }
</style>
<style>
    .section-title {
        font-size: 26px;
        font-weight: 600;
        color: #333;
        margin-bottom: 15px;
        position: relative;
        padding-left: 30px;
    }

    .section-title::before {
        content: '\2022'; /* Bullet point before the title */
        position: absolute;
        left: 0;
        top: 0;
        color: #d5b941;
        font-size: 28px;
    }

    .highlight {
        font-weight: bold;
        color: #d5b941;
    }

    .privacy-content p {
        font-size: 16px;
        color: #555;
        line-height: 1.8;
        margin-bottom: 20px;
        text-align: justify;
    }

    .privacy-content {
        background-color: #f9f9f9;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        margin-top: 30px;
    }

    .privacy-content .highlight {
        color: #d5b941;
    }

    .privacy-content h4 {
        font-size: 22px;
        font-weight: 600;
        color: #333;
        margin-bottom: 15px;
    }

    .privacy-content p {
        font-size: 16px;
        color: #555;
        line-height: 1.8;
        text-align: justify;
    }

    .content-container {
        padding: 40px 20px 0 0;
        max-width: 900px;
        margin: 0 auto;
    }

    .highlight-text {
        font-weight: bold;
        color: #d5b941;
    }


@media (max-width: 768px) {
 .container h1{
    font-size:35px;
 }   
 .custom-title{
    font-size: 16px;
 }
 .custom-subtitle{
    font-size: 16px;
 }
 .content-container{
    padding: 20px;
 }
 .section-title{
    font-size: 20px;
 }
}
</style>

@section('content')

<div class="container" style="padding:60px 0 60px 0 ">
    <h1>Terms and Conditions</h1>

    <div class="content-container">
        <div class="section-header">
            <div class="custom-title">Cancellation, Charges and</div>
            <div class="custom-subtitle">Payment</div>
        </div>

        <ul class="terms-list">
            <li>Free Cancellation: You may cancel your booking free of charge up to 24 hours before your scheduled pick-up time.</li>
            <li>Cancellation Within 24 Hours: A cancellation fee equivalent to 50% of the total booking will be charged.</li>
            <li>Cancellation After Driver Dispatch: The full amount of the booking will be charged.</li>
            <li>No-Show Policy: You will be charged the full amount of the booking if you fail to show up at the scheduled time without prior notice.</li>
            <li>Refunds: Refunds for eligible cancellations will be processed promptly as per our refund policy.</li>
            <li>Modification of Booking: Contact us as soon as possible for modifications. Changes within 24 hours may incur additional charges.</li>
            <li>Exceptional Circumstances: We may consider exceptions for unforeseen emergencies on a case-by-case basis.</li>
            <li>Contact Information: To cancel or modify bookings, please use the contact details provided on our website.</li>
        </ul>
    </div>

    <div class="content-container">
        <div class="section-header">
            <div class="custom-title">Privacy</div>
            <div class="custom-subtitle">Policy</div>
        </div>

        <h4 class="section-title">Information Collection</h4>
        <p>We collect personal information such as your name, address, email, and phone number when you request our services. This information helps us to provide and improve our services to you.</p>

        <h4 class="section-title">Consent</h4>
        <p><span class="highlight">How do you get my consent?</span> By providing personal information, you consent to its use for specific purposes related to the services we provide.</p>
        <p><span class="highlight">How do I withdraw my consent?</span> You may contact us at any time if you wish to withdraw your consent or update your information.</p>

        <h4 class="section-title">Disclosure</h4>
        <p>Your information may be disclosed if required by law, or if you violate our terms and conditions. We will only share your data when necessary and in compliance with the law.</p>

        <h4 class="section-title">Payment Providers</h4>
        <p>Your payment information is encrypted according to PCI-DSS standards and deleted after the transaction is processed. We take privacy and security seriously to ensure your data is protected.</p>

        <h4 class="section-title">Third-Party Services</h4>
        <p>Third-party service providers may only use your information to the extent necessary for the services they perform. Please review their privacy policies for additional information regarding how they handle your data.</p>

        <h4 class="section-title">Security</h4>
        <p>We employ industry-standard security measures such as SSL and AES-256 encryption to protect your personal information from unauthorized access, alteration, or disclosure.</p>

        <h4 class="section-title">Age of Consent</h4>
        <p>By using this website, you confirm that you meet the legal age of majority in your jurisdiction and are capable of providing valid consent for the collection and use of personal data.</p>

        <h4 class="section-title">Changes to this Privacy Policy</h4>
        <p>We reserve the right to modify this privacy policy at any time. Any changes will be effective immediately upon posting on this page. Please check this page regularly for updates.</p>

        <h2>Contact Us</h2>
        <p>If you have any questions regarding our Terms and Conditions or Privacy Policy, require assistance, or wish to request corrections or deletions of your personal information, we’re here to help. You can reach us through the following channels:</p>
        <ul class="terms-list">
            <li><strong>Email:</strong> <a href="mailto:support@example.com">support@example.com</a></li>
            <li><strong>Phone:</strong> 0117 332 2782</li>
            <li><strong>Contact Form:</strong> Visit our <a href="/contact">Contact Us</a> page to submit your query directly.</li>
        </ul>
        <p>We aim to respond to all inquiries promptly and ensure a smooth resolution to any issues or concerns you may have. Your satisfaction is our priority!</p>
    </div>
</div>

@endsection

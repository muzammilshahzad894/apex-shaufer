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
            <li>Free Cancellation: You may cancel your booking free of charge up to 24 hours before your scheduled pick-up time. This allows you to make changes to your plans without incurring any fees if you notify us within this period.</li>
            <li>Cancellation Within 24 Hours: If you cancel your booking within 24 hours of the scheduled pick-up time, cancellation fee equivalent to 50% of the total booking will be charged.. This policy ensures compensation for the driver’s time and resources, as cancellations close to the service time prevent us from reallocating the vehicle.</li>
            <li>Cancellation After Driver Dispatch: If the driver has already been dispatched when you cancel, the full amount of the booking will be charged. This policy covers the costs associated with sending a driver to the location.</li>
            <li>No-Show Policy: If you do not show up at the scheduled pick-up time and do not inform us of your cancellation, you will be charged the full amount of the booking. This policy addresses the situation where the service has been prepared but not utilized.</li>
            <li>Refunds: Refunds for cancellations made in accordance with this policy will be processed according to our refund policy, which is available upon request. We aim to handle all refund requests promptly and fairly.</li>
            <li>Modification of Booking: If you need to modify your booking, please contact us as soon as possible. Changes made within 24 hours of the scheduled pick-up time may incur additional charges due to the proximity of the service date.</li>
            <li>Exceptional Circumstances: We recognize that unforeseen emergencies or severe weather conditions may arise. We reserve the right to consider exceptions to this policy on a case-by-case basis in such exceptional circumstances.</li>
            <li>Contact Information: To cancel or modify your booking, please contact us directly using the contact details provided on our website. We are here to assist you with any changes or cancellations you need to make.</li>
        </ul>
    </div>

    <div class="content-container">
        <div class="section-header">
            <div class="custom-title">Privacy</div>
            <div class="custom-subtitle">Policy</div>
        </div>

        <h4 class="section-title">Information Collection</h4>
        <p>When you request our services, we collect personal information such as your name, address, email address, and phone number.</p>
        <p class="mt-2">Email marketing (if applicable): With your permission, we may send you emails about our services and updates. You can opt-out at any time by letting us know.</p>

        <h4 class="section-title mt-4">Consent</h4>
        <p>How do you get my consent?</p>
        <p class="mt-2">When you provide personal information to request a quote, complete a transaction, or make a booking, we assume you consent to us collecting and using it for that specific purpose. For any additional uses, we will ask for your explicit consent or provide a way for you to opt-out.</p>
        <p class="mt-2">How do I withdraw my consent?</p>
        <p class="mt-2">If you change your mind after opting in, you can withdraw your consent for us to contact you or use your information by contacting us.</p>

        <h4 class="section-title mt-4">Disclosure</h4>
        <p>We may disclose your personal information if required by law or if you violate our Terms & Conditions.</p>

        <h4 class="section- mt-4">Payment Providers</h4>
        <p>If you choose a direct payment gateway, your transaction data is encrypted through PCI-DSS standards. After your purchase, your transaction information is deleted. All direct payment gateways adhere to PCI-DSS standards to ensure secure handling of credit card information.</p>

        <h4 class="section-title mt-4">Third-Party Services</h4>
        <p>Third-party providers used by us will only collect, use, and disclose your information to the extent necessary to perform the services they provide. For these providers, we recommend reading their privacy policies to understand how your personal information will be handled.</p>
        <p class="mt-2">Remember that some providers may be located in different jurisdictions. By proceeding with a transaction involving a third-party service provider, your information may be subject to the laws of the jurisdiction where the provider or its facilities are located.</p>
        <p class="mt-2">Once you leave our website or are redirected to a third-party website, you are no longer governed by this Privacy Policy or our website’s Terms and Conditions.</p>

        <h4 class="section-title mt-4">Security</h4>
        <p>We take reasonable precautions to protect your personal information. If you provide credit card information, it is encrypted using SSL technology and stored with AES-256 encryption. Although no method of transmission over the Internet or electronic storage is 100% secure, we follow all PCI-DSS requirements and implement additional industry standards.</p>

        <h4 class="section-title mt-4">Age of Consent</h4>
        <p>By using this site, you confirm that you are at least the age of majority in your state or province of residence or have given us your consent to allow any minor dependents to use this site.</p>

        <h4 class="section-title mt-4">Changes to this Privacy Policy</h4>
        <p>We reserve the right to modify this privacy policy at any time, so please review it frequently. Changes will take effect immediately upon posting on the website. If we make significant changes, we will notify you here. If our company is acquired or merged, your information may be transferred to the new owners.</p>
    </div>
</div>

@endsection

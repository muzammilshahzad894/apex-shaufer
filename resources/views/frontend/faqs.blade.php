@extends('layouts.frontend.app')

<style>
    .container {
        width: 80%;
        margin: auto;
        overflow: hidden;
    }
    .cross.active{
        color: white !important;
    }

     h2{
        font-size: 30px !important;
     }

    .faq-section {
        background: white;
        padding: 10px;
        margin: 10px 0;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 10px !important;
        color: white;
        transition: transform 0.3s ease, box-shadow 0.1s ease;
    }
    

    .faq-section h2 {
        color: #333;
    }

    .faq-section p {
        font-family: 'Outfit', sans-serif;
        font-size: 14px;
        font-weight: 300;
        line-height: 1.95em;
        color: black;
        margin-bottom: 15px;
        text-align: center;
        display: none;
    }

    .faq-section:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px #ffc1074d;
        background: #f5b754;
    }

    h1 {
        color: white !important;
        text-align: center;
    }

    .cross {
        color: white;
        font-size: 29px !important;
        cursor: pointer;
        padding: 0 17px !important;
        background: #f5b754;
        border-radius: 50%;
        font-weight: 600 !important;
        transition: transform 0.1s ease;
        display: block !important;
    }

    .cross.active {
        transform: rotate(45deg);
        padding: -4px 0px !important;
    }

    @media (max-width: 768px) {
        .faq-section h2 {
            color: #333;
            font-size: 19px;
        }

        .container h1 {
            font-size: 31px !important;
        }
    }
</style>

@section('content')
    <div class="container">
        <h1>Apex Cabi Service FAQs</h1>

        @php
            $faqs = [
                [
                    'question' => 'What can I expect when booking a ride with Apex Cab Service?',
                    'answer' =>
                        'When you book with Apex Cab Service, you can expect punctuality, comfort, and safety. Our professional drivers ensure timely arrivals and a smooth ride to your destination. Whether it\'s an airport transfer or a quick city trip, we make your journey stress-free and enjoyable.',
                ],
                [
                    'question' => 'Are your drivers licensed and background-checked?',
                    'answer' =>
                        'Yes, all our drivers are fully licensed and undergo thorough background checks to guarantee your safety. They are trained to offer the best service with a focus on professionalism and reliability.',
                ],
                [
                    'question' => 'What type of vehicles are available?',
                    'answer' =>
                        'We offer a wide range of vehicles including economy sedans, luxury cars, SUVs, and spacious 7-seater MPVs. All our vehicles are well-maintained, clean, and equipped with modern amenities for a comfortable experience.',
                ],
                [
                    'question' => 'Can I request a specific driver?',
                    'answer' =>
                        'Yes, you can request a specific driver when booking your ride. Simply inform us of your preference, and we will do our best to assign the driver of your choice.',
                ],
                [
                    'question' => 'What payment methods do you accept?',
                    'answer' =>
                        'We accept a wide range of payment options including major credit/debit cards, mobile payment apps, and cash. You can choose the most convenient method during the booking process.',
                ],
                [
                    'question' => 'What are your operating hours?',
                    'answer' =>
                        'Apex Cab Service operates 24/7, meaning you can book a ride any time, day or night. Our customer support team is available for assistance during business hours, and you can always reach us online.',
                ],
                [
                    'question' => 'Are refreshments available in the vehicle?',
                    'answer' =>
                        'Yes, we offer complimentary bottled water in select vehicles. If you require additional refreshments, feel free to request them during your booking.',
                ],
                [
                    'question' => 'How do I identify my driver at the pick-up point?',
                    'answer' =>
                        'For airport pickups or scheduled services, your driver will meet you at the designated pick-up point. They will be holding a sign with your name for easy identification.',
                ],
                [
                    'question' => 'Will the driver assist with luggage?',
                    'answer' =>
                        'Absolutely! Our drivers are happy to assist you with your luggage both at pick-up and drop-off points.',
                ],
                [
                    'question' => 'What if my flight is delayed?',
                    'answer' =>
                        'We monitor flight times to ensure your driver arrives on time. If there is a delay, we adjust the pick-up accordingly, so you don\'t need to worry.',
                ],
                [
                    'question' => 'Can I book a round-trip or regular service?',
                    'answer' =>
                        'Yes, we offer both round-trip and regular services for commuters. If you need a recurring service, simply get in touch, and we will create a plan that fits your schedule.',
                ],
                [
                    'question' => 'Do you charge extra for waiting time?',
                    'answer' =>
                        'Yes, we do charge a small fee for waiting time, typically based on the duration of the wait. For airport pickups, we offer 1 hour of complimentary waiting time, after which a small fee of £0.30 per minute applies.',
                ],
                [
                    'question' => 'How much notice do I need to cancel a booking?',
                    'answer' =>
                        'You can cancel your booking free of charge up to 24 hours before the scheduled pick-up. Cancellations made within 24 hours will incur a fee of 50%. If the driver has already been dispatched, the full fare will apply.',
                ],
                [
                    'question' => 'How do I book a ride?',
                    'answer' =>
                        'Booking with Apex Cab Service is easy! You can book via our website, mobile app, or over the phone. Simply provide your pick-up and drop-off details, and we\'ll handle the rest.',
                ],
            ];
        @endphp

        @foreach ($faqs as $faq)
            <section class="faq-section">
                <div class="d-flex align-items-center justify-content-between">
                    <h2>{{ $faq['question'] }}</h2>
                    <p class="cross" onclick="toggleAnswer(this)">
                        +
                    </p>
                </div>
                <p>{{ $faq['answer'] }}</p>
            </section>
        @endforeach

    </div>
    <script>
        function toggleAnswer(element) {
            const answer = element.parentNode.nextElementSibling;
            if (answer.style.maxHeight === '0px' || !answer.style.maxHeight) {
                answer.style.display = 'block';
                answer.style.maxHeight = answer.scrollHeight + 'px';
                answer.style.padding = '10px 0';
                element.classList.add('active');
            } else {
                answer.style.maxHeight = '0px';
                answer.style.padding = '0';
                setTimeout(() => {
                    answer.style.display = 'none';
                }, 300);
                element.classList.remove('active');
            }
        }
    </script>
@endsection


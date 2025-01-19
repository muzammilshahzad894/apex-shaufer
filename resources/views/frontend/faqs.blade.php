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
        background: #d5b941;
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
        background: #d5b941;
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
        'question' => '<h5>What to Expect When Booking a Chauffeur Service with Apex Executive Cars?</h5>',
        'answer' => '<p>Expect punctuality, professionalism, and personalized care. When you book with Apex Executive Cars, your chauffeur will arrive 10-15 minutes ahead of your scheduled time. Dressed smartly and with a professional demeanor, your chauffeur will ensure a smooth and comfortable journey. They will assist with any luggage and open the door for you. In case of inclement weather, your chauffeur will offer an umbrella while escorting you to and from the car.</p>',
    ],
    [
        'question' => '<h5>Are Your Chauffeurs Licensed?</h5>',
        'answer' => '<p>Yes, all of our chauffeurs are DBS checked and fully licensed by the relevant local authorities. In addition, each chauffeur’s vehicle is also licensed and compliant with local regulations, ensuring a safe and reliable service for every journey.</p>',
    ],
    [
        'question' => '<h5>What Type of Chauffeur Vehicles Do You Have?</h5>',
        'answer' => '<p>We offer a premium fleet of luxurious vehicles, including the Mercedes E-Class, S-Class, BMW 7 Series, and Mercedes V-Class. All our chauffeur cars are meticulously maintained and serviced regularly to ensure the highest standards of comfort, safety, and luxury.</p>',
    ],
    [
        'question' => '<h5>What Do Your Chauffeurs Wear?</h5>',
        'answer' => '<p>Our chauffeurs are dressed in a professional uniform consisting of a dark suit, trousers, a white shirt, and a tie, ensuring a polished and sophisticated appearance for every journey.</p>',
    ],
    [
        'question' => '<h5>Do Your Vehicles Have In-Car WiFi?</h5>',
        'answer' => '<p>Yes, all of our chauffeur cars are equipped with 4G WiFi. Simply ask your chauffeur for the details to stay connected during your journey.</p>',
    ],
    [
        'question' => '<h5>Are There Refreshments in the Vehicle?</h5>',
        'answer' => '<p>Yes, all our chauffeur cars are stocked with bottled mineral water. If you prefer a different refreshment, simply let us know, and we will do our best to accommodate your request.</p>',
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


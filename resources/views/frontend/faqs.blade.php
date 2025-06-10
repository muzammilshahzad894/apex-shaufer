@extends('layouts.frontend.app')



@section('content')

<section class="section pt-40 mb-30 bg-faqs">
    <div class="container-sub">
        <div class="box-faqs">
            <div class="text-center">
                <h2 class="color-brand-1 mb-20 wow fadeInUp">Apex Executive FAQs</h2>
            </div>
            <div class="mt-60 mb-40">
                <div class="accordion wow fadeInUp" id="accordionFAQ">

                    <div class="accordion-item">
                        <h5 class="accordion-header" id="headingOne">
                            <button class="accordion-button text-heading-5" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                aria-controls="collapseOne">What to Expect When Booking a Chauffeur Service with Apex Executive Cars?
                            </button>
                        </h5>
                        <div class="accordion-collapse collapse show" id="collapseOne"
                            aria-labelledby="headingOne" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                                Expect punctuality, professionalism, and personalized care. When you book with Apex Executive Cars, your chauffeur will arrive 10-15 minutes ahead of your scheduled time. Dressed smartly and with a professional demeanor, your chauffeur will ensure a smooth and comfortable journey. They will assist with any luggage and open the door for you. In case of inclement weather, your chauffeur will offer an umbrella while escorting you to and from the car.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h5 class="accordion-header" id="headingTwo">
                            <button class="accordion-button text-heading-5 collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                aria-controls="collapseTwo">Are Your Chauffeurs Licensed?
                            </button>
                        </h5>
                        <div class="accordion-collapse collapse" id="collapseTwo" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                                Yes, all of our chauffeurs are DBS checked and fully licensed by the relevant local authorities. In addition, each chauffeur’s vehicle is also licensed and compliant with local regulations, ensuring a safe and reliable service for every journey.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h5 class="accordion-header" id="headingThree">
                            <button class="accordion-button text-heading-5 collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                aria-controls="collapseThree">What Type of Chauffeur Vehicles Do You Have?
                            </button>
                        </h5>
                        <div class="accordion-collapse collapse" id="collapseThree"
                            aria-labelledby="headingThree" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                            We offer a premium fleet of luxurious vehicles, including the Mercedes E-Class, S-Class, BMW 7 Series, and Mercedes V-Class. All our chauffeur cars are meticulously maintained and serviced regularly to ensure the highest standards of comfort, safety, and luxury.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h5 class="accordion-header" id="headingFive">
                            <button class="accordion-button text-heading-5 collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                                aria-controls="collapseFive">What Do Your Chauffeurs Wear?
                            </button>
                        </h5>
                        <div class="accordion-collapse collapse" id="collapseFive" aria-labelledby="headingFive"
                            data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                                Our chauffeurs are dressed in a professional uniform consisting of a dark suit, trousers, a white shirt, and a tie, ensuring a polished and sophisticated appearance for every journey.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h5 class="accordion-header" id="headingSeven">
                            <button class="accordion-button text-heading-5 collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false"
                                aria-controls="collapseSeven">Do Your Vehicles Have In-Car WiFi?
                            </button>
                        </h5>
                        <div class="accordion-collapse collapse" id="collapseSeven"
                            aria-labelledby="headingSeven" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                                Yes, all of our chauffeur cars are equipped with 4G WiFi. Simply ask your chauffeur for the details to stay connected during your journey.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h5 class="accordion-header" id="headingEight">
                            <button class="accordion-button text-heading-5 collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false"
                                aria-controls="collapseEight">Are There Refreshments in the Vehicle?
                            </button>
                        </h5>
                        <div class="accordion-collapse collapse" id="collapseEight"
                            aria-labelledby="headingEight" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                                Yes, all our chauffeur cars are stocked with bottled mineral water. If you prefer a different refreshment, simply let us know, and we will do our best to accommodate your request.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection


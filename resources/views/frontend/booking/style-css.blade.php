<style>
    #fleets-section{
        gap: 10px;
    }
    .icon_text p{
        color: white !important;
    }
    .border-botom{
        display: flex;
        width: 100%;
    justify-content: space-between;
    align-items: center;
    }
    .custom_hr{
        color: black;
    }
    .fa-solid, .fas{
        color:#ffd63c;
    }
    .count_fleets{
        color: white !important;
    }
    .box_style{
        padding: 8px 0px;
    }
    .box_style label{
        padding: 5px 0 5px 0;
    }
    #date-time{
        background: #222222;
    color: white;
    padding: 14px;
    width: 100%;
    cursor: pointer;
    }
    .footer-box {
        display: flex;
        margin-top: 10px;
        justify-content: space-between;
        align-items: center;
        color: white;
        background: #d5b941;
        padding: 5;
        border-bottom-right-radius: 10px;
        border-bottom-left-radius: 10px;

    }
    .view_details {
        color: white;
        background: #ff8120;
        border: none;
        padding: 5px 10px;
        border-radius: 10px;
        width: 100%;
        text-align: center;
        cursor: pointer;
    }

    .view_details:hover {
        background: #ff8120;
        color: wheat;
        cursor: pointer;
    }
    .discount_btn_div{
        margin: 10px 0;
        display: flex;
        justify-content: end;
    }
    .discount_btn{
        color: white;
        padding: 5px 20px;
        background: #d5b941;
    }

    .coupon_btn {
        padding: 10px;
        font-size: 14px;
        color: white;
        background: #d5b941;
    }

    .modal-body {
        padding: 20px;
        background: #000;
        border: 1px solid;
    }

    .modal {
        background: rgb(0 0 0 / 48%);
    }

    .modal-header {
        background-color:#ffd63c;

    }

    #countdown h4 {
        color:#ffd63c;
        font-family: cursive;
    }

    #countdown {
        margin-bottom: 20px;
    }

    .coupon-code {
        margin-bottom: 20px;
    }

    .coupon-heading {
        font-size: 18px;
        margin-bottom: 10px;
    }
    .modal_style_p{
        display: none;
    }

    .coupon {
        font-size: 36px;
        color: #f00;
        /* Red color for emphasis */
    }

    .modal-footer {
        /* justify-content: center; */
        padding: 20px;
    }

    .meet_greet input[type="checkbox"] {
        height: 25px;
        width: 25px;
        margin-top: 6px;
    }

    .meet_greet {
        padding-top: 20px;
    }

    .meet_greet label {
        cursor: pointer;
    }

    .color {
        color: #d5b941;
        display: inline-block;
        border-bottom: 1px solid white;
        display: flex;
        text-align: center;
        margin-bottom: 10px;
        justify-content: center;
    }

    .p-6 strong {
        font-weight: bolder;
        font-size: 19px;
        color: #d5b941;
        display: flex;
        justify-content: center;
        margin: 5px;
    }

    .footer-box p {
        margin-bottom: 0px !important;
        color: white !important;
        margin-top: 10px;
    }

    .proceed {
        background-color: black;
        color: white;
        padding: 0px 15px;
        border-radius: 10px;

    }

    .p-6 {
        padding: 10px 10px 0 10px;
        height: 89%;
        display: flex;
        gap: 10px;
        align-items: center;
    }

    .form-container {
        background-color: black;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
        margin-bottom: 20px;
        margin-right: 10px;
        max-width: 300px;
    }

    .main-div {
        display: flex;
        flex-wrap: inherit;
    }

    .new_form {
        max-width: 100% !important;
        margin-right: 10px;
        background-color: rgb(0 0 0 / 71%) !important;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .button-1 {
        padding: 14px 40px !important;
    }

    .button-1:hover {
        background: #d5b941 !important;
        color: white !important;
        /* font-size: 19px; */
        font-weight: 600;
    }

    .both_btn {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-top: 20px;
    }

    .previous_btn {
        background: black !important;
        color: white;
        border: none;
        padding: 14px 42px;
        cursor: pointer;
        border-radius: 30px;
        transition: border-color 300ms ease, transform 300ms ease,
            background-color 300ms ease, color 300ms ease;
        transform-style: preserve-3d;
    }

    span#select2-payment_type-container {
        padding: 9px 20px;
    }

    .previous_btn:hover {
        transform: translate3d(0px, -6px, 0.01px);
        /* font-size: 19px; */
        font-weight: 600;
    }

    .new_form label {
        display: block;
        color: white !important;
        font-family: emoji;
        font-size: 21px;
        margin-top: 5px;
        min-width: 140px;
    }

    .new_form.step2.row {
        max-height: 100vh;
        overflow-y: auto;
    }

    /* Styling for webkit browsers */
    .new_form.step2.row::-webkit-scrollbar {
        width: 4px;
        border-radius: 10px;
    }

    .new_form.step2.row::-webkit-scrollbar-thumb {
        background-color: #000000;
        border-radius: 5px;
    }

    .new_form.step2.row::-webkit-scrollbar-track {
        background-color: #333333;
        /* Track background color */
    }

    /* Styling for Firefox */
    .new_form.step2.row {
        scrollbar-width: thin;
        scrollbar-color: #000000 #333333;
        /* Thumb and track colors for Firefox */
    }


    .payment_section_main {
        margin: 10px 0;
        border-top: 1px solid #000;
    }

    .new_form button[type="submit"] {
        background-color: #d5b941;
        color: #fff;
        border: none;
        border-radius: 4px;
        padding: 10px 20px;
        cursor: pointer;
        font-size: 16px;
        margin-left: 10px;
    }

    .new_form button[type="submit"]:hover {
        background-color: #d5b941;
    }

    .post {
        background-color: #f4f4f4;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .heading-border-bottom {
        margin-bottom: 10px;
        /* border-bottom: 1px solid #000; */
    }

    .section-padding {
        padding: 70px 0px 40px 0px;
    }

    .progress-bar_main {
        display: flex;
        justify-content: space-between;
        list-style: none;
        padding: 0;
        margin: 20px 0;
        flex-direction: row;
    }

    .progress-step {
        width: calc(100% / 4);
        text-align: center;
        position: relative;
        color: #ccc;
    }

    .progress-step.active {
        color: #d5b941;
        font-size: 19px;
    }

    .p-6 img {
        height: 100px;
        width: 100px;
        border-radius: 50%;
    }

    .progress-step.active::after {
        content: "";
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 46px;
        height: 10px;
        background-color: #d5b941;
        /* border-radius: 25%; */
    }

    .payment_section {
        display: flex;
        justify-content: space-between;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        background: rgb(0 0 0 / 77%);
    }

    .car_name {
        color: white;
        font-size: 15px;
        padding: 0%;
        margin: 0%;
    }

    .p-6 {
        background: black;
        border-radius: 10px;
    }

    .col-md-7,
    .col-md-5 {
        flex: 1;
        /* Equal width for both columns */
    }

    .border-botom {
        padding-bottom: 30px;
        border-bottom: 1px solid rgb(255, 255, 255) !important;
    }

    .column_type {
        align-items: center;
        gap: 1.5rem;
        /* padding-top: 10px;   */
    }

    .summary strong {
        color:#ffd63c; !important;
        /* Set strong tag color to orange */
        /* min-width: 134px; */
        /* Set minimum width for strong tag */
    }

    .summary p {
        margin-bottom: 0;
        /* Remove bottom margin from p tag */
        color: white;
        /* Set p tag color to white */
    }

    .icon_text i {
        color: white;
        background:#ffd63c;
        padding: 5px;
        border-radius: 14px;
    }

    .icon_text {
        display: flex;
        align-items: baseline;
        gap: 10px;
    }

    /* Common styles for both input fields */
    .styled-input {
        background: #222222;
        border: 1px solid #d5b941 !important;
        color: white;
        border: none;
        border-radius: 21px;
        height: 45px;
        padding: 10px;
        box-sizing: border-box;
        width: 100%;
        /* Make sure the input fields take the full width of their container */
    }

    .styled-input::placeholder {
        color: white;
    }

    #error_msg {
        background: red;
        color: white;
        padding: 10px 20px;
        border-radius: 10px;
        border-top-right-radius: 0px;
        display: flex;
        justify-content: space-between;
        align-content: center;
    }

    #error_msg p {
        margin: 0;
        color: white;
        font-size: 17px;
        cursor: pointer;
    }

    /* Common styles for both input fields */
    .styled-input {
        background: #222222;
        
        color: white;
        border: none;
        border-radius: 21px;
        height: 45px;
        padding: 10px;
        box-sizing: border-box;
        width: 100%;
    }

    /* Common styles for both input fields */
    /* .styled-input {
    background: #222222;
    color: white;
    border: none;
    border-radius: 21px;
    height: 45px;
    padding: 10px;
    box-sizing: border-box;
    width: 100%;
    }

    .styled-input::placeholder {
        color: white;
    }
    .styled-input::-webkit-calendar-picker-indicator {
        filter: invert(1) brightness(2);
        background: none;
    }

    .styled-input::-webkit-inner-spin-button,
    .styled-input::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
    .styled-input::-webkit-datetime-edit,
    .styled-input::-webkit-datetime-edit-text,
    .styled-input::-webkit-datetime-edit-month-field,
    .styled-input::-webkit-datetime-edit-day-field,
    .styled-input::-webkit-datetime-edit-year-field,
    .styled-input::-webkit-datetime-edit-hour-field,
    .styled-input::-webkit-datetime-edit-minute-field,
    .styled-input::-webkit-datetime-edit-ampm-field {
        color: white;
        background-color: #222222;
    } */
        /* Styling the time input */
        input[type="time"].timepicker {
            background: #222222;
            color: white;
            border: none;
            border-radius: 21px;
            height: 45px;
            padding: 10px;
            box-sizing: border-box;
        }

        /* Ensuring the placeholder text is also white */
        input[type="time"].timepicker::placeholder {
            color: white;
        }

        .plus_icon {
            color: #d5b941;
            margin-top: -16px;
            background: transparent;
            border: none;
            display: flex;
            width: 100%;
            justify-content: end;
            padding-right: 14px;
        }

        /* Styling the clock icon for webkit browsers (e.g., Chrome, Safari) */
        input[type="time"].timepicker::-webkit-calendar-picker-indicator {
            filter: invert(1);
            background-color: white;
            /* This can be adjusted or removed based on your design preference */
            border-radius: 50%;
            padding: 5px;
            /* Adjust the padding if necessary */
        }

        input[type="datetime-local"].timepicker::-webkit-calendar-picker-indicator {
            filter: invert(1);
            background-color: white;
            /* This can be adjusted or removed based on your design preference */
            border-radius: 50%;
            padding: 5px;
            /* Adjust the padding if necessary */
        }

        /* Removing the default webkit appearance */
        input[type="time"].timepicker::-webkit-inner-spin-button,
        input[type="time"].timepicker::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Styling the date and time picker popup for WebKit browsers */
        .styled-input::-webkit-calendar-picker-indicator {
            /* Apply styles to the picker popup icon */
        }

        /* Custom popup styles (limited by browser capabilities) */
        .styled-input::-webkit-datetime-edit,
        .styled-input::-webkit-datetime-edit-text,
        .styled-input::-webkit-datetime-edit-month-field,
        .styled-input::-webkit-datetime-edit-day-field,
        .styled-input::-webkit-datetime-edit-year-field,
        .styled-input::-webkit-datetime-edit-hour-field,
        .styled-input::-webkit-datetime-edit-minute-field,
        .styled-input::-webkit-datetime-edit-ampm-field {
            /* Apply styles to the popup elements */
        }

        /* Styling the header of the date and time picker popup */
        .styled-input::-webkit-datetime-edit-fields-wrapper {
            background-color: #222222;
            /* Background color of the popup */
        }

        /* Styling the text color inside the date and time picker popup */
        .styled-input::-webkit-datetime-edit,
        .styled-input::-webkit-datetime-edit-text {
            color: white;
            /* Text color inside the popup */
        }

        .date-time-picker {
            position: relative;
        }

        .picker-popup {
            display: none;
            position: absolute;
            top: calc(100% + 10px);
            left: 0;
            background-color: #fff;
            padding: 10px;
            border: 1px solid #ccc;
            z-index: 1000;
        }

        .fleet_id {
            height: 20px;
            width: 20px;
        }

        .date-time-picker.open .picker-popup {
            display: block;
        }

        .close-button {
            position: absolute;
            top: 5px;
            right: 5px;
            background: none;
            border: none;
            cursor: pointer;
            font-size: 20px;
            color: #999;
        }

        .border-radius-0 {
            border-radius: 0 !important;
        }

        /* .selected-fleet {
            border: 2px solid #d5b941;
        } */

        .select2 {
            border-radius: 0 !important;
        }

        .styled-input1 {
            min-width: 70px;
            border: 1px solid #d5b941;
            border: 1px solid white;
            margin-top: 5px;
        }

        .unique-dropdown {
            position: relative;
            display: inline-block;
        }

        .unique-dropdown-content {
            display: none;
            position: absolute;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            min-width: 220px;
            background: black;
            border-radius: 10px;
            margin-top: -10px;
        }

        p.unique-dropbtns {
            color: white;
            border: 1px solid #ffc107;
            padding: 10px;
            min-width: 220px;
            cursor: pointer;
            border-radius: 10px;
        }

        .unique-dropdown-content ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .unique-dropdown-content li {
            padding: 12px 16px;
            cursor: pointer;
        }

        .unique-dropdown-content li:hover {
            background-color: #ffa51c;
            color: white;
        }

        .unique-dropdown:hover .unique-dropdown-content {
            display: block;
        }


        #payment-form {
            margin-top: 20px;
        }

        .dropdown_menus {
            color:#ffd63c;
            font-size: 20px;
            font-weight: 600;
            padding: 20px 0px 0px 0px;

        }

        /* Responsive adjustments */
        @media screen and (max-width: 768px) {
            .date-time-picker {
                width: 100%;
            }

            .new_form{
                padding: 10px !important;
                max-width: unset !important;
            }
            .payment_section{
                padding: 0px;
            }

            .styled-input1 {
                width: 100%;
            }

            .picker-popup {
                width: 100%;
                left: 0;
                top: calc(100% + 5px);
            }

        }

        @media (max-width: 768px) {
            .form-container {
                max-width: 100% !important;
                min-width: 320px;
            }

            .column_type {
                flex-direction: column !important;
                align-items: start !important;
                text-align: left !important;
                gap: 0px !important;

            }

            .custom_input {
                height: 42px !important;
            }

            input[type=number] {
                width: 100% !important;
            }

            .color_theme {
                font-size: 23px !important;
            }

            .p-6 {
                height: auto !important;
            }

        }
</style>
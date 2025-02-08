{{-- <x-mail::message>
# Introduction

The body of your message.

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message> --}}
@component('mail::message')
# Booking Confirmation

Dear {{ $reservation->client->name }},

Your booking for room number **{{ $reservation->room->room_number }}** at **{{ $reservation->room->hotel->name }}** has been confirmed.

**Booking Details:**
- **Check-in Date:** {{ $reservation->check_in_date }}
- **Check-out Date:** {{ $reservation->check_out_date }}
- **Total Price:** {{ $reservation->total_price }}

Thank you for using our website.

@component('mail::button', ['url' => route('report', ['id' => $reservation->id])])
View Booking Details
@endcomponent

Best regards,  
Support Team
@endcomponent

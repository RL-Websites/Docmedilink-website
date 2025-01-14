@extends('emails.layout')
@section('mail-body')
    <div class="container">
        <div class="content">
            <p><strong>Hi, </strong> {{ $first_name }}</p>
        </div>
        <div class="footer">
            <p>Thank you for your submission. We will get back to you soon.</p>
            <p style="font-weight: bold;">Regards, <br> DocMedLink</p>
        </div>
    </div>
@endsection

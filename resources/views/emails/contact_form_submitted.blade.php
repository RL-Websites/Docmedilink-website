@extends('emails.layout')

@section('mail-body')
    <div class="container">
        <h3>Contact Query</h3>
        <div class="content">
            <p><strong>First Name:</strong> {{ $first_name }}</p>
            <p><strong>Email:</strong> {{ $email }}</p>
            <p><strong>Phone:</strong> {{ $phone }}</p>
            <p><strong>Details:</strong> {{ $details }}</p>
        </div>
        <div class="footer">
            <p>Thank you for your submission. We will get back to you soon.</p>
            <p style="font-weight: bold;">Regards, <br> DocMedLink</p>
        </div>
    </div>
@endsection

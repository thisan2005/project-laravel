$(document).ready(function() {
    $('#contact-form').on('submit', function(e) {
        e.preventDefault();

        //Hiding error messages
        $('.name-error').text('');
        $('.dob-error').text('');
        $('.mobile-error').text('');
        $('.email-error').text('');
        $('.country-error').text('');

        let valid = true;

        // Validate empty inputs
        const name = $('#name').val().trim();
        const country = $('#country').val().trim();
        if (name === '') {
            $('.name-error').text('Name is required');
            valid = false;
        } 
        if (country === '') {
            $('.country-error').text('Country is required');
            valid = false;
        }

        // Validate Email
        const email = $('#email').val().trim();
        const emailExpres = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (email === '') {
            $('.email-error').text('Email is required');
            valid = false;
        } else if (!emailExpres.test(email)) {
            $('.email-error').text('Invalid Email');
            valid = false;
        }

        //Validate Date
        const dob = $('#dob').val().trim();
        const dobExpres = /^\d{4}-\d{2}-\d{2}$/;
        if (dob === '') {
            $('.dob-error').text('Birthday is required');
            valid = false;
        } else if (!dobExpres.test(dob)) {
            $('.dob-error').text('Invalid Date');
            valid = false;
        }

        //Validate Mobile Number
        const mobile = $('#mobile').val().trim();
        const mobileExpres = /^\d{9}$/;
        if (mobile === '') {
            $('.mobile-error').text('Mobile number is required');
            valid = false;
        } else if (!mobileExpres.test(mobile)) {
            $('.mobile-error').text('Invalid Number');
            valid = false;
        }

        if (valid) {
            this.submit();
        }
    });
});
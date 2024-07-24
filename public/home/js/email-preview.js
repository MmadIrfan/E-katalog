function previewEmail(event) {
    event.preventDefault();

    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;

    var subject = encodeURIComponent("New Inquiry about Rattan Furniture");
    var body = encodeURIComponent(`
Dear Aesthetic Rattan Team,

I hope this email finds you well. My name is ${name} and I am writing to express my interest in your rattan furniture collection.

I would greatly appreciate more information about your products, specifically:
- Available styles and designs
- Pricing details
- Customization options
- Delivery and installation services

Additionally, if you have any current promotions or special offers, I would be very interested to learn about them.

Thank you for your time and attention. I look forward to hearing back from you soon.

Best regards,
${name}

This inquiry was sent via the Aesthetic Rattan website contact form.
    `);

    var mailtoLink = `mailto:marketing@aestheticrattan.com?subject=${subject}&body=${body}`;

    window.location.href = mailtoLink;

    return false;
}

document.addEventListener("DOMContentLoaded", function () {
    var form = document.getElementById("inquiryForm");
    if (form) {
        form.addEventListener("submit", previewEmail);
    } else {
        console.error("Form tidak ditemukan");
    }
});

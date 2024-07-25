function previewBuyEmail(event) {
    event.preventDefault();

    var productName = document.getElementById("productName").value;

    var subject = encodeURIComponent("Inquiry about " + productName);
    var body = encodeURIComponent(`
Dear Aesthetic Rattan Team,

I hope this email finds you well. I am writing to express my interest in purchasing the following product:

Product Name: ${productName}

I would greatly appreciate more information about this product, specifically:
- Current pricing
- Available customization options
- Estimated delivery time
- Payment methods

Additionally, if you have any current promotions or special offers for this product, I would be very interested to learn about them.

Thank you for your time and attention. I look forward to hearing back from you soon.

Best regards,
[Your Name]

This inquiry was sent via the Aesthetic Rattan website product page.
    `);

    var mailtoLink = `mailto:marketing@aestheticrattan.com?subject=${subject}&body=${body}`;

    window.location.href = mailtoLink;

    return false;
}

document.addEventListener("DOMContentLoaded", function () {
    var form = document.getElementById("buyForm");
    if (form) {
        form.addEventListener("submit", previewBuyEmail);
    } else {
        console.error("Buy form not found");
    }
});

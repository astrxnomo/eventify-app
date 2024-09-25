// Selecciona los elementos del DOM
var eventName = document.getElementById('eventName');
var eventCountry = document.getElementById('eventCountry');
var eventStartDate = document.getElementById('eventStartDate');
var eventDescription = document.getElementById('eventDescription');
var eventPrice = document.getElementById('eventPrice');
var eventImage = document.getElementById('eventImage');
var eventNamePreview = document.getElementById('eventNamePreview');
var eventLocationPreview = document.getElementById('eventLocationPreview');
var eventStartDatePreview = document.getElementById('eventDatePreview');
var eventDescriptionPreview = document.getElementById('eventDescriptionPreview');
var eventPricePreview = document.getElementById('eventPricePreview');
var eventImageCard = document.getElementById('eventImagePreview');

// Añade los event listeners
eventName.addEventListener('input', function() {
    eventNamePreview.textContent = this.value;
});

eventCountry.addEventListener('input', function() {
    eventLocationPreview.textContent = this.value;
});

eventStartDate.addEventListener('input', function() {
    eventStartDatePreview.textContent = this.value;
});

eventDescription.addEventListener('input', function() {
    eventDescriptionPreview.textContent = this.value;
});

eventPrice.addEventListener('input', function() {
    var formattedValue = parseFloat(this.value).toLocaleString('en-US');
    eventPricePreview.textContent = '$' + formattedValue;
});

eventImage.addEventListener('change', function() {
    var file = this.files[0];
    if (file) {
        var reader = new FileReader();
        reader.onload = function(e) {
            eventImageCard.src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
});

document.querySelectorAll('input[name="eventCategories[]"]').forEach(function(checkbox) {
    checkbox.addEventListener('change', function() {
        var selectedCheckboxes = document.querySelectorAll('input[name="eventCategories[]"]:checked');
        var badgeContainer = document.querySelector('.badge-container');

        if (selectedCheckboxes.length > 3) {
            this.checked = false;
            document.getElementById('categoryError').classList.remove('d-none');
        } else {
            badgeContainer.innerHTML = '';
            document.getElementById('categoryError').classList.add('d-none');
            selectedCheckboxes.forEach(function(checkbox) {
                var badge = document.createElement('span');
                badge.className = 'badge bg-secondary-subtle text-secondary-emphasis rounded-pill mb-2 me-1';
                badge.textContent = checkbox.nextElementSibling.textContent.trim();
                badgeContainer.appendChild(badge);
            });
        }
    });
});

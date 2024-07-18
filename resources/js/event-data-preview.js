eventName.addEventListener('input', function() {
    eventNamePreview.textContent = this.value;
});

eventCountry.addEventListener('input', function() {
    eventLocationPreview.textContent = this.value;
});

eventDate.addEventListener('input', function() {
    eventDatePreview.textContent = this.value;
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

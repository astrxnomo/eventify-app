document.getElementById('EventForm').addEventListener('submit', function(event) {
    // Prevenir el envío del formulario si hay errores
    event.preventDefault();

    let errors = [];

    // Obtener valores de los campos
    const eventName = document.getElementById('eventName').value.trim();
    const eventDescription = document.getElementById('eventDescription').value.trim();
    const eventCategory = document.querySelector('input[name="eventCategory"]:checked');
    const eventCountry = document.getElementById('eventCountry').value.trim();
    const eventRegion = document.getElementById('eventRegion').value.trim();
    const eventCity = document.getElementById('eventCity').value.trim();
    const eventAddress = document.getElementById('eventAddress').value.trim();
    const eventCapacity = document.getElementById('eventCapacity').value.trim();
    const eventImage = document.getElementById('eventImage').value.trim();

    // Validar nombre del evento
    if (eventName.length < 5 || eventName.length > 100) {
        errors.push("El nombre del evento debe tener entre 5 y 100 caracteres.");
    }

    // Validar descripción del evento
    if (eventDescription.length < 20) {
        errors.push("La descripción del evento debe tener al menos 20 caracteres.");
    }

    // Validar categoría del evento
    if (!eventCategory) {
        errors.push("Debes seleccionar una categoría para el evento.");
    }

    // Validar país
    if (eventCountry === "") {
        errors.push("Debes escribir un país donde se realizará el evento.");
    }

    // Validar región
    if (eventRegion === "") {
        errors.push("Debes escribir una región donde se realizará el evento.");
    }

    // Validar ciudad
    if (eventCity === "") {
        errors.push("Debes escribir una ciudad donde se realizará el evento.");
    }

    // Validar dirección del evento
    if (eventAddress.length < 10) {
        errors.push("La dirección del evento debe tener al menos 10 caracteres.");
    }
    //Siguiendo el proposito de que se puede crear eventos grandes y pequeños
    if (eventCapacity< 4) {
        errors.push("La capacidad del evento debe ser mayor a 5");
    }

    // Mostrar errores o enviar el formulario si no hay errores
    if (errors.length > 0) {
        displayErrors(errors);
    } else {
        // Si no hay errores, enviar el formulario
        this.submit();
    }

    // Validar que la imagen sea en formato PNG o JPG
    if (eventImage) {
        const allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;  //expresion regular
        if (!allowedExtensions.exec(eventImage)) {
            errors.push("La imagen debe ser en formato PNG o JPG.");
        }
    }

    // Mostrar errores o enviar el formulario si no hay errores
    if (errors.length > 0) {
        displayErrors(errors);
    } else {
        // Si no hay errores, enviar el formulario
        this.submit();
    }
});

// Función para mostrar los errores en la interfaz
function displayErrors(errors) {
    // Obtener el formulario
    let form = document.getElementById('EventForm');

    // Limpiar errores previos
    let errorContainer = document.getElementById('errorContainer');
    if (!errorContainer) {
        errorContainer = document.createElement('div');
        errorContainer.id = 'errorContainer';
        errorContainer.classList.add('alert', 'alert-danger', 'mt-3');
        form.insertAdjacentElement('afterbegin', errorContainer);
    }
    
    errorContainer.innerHTML = ''; // Limpiar contenido previo

    // Agregar errores
    errors.forEach(function(error) {
        const errorParagraph = document.createElement('p');
        errorParagraph.innerText = error;
        errorContainer.appendChild(errorParagraph);
    });
}

// Validar campos en tiempo real
document.querySelectorAll('#idform input, #idform select, #idform textarea').forEach(function(input) {
    input.addEventListener('input', function() {
        // Limpiar errores en tiempo real
        document.getElementById('errorContainer')?.remove();
    });
});

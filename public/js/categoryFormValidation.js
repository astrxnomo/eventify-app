document.getElementById('CategoryForm').addEventListener('submit', function(event) {
    // Prevenir el envío del formulario si hay errores
    event.preventDefault();

    let errors = [];

    // Obtener valores de los campos
    const CategoryName = document.getElementById('name').value.trim();
    

    // Validar nombre de la categoria
    if (CategoryName.length < 5 || CategoryName.length > 100) {
        errors.push("El nombre de la categoria debe tener entre 5 y 100 caracteres.");
    }

    

    

    // Mostrar errores o enviar el formulario si no hay errores
    if (errors.length > 0) {
        displayErrors(errors);
    } else {
        // Si no hay errores, enviar el formulario
        this.submit();
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
    let form = document.getElementById('CategoryForm');

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

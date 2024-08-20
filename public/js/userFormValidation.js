document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('userForm');
    
    if (form) {
        form.addEventListener('submit', function(event) {
            // Evitar el envío del formulario por defecto
            event.preventDefault();
    
            // Obtener valores de los campos
            const name = document.getElementById('nom').value.trim();
            const email = document.getElementById('email').value.trim();
            const password = document.getElementById('password').value;
            const role = document.getElementById('role').value;
            const isEdit = form.getAttribute('action').includes('update');

            // Limpiar mensajes de error previos
            const errorMessages = document.getElementById('errorMessages');
            errorMessages.innerHTML = '';
            let errors = [];
    
            // Validar nombre
            if (name === '') {
                errors.push('El nombre es requerido.');
            }
    
            // Validar email
            if (email === '') {
                errors.push('El email es requerido.');
            } else if (!validateEmail(email)) {
                errors.push('Ingresa un email válido.');
            }
    
            // Validar contraseña
            if (password === '') {
                if (!isEdit) {
                    errors.push('La contraseña es requerida.');
                }
            } else {
                if (password.length < 8) {
                    errors.push('La contraseña debe tener al menos 8 caracteres.');
                }
            }
    
            // Validar rol
            if (role === '') {
                errors.push('Selecciona un rol.');
            }
    
            // Mostrar errores si existen
            if (errors.length > 0) {
                displayErrors(errors);
            } else {
                // Si no hay errores, enviar el formulario
                this.submit();
            }
        });
    }
});

// Función para validar el formato del email
function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}

// Función para mostrar los errores
function displayErrors(errors) {
    const errorMessages = document.getElementById('errorMessages');
    errorMessages.innerHTML = errors.map(error => `<p style="color:red;">${error}</p>`).join('');
}

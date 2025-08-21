// script.js
document.getElementById('registrationForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Evita el envío del formulario

    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    // Aquí puedes agregar más validaciones si es necesario

    alert(`¡Registro exitoso!\nNombre: ${name}\nCorreo: ${email}`);
});


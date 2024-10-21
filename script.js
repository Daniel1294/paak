// Interacción de botones
const buttons = document.querySelectorAll('button');

buttons.forEach(button => {
    button.addEventListener('mouseenter', () => {
        button.style.backgroundColor = '#C41F28'; // Color más oscuro al pasar el cursor
    });
    button.addEventListener('mouseleave', () => {
        button.style.backgroundColor = '#E52232'; // Color original
    });
    button.addEventListener('mousedown', () => {
        button.style.backgroundColor = '#A71B22'; // Color aún más oscuro al hacer clic
    });
    button.addEventListener('mouseup', () => {
        button.style.backgroundColor = '#C41F28'; // Color al soltar clic
    });
});

// Toggle dark/light mode
document.addEventListener('DOMContentLoaded', () => {
    const toggle = document.getElementById('mode-toggle');
    toggle.addEventListener('click', () => {
        document.body.classList.toggle('dark');
        document.body.classList.toggle('light');
    });
});
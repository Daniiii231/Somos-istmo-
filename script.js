// Añadir animaciones de fade-in al cargar la página
window.onload = function() {
    const sections = document.querySelectorAll('.fade-in');
    sections.forEach(section => {
        section.classList.add('fade-in');
    });
};
// Función para mostrar/ocultar las secciones al hacer clic en los enlaces
function toggleSection(sectionId) {
    // Obtener todas las secciones
    const sections = document.querySelectorAll('section');
    
    // Ocultar todas las secciones
    sections.forEach(function(section) {
        section.classList.add('d-none');
    });
    
    // Mostrar la sección seleccionada
    const selectedSection = document.getElementById(sectionId);
    selectedSection.classList.remove('d-none');
}

// Función para mostrar/ocultar las secciones al hacer clic en los enlaces
function toggleSection(sectionId) {
    // Obtener todas las secciones
    const sections = document.querySelectorAll('section');
    
    // Ocultar todas las secciones
    sections.forEach(function(section) {
        section.classList.add('d-none');
    });
    
    // Mostrar la sección seleccionada
    const selectedSection = document.getElementById(sectionId);
    selectedSection.classList.remove('d-none');
}
// Función para mostrar/ocultar secciones al hacer clic en los enlaces
function showSection(sectionId) {
    // Obtener todas las secciones
    const sections = document.querySelectorAll('.section-content');
    
    // Ocultar todas las secciones
    sections.forEach(function(section) {
        section.classList.add('d-none');
    });
    
    // Mostrar la sección seleccionada
    const selectedSection = document.getElementById(sectionId);
    selectedSection.classList.remove('d-none');
}

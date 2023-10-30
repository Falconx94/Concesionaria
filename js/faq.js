function searchQuestions(searchTerm) {
    // Obtener los elementos de pregunta
    const questions = document.querySelectorAll(".accordion-item-hd");
  
    // Ocultar todos los elementos
    questions.forEach((question) => {
      question.style.display = "none";
    });
  
    // Mostrar los elementos que coinciden con el texto de búsqueda
    questions.forEach((question) => {
      const questionText = question.textContent.toLowerCase();
      if (questionText.includes(searchTerm.toLowerCase())) {
        question.style.display = "block";
      }
    });
  
    // Ocultar las respuestas de las preguntas ocultas
    const answers = document.querySelectorAll(".accordion-item-bd");
    answers.forEach((answer) => {
      answer.style.display = "none";
    });
  
    // Mostrar las respuestas de las preguntas coincidentes
    questions.forEach((question) => {
      if (question.style.display === "block") {
        question.nextElementSibling.style.display = "block";
      }
    });
  }
  
  // Escuchar cambios en el campo de búsqueda
  document.querySelector("#search-input").addEventListener("input", () => {
    // Obtener el texto ingresado en el campo de búsqueda
    const searchTerm = document.querySelector("#search-input").value;
  
    // Ejecutar la función de búsqueda
    searchQuestions(searchTerm);
  });
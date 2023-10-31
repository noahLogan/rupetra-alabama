// ------------------------------->>>>>>>>>>>>>>>>>>>>>>>>> Lista Alumnos
function mostrarAlumnos(){
    document.getElementById('alumnos').style.display = 'block';
}

function ocultarAlumnos(){
    document.getElementById('alumnos').style.display = 'none';
}
    //Insertar Alumno
function mostrarRegistroAlumnos(){
    document.getElementById('alumnosRegistro').style.display = 'block';
}

function ocultarRegistroAlumnos(){
    document.getElementById('alumnosRegistro').style.display = 'none';
}
    //Actualizar Alumno
function mostrarActualizarAlumnos(){
    document.getElementById('alumnosActualizar').style.display = 'block';
}

function ocultarActualizarAlumnos(){
    document.getElementById('alumnosActualizar').style.display = 'none';
}
    //Actualizar Alumno
function mostrarEliminarAlumnos(){
    document.getElementById('alumnosEliminar').style.display = 'block';
}

function ocultarEliminarAlumnos(){
    document.getElementById('alumnosEliminar').style.display = 'none';
}


// ------------------------------->>>>>>>>>>>>>>>>>>>>>>>>> Lista Profesores
function mostrarProfesores(){
    document.getElementById('profesores').style.display = 'block';
}

function ocultarProfesores(){
    document.getElementById('profesores').style.display = 'none';
}
    // Mostrar listas de Alumnos
function mostrarAlumnosFprofesores(){
    document.getElementById('alumnosList').style.display = 'block';
}
    // Ocultar listas de Alumnos
function ocultarAlumnosFprofesores(){
    document.getElementById('alumnosList').style.display = 'none';
}
    // Mostrar listas de Tutores
function mostrarTutoresFprofesores(){
    document.getElementById('tutoresList').style.display = 'block';
}
    // Ocultar listas de Tutores
function ocultarTutoresFprofesores(){
    document.getElementById('tutoresList').style.display = 'none';
}
    // Mostrar Registro de calificaciones
function mostrarRegistrarPromedio(){
    document.getElementById('registrarPromedio').style.display = 'block';
}
    // Ocultar Registro de calificaciones
function ocultarRegistrarPromedio(){
    document.getElementById('registrarPromedio').style.display = 'none';
}
    // Mostrar actualizción de calificaciones
function mostrarActualizarPromedio(){
    document.getElementById('actualizarPromedio').style.display = 'block';
}
    // Ocultar actualizción de calificaciones
function ocultarActualizarPromedio(){
    document.getElementById('actualizarPromedio').style.display = 'none';
}

// ------------------------------->>>>>>>>>>>>>>>>>>>>>>>>> Lista Tutores
function mostrarTutores(){
    document.getElementById('tutores').style.display = 'block';
}

function ocultarTutores(){
    document.getElementById('tutores').style.display = 'none';
}




function escapeHTML(text) {
    var map = {
      '&': '&amp;',
      '<': '&lt;',
      '>': '&gt;',
      '"': '&quot;',
      "'": '&#39;'
    };
  
    return text.replace(/[&<>"']/g, function(m) {
      return map[m];
    });
}


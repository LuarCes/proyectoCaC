document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('form-libro');

    form.addEventListener('submit', (event) => {
       
        if (!validateForm()) {
            // mensaje en consola indica que el formulario no es válido
            console.log('El formulario no es válido. Por favor, corrige los errores.');
            // Evita que el formulario se envíe
            event.preventDefault();
        } else {
            console.log('El formulario es válido. Enviar datos...');
        }
    });

    const validateForm = () => {
        let isValid = true;
        isValid = validateField('titulo', 'El campo titulo es obligatorio') && isValid;
        isValid = validateField('autor', 'El campo autor es es obligatorio') && isValid;
        isValid = validateField('genero', 'El campo genero es obligatorio') && isValid;
        isValid = validateField('calificacion', 'El campo clasificacion es obligatorio') && isValid;
        isValid = validateField('anio', 'El campo año es obligatorio') && isValid;
        isValid = validateField('editorial', 'El campo editorial es obligatorio') && isValid;
        isValid = validateSelectField('idioma', 'El campo idioma es obligatorio') && isValid;
        return isValid;
    };

    const validateField = (fieldId, errorMessage) => {
        const field = document.getElementById(fieldId);
        const value = field.value.trim();
        if (value === '') {
            setErrorFor(field, errorMessage);
            return false;
        } else {
            setSuccessFor(field);
            return true;
        }
    };

    const validateSelectField = (fieldId, errorMessage) => {
        const field = document.getElementById(fieldId)
        const value = field.value
        if(value === ''){
            setErrorFor(field, errorMessage)
            return false
        } else {
            setSuccessFor(field)
            return true
        }
    }

    // Función para establecer un mensaje de error en un campo
    const setErrorFor = (input, message) => {
        const formControl = input.closest('div');
        const errorText = formControl.querySelector('.error-text');
        // Agrega clase error
        formControl.classList.add('error');
        // Establece el texto del mensaje de error
        errorText.innerText = message;
        // Establece el foco en el campo de entrada
        input.focus();
    };

    // Función para eliminar un mensaje de error de un campo
    const setSuccessFor = (input) => {
        // Encuentra el elemento padre del campo de entrada
        const formControl = input.closest('div');
        // Elimina la clase de error 
        formControl.classList.remove('error');
        // Encuentra el elemento de texto de error 
        const errorText = formControl.querySelector('.error-text');
        // Establece el texto de error como vacío
        errorText.innerText = '';
    };

    form.querySelectorAll('input').forEach(input => {
        input.addEventListener('input', () => {
            if (input.value.trim() !== '') {
                setSuccessFor(input);
            }
        });
    });

    // Agrega eventos para borrar las clases de error 
    form.querySelectorAll('select').forEach(select => {
        select.addEventListener('change', () => {
            // Obtiene el valor del campo 
            const value = select.value;
            // Si se selecciona una opción, elimina cualquier mensaje de error
            if (value !== '') {
                setSuccessFor(select);
            }
        });
    });

})
// Obtener el botón y el pop-up
let button = document.getElementById("myButton");
let popup = document.getElementById("popup");

// Mostrar el pop-up al hacer clic en el botón
button.onclick = function () {
  popup.style.display = "block";
}

// Pop UP que se muestre a los 20 segundos


// Ocultar el pop-up al hacer clic en el botón de cerrar
let closeButton = document.getElementById("closeButton");
closeButton.onclick = function () {
  popup.style.display = "none";
}

function mostrarImagen() {
  let imagen = document.getElementById("help");
  imagen.classList.add("visible");
  setTimeout(function() {
    imagen.classList.remove("visible");
    setTimeout(mostrarImagen, 5000); // oculta la imagen nuevamente después de 5 segundos
  }, 10000); // muestra la imagen después de 10 segundos
}


mostrarImagen(); // llama a la función para iniciar el bucle

// Ocultar mensaje de ayuda

let helpImg = document.getElementById("help");

helpImg.addEventListener("click", function() {
  helpImg.style.display = "none";
});


// Idiomas 
const languageContainer = document.getElementById("language-container");


function changeLanguage(languageCode) {
  const column1Title = document.querySelector('.column:nth-child(1) h3');
  const column1Content = document.querySelectorAll('.column:nth-child(1) p');
  const column2Title = document.querySelector('.column:nth-child(2) h3');
  const column2Content = document.querySelectorAll('.column:nth-child(2) p');
  const column3Title = document.querySelector('.column:nth-child(3) h3');
  const column3Content = document.querySelectorAll('.column:nth-child(3) p');

  // Switch para actualizar los elementos de las columnas según el idioma
  switch (languageCode) {
    case 'es':
      column1Title.innerText = 'Información personal';
      column1Content.forEach(function (element) {
        if (element.textContent === 'Quina edat tens?' || element.textContent === 'How old are you?') {
          element.innerText = 'Que edad tienes?';
        } else if (element.textContent === 'Com et dius?' || element.textContent === 'What is your name?') {
          element.innerText = 'Como te llamas?';
        } else if (element.textContent === 'Alguna patologia de la victima?' || element.textContent === 'Any pathology of the victim?') {
          element.innerText = 'Alguna patologia de la victima?';
        } else if (element.textContent === 'Quina relació tens amb la victima?' || element.textContent === 'What is your relation with the victim?') {
          element.innerText = 'Cual es tu relación con la victima?';
        } else if (element.textContent === 'Quin es el teu DNI?' || element.textContent === 'What is your ID?') {
          element.innerText = 'Cual es tu DNI?';
        } else if (element.textContent === 'Em pots verificar la informació per corroborar?' || element.textContent === 'Can you verify the information for me to corroborate?') {
          element.innerText = 'Me puedes verificar la informacion para corroborar?';
        } else if (element.textContent === 'Quantes victimes hi ha?' || element.textContent === 'How many victims are there?') {
          element.innerText = 'Cuantas victimas hay?';
        }
      });
      column2Title.innerText = 'Incidéncias';
      column2Content.forEach(function (element) {
        if (element.textContent === 'Quina és la teva emergència?' || element.textContent === 'What is your emergency?') {
          element.innerText = 'Cual es tu emegencia?';
        } else if (element.textContent === 'Està respirant?' || element.textContent === 'Is he/she breathing?') {
          element.innerText = 'Esta respirando?';
        } else if (element.textContent === 'Què ha passat exactament?' || element.textContent === 'What exactly happened?') {
          element.innerText = 'Que ha pasado exactamente?';
        } else if (element.textContent === 'Estàs sol?' || element.textContent === 'Are you alone?') {
          element.innerText = 'Estas Solo?';
        }
      });
      column3Title.innerText = 'Localización';
      column3Content.forEach(function (element) {
        if (element.textContent === 'Quina és la direcció de la emergència?' || element.textContent === 'What is the address of the emergency?') {
          element.innerText = 'Cual es la direccion de la emergencia?';
        } else if (element.textContent === 'Em podríes dir el carrer?' || element.textContent === 'Can you tell me the street?') {
          element.innerText = 'Me sabrias decir la calle?';
        } else if (element.textContent === 'Diguem què veus al teu voltant' || element.textContent === 'Tell me what you see around you') {
          element.innerText = 'Indicame que ves a tu alrededor';
        } else if (element.textContent === 'On estas?' || element.textContent === 'Where are you?') {
          element.innerText = 'Donde estas?';
        } else if (element.textContent === 'Estas a Catalunya?' || element.textContent === 'Are you in Catalonia?') {
          element.innerText = 'Estas en Cataluña?';
        } else if (element.textContent === 'En quin poble?' || element.textContent === 'In what town?') {
          element.innerText = 'En que pueblo?';
        } else if (element.textContent === 'En quina provincia?' || element.textContent === 'In which province?') {
          element.innerText = 'En que provincia?';
        } 
      });
      break;


    case 'ca':
      column1Title.innerText = 'Informació personal';
      column1Content.forEach(function (element) {
        if (element.textContent === 'Que edad tienes?' || element.textContent === 'How old are you?') {
          element.innerText = 'Quina edat tens?';
        } else if (element.textContent === 'Como te llamas?' || element.textContent === 'What is your name?') {
          element.innerText = 'Com et dius?';
        } else if (element.textContent === 'Alguna patologia de la victima?' || element.textContent === 'Any pathology of the victim?') {
          element.innerText = 'Alguna patologia de la victima?';
        } else if (element.textContent === 'Cual es tu relación con la victima?' || element.textContent === 'What is your relation with the victim?') {
          element.innerText = 'Quina relació tens amb la victima?';
        } else if (element.textContent === 'Cual es tu DNI?' || element.textContent === 'What is your ID?') {
          element.innerText = 'Quin es el teu DNI?';
        } else if (element.textContent === 'Me puedes verificar la informacion para corroborar?' || element.textContent === 'Can you verify the information for me to corroborate?') {
          element.innerText = 'Em pots verificar la informació per corroborar?';
        } else if (element.textContent === 'Cuantas victimas hay?' || element.textContent === 'How many victims are there?') {
          element.innerText = 'Quantes victimes hi ha?';
        }
      });
      column2Title.innerText = 'Incidències';
      column2Content.forEach(function (element) {
        if (element.textContent === 'Cual es tu emergencia?' || element.textContent === 'What is your emergency?') {
          element.innerText = 'Quina és la teva emergència?';
        } else if (element.textContent === 'Esta respirando?' || element.textContent === 'Is he/she breathing?') {
          element.innerText = 'Està respirant?';
        } else if (element.textContent === 'Que ha pasado exactamente?' || element.textContent === 'What exactly happened?') {
          element.innerText = 'Què ha passat exactament?';
        } else if (element.textContent === 'Estas Solo?' || element.textContent === 'Are you alone?') {
          element.innerText = 'Estàs sol?';
        }
      });
      column3Title.innerText = 'Localització';
      column3Content.forEach(function (element) {
        if (element.textContent === 'Cual es la direccion de la emergencia?' || element.textContent === 'What is the address of the emergency?') {
          element.innerText = 'Quina és la direcció de la emergència?';
        } else if (element.textContent === 'Me sabrias decir la calle?' || element.textContent === 'Can you tell me the street?') {
          element.innerText = 'Em podríes dir el carrer?';
        } else if (element.textContent === 'Indicame que ves a tu alrededor' || element.textContent === 'Tell me what you see around you') {
          element.innerText = 'Diguem què veus al teu voltant';
        } else if (element.textContent === 'Donde estas?' || element.textContent === 'Where are you?') {
          element.innerText = 'On estas?';
        } else if (element.textContent === 'Estas en Cataluña?' || element.textContent === 'Are you in Catalonia?') {
          element.innerText = 'Estas a Catalunya?';
        } else if (element.textContent === 'En que pueblo?' || element.textContent === 'In what town?') {
          element.innerText = 'En quin poble?';
        } else if (element.textContent === 'En que provincia?' || element.textContent === 'In which province?') {
          element.innerText = 'En quina provincia?';
        } 
      });
      break;


    case 'en':
      column1Title.innerText = 'Personal information';
      Array.from(column1Content).forEach(function (element) {
        if (element.textContent === 'Que edad tienes?' || element.textContent === 'Quina edat tens?') {
          element.innerText = 'How old are you?';
        } else if (element.textContent === 'Como te llamas?' || element.textContent === 'Com et dius?') {
          element.innerText = 'What is your name?';
        } else if (element.textContent === 'Alguna patologia de la victima?' || element.textContent === 'Alguna patologia de la victima') {
          element.innerText = 'Any pathology of the victim?';
        } else if (element.textContent === 'Quina relació tens amb la victima?' || element.textContent === 'Cual es tu relación con la victima?') {
          element.innerText = 'What is your relation with the victim?';
        } else if (element.textContent === 'Cual es tu DNI?' || element.textContent === 'Quin es el teu DNI?') {
          element.innerText = 'What is your ID?';
        } else if (element.textContent === 'Me puedes verificar la informacion para corroborar?' || element.textContent === 'Em pots verificar la informació per corroborar?') {
          element.innerText = 'Can you verify the information for me to corroborate?';
        } else if (element.textContent === 'Cuantas victimas hay?' || element.textContent === 'Quantes victimes hi ha?') {
          element.innerText = 'How many victims are there?';
        }
      });
      column2Title.innerText = 'Incidents';
      Array.from(column2Content).forEach(function (element) {
        if (element.textContent === 'Cual es tu emergencia?' || element.textContent === 'Quina és la teva emergència?') {
          element.innerText = 'What is your emergency?';
        } else if (element.textContent === 'Esta respirando?' || element.textContent === 'Està respirant?') {
          element.innerText = 'Is he/she breathing?';
        } else if (element.textContent === 'Que ha pasado exactamente?' || element.textContent === 'Què ha passat exactament?') {
          element.innerText = 'What exactly happened?';
        } else if (element.textContent === 'Estas Solo?' || element.textContent === 'Estàs sol?') {
          element.innerText = 'Are you alone?';
        }
      });
      column3Title.innerText = 'Location';
      Array.from(column3Content).forEach(function (element) {
        if (element.textContent === 'Cual es la direccion de la emergencia?' || element.textContent === 'Quina és la direcció de la emergència?') {
          element.innerText = 'What is the address of the emergency?';
        } else if (element.textContent === 'Me sabrias decir la calle?' || element.textContent === 'Em podríes dir el carrer?') {
          element.innerText = 'Can you tell me the street?';
        } else if (element.textContent === 'Indicame que ves a tu alrededor' || element.textContent === 'Diguem què veus al teu voltant') {
          element.innerText = 'Tell me what you see around you';
        } else if (element.textContent === 'Donde estas?' || element.textContent === 'On estas?') {
          element.innerText = 'Where are you?';
        } else if (element.textContent === 'Estas en Cataluña?' || element.textContent === 'Estas a Catalunya?' ) {
          element.innerText = 'Are you in Catalonia?' ;
        } else if (element.textContent === 'En que pueblo?' || element.textContent === 'En quin poble?') {
          element.innerText = 'In what town?';
        } else if (element.textContent === 'En que provincia?' || element.textContent === 'En quina provincia?') {
          element.innerText = 'In which province?';
        } 
      });
      break;
    default:
      console.log('Idioma no soportado');
  }
}


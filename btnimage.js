formsubmit = async (event) => {
  // Convertir la imagen a Base64 y ponerlo en el enlace

  try {
    event.preventDefault();
    const $canvas = document.getElementById("canvas");

    const data = $canvas.toDataURL("image/png");
    const fd = new FormData(event.target);
    fd.append("imagen", data); // Se llama "imagen", en PHP lo recuperamos con $_POST["imagen"]
    const respuestaHttp = await fetch("functions/guardaservicio.php", {
      method: "POST",
      body: fd,
    });

    const nombreImagenSubida = respuestaHttp.json();
    window.location.href = "main.php";
  } catch (error) {
    console.error(error);
    window.location.href = "main.php";
  }
};

const formguardarservicio = document.getElementById("formguardarservicio");
formguardarservicio.addEventListener("submit", formsubmit);

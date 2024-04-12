<div>
<div class="content">
    <div class="cards">
      <div class="card video-background">
        <div class="card header">
          <h3 class="text-base">Estacion Metereologica Zona Norte</h3>
        </div>
        <div class="transparencia"></div>

        <video id="miVideo"></video>
        <div class="body-tarjet">
          <h2>San Fernando Del Valle de Catamarca</h2>
          <h1><span id="ESP32_01_Temp"></span> °C</span></h2>
            <br>
            <p><span id='iddescripcioncielo'></span> | Sensacion Termica <span id='sensaciontermica'></span>°C</p>
            <p>Rafaga de viento <span id="rafagadeviento"></span> km/h </p>

        </div>
        <div class="detalless">
          <h2>Datos Generales<span id="ESP32_01_Status_Read_DHT11"></span></h2>
        </div>

        <div class="detalles">
          <h2>Datos Estacion Nodo<span id="ESP32_01_Status_Read_DHT11"></span></h2>
        </div>

        <br>
        <div class="contenedorTodosItems">
          <!-- Muestra los valores de humedad y temperatura recibidos de ESP32.. *** -->

          <div class="contenedorInterior">
            <div class="contenedorItem">
              <i class="fas fa-tint"></i> <span class="reading"><span id="ESP32_01_Humd"></span>%</span>
              <p class="humidityColor"> Humedad<br></p>
            </div>

            <div class="contenedorItem">
              <i class="fa-solid fa-gauge-simple-high" aria-hidden="true"></i> <span class="temperatureColor"><span
                  id="ESP32_01_Anemometro"></span>km/h </span>
              <p class="anemometro_title"> Velocidad Viento<br>
              </p>
            </div>
            <div class="contenedorItem">
              <i class="fa-regular fa-compass" aria-hidden="true"></i> <span class="reading"><span
                  id="ESP32_01_Veleta">asd</span></span>
              <p class="veleta_title"> Direccion Viento<br></p>
            </div>

            <div class="contenedorItem">
              <span class="reading"><i class="fa-solid fa-cloud-rain"></i> <span id="ESP32_01_Pluviometro"></span> ml</span>
              <p class="pluviometro_title"> Caudal de Lluvia<br>

              </p>
            </div>
          </div>

        </div>
        <div class='contenedorTodosItem'>
          <!-- Muestra los valores de humedad y temperatura recibidos de ESP32.. *** -->

          <div class="contenedorInterior">
            <div class="contenedorItem">
              <span id=indiceuv> <span class="reading"><i class="fa-regular fa-sun"></i> <span id="uv"></span></span>
              </span>
              <p class="pluviometro_title"></i> Indice UV<br> </p>
            </div>

            <div class="contenedorItem">
              <i class="fa-solid fa-cloud-rain"></i>
              <span class="reading"><span id="nubosidad"></span></span>
              <p class="pluviometro_title"> Nubosidad<br></p>
            </div>
            <div class="contenedorItem">
              <span class="reading"><i class="fa-solid fa-arrow-down-short-wide" aria-hidden="true"></i> <span
                  id="presion"></span> hPA</span>
              <p class="pluviometro_title"></i> Presion Atmosferica<br> </p>
            </div>

            <div class="contenedorItem">
              <p><i class="fa-solid fa-eye"></i> <span class="" id="visibilidad"></span> Km</p>
              <p>Visibilidad</p>
            </div>


          </div>

        </div>
      </div>
    </div>
  </div>
  <div class="content">

</div>

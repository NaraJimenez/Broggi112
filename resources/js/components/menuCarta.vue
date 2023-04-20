<template>
  <div>
    <div id="botonesConjunto" class="mt-3 mb-1 d-flex justify-content-center">
      <div id="boton1c2">
        <a href="" id="linkMenuCarta1c2">
          <div id="div" class="text-center mt-2"><b>1<br>Incidencias</b></div>
        </a>
      </div>

      <div id="boton2c2">
        <a href="" id="linkMenuCarta2c2">
          <div id="div" class="text-center mt-2"><b>2<br>Localización</b></div>
        </a>
      </div>

      <div id="boton3c2" >
        <a href="" id="linkMenuCarta3c2">
          <div id="div" class="text-center mt-2"><b>3<br>Agencias</b></div>
        </a>
      </div>
    </div>
  </div>
</template>
<script>
export default {

}
</script>
<style>
#boton1c2{
  width: 170px;
  height: 70px;
  background: #EBEFEF;
  border-radius: 10px;
  transform: rotate(0.26deg);
}


#boton2c2{
  width: 170px;
  height: 70px;
  margin-left: 18px;
  background: #025D73;
  border-radius: 10px;
  transform: rotate(0.26deg);
}

#boton3c2{
  width: 170px;
  height: 70px;
  background: #EBEFEF;
  border-radius: 10px;
  margin-left: 18px;
  transform: rotate(0.26deg);
}
#linkMenuCarta1c2, #linkMenuCarta2c2, #linkMenuCarta3c2{
  text-decoration:none;
}

#linkMenuCarta2c2{
  color: #FBFBFD;
}

#linkMenuCarta1c2, #linkMenuCarta3c2 {
  color: #025D73;
}

</style>

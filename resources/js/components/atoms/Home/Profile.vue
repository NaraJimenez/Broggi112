<template>
  <div id="ProfileN">        
    <div id="Profile-button">
      <img @click="openMenuP()" :src="'./img/ImagenUser.png'"/>
    </div>
    <navbar-p v-if="showNavbarP"  @navbar-opened="showNavbarP = $event"></navbar-p>
  </div>
</template>

<script>
import NavbarP from '../Button/NavbarP.vue';

export default {
  components: {
    NavbarP, 
  },
  data () {
    return {    
      showNavbarP: false
    };
  },
  methods: {
    openMenuP() {
      this.showNavbarP = true;
    },
  },
};
</script>

<style>
#ProfileN {
  display: flex;
  justify-content: center;
  position: absolute;
  top: 20px;
  right: 10px;
}
#Profile-button >img {
  width: 64px;
  height: 64px;
}
</style>

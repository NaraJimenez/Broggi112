<template>
  <div id="NavbarP" v-if="showNavbarP">
    <CrossButton imgSrc="img/Cross.png" @click="closeNavbarP"></CrossButton>
    <Button text="Editar Perfil" :icon="'./img/icon _edit.png'"></Button>
    <Button text="Logout" @click="goToPage('http://localhost:8080/proyecto2/Broggi112/public/login')" :icon="'./img/icon _logout.png'"></Button>
  </div>
</template>

<script>
import Button from "../Button/Button.vue";
import CrossButton from "../Button/Cross.vue";

export default {
  components: {
    Button,
    CrossButton,
  },
  data() {
    return {
      showNavbarP: true,
    };
  },
  methods: {
    closeNavbarP() {
      this.showNavbarP = false;
      this.$emit("navbar-opened", false);
    },
  },
};
</script>

<style>
#NavbarP {
  height: 100vh;
  width: 300px; 
  display: flex;
  flex: 1 !important;
  justify-content: center;
  background-color: #EBEFEF;
  position: fixed;
  top: 0;
  right: 0; 
  flex-direction: column;
  align-items: center;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
</style>

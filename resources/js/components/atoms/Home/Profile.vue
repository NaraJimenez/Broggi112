<template>
  <div id="Profile" v-if="showNavbar">
    <CrossButton imgSrc="./img/Cross.png" @click="closeNavbar"></CrossButton>
    <Button text="Editar Perfil"></Button>
    <Button text="Logout"></Button>
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
      showNavbar: false,
    };
  },
  methods: {
    openNavbar() {
      this.showNavbar = true;
      this.$emit("navbar-opened", true);
    },
    closeNavbar() {
      this.showNavbar = false;
      this.$emit("close-navbar");
    },
  },
};
</script>

<style>
#Profile {
  height: 100%;
  width: 300px;
  background-color: #ebefef;
  position: absolute;
  overflow: auto;
  display: flex;
  flex: 1 !important;
  flex-direction: column;
  align-items: center;
  padding-top: 60px;
  top: 0;
  left: 0;
}
</style>

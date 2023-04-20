 <template>
<div id="NavbarButton">
  <button>
        <img class="logo" :src="icon" alt="">
        {{text}}
    </button>
</div>
</template>

<script>

export default {
        props: {
            text: String,
            icon: String
        }
    }
</script>
<style scoped>

 button {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 57px;
  min-width: 200px;
  border-radius: 10px;
  cursor: pointer;
  background-color: #35B5C9;
  border: 2px solid #808080;
  color: white;
  gap: 10px;
  margin: 10px 0;
  padding: 0 10px;
}

#NavbarButton {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
  margin-bottom: 50px;
}

.logo {
  margin-right: 10px;
  width: 32px;
  height: 32px;
  object-fit: contain;
}

</style>
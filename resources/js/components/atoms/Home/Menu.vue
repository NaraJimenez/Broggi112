 <template>
    <div id="MenuN">        
        <div id="Menu-button">
            <img  @click="openMenu()" :src="'./img/Menu.png'"/>
        </div>
        <navbar-m v-if="showNavbarM" @navbar-opened="showNavbarM = $event"></navbar-m>
    </div>
</template>

<script>

import NavbarM from '../Button/NavbarM.vue';

export default {
        components: {
            NavbarM, 
        },
        data () {
            return {    
                showNavbarM: false
            };
        },
    methods:{
            
    openMenu () {
        this.showNavbarM = true;
    },
    }, 
    };
</script>
<style>
#MenuN {
    display: flex;
    justify-content: center;
    position: absolute;
    top: 20px;
    left: 10px;
}
#Menu-button >img{
    width: 64px;
    height: 64px;
}

</style>

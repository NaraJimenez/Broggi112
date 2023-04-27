 <template>
    <div id="MenuA">
        <div id="Menu-button">
            <img  @click="openMenu()" :src="'./img/Menu.png'"/>
        </div>
        <navbar-a v-if="showNavbarA" @navbar-opened="showNavbarA = $event"></navbar-a>
    </div>
</template>

<script>

import NavbarA from '../Button/NavbarA.vue';

export default {
        components: {
            NavbarA,
        },
        data () {
            return {
                showNavbarA: false
            };
        },
    methods:{

    openMenu () {
        this.showNavbarA = true;
    },
    },
    mounted () {
        console.log("gilipollas")
    },
    };
</script>
<style>
#MenuA {
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

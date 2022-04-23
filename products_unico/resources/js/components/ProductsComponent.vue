<template>
<body>

    <header>
        <b-navbar toggleable="lg" type="dark" variant="info">
            <b-navbar-brand href="#">
                <img src="http://www.turismovillavicencio.gov.co/mapa-interactivo/wp-content/uploads/cache/images/Unico/Unico-3365098983.png" class="img-logo" alt="unico">
            </b-navbar-brand>

            <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

            <b-collapse id="nav-collapse" is-nav>
                <b-navbar-nav>
                    <b-nav-item href="#">Quienes Somos</b-nav-item>
                    <b-nav-item href="#">Categoria</b-nav-item>
                    <b-nav-item href="#">Visitanos</b-nav-item>
                </b-navbar-nav>
            </b-collapse>
            <b-avatar class="avatar" variant="info" src="https://placekitten.com/300/300"></b-avatar>

        </b-navbar>
    </header>
    <div class="section">
        <b-row>
            <b-col lg="4" sm="12" v-for="(product) in products" :key="product.id" :class="'pt-5 text-center my-auto '">

                <b-card :title="product.Nombre" :img-src="product.Imagen" img-alt="Image" img-top tag="article" style="max-width: 20rem;" class="mb-2">
                    <b-card-text>
                        {{
                  product.Precio
                }}
                    </b-card-text>

                    <b-button 
                    @click="showProduct(product.id)" variant="primary">Ver más</b-button>
                </b-card>
            </b-col>
        </b-row>
    </div>
</body>
</template>

<script>
import show from './ShowComponent';

export default {
    mounted() {
        console.log("Component mounted.");
    },
    props: ["products"],
    data() {
        return {};
    },

    components: {
		show: show
	},


    methods: {
        showProduct(id){
            console.log(id)
            const url = ('productos');
            console.log(url)
			axios
				.get(url + "/" +id)
				.then(response => {

                })
				.catch(error => {
					console.log(error);
				});
		
        },
    },
};
</script>

<style scoped>
html,
body {
    height: 100%;
}
.sidebar{
    height:10%;
}

.img-logo {
    width: 60px;
    height: 40px;
    margin-left: 3px;
}

.avatar {
    margin-right: 3px;
}

.section {
    margin: 60px;
}

/* .sidebar-1{
    height: 100px;
    width: 60px;
} */
</style>

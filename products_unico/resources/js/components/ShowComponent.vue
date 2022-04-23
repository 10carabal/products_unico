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
        <b-card :title="product.Nombre" :img-src="product.Imagen">
            <b-card-text>
               {{ product.Descripcion }}
            </b-card-text>

            <b-button href="#" variant="primary">Go somewhere</b-button>
        </b-card>
    </div>
</body>
</template>

<script>
export default {
    mounted() {
        console.log("Component mounted.");
    },
    name: "show",
    props: ["product"],
    data() {
        return {};
    },
    methods: {

    },
};
</script>

<style scoped>
html,
body {
    height: 100%;
}

.sidebar {
    height: 10%;
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

<template>
    <section>
            <Welcome />
    </section>

    <section>
        <Aboutus/>
    </section>
</template>

<script>
import Aboutus from "../components/aboutus.vue";
import Welcome from "../components/welcome.vue";
import Layout from "../layout/layout.vue";

export default{
    layout:Layout,
    components:{
        Welcome,
        Aboutus,
    }
}
</script>

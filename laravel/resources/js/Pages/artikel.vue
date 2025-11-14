<template>
    <q-page>
        <div class="welcome q-py-xl q-px-md q-px-xl-on-lg q-px-xl-on-sm q-px-xl-on-md">
            <div class="row items-center flex flex-center container-xl">
                <div class="col-12 col-md-12 text-center text-white">
                    <p class="text-h1 text-weight-bold text-yellow">Artikel Edukasi & Inspirasi</p>
                    <p class="text-h6">Tingkatkan pemahaman Anda tentang dunia filantropi melalui tulisan-tulisan bermakna yang menginspirasi perubahan</p>
                </div>

                <q-btn
                @click="addCampaign=true"
                label="Baca Artikel"
                color="transparant"
                text-color="white"
                size="lg"
                outline
                />
            </div>

        </div>
    </q-page>
</template>

<script>
import Layout from '../layout/layout.vue';

export default{
        layout:Layout,
    setup(){
    }
}
</script>

<style scoped>
.welcome {
  min-height: 80vh;
  display: flex;
  align-items: center;
  background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('../../../public/assets/man-sitting-begging-overpass.jpg') !important;
  background-size: cover;
}

.container-xl {
  max-width: 1200px;
  margin: 0 auto;
  width: 100%;
}
</style>


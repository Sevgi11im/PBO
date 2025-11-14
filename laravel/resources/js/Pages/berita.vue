<template>
    <q-page>
        <q-fab
            v-model="buttonBerita"
            icon="add"
            direction="up"
            color="primary"
            style="position: fixed; bottom: 50px; right: 50px; z-index: 1000;"
            >

            <q-fab-action @click="goToForm" class="bg-white" icon="add" >Tambah Berita</q-fab-action>
            <q-fab-action class="q-px-md bg-white" icon="visibility" > Lihat Daftar</q-fab-action>
        </q-fab>
        <div class="welcome q-py-xl q-px-md q-px-xl-on-lg q-px-xl-on-sm q-px-xl-on-md">

            <div class="row items-center flex flex-center container-xl">
                <div class="col-12 col-md-12 text-center text-white">
                    <p class="text-h1 text-weight-bold text-yellow">Berita Terkini</p>
                    <p class="text-h6">
                        Setiap berita adalah cerita nyata tentang harapan yang tumbuh dari bantuan Anda.</p>
                </div>

                <q-btn
                    @click=""
                    label="Baca Berita"
                    color="transparant"
                    text-color="white"
                    size="lg"
                    outline
                />
            </div>

        </div>

        <section>
            <BeritaPage/>
        </section>

        <q-dialog v-model="formBerita" persistent>
             <q-card style="width: 800px;">
            <q-toolbar>
                <q-space/>
                <q-btn round icon="cancel" @click="formBerita=false" color="grey-2" text-color="dark" unelevated dense></q-btn>
            </q-toolbar>

            <q-card-section class="q-px-xl q-pb-xl">
                <q-form>
                   <div class="text-center q-mb-lg">
                            <div class="text-h6 text-weight-bold text-grey-8">Daftar Kampanye</div>
                    </div>

                        <div class="q-mb-sm">
                        <div class="row">
                            <div class="col-12">
                                <p class="text-weight medium q-pt-md text-grey-6">Judul Kampanye</p>
                                    <q-editor min-height="1rem"
                                        rounded
                                        outlined
                                        color="blue"
                                        lazy-rules
                                        :rules="[val => val && val.length > 0 || 'Harap masukkan judul']"
                                    >
                                    </q-editor>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                      <p class="text-weight medium q-pt-md text-grey-6">Deskripsi Kampanye</p>
                                 <q-editor min-height="3rem"
                                    rounded
                                    outlined
                                    color="primary"
                                    label="Deskripsi"
                                    lazy-rules
                                    :rules="[val => val && val.length > 0 || 'Harap masukkan deskripsi']"
                                >
                                 </q-editor>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                      <p class="text-weight medium q-pt-md text-grey-6">Target</p>
                                 <q-editor min-height="2rem"
                                    rounded
                                    outlined
                                    color="primary"
                                    label="Target"
                                    lazy-rules
                                    :rules="[val => val && val.length > 0 || 'Harap masukkan jumlah target']"
                                >
                                </q-editor>
                            </div>
                        </div>

                          <div class="row items-center  q-mt-md">
                            <q-space/>
                            <q-btn
                                unelevated
                                rounded
                                label="Sebarkan"
                                class="text-capitalize text-weight-bold bg-blue text-white q-px-xl"
                            >
                            </q-btn>
                        </div>

                        </div>
                </q-form>
            </q-card-section>
        </q-card>
        </q-dialog>
    </q-page>
</template>

<script>
import { computed, ref } from 'vue';
import Layout from '../layout/layout.vue';
import {router, usePage} from '@inertiajs/vue3'
import BeritaPage from '../components/beritaPage.vue';

export default{
        layout:Layout,
        components:{
            BeritaPage
        },
    setup(){
        const buttonBerita=ref(false)
        const formBerita=ref(false)
        const page = usePage()
        const user = computed(()=>page.props.auth.user)

        const goToForm=()=>{
            router.visit('/tulis-berita')
            buttonBerita.value = false
        }
        return{
            goToForm,
            buttonBerita,
            formBerita,
            page,
            user
        }
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


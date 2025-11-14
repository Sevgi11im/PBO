<template>
    <q-page>
        <div class="welcome q-py-xl q-px-md q-px-xl-on-lg q-px-xl-on-sm q-px-xl-on-md">
        <div class="row items-center flex flex-center container-xl">
            <div class="col-12 col-md-12 text-center text-white">
                <h2 v-if="$page.props.auth.user" class="text-h2 text-weight-bold text-white ">Yuk, buat <span class="text-yellow"> Kampanye</span> donasimu dan bantu mereka yang membutuhkan harapan</h2>
                <p v-if="!$page.props.auth.user" class="text-h1 text-weight-bold text-white ">Bantuan Kecil Anda,</p>
                <p  v-if="!$page.props.auth.user" class="text-h1 text-weight-bold text-yellow">Harapan Besar Bagi Mereka</p>

            <q-btn v-if="$page.props.auth.user"
                @click="addCampaign=true"
                label="Mulai Kampanye"
                color="transparant"
                text-color="white"
                size="lg"
                outline
                />

            <q-btn v-if="!$page.props.auth.user"
                @click=""
                label="Mulai Donasi"
                color="transparant"
                text-color="white"
                size="lg"
                outline
                />
            </div>
        </div>
    </div>

    <section>
        <KampanyeCard/>
    </section>

     <q-dialog v-model="addCampaign" persistent>
        <q-card style="width: 800px;">
            <q-toolbar>
                <q-space/>
                <q-btn round icon="cancel" @click="addCampaign=false" color="grey-2" text-color="dark" unelevated dense></q-btn>
            </q-toolbar>

            <q-card-section class="q-px-xl q-pb-xl">
                <q-form>
                   <div class="text-center q-mb-md">
                            <div class="text-h5 text-weight-bold text-blue">Daftar Kampanye</div>
                    </div>

                        <div class="q-mb-sm">
                        <div class="row">
                            <div class="col-12">
                                <q-input
                                    label="Judul Kampanye *"
                                    placeholder="Masukkan judul yang menarik..."
                                    v-model="form.judulKampanye"
                                    filled
                                    counter
                                    maxlength="200"
                                    >
                                    <template v-slot:prepend>
                                        <q-icon name="title" />
                                    </template>
                                    </q-input>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                      <p class="text-weight medium q-pt-md text-grey-6">Deskripsi Kampanye</p>
                                 <q-editor min-height="3rem"
                                    rounded
                                    outlined
                                    color="primary"
                                    v-model="form.deskKampanye"
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
                                    v-model="form.targetKampanye"
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
                                @click="unggah"
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
import KampanyeCard from '../components/kampanyeCard.vue';
import Layout from '../layout/layout.vue';
import {usePage} from '@inertiajs/vue3'

export default{
    layout:Layout,
    components:{
        KampanyeCard
    },
    setup(){
        // const page=usePage()
        // const user=computed(()=>page.props.auth.user)

        const addCampaign=ref(false)
        const form={
            id: "",
            judulKampanye: "",
            deskKampanye: "",
            targetKampanye: "",
        }
        return{
            // user,
            // page,
            form,
            addCampaign
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

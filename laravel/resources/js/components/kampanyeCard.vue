<template>
    <q-page class="q-py-xl q-px-xl flex flex-center">
        <div class="text-h4 text-weight-bold q-mb-xl text-blue text-center">
        Kampanye Donasi yang Sedang Berlangsung
            <div class="text-caption text-grey q-mt-md">
                Mereka tidak butuh banyak, hanya uluran tanganmu untuk kembali berjuang. Mari bantu dengan donasi terbaikmu hari ini.
            </div>
        </div>

        <div class="row q-col-gutter-lg justify-start">
            <div class="col-12 col-lg-3 col-sm-6 col-md-4 flex justify-center">
                <q-card class="my-card flex flex-col justify-between h-full " style="width : 380px; display: flex; flex-direction: column;">
                    <q-img height="230px" src="assets/man-sitting-begging-overpass.jpg" />

                    <q-card-section class="q-pb-none">
                        <div class="text-h6 text-weight-bold text-blue">Donasi Kemanusiaan</div>
                        <div class="text-body2 text-grey-7 q-mt-xs line-clamp">
                            Donasi beras kepada yatim piatu
                        </div>

                        <div class="q-mt-sm text-caption">
                        <span class="text-bold text-green">
                            Target :
                        </span>
                        Rp 500.000.000
                        </div>
                    </q-card-section>

                    <q-card-actions align="right" class="q-mt-auto">
                        <q-btn v-if="$page.props.auth.user" unelevated color="grey-5" round>
                            <q-icon name="more_vert" color="white">
                                <q-menu>
                                    <q-list dense>
                                        <q-item clickable v-close-popup @click="">
                                            <q-item-section>
                                                <q-icon name="image" />
                                            </q-item-section>
                                            <q-item-section class="q-mr-md">
                                                <q-item-label >Unggah</q-item-label>
                                            </q-item-section>
                                        </q-item>

                                        <q-item clickable v-close-popup @click="">
                                            <q-item-section>
                                                <q-icon name="edit" />
                                            </q-item-section>
                                            <q-item-section class="q-mr-md">
                                                <q-item-label>Edit</q-item-label>
                                            </q-item-section>
                                        </q-item>

                                        <q-item clickable v-close-popup @click="">
                                            <q-item-section >
                                                <q-icon color="red" name="delete" />
                                            </q-item-section>
                                            <q-item-section class="q-mr-md">
                                                <q-item-label class="text-red">Hapus</q-item-label>
                                            </q-item-section>
                                        </q-item>
                                    </q-list>
                                </q-menu>
                            </q-icon>
                        </q-btn>

                        <q-btn
                        color="blue"
                        label="Donasi Sekarang"
                        @click=""
                        unelevated
                        class="text-weight-bold"
                        />
                    </q-card-actions>
                </q-card>
            </div>
             <div class="col-12 col-lg-3 col-sm-6 col-md-4 flex justify-center">
                <q-card class="my-card flex flex-col justify-between h-full " style="width : 380px; display: flex; flex-direction: column;">
                    <q-img height="230px" src="assets/man-sitting-begging-overpass.jpg"  />

                    <q-card-section class="q-pb-none">
                        <div class="text-h6 text-weight-bold text-blue">Donasi Kemanusiaan</div>
                        <div class="text-body2 text-grey-7 q-mt-xs line-clamp">
                            Donasi beras kepada yatim piatu
                        </div>

                        <div class="q-mt-sm text-caption">
                        <span class="text-bold text-green">
                            Target :
                        </span>
                        Rp 500.000.000
                        </div>
                    </q-card-section>

                    <q-card-actions align="right" class="q-mt-auto">
                        <q-btn v-if="$page.props.auth.user" unelevated color="grey-5" round>
                            <q-icon name="more_vert" color="white">
                                <q-menu>
                                    <q-list dense>
                                        <q-item clickable v-close-popup @click="">
                                            <q-item-section>
                                                <q-icon name="image" />
                                            </q-item-section>
                                            <q-item-section class="q-mr-md">
                                                <q-item-label >Unggah</q-item-label>
                                            </q-item-section>
                                        </q-item>

                                        <q-item clickable v-close-popup @click="">
                                            <q-item-section>
                                                <q-icon name="edit" />
                                            </q-item-section>
                                            <q-item-section class="q-mr-md">
                                                <q-item-label>Edit</q-item-label>
                                            </q-item-section>
                                        </q-item>

                                        <q-item clickable v-close-popup @click="">
                                            <q-item-section >
                                                <q-icon color="red" name="delete" />
                                            </q-item-section>
                                            <q-item-section class="q-mr-md">
                                                <q-item-label class="text-red">Hapus</q-item-label>
                                            </q-item-section>
                                        </q-item>
                                    </q-list>
                                </q-menu>
                            </q-icon>
                        </q-btn>

                        <q-btn
                        color="blue"
                        label="Donasi Sekarang"
                        @click=""
                        unelevated
                        class="text-weight-bold"
                        />
                    </q-card-actions>
                </q-card>
            </div>
             <div class="col-12 col-lg-3 col-sm-6 col-md-4 flex justify-center">
                <q-card class="my-card flex flex-col justify-between h-full " style="width : 380px; display: flex; flex-direction: column;">
                    <q-img height="230px" src="assets/man-sitting-begging-overpass.jpg" />

                    <q-card-section class="q-pb-none">
                        <div class="text-h6 text-weight-bold text-blue">Donasi Kemanusiaan</div>
                        <div class="text-body2 text-grey-7 q-mt-xs line-clamp">
                            Donasi beras kepada yatim piatu
                        </div>

                        <div class="q-mt-sm text-caption">
                        <span class="text-bold text-green">
                            Target :
                        </span>
                        Rp 500.000.000
                        </div>
                    </q-card-section>

                    <q-card-actions align="right" class="q-mt-auto">
                        <q-btn v-if="$page.props.auth.user" unelevated color="grey-5" round>
                            <q-icon name="more_vert" color="white">
                                <q-menu>
                                    <q-list dense>
                                        <q-item clickable v-close-popup @click="">
                                            <q-item-section>
                                                <q-icon name="image" />
                                            </q-item-section>
                                            <q-item-section class="q-mr-md">
                                                <q-item-label >Unggah</q-item-label>
                                            </q-item-section>
                                        </q-item>

                                        <q-item clickable v-close-popup @click="">
                                            <q-item-section>
                                                <q-icon name="edit" />
                                            </q-item-section>
                                            <q-item-section class="q-mr-md">
                                                <q-item-label>Edit</q-item-label>
                                            </q-item-section>
                                        </q-item>

                                        <q-item clickable v-close-popup @click="">
                                            <q-item-section >
                                                <q-icon color="red" name="delete" />
                                            </q-item-section>
                                            <q-item-section class="q-mr-md">
                                                <q-item-label class="text-red">Hapus</q-item-label>
                                            </q-item-section>
                                        </q-item>
                                    </q-list>
                                </q-menu>
                            </q-icon>
                        </q-btn>

                        <q-btn
                        color="blue"
                        label="Donasi Sekarang"
                        @click=""
                        unelevated
                        class="text-weight-bold"
                        />
                    </q-card-actions>
                </q-card>
            </div>
            <div class="col-12 col-lg-3 col-sm-6 col-md-4 flex justify-center">
                <q-card class="my-card flex flex-col justify-between h-full " style="width : 380px; display: flex; flex-direction: column;">
                    <q-img height="230px" src="assets/man-sitting-begging-overpass.jpg" />

                    <q-card-section class="q-pb-none">
                        <div class="text-h6 text-weight-bold text-blue">Donasi Kemanusiaan</div>
                        <div class="text-body2 text-grey-7 q-mt-xs line-clamp">
                            Donasi beras kepada yatim piatu
                        </div>

                        <div class="q-mt-sm text-caption">
                        <span class="text-bold text-green">
                            Target :
                        </span>
                        Rp 500.000.000
                        </div>
                    </q-card-section>

                    <q-card-actions align="right" class="q-mt-auto">
                        <q-btn v-if="$page.props.auth.user" unelevated color="grey-5" round>
                            <q-icon name="more_vert" color="white">
                                <q-menu>
                                    <q-list dense>
                                        <q-item clickable v-close-popup @click="">
                                            <q-item-section>
                                                <q-icon name="image" />
                                            </q-item-section>
                                            <q-item-section class="q-mr-md">
                                                <q-item-label >Unggah</q-item-label>
                                            </q-item-section>
                                        </q-item>

                                        <q-item clickable v-close-popup @click="">
                                            <q-item-section>
                                                <q-icon name="edit" />
                                            </q-item-section>
                                            <q-item-section class="q-mr-md">
                                                <q-item-label>Edit</q-item-label>
                                            </q-item-section>
                                        </q-item>

                                        <q-item clickable v-close-popup @click="">
                                            <q-item-section >
                                                <q-icon color="red" name="delete" />
                                            </q-item-section>
                                            <q-item-section class="q-mr-md">
                                                <q-item-label class="text-red">Hapus</q-item-label>
                                            </q-item-section>
                                        </q-item>
                                    </q-list>
                                </q-menu>
                            </q-icon>
                        </q-btn>

                        <q-btn
                        color="blue"
                        label="Donasi Sekarang"
                        @click=""
                        unelevated
                        class="text-weight-bold"
                        />
                    </q-card-actions>
                </q-card>
            </div>
        </div>

        <q-dialog >
                                <q-card style="width:700px">
                                <q-toolbar>
                                    <q-toolbar-title>Tambah Gambar</q-toolbar-title>
                                    <q-space/>

                                </q-toolbar>

                                <q-card-section>
                                    <q-form class="q-gutter-sm">
                                        <q-file label="Choose a File"
                                        @input=""/>
                                    </q-form>

                                    <div class="q-py-md float-right ">
                                            <q-btn @click="" rounded class="bg-black text-white">Unggah</q-btn>
                                        </div>
                                </q-card-section>
                            </q-card>
        </q-dialog>

        <q-dialog>
            <q-card style="width: auto;">
                <q-card-section>
                    <p class="text-left q-mb-lg">
                        Yakin ingin menghapus?
                    </p>
                    <div>
                        <q-btn icon="delete" label="Hapus" @click=""/>
                        <q-btn icon="cancel" label="Batal"/>
                    </div>
                </q-card-section>
            </q-card>
        </q-dialog>
    </q-page>
</template>

<script>
export default{
    setup(){

    }
}
</script>

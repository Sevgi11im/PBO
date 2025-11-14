<template>
    <q-layout view="HhH LpR fFf" >
        <q-header elevated fixed class="text-white" style="background-color: #FFFFFF;">
            <div class="header-container">
            <q-toolbar class="q-pl-xl q-pl-lg-on-md q-pl-xl-on-lg q-pr-xl q-pr-lg-on-md q-pr-xl-on-lg">
                <q-toolbar-title class="text-weight-bold text-blue">
                    SATU HATI
                </q-toolbar-title>

                <q-space/>

                <q-tabs inline-label >
                    <Link href="/" as="q-tab">
                        <q-tab name="home" label="Beranda" class="q-mx-md text-black text-capitalize"></q-tab>
                    </Link>
                    <Link href="/berita" as="q-tab">
                        <q-tab  name="berita" label="Berita" class="q-mx-md text-black text-capitalize"></q-tab>
                    </Link>
                    <Link href="/artikel" as="q-tab">
                        <q-tab  name="artikel" label="Artikel" class="q-mx-md text-black text-capitalize"></q-tab>
                    </Link>
                    <Link href="/kampanye" as="q-tab">
                        <q-tab label="Kampanye" class="q-mx-md text-black text-capitalize"></q-tab>
                    </Link>
                    <q-btn v-if="!$page.props.auth.user" @click="admlogin=true" unelevated rounded outline color="white" name="login" label="Masuk"  class="text-capitalize bg-blue  q-px-md q-px-lg" />
                    <q-btn v-if="$page.props.auth.user" @click="logout" unelevated rounded outline color="white" name="logout" label="Keluar"  class="text-capitalize bg-blue  q-px-md q-px-lg" />
                </q-tabs>

            </q-toolbar>
            </div>
        </q-header>

        <q-page-container class="page-container">
            <transition
            name="fade"
            mode="out-in"
            appear
            enter-active-class="animate_animated animate__slideInLeft "
            leave-active-class="animate_animated animate__slideInRight ">
            <slot/>
            </transition>
        </q-page-container>

        <q-dialog v-model="admlogin" persistent>
            <q-card class="login-dialog-card " style="max-width: 800px; width: 90vw;">
                <q-toolbar>
                    <q-space/>
                     <q-btn round icon="cancel" @click="admlogin=false" color="grey-2" text-color="dark" unelevated dense/>
                </q-toolbar>

                <q-card-section class="q-px-xl q-pb-xl ">
                    <div v-if="status.length" class="status-message q-mb-lg">
                        <q-banner
                            :class="status.includes('berhasil') ? 'bg-positive text-white' : 'bg-negative text-white'"
                            rounded
                        >
                            {{ status }}
                        </q-banner>
                    </div>
                    <q-form v-if="!reg" class="q-gutter-md" @submit="login">

                        <div class="text-center q-mb-lg">
                            <q-avatar size="80px" class="bg-blue-1 q-mb-sm">
                                <q-icon name="person" size="40px" color="blue" />
                            </q-avatar>
                            <div class="text-h6 text-weight-bold text-grey-8">Masuk ke Akun Anda</div>
                        </div>

                        <div class="q-mb-sm">
                        <div class="row">
                            <div class="col-12">
                            <q-input
                                rounded
                                outlined
                                color="blue"
                                v-model="form.username"
                                label="Nama Pengguna"
                                lazy-rules
                                :rules="[val => val && val.length > 0 || 'Harap masukkan nama pengguna']"
                            >
                                <template v-slot:prepend>
                                    <q-icon name="person" color="grey"/>
                                </template>
                            </q-input>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                 <q-input
                            rounded
                            outlined
                            type="password"
                            color="primary"
                            v-model="form.password"
                            label="Kata Sandi"
                            lazy-rules
                            :rules="[val => val && val.length > 0 || 'Harap masukkan kata sandi']"
                        >
                            <template v-slot:prepend>
                                <q-icon name="lock" color="grey"/>
                            </template>
                        </q-input>
                            </div>
                        </div>

                        </div>

                        <div class="row items-center justify-between q-mt-md">
                            <q-btn
                                unelevated
                                rounded
                                label="Buat Akun Baru"
                                @click="ubah"
                                color="blue"
                                outline
                                class="text-capitalize text-weight-medium q-px-lg"
                            />
                            <q-btn
                                unelevated
                                rounded
                                label="Masuk"
                                @click="login"
                                class="text-capitalize text-weight-bold bg-blue text-white q-px-xl"
                                :loading="loading"
                            >
                                <template v-slot:loading>
                                    <q-spinner-hourglass class="on-left" />
                                    Memproses...
                                </template>
                            </q-btn>
                        </div>

                        <div class="text-center q-mt-lg">
                            <q-separator class="q-mb-md" />
                            <p class="text-caption text-grey-6">
                                Dengan masuk, Anda menyetujui
                                <a href="#" class="text-blue text-weight-medium">Syarat & Ketentuan</a> kami
                            </p>
                        </div>
                    </q-form>

                    <q-form v-if="reg" class="q-gutter-md" @submit="registerSave">
                        <div class="text-center q-mb-lg">
                            <q-avatar size="80px" class="bg-blue-1 q-mb-sm">
                                <q-icon name="person_add" size="40px" color="blue" />
                            </q-avatar>
                            <div class="text-h6 text-weight-bold text-grey-8">Buat Akun Baru</div>
                        </div>

                        <div class="q-mb-sm">
                            <div class="row q-col-gutter-sm">
                                <div class="col-12 col-sm-6">
                                    <q-input
                                        v-model="register.name"
                                        rounded
                                        outlined
                                        color="blue"
                                        label="Nama Lengkap"
                                        lazy-rules
                                        :rules="[val => val && val.length > 0 || 'Harap masukkan nama lengkap']"
                                    >
                                        <template v-slot:prepend>
                                            <q-icon name="badge" color="grey"/>
                                        </template>
                                    </q-input>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <q-input
                                        v-model="register.username"
                                        rounded
                                        outlined
                                        color="blue"
                                        label="Nama Pengguna"
                                        lazy-rules
                                        :rules="[val => val && val.length > 0 || 'Harap masukkan nama pengguna']"
                                    >
                                        <template v-slot:prepend>
                                            <q-icon name="person" color="grey"/>
                                        </template>
                                    </q-input>
                                </div>


                            </div>
                            <div class="row q-col-gutter-sm">
                                <div class="col-12 col-sm-6">
                                    <q-input
                                        v-model="register.role"
                                        rounded
                                        outlined
                                        color="blue"
                                        label="Role"
                                        lazy-rules
                                        :rules="[val => val && val.length > 0 || 'Harap masukkan role']"
                                    >
                                        <template v-slot:prepend>
                                            <q-icon name="person" color="grey"/>
                                        </template>
                                    </q-input>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <q-input
                                        v-model="register.password"
                                        rounded
                                        outlined
                                        type="password"
                                        color="blue"
                                        label="Kata Sandi"
                                        lazy-rules
                                        :rules="[val => val && val.length >= 6 || 'Kata sandi minimal 6 karakter']"
                                    >
                                        <template v-slot:prepend>
                                            <q-icon name="lock" color="grey"/>
                                        </template>
                                    </q-input>
                                </div>
                            </div>

                            <div class="row q-col-gutter-sm">
                                <div class="col-12 col-sm-6">
                                    <q-input
                                        v-model="register.email"
                                        rounded
                                        outlined
                                        color="blue"
                                        label="Email"
                                        lazy-rules
                                        :rules="[
                                            val => val && val.length > 0 || 'Harap masukkan email',
                                            val => /.+@.+\..+/.test(val) || 'Email tidak valid'
                                        ]"
                                    >
                                        <template v-slot:prepend>
                                            <q-icon name="email" color="grey"/>
                                        </template>
                                    </q-input>
                                </div>

                                <div class="col-12 col-sm-6">
                                     <div class="q-mt-sm">
                                        <q-checkbox
                                            v-model="acceptTerms"
                                            label="Saya menyetujui Syarat & Ketentuan dan Kebijakan Privasi"
                                            color="blue"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>



                            <div class="row items-center q-mt-md" style="justify-content: space-between;">
                                <q-btn
                                    unelevated
                                    rounded
                                    label="Sudah Punya Akun?"
                                    @click="reg=false"
                                    color="blue"
                                    outline
                                    class="text-capitalize text-weight-medium q-px-lg"
                                />
                                <q-space/>
                                <q-btn
                                    unelevated
                                    rounded
                                    label="Daftar"
                                    type="submit"
                                    class="text-capitalize text-weight-bold bg-blue text-white q-px-xl"
                                    :loading="loading"
                                    :disable="!acceptTerms"
                                >
                                    <template v-slot:loading>
                                        <q-spinner-hourglass class="on-left" />
                                        Mendaftarkan...
                                    </template>
                                </q-btn>
                            </div>
                    </q-form>
                </q-card-section>
            </q-card>
        </q-dialog>


    </q-layout>

</template>

<script>
import { reactive, ref } from 'vue';
import { router} from '@inertiajs/vue3'


export default{
    setup(){
        const admlogin=ref(false)
        const form = reactive({
            username : "",
            passwrod : ""
        })
        function login(){
            router.post("/login", form)
            admlogin.value = false;
        }

        const reg = ref(false)
        const status = ref("")
        const acceptTerms = ref(false)
        const loading = ref(false)

        const register = reactive({
            name: "",
            username : "",
            role : "",
            password : "",
            email : ""
        })
          function registerSave(){
            if (!acceptTerms.value) {
                status.value = 'Harap setujui syarat dan ketentuan'
                return
            }

            loading.value = true

            router.visit('/register',{
                method: 'post',
                data: {
                    name: register.name,
                    username: register.username,
                    role: register.role,
                    password: register.password,
                    email: register.email,
                },
                preserveScroll: true,
                preserveState: true,
                onStart: () => {
                    loading.value = true
                },
                onSuccess: () => {
                    register.name = ""
                    register.username = ""
                    register.role = ""
                    register.password = ""
                    register.email = ""
                    status.value = "🎉 Pendaftaran berhasil! Silakan login."
                    acceptTerms.value = false
                    loading.value = false

                    // Otomatis pindah ke form login setelah 2 detik
                    setTimeout(() => {
                        reg.value = false
                    }, 2000)
                },
                onError: (errors) => {
                    loading.value = false
                    if (errors.email) {
                        status.value = `Error: ${errors.email}`
                    } else if (errors.username) {
                        status.value = `Error: ${errors.username}`
                    } else if (errors.role) {
                        status.value = `Error: ${errors.username}`
                    } else if (errors.password) {
                        status.value = `Error: ${errors.password}`
                    } else if (errors.name) {
                        status.value = `Error: ${errors.name}`
                    } else {
                        status.value = 'Terjadi kesalahan saat pendaftaran'
                    }
                },
                onFinish: () => {
                    loading.value = false
                }
            })
        }
        function ubah(){
            reg.value = !reg.value
            status.value = ''
        }

        function logout(){
            router.get("/logout")
        }


        return{
            logout,
            ubah,
            loading,
            acceptTerms,
            status,
            registerSave,
            register,
            reg,
            login,
            form,
            admlogin
        }
    }
}
</script>

<style>
.bg-gradient-primary {
    background: linear-gradient(135deg, #1976d2 0%, #1565c0 100%);
}

.status-message {
    animation: slideDown 0.3s ease-out;
}


/* Hover effects */
.q-btn:hover {
    transform: translateY(-1px);
    transition: all 0.3s ease;
}

/* Responsive adjustments */
@media (max-width: 600px) {
    .login-dialog-card {
        margin: 10px;
        width: calc(100% - 20px);
    }

    .q-card-section {
        padding: 20px;
    }
}
</style>


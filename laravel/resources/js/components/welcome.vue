<template>
    <div class="welcome q-py-xl q-px-md">
        <div class="row items-center flex flex-center container-xl">
            <div class="col-12 col-md-6 col-lg-10 text-center text-white">
                <h1 class="text-weight-bold text-white q-py-none ">Dunia Tanpa Kelaparan Dimulai dari Kita</h1>
                <p class="text-h6">
                Bergabung dengan <strong>5.247+</strong> donatur yang telah membantu
                mewujudkan Indonesia bebas kelaparan
                </p>

                <p class="text-caption q-mt-md text-white">
                    "Tidak ada yang lebih mulia daripada memberi makan mereka yang lapar"
                </p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
  name: 'WelcomeHero',
  emits: ['getStarted', 'learnMore']
}
</script>

<style scoped>
.welcome {
  min-height: 80vh;
  display: flex;
  align-items: center;
  background-image: linear-gradient(rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.7)), url('../../../public/assets/man-sitting-begging-overpass.jpg') !important;
  background-size: cover;
}

.container-xl {
  max-width: 1200px;
  margin: 0 auto;
  width: 100%;
}


@keyframes float {
  0%, 100% { transform: translateY(0px); }
  50% { transform: translateY(-20px); }
}

/* Untuk memastikan padding 48px konsisten */
@media (max-width: 599px) {
  .welcome{
    padding-left: 48px !important;
    padding-right: 48px !important;
  }
}

@media (min-width: 600px) and (max-width: 1023px) {
  .welcome {
    padding-left: 48px !important;
    padding-right: 48px !important;
  }
}

@media (min-width: 1024px) {
  .welcome {
    padding-left: 48px !important;
    padding-right: 48px !important;
  }
}
</style>

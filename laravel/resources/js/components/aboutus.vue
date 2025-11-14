<template>
  <section class="simple-about q-pa-xl">
    <div class="container-xl">
      <div class="row items-center q-col-gutter-xl">
        <div class="col-12 col-md-6">
          <q-img
            src="/assets/man-sitting-begging-overpass.jpg"

            style="height: 550px;"
          />
        </div>

        <div class="col-12 col-md-6">
          <div >
            <p class="text-h3 text-weight-bold text-grey-9 q-mb-md">
              Satu Visi: <span class="text-blue">Zero Hunger</span>
            </p>
            <p class="text-caption   text-grey-7 q-mb-lg">
              Kami percaya bahwa tidak ada seorang pun yang seharusnya tidur
              dengan perut lapar di negeri yang kaya raya seperti Indonesia.
            </p>
          </div>

          <div class="values-grid">
            <div class="value-item text-center" v-for="value in values" :key="value.title">
              <q-icon :name="value.icon" size="60px" color="blue"/>
              <p class="text-h6 text-weight-bold text-grey-9">{{ value.title }}</p>
              <p class="text-caption text-grey-7">{{ value.description }}</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Team Section -->
      <div class="q-mt-xl">
        <div class="text-center q-mb-lg">
          <h3 class="text-h3 text-weight-bold text-grey-9"> <span class="text-blue text-weight-bold">Tim </span>di Balik Satu Hati</h3>
          <p class="text-h6 text-grey-7">Orang-orang berdedikasi yang menggerakkan perubahan</p>
        </div>

        <div class="row q-col-gutter-lg">
          <div class="col-12 col-sm-6 col-md-3" v-for="member in team" :key="member.name">
            <q-card class="team-card text-center">
              <q-card-section>
                <q-avatar size="100px" class="q-mb-md">
                  <img :src="member.avatar" :alt="member.name">
                </q-avatar>
                <h4 class="text-h6 text-weight-bold text-grey-9">{{ member.name }}</h4>
                <p class="text-caption text-blue text-weight-medium">{{ member.role }}</p>
                <p class="text-caption text-grey-7">{{ member.bio }}</p>
              </q-card-section>
            </q-card>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import { ref } from 'vue'

export default {
  setup() {
    const values = ref([
      {
        icon: 'visibility',
        title: 'Transparan',
        description: 'Setiap rupiah dapat dilacak'
      },
      {
        icon: 'group',
        title: 'Inklusif',
        description: 'Untuk semua kalangan'
      },
      {
        icon: 'autorenew',
        title: 'Berkelanjutan',
        description: 'Program jangka panjang'
      },
      {
        icon: 'lightbulb',
        title: 'Inovatif',
        description: 'Teknologi untuk kebaikan'
      }
    ])

    const team = ref([
      {
        name: "A. Tyas Nur Atda",
        role: "FrontEnd Developer",
        // avatar: "/images/team-ahmad.jpg"
      },
      {
        name: "Habibullah Masnawi",
        role: "BackEnd Developer",
        // avatar: "/images/team-sari.jpg"
      },
      {
        name: "Elok Humairo",
        role: "UI/UX Designer",
        // avatar: "/images/team-budi.jpg"
      },
      {
        name: "Winny Gracia Tandipada",
        role: "Manager",
        // avatar: "/images/team-maya.jpg"
      }
    ])

    return {
      values,
      team
    }
  }
}
</script>

<style scoped>
.simple-about {
  background: white;
}

.values-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 24px;
  margin-top: 40px;
}

.value-item {
  padding: 20px;
  border-radius: 12px;
  transition: all 0.3s ease;
      box-shadow: 0 6px 20px rgba(108, 108, 108, 0.15);
}

.value-item:hover {
  background: #ffff;
    transform: translateY(-5px);
    box-shadow: 0 6px 20px rgba(0, 157, 255, 0.15);
}

.team-card {
  border-radius: 16px;
  transition: all 0.3s ease;
  height: 100%;
}

.team-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 6px 20px rgba(0, 157, 255, 0.15);
}

.container-xl {
  max-width: 1200px;
  margin: 0 auto;
  width: 100%;
}

@media (max-width: 768px) {
  .values-grid {
    grid-template-columns: 1fr;
    gap: 16px;
  }
}
</style>

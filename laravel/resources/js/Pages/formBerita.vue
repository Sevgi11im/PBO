<template>
  <q-page class="q-pa-lg bg-grey-2">
    <div class="container bg-white q-pa-lg">
      <!-- Header -->
      <div class="row items-center q-mb-lg">
        <div class="col">
          <h1 class="text-h4 text-weight-bold">Tulis Berita Baru</h1>
          <p class="text-subtitle1 text-grey-7">
            Bagikan informasi dan update terbaru seputar kegiatan donasi
          </p>
        </div>
        <div class="col-auto">
          <q-btn
            label="Kembali ke Berita"
            icon="arrow_back"
            flat
            color="primary"
          />
        </div>
      </div>

      <q-form class="q-gutter-y-lg">
        <div class="row q-col-gutter-lg">
          <!-- Kolom Kiri -->
          <div class="col-12 col-md-8">
            <!-- Judul Berita -->
            <q-input
              label="Judul Berita *"
              placeholder="Masukkan judul yang menarik..."

              filled
              counter
              maxlength="200"
            >
              <template v-slot:prepend>
                <q-icon name="title" />
              </template>
            </q-input>

            <!-- Konten Berita -->
            <div class="q-mt-lg">
              <label class="text-subtitle1 text-weight-medium q-mb-sm block">Konten Berita *</label>
              <q-editor
                placeholder="Tulis konten berita Anda di sini..."
              />
            </div>

            <!-- Excerpt/ Ringkasan -->
            <q-input
              label="Ringkasan Berita"
              placeholder="Ringkasan singkat untuk preview..."
              type="textarea"
              filled
              counter
              maxlength="300"
              class="q-mt-lg"
            >
              <template v-slot:prepend>
                <q-icon name="description" />
              </template>
            </q-input>
          </div>

          <!-- Kolom Kanan -->
          <div class="col-12 col-md-4">
            <!-- Status Publikasi -->
            <q-card class="q-mb-md">
              <q-card-section>
                <div class="text-h6">Publikasi</div>
              </q-card-section>
              <q-card-section class="q-pt-none">
                <q-select
                  label="Status"
                  filled
                />

                <q-checkbox
                  label="Jadikan Featured News"
                  class="q-mt-md"
                />

                <div class="q-mt-md">
                  <label class="text-caption text-grey-7">Jadwal Publikasi</label>
                  <q-input
                    filled
                    type="datetime-local"
                  />
                </div>
              </q-card-section>
            </q-card>

            <!-- Kategori & Tags -->
            <q-card class="q-mb-md">
              <q-card-section>
                <div class="text-h6">Kategori & Tags</div>
              </q-card-section>
              <q-card-section class="q-pt-none">
                <q-select
                  label="Kategori *"
                />

                <div class="q-mt-md">
                  <label class="text-caption text-grey-7">Tags</label>
                  <q-input
                    placeholder="Tambahkan tag..."
                    filled
                  >
                    <template v-slot:append>
                      <q-btn
                        icon="add"
                        flat
                        round
                      />
                    </template>
                  </q-input>

                  <div class="q-mt-sm">
                    <q-chip
                      removable
                      color="primary"
                      text-color="white"
                    >
                    </q-chip>
                    <p class="text-caption text-grey-6">
                      Belum ada tag
                    </p>
                  </div>
                </div>
              </q-card-section>
            </q-card>

            <!-- Featured Image -->
            <q-card>
              <q-card-section>
                <div class="text-h6">Gambar Utama</div>
              </q-card-section>
              <q-card-section class="q-pt-none">
                <q-file
                  label="Upload Gambar Utama"
                  accept=".jpg, .jpeg, .png, .gif"
                  filled
                  clearable
                >
                  <template v-slot:prepend>
                    <q-icon name="image" />
                  </template>
                </q-file>

                <!-- Image Preview -->
                <div class="q-mt-md">
                  <q-img
                    style="max-height: 200px;"
                    class="rounded-borders"
                  />
                  <q-btn
                    icon="delete"
                    color="negative"
                    flat
                    size="sm"
                    label="Hapus Gambar"
                    class="q-mt-sm"
                  />
                </div>

                <div class="text-center q-pa-lg bg-grey-3 rounded-borders">
                  <q-icon name="image" size="xl" color="grey-5" />
                  <p class="text-caption text-grey-6 q-mt-sm">Preview gambar akan muncul di sini</p>
                </div>
              </q-card-section>
            </q-card>
          </div>
        </div>

        <!-- Action Buttons -->
        <div class="row justify-end q-gutter-sm q-mt-xl">
          <q-btn
            label="Reset"
            type="reset"
            color="grey"
            icon="refresh"
            flat
          />
          <q-btn
            label="Simpan Draft"
            color="orange"
            icon="save"
          />
          <q-btn
            label="Publikasikan"
            type="submit"
            color="primary"
            icon="publish"
          />
        </div>
      </q-form>
    </div>

    <!-- Preview Dialog -->
    <q-dialog  maximized>
      <NewsPreview
      />
    </q-dialog>
  </q-page>
</template>

<script>
import Layout from '../layout/layout.vue';

export default{
    layout:Layout
}
</script>

<style scoped>
.container {
  max-width: 1200px;
  margin: 0 auto;
}

.block {
  display: block;
}
</style>

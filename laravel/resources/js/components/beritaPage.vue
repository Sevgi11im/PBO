<template>
    <q-page-container>
      <div class="news-page">
        <div class="filter-section q-pa-md bg-grey-2">
          <div class="container">
            <div class="row items-center q-col-gutter-md">
              <div class="col-12">
                <q-input
                  placeholder="Cari berita..."
                  dense
                  outlined
                  clearable
                >
                  <template v-slot:prepend>
                    <q-icon name="search" />
                  </template>
                </q-input>
              </div>
            </div>
          </div>
        </div>

        <!-- Main Content -->
        <div class="container q-pa-lg">

          <!-- News Grid -->
          <div class="news-grid">
            <div class="row q-col-gutter-lg">
              <!-- Featured News -->
              <div class="col-12" >
                <q-card class="featured-news-card cursor-pointer">
                  <div class="row">
                    <div class="col-12 col-md-6">
                      <q-img
                        height="300px"
                        class="featured-image"
                         src="assets/man-sitting-begging-overpass.jpg"
                      />
                    </div>
                    <div class="col-12 col-md-6">
                      <q-card-section>
                        <div class="text-caption text-blue   q-mb-sm">
                          <q-icon name="local_offer" size="xs" class="q-mr-xs" />
                          healty • 27 mei
                        </div>
                        <h2 class="text-h5 q-mt-none q-mb-sm">Bencana Alam</h2>
                        <p class="text-body1">anu</p>
                        <div class="tags q-mt-md">
                          <q-badge  color="secondary" class="q-mr-xs q-mb-xs">
                            gempa
                          </q-badge>
                        </div>
                      </q-card-section>
                    </div>
                  </div>
                </q-card>
              </div>

              <div class="col-12 q-mt-lg">
                <p class="text-h5 text-weight-medium">Semua Berita</p>
                <hr>
              </div>
              <!-- Regular News List -->
              <div class="col-12 col-md-6 col-lg-4">
                <q-card class="news-card cursor-pointer" >
                  <q-img height="200px"  src="assets/man-sitting-begging-overpass.jpg">
                    <div class="absolute-top-left">
                      <q-badge color="blue" transparent>
                        pendidikan
                      </q-badge>
                    </div>
                  </q-img>

                  <q-card-section>
                    <div class="text-caption text-grey q-mb-xs">
                      <q-icon name="event" size="xs" class="q-mr-xs" />
                      14/11/2025
                    </div>
                    <h3 class="text-h6 q-mt-none q-mb-sm news-title">Pendiidkan</h3>
                    <p class="text-body2 news-excerpt">Tim relawan kami tiba di desa...</p>

                    <div class="row items-center justify-between q-mt-md">
                      <div class="text-caption text-grey">
                        <q-icon name="visibility" size="xs" class="q-mr-xs" />
                        208 views
                      </div>
                      <q-btn
                        flat
                        color="blue"
                        label="Baca Selengkapnya"
                        icon="arrow_forward"
                        size="sm"
                      />
                    </div>
                  </q-card-section>
                </q-card>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <q-card class="news-card cursor-pointer" >
                  <q-img height="200px"  src="assets/man-sitting-begging-overpass.jpg">
                    <div class="absolute-top-left">
                      <q-badge color="primary" transparent>
                        pendidikan
                      </q-badge>
                    </div>
                  </q-img>

                  <q-card-section>
                    <div class="text-caption text-grey q-mb-xs">
                      <q-icon name="event" size="xs" class="q-mr-xs" />
                      14/11/2025
                    </div>
                    <h3 class="text-h6 q-mt-none q-mb-sm news-title">Pendiidkan</h3>
                    <p class="text-body2 news-excerpt">Tim relawan kami tiba di desa...</p>

                    <div class="row items-center justify-between q-mt-md">
                      <div class="text-caption text-grey">
                        <q-icon name="visibility" size="xs" class="q-mr-xs" />
                        208 views
                      </div>
                      <q-btn
                        flat
                        color="primary"
                        label="Baca Selengkapnya"
                        icon="arrow_forward"
                        size="sm"
                      />
                    </div>
                  </q-card-section>
                </q-card>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <q-card class="news-card cursor-pointer" >
                  <q-img height="200px" src="assets/man-sitting-begging-overpass.jpg">
                    <div class="absolute-top-left">
                      <q-badge color="primary" transparent>
                        pendidikan
                      </q-badge>
                    </div>
                  </q-img>

                  <q-card-section>
                    <div class="text-caption text-grey q-mb-xs">
                      <q-icon name="event" size="xs" class="q-mr-xs" />
                      14/11/2025
                    </div>
                    <h3 class="text-h6 q-mt-none q-mb-sm news-title">Pendiidkan</h3>
                    <p class="text-body2 news-excerpt">Tim relawan kami tiba di desa...</p>

                    <div class="row items-center justify-between q-mt-md">
                      <div class="text-caption text-grey">
                        <q-icon name="visibility" size="xs" class="q-mr-xs" />
                        208 views
                      </div>
                      <q-btn
                        flat
                        color="primary"
                        label="Baca Selengkapnya"
                        icon="arrow_forward"
                        size="sm"
                      />
                    </div>
                  </q-card-section>
                </q-card>
              </div>

              <div class="col-6" >
                <q-card class="featured-news-card cursor-pointer">
                  <div class="row" height="150px">
                    <div class="col-8 col-md-4">
                      <q-img
                        style="width: 100%; height: 100%"
                        class="featured-image"
                         src="assets/man-sitting-begging-overpass.jpg"
                      />
                    </div>
                    <div class="col- col-md-8">
                      <q-card-section>
                        <h2 class="text-h5 q-mt-none q-mb-sm">Bencana Alam</h2>
                         <div class="text-caption text-grey q-mb-xs">
                            <q-icon name="event" size="xs" class="q-mr-xs" />
                            14/11/2025
                        </div>
                      </q-card-section>
                    </div>
                  </div>
                </q-card>
              </div>
            </div>

            <!-- Empty State -->
            <!-- <div class="text-center q-py-xl">
              <q-icon name="article" size="80px" color="grey-4" />
              <h4 class="q-mt-md text-grey-6">Tidak ada berita ditemukan</h4>
              <p class="text-grey-6">Coba gunakan kata kunci lain atau hapus filter</p>
              <q-btn
                color="primary"
                label="Tampilkan Semua Berita"
                class="q-mt-sm"
              />
            </div> -->

            <!-- Load More Button -->
            <div class="text-center q-mt-xl">
              <q-btn
                color="primary"
                outline
                label="Muat Lebih Banyak"
              />
            </div>
          </div>
        </div>
      </div>
    </q-page-container>

    <!-- News Detail Dialog -->
    <!-- <q-dialog v-model="newsDetailDialog" maximized>
      <NewsDetail
        :news-id="selectedNewsId"
        @close="newsDetailDialog = false"
      />
    </q-dialog> -->
</template>



<style scoped>
.add-btn{
    position: absolute;
}
.news-header {
  background: linear-gradient(135deg, #1976d2 0%, #1565c0 100%);
}

.container {
  max-width: 1200px;
  margin: 0 auto;
}

.featured-news-card {
    transition: all 0.3s ease;
      box-shadow: 0 6px 20px rgba(108, 108, 108, 0.15);
}

.featured-news-card:hover {
  transform: translateY(-5px);
    box-shadow: 0 6px 20px rgba(0, 157, 255, 0.15);
}

.news-card {
    transition: all 0.3s ease;
      box-shadow: 0 6px 20px rgba(108, 108, 108, 0.15);
  height: 100%;
}

.news-card:hover {
  transform: translateY(-5px);
    box-shadow: 0 6px 20px rgba(0, 157, 255, 0.15);
}

/* .news-title {
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

.news-excerpt {
  display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
  overflow: hidden;
} */

.featured-image {
  object-fit: cover;
}

.tags {
  line-height: 2;
}
</style>

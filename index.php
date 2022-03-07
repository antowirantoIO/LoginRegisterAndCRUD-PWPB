<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <script
      type="text/javascript"
      src="cdn_modules/alpinejs@3.7.1/cdn.min.js"
    ></script>
    <script>
      // tailwind config here
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              blurple: "#7289da",
            },
          },
        },
      };
    </script>
    <!-- custom css below -->
    <style type="text/tailwindcss">
      body {
        font-family: "Poppins";
      }
    </style>
  </head>

  <body class="antialiaze">
    <div class="min-h-screen">
      <!-- This example requires Tailwind CSS v2.0+ -->
      <main>
        <div>
        <nav class="print:hidden bg-gray-900 z-50 border-b border-gray-800">
            <div class="max-w-screen-lg mx-auto lg:max-w-screen-lg xl:max-w-screen-xl">
                <div class="flex flex-col items-center justify-between py-0 md:flex-row md:py-4">
                    <div class="w-full px-4 py-3 md:w-auto md:py-0 md:px-4 xl:px-0">
                        <div class="flex items-center justify-between">
                        <a class="flex items-center flex-shrink-0 mr-8 focus:outline-none" href="/">
                            <img class="w-10" src="https://raw.githubusercontent.com/antowirantoIO/SMKN1CIAMIS/main/logosmkn1ciamis.png" alt="Parsinta">
                        </a>
                        <div class="block md:hidden">
                            <div class="relative inline-block text-left">
                                <div class="flex items-center">
                                    <button class="inline-flex items-center justify-center w-full ml-3 text-white gap-x-2 md:gap-x-3 md:ml-0 focus:outline-none" id="headlessui-menu-button-4" type="button" aria-haspopup="true" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                        <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path>
                                    </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="hidden md:flex flex-col md:flex-row md:items-center border-t border-gray-800 md:border-t-0 justify-between w-full px-2 pt-2 pb-3 md:py-0">
                        <div class="flex flex-col justify-between w-full md:flex-row md:items-center" id="headlessui-disclosure-panel-3">
                        <div class="flex flex-col mb-2 md:flex-row md:items-center md:mb-0">
                            <a class="text-gray-200 hover:text-white focus:outline-none font-medium border border-white border-opacity-0 lg:mx-0.5 flex items-center gap-x-2 relative tracking-tight py-2 px-2 rounded-lg transition-colors duration-200 sm:hidden lg:block" href="/">HOME</a>
                            <a class="!border-opacity-10 bg-black/10 text-white focus:outline-none font-medium border border-white border-opacity-0 lg:mx-0.5 flex items-center gap-x-2 relative tracking-tight py-2 px-4 rounded-lg transition-colors duration-200" href="/series">TENTANG KAMI</a>
                            <a class="text-gray-200 hover:text-white focus:outline-none font-medium border border-white border-opacity-0 lg:mx-0.5 flex items-center gap-x-2 relative tracking-tight py-2 px-2 rounded-lg transition-colors duration-200" href="/skills/laravel">KOMPETESI KEAHLIAN</a>
                            <a class="text-gray-200 hover:text-white focus:outline-none font-medium border border-white border-opacity-0 lg:mx-0.5 flex items-center gap-x-2 relative tracking-tight py-2 px-2 rounded-lg transition-colors duration-200" href="/articles">TEACHING FACTORY</a>
                            <a class="text-gray-200 hover:text-white focus:outline-none font-medium border border-white border-opacity-0 lg:mx-0.5 flex items-center gap-x-2 relative tracking-tight py-2 px-2 rounded-lg transition-colors duration-200" href="/premium">KONTAK</a>>
                        </div>
                        <div class="flex items-center justify-between px-4 py-1 md:py-0 md:px-0">
                            <div class="flex flex-col -ml-4 md:flex-row md:items-center md:ml-0">
                                <div class="hidden w-px mx-4 mr-0 md:block h-7 bg-blue-50 bg-opacity-20"></div>
                                <a class="text-gray-200 hover:text-white focus:outline-none font-medium border border-white border-opacity-0 lg:mx-0.5 flex items-center gap-x-2 relative tracking-tight py-2 px-4 rounded-lg transition-colors duration-200" href="/login">Login</a>
                                <a class="text-gray-200 hover:text-white focus:outline-none font-medium border border-white border-opacity-0 lg:mx-0.5 flex items-center gap-x-2 relative tracking-tight py-2 px-4 rounded-lg transition-colors duration-200 md:hidden lg:block" href="/register">Register</a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>


          <!-- Hero Section -->
          <div class="relative">
            <div class="max-w mx-auto">
              <div class="relative sm:overflow-hidden">
                <div class="absolute inset-0">
                  <img
                    class="h-full w-full object-cover"
                    src="https://raw.githubusercontent.com/antowirantoIO/SMKN1CIAMIS/main/images.jpeg"
                    alt="People working on laptops"
                  />
                  <div
                    class="absolute inset-0 bg-gradient-to-br from-gray-300 to-gray-400 mix-blend-multiply"
                  ></div>
                </div>
                <div
                  class="relative px-4 py-20 sm:px-6 sm:py-28 lg:py-35 lg:px-8"
                >
                  <h1
                    class="text-center text-4xl font-bold sm:text-7xl lg:text-8xl"
                  >
                    <span class="block text-white">SMKN 1 CIAMIS</span>
                  </h1>
                  <p
                    class="mt-5 max-w-lg mx-auto text-center text-md xl:text-xl text-gray-200 sm:max-w-3xl"
                  >
                    Sekolah Menengah Kejuruan Bidang Keahlian Bisnis-Manajemen,
                    Pariwisata dan Teknologi Informasi dan Komunikasi,
                    Melaksanakan pembelajaran berbasis Teknologi Informasi dan
                    Komunikasi, Memenuhi fasilitas praktik dan bahan ajar sesuai
                    dengan standar yang ditetapkan.
                  </p>
                  <div class="mt-8 mx-auto flex justify-center">
                    <a
                      href="#"
                      class="flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-gray-700 bg-white hover:bg-gray-50"
                    >
                      Daftar Sekarang &rarr;
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- About Section -->
          <div class="relative bg-white py-10 sm:py-15 lg:py-24">
            <div
              class="mx-auto max-w-md px-4 text-center sm:max-w-4xl lg:max-w-7xl"
            >
              <h2
                class="text-base font-semibold tracking-wider text-blue-600 uppercase"
              >
                Tentang Kami
              </h2>
              <p
                class="mt-2 text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl"
              >
                Mengapa Harus SMKN 1 CIAMIS
              </p>
              <p
                class="mt-5 max-w-prose mx-auto text-md xl:text-xl text-gray-500"
              >
                Sekolah Menengah Kejuruan Melaksanakan pembelajaran berbasis
                Teknologi Informasi dan Komunikasi, Memenuhi fasilitas praktik
                dan bahan ajar sesuai dengan standar yang ditetapkan.
              </p>
              <div class="mt-12">
                <div
                  class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3"
                >
                  <div class="pt-6">
                    <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                      <div class="-mt-6">
                        <div>
                          <span
                            class="inline-flex items-center justify-center p-3 bg-blue-500 rounded-md shadow-lg"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              class="h-10 w-10 text-white"
                              fill="none"
                              viewBox="0 0 24 24"
                              stroke="currentColor"
                            >
                              <path d="M12 14l9-5-9-5-9 5 9 5z" />
                              <path
                                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"
                              />
                              <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"
                              />
                            </svg>
                          </span>
                        </div>
                        <h3
                          class="mt-8 text-lg font-medium text-gray-900 tracking-tight"
                        >
                          Lulusan Berkualitas
                        </h3>
                        <p class="mt-5 text-base text-gray-500">
                          SMKN 1 CIAMIS Telah mencetak lulusan berkualitas
                          sesuai kebutuhan industri dengan program program
                          sekolah juga teaching factory.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="pt-6">
                    <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                      <div class="-mt-6">
                        <div>
                          <span
                            class="inline-flex items-center justify-center p-3 bg-blue-500 rounded-md shadow-lg"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              class="h-10 w-10 text-white"
                              viewBox="0 0 20 20"
                              fill="currentColor"
                            >
                              <path
                                d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"
                              />
                            </svg>
                          </span>
                        </div>
                        <h3
                          class="mt-8 text-lg font-medium text-gray-900 tracking-tight"
                        >
                          Guru Yang Berkompeten
                        </h3>
                        <p class="mt-5 text-base text-gray-500">
                          SMKN 1 CIAMIS Memiliki Guru - Guru berkompeten dalam
                          bidangnya masing - masing.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="pt-6">
                    <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                      <div class="-mt-6">
                        <div>
                          <span
                            class="inline-flex items-center justify-center p-3 bg-blue-500 rounded-md shadow-lg"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              class="h-10 w-10 text-white"
                              viewBox="0 0 20 20"
                              fill="currentColor"
                            >
                              <path
                                fill-rule="evenodd"
                                d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z"
                                clip-rule="evenodd"
                              />
                            </svg>
                          </span>
                        </div>
                        <h3
                          class="mt-8 text-lg font-medium text-gray-900 tracking-tight"
                        >
                          Fasilitas Lengkap
                        </h3>
                        <p class="mt-5 text-base text-gray-500">
                          SMKN 1 CIAMIS Memiliki Fasilitas Sarana yang Lengkap
                          dan memadai untuk Menunjang proses pembelajaran.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Kompetensi Keahlian -->
          <div class="bg-blue-700">
            <div
              class="max-w-4xl mx-auto px-4 py-16 sm:px-6 sm:pt-20 sm:pb-24 lg:max-w-7xl lg:pt-24 lg:px-8"
            >
              <h2 class="text-3xl font-extrabold text-white tracking-tight">
                Kompetisi Keahlian SMKN 1 CIAMIS
              </h2>
              <p class="mt-4 max-w-3xl text-md text-indigo-200">
                Sekolah Menengah Kejuruan Bidang Keahlian Bisnis-Manajemen,
                Pariwisata dan Teknologi Informasi dan Komunikasi, Memiliki 7
                kompetisi keahlian yaitu
              </p>
              <div
                class="mt-12 grid grid-cols-1 gap-x-6 gap-y-12 sm:grid-cols-2 lg:mt-16 lg:grid-cols-4 lg:gap-x-8 lg:gap-y-16"
              >
                <div>
                  <div>
                    <span
                      class="flex items-center justify-center h-12 w-12 rounded-md bg-white bg-opacity-10"
                    >
                      <!-- Heroicon name: outline/inbox -->
                      <svg
                        class="h-6 w-6 text-white"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        aria-hidden="true"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"
                        />
                      </svg>
                    </span>
                  </div>
                  <div class="mt-6">
                    <h3 class="text-lg font-medium text-white">
                      Akuntansi Dan Keuangan Lembaga
                    </h3>
                    <p class="mt-2 text-base text-indigo-200">
                      Ac tincidunt sapien vehicula erat auctor pellentesque
                      rhoncus. Et magna sit morbi lobortis.
                    </p>
                  </div>
                </div>
                <div>
                  <div>
                    <span
                      class="flex items-center justify-center h-12 w-12 rounded-md bg-white bg-opacity-10"
                    >
                      <!-- Heroicon name: outline/users -->
                      <svg
                        class="h-6 w-6 text-white"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        aria-hidden="true"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"
                        />
                      </svg>
                    </span>
                  </div>
                  <div class="mt-6">
                    <h3 class="text-lg font-medium text-white">
                      Otomatisasi Dan Tata Kelola Perkantoran
                    </h3>
                    <p class="mt-2 text-base text-indigo-200">
                      Ac tincidunt sapien vehicula erat auctor pellentesque
                      rhoncus. Et magna sit morbi lobortis.
                    </p>
                  </div>
                </div>
                <div>
                  <div>
                    <span
                      class="flex items-center justify-center h-12 w-12 rounded-md bg-white bg-opacity-10"
                    >
                      <!-- Heroicon name: outline/trash -->
                      <svg
                        class="h-6 w-6 text-white"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        aria-hidden="true"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                        />
                      </svg>
                    </span>
                  </div>
                  <div class="mt-6">
                    <h3 class="text-lg font-medium text-white">
                      Bisnis Daring Dan Pemasaran
                    </h3>
                    <p class="mt-2 text-base text-indigo-200">
                      Ac tincidunt sapien vehicula erat auctor pellentesque
                      rhoncus. Et magna sit morbi lobortis.
                    </p>
                  </div>
                </div>
                <div>
                  <div>
                    <span
                      class="flex items-center justify-center h-12 w-12 rounded-md bg-white bg-opacity-10"
                    >
                      <!-- Heroicon name: outline/pencil-alt -->
                      <svg
                        class="h-6 w-6 text-white"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        aria-hidden="true"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"
                        />
                      </svg>
                    </span>
                  </div>
                  <div class="mt-6">
                    <h3 class="text-lg font-medium text-white">Tata Boga</h3>
                    <p class="mt-2 text-base text-indigo-200">
                      Ac tincidunt sapien vehicula erat auctor pellentesque
                      rhoncus. Et magna sit morbi lobortis.
                    </p>
                  </div>
                </div>
                <div>
                  <div>
                    <span
                      class="flex items-center justify-center h-12 w-12 rounded-md bg-white bg-opacity-10"
                    >
                      <!-- Heroicon name: outline/document-report -->
                      <svg
                        class="h-6 w-6 text-white"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        aria-hidden="true"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"
                        />
                      </svg>
                    </span>
                  </div>
                  <div class="mt-6">
                    <h3 class="text-lg font-medium text-white">Perhotelan</h3>
                    <p class="mt-2 text-base text-indigo-200">
                      Ac tincidunt sapien vehicula erat auctor pellentesque
                      rhoncus. Et magna sit morbi lobortis.
                    </p>
                  </div>
                </div>
                <div>
                  <div>
                    <span
                      class="flex items-center justify-center h-12 w-12 rounded-md bg-white bg-opacity-10"
                    >
                      <!-- Heroicon name: outline/reply -->
                      <svg
                        class="h-6 w-6 text-white"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        aria-hidden="true"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6"
                        />
                      </svg>
                    </span>
                  </div>
                  <div class="mt-6">
                    <h3 class="text-lg font-medium text-white">Multimedia</h3>
                    <p class="mt-2 text-base text-indigo-200">
                      Ac tincidunt sapien vehicula erat auctor pellentesque
                      rhoncus. Et magna sit morbi lobortis.
                    </p>
                  </div>
                </div>
                <div>
                  <div>
                    <span
                      class="flex items-center justify-center h-12 w-12 rounded-md bg-white bg-opacity-10"
                    >
                      <!-- Heroicon name: outline/chat-alt -->
                      <svg
                        class="h-6 w-6 text-white"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        aria-hidden="true"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"
                        />
                      </svg>
                    </span>
                  </div>
                  <div class="mt-6">
                    <h3 class="text-lg font-medium text-white">
                      Rekayasa Perangkat Lunak
                    </h3>
                    <p class="mt-2 text-base text-indigo-200">
                      Ac tincidunt sapien vehicula erat auctor pellentesque
                      rhoncus. Et magna sit morbi lobortis.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Video section -->
          <div class="relative bg-white py-10 sm:py-15 lg:py-24">
            <div
              class="mx-auto max-w-md px-4 text-center sm:max-w-4xl lg:max-w-7xl"
            >
              <h2
                class="text-base font-semibold tracking-wider text-blue-600 uppercase"
              >
                Mengenal SMKN 1 CIAMIS
              </h2>
              <p
                class="mt-2 text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl"
              >
                Melihat SMKN 1 CIAMIS Lebih dekat
              </p>
              <p class="mt-3 max-w-2xl mx-auto text-md text-gray-500 sm:mt-4">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa
                libero labore natus atque, ducimus sed.
              </p>
              <div class="pt-5">
                <div class="pt-5 flex items-center justify-center rounded-lg">
                  <iframe
                    class="w-full aspect-video"
                    src="https://www.youtube.com/embed/FZmbSq2W1hY"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                  ></iframe>
                </div>
              </div>
            </div>
          </div>
          <div class="relative bg-white py-10 sm:py-15 lg:py-24">
            <div
              class="mx-auto max-w-md px-4 text-center sm:max-w-4xl lg:max-w-7xl"
            >
              <div>
                <h2
                  class="text-base font-semibold tracking-wider text-blue-600 uppercase"
                >
                  Mitra Kerjasama
                </h2>
                <p
                  class="mt-2 text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl"
                >
                  Relasi Mitra di SMKN 1 CIAMIS
                </p>
                <p class="mt-3 max-w-2xl mx-auto text-md text-gray-500 sm:mt-4">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa
                  libero labore natus atque, ducimus sed.
                </p>
              </div>
            </div>
            <div
              class="max-w-4xl mx-auto mt-8 grid grid-cols-2 gap-0.5 md:grid-cols-3 lg:mt-0 lg:grid-cols-2"
            >
              <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
                <img
                  class="max-h-12"
                  src="https://tailwindui.com/img/logos/transistor-logo-gray-400.svg"
                  alt="Workcation"
                />
              </div>
              <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
                <img
                  class="max-h-12"
                  src="https://tailwindui.com/img/logos/mirage-logo-gray-400.svg"
                  alt="Mirage"
                />
              </div>
              <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
                <img
                  class="max-h-12"
                  src="https://tailwindui.com/img/logos/tuple-logo-gray-400.svg"
                  alt="Tuple"
                />
              </div>
              <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
                <img
                  class="max-h-12"
                  src="https://tailwindui.com/img/logos/laravel-logo-gray-400.svg"
                  alt="Laravel"
                />
              </div>
              <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
                <img
                  class="max-h-12"
                  src="https://tailwindui.com/img/logos/statickit-logo-gray-400.svg"
                  alt="StaticKit"
                />
              </div>
              <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
                <img
                  class="max-h-12"
                  src="https://tailwindui.com/img/logos/statamic-logo-gray-400.svg"
                  alt="Statamic"
                />
              </div>
            </div>
          </div>
        </div>
      </main>
      <footer class="bg-gray-100" aria-labelledby="footerHeading">
        <h2 id="footerHeading" class="sr-only">Footer</h2>
        <div class="max-w-7xl mx-uto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
          <div class="xl:grid xl:grid-cols-3 xl:gap-8">
            <div class="space-y-8 xl:col-span-1">
              <img
                class="h-[9rem] w-auto"
                src="images/logosmkn1ciamis.png"
                alt="Company name"
              />
              <p class="text-gray-500 text-base">
                Sekolah Menengah Kejuruan Bidang Keahlian Bisnis-Manajemen,
                Pariwisata dan Teknologi Informasi dan Komunikasi.
              </p>
              <div class="flex space-x-6">
                <a href="#" class="text-gray-400 hover:text-gray-500">
                  <span class="sr-only">Facebook</span>
                  <svg
                    class="h-6 w-6"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                    aria-hidden="true"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                      clip-rule="evenodd"
                    />
                  </svg>
                </a>

                <a href="#" class="text-gray-400 hover:text-gray-500">
                  <span class="sr-only">Instagram</span>
                  <svg
                    class="h-6 w-6"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                    aria-hidden="true"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                      clip-rule="evenodd"
                    />
                  </svg>
                </a>

                <a href="#" class="text-gray-400 hover:text-gray-500">
                  <span class="sr-only">Twitter</span>
                  <svg
                    class="h-6 w-6"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                    aria-hidden="true"
                  >
                    <path
                      d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"
                    />
                  </svg>
                </a>
              </div>
            </div>
            <div class="mt-12 grid grid-cols-2 gap-8 xl:mt-0 xl:col-span-2">
              <div class="md:grid md:grid-cols-2 md:gap-8">
                <div>
                  <h3
                    class="text-sm font-semibold text-gray-400 tracking-wider uppercase"
                  >
                    Tentang Kami
                  </h3>
                  <ul class="mt-4 space-y-4">
                    <li>
                      <a
                        href="#"
                        class="text-base text-gray-500 hover:text-gray-900"
                      >
                        Sejarah
                      </a>
                    </li>

                    <li>
                      <a
                        href="#"
                        class="text-base text-gray-500 hover:text-gray-900"
                      >
                        Visi Misi
                      </a>
                    </li>

                    <li>
                      <a
                        href="#"
                        class="text-base text-gray-500 hover:text-gray-900"
                      >
                        Keunggulan
                      </a>
                    </li>

                    <li>
                      <a
                        href="#"
                        class="text-base text-gray-500 hover:text-gray-900"
                      >
                        Landasan Hukum
                      </a>
                    </li>

                    <li>
                      <a
                        href="#"
                        class="text-base text-gray-500 hover:text-gray-900"
                      >
                        Lokasi Sekolah
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="mt-12 md:mt-0">
                  <h3
                    class="text-sm font-semibold text-gray-400 tracking-wider uppercase"
                  >
                    Referensi
                  </h3>
                  <ul class="mt-4 space-y-4">
                    <li>
                      <a
                        href="#"
                        class="text-base text-gray-500 hover:text-gray-900"
                      >
                        Perpustakaan SMKN 1 CIAMIS
                      </a>
                    </li>

                    <li>
                      <a
                        href="#"
                        class="text-base text-gray-500 hover:text-gray-900"
                      >
                        LMS SMKN 1 CIAMIS
                      </a>
                    </li>

                    <li>
                      <a
                        href="#"
                        class="text-base text-gray-500 hover:text-gray-900"
                      >
                        PPDB SMKN 1 CIAMIS
                      </a>
                    </li>

                    <li>
                      <a
                        href="#"
                        class="text-base text-gray-500 hover:text-gray-900"
                      >
                        PSMK
                      </a>
                    </li>
                    <li>
                      <a
                        href="#"
                        class="text-base text-gray-500 hover:text-gray-900"
                      >
                        ICT Center Ciamis
                      </a>
                    </li>
                    <li>
                      <a
                        href="#"
                        class="text-base text-gray-500 hover:text-gray-900"
                      >
                        Website Alumni
                      </a>
                    </li>
                    <li>
                      <a
                        href="#"
                        class="text-base text-gray-500 hover:text-gray-900"
                      >
                        Teaching Factory
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div>
                <h3
                  class="text-sm font-semibold text-gray-400 tracking-wider uppercase"
                >
                  Kontak
                </h3>
                <div class="mt-4 space-y-4">
                  <div class="text-base text-gray-500 hover:text-gray-900">
                    Jl.Jenderal Soedirman No.269 Ciamis, Jawa Barat Indonesia
                  </div>
                  <div class="text-base text-gray-500 hover:text-gray-900">
                    (0265) 771204
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mt-12 border-t border-gray-200 pt-8">
            <p class="text-base text-gray-400 xl:text-center">
              &copy; 2021 SMK NEGERI 1 CIAMIS. All rights reserved. Created by
              Anto Wiranto
            </p>
          </div>
        </div>
      </footer>
    </div>
  </body>
</html>
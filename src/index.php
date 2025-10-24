<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AltitudeTrails</title>

    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <script src="https://cdn.tailwindcss.com"></script>

    <link
      rel="stylesheet"
      href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
      integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
      crossorigin=""
    />

    <!-- Leaflet JS -->
    <script
      src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
      integrity="sha256-o9N1jv5fygZPcg0EwzJ8Yh6jUAdf3OQXQYBfEHTxS94="
      crossorigin=""
    ></script>

    <script src="https://cdn.tailwindcss.com"></script>

    <script
      src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
      integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
      crossorigin=""
    ></script>

    <!-- style -->
    <style>
      * {
        font-family: "Poppins", sans-serif;
      }

      #map {
        height: 450px;
      }
    </style>

    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

      * {
        font-family: "Poppins", sans-serif;
      }
    </style>
  </head>
  <body class="bg-white text-gray-900">
    <!-- ===== SECTION 1: ABOUT ===== -->
    <section>
      <div
        class="relative group inline-block w-full py-2.5 font-normal text-xs text-white text-center bg-black"
      >
        <button
          id="moreButton"
          class="absolute left-12 top-1/2 -translate-y-1/2 text-white text-xs font-normal hover:text-gray-300 focus:outline-none"
        >
          More
        </button>

        <p>Lets Hiking with Us</p>

        <div
          id="flyoutMenu"
          class="hidden fixed left-0 right-0 w-full h-[35vh] bg-black text-white shadow-lg text-left z-50 transition-all duration-200"
        >
          <ul class="text-xs py-10 ml-8">
            <p
              class="px-4 py-2 hover:bg-black font-bold hover:text-gray-300 cursor-pointer"
            >
              All our menu
            </p>
            <li
              class="px-4 py-2 hover:bg-black hover:text-gray-300 cursor-pointer"
            >
              About Us
            </li>
            <li
              class="px-4 py-2 hover:bg-black hover:text-gray-300 cursor-pointer"
            >
              Destinations
            </li>
            <li
              class="px-4 py-2 hover:bg-black hover:text-gray-300 cursor-pointer"
            >
              Contact
            </li>
            <li
              class="px-4 py-2 hover:bg-black hover:text-gray-300 cursor-pointer"
            >
              Join Community
            </li>
          </ul>
        </div>
      </div>

      <!-- ===== SECTION 2: navbar ===== -->
      <section
        class="relative pb-32 md:pb-44 bg-[url('image/bg1.png')] bg-cover bg-center bg-no-repeat text-slate-800 text-sm"
      >
        <nav
          class="flex items-center justify-between p-4 md:px-16 lg:px-24 xl:px-32 bg-white border-b border-gray-200"
        >
          <a href="https://prebuiltui.com">
            <img
              src="image/logo.png"
              alt="Logo"
              class="h-10 w-auto object-contain"
            />
          </a>

          <ul
            id="menu"
            class="flex-grow ml-14 max-md:absolute max-md:h-full max-md:z-50 max-md:w-full max-md:top-0 max-md:-left-full transition-all duration-300 max-md:backdrop-blur max-md:bg-white/70 max-md:text-base flex flex-col md:flex-row items-center justify-start gap-x-12 font-medium"
          >
            <li onclick="closeNavbar()" class="hover:text-slate-500">
              <a href="#">Home</a>
            </li>
            <li onclick="closeNavbar()" class="hover:text-slate-500">
              <a href="#">Products</a>
            </li>
            <li onclick="closeNavbar()" class="hover:text-slate-500">
              <a href="#">Stories</a>
            </li>
            <li onclick="closeNavbar()" class="hover:text-slate-500">
              <a href="#">Pricing</a>
            </li>
            <li onclick="closeNavbar()" class="hover:text-slate-500">
              <a href="#">Docs</a>
            </li>

            <button
              id="close-menu"
              class="md:hidden bg-gray-800 hover:bg-black text-white p-2 rounded-md aspect-square font-medium transition"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
              >
                <path d="M18 6 6 18" />
                <path d="m6 6 12 12" />
              </svg>
            </button>
          </ul>

          <button id="open-menu" class="md:hidden">
            <svg
              class="size-7"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              viewBox="0 0 24 24"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <path d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>

          <button
            class="max-md:hidden px-6 py-3 text-white bg-black hover:bg-slate-800 transition rounded-full"
          >
            Booking now
          </button>
        </nav>

        <div
          class="flex flex-col-reverse gap-10 md:flex-row px-4 md:px-16 lg:px-24 xl:px-32 mt-12 md:mt-32"
        >
          <div class="max-md:text-center">
            <h5
              class="text-4xl md:text-6xl/[76px] font-semibold max-w-2xl text-slate-50"
            >
              Reach the pinnacle of your dreams
            </h5>

            <p
              class="text-sm md:text-base max-w-md mt-6 max-md:px-2 text-slate-50"
              style="text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.6)"
            >
              Like further and safer. Our expert guides manage every challenge,
              ensuring you return with a great story.
            </p>

            <div class="flex items-center gap-4 mt-6">
              <button
                class="max-md:hidden px-6 py-3 text-white bg-black hover:bg-slate-800 transition rounded-full"
              >
                Book Your Trip
              </button>

              <button
                class="max-md:hidden px-6 py-3 text-white bg-black hover:bg-slate-800 transition rounded-full"
              >
                View Packages
              </button>
            </div>
          </div>
        </div>
      </section>
    </section>

    <!-- ===== SECTION 3: kutipan ===== -->
    <section class="bg-black text-white py-24 px-6 md:px-24 text-left">
      <div class="max-w-4xl mx-auto">
        <div class="mb-6">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="#FFFFFF"
            viewBox="0 0 24 24"
            class="w-10 h-10"
          >
            <path
              d="M7.17 6.17A6.004 6.004 0 0 0 2 12v6a2 2 0 0 0 2 2h4v-6H4v-2a2 2 0 0 1 2-2h2V6H7.17zM17.17 6.17A6.004 6.004 0 0 0 12 12v6a2 2 0 0 0 2 2h4v-6h-4v-2a2 2 0 0 1 2-2h2V6h-0.83z"
            />
          </svg>
        </div>

        <p class="text-2xl md:text-3xl font-semibold leading-snug mb-6">
          For us, the top is not the final destination. It is a reward for a
          safe journey, thorough preparation, and a deep respect for the
          wilderness.
        </p>

        <p class="text-lg text-gray-300">
          — The Altitude Trails Team Philosophy
        </p>
      </div>
    </section>

    <!-- ===== SECTION 4: isi ===== -->
    <section
      class="py-24 bg-white text-gray-900 px-6 md:px-16 lg:px-24 xl:px-32 mt-3 mb-3"
    >
      <div class="max-w-7xl mx-auto">
        <a href="https://prebuiltui.com" class="mb-2 inline-block">
          <img
            src="image/logo.png"
            alt="Logo"
            class="h-6 w-auto object-contain"
          />
        </a>

        <h2 class="text-7xl md:text-5xl font-semibold mb-10">
          Get to Know About Us
        </h2>

        <div class="grid md:grid-cols-2 gap-10 items-start">
          <div class="grid grid-cols-2 gap-6">
            <div
              class="bg-gray-100 rounded-2xl p-6 text-left shadow-sm flex flex-col justify-between h-36"
            >
              <h3 class="text-4xl font-semibold">200+</h3>
              <p class="text-gray-600 text-sm">Hiking Event Organized</p>
            </div>

            <div
              class="bg-gray-100 rounded-2xl p-6 text-left shadow-sm flex flex-col justify-between h-36"
            >
              <h3 class="text-4xl font-semibold">25</h3>
              <p class="text-gray-600 text-sm">
                Countries Covered in Trail Guides
              </p>
            </div>

            <div
              class="bg-gray-100 rounded-2xl p-6 text-left shadow-sm flex flex-col justify-between h-36"
            >
              <h3 class="text-4xl font-semibold">98%</h3>
              <p class="text-gray-600 text-sm">Customer Satisfaction Rate</p>
            </div>

            <div
              class="bg-gray-100 rounded-2xl p-6 text-left shadow-sm flex flex-col justify-between h-36"
            >
              <h3 class="text-4xl font-semibold">10K+</h3>
              <p class="text-gray-600 text-sm">Hikers in Community</p>
            </div>
          </div>

          <div>
            <h3
              class="text-2xl md:text-3xl font-normal leading-snug mb-20 text-gray-600"
            >
              Elevate every step, embrace every trail. Adventure awaits—let’s
              make it unforgettable
            </h3>
            <p class="text-gray-600 leading-relaxed text-sm text-justify">
              At Altitude Trails, we're passionate about the outdoors and
              dedicated to guiding you on the best hiking adventures possible.
              Founded by a team of experienced guides, our mission is to provide
              safe and knowledgeable professional guiding services for both
              beginners and advanced hikers. We believe everyone should have the
              opportunity to explore the beauty of nature, and we're committed
              to making every hike with us an unforgettable experience.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== SECTION 4: why us ===== -->
    <section class="py-24 bg-black text-white px-6 md:px-16 lg:px-24 xl:px-32">
      <div class="grid md:grid-cols-2 gap-10 items-start">
        <div>
          <div class="flex items-center gap-2 mb-9">
            <h2 class="text-white text-3xl md:text-5xl font-semibold">
              Why Us?
            </h2>
          </div>

          <p class="text-gray-300 max-w-3xl text-justify text-sm mb-8">
            At Altitude Trails, we’re committed to making your outdoor
            experiences exceptional, safe, and memorable. Our mission is to
            support and inspire every explorer, helping you make the most of
            nature’s wonders, one unforgettable journey at a time.
          </p>

          <div class="relative w-full h-80">
            <video
              class="object-cover w-full h-full rounded-2xl"
              autoplay
              loop
              muted
              playsinline
            >
              <source src="video/v2.mp4" type="video/mp4" />
            </video>
            <span
              class="absolute top-3 left-3 bg-black text-white text-xs px-3 py-1 rounded-full"
              >Best feeling</span
            >
          </div>
        </div>

        <div class="flex flex-col gap-6">
          <div class="flex gap-6 border-b border-gray-800 pb-6">
            <span class="text-6xl font-light text-white">1</span>
            <div>
              <h4 class="font-normal text-2xl mb-4">
                Comprehensive Trail Guides
              </h4>
              <p class="text-gray-300 text-sm text-justify">
                Discover handpicked trails suited to every skill level, complete
                with detailed maps, safety tips, and insider recommendations.
              </p>
            </div>
          </div>

          <div class="flex gap-6 border-b border-gray-800 pb-6">
            <span class="text-6xl font-light text-white">2</span>
            <div>
              <h4 class="font-normal text-2xl mb-4">Expert Knowledge</h4>
              <p class="text-gray-300 text-sm text-justify">
                Benefit from insights shared by seasoned hikers and outdoor
                enthusiasts, ensuring you’re prepared for every adventure.
              </p>
            </div>
          </div>

          <div class="flex gap-6 border-b border-gray-800 pb-6">
            <span class="text-6xl font-light text-white">3</span>
            <div>
              <h4 class="font-normal text-2xl mb-4">
                Community-Centric Approach
              </h4>
              <p class="text-gray-300 text-sm text-justify">
                Join a vibrant community of nature lovers, where you can
                connect, share stories, and join group challenges.
              </p>
            </div>
          </div>

          <div class="flex gap-6">
            <span class="text-6xl font-light text-white">4</span>
            <div>
              <h4 class="font-normal text-2xl mb-4">Global Reach</h4>
              <p class="text-gray-300 text-sm text-justify">
                Whether you’re hiking locally or exploring trails abroad,
                Altitude Trails provides resources and guidance for adventures
                worldwide.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== SECTION 5: trusted brand ===== -->
    <section class="py-6 bg-[url('image/bg4.png')] bg-cover bg-center">
      <h3 class="text-sm text-[#A6A6A6] font-semibold text-center">
        Our collaboration partners —
      </h3>
      <div
        class="flex flex-wrap items-center justify-center gap-16 max-md:px-2"
      >
        <svg
          class="h-7 w-auto"
          viewBox="0 0 90 32"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M5.176 22.3q.57 1.514 1.579 2.588a6.8 6.8 0 0 0 2.39 1.645q1.382.57 3.005.57 1.579 0 2.96-.592a7.3 7.3 0 0 0 2.413-1.666 7.6 7.6 0 0 0 1.6-2.566q.57-1.491.57-3.333V0H24.3v30.7h-4.561v-2.851a10.6 10.6 0 0 1-3.619 2.5q-2.083.877-4.496.877-2.456 0-4.583-.856a10.7 10.7 0 0 1-3.685-2.434Q1.8 26.358.9 24.143T0 19.209V0h4.605v18.946q0 1.842.57 3.355M32.237 0v11.183a11.7 11.7 0 0 1 3.552-2.434q2.019-.9 4.387-.899 2.456 0 4.605.921a11.8 11.8 0 0 1 3.728 2.5 11.8 11.8 0 0 1 2.5 3.728q.921 2.149.922 4.56 0 2.413-.922 4.54a11.8 11.8 0 0 1-2.5 3.706 11.8 11.8 0 0 1-3.728 2.5q-2.15.92-4.605.92-2.37 0-4.409-.899-2.039-.898-3.574-2.434V30.7h-4.386V0zm.504 22.586a7.6 7.6 0 0 0 1.645 2.456 7.9 7.9 0 0 0 2.456 1.666q1.404.614 3.027.614a7.4 7.4 0 0 0 2.982-.613 7.7 7.7 0 0 0 2.435-1.667 8.1 8.1 0 0 0 1.644-2.456q.614-1.403.614-3.026a7.6 7.6 0 0 0-.614-3.048 8.1 8.1 0 0 0-1.645-2.478 7.4 7.4 0 0 0-2.434-1.645 7.6 7.6 0 0 0-2.982-.592 7.6 7.6 0 0 0-2.983.592 7.6 7.6 0 0 0-2.456 1.645 7.9 7.9 0 0 0-1.667 2.478 7.6 7.6 0 0 0-.614 3.048q0 1.622.592 3.026m21.689-7.543a11.9 11.9 0 0 1 2.412-3.706 11.2 11.2 0 0 1 3.64-2.522q2.106-.92 4.562-.92 2.413 0 4.474.877a10.6 10.6 0 0 1 3.553 2.434q1.492 1.556 2.325 3.684.833 2.127.833 4.626v1.448H58.027a7.6 7.6 0 0 0 2.522 4.539 7.5 7.5 0 0 0 2.236 1.337 7.3 7.3 0 0 0 2.654.483q3.991 0 6.448-3.29l3.202 2.369a11.9 11.9 0 0 1-4.123 3.508q-2.457 1.272-5.527 1.272-2.5 0-4.671-.877a11.4 11.4 0 0 1-3.772-2.456 11.7 11.7 0 0 1-2.522-3.706q-.921-2.127-.921-4.627 0-2.368.877-4.473m6.162-1.732q-1.863 1.556-2.478 4.144h13.641q-.57-2.587-2.434-4.144t-4.364-1.557-4.365 1.557m23.928.504q-1.404 1.535-1.404 4.166V30.7h-4.43V8.333h4.386v2.763a6.2 6.2 0 0 1 2.17-2.15q1.34-.789 3.18-.789h1.536v4.123h-1.842q-2.193 0-3.597 1.535"
            fill="#A6A6A6"
          />
        </svg>

        <svg
          class="h-24 w-auto"
          viewBox="0 0 24 24"
          xmlns="http://www.w3.org/2000/svg"
        >
          <title>Panasonic</title>
          <path
            d="M3.157 11.4852c.0399-.6914-.4884-1.2842-1.1798-1.324H0v3.58h1.084v-1.1h.66c.166 0 .333-.02.496-.059.497-.103.87-.52.917-1.025v-.072zm-1.081.005a.35.35 0 0 1-.337.301c-.081.007-.15.007-.23.007h-.425v-.777h.632a.36.36 0 0 1 .36.326.658.658 0 0 1 0 .143zm3.6781 1.45c0-.278-.01-.511-.01-.786a1.654 1.654 0 0 0-.057-.42.666.666 0 0 0-.332-.43 1.046 1.046 0 0 0-.316-.118 2.63 2.63 0 0 0-1.065-.02c-.1.015-.197.043-.29.082a.77.77 0 0 0-.455.5.597.597 0 0 0-.024.261.124.124 0 0 0 .014.048l.86.02a.386.386 0 0 1 .025-.153.262.262 0 0 1 .162-.162.49.49 0 0 1 .342 0 .23.23 0 0 1 .156.157.15.15 0 0 1-.02.13.22.22 0 0 1-.1.078l-.074.024c-.113.03-.228.055-.343.075a6.7928 6.7928 0 0 0-.276.05 3.2483 3.2483 0 0 0-.365.095.787.787 0 0 0-.295.173.621.621 0 0 0-.205.393.792.792 0 0 0 .012.299.71.71 0 0 0 .509.54c.277.084.574.068.841-.043a.83.83 0 0 0 .344-.248c.018.059.038.117.057.176.012.032.03.061.051.087h.948a.414.414 0 0 1-.068-.207c-.0138-.2-.0225-.4004-.026-.601zm-.956-.088a.431.431 0 0 1-.067.193.406.406 0 0 1-.182.145.627.627 0 0 1-.21.054.453.453 0 0 1-.163-.013.244.244 0 0 1-.12-.074.204.204 0 0 1-.057-.106.17.17 0 0 1 .064-.174.314.314 0 0 1 .105-.063c.095-.035.19-.066.288-.093.118-.034.232-.078.342-.131a.907.907 0 0 1 0 .262zm3.262-1.712a1.038 1.038 0 0 0-.755.054 1.662 1.662 0 0 0-.393.262l-.023-.27h-.919v2.559h.982v-1.42a.413.413 0 0 1 .06-.221.383.383 0 0 1 .482-.16c.081.032.142.1.167.183.013.043.02.087.02.131v1.484h1.01v-1.652a1.205 1.205 0 0 0-.06-.394.822.822 0 0 0-.572-.558l.001.002zm5.9501 1.25a1.076 1.076 0 0 0-.42-.231l-.106-.03a4.543 4.543 0 0 0-.58-.122 1.8502 1.8502 0 0 1-.156-.03.3.3 0 0 1-.068-.024.117.117 0 0 1-.059-.152v-.008a.222.222 0 0 1 .131-.105.491.491 0 0 1 .316 0c.107.03.178.133.17.244h.902a.9.9 0 0 0-.055-.31.551.551 0 0 0-.184-.255.848.848 0 0 0-.242-.138 1.196 1.196 0 0 0-.262-.073 2.627 2.627 0 0 0-.642-.037 2.033 2.033 0 0 0-.366.054 1.082 1.082 0 0 0-.444.211.693.693 0 0 0-.28.526.72.72 0 0 0 .052.316.675.675 0 0 0 .393.393c.09.036.183.064.278.082l.554.104c.07.01.138.028.205.051.06.018.103.07.113.131a.19.19 0 0 1-.052.176.304.304 0 0 1-.17.086.492.492 0 0 1-.262-.025.368.368 0 0 1-.105-.061.263.263 0 0 1-.089-.131.41.41 0 0 1-.02-.138h-.932v.055a.773.773 0 0 0 .256.555.99.99 0 0 0 .426.24c.329.098.676.12 1.014.065.16-.023.313-.073.455-.148a.935.935 0 0 0 .176-.118.778.778 0 0 0 .246-.852.632.632 0 0 0-.193-.302v.001zm6.1982-2.226h.957v.676h-.957v-.676zm0 1.024h.957v2.558h-.957v-2.558zm2.872 1.505a1.1666 1.1666 0 0 1-.018.154.393.393 0 0 1-.096.199.299.299 0 0 1-.185.098.364.364 0 0 1-.316-.1.53.53 0 0 1-.152-.26 1.168 1.168 0 0 1 .012-.703.41.41 0 0 1 .178-.232.36.36 0 0 1 .407.017c.092.068.153.17.17.284h.874a.78.78 0 0 0-.09-.417 1.12 1.12 0 0 0-.724-.564 1.711 1.711 0 0 0-.806-.02c-.48.094-.863.456-.984.93a1.383 1.383 0 0 0-.031.621c.023.149.075.291.152.42.095.171.227.32.385.435.189.148.416.239.655.262.18.02.36.012.538-.025a1.24 1.24 0 0 0 .685-.38.928.928 0 0 0 .263-.719h-.917zm-3.704-1.553a1.038 1.038 0 0 0-.755.054 1.656 1.656 0 0 0-.393.262l-.031-.27h-.9181v2.559h.984v-1.428a.425.425 0 0 1 .06-.221.393.393 0 0 1 .484-.16c.08.033.14.1.164.183a.453.453 0 0 1 .021.14v1.483h1.016v-1.652a1.2 1.2 0 0 0-.06-.394.822.822 0 0 0-.572-.558v.002zm-7.8792 1.8c0-.278-.01-.511-.012-.786 0-.142-.018-.283-.054-.42a.675.675 0 0 0-.333-.43 1.056 1.056 0 0 0-.315-.118 2.637 2.637 0 0 0-1.067-.02c-.1.015-.196.043-.289.082a.766.766 0 0 0-.456.5.617.617 0 0 0-.025.261.149.149 0 0 0 .015.048l.86.02a.384.384 0 0 1 .024-.153.262.262 0 0 1 .163-.162.49.49 0 0 1 .342 0 .23.23 0 0 1 .156.157.15.15 0 0 1-.021.13.213.213 0 0 1-.098.078l-.075.024c-.113.03-.228.055-.343.075a6.3141 6.3141 0 0 0-.274.05 3.2042 3.2042 0 0 0-.366.095.762.762 0 0 0-.296.173.617.617 0 0 0-.21.393.753.753 0 0 0 .012.299c.056.26.252.469.508.54.277.084.575.068.842-.043a.808.808 0 0 0 .335-.245c.017.058.036.116.057.173.01.032.029.062.052.087h.948a.418.418 0 0 1-.054-.207 13.4697 13.4697 0 0 1-.026-.601zm-.97-.084a.435.435 0 0 1-.07.189.371.371 0 0 1-.167.145.656.656 0 0 1-.205.054.466.466 0 0 1-.175-.015.248.248 0 0 1-.122-.073.214.214 0 0 1-.055-.105.172.172 0 0 1 .057-.17.344.344 0 0 1 .105-.063 4.83 4.83 0 0 1 .288-.093c.118-.035.233-.079.344-.131.01.087.01.175 0 .262zm5.483-1.72a1.858 1.858 0 0 0-.577 0 1.33 1.33 0 0 0-.747.371 1.21 1.21 0 0 0-.383.798c-.02.185-.003.372.048.551.073.278.239.522.47.693.147.117.32.197.504.235.26.055.527.055.787 0 .184-.038.359-.118.507-.235.23-.17.3961-.415.4681-.693a1.42 1.42 0 0 0 .05-.55 1.208 1.208 0 0 0-.383-.799 1.33 1.33 0 0 0-.743-.37l-.001-.001zm.06 1.814a.388.388 0 0 1-.513.193.371.371 0 0 1-.194-.193.903.903 0 0 1-.072-.246 1.42 1.42 0 0 1 .012-.515.657.657 0 0 1 .1-.247.374.374 0 0 1 .622 0 .627.627 0 0 1 .105.247c.034.17.038.344.01.515a.885.885 0 0 1-.07.246z"
            fill="#A6A6A6"
          />
        </svg>

        <svg
          class="h-7 w-auto"
          viewBox="0 0 90 32"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path d="M5.628.42H0v5.63h5.628z" fill="#A6A6A6" />
          <path
            d="M5.488 29.743V9.473H.16v20.27zm35.412.2v-4.967c-.782 0-1.443-.04-1.923-.12-.561-.08-.982-.28-1.262-.56-.28-.281-.46-.682-.56-1.202-.081-.501-.121-1.162-.121-1.963v-7.09H40.9V9.474h-3.866V1.562h-5.348v19.609c0 1.662.14 3.064.42 4.186.281 1.102.762 2.003 1.423 2.684.66.68 1.542 1.162 2.604 1.462 1.081.3 2.443.44 4.066.44zm30.604-.2V0h-5.348v29.743zM26.54 11.457c-1.483-1.603-3.566-2.404-6.21-2.404-1.281 0-2.443.26-3.505.781a7.5 7.5 0 0 0-2.643 2.164l-.3.38V9.474H8.611v20.27h5.308V18.947v.74-.36c.06-1.903.521-3.305 1.402-4.206.942-.961 2.083-1.442 3.385-1.442 1.542 0 2.724.48 3.505 1.402.761.921 1.162 2.223 1.162 3.886v10.755h5.388V18.227c.02-2.885-.741-5.168-2.223-6.77m36.853 8.111c0-1.462-.26-2.824-.76-4.106a11 11 0 0 0-2.144-3.344c-.921-.962-2.023-1.703-3.305-2.244-1.282-.54-2.704-.8-4.246-.8-1.462 0-2.844.28-4.126.82-1.282.561-2.403 1.302-3.345 2.244a10.5 10.5 0 0 0-2.243 3.345c-.56 1.281-.821 2.663-.821 4.126 0 1.462.26 2.844.78 4.126a10.3 10.3 0 0 0 2.184 3.345c.921.94 2.063 1.702 3.385 2.243 1.322.56 2.784.841 4.346.841 4.527 0 7.331-2.063 9.013-3.986l-3.845-2.924c-.801.961-2.724 2.263-5.128 2.263-1.502 0-2.744-.34-3.685-1.041-.941-.681-1.582-1.643-1.923-2.824l-.06-.18h15.923zM47.51 17.707c0-1.482 1.703-4.066 5.368-4.086 3.665 0 5.388 2.584 5.388 4.066z"
            fill="#A6A6A6"
          />
          <path
            d="M77.594 27.1c-.1-.241-.24-.441-.421-.622a2 2 0 0 0-1.382-.58c-.28 0-.52.06-.761.16-.24.1-.44.24-.621.42a2 2 0 0 0-.58 1.382c0 .28.06.521.16.761s.24.441.42.621.38.32.62.42c.241.101.502.161.762.161.28 0 .52-.06.761-.16.24-.1.44-.24.621-.42a2 2 0 0 0 .58-1.382 2 2 0 0 0-.16-.762m-.32 1.401c-.081.2-.201.38-.341.521-.14.14-.32.26-.521.34-.2.08-.4.12-.641.12-.22 0-.44-.04-.641-.12-.2-.08-.38-.2-.52-.34s-.261-.32-.341-.52a1.7 1.7 0 0 1-.12-.642c0-.22.04-.44.12-.64s.2-.381.34-.521.32-.26.521-.34c.2-.081.4-.121.641-.121.22 0 .44.04.64.12.201.08.381.2.522.34.14.14.26.321.34.521s.12.401.12.641c.02.24-.04.441-.12.641m-1.123-.48c.16-.02.28-.08.381-.18s.16-.241.16-.441c0-.22-.06-.38-.2-.501-.12-.12-.34-.18-.6-.18h-.882v2.263h.42v-.921h.3l.562.921h.44zm-.22-.32h-.5v-.642h.5c.06 0 .12.02.18.04s.1.06.12.1.04.1.04.18a.4.4 0 0 1-.04.18c-.04.04-.08.081-.12.101-.06.02-.12.04-.18.04"
            fill="#A6A6A6"
          />
        </svg>

        <svg
          class="h-7 w-auto"
          viewBox="0 0 90 32"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M20.504 24.71c-1.113.196-2.246.255-3.418.411l-3.574-10.469V25.57c-1.114.117-2.13.274-3.184.43V6h2.969l4.062 11.348V6h3.145zm6.152-11.386c1.211 0 3.067-.058 4.18-.058v3.124c-1.387 0-3.008 0-4.18.06v4.648c1.836-.117 3.672-.274 5.528-.332v3.007l-8.653.684V6h8.653v3.125h-5.528zm17.149-4.199h-3.243V23.5c-1.054 0-2.109 0-3.124.039V9.125h-3.243V6h9.61zm5.078 3.984h4.277v3.125h-4.277v7.09h-3.067V6h8.73v3.125h-5.663zm10.742 7.48c1.777.04 3.574.177 5.312.274v3.086c-2.792-.176-5.585-.351-8.437-.41V6h3.125zm7.95 3.575c.995.059 2.05.117 3.066.234V6h-3.067zM84.331 6l-3.965 9.512L84.332 26c-1.172-.156-2.344-.371-3.516-.567l-2.246-5.78-2.285 5.312c-1.133-.195-2.227-.254-3.36-.41l4.024-9.16L73.316 6h3.36l2.05 5.254L80.914 6z"
            fill="#A6A6A6"
          />
        </svg>
      </div>
    </section>

    <!-- ===== SECTION 7: Hiking Kits ===== -->
    <section class="bg-white pt-8 pb-0 px-6 md:px-16 lg:px-24 xl:px-32 mb-0">
      <div
        class="relative overflow-hidden h-[350px] flex items-center justify-center text-center rounded-xl shadow-none"
      >
        <img
          src="image/bg3.jpg"
          alt="Hiking Kits"
          class="absolute inset-0 w-full h-full object-cover"
        />

        <div class="absolute inset-0 bg-black bg-opacity-40"></div>

        <div class="relative z-10 px-6 md:px-12 text-white">
          <p class="text-sm uppercase tracking-widest mb-3 opacity-90">
            Mountain selection
          </p>
          <h2 class="text-3xl md:text-4xl font-medium mb-4">
            We provide a variety of mountain options for your climb.
          </h2>
        </div>
      </div>

      <p
        class="mx-auto opacity-90 text-black leading-6 text-justify text-sm mt-3"
      >
        Your adventure starts here. Explore our carefully curated list of
        mountains and hiking trails. From beginner-friendly to challenges that
        require thorough preparation, we have the perfect climb for every skill
        level and passion. Click on your favorite mountain to see route details,
        difficulty level, and guide availability.
      </p>
    </section>

    

    <!-- ===== SECTION 7: list gunung ===== -->
    <section
      class="text-gray-600 body-font pt-0 pb-8 px-6 md:px-16 lg:px-24 xl:px-28"
    >
      <div class="container px-5 py-10 mx-auto">
        <ul class="text-sm py-1 text-right ml-8">
          <li class="font-normal px-1 py-2">
            <span
              class="cursor-pointer transition duration-300 hover:text-amber-950"
            >
              View All →
            </span>
          </li>
        </ul>

        <!-- apalah -->
        <div class="flex flex-wrap -m-4">
          <div class="lg:w-1/4 md:w-1/2 p-4 w-full group">
            <div class="block relative h-48 rounded-md overflow-hidden">
              <img
                alt="trip"
                class="object-cover object-center w-full h-full block group-hover:scale-105 transition-transform duration-300"
                src="image/gn1.jpg"
              />
              <div
                class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-0 group-hover:bg-opacity-50 transition duration-300"
              >
                <p
                  class="text-white text-lg transition duration-700 ease-in-out font-medium opacity-0 group-hover:opacity-100 translate-y-4 group-hover:translate-y-0"
                >
                  Explore Now
                </p>
              </div>
            </div>
            <div class="mt-4">
              <div class="flex items-center justify-between text-gray-600">
                <div class="flex items-center space-x-1">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-4 h-4"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                    />
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M19.5 10.5c0 7.5-7.5 11.25-7.5 11.25S4.5 18 4.5 10.5a7.5 7.5 0 1 1 15 0Z"
                    />
                  </svg>
                  <p class="text-xs">
                    Tibet,
                    <span class="font-semibold text-xs text-black">Nepal</span>
                  </p>
                </div>

                <div class="flex items-center space-x-1">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-4 h-4"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M12 6v6l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"
                    />
                  </svg>
                  <p class="text-xs text-right">
                    <span class="font-semibold text-black">45</span> days -
                    <span class="text-gray-500">
                      <span class="font-semibold text-black">60</span> days
                    </span>
                  </p>
                </div>
              </div>

              <div class="flex items-center justify-between mt-2">
                <h2 class="text-gray-900 title-font text-lg font-medium">
                  Mount Everest
                </h2>
                <p class="mt-1">$100.000</p>
              </div>
            </div>
          </div>

          <div class="lg:w-1/4 md:w-1/2 p-4 w-full group">
            <div class="block relative h-48 rounded-md overflow-hidden">
              <img
                alt="trip"
                class="object-cover object-center w-full h-full block group-hover:scale-105 transition-transform duration-300"
                src="image/gn2.jpg"
              />
              <div
                class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-0 group-hover:bg-opacity-50 transition duration-300"
              >
                <p
                  class="text-white text-lg transition duration-700 ease-in-out font-medium opacity-0 group-hover:opacity-100 translate-y-4 group-hover:translate-y-0"
                >
                  Explore Now
                </p>
              </div>
            </div>

            <div class="mt-4">
              <div class="flex items-center justify-between text-gray-600">
                <div class="flex items-center space-x-1">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-4 h-4"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                    />
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M19.5 10.5c0 7.5-7.5 11.25-7.5 11.25S4.5 18 4.5 10.5a7.5 7.5 0 1 1 15 0Z"
                    />
                  </svg>
                  <p class="text-xs">
                    Honshu,
                    <span class="font-semibold text-xs text-black">Jepang</span>
                  </p>
                </div>

                <div class="flex items-center space-x-1">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-4 h-4"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M12 6v6l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"
                    />
                  </svg>
                  <p class="text-xs text-right">
                    <span class="font-semibold text-black">1</span> days -
                    <span class="text-gray-500">
                      <span class="font-semibold text-black">2</span> days
                    </span>
                  </p>
                </div>
              </div>

              <div class="flex items-center justify-between mt-2">
                <h2 class="text-gray-900 title-font text-lg font-medium">
                  Mount Fuji
                </h2>
                <p class="mt-1">$1.203</p>
              </div>
            </div>
          </div>

          <div class="lg:w-1/4 md:w-1/2 p-4 w-full group">
            <div class="block relative h-48 rounded-md overflow-hidden">
              <img
                alt="trip"
                class="object-cover object-center w-full h-full block group-hover:scale-105 transition-transform duration-300"
                src="image/gn6.jpg"
              />
              <div
                class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-0 group-hover:bg-opacity-50 transition duration-300"
              >
                <p
                  class="text-white text-lg transition duration-700 ease-in-out font-medium opacity-0 group-hover:opacity-100 translate-y-4 group-hover:translate-y-0"
                >
                  Explore Now
                </p>
              </div>
            </div>

            <div class="mt-4">
              <div class="flex items-center justify-between text-gray-600">
                <div class="flex items-center space-x-1">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-4 h-4"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                    />
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M19.5 10.5c0 7.5-7.5 11.25-7.5 11.25S4.5 18 4.5 10.5a7.5 7.5 0 1 1 15 0Z"
                    />
                  </svg>
                  <p class="text-xs">
                    Himalaya,
                    <span class="font-semibold text-xs text-black">Nepal</span>
                  </p>
                </div>

                <div class="flex items-center space-x-1">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-4 h-4"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M12 6v6l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"
                    />
                  </svg>
                  <p class="text-xs text-right">
                    <span class="font-semibold text-black">8</span> days -
                    <span class="text-gray-500">
                      <span class="font-semibold text-black">14</span> days
                    </span>
                  </p>
                </div>
              </div>

              <div class="flex items-center justify-between mt-2">
                <h2 class="text-gray-900 title-font text-lg font-medium">
                  Mount Annapurna
                </h2>
                <p class="mt-1">$2.000</p>
              </div>
            </div>
          </div>

          <!-- apalah -->
          <div class="lg:w-1/4 md:w-1/2 p-4 w-full group">
            <div class="block relative h-48 rounded-md overflow-hidden">
              <img
                alt="trip"
                class="object-cover object-center w-full h-full block group-hover:scale-105 transition-transform duration-300"
                src="image/gn4.jpg"
              />
              <div
                class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-0 group-hover:bg-opacity-50 transition duration-300"
              >
                <p
                  class="text-white text-lg transition duration-700 ease-in-out font-medium opacity-0 group-hover:opacity-100 translate-y-4 group-hover:translate-y-0"
                >
                  Explore Now
                </p>
              </div>
            </div>
            <div class="mt-4">
              <div class="flex items-center justify-between text-gray-600">
                <div class="flex items-center space-x-1">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-4 h-4"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                    />
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M19.5 10.5c0 7.5-7.5 11.25-7.5 11.25S4.5 18 4.5 10.5a7.5 7.5 0 1 1 15 0Z"
                    />
                  </svg>
                  <p class="text-xs">
                    Tiongkok,
                    <span class="font-semibold text-xs text-black"
                      >Pakistan</span
                    >
                  </p>
                </div>

                <div class="flex items-center space-x-1">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-4 h-4"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M12 6v6l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"
                    />
                  </svg>
                  <p class="text-xs text-right">
                    <span class="font-semibold text-black">50</span> days -
                    <span class="text-gray-500">
                      <span class="font-semibold text-black">70</span> days
                    </span>
                  </p>
                </div>
              </div>

              <div class="flex items-center justify-between mt-2">
                <h2 class="text-gray-900 title-font text-lg font-medium">
                  Mount K2
                </h2>
                <p class="mt-1">$20.000</p>
              </div>
            </div>
          </div>

          <!-- apalah -->
          <div class="lg:w-1/4 md:w-1/2 p-4 w-full group">
            <div class="block relative h-48 rounded-md overflow-hidden">
              <img
                alt="trip"
                class="object-cover object-center w-full h-full block group-hover:scale-105 transition-transform duration-300"
                src="image/gn8.jpg"
              />
              <div
                class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-0 group-hover:bg-opacity-50 transition duration-300"
              >
                <p
                  class="text-white text-lg transition duration-700 ease-in-out font-medium opacity-0 group-hover:opacity-100 translate-y-4 group-hover:translate-y-0"
                >
                  Explore Now
                </p>
              </div>
            </div>
            <div class="mt-4">
              <div class="flex items-center justify-between text-gray-600">
                <div class="flex items-center space-x-1">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-4 h-4"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                    />
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M19.5 10.5c0 7.5-7.5 11.25-7.5 11.25S4.5 18 4.5 10.5a7.5 7.5 0 1 1 15 0Z"
                    />
                  </svg>
                  <p class="text-xs">
                    Swiss,
                    <span class="font-semibold text-xs text-black">Italia</span>
                  </p>
                </div>

                <div class="flex items-center space-x-1">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-4 h-4"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M12 6v6l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"
                    />
                  </svg>
                  <p class="text-xs text-right">
                    <span class="font-semibold text-black">1 </span> days -
                    <span class="text-gray-500">
                      <span class="font-semibold text-black">2</span> days
                    </span>
                  </p>
                </div>
              </div>

              <div class="flex items-center justify-between mt-2">
                <h2 class="text-gray-900 title-font text-lg font-medium">
                  Mount Matterhorn
                </h2>
                <p class="mt-1">$3.000</p>
              </div>
            </div>
          </div>

          <!-- apalah -->
          <div class="lg:w-1/4 md:w-1/2 p-4 w-full group">
            <div class="block relative h-48 rounded-md overflow-hidden">
              <img
                alt="trip"
                class="object-cover object-center w-full h-full block group-hover:scale-105 transition-transform duration-300"
                src="image/gn9.jpg"
              />
              <div
                class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-0 group-hover:bg-opacity-50 transition duration-300"
              >
                <p
                  class="text-white text-lg transition duration-700 ease-in-out font-medium opacity-0 group-hover:opacity-100 translate-y-4 group-hover:translate-y-0"
                >
                  Explore Now
                </p>
              </div>
            </div>
            <div class="mt-4">
              <div class="flex items-center justify-between text-gray-600">
                <div class="flex items-center space-x-1">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-4 h-4"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                    />
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M19.5 10.5c0 7.5-7.5 11.25-7.5 11.25S4.5 18 4.5 10.5a7.5 7.5 0 1 1 15 0Z"
                    />
                  </svg>
                  <p class="text-xs">
                    Jawa,
                    <span class="font-semibold text-xs text-black"
                      >Indonesia</span
                    >
                  </p>
                </div>

                <div class="flex items-center space-x-1">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-4 h-4"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M12 6v6l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"
                    />
                  </svg>
                  <p class="text-xs text-right">
                    <span class="font-semibold text-black">2</span> days
                    <span class="text-gray-500">
                      <span class="font-semibold text-black">1</span> Night
                    </span>
                  </p>
                </div>
              </div>

              <div class="flex items-center justify-between mt-2">
                <h2 class="text-gray-900 title-font text-lg font-medium">
                  Mount Sindoro
                </h2>
                <p class="mt-1">$48.18</p>
              </div>
            </div>
          </div>

          <!-- apalah -->
          <div class="lg:w-1/4 md:w-1/2 p-4 w-full group">
            <div class="block relative h-48 rounded-md overflow-hidden">
              <img
                alt="trip"
                class="object-cover object-center w-full h-full block group-hover:scale-105 transition-transform duration-300"
                src="image/gn5.jpg"
              />
              <div
                class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-0 group-hover:bg-opacity-50 transition duration-300"
              >
                <p
                  class="text-white text-lg transition duration-700 ease-in-out font-medium opacity-0 group-hover:opacity-100 translate-y-4 group-hover:translate-y-0"
                >
                  Explore Now
                </p>
              </div>
            </div>
            <div class="mt-4">
              <div class="flex items-center justify-between text-gray-600">
                <div class="flex items-center space-x-1">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-4 h-4"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                    />
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M19.5 10.5c0 7.5-7.5 11.25-7.5 11.25S4.5 18 4.5 10.5a7.5 7.5 0 1 1 15 0Z"
                    />
                  </svg>
                  <p class="text-xs">
                    Lombok,
                    <span class="font-semibold text-xs text-black"
                      >Indonesia</span
                    >
                  </p>
                </div>

                <div class="flex items-center space-x-1">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-4 h-4"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M12 6v6l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"
                    />
                  </svg>
                  <p class="text-xs text-right">
                    <span class="font-semibold text-black">2</span> days
                    <span class="text-gray-500">
                      <span class="font-semibold text-black">1</span> Night
                    </span>
                  </p>
                </div>
              </div>

              <div class="flex items-center justify-between mt-2">
                <h2 class="text-gray-900 title-font text-lg font-medium">
                  Mount Rinjani
                </h2>
                <p class="mt-1">$150.58</p>
              </div>
            </div>
          </div>

          <!-- apalah -->
          <div class="lg:w-1/4 md:w-1/2 p-4 w-full group">
            <div class="block relative h-48 rounded-md overflow-hidden">
              <img
                alt="trip"
                class="object-cover object-center w-full h-full block group-hover:scale-105 transition-transform duration-300"
                src="image/gn11.jpg"
              />
              <div
                class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-0 group-hover:bg-opacity-50 transition duration-300"
              >
                <p
                  class="text-white text-lg transition duration-700 ease-in-out font-medium opacity-0 group-hover:opacity-100 translate-y-4 group-hover:translate-y-0"
                >
                  Explore Now
                </p>
              </div>
            </div>
            <div class="mt-4">
              <div class="flex items-center justify-between text-gray-600">
                <div class="flex items-center space-x-1">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-4 h-4"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                    />
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M19.5 10.5c0 7.5-7.5 11.25-7.5 11.25S4.5 18 4.5 10.5a7.5 7.5 0 1 1 15 0Z"
                    />
                  </svg>
                  <p class="text-xs">
                    Papua,
                    <span class="font-semibold text-xs text-black"
                      >Indonesia</span
                    >
                  </p>
                </div>

                <div class="flex items-center space-x-1">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-4 h-4"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M12 6v6l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"
                    />
                  </svg>
                  <p class="text-xs text-right">
                    <span class="font-semibold text-black">10</span> days -
                    <span class="text-gray-500">
                      <span class="font-semibold text-black">17</span> days
                    </span>
                  </p>
                </div>
              </div>

              <div class="flex items-center justify-between mt-2">
                <h2 class="text-gray-900 title-font text-lg font-medium">
                  Mount Carstensz
                </h2>
                <p class="mt-1">$9.034</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== SECTION 6: pilihan menu hiking ===== -->
    <section class="bg-white py-5 px-6 md:px-16 lg:px-24 xl:px-32 mt-3 mb-20">
      <div class="max-w-7xl mx-auto">
        <a href="https://prebuiltui.com" class="mb-2 inline-block">
          <img
            src="image/logo.png"
            alt="Logo"
            class="h-6 w-auto object-contain"
          />
        </a>

        <div class="grid md:grid-cols-2 gap-12 mb-12">
          <div>
            <h2 class="leading-[1.8] text-3xl md:text-5xl font-semibold mb-10">
              We Provide Hiking Category You Can Enjoy
            </h2>
          </div>
          <div>
            <p class="text-black leading-6 max-w-4xl text-justify text-sm mb-8">
              Whether you're looking for a quick day hike, a multi-day
              backpacking expedition, a challenging long journey, or the trails
              of trail running, we provide expert guidance and support for every
              option. We believe everyone should have the opportunity to explore
              the beauty of nature at their own pace, and we strive to make
              every trip a safe and unforgettable experience.
            </p>
          </div>
        </div>

        <ul class="text-sm text-right ml-8">
          <li class="font-normal px-4 py-2">
            <span
              class="cursor-pointer transition duration-300 hover:text-amber-950"
            >
              View All →
            </span>
          </li>
        </ul>

        <div
          id="cardScroll"
          class="flex overflow-x-scroll no-scrollbar space-x-6 scroll-smooth cursor-grab active:cursor-grabbing select-none"
        >
          <!-- Card 1 -->
          <div class="group flex-shrink-0 w-[360px]">
            <div class="rounded-md relative overflow-hidden">
              <img
                src="image/ft15.jpg"
                alt="Camp Adventure"
                class="object-cover w-full h-[300px] group-hover:scale-105 transition-transform duration-300"
              />
              <div
                class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-0 group-hover:bg-opacity-50 transition duration-300"
              >
                <p
                  class="text-white text-2xl transition duration-700 ease-in-out font-medium opacity-0 group-hover:opacity-100 translate-y-4 group-hover:translate-y-0"
                >
                  Learn More
                </p>
              </div>
            </div>
            <h3 class="mt-4 text-2xl font-semibold text-left">Day Hikking</h3>
            <p class="text-gray-600 leading-6 text-justify text-xs mt-3">
              Enjoy an efficient round-trip hike (tektok), ideal for busy
              people. We'll guide you through beautiful, accessible trails,
              offering stunning views without the need for an overnight stay.
              Perfect for all skill levels.
            </p>
          </div>

          <!-- Card 2 -->
          <div class="group flex-shrink-0 w-[360px]">
            <div class="rounded-md relative overflow-hidden">
              <img
                src="image/ft7.jpg"
                alt="Mountain Adventure"
                class="object-cover w-full h-[300px] group-hover:scale-105 transition-transform duration-300"
              />
              <div
                class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-0 group-hover:bg-opacity-50 transition duration-300"
              >
                <p
                  class="text-white text-2xl transition duration-700 ease-in-out font-medium opacity-0 group-hover:opacity-100 translate-y-4 group-hover:translate-y-0"
                >
                  Learn More
                </p>
              </div>
            </div>
            <h3 class="mt-4 text-2xl font-semibold text-left">
              backpacking adventure
            </h3>
            <p class="text-gray-600 leading-6 text-justify text-xs mt-3">
              Experience a relaxed and well-planned overnight hike. We take care
              of logistics, equipment, and the best campsites. Climb safely on
              the first day, enjoy the tranquility of your tent, and descend the
              next.
            </p>
          </div>
          <!-- Card 3 -->
          <div class="group flex-shrink-0 w-[360px]">
            <div class="rounded-md relative overflow-hidden">
              <img
                src="image/ft1.jpg"
                alt="Mountain Adventure"
                class="object-cover w-full h-[300px] group-hover:scale-105 transition-transform duration-300"
              />
              <div
                class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-0 group-hover:bg-opacity-50 transition duration-300"
              >
                <p
                  class="text-white text-2xl transition duration-700 ease-in-out font-medium opacity-0 group-hover:opacity-100 translate-y-4 group-hover:translate-y-0"
                >
                  Learn More
                </p>
              </div>
            </div>
            <h3 class="mt-4 text-2xl font-semibold text-left">Long journey</h3>
            <p class="text-gray-600 leading-6 text-justify text-xs mt-3">
              Take on the challenge of a true multi-day trek. Our professional
              guide service is ready to guide you through long and challenging
              trails. Focus on your accomplishments, and let us take care of all
              the safety and logistical details of your epic journey.
            </p>
          </div>
          <!-- Card 4 -->
          <div class="group flex-shrink-0 w-[360px]">
            <div class="rounded-md relative overflow-hidden">
              <img
                src="image/ft14.jpg"
                alt="Mountain Adventure"
                class="object-cover w-full h-[300px] group-hover:scale-105 transition-transform duration-300"
              />
              <div
                class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-0 group-hover:bg-opacity-50 transition duration-300"
              >
                <p
                  class="text-white text-2xl transition duration-700 ease-in-out font-medium opacity-0 group-hover:opacity-100 translate-y-4 group-hover:translate-y-0"
                >
                  Learn More
                </p>
              </div>
            </div>
            <h3 class="mt-4 text-2xl font-semibold text-left">Trail Running</h3>
            <p class="text-gray-600 leading-6 text-justify text-xs mt-3">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum
              accusamus corrupti pariatur esse nihil eos dolores natus, possimus
              voluptas laborum magni, temporibus, magnam recusandae repellendus
              totam nisi labore enim ex!
            </p>
          </div>

          <!-- Card 5 -->
          <div class="group flex-shrink-0 w-[360px]">
            <div class="rounded-md relative overflow-hidden">
              <img
                src="image/ft4.jpg"
                alt="Forest Adventure"
                class="object-cover w-full h-[300px] group-hover:scale-105 transition-transform duration-300"
              />
              <div
                class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-0 group-hover:bg-opacity-50 transition duration-300"
              >
                <p
                  class="text-white text-2xl transition duration-700 ease-in-out font-medium opacity-0 group-hover:opacity-100 translate-y-4 group-hover:translate-y-0"
                >
                  Learn More
                </p>
              </div>
            </div>
            <h3 class="mt-4 text-2xl font-semibold text-left">Lorem ipsum</h3>
            <p class="text-gray-600 leading-6 text-justify text-xs mt-3">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Reiciendis incidunt, repudiandae earum quod nam asperiores maxime,
              beatae repellendus est nihil ut minima sit animi? Quisquam
              consequatur incidunt id quis excepturi.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== SECTION: Testimonial ===== -->
    <section
      class="bg-black text-white py-24 px-6 md:px-16 lg:px-24 xl:px-32 text-center"
    >
      <div class="max-w-4xl mx-auto">
        <a href="https://prebuiltui.com" class="mb-2 inline-block">
          <img
            src="image/ts.png"
            alt="Logo"
            class="h-6 w-auto object-contain"
          />
        </a>

        <h2 class="text-3xl md:text-5xl font-normal mb-6 text-white">
          What Our Community Says
        </h2>

        <p class="text-white leading-6 max-w-4xl text-sm mb-8">
          See what our community has to say about their experiences with
          Altitude trails. From unforgettable hikes to top-quality gear and
          expert guidance, these testimonials showcase the adventures and
          memories created with us.
        </p>

        <div
          class="testimonial bg-white rounded-2xl p-10 md:p-12 text-left shadow-xl"
        >
          <p class="text-2xl font-medium leading-snug mb-10 text-black">
            "Atitude made my first hiking experience unforgettable! The guides
            were knowledgeable and the scenery was breathtaking."
          </p>
          <div class="flex items-center space-x-4">
            <img
              src="image/ava.jpg"
              alt="Zxuuu"
              class="w-12 h-12 rounded-full object-cover border border-black"
            />
            <div>
              <h4 class="font-normal text-black">Zxuuu.</h4>
              <p class="text-xs text-slate-800 mt-0.5">Expert Hiker</p>
            </div>
          </div>
        </div>

        <div
          class="testimonial hidden bg-white rounded-2xl p-10 md:p-12 text-left shadow-xl"
        >
          <p class="text-2xl font-medium leading-snug mb-10 text-black">
            "Amazing service and stunning trails! I met incredible people and
            learned so much from the guides."
          </p>
          <div class="flex items-center space-x-4">
            <img
              src="image/ava2.jpg"
              alt="Alyssa"
              class="w-12 h-12 rounded-full object-cover border border-black"
            />
            <div>
              <h4 class="font-normal text-black">Alyssa.</h4>
              <p class="text-xs text-slate-800 mt-0.5">Mountain Explorer</p>
            </div>
          </div>
        </div>

        <div class="flex items-center justify-center mt-10 space-x-6">
          <button
            id="prevBtn"
            class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-gray-800 transition"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5 text-white"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="2"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M15 19l-7-7 7-7"
              />
            </svg>
          </button>

          <span id="pageIndicator" class="text-sm text-[#A6A6A6]">01/02</span>

          <button
            id="nextBtn"
            class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-gray-800 transition"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5 text-white"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="2"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M9 5l7 7-7 7"
              />
            </svg>
          </button>
        </div>
      </div>
    </section>

    <!-- ===== gambar ===== -->
    <section
      class="relative flex items-center justify-center h-[60vh] bg-cover bg-center bg-no-repeat"
      style="background-image: url('image/bg7.png')"
    >
      <div class="absolute inset-0 bg-black/40"></div>

      <div class="relative z-10 px-8 md:px-20 text-white text-center">
        <h1 class="text-5xl md:text-6xl font-medium leading-tight mb-4">
          So ready to start your adventure
        </h1>
        <p class="text-lg md:text-xl mb-8">
          Find your trail and secure your spot with our expert guides using the
          map below.
        </p>
      </div>
    </section>

    <!-- ===== SECTION 10: Pencarian ===== -->
    <section class="bg-white text-black py-24 px-10 md:px-24">
      <div class="max-w-6xl mx-auto">
        <h2 class="text-3xl md:text-5xl font-semibold mb-5 text-center">
          Find Your Starting Point
        </h2>
        <p class="text-gray-600 text-center mb-12">
          Use this map to find the location of the mountain, basecamp, or
          meeting point for your booking.
        </p>

        <div class="flex justify-center mb-10">
          <div
            class="flex items-center gap-2 pl-4 h-[46px] max-w-md w-full bg-white border border-gray-500/30 rounded-full overflow-hidden"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 30 30"
              fill="#6B7280"
              class="min-w-[24px]"
            >
              <path
                d="M13 3C7.489 3 3 7.489 3 13s4.489 10 10 10a9.95 9.95 0 0 0 6.322-2.264l5.971 5.971a1 1 0 1 0 1.414-1.414l-5.97-5.97A9.95 9.95 0 0 0 23 13c0-5.511-4.489-10-10-10m0 2c4.43 0 8 3.57 8 8s-3.57 8-8 8-8-3.57-8-8 3.57-8 8-8"
              />
            </svg>

            <input
              id="placeInput"
              type="text"
              placeholder="Masukkan nama gunung "
              class="flex-1 h-full px-4 bg-white text-sm text-gray-500 outline-none rounded-lg max-w-md mx-auto"
            />

            <button
              id="fetchBtn"
              type="submit"
              class="px-6 py-2 bg-black text-white text-sm rounded-full hover:bg-gray-800 transition mr-[5px]"
            >
              Cari Lokasi
            </button>
          </div>
        </div>

        <p id="statusMsg" class="text-center text-gray-500 mb-8"></p>

        <div
          class="grid grid-cols-1 md:grid-cols-3 gap-6 bg-white shadow-[0px_0px_7px_0px_rgba(8,_11,_14,_0.06)] rounded-lg overflow-hidden border border-gray-200"
        >
          <div class="md:col-span-2">
            <div id="map" class="w-full h-[200px]"></div>
          </div>

          <div class="md:col-span-1 p-6 bg-white">
            <h3 class="text-2xl font-semibold mb-4" id="info-label">
              Detail Lokasi
            </h3>

            <div class="space-y-3 text-sm">
              <div class="flex justify-between">
                <span class="text-gray-500">Latitude:</span>
                <span class="font-semibold text-black" id="info-lat">-</span>
              </div>
              <div class="flex justify-between">
                <span class="text-gray-500">Longitude:</span>
                <span class="font-semibold text-black" id="info-lon">-</span>
              </div>
              <hr class="my-3" />
              <div class="flex justify-between">
                <span class="text-gray-500">Negara:</span>
                <span class="font-semibold text-black" id="info-country"
                  >-</span
                >
              </div>
              <div class="flex justify-between">
                <span class="text-gray-500">Wilayah/Provinsi:</span>
                <span class="font-semibold text-black" id="info-region">-</span>
              </div>
              <div class="flex justify-between">
                <span class="text-gray-500">Timezone:</span>
                <span class="font-semibold text-black" id="info-timezone"
                  >-</span
                >
              </div>
            </div>

            <button
              id="info-book-btn"
              class="group mt-6 w-full bg-black text-white py-3 rounded-lg hover:bg-gray-300 hover:text-black transition font-semibold overflow-hidden relative"
              style="display: none"
            >
              <p class="relative h-6 overflow-hidden">
                <span
                  class="block transition-transform duration-300 group-hover:-translate-y-full"
                  >Booking Guide</span
                >
                <span
                  class="absolute w-full top-full left-1/2 -translate-x-1/2 block transition-transform duration-300 group-hover:-translate-y-full"
                  >Booking Guide</span
                >
              </p>
            </button>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer-->
    <footer class="bg-black text-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div
          class="py-10 flex flex-col lg:flex-row justify-between lg:items-center gap-6 border-b border-white"
        >
          <div class="lg:w-1/2 mt-10">
            <h2 class="text-3xl font-normal">Stay on the Trail!</h2>
            <p class="text-white mt-2 text-sm">
              Subscribe to our newsletter for the latest hiking tips, trail
              updates, and exclusive offers. Get inspired for your next
              adventure with us!
            </p>
          </div>
          <div class="lg:w-1/2 mt-2">
            <form class="flex flex-col mt-10 sm:flex-row gap-3">
              <input
                type="email"
                placeholder="Type your email"
                class="w-full sm:flex-grow px-5 py-3 text-xs rounded-full text-gray-900 placeholder-gray-500 focus:outline-none"
              />
              <button
                type="submit"
                class="bg-white text-black font-normal px-6 text-xs py-3 rounded-full hover:bg-gray-200 transition-colors"
              >
                Subscribe
              </button>
            </form>
          </div>
        </div>

        <div class="py-10">
          <div
            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 mb-10"
          >
            <div>
              <h3 class="text-xl font-normal text-white">Download our app</h3>
              <p class="text-white mt-3 text-justify text-xs">
                Adventure on the Go! Stay connected with nature, track your
                hiking progress, and discover new trails with the Thrillz app.
                Your next adventure is just a tap away!
              </p>
            </div>

            <div>
              <h3 class="text-lg font-normal text-white text-right">
                Our Product
              </h3>
              <ul class="mt-4 space-y-3 text-right">
                <li>
                  <a
                    href="#"
                    class="text-white font-normal hover:text-white text-sm transition-colors"
                    >Best Spot</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-white font-normal hover:text-white text-sm transition-colors"
                    >Hiking Guide</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-white font-normal hover:text-white text-sm transition-colors"
                    >Blog</a
                  >
                </li>
              </ul>
            </div>

            <div>
              <h3 class="text-lg font-normal text-white text-right">
                Navigation
              </h3>
              <ul class="mt-4 space-y-3 text-right">
                <li>
                  <a
                    href="#"
                    class="text-white font-normal hover:text-white text-sm transition-colors"
                    >About us</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-white font-normal hover:text-white text-sm transition-colors"
                    >Recommendation</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-white font-normal hover:text-white text-sm transition-colors"
                    >Categories</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-white font-normal hover:text-white text-sm transition-colors"
                    >Activities</a
                  >
                </li>
              </ul>
            </div>

            <div>
              <h3 class="text-lg font-normal text-white text-right">License</h3>
              <ul class="mt-4 space-y-3 text-right">
                <li>
                  <a
                    href="#"
                    class="text-white font-normal hover:text-white text-sm transition-colors"
                    >Privacy Policy</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-white font-normal hover:text-white text-sm transition-colors"
                    >Copyright</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-white font-normal hover:text-white text-sm transition-colors"
                    >FAQs</a
                  >
                </li>
              </ul>
            </div>

            <div>
              <h3 class="text-lg font-normal text-white text-right">
                Social Media
              </h3>
              <ul class="mt-4 space-y-3 text-right">
                <li>
                  <a
                    href="#"
                    class="text-white font-normal hover:text-white text-sm transition-colors"
                    >Instagram</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-white font-normal hover:text-white text-sm transition-colors"
                    >Facebook</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-white font-normal hover:text-white text-sm transition-colors"
                    >Twitter</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-white font-normal hover:text-white text-sm transition-colors"
                    >LinkedIn</a
                  >
                </li>
              </ul>
            </div>
          </div>

          <div
            class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 text-sm"
          >
            <div>
              <h3 class="text-2xl font-normal text-white">Contact Us</h3>
            </div>
            <div class="flex items-center gap-2 text-white">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="w-5 h-5 flex-shrink-0"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"
                />
              </svg>
              <span class="text-xs">(62) 233-4567-8910</span>
            </div>
            <div class="flex items-center gap-2 text-white">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="w-5 h-5 flex-shrink-0"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M21.75 9v.906a2.25 2.25 0 0 1-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 0 0 1.183 1.981l6.478 3.488m8.839 2.51-4.66-2.51m0 0-1.023-.55a2.25 2.25 0 0 0-2.134 0l-1.022.55m0 0-4.661 2.51m16.5 1.615a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V8.844a2.25 2.25 0 0 1 1.183-1.981l7.5-4.039a2.25 2.25 0 0 1 2.134 0l7.5 4.039a2.25 2.25 0 0 1 1.183 1.98V19.5Z"
                />
              </svg>
              <span class="text-xs">hello@AltitudeTrails.com</span>
            </div>
            <div class="flex items-start gap-2 text-white">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="w-5 h-5 flex-shrink-0 mt-0.5"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"
                />
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"
                />
              </svg>
              <span class="text-xs"
                >Sumbergempol, Tulungagung, Jawa Timur, Indonesia</span
              >
            </div>
          </div>
        </div>

        <div
          class="py-6 border-t border-white flex flex-col sm:flex-row justify-between items-center text-sm"
        >
          <span>
            <img src="image/logo2.png" width="120" height="74" class="h-6" />
          </span>

          <div class="text-white text-center text-xs sm:text-right">
            © 2025 AltitudeTrails | All rights reserved | Rediscover the great
            outdoors with us | Created by Jopjop
          </div>
        </div>
      </div>
    </footer>
  </body>

  <!-- Style punya 6-->
  <style>
    .no-scrollbar::-webkit-scrollbar {
      display: none;
    }
    .no-scrollbar {
      -ms-overflow-style: none;
      scrollbar-width: none;
    }
  </style>

  <script src="script.js"></script>
</html>

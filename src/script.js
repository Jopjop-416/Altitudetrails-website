// --1
const moreButton = document.getElementById("moreButton");
const flyoutMenu = document.getElementById("flyoutMenu");

moreButton.addEventListener("mouseenter", () => {
  flyoutMenu.classList.remove("hidden");
});

moreButton.addEventListener("mouseleave", (e) => {
  setTimeout(() => {
    if (!flyoutMenu.matches(":hover")) {
      flyoutMenu.classList.add("hidden");
    }
  }, 150);
});

flyoutMenu.addEventListener("mouseleave", () => {
  flyoutMenu.classList.add("hidden");
});

// --2
const menu = document.getElementById("menu");
const closeMenu = document.getElementById("close-menu");
const openMenu = document.getElementById("open-menu");

openMenu.addEventListener("click", () => {
  menu.classList.remove("max-md:-left-full");
  menu.classList.add("max-md:left-0");
});

function closeNavbar() {
  menu.classList.remove("max-md:left-0");
  menu.classList.add("max-md:-left-full");
}

closeMenu.addEventListener("click", () => {
  closeNavbar();
});

// --- script  scrol ---
const scrollContainer = document.getElementById("cardScroll");

let isDown = false;
let startX;
let scrollLeft;

function initDragScroll() {
  if (scrollContainer) {
    scrollContainer.addEventListener("mousedown", (e) => {
      isDown = true;
      scrollContainer.classList.add("active");
      startX = e.pageX - scrollContainer.offsetLeft;
      scrollLeft = scrollContainer.scrollLeft;
    });

    scrollContainer.addEventListener("mouseleave", () => {
      isDown = false;
      scrollContainer.classList.remove("active");
    });

    scrollContainer.addEventListener("mouseup", () => {
      isDown = false;
      scrollContainer.classList.remove("active");
    });

    scrollContainer.addEventListener("mousemove", (e) => {
      if (!isDown) return;
      e.preventDefault();
      const x = e.pageX - scrollContainer.offsetLeft;
      const walk = (x - startX) * 1.5;
      scrollContainer.scrollLeft = scrollLeft - walk;
    });
  }
}

// --- script API sama Peta ---

document.addEventListener("DOMContentLoaded", () => {
  initDragScroll();

  const apiKey = "23b6e9c1d73ba55bb2ba3c3ab4742116";

  const baseUrl = "http://api.positionstack.com/v1/forward";

  const placeInput = document.getElementById("placeInput");
  const fetchButton = document.getElementById("fetchBtn");
  const statusMsg = document.getElementById("statusMsg");

  const infoLabel = document.getElementById("info-label");
  const infoLat = document.getElementById("info-lat");
  const infoLon = document.getElementById("info-lon");
  const infoCountry = document.getElementById("info-country");
  const infoRegion = document.getElementById("info-region");
  const infoTimezone = document.getElementById("info-timezone");
  const infoBookBtn = document.getElementById("info-book-btn");

  const map = L.map("map").setView([-7.942, 112.953], 10);

  L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
    attribution:
      '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
  }).addTo(map);

  const marker = L.marker([0, 0], { opacity: 0 }).addTo(map);

  if (fetchButton && placeInput) {
    fetchButton.addEventListener("click", fetchGeocodeData);

    placeInput.addEventListener("keyup", (event) => {
      if (event.key === "Enter") fetchGeocodeData();
    });
  }

  async function fetchGeocodeData() {
    const placeQuery = placeInput.value.trim();
    if (!placeQuery) {
      statusMsg.textContent = "Mohon masukkan nama gunung atau lokasi.";
      return;
    }
    statusMsg.textContent = `Mencari lokasi untuk "${placeQuery}"... 🌍`;
    resetInfoPanel();

    const apiUrl = `${baseUrl}?access_key=${apiKey}&query=${encodeURIComponent(
      placeQuery
    )}&limit=1&output=json&country_module=1&sun_module=0&timezone_module=1`;

    try {
      const response = await fetch(apiUrl);
      if (!response.ok)
        throw new Error(`HTTP error! Status: ${response.status}`);

      const data = await response.json();

      if (data.data && data.data.length > 0) {
        const result = data.data[0];
        statusMsg.textContent = `Lokasi ditemukan: ${result.label}`;
        displayGeocodeResult(result);
      } else {
        statusMsg.textContent = `Lokasi untuk "${placeQuery}" tidak ditemukan.`;
        marker.setOpacity(0);
      }
    } catch (error) {
      console.error("Error fetching data:", error);
      statusMsg.textContent = `Pencarian gagal. Error: ${error.message}.`;
    }
  }

  function displayGeocodeResult(result) {
    const lat = result.latitude;
    const lon = result.longitude;

    map.setView([lat, lon], 13);
    marker.setLatLng([lat, lon]).setOpacity(1);

    infoLabel.textContent = result.name || "Lokasi Terpilih";
    infoLat.textContent = lat.toFixed(6);
    infoLon.textContent = lon.toFixed(6);

    infoCountry.textContent = result.country || "N/A";
    infoRegion.textContent = result.region || "N/A";

    if (result.timezone_module) {
      infoTimezone.textContent = result.timezone_module.offset_string || "N/A";
    }

    infoBookBtn.style.display = "block";
    infoBookBtn.onclick = () => {
      alert(`Anda akan memesan guide untuk: ${result.name}`);
    };
  }

  function resetInfoPanel() {
    infoLabel.textContent = "Detail Lokasi";
    infoLat.textContent = "-";
    infoLon.textContent = "-";
    infoCountry.textContent = "-";
    infoRegion.textContent = "-";
    infoTimezone.textContent = "-";
    infoBookBtn.style.display = "none";
  }
});

const testimonials = document.querySelectorAll(".testimonial");
const prevBtn = document.getElementById("prevBtn");
const nextBtn = document.getElementById("nextBtn");
const indicator = document.getElementById("pageIndicator");
let current = 0;

function showTestimonial(index) {
  testimonials.forEach((t, i) => {
    t.classList.toggle("hidden", i !== index);
  });
  indicator.textContent = `${String(index + 1).padStart(2, "0")}/${String(
    testimonials.length
  ).padStart(2, "0")}`;
}

nextBtn.addEventListener("click", () => {
  current = (current + 1) % testimonials.length;
  showTestimonial(current);
});

prevBtn.addEventListener("click", () => {
  current = (current - 1 + testimonials.length) % testimonials.length;
  showTestimonial(current);
});

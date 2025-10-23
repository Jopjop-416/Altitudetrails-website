
async function ambilBuku() {
  try {
 
    const url = `https://www.googleapis.com/books/v1/volumes?q=resep+masakan&maxResults=40`;
    const respons = await fetch(url); // melakukan request GET

   
    if (!respons.ok) {
      throw new Error(`HTTP error! Status: ${respons.status}`);
    }

   
    const data = await respons.json();

   
    $('#buku-container').empty();


    if (!data.items || data.items.length === 0) {
      $('#buku-container').html(`<p class="text-red-600 font-semibold">Tidak ada data ditemukan.</p>`);
      return;
    }


    const $grid = $(`<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6"></div>`);


    $.each(data.items, function (_idx, buku) {
      const info = buku.volumeInfo;
      const judul = info.title || 'Tanpa Judul';
      const penulis = info.authors ? info.authors.join(', ') : 'Tidak diketahui';
      const gambar = info.imageLinks ? info.imageLinks.thumbnail : 'https://via.placeholder.com/128x180?text=No+Cover';
      const link = info.previewLink || '#';

      const $card = $(`
        <div class="bg-white rounded-xl shadow-md hover:shadow-2xl transition-all transform hover:-translate-y-1 flex flex-col items-center text-center p-5">
          <img src="${gambar}" alt="Cover ${judul}"
            class="w-32 h-48 object-cover rounded mb-4 shadow-md border border-gray-200">
          <h3 class="text-lg font-semibold text-gray-800 mb-1">${judul}</h3>
          <p class="text-sm text-gray-600 mb-3">${penulis}</p>
          <a href="${link}" target="_blank"
            class="mt-auto bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition">
            Lihat Buku
          </a>
        </div>
      `);

      $grid.append($card);
    });

    $('#buku-container').append($grid);

  } catch (error) {
    console.error('Gagal fetch data:', error);
    $('#buku-container').html(`<p class="text-red-600 font-semibold">❌ Gagal memuat data buku.</p>`);
  }
}

$(document).ready(() => {
  ambilBuku();
});

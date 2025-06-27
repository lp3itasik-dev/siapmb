<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col md:flex-row justify-between items-center gap-5">
            <h2 class="font-bold text-xl text-gray-800 leading-tight">
                {{ __('Informasi Sinkronisasi') }}
            </h2>
        </div>
    </x-slot>
    <div class="space-y-5 text-gray-700">
      <p>Beberapa hal yang harus diketahui tentang fitur dari Sinkronisasi ini.</p>
      <ul class="space-y-4">
        <li class="space-y-1">
          <span class="font-bold text-lg">Spreadsheet Database Bikin Baru, Saya Harus Gimana?</span>
          <p class="text-sm leading-6">Silahkan untuk menghubungi Programmer di divisi IT untuk mengubah URL Spreadsheet yang lama menjadi yang baru, biasanya ini dilakukan 1 tahun sekali setiap bulan Oktober ketika pergantian PMB.<br/>Silahkan buka file di <code class="bg-gray-200">views/pages/database/modal/sync.blade.php</code><br/>Cari variabel <code class="bg-sky-200">const macro =</code><br/>Silahkan untuk mengubah value dari variabel macro menjadi URL terbaru.<br/>Contohnya kita akan mengubah <code class="bg-red-200">AKfycbx0TyUKAqB7ckgyLX_l-cfXQJD8JhxnopnD3GUjFc8Rp_5SN7N_FRXnyzBTU7uP8mE5</code> menjadi <code class="bg-emerald-200">1I7gd6-524JnsP7V_rALvGdV3FJGG9XLZ_MnHSnGAxW8</code>. <br/>Dari mana URL terbaru ini? nah itu diambil dari URL Spreadsheet yang baru  yaitu contohnya <code class="bg-gray-200">https://docs.google.com/spreadsheets/d/<code class="underline">1I7gd6-524JnsP7V_rALvGdV3FJGG9XLZ_MnHSnGAxW8</code>/edit</code><br/>Jadi hasil akhirnya akan menjadi <code class="bg-emerald-200">const macro = '1I7gd6-524JnsP7V_rALvGdV3FJGG9XLZ_MnHSnGAxW8';</code></p>
        </li>
      </ul>
    </div>
</x-app-layout>

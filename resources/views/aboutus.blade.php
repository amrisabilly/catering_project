<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us</title>
  <link rel="icon" type="image/png" href="{{ asset('img/logocatering.png') }}">
  @vite('resources/css/app.css')
</head>

<body class="w-full h-screen bg-[#FFFADD] overflow-x-hidden font-inter relative">
    <!-- Navbar -->
    @include('components.navbar')
  <!-- Kontainer Utama -->
  <div class="flex h-full">
    
    <!-- Kiri: Konten Teks -->
    <div class="w-1/2 p-16  flex flex-col justify-start mt-[-100px]">
      <img src="img/aboutus/tekscatering.png" alt="teks-catering" class="w-[260px] mb-2" />
      <p class="font-semibold text-[16px] mb-4 mt-[-100px]">
        Short Story – <span class="italic">Dari Dapur Kecil Menuju Kepercayaan Besar</span>
      </p>
      <div class="text-justify text-[#3F3F3F] text-[13px] space-y-3 leading-relaxed pr-6">
        <p>
          Bermula dari kasih sayang seorang ibu yang ingin memberikan makanan terbaik untuk anak-anaknya, Rumah Catering Ibu Endah lahir dari sebuah dapur sederhana pada tahun 2014. Awalnya, Ibu Endah hanya memasak bekal makan siang untuk anak-anaknya yang dibawa ke sekolah. Dengan penuh perhatian, ia memilih bahan-bahan terbaik, memastikan cita rasa yang lezat dan kandungan gizi yang seimbang dalam setiap hidangan yang dibuatnya.
        </p>
        <p>
          Tanpa disangka, teman-teman anak-anak Ibu Endah mulai tertarik untuk mencicipi bekal tersebut. Aroma harum dan tampilan menggugah selera membuat mereka penasaran. Setelah mencicipi, mereka pun jatuh hati pada kelezatan masakan Ibu Endah. Keceriaan anak-anak saat menikmati makanan ini berlanjut dengan permintaan mereka kepada orang tua masing-masing untuk memesan bekal serupa.
        </p>
        <p>
          Dari situlah, Rumah Catering Ibu Endah mulai berkembang. Awalnya hanya menerima pesanan kecil dari orang tua murid, namun seiring waktu, reputasi masakan Ibu Endah semakin tersebar dari mulut ke mulut. Kualitas rasa yang autentik, kebersihan yang terjaga, serta pelayanan yang ramah membuat usaha ini semakin dipercaya oleh banyak orang.
        </p>
        <p>
          Kini, Rumah Catering Ibu Endah telah menjadi pilihan utama bagi banyak keluarga siswa, instansi, dan acara spesial. Dengan menu yang beragam, mulai dari masakan rumahan khas Indonesia hingga sajian modern yang menggugah selera, kami selalu berkomitmen untuk menghadirkan hidangan terbaik dengan cita rasa khas yang selalu mengundang rindu.
        </p>
        <p>
          Dari dapur kecil yang penuh cinta, Rumah Catering Ibu Endah terus tumbuh dan berkembang, menghadirkan kebahagiaan dalam setiap suapan. Karena bagi kami, makanan bukan sekadar hidangan, tetapi juga cerita, kehangatan, dan kasih sayang yang tersaji dalam setiap rantangnya. Dengan komitmen untuk selalu menghadirkan makanan berkualitas terbaik, kami percaya bahwa anak-anak akan tetap setia menikmati masakan kami dan tidak berpindah ke tempat lain.
        </p>
      </div>
    </div>

    <!-- Kanan: Area Gambar -->
    <div class="w-1/2 bg-cover bg-no-repeat bg-bottom flex items-end justify-center" style="background-image: url('img/aboutus/gelombang.png');">
    <div class="mb-10 text-white text-center">
        <img src="img/aboutus/profile.png" alt="tim-rumah-catering" class="w-[500px] h-auto drop-shadow-lg mb-[-40px] pl-16" />
    </div>
    </div>

  </div>
</body>

</html>

<!DOCTYPE HTML>
<html lang="id">

<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>Toko Roti</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Toko Roti Mama Azzam</h1>
        
        <nav>
            <ul>
                <li><a href="#home" onclick="showSection('home')">Home</a></li>
                <li><a href="#menu" onclick="showSection('menu')">Menu Roti</a></li>
                <li><a href="#lainnya" onclick="showSection('lainnya')">Tentang Kami</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
    <section id="home" class="active">
        <h2>HOME</h2>
        <p> Selamat datang di Toko Roti Mama Azzam! Di sini, kami tidak hanya menjual roti; 
            kami menyajikan cinta dalam setiap adonan. Setiap roti kami dibuat dengan perhatian dan dedikasi, 
            menggunakan bahan-bahan berkualitas terbaik. Kami percaya bahwa roti yang lezat dapat membuat hari Anda 
            lebih istimewa. Dari roti manis yang menggugah selera hingga roti gurih yang hangat, setiap gigitan adalah 
            pengalaman yang memanjakan lidah.</p>
        <br/> 
        <p> Yang lebih spesial, semua roti kami dibuat di rumah dengan resep rahasia 
            yang telah diwariskan. Roti rumahan kami menawarkan rasa bintang lima, memberikan 
            kualitas dan kehangatan yang sulit ditandingi. Dengan menggunakan teknik tradisional 
            dan sentuhan modern, kami menciptakan roti yang tidak hanya enak, tetapi juga penuh 
            dengan cinta. Rasakan kelezatan dan kelembutan setiap roti yang keluar dari dapur 
            kami. Bergabunglah dengan kami dan nikmati kelezatan yang tak terlupakan. Pesan 
            sekarang dan biarkan kami membawa kebahagiaan ke meja Anda!
        </p>
        </blockquote>
    </section>

    <section id="menu">
        <h2>MENU</h2>
        <div class="container">
            <div class="card" onclick="openModal('Roti', 'Rp 500,000', 'Azzam.jpeg', 'page/formorder1.php')">
                <img alt="Roti0" height="200" src="Azzam.jpeg" width="200"/>
                <h3>Roti</h3>
                <p>Mulai dari Rp 500,000</p>
            </div>
            <div class="card" onclick="openModal('Roti 1', 'Rp 350,000', 'Azzam.jpeg', 'page/formorder1.php?product=Roti%201')">
                <img alt="Roti1" height="200" src="Azzam.jpeg" width="200"/>
                <h3>Roti 1</h3>
                <p>Mulai dari Rp 350,000</p>
            </div>
            <div class="card" onclick="openModal('Roti 2', 'Rp 200,000', 'Azzam.jpeg', 'page/formorder1.php?product=Roti%201')">
                <img alt="Roti2" height="200" src="Azzam.jpeg" width="200"/>
                <h3>Roti 2</h3>
                <p>Mulai dari Rp 200,000</p>
            </div>
            <div class="card" onclick="openModal('Roti 3', 'Rp 150,000', 'Azzam.jpeg', 'page/formorder1.php?product=Roti%201')">
                <img alt="roti3" height="200" src="Azzam.jpeg" width="200"/>
                <h3>Roti 3</h3>
                <p>Mulai dari Rp 150,000</p>
            </div>
            <div class="card" onclick="openModal('Roti 4', 'Rp 500,000', 'Azzam.jpeg', 'page/formorder1.php?product=Roti%201')">
                <img alt="roti4" height="200" src="Azzam.jpeg" width="200"/>
                <h3>Roti 4</h3>
                <p>Mulai dari Rp 500,000</p>
            </div>
            <div class="card" onclick="openModal('Roti 5', 'Rp 300,000', 'Azzam.jpeg', 'page/formorder1.php?product=Roti%201')">
                <img alt="roti5" height="200" src="Azzam.jpeg" width="200"/>
                <h3>Roti 5</h3>
                <p>Mulai dari Rp 300,000</p>
            </div>
        </div>
    </section>
    

    <section id="lainnya">
        <h2>TENTANG KAMI</h2>
        <p> Selamat datang di Toko Roti Mama Azzam! Kami sangat senang dapat menjadi bagian dari momen istimewa dalam hidup Anda.
            Di Toko Roti Mama Azzam, kami menawarkan berbagai macam roti yang tidak hanya lezat tetapi juga dibuat dengan cinta 
            dan perhatian. Namun, kami ingin memberitahukan Anda bahwa toko ini hanya melayani pemesanan secara preorder.</p><br/>
        <p>Kami memahami bahwa setiap acara, seperti pengajian, ulang tahun, atau perayaan lainnya, memerlukan persiapan yang matang. 
            Oleh karena itu, untuk memastikan kualitas dan kesegaran roti yang kami sajikan, kami meminta Anda untuk melakukan 
            pemesanan minimal 5 hari sebelum acara. Dengan cara ini, kami dapat menyiapkan setiap roti sesuai dengan kebutuhan dan 
            preferensi Anda, sehingga dapat memberikan pengalaman terbaik bagi Anda dan tamu Anda.</p><br/>
        <p>Dengan layanan preorder ini, Anda dapat memilih dari berbagai jenis roti yang kami tawarkan. Apakah Anda ingin roti manis
            yang menggugah selera atau roti gurih yang lezat? Kami siap memenuhi permintaan Anda dengan berbagai variasi yang pasti 
            akan memuaskan lidah semua orang yang hadir. Setiap roti yang kami buat adalah hasil dari bahan berkualitas dan teknik 
            yang telah kami kembangkan selama bertahun-tahun.</p><br/>
        <p>Kami sangat menghargai setiap pemesanan yang masuk dan berkomitmen untuk memberikan pelayanan terbaik. Tim kami akan siap 
            membantu Anda dalam memilih roti yang tepat untuk acara Anda. Jangan ragu untuk menghubungi kami untuk melakukan pemesanan 
            atau untuk mendapatkan informasi lebih lanjut mengenai menu yang kami tawarkan.</p><br/>
        <p>Terima kasih telah mempercayakan momen spesial Anda kepada Toko Roti Mama Azzam. Kami berharap dapat menyajikan roti 
            terbaik untuk acara Anda dan menjadikan hari istimewa Anda semakin berkesan!</p>
        </div>
    </section>
    </main>   

    <script>
        function showSection(sectionId) {
            var sections = document.querySelectorAll('section');
            sections.forEach(function (section) {
                section.classList.remove('active');
            });
            document.getElementById(sectionId).classList.add('active');
        }
    </script>
    
    <div id="orderModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <img id="modalImage" src="" alt="Roti" />
            <h3 id="modalTitle"></h3>
            <p id="modalPrice"></p>
            <a id="modalOrderLink" href="#" target="_blank"><button>Pesan Sekarang</button></a>
        </div>
    </div>
    
    <script>
        function openModal(title, price, imageSrc, orderLink) {
        document.getElementById("modalTitle").innerText = title;
        document.getElementById("modalPrice").innerText = price;
        document.getElementById("modalImage").src = imageSrc;
        document.getElementById("modalOrderLink").href = orderLink;
        document.getElementById("orderModal").style.display = "block";
    }

    
        function closeModal() {
            document.getElementById("orderModal").style.display = "none";
        }
    
        window.onclick = function(event) {
            const modal = document.getElementById("orderModal");
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

    <footer>
        <div class="social-icons">
            <a href="https://www.google.com/maps/place/Toko+Roti+Mama+Azzam/LOCATION_ID" target="_blank">
                <i class="fas fa-map-marker-alt"></i>
            </a>
         </div>
    </footer>

</body>
</html>

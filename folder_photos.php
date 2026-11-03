<!-- CARDS SECTION COMPONENT (BOOTSTRAP 5) -->
<section id="sezione_catalogo" class="cards-section py-5 my-5">
  <div class="container">
    
    <!-- Intestazione della Sezione: Titolo a Sinistra, Link a Destra -->
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h2 class="h3 m-0 text-light fw-light">Selezione di momenti</h2>
      <a href="foto.php" class="btn btn-outline-light btn-sm rounded-pill px-3">
        Altre foto &rarr;
      </a>
    </div>

    <!-- Prima Riga di Card -->
    <div class="cards-wrapper mb-4">
      
      <!-- Card 1: Espressioni -->
      <div class="card-item">
        <a href="./imgs/01.jpg" target="_blank" rel="noopener noreferrer" class="card-link">
          <img src="./imgs/01.jpg" alt="Mountain landscape with river" loading="lazy" class="card-img" />
          <div class="card-overlay">
            <h3 class="card-title">Espressioni</h3>
            <p class="card-desc"></p>
          </div>
        </a>
      </div>

      <!-- Card 2: Forest Lights -->
      <div class="card-item">
        <a href="./imgs/02.jpg" target="_blank" rel="noopener noreferrer" class="card-link">
          <img src="./imgs/02.jpg" alt="A vivid display of the aurora borealis." loading="lazy" class="card-img" />
          <div class="card-overlay">
            <h3 class="card-title">Forest Lights</h3>
            <p class="card-desc"></p>
          </div>
        </a>
      </div>

      <!-- Card 3: Nature Walk -->
      <div class="card-item">
        <a href="./imgs/03.jpg" target="_blank" rel="noopener noreferrer" class="card-link">
          <img src="./imgs/03.jpg" alt="Person walking in nature" loading="lazy" class="card-img" />
          <div class="card-overlay">
            <h3 class="card-title">Nature Walk</h3>
            <p class="card-desc"></p>
          </div>
        </a>
      </div>

      <!-- Card 4: Mountain View -->
      <div class="card-item">
        <a href="https://picsum.photos/id/1045/800/600" target="_blank" rel="noopener noreferrer" class="card-link">
          <img src="https://picsum.photos/id/1045/800/600" alt="City skyline at night" loading="lazy" class="card-img" />
          <div class="card-overlay">
            <h3 class="card-title">Mountain View</h3>
            <p class="card-desc"></p>
          </div>
        </a>
      </div>

      <!-- Card 5: Sunset -->
      <div class="card-item">
        <a href="https://picsum.photos/id/1055/800/600" target="_blank" rel="noopener noreferrer" class="card-link">
          <img src="https://picsum.photos/id/1055/800/600" alt="Beautiful sunset over horizon" loading="lazy" class="card-img" />
          <div class="card-overlay">
            <h3 class="card-title">Golden Sunset</h3>
            <p class="card-desc"></p>
          </div>
        </a>
      </div>

    </div>

    <!-- Seconda Riga di Card -->
    <div class="cards-wrapper">
      
      <!-- Card 1: Cliff Coast -->
      <div class="card-item">
        <a href="./imgs/01.jpg" target="_blank" rel="noopener noreferrer" class="card-link">
          <img src="./imgs/01.jpg" alt="Mountain landscape with river" loading="lazy" class="card-img" />
          <div class="card-overlay">
            <h3 class="card-title">Cliff Coast</h3>
            <p class="card-desc"></p>
          </div>
        </a>
      </div>

      <!-- Card 2: Forest Lights -->
      <div class="card-item">
        <a href="https://picsum.photos/id/1022/800/600" target="_blank" rel="noopener noreferrer" class="card-link">
          <img src="https://picsum.photos/id/1022/800/600" alt="A vivid display of the aurora borealis." loading="lazy" class="card-img" />
          <div class="card-overlay">
            <h3 class="card-title">Forest Lights</h3>
            <p class="card-desc"></p>
          </div>
        </a>
      </div>

      <!-- Card 3: Nature Walk -->
      <div class="card-item">
        <a href="https://picsum.photos/id/1035/800/600" target="_blank" rel="noopener noreferrer" class="card-link">
          <img src="https://picsum.photos/id/1035/800/600" alt="Person walking in nature" loading="lazy" class="card-img" />
          <div class="card-overlay">
            <h3 class="card-title">Nature Walk</h3>
            <p class="card-desc"></p>
          </div>
        </a>
      </div>

      <!-- Card 4: Mountain View -->
      <div class="card-item">
        <a href="https://picsum.photos/id/1045/800/600" target="_blank" rel="noopener noreferrer" class="card-link">
          <img src="https://picsum.photos/id/1045/800/600" alt="City skyline at night" loading="lazy" class="card-img" />
          <div class="card-overlay">
            <h3 class="card-title">Mountain View</h3>
            <p class="card-desc"></p>
          </div>
        </a>
      </div>

      <!-- Card 5: Sunset -->
      <div class="card-item">
        <a href="https://picsum.photos/id/1055/800/600" target="_blank" rel="noopener noreferrer" class="card-link">
          <img src="https://picsum.photos/id/1055/800/600" alt="Beautiful sunset over horizon" loading="lazy" class="card-img" />
          <div class="card-overlay">
            <h3 class="card-title">Golden Sunset</h3>
            <p class="card-desc"></p>
          </div>
        </a>
      </div>

    </div>

    <!-- Bottone Esplora in Basso -->
    <div class="text-center mt-5">
      <a id="esplora" href="foto.php" class="btn btn-outline-light rounded-pill px-4 py-2">
        Esplora
      </a>
    </div>

  </div>
</section>

<!-- SCRIPT LIGHTBOX E MODALE FOTO -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    // 1. Modale minimale a tutto schermo
    const modalHTML = `
        <div id="albumLightboxModal" style="display:none; position:fixed; z-index:9999; top:0; left:0; width:100%; height:100%; background-color:rgba(0,0,0,0.96); justify-content:center; align-items:center; flex-direction:column; box-sizing:border-box; padding:20px;">
            
            <button id="closeAlbumLightbox" style="position:absolute; top:20px; right:30px; background:transparent; border:none; color:rgba(255,255,255,0.7); font-size:2.8rem; cursor:pointer; z-index:10000; line-height:1; transition:color 0.2s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='rgba(255,255,255,0.7)'">&times;</button>
            
            <div style="position:relative; width:100%; height:88vh; display:flex; justify-content:center; align-items:center;">
                <img id="albumMainImg" src="" alt="" style="max-width:92vw; max-height:86vh; object-fit:contain; border-radius:6px; box-shadow:0 15px 50px rgba(0,0,0,0.9); transition:opacity 0.2s ease;" />
            </div>

            <div id="thumbnailsContainer" style="position:absolute; bottom:20px; left:50%; transform:translateX(-50%); display:flex; gap:10px; background:rgba(0,0,0,0.45); padding:8px 14px; border-radius:35px; backdrop-filter:blur(8px); border:1px solid rgba(255,255,255,0.08); z-index:10001; align-items:center;">
            </div>

        </div>
    `;
    document.body.insertAdjacentHTML('beforeend', modalHTML);

    const modal = document.getElementById("albumLightboxModal");
    const mainImg = document.getElementById("albumMainImg");
    const thumbnailsContainer = document.getElementById("thumbnailsContainer");
    const closeBtn = document.getElementById("closeAlbumLightbox");

    let currentAlbum = [];
    let currentIndex = 0;

    // 2. Click sulle card della sezione catalogo
    const cardLinks = document.querySelectorAll(".card-link");
    cardLinks.forEach(link => {
        link.addEventListener("click", function(e) {
            e.preventDefault();

            const img = this.querySelector(".card-img");
            const currentSrc = img ? img.src : '';

            currentAlbum = [
                currentSrc,
                "./imgs/_1140489.jpg",
                "./imgs/_1140504.jpg",
                "./imgs/_1140569.jpg",
                "./imgs/_1140399.jpg"
            ];

            currentIndex = currentAlbum.indexOf(currentSrc);
            if (currentIndex === -1) currentIndex = 0;

            updateModalView();
            modal.style.display = "flex";
        });
    });

    // 3. Aggiorna foto e miniature fluttuanti
    function updateModalView() {
        const src = currentAlbum[currentIndex];
        
        mainImg.style.opacity = "0";
        setTimeout(() => {
            mainImg.src = src;
            mainImg.style.opacity = "1";
        }, 150);

        thumbnailsContainer.innerHTML = '';
        currentAlbum.forEach((thumbSrc, index) => {
            const thumbImg = document.createElement("img");
            thumbImg.src = thumbSrc;
            thumbImg.alt = "Thumbnail " + (index + 1);
            thumbImg.style.cssText = "width:50px; height:38px; object-fit:cover; border-radius:6px; cursor:pointer; opacity:0.4; transition:all 0.2s ease; border:1px solid rgba(255,255,255,0.2);";

            if (index === currentIndex) {
                thumbImg.style.opacity = "1";
                thumbImg.style.borderColor = "#ffffff";
                thumbImg.style.transform = "scale(1.1)";
            }

            thumbImg.addEventListener("click", function() {
                currentIndex = index;
                updateModalView();
            });

            thumbImg.addEventListener("mouseenter", () => { if (index !== currentIndex) thumbImg.style.opacity = "0.8"; });
            thumbImg.addEventListener("mouseleave", () => { if (index !== currentIndex) thumbImg.style.opacity = "0.4"; });

            thumbnailsContainer.appendChild(thumbImg);
        });
    }

    // 4. Navigazione da tastiera
    function nextPhoto() {
        currentIndex = (currentIndex + 1) % currentAlbum.length;
        updateModalView();
    }

    function prevPhoto() {
        currentIndex = (currentIndex - 1 + currentAlbum.length) % currentAlbum.length;
        updateModalView();
    }

    // 5. Chiusura modale
    function closeModal() {
        modal.style.display = "none";
        mainImg.src = "";
    }

    closeBtn.addEventListener("click", closeModal);
    modal.addEventListener("click", (e) => { if (e.target === modal) closeModal(); });

    document.addEventListener("keydown", function(e) {
        if (modal.style.display === "flex") {
            if (e.key === "Escape") {
                closeModal();
            } else if (e.key === "ArrowRight") {
                nextPhoto();
            } else if (e.key === "ArrowLeft") {
                prevPhoto();
            }
        }
    });
});
</script>
// Untuk menghilangkan dan memunculkan komentar
var pesan = document.getElementsByClassName("pesan");
var i;

for (i = 0; i < pesan.length; i++) {
  pesan[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}

//Membuka dan menutup pop up kirim pesan

function openPopup() {
	var popup = document.getElementById("popup");
	popup.className="active"
}

function closePopup() {
	var popup = document.getElementById("popup");
	popup.className="hidden"
}


// Saat di scroll, memunculkan tombol back to top
window.onscroll = function() {hideBtp()};
function hideBtp() {
    if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
        document.getElementById("btp").className = "active";
    }
    else {
        document.getElementById("btp").className = "hidden";
    }
}
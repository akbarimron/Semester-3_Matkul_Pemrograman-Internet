let nilai = 0;

function updateNilai() {
    if (nilai == 18) {
        document.getElementById('nilai1').textContent = "GALUH BUTUT";
    } else {
        document.getElementById('nilai1').textContent = nilai;
    }

}

function tambah() {
	nilai++;
	updateNilai();
}

function kurangi() {
	nilai--;
	updateNilai();
}

function tutup() {
    document.getElementById("popup").classList.remove("show");
    ocument.getElementById("pesannilai").style.display = "block";
  
}

function hasil() {
    document.getElementById("popup").classList.add("show");
    let hasil = nilai * 5;
    document.getElementById("hitung").innerHTML =
    hasil;
    hasil = 0;
}

function buka() {
    document.getElementById("popup2").classList.add("show");
}

function tutup2() {
    document.getElementById("popup2").classList.remove("show");
    document.getElementById("pesannilai").style.display = "block";
}

function konfirmasi() {
    
    let nama = document.getElementById("namauser").value;
    let nilai = document.getElementById("nilaiuser").value;
    document.getElementById("rubahnama").innerHTML = "Hai " + nama + ", nilai kamu " + nilai;
    document.getElementById("pesannilai").style.display = "block";
    if (nilai > 100 || nilai < 0) {
        document.getElementById("alerting").innerHTML = "Nilai harus antara 0-100!";
        return;
    }
    
    if (nilai >= 85) {
        document.getElementById("pesannilai").innerHTML = "Selamat, kamu lulus dengan nilai A!";
        document.getElementById("popup2").classList.remove("show");
    } else  {
        document.getElementById("pesannilai").innerHTML = "nilai kamu jelek belajar sana!.";
        document.getElementById("popup2").classList.remove("show");
    }
     nama = "";
     nilai = "";
}

let tanggal = new Date();
let tgl_hari = tanggal.getDay();
let tgl_bulan = tanggal.getMonth();
let tgl_tahun = tanggal.getFullYear();
let tampil_tanggal = tgl_hari + "/" + tgl_bulan + "/" + tgl_tahun;

document.getElementById("tanggal").innerHTML = tampil_tanggal;

document.getElementById('tambah').onclick = function() {
    // Mendapatkan nilai input
    let namaLengkap = document.getElementById('nama').value;
   

    // Memisahkan nama depan dan belakang
    let namaArray = namaLengkap.split(' ');

    // Mengambil karakter pertama dari nama depan
    let karakterDepan = namaArray[0].charAt(0);

    // Mengambil karakter pertama dari nama belakang
    var namaBelakang = namaArray.slice(1).join(' ');
    let karakterBelakang = namaBelakang.charAt(0);
    
    let asalsekolah = document.getElementById('asal').value;

    let siswabaru = "SB";
    let beasiswa = "BS";
    let kemerdekaan = "KM";
    let tanggal = new Date();
    let tgl_hari = tanggal.getDay();
    let tgl_bulan = tanggal.getMonth();
    let tgl_tahun = tanggal.getFullYear();
    let tampil_sb = siswabaru + tgl_tahun + tgl_bulan + tgl_hari + karakterDepan + karakterBelakang; 
    let tampil_bs = beasiswa + tgl_tahun + tgl_bulan + tgl_hari + karakterDepan + karakterBelakang;
    let tampil_km = kemerdekaan + tgl_tahun + tgl_bulan + tgl_hari + karakterDepan + karakterBelakang;

    document.getElementById('siswa').innerHTML = namaLengkap;
    document.getElementById('asalsekolah').innerHTML = asalsekolah;
    document.getElementById('sb').innerHTML = tampil_sb;
    document.getElementById('bs').innerHTML = tampil_bs;
    document.getElementById('km').innerHTML = tampil_km;
    clear();
}

function clear(){
  document.getElementById('nama').value = "";
  document.getElementById('asal').value = "";
}
var alat=[
    "Buku tulis",
    "pensil",
    "spidol"
];
function tampil(){
    var daftar_barang = document.getElementById("list-data");
    daftar_barang.innerHTML="";
    for(let i=0; i<alat.length; i++){
        var ubah = "<a href='#' onclick='ubah_data("+i+")'>Edit</a>";
        var hapus = "<a href='#' onclick='hapus_data("+i+")'>Hapus</a>";
        daftar_barang.innerHTML += "<li>"+alat[i]+"["+ubah + " | "+ hapus +"]</li>";
    }
}
function tambah_data(){ 
    var tambah = document.querySelector("input[name=data]");
    alat.push(tambah.value);
    tampil();
}
function ubah_data(id){
    var data_baru=prompt("Nama Baru", alat[id]);
    alat[id]=data_baru;
    tampil();
}
function hapus_data(id){
    alat.splice(id, 1);
    tampil();
}
tampil();
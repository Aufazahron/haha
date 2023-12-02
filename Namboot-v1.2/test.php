<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

                <button class="button" onclick="tambahKeKeranjang('Lohe')">Tambah Keranjang</button>
                <ul id="keranjang"></ul>	
</body>
</html>
<script type="text/javascript">
	 var keranjang = {}; 

        function tambahKeKeranjang(namaProduk) {
            if (keranjang[namaProduk]) {
            } 
            else {
                keranjang[namaProduk] = "";
            }
            updateKeranjang();
        }
        function hapusDariKeranjang(namaProduk) {
                if (keranjang[namaProduk] == 0) {
                    delete keranjang[namaProduk];
                
            }

            updateKeranjang();
        }


	function updateKeranjang() {
            var keranjangElem = document.getElementById("keranjang");
            keranjangElem.innerHTML = "";

            for (var namaProduk in keranjang) {
                var jumlah = keranjang[namaProduk];
                keranjangElem.innerHTML += `
                    <li>
                        ${namaProduk} 
                        <button class="hapus" onclick="hapusDariKeranjang('${namaProduk}')">Hapus</button>
                    </li>
                `;
            }
        }
</script>
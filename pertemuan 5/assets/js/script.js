        var items = [
            ['001','Keyboard Logitek',60000,'keyboard yang mantap untuk kantoran','logitek.jpg'],
            ['002','keyboard MSI',30000,'Keyboard gaming MSI mekanik','msi.jpg'],
            ['003','Mouse Genius',50000, 'Mouse Genius biar lebih pinter','genius.jpeg'],
            ['004','Mouse Jerry', 30000, 'Mouse yang disukai kucing','jerry.jpg']
        ]

        for(let i=0; i < items.length; i++){        
            listBarang.innerHTML += `
                <!-- Component Card dari Bootstrap -->
                    <div class="col-4 mt-2">
                        <div class="card" style="width: 18rem;">
                            <img src="assets/${items[i][4]}" class="card-img-top" height="200px" width="200px" alt="...">
                            <div class="card-body">
                                <h5 class="card-title" id="itemName">${items[i][1]}</h5>
                                <p class="card-text" id="itemDesc">${items[i][3]}</p>
                                <p class="card-text">Rp. ${items[i][2]}</p>
                                <a href="#" onclick="tambah()" class="btn btn-primary" id="addCart">Tambahkan ke keranjang</a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            ` 
        }
        

        let addCart = document.getElementById("addcart")
        let no = 1
        let hasil = document.getElementById("hasil")
        function tambah(){
            hasil.innerHTML = no++
        }

        let form = document.getElementById("formItem");
        // let kata = document.getElementById("keyword");
        form.addEventListener("submit", function(event){
            event.preventDefault()

            let kata = document.getElementById("keyword").value;
            console.log(kata);
            if(kata == 'keyboard'){
                listBarang.innerHTML = `
                    <!-- Component Card dari Bootstrap -->
                <div class="col-4 mt-2">
                    <div class="card" style="width: 18rem;">
                        <img src="assets/${items[0][4]}" class="card-img-top" height="200px" width="100px" alt="...">
                        <div class="card-body">
                            <h5 class="card-title" id="itemName">${items[0][1]}</h5>
                            <p class="card-text" id="itemDesc">${items[0][3]}</p>
                            <p class="card-text">Rp ${items[0][2]}</p>
                            <a href="#" class="btn btn-primary" id="addCart">Tambahkan ke keranjang</a>
                        </div>
                    </div>
                </div>
                <div class="col-4 mt-2">
                    <div class="card" style="width: 18rem;">
                        <img src="assets/${items[1][4]}" class="card-img-top" height="200px" width="100px" alt="...">
                        <div class="card-body">
                            <h5 class="card-title" id="itemName">${items[1][1]}</h5>
                            <p class="card-text" id="itemDesc">${items[1][3]}</p>
                            <p class="card-text">Rp ${items[1][2]}</p>
                            <a href="#" class="btn btn-primary" id="addCart">Tambahkan ke keranjang</a>
                        </div>
                    </div>
                </div>
            ` 
            }else if(kata == 'mouse'){
                listBarang.innerHTML = `
                    <!-- Component Card dari Bootstrap -->
                <div class="col-4 mt-2">
                    <div class="card" style="width: 18rem;">
                        <img src="assets/${items[2][4]}" class="card-img-top" height="200px" width="100px" alt="...">
                        <div class="card-body">
                            <h5 class="card-title" id="itemName">${items[2][1]}</h5>
                            <p class="card-text" id="itemDesc">${items[2][3]}</p>
                            <p class="card-text">Rp ${items[2][2]}</p>
                            <a href="#" class="btn btn-primary" id="addCart">Tambahkan ke keranjang</a>
                        </div>
                    </div>
                </div>
                <div class="col-4 mt-2">
                    <div class="card" style="width: 18rem;">
                        <img src="assets/${items[3][4]}" class="card-img-top" height="200px" width="100px" alt="...">
                        <div class="card-body">
                            <h5 class="card-title" id="itemName">${items[3][1]}</h5>
                            <p class="card-text" id="itemDesc">${items[3][3]}</p>
                            <p class="card-text">Rp ${items[3][2]}</p>
                            <a href="#" class="btn btn-primary" id="addCart">Tambahkan ke keranjang</a>
                        </div>
                    </div>
                </div>
            ` 
            }else{
                listBarang
            }
        })

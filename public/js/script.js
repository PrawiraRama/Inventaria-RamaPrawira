var id_update = document.querySelectorAll('#id_admin');
var id = document.getElementById('id_manageadmin');
var nama = document.getElementById('nama');
var jabatan = document.getElementById('jabatan');
    id_update.forEach(edit =>{
        edit.addEventListener('click',function(){
            var id_admin = this.dataset.id;
            console.log(id_admin);
            fetch('http://localhost/Inventaria-RamaPrawira/public/Dashboard/ambildata/' + id_admin)
            .then(response => response.json())
            .then(data => {
                console.log(data);
                id.value = data.id_manageadmin;
                nama.value = data.nama;
                jabatan.value = data.jabatan;
            })
        })
    })
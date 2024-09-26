console.log('____app js');

const baseUrl = window.location.origin;
const apiHeaders = {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
    'Accept': 'application/json',
    'Content-Type': 'application/json'
};

function randomIntFromInterval(min, max) { // min and max included 
    return Math.floor(Math.random() * (max - min + 1) + min);
}

function breakWord(text){
    let array = text.split(' ');
    let len = 2;

    var newtext = '';
    for(var i=0;i<array.length;i++) {
        newtext +=array[i]+' ';
        if (i % len == 0) {
            newtext += '</br>';//or \n\r
        }
    }
    return newtext;
}

function getCookie (name) {
	let value = `; ${document.cookie}`;
	let parts = value.split(`; ${name}=`);
	if (parts.length === 2) return parts.pop().split(';').shift();
}

$("#logout-btn").on('click', function(e) {
    e.preventDefault(); // Mencegah perilaku default dari tombol

    let url = baseUrl+'/api/user/logout';
    let token = getCookie('ut');

    if (!token) {
        Swal.fire({
            position: "center",
            icon: "error",
            title: "Error",
            html: "Token tidak ditemukan. Silakan login kembali.",
            showConfirmButton: false,
            timer: 3000
        });
        return;
    }

    axios.post(url, {}, {
        headers: {
            'Authorization': 'Bearer ' + token,
            'Accept': 'application/json',
            'Content-Type': 'application/json'
        }
    })
    .then(function (response) {
        console.log('[DATA] response..', response.data);
        document.cookie = 'ue=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
        document.cookie = 'ut=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
        localStorage.removeItem('auth_token'); // Hapus token dari localStorage juga
        Swal.fire({
            position: "center",
            icon: "success",
            title: "Logout berhasil",
            showConfirmButton: false,
            timer: 1500
        });
        setTimeout(function() {
            updateUserMenu();
            window.location.reload();
        }, 1500);
    })
    .catch(function (error) {
        console.log('[ERROR] response..', error);
        Swal.fire({
            position: "center",
            icon: "error",
            title: "Gagal logout",
            html: error.response ? error.response.data.message : error.message,
            showConfirmButton: false,
            timer: 3000
        });
    });
});

function updateUserMenu() {
    const userEmail = getCookie('ue');
    if (userEmail) {
        const shortenedEmail = userEmail.length > 10 ? userEmail.substring(0, 10) + '...' : userEmail;
        $('#user-menu').html(`
            <li><a href="${baseUrl}/my-profile">${shortenedEmail}</a></li>
            <li><a href="#" id="logout-btn">Logout</a></li>
        `);
    } else {
        $('#user-menu').html(`
            <li><a href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a></li>
            <li><a href="#" data-bs-toggle="modal" data-bs-target="#registerModal">Register</a></li>
        `);
    }
}

function getCookie(name) {
    let value = `; ${document.cookie}`;
    let parts = value.split(`; ${name}=`);
    if (parts.length === 2) return parts.pop().split(';').shift();
}

function ucwords(str) {
    return str.toLowerCase().replace(/\b[a-z]/g, function(letter) {
        return letter.toUpperCase();
    });
}

// Panggil updateUserMenu saat halaman dimuat
document.addEventListener('DOMContentLoaded', updateUserMenu);

$("#form-login-btn").on('click', function(e) {
    const form = document.getElementById('form-login');
    form.reportValidity() 
    if (!form.checkValidity()) {
    } else {
        $('#form-login-error').html('');
        $('#form-login-loading').show();
        $('#form-login').hide();
        let url = baseUrl+'/api/user/login';
        let formData  = new FormData(form);

        axios.post(url, formData, apiHeaders)
        .then(function (response) {
            console.log('[DATA] response..', response.data);
            document.cookie = 'ue='+formData.get('email');
            document.cookie = 'ut='+response.data.token;
            localStorage.setItem('auth_token', response.data.token); // Simpan token
            Swal.fire({
                position: "center",
                icon: "success",
                title: "Login successfully!",
                showConfirmButton: false,
                timer: 1500
            });
            setTimeout(function() {
                window.location=baseUrl
            }, 1500)
        })
        .catch(function (error) {
            console.log('[ERROR] response..',error);
            $('#form-login-error').html(error.response?error.response.data.message:error.message);
            $('#form-login-loading').hide();
            $('#form-login').show();
        });
    }
});

$("#form-register-btn").on('click', function(e) {
    const form = document.getElementById('form-register');
    form.reportValidity() 
    if (!form.checkValidity()) {
    } else {
        $('#form-register-error').html('');
        $('#form-register-loading').show();
        $('#form-register').hide();
        let url = baseUrl+'/api/user/register';
        let formData  = new FormData(form);

        axios.post(url, formData, apiHeaders)
        .then(function (response) {
            console.log('[DATA] response..',response.data);
            document.cookie = 'ue='+formData.get('email');
            document.cookie = 'ut='+response.data.token;
            Swal.fire({
                position: "center",
                icon: "success",
                title: "Registered successfully and logged in automatically",
                showConfirmButton: false,
                timer: 1500
            });
            setTimeout(function() {
                window.location=baseUrl
            }, 1500)
        })
        .catch(function (error) {
            console.log('[ERROR] response..',error);
            $('#form-register-error').html(error.message);
            $('#form-register-loading').hide();
            $('#form-register').show();
        });
    }
});

document.addEventListener('DOMContentLoaded', function () {
    document.querySelector('form').addEventListener('submit', function (event) {
        var tenncc = document.querySelector('input[name="tenncc"]').value;
        var tenncc_error = document.getElementById('tenncc_error');

        var diachincc = document.querySelector('input[name="diachincc"]').value;
        var diachincc_error = document.getElementById('diachincc_error');

        var sdtncc = document.querySelector('input[name="sdtncc"]').value;
        var sdtncc_error = document.getElementById('sdtncc_error');

        tenncc_error.innerHTML = ''; // Đặt lại nội dung của thông báo lỗi
        diachincc_error.innerHTML = '';
        sdtncc_error.innerHTML = '';

        if (tenncc.trim() === '') {
            tenncc_error.innerHTML = 'Tên NCC không được để trống';
            event.preventDefault(); // Ngăn chặn biểu mẫu gửi đi nếu có lỗi
        }
        else if (tenncc.length < 5) {
            tenncc_error.innerHTML = 'Tên NCC không được < 5';
            event.preventDefault();
        }
        else if (diachincc.trim() === '') {
            diachincc_error.innerHTML = 'Địa chỉ NCC không được để trống';
            event.preventDefault(); // Ngăn chặn biểu mẫu gửi đi nếu có lỗi
        }
        else if (sdtncc.trim() === '') {
            sdtncc_error.innerHTML = 'Địa chỉ NCC không được để trống';
            event.preventDefault(); // Ngăn chặn biểu mẫu gửi đi nếu có lỗi
        }
        else if (isNaN(sdtncc)) {
            sdtncc_error.innerHTML = 'SĐT NCC phải là số';
            event.preventDefault(); // Ngăn chặn biểu mẫu gửi đi nếu có lỗi
        }
        
    })


});


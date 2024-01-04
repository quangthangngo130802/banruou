document.addEventListener('DOMContentLoaded', function () {
    document.querySelector('form').addEventListener('submit', function (event) {
        var tensp = document.querySelector('input[name="tensp"]').value;
        var tensp_error = document.getElementById('tensp_error');

        var maloai = document.querySelector('select[name="maloai"]').value;
        var maloai_error = document.getElementById('maloai_error');

        var machatlieu = document.querySelector('select[name="machatlieu"]').value;
        var machatlieu_error = document.getElementById('machatlieu_error');

        var mancc = document.querySelector('select[name="mancc"]').value;
        var mancc_error = document.getElementById('mancc_error');

        var dongianhap = document.querySelector('input[name="dongianhap"]').value;
        var dongianhap_error = document.getElementById('dongianhap_error');

        var dongiaban = document.querySelector('input[name="dongiaban"]').value;
        var dongiaban_error = document.getElementById('dongiaban_error');

        var soluong = document.querySelector('input[name="soluong"]').value;
        var soluong_error = document.getElementById('soluong_error');

        tensp_error.innerHTML = ''; // Đặt lại nội dung của thông báo lỗi
        maloai_error.innerHTML = '';
        machatlieu_error.innerHTML = '';
        mancc_error.innerHTML = '';
        dongianhap_error.innerHTML = '';
        dongiaban_error.innerHTML = '';
        soluong_error.innerHTML = '';

        if (tensp.trim() === '') {
            tensp_error.innerHTML = 'Tên SP không được để trống';
            event.preventDefault(); // Ngăn chặn biểu mẫu gửi đi nếu có lỗi
        }
        else if (tensp.length < 5) {
            tensp_error.innerHTML = 'Tên SP không được < 5';
            event.preventDefault();
        }
        else if (maloai.trim() === '') {
            maloai_error.innerHTML = 'Loại sản phẩm không được để trống';
            event.preventDefault(); // Ngăn chặn biểu mẫu gửi đi nếu có lỗi
        }
        else if (machatlieu.trim() === '') {
            machatlieu_error.innerHTML = 'Chất liệu không được để trống';
            event.preventDefault(); // Ngăn chặn biểu mẫu gửi đi nếu có lỗi
        }
        else if (mancc.trim() === '') {
            mancc_error.innerHTML = 'NCC không được để trống';
            event.preventDefault(); // Ngăn chặn biểu mẫu gửi đi nếu có lỗi
        }
        else if (isNaN(dongianhap)) {
            dongianhap_error.innerHTML = 'Giá nhập phải là số';
            event.preventDefault(); // Ngăn chặn biểu mẫu gửi đi nếu có lỗi
        }
        else if (isNaN(dongiaban)) {
            dongiaban_error.innerHTML = 'Giá bán phải là số';
            event.preventDefault(); // Ngăn chặn biểu mẫu gửi đi nếu có lỗi
        }
        else if (isNaN(soluong)) {
            soluong_error.innerHTML = 'Số lượng phải là số';
            event.preventDefault(); // Ngăn chặn biểu mẫu gửi đi nếu có lỗi
        }
        
    })


});


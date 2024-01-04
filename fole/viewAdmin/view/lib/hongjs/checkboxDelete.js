$(document).ready(function() {
    // Mảng để lưu trữ ID của sản phẩm đã chọn
    var selectedProductIds = [];

    // Lắng nghe sự kiện thay đổi trạng thái của các checkbox
    $('input[type="checkbox"]').change(function() {
        var productId = $(this).val();

        if (this.checked) {
            // Nếu checkbox được chọn, thêm ID vào mảng
            selectedProductIds.push(productId);
        } else {
            // Nếu checkbox bị bỏ chọn, loại bỏ ID khỏi mảng
            var index = selectedProductIds.indexOf(productId);
            if (index !== -1) {
                selectedProductIds.splice(index, 1);
            }
        }
    });

    // Lắng nghe sự kiện click trên nút "Xóa Sản Phẩm"
    $('#delete-button').click(function() {
        // Kiểm tra xem có sản phẩm nào được chọn không
       
        if (selectedProductIds.length > 0) {
            // Gửi yêu cầu xóa sản phẩm đến máy chủ bằng Ajax
            $.ajax({
               
                type: 'POST',
                url: 'Shared/sanpham/delete.php',
                data: { product_ids: selectedProductIds },
                success: function(response) {
                   
                   location.reload();
                //     alert("Xóa thành cong");
                    
                    // Xử lý phản hồi từ máy chủ (có thể cập nhật giao diện người dùng)
                    // if (response === "success") {
                    //     // Xóa sản phẩm khỏi DOM
                    //     selectedProductIds.forEach(function(productId) {
                    //         // Tìm và xóa sản phẩm trong DOM dựa trên ID
                    //         $('input[type="checkbox"][value="' + productId + '"]').closest('.product').remove();
                    //     });
                        
                    // }
                },
                error: function() {
                    // Xử lý lỗi (nếu có)
                    alert('Vui lòng chọn ít nhất một sản phẩm để xóa.');
                }
            });
        } else {
            alert('Vui lòng chọn ít nhất một sản phẩm để xóa.');
        }
    });

    $('#deletencc-button').click(function() {
        // Kiểm tra xem có sản phẩm nào được chọn không
       
        if (selectedProductIds.length > 0) {
            // Gửi yêu cầu xóa sản phẩm đến máy chủ bằng Ajax
            $.ajax({
               
                type: 'POST',
                url: 'Shared/nhacungcap/delete.php',
                data: { product_ids: selectedProductIds },
                success: function(response) {
                   
                   location.reload();
                //     alert("Xóa thành cong");
                    
                    // Xử lý phản hồi từ máy chủ (có thể cập nhật giao diện người dùng)
                    // if (response === "success") {
                    //     // Xóa sản phẩm khỏi DOM
                    //     selectedProductIds.forEach(function(productId) {
                    //         // Tìm và xóa sản phẩm trong DOM dựa trên ID
                    //         $('input[type="checkbox"][value="' + productId + '"]').closest('.product').remove();
                    //     });
                        
                    // }
                },
                error: function() {
                    // Xử lý lỗi (nếu có)
                    alert('Vui lòng chọn ít nhất một sản phẩm để xóa.');
                }
            });
        } else {
            alert('Vui lòng chọn ít nhất một sản phẩm để xóa.');
        }
    });
});
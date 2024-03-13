// Hàm thêm biến thể mới
// function addVariant() {
//     var variantsContainer = document.getElementById('variantsContainer');
//     var newVariant = document.querySelector('.variant').cloneNode(true);
//     variantsContainer.appendChild(newVariant);
// }

// function removeVariant(button) {
//     // Tìm phần tử cha (div.variant) của nút đã được nhấn
//     var variantDiv = button.closest('.variant');
    
//     // Kiểm tra nếu có phần tử cha, sau đó xóa nó
//     if (variantDiv) {
//       variantDiv.remove();
//     }
//   }

var displayQuantity = document.getElementById("displayQuantity");
displayQuantity.innerText = '1';
document.addEventListener('click', function(event) {
    var target = event.target;

    // Kiểm tra xem có phải là nút tăng hoặc giảm không
    if (target.classList.contains('increase') || target.classList.contains('decrease')) {
        // Tìm đến phần tử cha có class 'quantity-container'
        var container = target.closest('.quantity-container');

        // Lấy ô nhập số lượng bên trong container
        var inputElement = container.querySelector('.quantitybtn');
        var displayQuantity = document.getElementById("displayQuantity");
        var currentValue = parseInt(inputElement.value);

        // Xử lý tăng hoặc giảm giá trị
        if (target.classList.contains('increase')) {
            inputElement.value = currentValue + 1;
        } else {
            // Đảm bảo giá trị không nhỏ hơn 1
            if (currentValue > 1) {
                inputElement.value = currentValue - 1;
            }
        }
        displayQuantity.innerText = inputElement.value;
        document.getElementById("amount-hd").value = inputElement.value;
    }
});
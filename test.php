<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color and Size Selection</title>
    <style>
        /* Thêm CSS để tùy chỉnh giao diện nếu cần */
        .color, .size {
            margin-bottom: 20px;
        }
        .chose_color, .chose_size {
            display: flex;
            gap: 5px;
        }
        .chose_color div, .chose_size div {
            width: 30px;
            height: 30px;
            border: 1px solid #000;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="color">
        <span>Chọn loại màu: </span>
        <strong id="selectedColor">Green</strong>
        <div class="chose_color" id="colorButtonsContainer"></div>
    </div>
    
    <div class="size">
        <span>Chọn size: </span>
        <strong id="selectedSize">L</strong>
        <div class="chose_size" id="sizeButtonsContainer"></div>
    </div>

    <script >
document.addEventListener("DOMContentLoaded", function() {

                    
    const colorData = ["Green", "Blue", "Red", "Yellow"];
    const sizeData = ["L", "M", "XL"];

    const colorContainer = document.getElementById("colorButtonsContainer");
    const sizeContainer = document.getElementById("sizeButtonsContainer");

    function createButtons(container, data, selectedElement, clickCallback) {
        data.forEach(function(item) {
            const button = document.createElement("button");
            button.innerText = item;
            button.addEventListener("click", function() {
                // Xóa lớp 'selected' từ tất cả các button trong container
                container.querySelectorAll("button").forEach(function(btn) {
                    btn.classList.remove("selected");
                });

                // Thêm lớp 'selected' cho button được click
                button.classList.add("selected");

                selectedElement.innerText = item;
                clickCallback(item);
            });
            container.appendChild(button);
        });
    }

    createButtons(colorContainer, colorData, document.getElementById("selectedColor"), function(selectedColor) {
        // Xử lý khi chọn màu
        console.log("Selected color: " + selectedColor);
    });

    createButtons(sizeContainer, sizeData, document.getElementById("selectedSize"), function(selectedSize) {
        // Xử lý khi chọn size
        console.log("Selected size: " + selectedSize);
    });
});


    </script>
    <form method="post" action="test.php">
        <div class="pay_method">
            <input type="radio" name="bill_pttt" value="Trả tiền khi nhận hàng">
            <label>Trả tiền khi nhận hàng</label>
    
            <input type="radio" name="bill_pttt" value="Chuyển khoản ngân hàng">
            <label>Chuyển khoản ngân hàng</label>
    
            <input type="radio" name="bill_pttt" value="Thanh toán online">
            <label>Thanh toán online</label>
    
            <input type="submit" name="submit" value="Xác nhận">
        </div>
    </form>
    <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['bill_pttt'])) {
        $selectedPaymentMethod = $_POST['bill_pttt'];

        // Xử lý dữ liệu ở đây, ví dụ:
        echo 'Phương thức thanh toán đã chọn: ' . $selectedPaymentMethod;
    }
}
?>

</body>
</html>
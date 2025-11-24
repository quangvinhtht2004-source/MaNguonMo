<?php
// Cho phép Frontend truy cập (CORS)
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=utf-8');

// Giả lập dữ liệu từ Database
$books = [
    [
        "id" => 1,
        "title" => "Nhà Giả Kim",
        "author" => "Paulo Coelho",
        "price" => "79.000 đ",
        "image" => "https://images.unsplash.com/photo-1544947950-fa07a98d237f?q=80&w=400&auto=format&fit=crop"
    ],
    [
        "id" => 2,
        "title" => "Đắc Nhân Tâm",
        "author" => "Dale Carnegie",
        "price" => "86.000 đ",
        "image" => "https://images.unsplash.com/photo-1589829085413-56de8ae18c73?q=80&w=400&auto=format&fit=crop"
    ],
    [
        "id" => 3,
        "title" => "Code Dạo Ký Sự",
        "author" => "Phạm Huy Hoàng",
        "price" => "110.000 đ",
        "image" => "https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=400&auto=format&fit=crop"
    ]
];

// Trả về dữ liệu JSON
echo json_encode([
    "status" => "success",
    "message" => "Kết nối Backend thành công!",
    "data" => $books
]);
?>
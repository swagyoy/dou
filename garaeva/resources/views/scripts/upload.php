<?php

if(!is_dir('../../uploads')){
    mkdir('../../uploads', 0777, true);
}

if($_FILES['image']){
    $file = $_FILES['image'];
    $allowdtypes = ['image/png', 'image/jpeg'];

    if(in_array($file['type'], $allowdtypes)){
        $filename = uniqid() . '-' . basename($file['name']);
        $uploadpath = '../../uploads/' . $filename;

        if(move_uploaded_file($file['tmp_name'], $uploadpath)){
            list($width, $height) = getimagesize($uploadpath);

            $info = "файл: $filename\nширина: $width px\nвысота: $height px\n\n";
            file_put_contents('image_info.txt', $info, FILE_APPEND);

            echo "<h1>изображение загружено</h1>";
            echo "<p><strong>Размеры: </strong></p>";
            echo "<ul>
                    <li>Ширина: $width</li>
                    <li>Высота: $height</li>
                 </ul>";
            echo "<img src='$uploadpath' alt='uploaded image'>";
        }
        else{
            echo "ошибка загрузки файла";
        }
    }
    else{
        echo "ошибка: недопустимый формат";
    }
}
else{
    echo "файл не был загружен";
}

?>
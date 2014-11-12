<?php

class ReturnMethod {
    
    // สูตรการผลิตคือ กระดาษ 200, กาว 2 หน่วย ผลิตได้ 1 เล่ม
    function createBook($paper, $rubber) {
        $totalBook = 0;
        
        while (($rubber > 1) && ($paper > 199)) {
            $totalBook++;   // ผลิตได้ 1 เล่มละ
            $rubber -= 2;
            $paper -= 200;
        }
        
        // ส่งคืนจำนวนที่ผลิตได้
        return $totalBook;
    }
}

$factory = new ReturnMethod();
echo $factory->createBook(1000, 9);
?>

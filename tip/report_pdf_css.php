<?php

// โหลดคลาสต่าง ๆ ที่ต้องใช้งาน
include_once '../MPDF56/mpdf.php';
include_once '../ch02/db.php';
include_once '../workshop/connect.php';

// สร้าง object
$pdf = new mPDF();

// กำหนดให้รองรับภาษาไทยได้
$pdf->SetAutoFont();

// กำหนดรูปแบบ CSS
$pdf->WriteHTML('
    <style>
        .cell_header {
            border-bottom: #000000 1px solid;
            font-size: 14px;
            padding: 5px;
            background-color: #f9f8f7;
        }
        .cell {
            font-size: 14px;
            padding: 5px;
            border-bottom: #cccccc 1px solid;
        }
    </style>
');

// เขียนหัวตาราง
$pdf->WriteHTML('<b>รายงานหนังสือ ในระบบ</b>');
$pdf->WriteHTML('<table width="100%">');
$pdf->WriteHTML('
    <tr>
        <td class="cell_header">รายการหนังสือ</td>
        <td class="cell_header">ราคา</td>
        <td class="cell_header">วันที่บันทึก</td>
    </tr>
');

// ดึงข้อมูลมาเก็บใน $rs
$rs = $db->findAll('product')->execute();

// loop เพื่อเขียนข้อมูลออกมา
while ($r = mysql_fetch_array($rs)) {
    $pdf->WriteHTML("
        <tr>
            <td class='cell'>$r[name]</td>
            <td class='cell'>$r[price]</td>
            <td class='cell'>$r[created_date]</td>
        </tr>
    ");
}

// ปิดตาราง
$pdf->WriteHTML('</table>');

// แสดงเอกสาร PDF ออกทาง Browser
$pdf->Output();
?>

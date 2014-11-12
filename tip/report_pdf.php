<?php

// โหลดคลาสต่าง ๆ ที่ต้องใช้งาน
include_once '../MPDF56/mpdf.php';
include_once '../ch02/db.php';
include_once '../workshop/connect.php';

// สร้าง object
$pdf = new mPDF();

// กำหนดให้รองรับภาษาไทยได้
$pdf->SetAutoFont();

// เขียนหัวตาราง
$pdf->WriteHTML('<table>');
$pdf->WriteHTML('
    <tr>
        <td>รายการหนังสือ</td>
        <td>ราคา</td>
        <td>วันที่บันทึก</td>
    </tr>
');

// ดึงข้อมูลมาเก็บใน $rs
$rs = $db->findAll('product')->execute();

// loop เพื่อเขียนข้อมูลออกมา
while ($r = mysql_fetch_array($rs)) {
    $pdf->WriteHTML("
        <tr>
            <td>$r[name]</td>
            <td>$r[price]</td>
            <td>$r[created_date]</td>
        </tr>
    ");
}

// ปิดตาราง
$pdf->WriteHTML('</table>');

// แสดงเอกสาร PDF ออกทาง Browser
$pdf->Output();
?>

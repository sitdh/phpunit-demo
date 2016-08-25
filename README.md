# Adder สำหรับทดสอบ PHPUnit
![phpunit-demo](https://travis-ci.org/sitdh/phpunit-demo.svg?branch=master)

## ความต้องการ
1. PHP ในเครื่องคอมพิวเตอร์ ที่สามารถเรียกใช้งานได้ผ่าน command line  

## โครงสร้าง
- ``Adder.php``: คลาสที่ต้องการทดสอบ
- ``AdderTest.php``: บรรจุกรณีทดสอบเบื้องสำหรับ PHPUnit ไว้
- ``PHPUnit.phar``: ไฟล์บรรจุคำสั่งและข้อมูลที่จำเป็นในการเรียกใช้งาน PHPUnit

## วิธีใช้งาน
- หลังจากแตกไฟล์ที่ดาวน์โหลดเสร็จเรียบร้อยแล้ว ให้ เปิด Command prompt สำหรับ Windows หรือ Terminal สำหรับ Linux หรือ OS X  
- ทดสอบการเรียกใช้งาน PHPUnit ด้วยคำสั่ง
```bash
$ ./phpunit.phar --version
```
- หลังจากนั้นเรียกใช้คลาสทดสอบด้วยคำสั่งด้านล่าง ซึ่งจะนำกรณีทดสอบที่เขียนไว้ภายในคลาสทดสอบมาใช้งาน
```bash
$ ./phpunit.phar AdderTest --verbose
PHPUnit 5.5.0 by Sebastian Bergmann and contributors.

Runtime:       PHP 7.1.0beta1

...                                                     3 / 3 (100%)

Time: 72 ms, Memory: 8.00MB

OK (3 tests, 4 assertions)
```


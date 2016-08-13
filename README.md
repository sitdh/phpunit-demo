# Docker-local-web-dev-phpunit
1. ขอขอบคุณ ผู้ใหญ่ใจดี พี่แชมป์สำหรับสอนการใช้ phpunit
2. thank for this article http://tech.osteel.me/posts/2015/12/18/from-vagrant-to-docker-how-to-use-docker-for-local-web-development.html

- หลังจากแตกไฟล์ที่ดาวน์โหลดเสร็จเรียบร้อยแล้ว ให้ เปิด Command prompt สำหรับ Windows หรือ Terminal สำหรับ Linux หรือ OS X แล้วไปยังโฟลเดอร์ที่เก็บ docker-compose.yml

## ความต้องการ
1. Docker for Mac หรือ Windows

## โครงสร้างสำหรับ PHPUnit
- ``Adder.php``: คลาสที่ต้องการทดสอบ
- ``AdderTest.php``: บรรจุกรณีทดสอบเบื้องสำหรับ PHPUnit ไว้
- ``PHPUnit.phar``: ไฟล์บรรจุคำสั่งและข้อมูลที่จำเป็นในการเรียกใช้งาน PHPUnit

--------------------

<h1>การติดตั้ง  environment บน Docker</h1>

พิมพ์  
<pre>docker-compose up -d</pre>

สำหรับ Windows พิมพ์
<pre>docker-compose build
docker-compose up -d</pre>


---------------------

ให้พิมพ์
<pre>docker ps</pre>

จำ CONTAINER ID ของ IMAGE php (CONTAINER ตัวที่ 2)

จากนั้นพิมพ์
<pre>docker exec -it <CONTAINER ID สามตัวแรก> /bin/bash</pre>

เช่น CONTAINER ID เป็น da8234fee7d0
ก็จะเป็น
<pre>docker exec -it da8 /bin/bash</pre>
--------------------- 

<h1>การเรียกใช้งาน PHPUnit</h1>

พิมพ์
<pre>./phpunit.phar AdderTest --verbose</pre>

ผลลัพธ์ที่ได้
<pre>PHPUnit 5.5.0 by Sebastian Bergmann and contributors.

Runtime:       PHP 7.1.0beta1

...                                                     3 / 3 (100%)

Time: 72 ms, Memory: 8.00MB

OK (3 tests, 4 assertions)</pre>

---------------------



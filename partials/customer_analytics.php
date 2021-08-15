<?php
/*
 * Created on Sun Aug 15 2021
 *
 * https://martdev.info
 * martdevelopers254@gmail.com
 * +254 740 847 563 / +254 737 229 776 
 *
 * The MIT License (MIT)
 * Copyright (c) 2021 MartDevelopers Inc
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software
 * and associated documentation files (the "Software"), to deal in the Software without restriction,
 * including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense,
 * and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so,
 * subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial
 * portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED
 * TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
 * TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

/* Pets */
$customer_id = $_SESSION['login_customer_id'];

$query = "SELECT COUNT(*)  FROM `customer_pets` WHERE customer_pet_customer_id = '$customer_id' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($my_pets);
$stmt->fetch();
$stmt->close();

/* Pets Ailments */
$query = "SELECT COUNT(*)  FROM `ailment` ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($pet_ailments);
$stmt->fetch();
$stmt->close();

/* Pets Clinic Visits*/
$query = "SELECT COUNT(*) FROM clinic_visit cv 
INNER JOIN customer_pets cp ON cp.customer_pet_id = cv.visit_customer_pet_id
INNER JOIN pets p ON p.pet_id = cp.customer_pet_pet_id
INNER JOIN customer c ON c.customer_id = cp.customer_pet_customer_id
INNER JOIN pets_categories pc ON pc.category_id = p.pet_category_id
INNER JOIN specialist s ON s.specialist_id = cv.visit_specialist_id 
WHERE c.customer_id = '$customer_id' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($clininc_visits);
$stmt->fetch();
$stmt->close();

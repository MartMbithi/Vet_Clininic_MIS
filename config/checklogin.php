<?php
/*
 * Created on Sun Aug 15 2021
 *
 *  https://martdev.info
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


/*
	* Register Check Login Functions Here
	* Pass Session Variables 
*/

function admin()
{
	/* Admin Check Login */
	if ((strlen($_SESSION['login_rank']) == 0) && strlen($_SESSION['login_admin_id']) == 0) {
		$host = $_SERVER['HTTP_HOST'];
		$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra = "../index";
		$_SESSION["login_rak"] = "";
		$_SESSION["login_admin_id"] = "";
		header("Location: http://$host$uri/$extra");
	}
}

function specialist()
{
	/* Specialist Check Login */
	if ((strlen($_SESSION['login_rank']) == 0) && strlen($_SESSION['login_admin_id']) == 0) {
		$host = $_SERVER['HTTP_HOST'];
		$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra = "../index";
		$_SESSION["login_rank"] = "";
		$_SESSION["login_specialist_id"] = "";
		header("Location: http://$host$uri/$extra");
	}
}

function customer()
{
	/* Customer Check Login */
	if ((strlen($_SESSION['login_rank']) == 0) && strlen($_SESSION['login_customer_id']) == 0) {
		$host = $_SERVER['HTTP_HOST'];
		$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra = "../index";
		$_SESSION["login_customer_id"] = "";
		$_SESSION["login_rank"] = "";
		header("Location: http://$host$uri/$extra");
	}
}

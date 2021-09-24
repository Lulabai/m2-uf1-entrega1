<?php
$conn=new mysqli("localhost", "root", "", "musica");
$conn->query("SET NAMES 'UTF8'");
if (!$conn)
{
	die("Connection failed");
}

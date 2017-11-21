<?php  if ( ! defined("BASEPATH")) exit("No direct script access allowed");
function generate_sidemenu()
{
	return 
	'

	<li>
	<a href="'.site_url('makanan').'">
	<i class="fa fa-list fa-user "></i> Daftar Makanan</a>
	</li>

	<li>
	<a href="'.site_url('minum').'">
	<i class="fa fa-list fa-user"></i> Daftar Minuman</a>
	</li>



	<li>
	<a href="'.site_url('customer').'">
	<i class="fa fa-list fa-user"></i> Daftar Pesanan</a>
	</li>

	<li>
	<a href="'.site_url('admin').'">
	<i class="fa fa-list fa-user"></i> Daftar Admin</a>
	</li>

	<li>
	<a href="'.site_url('member').'">
	<i class="fa fa-list fa-user"></i> Daftar Member</a>
	</li>


	'


	;

}

function generate_sidemenu2()
{
	return '<li>
	<a href="'.site_url('home').'">
	<i class="fa fa-list fa-user"></i> Home</a>
	</li>';}
